<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:37
         compiled from "D:\xampp\htdocs\ls_alfa\application\frontend\components\modal-create\modal-create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:961857a056a9bd3b53-81039878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45715938191856f2a1ffed33f7a44458680c49e8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\components\\modal-create\\modal-create.tpl',
      1 => 1469787452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '961857a056a9bd3b53-81039878',
  'function' => 
  array (
    'modal_create_item' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'item' => 0,
    'url' => 0,
    'title' => 0,
    'LS' => 0,
    'type' => 0,
    'aLang' => 0,
    'iUserCurrentCountTopicDraft' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056a9c0fa32_46780795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056a9c0fa32_46780795')) {function content_57a056a9c0fa32_46780795($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_router')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_hook')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('modal_content', null, null); ob_start(); ?>
    <?php if (!is_callable('smarty_function_router')) include 'D:\xampp\htdocs\ls_alfa\framework/classes/modules/viewer/plugs\function.router.php';
?><?php if (!function_exists('smarty_template_function_modal_create_item')) {
    function smarty_template_function_modal_create_item($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['modal_create_item']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
        <li class="write-item-type-<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
">
            <?php ob_start();?><?php if (!$_smarty_tpl->tpl_vars['url']->value){?><?php echo smarty_function_router(array('page'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>
<?php echo "add";?><?php }else{ ?><?php echo (string)$_smarty_tpl->tpl_vars['url']->value;?><?php }?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable($_tmp1, null, 0);?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="write-item-image"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
        </li>
    <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


    <ul class="write-list clearfix">
        <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LS']->value->Topic_GetTopicTypes(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
            <?php smarty_template_function_modal_create_item($_smarty_tpl,array('item'=>'topic','url'=>$_smarty_tpl->tpl_vars['type']->value->getUrlForAdd(),'title'=>$_smarty_tpl->tpl_vars['type']->value->getName()));?>

        <?php } ?>

        <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'modal_create.items.blog'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php smarty_template_function_modal_create_item($_smarty_tpl,array('item'=>'blog','title'=>$_tmp2));?>

        <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'modal_create.items.talk'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php smarty_template_function_modal_create_item($_smarty_tpl,array('item'=>'talk','title'=>$_tmp3));?>

        <?php ob_start();?><?php echo smarty_function_router(array('page'=>'content'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value){?><?php echo "(";?><?php echo (string)$_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value;?><?php echo ")";?><?php }?><?php $_tmp5=ob_get_clean();?><?php smarty_template_function_modal_create_item($_smarty_tpl,array('item'=>'draft','url'=>$_tmp4."drafts/",'title'=>((string)$_smarty_tpl->tpl_vars['aLang']->value['topic']['drafts'])." ".$_tmp5));?>


        <?php echo smarty_function_hook(array('run'=>'write_item','isPopup'=>true),$_smarty_tpl);?>

    </ul>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'modal_create.title'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'modal','title'=>$_tmp6,'content'=>Smarty::$_smarty_vars['capture']['modal_content'],'classes'=>'js-modal-default','mods'=>'create','id'=>'modal-write'),$_smarty_tpl);?>
<?php }} ?>