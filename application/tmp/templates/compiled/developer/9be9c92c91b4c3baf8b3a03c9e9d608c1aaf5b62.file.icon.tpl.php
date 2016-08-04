<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:37
         compiled from "D:\xampp\htdocs\ls_alfa\framework\frontend\components\icon\icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2134457a056a9c748d8-69570618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9be9c92c91b4c3baf8b3a03c9e9d608c1aaf5b62' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\framework\\frontend\\components\\icon\\icon.tpl',
      1 => 1469787442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2134457a056a9c748d8-69570618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056a9c86b05_45673921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056a9c86b05_45673921')) {function content_57a056a9c86b05_45673921($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('icon', null, 0);?>

<i class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-<?php echo (isset($_smarty_tpl->tpl_vars_local['icon']) ? $_smarty_tpl->tpl_vars_local['icon']->value : null);?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
" <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
></i><?php }} ?>