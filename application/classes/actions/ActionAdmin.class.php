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
 * Экшен обработки УРЛа вида /admin/
 *
 * @package application.actions
 * @since 1.0
 */
require_once("Shorter.class.php");

class ActionAdmin extends Action
{
    /**
     * Текущий пользователь
     *
     * @var ModuleUser_EntityUser|null
     */
    protected $oUserCurrent = null;
    /**
     * Главное меню
     *
     * @var string
     */
    protected $sMenuHeadItemSelect = 'admin';
    protected $sMenuSubItemSelect = 'others';
    private $link = '';
    /**
     * Инициализация
     *
     * @return string
     */
    public function Init()
    {

        $this->link = mysqli_connect(Config::Get('db.params.host'),
                                     Config::Get('db.params.user'),
                                     Config::Get('db.params.pass'),
                                     Config::Get('db.params.dbname'));
        if (!$this->link)
        {
            echo('Error: Cannot connect to the DB');
        }
        /**
         * Если нет прав доступа - перекидываем на 404 страницу
         */
        if (!$this->User_IsAuthorization() or !$oUserCurrent = $this->User_GetUserCurrent() or !$oUserCurrent->isAdministrator()) {
            return parent::EventNotFound();
        }
        $this->SetDefaultEvent('index');

        $this->oUserCurrent = $oUserCurrent;
    }

    /**
     * Регистрация евентов
     */
    protected function RegisterEvent()
    {
        $this->AddEvent('index', 'EventIndex');
        $this->AddEvent('plugins', 'EventPlugins');
        $this->AddEvent('domen1', 'EventDomen1');
        $this->AddEvent('domen2', 'EventDomen2');
        $this->AddEvent('domen3', 'EventDomen3');
        $this->AddEvent('domen4', 'EventDomen4');
        $this->AddEvent('domen5', 'EventDomen5');
        $this->AddEvent('domen6', 'EventDomen6');
        $this->AddEvent('others', 'EventOthers');
    }


    /**********************************************************************************
     ************************ РЕАЛИЗАЦИЯ ЭКШЕНА ***************************************
     **********************************************************************************
     */

    /**
     * Отображение главной страницы админки
     */
    protected function EventIndex()
    {
        /**
         * Определяем доступность установки расширенной админ-панели
         */
        $aPluginsAll = func_list_plugins(true);
        if (in_array('admin', $aPluginsAll)) {
            $this->Viewer_Assign('availableAdminPlugin', true);
        }
    }

    /**
     * Страница со списком плагинов
     *
     */
    protected function EventPlugins()
    {
        $this->sMenuHeadItemSelect = 'plugins';
        /**
         * Получаем название плагина и действие
         */
        if ($sPlugin = getRequestStr('plugin', null, 'get') and $sAction = getRequestStr('action', null, 'get')) {
            return $this->SubmitManagePlugin($sPlugin, $sAction);
        }
        /**
         * Получаем список блогов
         */
        $aPlugins = $this->PluginManager_GetPluginsItems(array('order' => 'name'));
        /**
         * Загружаем переменные в шаблон
         */
        $this->Viewer_Assign('plugins', $aPlugins);
        $this->Viewer_AddHtmlTitle($this->Lang_Get('admin.plugins.title'));
        /**
         * Устанавливаем шаблон вывода
         */
        $this->SetTemplateAction('plugins');
    }
    protected function CreateTable($currentDomen){
        $id = 0;
        $table = '<table border="1">';
        $table .= '<tr><td>id</td><td>' . $this->Lang_Get('tables.cols.col1') .
            '</td><td>' . $this->Lang_Get('tables.cols.col2') .
            '</td><td>' . $this->Lang_Get('tables.cols.col3') .
            '</td><td>' . $this->Lang_Get('tables.cols.col4') .
            '</td><td>' . $this->Lang_Get('tables.cols.col5') . '</td></tr>';
        $sql_request = 'SELECT * FROM links';
        $result = mysqli_query($this->link,$sql_request);
        while ($r = mysqli_fetch_array($result)) {
            if($r['domen'] == $currentDomen) {
                $table .= '<tr>';
                $table .= '<form action="" method="post"><td>' . $r['id'] .
                    '</td><td><input type="text" name="link" value="' . $r['link'] .
                    '"></td><td><input type="label" name="short" value="' . Config::Get('path.root.web') . '/' . $r['code'] .
                    '" readonly></td><td>' . $r['date'] .
                    '</td><td>' . $r['counter'] .
                    '</td><td><input type="submit" value="'. $this->Lang_Get('tables.button') .'"></td></form>';
                $table .= '</tr>';
                $id++;
            }
        }
        $table .= '</table>';
        mysqli_close($this->link);
        return $table;
    }

    protected function update($newlink, $code){
        $shorter = new Shorter();
        $domen = $shorter->GetDomen($newlink);
        $path = parse_url($code, PHP_URL_PATH);
        $code = explode("/", $path)[1 + Config::Get('path.offset_request_url')];
        mysqli_query($this->link,"UPDATE links SET link='$newlink' WHERE code='$code'");
        mysqli_query($this->link,"UPDATE links SET domen='$domen' WHERE code='$code'");
    }

