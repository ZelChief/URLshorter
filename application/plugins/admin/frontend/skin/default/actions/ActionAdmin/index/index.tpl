{**
 * Главная страница
 *}

{extends file="{$aTemplatePathPlugin.admin}layouts/layout.base.tpl"}


{block name='layout_content_actionbar'}
	{include file="{$aTemplatePathPlugin.admin}misc/stats.brief.tpl"}
{/block}


{block name='layout_content'}
	{**
	 * График
	 *}
	{include file="{$aTemplatePathPlugin.admin}charts/graph.tpl"
		sGraphTitle             = $aLang.plugin.admin.index.title
		aStats                  = $aDataStats
		sName                   = $aLang.plugin.admin.graph.graph_type.$sCurrentGraphType
		sUrl                    = "{router page='admin'}"
		bShowGraphTypeSelect    = true
		bShowCustomPeriodFields = true
	}
	{**
	 * Блоки
	 *}
	<div class="home-blocks clearfix">
		{include file="{$aTemplatePathPlugin.admin}blocks/block.home.activity.tpl"}
		{include file="{$aTemplatePathPlugin.admin}blocks/block.home.stats.tpl"}
	</div>


	{**
	 * Данные о последнем входе пользователя в админку
	 *}
	{if $aLastVisitData and $aLastVisitData.date}
		{include file="{$aTemplatePathPlugin.admin}alert.tpl" mAlerts="{$aLang.plugin.admin.hello.last_visit} {date_format date=$aLastVisitData.date format="j F Y в H:i"}"}
	{/if}
{/block}