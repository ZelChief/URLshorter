{**
 * 
 *}

{extends 'Component@user-list-add.user-list-add'}

{block 'user_list_add_list'}
    {include './participants-list.tpl'
        hideableEmptyAlert = true
        users              = $smarty.local.users
        showActions        = true
        show               = !! $smarty.local.users
        classes            = "js-$component-users"
        itemClasses        = "js-$component-user"}
{/block}