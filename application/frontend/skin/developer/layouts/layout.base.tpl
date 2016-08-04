{**
 * Основной лэйаут
 *
 * @param string  $layoutNavContent         Название навигации
 * @param string  $layoutNavContentPath     Кастомный путь до навигации контента
 * @param string  $layoutShowSystemMessages Кастомный путь до навигации контента
 *}

{extends 'Component@layout.layout'}

{block 'layout_head_styles' append}
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
{/block}

{block 'layout_head' append}
    <script>
        ls.lang.load({json var = $aLangJs});
        ls.registry.set({json var = $aVarsJs});
    </script>
    <style>
        .b1{
            background: #2E9AFE; /* Цвет фона */
            color: #fff; /* Цвет текста */
            padding: 10px; /* Поля вокруг текста */
            border-radius: 5px; /* Уголки */
        }
        .text1{
            width: 60%; /* Ширина блока */
            padding: 10px;
            border-radius: 5px;
        }
        .text-short{
            width: 20%;
        }
    </style>
    {**
     * Тип сетки сайта
     *}
    {if {Config::Get('view.grid.type')} == 'fluid'}
        <style>
            .grid-role-userbar,
            .grid-role-nav .nav--main,
            .grid-role-header .jumbotron-inner,
            .grid-role-container {
                min-width: {Config::Get('view.grid.fluid_min_width')};
                max-width: {Config::Get('view.grid.fluid_max_width')};
            }
        </style>
    {else}
        <style>
            .grid-role-userbar,
            .grid-role-nav .nav--main,
            .grid-role-header .jumbotron-inner,
            .grid-role-container { width: {Config::Get('view.grid.fixed_width')}; }
        </style>
    {/if}
{/block}

{block 'layout_body'}
    {**
     * Юзербар
     *}
    {component 'userbar'}



    {**
     * Шапка
     *}
    {if Config::Get( 'view.layout_show_banner' )}
        {component 'jumbotron'
            title    = Config::Get('view.name')
            subtitle = Config::Get('view.description')
            titleUrl = {router page='/'}
            classes  = 'grid-role-header'}
    {/if}
    {**
     * Основной контэйнер
     *}
    <div id="container" class="grid-row grid-role-container {hook run='container_class'} {if ! $layoutSidebarBlocksShow}no-sidebar{/if}">
        {* Вспомогательный контейнер-обертка *}
        <div class="grid-row grid-role-wrapper" class="{hook run='wrapper_class'}">
            {**
             * Контент
             *}
            <div class="grid-col grid-col-8 grid-role-content"
                 role="main"
                 {if $sMenuItemSelect == 'profile'}itemscope itemtype="http://data-vocabulary.org/Person"{/if}>

                {hook run='content_begin'}

                {* Основной заголовок страницы *}
                {block 'layout_page_title' hide}
                    <h2 class="page-header">
                        {$smarty.block.child}
                    </h2>
                {/block}

                {block 'layout_content_header'}

                    {* Системные сообщения *}
                    {if $layoutShowSystemMessages}
                        {if $aMsgError}
                            {component 'alert' text=$aMsgError mods='error' close=true}
                        {/if}

                        {if $aMsgNotice}
                            {component 'alert' text=$aMsgNotice close=true}
                        {/if}
                    {/if}
                {/block}

                {block 'layout_content'}{/block}

                {hook run='content_end'}
            </div>

            {**
             * Сайдбар
             * Показываем сайдбар
             *}
            {if $layoutSidebarBlocksShow}
                <aside class="grid-col grid-col-4 grid-role-sidebar" role="complementary">
                    {$layoutSidebarBlocks}
                </aside>
            {/if}
        </div> {* /wrapper *}


        {* Подвал *}
        <footer class="grid-row grid-role-footer">
            {block 'layout_footer'}
                {hook run='footer_begin'}
                {hook run='copyright'}
                {hook run='footer_end'}
            {/block}
        </footer>
    </div> {* /container *}


    {* Подключение модальных окон *}
    {if $oUserCurrent}
        {component 'tags-favourite' template='modal'}
    {else}
        {component 'auth' template='modal'}
    {/if}


    {**
     * Тулбар
     * Добавление кнопок в тулбар
     *}
    {add_block group='toolbar' name='component@admin.toolbar.admin' priority=100}
    {add_block group='toolbar' name='component@toolbar-scrollup.toolbar.scrollup' priority=-100}

    {* Подключение тулбара *}
    {component 'toolbar' classes='js-toolbar-default' items={include 'blocks.tpl' group='toolbar'}}
{/block}