<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:46
         compiled from "D:\xampp\htdocs\ls_alfa\application\frontend\components\user\settings\account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1713457a056b2db0696-19022285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6e4a75c8aa2436bb960cf36097bbdf8926273b0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\components\\user\\settings\\account.tpl',
      1 => 1469787452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1713457a056b2db0696-19022285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056b2ddf939_22033543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056b2ddf939_22033543')) {function content_57a056b2ddf939_22033543($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_lang')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['user']) ? $_smarty_tpl->tpl_vars_local['user']->value : null), null, 0);?>

<?php echo smarty_function_hook(array('run'=>'settings_account_begin'),$_smarty_tpl);?>


<form method="post" enctype="multipart/form-data" class="js-form-validate">
	<?php echo smarty_function_hook(array('run'=>'form_settings_account_begin'),$_smarty_tpl);?>


	<fieldset>
		<legend><?php echo smarty_function_lang(array('name'=>'user.settings.account.account'),$_smarty_tpl);?>
</legend>

        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.settings.account.fields.email.note'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'email','value'=>htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->getMail(), ENT_QUOTES, 'UTF-8', true),'note'=>$_tmp1),$_smarty_tpl);?>

	</fieldset>


	<fieldset>
		<legend><?php echo smarty_function_lang(array('name'=>'user.settings.account.password'),$_smarty_tpl);?>
</legend>

		<p class="text-info"><?php echo smarty_function_lang(array('name'=>'user.settings.account.password_note'),$_smarty_tpl);?>
</p>

        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.settings.account.fields.password.label'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'password_now','type'=>'password','inputClasses'=>'width-200','label'=>$_tmp2),$_smarty_tpl);?>


        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.settings.account.fields.password_new.label'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'password','rules'=>array('length'=>'[5,20]'),'type'=>'password','inputClasses'=>'width-200 js-user-settings-password','label'=>$_tmp3),$_smarty_tpl);?>


        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.settings.account.fields.password_confirm.label'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'password_confirm','rules'=>array('length'=>'[5,20]','equalto'=>'.js-user-settings-password'),'type'=>'password','inputClasses'=>'width-200','label'=>$_tmp4),$_smarty_tpl);?>

	</fieldset>


	<?php echo smarty_function_hook(array('run'=>'form_settings_account_end'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden.security-key'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_account_edit','mods'=>'primary','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['save']),$_smarty_tpl);?>

</form>

<?php echo smarty_function_hook(array('run'=>'settings_account_end'),$_smarty_tpl);?>
<?php }} ?>