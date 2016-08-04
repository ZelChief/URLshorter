<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:37
         compiled from "D:\xampp\htdocs\ls_alfa\application\frontend\components\tags-favourite\modal.favourite_tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2173857a056a9e2b799-05639984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66df22980ad32d73e43918005b646b0de8a5028c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\components\\tags-favourite\\modal.favourite_tags.tpl',
      1 => 1469787452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2173857a056a9e2b799-05639984',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056a9e3dc43_60109722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056a9e3dc43_60109722')) {function content_57a056a9e3dc43_60109722($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_lang')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.lang.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('modal_content', null, null); ob_start(); ?>
    <form id="js-favourite-form">
        <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'tags','noMargin'=>true,'autofocus'=>true,'inputClasses'=>'width-full autocomplete-tags-sep js-tags-form-input-list'),$_smarty_tpl);?>

    </form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'favourite_tags.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'common.save'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'modal','title'=>$_tmp1,'content'=>Smarty::$_smarty_vars['capture']['modal_content'],'classes'=>'js-modal-default','mods'=>'favourite-tags','id'=>'favourite-form-tags','primaryButton'=>array('text'=>$_tmp2,'classes'=>'js-tags-form-submit','form'=>'js-favourite-form')),$_smarty_tpl);?>
<?php }} ?>