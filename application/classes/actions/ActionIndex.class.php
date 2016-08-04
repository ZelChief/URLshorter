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
 * Обработка главной страницы, т.е. УРЛа вида /index/
 *
 * @package application.actions
 * @since 1.0
 */
class ActionIndex extends Action
{
    /**
     * Главное меню
     *
     * @var string
     */
    protected $sMenuHeadItemSelect = 'blog';
    /**
     * Меню
     *
     * @var string
     */
    protected $sMenuItemSelect = 'index';
    /**
     * Субменю
     *
     * @var string
     */
    protected $sMenuSubItemSelect = 'good';
    /**
     * Число новых топиков
     *
     * @var int
     */
    protected $iCountTopicsNew = 0;
    /**
     * Число новых топиков в коллективных блогах
     *
     * @var int
     */
    protected $iCountTopicsCollectiveNew = 0;
    /**
     * Число новых топиков в персональных блогах
     *
     * @var int
     */
    protected $iCountTopicsPersonalNew = 0;
    /**
     * URL-префикс для навигации по топикам
     *
     * @var string
     */
    protected $sNavTopicsSubUrl = '';

    /**
     * Инициализация
     *
     */
    public function Init()
    {
        if ($this->User_IsAuthorization()) {
            return Router::Action('short');
        }
        $this->sNavTopicsSubUrl = Router::GetPath('index');
    }

    /**
     * Регистрация евентов
     *
     */
    protected function RegisterEvent()
    {
        $this->AddEventPreg('/^(page([1-9]\d{0,5}))?$/i', 'EventIndex');
    }


    /**********************************************************************************
     ************************ РЕАЛИЗАЦИЯ ЭКШЕНА ***************************************
     **********************************************************************************
     */

    /**
     * Вывод рейтинговых топиков
     */

    protected function EventIndex()
    {
        $this->Viewer_SetHtmlRssAlternate(Router::GetPath('rss') . 'index/', Config::Get('view.name'));
        /**
         * Меню
         */
        $this->sMenuSubItemSelect = 'good';
        /**
         * Передан ли номер страницы
         */
        $iPage = $this->GetEventMatch(2) ? $this->GetEventMatch(2) : 1;
        /**
         * Устанавливаем основной URL для поисковиков
         */
        if ($iPage == 1) {
            $this->Viewer_SetHtmlCanonical(Router::GetPath('/'));
        }
        /**
         * Получаем список топиков
         */
        $aResult = $this->Topic_GetTopicsGood($iPage, Config::Get('module.topic.per_page'));
        $aTopics = $aResult['collection'];
        /**
         * Вызов хуков
         */
        $this->Hook_Run('topics_list_show', array('aTopics' => &$aTopics));
        /**
         * Формируем постраничность
         */
        $aPaging = $this->Viewer_MakePaging($aResult['count'], $iPage, Config::Get('module.topic.per_page'),
            Config::Get('pagination.pages.count'), Router::GetPath('index'));
        /**
         * Загружаем переменные в шаблон
         */
        $this->Viewer_Assign('topics', $aTopics);
        $this->Viewer_Assign('paging', $aPaging);
        /**
         * Устанавливаем шаблон вывода
         */
        $this->SetTemplateAction('index');
    }

    /**
     * При завершении экшена загружаем переменные в шаблон
     *
     */
    public function EventShutdown()
    {
        $this->Viewer_Assign('sMenuHeadItemSelect', $this->sMenuHeadItemSelect);
        $this->Viewer_Assign('sMenuItemSelect', $this->sMenuItemSelect);
        $this->Viewer_Assign('sMenuSubItemSelect', $this->sMenuSubItemSelect);
        $this->Viewer_Assign('iCountTopicsNew', $this->iCountTopicsNew);
        $this->Viewer_Assign('iCountTopicsCollectiveNew', $this->iCountTopicsCollectiveNew);
        $this->Viewer_Assign('iCountTopicsPersonalNew', $this->iCountTopicsPersonalNew);
        $this->Viewer_Assign('iCountTopicsSubNew', $this->iCountTopicsNew);
        $this->Viewer_Assign('sNavTopicsSubUrl', $this->sNavTopicsSubUrl);
    }
}