{extends 'Component@email.email'}

{block name='content'}
	На вас, <a href="{$oUserTarget->getUserWebPath()}">{$oUserTarget->getDisplayName()}</a>, поступила жалоба.
	<br>
	<br>
	<b>Реакция:</b> {$sText}<br/>
{/block}