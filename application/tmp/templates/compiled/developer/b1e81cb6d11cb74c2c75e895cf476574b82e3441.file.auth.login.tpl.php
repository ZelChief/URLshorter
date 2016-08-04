<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:47:33
         compiled from "D:\xampp\htdocs\ls_alfa\application\frontend\components\auth\auth.login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:975257a05e254bc802-72711618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1e81cb6d11cb74c2c75e895cf476574b82e3441' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\components\\auth\\auth.login.tpl',
      1 => 1469787453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '975257a05e254bc802-72711618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH_WEB_CURRENT' => 0,
    'aLang' => 0,
    'redirectUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a05e2550d466_04275070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a05e2550d466_04275070')) {function content_57a05e2550d466_04275070($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_router')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['redirectUrl'] = new Smarty_variable((($tmp = @(isset($_smarty_tpl->tpl_vars_local['redirectUrl']) ? $_smarty_tpl->tpl_vars_local['redirectUrl']->value : null))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['PATH_WEB_CURRENT']->value : $tmp), null, 0);?>

<?php echo smarty_function_hook(array('run'=>'login_begin'),$_smarty_tpl);?>


<form action="<?php echo smarty_function_router(array('page'=>'auth/login'),$_smarty_tpl);?>
" method="post" class="js-form-validate js-auth-login-form">
    <?php echo smarty_function_hook(array('run'=>'form_login_begin'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'login','rules'=>array('required'=>true,'length'=>'[2,20]'),'label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['login']['form']['fields']['login']['label']),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'password','type'=>'password','rules'=>array('required'=>true,'length'=>'[2,20]'),'label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['labels']['password']),$_smarty_tpl);?>


    
    <?php if (Config::Get('general.login.captcha')){?>
        <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'captcha','type'=>Config::Get('sys.captcha.type'),'name'=>'captcha','captchaName'=>'user_auth','label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['labels']['captcha']),$_smarty_tpl);?>

    <?php }?>

    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','name'=>'remember','label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['login']['form']['fields']['remember']['label'],'checked'=>true),$_smarty_tpl);?>


    <?php echo smarty_function_hook(array('run'=>'form_login_end'),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['redirectUrl']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden','name'=>'return-path','value'=>$_smarty_tpl->tpl_vars['redirectUrl']->value),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_login','mods'=>'primary','text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['login']['form']['fields']['submit']['text']),$_smarty_tpl);?>

</form>

<?php if ((isset($_smarty_tpl->tpl_vars_local['showExtra']) ? $_smarty_tpl->tpl_vars_local['showExtra']->value : null)){?>
    <div class="pt-20">
        <a href="<?php echo smarty_function_router(array('page'=>'auth/register'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['auth']['registration']['title'];?>
</a><br />
        <a href="<?php echo smarty_function_router(array('page'=>'auth/password-reset'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['auth']['reset']['title'];?>
</a>
    </div>
<?php }?>

<?php echo smarty_function_hook(array('run'=>'login_end'),$_smarty_tpl);?>
<?php }} ?>