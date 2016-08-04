{**
 * Главная
 *
 * @parama array $topics
 * @parama array $paging
 *}

{extends 'layouts/layout.base.tpl'}

{block 'layout_options' append}
    {$sNav = 'topics'}
{/block}

{block 'layout_content'}
    <div class="content-shorter">
        <form action="" method="post">
            <input class="text1" type="text" name="link_short">
            <input class="b1" type="submit" name="submit_short" value="Получить ссылку">
        </form>
        <input class="text-short" type="text" readonly value="{$iHrefShort}" onclick="this.select()">
    </div>
{/block}