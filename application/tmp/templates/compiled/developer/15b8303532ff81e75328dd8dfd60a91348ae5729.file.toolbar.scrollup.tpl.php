<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:38
         compiled from "D:\xampp\htdocs\ls_alfa\application\frontend\components\toolbar-scrollup\toolbar.scrollup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1313957a056aa09d703-91662694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15b8303532ff81e75328dd8dfd60a91348ae5729' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\components\\toolbar-scrollup\\toolbar.scrollup.tpl',
      1 => 1469787452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1313957a056aa09d703-91662694',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056aa0a9086_49961662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056aa0a9086_49961662')) {function content_57a056aa0a9086_49961662($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'toolbar.scrollup.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar','template'=>'item','classes'=>'toolbar-item--scrollup js-toolbar-scrollup','attributes'=>array('style'=>'display: none'),'buttons'=>array(array('icon'=>'chevron-up','attributes'=>array('title'=>$_tmp1,'id'=>'toolbar_scrollup')))),$_smarty_tpl);?>
<?php }} ?>