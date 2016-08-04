{**
 * Редактирование дополнительного поля
 *
 * @param array  $aPropertyType Список типов полей
 * @param object $oProperty     Поле
 *}

{extends file="{$aTemplatePathPlugin.admin}layouts/layout.base.tpl"}

{block name='layout_content_actionbar'}
	<a href="{router page="admin/properties/{$sPropertyTargetType}"}" class="button">&larr; Назад к списку полей</a>
{/block}

{block name='layout_page_title'}Редактирование поля для типа &laquo;{$aPropertyTargetParams.name}&raquo;{/block}

{block name='layout_content'}
	<form method="post">
		{include file="{$aTemplatePathPlugin.admin}forms/fields/form.field.hidden.security_key.tpl"}

		{* Тип поля *}
		{$aPropertyType = [
			[ 'value' => 'int',        'text' => 'Целое число' ],
			[ 'value' => 'float',      'text' => 'Дробное число' ],
			[ 'value' => 'varchar',    'text' => 'Строка' ],
			[ 'value' => 'text',       'text' => 'Текст' ],
			[ 'value' => 'checkbox',   'text' => 'Чекбокс' ],
			[ 'value' => 'date',       'text' => 'Дата' ],
			[ 'value' => 'select',     'text' => 'Выпадающий список' ],
			[ 'value' => 'tags',       'text' => 'Теги' ],
			[ 'value' => 'video_link', 'text' => 'Ссылка на видео' ],
			[ 'value' => 'file',		'text' => 'Файл' ],
			[ 'value' => 'image',		'text' => 'Изображение' ]
		]}

		{include file="{$aTemplatePathPlugin.admin}forms/fields/form.field.select.tpl"
				 sFieldName          = 'property[type]'
				 sFieldLabel         = 'Тип поля'
				 sFieldClasses       = 'width-200'
				 aFieldItems         = $aPropertyType
				 bFieldIsDisabled    = true
				 sFieldSelectedValue = $oProperty->getTypeTitle()}

		{* Название *}
		{include file="{$aTemplatePathPlugin.admin}forms/fields/form.field.text.tpl"
				 sFieldName  = 'property[title]'
				 sFieldValue = $oProperty->getTitle()
				 sFieldLabel = 'Название'}

		{* Название *}
		{include file="{$aTemplatePathPlugin.admin}forms/fields/form.field.text.tpl"
			sFieldName  = 'property[description]'
			sFieldValue = $oProperty->getDescription()
			sFieldLabel = 'Краткое описание'}

		{* Код *}
		{include file="{$aTemplatePathPlugin.admin}forms/fields/form.field.text.tpl"
				 sFieldName  = 'property[code]'
				 sFieldValue = $oProperty->getCode()
				 sFieldLabel = 'Код'}
		
		{* Дополнительные параметры для каждого типа *}
		{include file="{$aTemplatePathPlugin.admin}actions/ActionAdmin/property/types/type.{$oProperty->getType()}.tpl" 
				 oPropertyValidateRules = $oProperty->getValidateRulesEscape()
				 oPropertyParams        = $oProperty->getParamsEscape()}

		{* Кнопки *}
		{include file="{$aTemplatePathPlugin.admin}forms/fields/form.field.button.tpl"
				 sFieldName  = 'property_update_submit'
				 sFieldText  = $aLang.plugin.admin.save
				 sFieldValue = '1'
				 sFieldStyle = 'primary'}
	</form>
{/block}