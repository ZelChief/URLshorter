{**
 * Админка
 *
 * @param boolean $availableAdminPlugin
 *}

{extends 'layouts/layout.base.tpl'}

{block 'layout_page_title'}
    {lang 'admin.title'}
{/block}

{block 'layout_content'}
    {component 'nav'
        name  = 'admin'
        mods  = 'stacked pills'
        items = [
            [ 'name' => 'plugins',  'url' => "{router page='admin'}plugins/", 'text' => {lang 'admin.items.plugins'} ],
            [ 'name' => 'tables', 'url' => "{router page='admin'}others/", 'text' => {lang 'admin.items.tables'}],
            [ 'name' => 'invite', 'url' => "{router page='settings'}invite/", 'text' => {lang 'admin.items.invite'}]
        ]}
{/block}