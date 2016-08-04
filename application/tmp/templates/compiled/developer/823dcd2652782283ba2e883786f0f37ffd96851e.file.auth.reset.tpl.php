<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:47:33
         compiled from "D:\xampp\htdocs\ls_alfa\application\frontend\components\auth\auth.reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:824057a05e255f0a13-45687898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '823dcd2652782283ba2e883786f0f37ffd96851e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\components\\auth\\auth.reset.tpl',
      1 => 1469787453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '824057a05e255f0a13-45687898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a05e25600b60_21575756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a05e25600b60_21575756')) {function content_57a05e25600b60_21575756($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<form action="<?php echo smarty_function_router(array('page'=>'auth'),$_smarty_tpl);?>
password-reset/" method="post" class="js-form-validate js-auth-reset-form">
    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'email','label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['reset']['form']['fields']['mail']['label']),$_smarty_tpl);?>


    <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_reset','mods'=>'primary','text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['reset']['form']['fields']['submit']['text']),$_smarty_tpl);?>

</form><?php }} ?>