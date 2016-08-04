<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:37
         compiled from "D:\xampp\htdocs\ls_alfa\framework\frontend\components\info-list\info-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2990957a056a9df2df4-00566438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c84fe8ca0f7c6f9696f074b95cedddbb3663b30d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\framework\\frontend\\components\\info-list\\info-list.tpl',
      1 => 1469787443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2990957a056a9df2df4-00566438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'param' => 0,
    'list' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'title' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056a9e1f2d6_62740947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056a9e1f2d6_62740947')) {function content_57a056a9e1f2d6_62740947($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('info-list', null, 0);?>



<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = array('title','list','mods','classes','attributes'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars[((string)$_smarty_tpl->tpl_vars['param']->value)] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]) ? $_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]->value : null), null, 0);?>
<?php } ?>



<?php if ($_smarty_tpl->tpl_vars['list']->value){?>
	<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
		
		<?php if ($_smarty_tpl->tpl_vars['title']->value){?>
			<h2 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
		<?php }?>

		
		<ul class="info-list">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<li class="info-list-item">
					<div class="info-list-item-label">
						<?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

					</div>
					<strong class="info-list-item-content"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</strong>
				</li>
			<?php } ?>
		</ul>
	</div>
<?php }?><?php }} ?>