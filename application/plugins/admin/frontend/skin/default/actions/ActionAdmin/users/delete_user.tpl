{**
 * Удаление пользователя
 *}

{extends file="{$aTemplatePathPlugin.admin}layouts/layout.base.tpl"}

{block name='layout_content_actionbar'}
	<a href="{router page='admin/users/profile'}{$oUser->getId()}" class="button">{$aLang.plugin.admin.users.deleteuser.back_to_profile}</a>
{/block}


{block name='layout_page_title'}
	{$aLang.plugin.admin.users.deleteuser.title} #{$oUser->getId()} (<span>{$oUser->getLogin()|escape:'html'}</span>, {$oUser->getMail()|escape})
{/block}


{block name='layout_content'}
	<form action="{router page='admin/users/deleteuser'}" method="post" enctype="application/x-www-form-urlencoded">
		{include file="{$aTemplatePathPlugin.admin}forms/fields/form.field.hidden.security_key.tpl"}
		{include file="{$aTemplatePathPlugin.admin}forms/fields/form.field.hidden.tpl" sFieldName='user_id' sFieldValue=$oUser->getId()}

		<div class="info mb-20">
			{$aLang.plugin.admin.users.deleteuser.delete_user_info}
		</div>

		{include file="{$aTemplatePathPlugin.admin}forms/fields/form.field.checkbox.tpl"
			sFieldLabel=$aLang.plugin.admin.users.deleteuser.delete_user_itself
			sFieldName='delete_user'
			sFieldValue=1
			bFieldChecked=true
		}

		{* Кнопки *}
		{include file="{$aTemplatePathPlugin.admin}forms/fields/form.field.button.tpl" sFieldName='submit_delete_user_contents' sFieldStyle='primary js-question' sFieldText=$aLang.plugin.admin.delete}
	</form>
{/block}