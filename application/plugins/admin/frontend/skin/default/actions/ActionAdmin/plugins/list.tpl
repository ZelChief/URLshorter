{**
 * Список плагинов
 *}

{extends file="{$aTemplatePathPlugin.admin}layouts/layout.base.tpl"}

{block name='layout_page_title'}
	{$aLang.plugin.admin.plugins.list.titles[$sType]} <span>({count($aPluginsInfo.collection)})</span>
{/block}


{block name='layout_content_actionbar'}
	<div class="fl-r">
		<a class="button {if $sType==null}active{/if}"
		   href="{router page='admin/plugins/list'}">{$aLang.plugin.admin.plugins.menu.filter.all} ({$aPluginsInfo.count_all})</a>

		<a class="button {if $sType=='activated'}active{/if}"
		   href="{router page='admin/plugins/list'}activated">{$aLang.plugin.admin.plugins.menu.filter.activated} ({$aPluginsInfo.count_active})</a>

		<a class="button {if $sType=='deactivated'}active{/if}"
		   href="{router page='admin/plugins/list'}deactivated">{$aLang.plugin.admin.plugins.menu.filter.deactivated} ({$aPluginsInfo.count_inactive})</a>

		<a class="button {if $sType=='updates'}active{/if}"
		   href="{router page='admin/plugins/list'}updates">{$aLang.plugin.admin.plugins.menu.filter.updates} ({$iPluginUpdates})</a>
	</div>
	<a class="button button-primary" href="{router page='admin/plugins/install'}">{$aLang.plugin.admin.plugins.menu.install_plugin}</a>
{/block}


{block name='layout_content'}
	{if $aPluginsInfo.collection and count($aPluginsInfo.collection) > 0}
		<table class="table table-plugins">
			<tbody>
				{foreach from=$aPluginsInfo.collection item=oPlugin}
					{include file="{$aTemplatePathPlugin.admin}actions/ActionAdmin/plugins/plugin.tpl"}
				{/foreach}
			</tbody>
		</table>
	{else}
		{include file="{$aTemplatePathPlugin.admin}alert.tpl" mAlerts=$aLang.plugin.admin.plugins.no_plugins[$sType] sAlertStyle='empty'}
	{/if}
{/block}