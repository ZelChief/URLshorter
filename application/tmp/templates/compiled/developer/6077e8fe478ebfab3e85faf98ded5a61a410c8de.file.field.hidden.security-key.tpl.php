<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:46
         compiled from "D:\xampp\htdocs\ls_alfa\framework\frontend\components\field\field.hidden.security-key.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1683857a056b2ec1011-27249267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6077e8fe478ebfab3e85faf98ded5a61a410c8de' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\framework\\frontend\\components\\field\\field.hidden.security-key.tpl',
      1 => 1469787441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1683857a056b2ec1011-27249267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056b2ec5fa8_38190143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056b2ec5fa8_38190143')) {function content_57a056b2ec5fa8_38190143($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden','name'=>'security_ls_key','value'=>$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value),$_smarty_tpl);?>
<?php }} ?>