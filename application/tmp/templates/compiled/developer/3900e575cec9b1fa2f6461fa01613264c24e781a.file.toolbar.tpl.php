<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:38
         compiled from "D:\xampp\htdocs\ls_alfa\framework\frontend\components\toolbar\toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2164857a056aa0b4442-58936791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3900e575cec9b1fa2f6461fa01613264c24e781a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\framework\\frontend\\components\\toolbar\\toolbar.tpl',
      1 => 1469787443,
      2 => 'file',
    ),
    '4864685d90c8caa0e3d145191c370477841c6acb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\framework\\frontend\\components\\button\\toolbar.tpl',
      1 => 1469787440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2164857a056aa0b4442-58936791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'param' => 0,
    'mods' => 0,
    'component' => 0,
    'classes' => 0,
    'attributes' => 0,
    'groups' => 0,
    'group' => 0,
    'groupMod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056aa0faf75_02032493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056aa0faf75_02032493')) {function content_57a056aa0faf75_02032493($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('button-toolbar', null, 0);?>



<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = array('groups','classes','mods','attributes'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars[((string)$_smarty_tpl->tpl_vars['param']->value)] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]) ? $_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]->value : null), null, 0);?>
<?php } ?>


    <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['classes']->value)." toolbar", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." vertical", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['items']) ? $_smarty_tpl->tpl_vars_local['items']->value : null), null, 0);?>



<?php if (in_array('vertical',explode(' ',$_smarty_tpl->tpl_vars['mods']->value))){?>
    <?php $_smarty_tpl->tpl_vars['groupMod'] = new Smarty_variable('vertical', null, 0);?>
<?php }?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 clearfix" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
 role="toolbar">
    <?php if (is_array($_smarty_tpl->tpl_vars['groups']->value)){?>
        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
            <?php if (is_array($_smarty_tpl->tpl_vars['group']->value)){?>
                
    <?php echo smarty_function_component(array('_default_short'=>'toolbar','template'=>'item','role'=>'group','mods'=>$_smarty_tpl->tpl_vars['groupMod']->value,'params'=>$_smarty_tpl->tpl_vars['group']->value),$_smarty_tpl);?>


            <?php }else{ ?>
                <?php echo $_smarty_tpl->tpl_vars['group']->value;?>

            <?php }?>
        <?php } ?>
    <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['groups']->value;?>

    <?php }?>
</div><?php }} ?>