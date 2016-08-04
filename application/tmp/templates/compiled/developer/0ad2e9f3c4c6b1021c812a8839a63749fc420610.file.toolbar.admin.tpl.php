<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:37
         compiled from "D:\xampp\htdocs\ls_alfa\application\frontend\components\admin\toolbar.admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2194257a056a9f10138-49486888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ad2e9f3c4c6b1021c812a8839a63749fc420610' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\components\\admin\\toolbar.admin.tpl',
      1 => 1469787452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2194257a056a9f10138-49486888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056a9f20617_64393776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056a9f20617_64393776')) {function content_57a056a9f20617_64393776($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_lang')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
    <?php ob_start();?><?php echo smarty_function_router(array('_default_short'=>'admin'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'admin.title'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar','template'=>'item','buttons'=>array(array('url'=>$_tmp1,'attributes'=>array('title'=>$_tmp2),'icon'=>'cog')),'mods'=>'admin'),$_smarty_tpl);?>

<?php }?><?php }} ?>