    protected function EventDomen1()
    {
        if(!empty($_REQUEST["link"]) and !empty($_REQUEST['short'])) {
            $newlink = $_REQUEST['link'];
            $code = $_REQUEST['short'];
            $this->update($newlink,$code);
        }
        $table = $this->CreateTable('bmstu.net');
        $this->Viewer_Assign('table', $table);
        $this->sMenuSubItemSelect = 'domen1';
        $this->SetTemplateAction('tables');
    }
    protected function EventDomen2()
    {
        if(!empty($_REQUEST["link"]) and !empty($_REQUEST['short'])) {
            $newlink = $_REQUEST['link'];
            $code = $_REQUEST['short'];
            $this->update($newlink,$code);
        }
        $table = $this->CreateTable('bmstu.wiki');
        $this->Viewer_Assign('table', $table);
        $this->sMenuSubItemSelect = 'domen2';
        $this->SetTemplateAction('tables');
    }
    protected function EventDomen3()
    {
        if(!empty($_REQUEST["link"]) and !empty($_REQUEST['short'])) {
            $newlink = $_REQUEST['link'];
            $code = $_REQUEST['short'];
            $this->update($newlink,$code);
        }
        $table = $this->CreateTable('bmstu.online');
        $this->Viewer_Assign('table', $table);
        $this->sMenuSubItemSelect = 'domen3';
        $this->SetTemplateAction('tables');
    }
    protected function EventDomen4()
    {
        if(!empty($_REQUEST["link"]) and !empty($_REQUEST['short'])) {
            $newlink = $_REQUEST['link'];
            $code = $_REQUEST['short'];
            $this->update($newlink,$code);
        }
        $table = $this->CreateTable('bmstu.co');
        $this->Viewer_Assign('table', $table);
        $this->sMenuSubItemSelect = 'domen4';
        $this->SetTemplateAction('tables');
    }
    protected function EventDomen5()
    {
        if(!empty($_REQUEST["link"]) and !empty($_REQUEST['short'])) {
            $newlink = $_REQUEST['link'];
            $code = $_REQUEST['short'];
            $this->update($newlink,$code);
        }
        $table = $this->CreateTable('bmstu.ru');
        $this->Viewer_Assign('table', $table);
        $this->sMenuSubItemSelect = 'domen5';
        $this->SetTemplateAction('tables');
    }
    protected function EventDomen6()
    {
        if(!empty($_REQUEST["link"]) and !empty($_REQUEST['short'])) {
            $newlink = $_REQUEST['link'];
            $code = $_REQUEST['short'];
            $this->update($newlink,$code);
        }
        $table = $this->CreateTable('bmstu.cloud');
        $this->Viewer_Assign('table', $table);
        $this->sMenuSubItemSelect = 'domen6';
        $this->SetTemplateAction('tables');
    }
    protected function EventOthers()
    {
        if(!empty($_REQUEST["link"]) and !empty($_REQUEST['short'])) {
            $newlink = $_REQUEST['link'];
            $code = $_REQUEST['short'];
            $this->update($newlink,$code);
        }
        $table = $this->CreateTable('others');
        $this->Viewer_Assign('table', $table);
        $this->sMenuSubItemSelect = 'domen7';
        $this->SetTemplateAction('tables');
    }



    /**
     * Активация\деактивация плагина
     *
     * @param string $sPlugin Имя плагина
     * @param string $sAction Действие
     */
    protected function SubmitManagePlugin($sPlugin, $sAction)
    {
        $this->Security_ValidateSendForm();
        if (!in_array($sAction, array('activate', 'deactivate', 'remove', 'apply_update'))) {
            $this->Message_AddError($this->Lang_Get('admin.plugins.notices.unknown_action'), $this->Lang_Get('common.error.error'),
                true);
            Router::Location(Router::GetPath('admin/plugins'));
        }
        $bResult = false;
        /**
         * Активируем\деактивируем плагин
         */
        if ($sAction == 'activate') {
            $bResult = $this->PluginManager_ActivatePlugin($sPlugin);
        } elseif ($sAction == 'deactivate') {
            $bResult = $this->PluginManager_DeactivatePlugin($sPlugin);
        } elseif ($sAction == 'remove') {
            $bResult = $this->PluginManager_RemovePlugin($sPlugin);
        } elseif ($sAction == 'apply_update') {
            $this->PluginManager_ApplyPluginUpdate($sPlugin);
            $bResult = true;
        }
        if ($bResult) {
            $this->Message_AddNotice($this->Lang_Get('admin.plugins.notices.action_ok'), $this->Lang_Get('common.attention'),
                true);
        } else {
            if (!($aMessages = $this->Message_GetErrorSession()) or !count($aMessages)) {
                $this->Message_AddErrorSingle($this->Lang_Get('common.error.system.base'), $this->Lang_Get('common.error.error'), true);
            }
        }
        /**
         * Возвращаем на страницу управления плагинами
         */
        Router::Location(Router::GetPath('admin') . 'plugins/');
    }

    /**
     * Выполняется при завершении работы экшена
     *
     */
    public function EventShutdown()
    {
        /**
         * Загружаем в шаблон необходимые переменные
         */
        $this->Viewer_Assign('sMenuHeadItemSelect', $this->sMenuHeadItemSelect);
    }
}