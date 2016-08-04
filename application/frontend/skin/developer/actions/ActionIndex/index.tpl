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
    <div class="content-welcome">
        <div class="content-disc">
            {$aLang.index_welcome}
        </div>
        <div class="content-check">
        </div>
    </div>
{/block}