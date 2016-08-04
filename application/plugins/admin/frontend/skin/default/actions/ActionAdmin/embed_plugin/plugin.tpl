{**
 * Управление своей страницей настроек для плагина (интеграция интерфейса плагина в админку)
 *}

{extends file="{$aTemplatePathPlugin.admin}layouts/layout.base.tpl"}

{block name='layout_head_end' append}
	<script>
		ls.registry.set('sAdminUrl', {json var=$oAdminUrl->get()});
	</script>
{/block}


{block name='layout_page_title'}
	{* todo: lang *}
	Управление плагином "<span title="{$oAdminUrl->getPluginCode()}">{$oAdminUrl->getPluginName()}</span>"
{/block}


{block name='layout_content'}
	{if $sAdminTemplateInclude}
		{include file=$sAdminTemplateInclude}
	{/if}
{/block}