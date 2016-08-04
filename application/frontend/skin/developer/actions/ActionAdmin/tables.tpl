{**
 * Плагины
 *
 * @param array $plugins Список плагинов
 *}

{extends 'layouts/layout.admin.tpl'}

{block 'layout_admin_page_title'}
    {lang 'admin.items.tables'}
{/block}

{block 'layout_content'}
    {include 'navs/nav.tables.tpl'}
    {component 'admin' template='tables' table=$table}
{/block}