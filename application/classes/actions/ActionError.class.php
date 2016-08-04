<?php
/*
 * LiveStreet CMS
 * Copyright © 2013 OOO "ЛС-СОФТ"
 *
 * ------------------------------------------------------
 *
 * Official site: www.livestreetcms.com
 * Contact e-mail: office@livestreetcms.com
 *
 * GNU General Public License, version 2:
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * ------------------------------------------------------
 *
 * @link http://www.livestreetcms.com
 * @copyright 2013 OOO "ЛС-СОФТ"
 * @author Maxim Mzhelskiy <rus.engine@gmail.com>
 *
 */

/**
 * Экшен обработки УРЛа вида /error/ т.е. ошибок
 *
 * @package application.actions
 * @since 1.0
 */
class ActionError extends Action
{
    /**
     * Список специфических HTTP ошибок для которых необходимо отдавать header
     *
     * @var array
     */
    protected $aHttpErrors = array(
        '404' => array(
            'header' => '404 Not Found',
        ),
        '403' => array(
            'header' => '403 Forbidden',
        ),
        '500' => array(
            'header' => '500 Internal Server Error',
        ),
    );

    /**
     * Инициализация экшена
     *
     */
    public function Init()
    {
        /**
         * Устанавливаем дефолтный евент
         */
        $this->SetDefaultEvent('index');
        /**
         * Запрешаем отображать статистику выполнения
         */
        Router::SetIsShowStats(false);
    }

    /**
     * Регистрируем евенты
     *
     */
    protected function RegisterEvent()
    {
        $this->AddEvent('index', 'EventError');
        $this->AddEventPreg('/^\d{3}$/i', 'EventError');
    }

    /**
     * Вывод ошибки
     *
     */
    protected function EventError()
    {
            $url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            $path = parse_url($url, PHP_URL_PATH);
            $thelink = "";
            $code = explode("/", $path)[1 + Config::Get('path.offset_request_url')];
            $link = mysqli_connect(Config::Get('db.params.host'), Config::Get('db.params.user'), Config::Get('db.params.pass'), Config::Get('db.params.dbname'));
            if (!$link) echo('Cannot connect to the DB!');
            else {

                if ($stmt = mysqli_prepare($link, "SELECT link from links WHERE code =?")) {
                    mysqli_stmt_bind_param($stmt, "s", $code);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $thelink);
                    mysqli_stmt_fetch($stmt);
                    mysqli_stmt_close($stmt);
                }
                    mysqli_query($link,"UPDATE links SET counter=counter+1 WHERE code='$code'");
                mysqli_close($link);

            }
            if ($thelink) {
                header("Location: " . $thelink);
            } else {
                /**
                 * Если евент равен одной из ошибок из $aHttpErrors, то шлем браузеру специфичный header
                 * Например, для 404 в хидере будет послан браузеру заголовок HTTP/1.1 404 Not Found
                 */
                if (array_key_exists($this->sCurrentEvent, $this->aHttpErrors)) {
                    /**
                     * Смотрим есть ли сообщения об ошибках
                     */
                    if (!$this->Message_GetError()) {
                        $this->Message_AddErrorSingle($this->Lang_Get('common.error.system.code.' . $this->sCurrentEvent),
                            $this->sCurrentEvent);
                    }
                    $aHttpError = $this->aHttpErrors[$this->sCurrentEvent];
                    if (isset($aHttpError['header'])) {
                        $sProtocol = isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.1';
                        header("{$sProtocol} {$aHttpError['header']}");
                    }
                }
                /**
                 * Устанавливаем title страницы
                 */
                $this->Viewer_AddHtmlTitle($this->Lang_Get('common.error.error'));
                $this->SetTemplateAction('index');
            }
    }
}