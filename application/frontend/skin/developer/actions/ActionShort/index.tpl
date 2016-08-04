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
            <input type="text" name="link_short">
            <input type="submit" name="submit_short" value="GET LINK!">
        </form>
        Href: {$iHrefShort}
        <a href={$iHrefShort}></a>
    </div>
{/block}