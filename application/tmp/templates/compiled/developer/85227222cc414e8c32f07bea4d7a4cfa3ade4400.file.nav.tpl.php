<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:37
         compiled from "D:\xampp\htdocs\ls_alfa\framework\frontend\components\nav\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1479157a056a9af53d5-54954394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85227222cc414e8c32f07bea4d7a4cfa3ade4400' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\framework\\frontend\\components\\nav\\nav.tpl',
      1 => 1469787443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1479157a056a9af53d5-54954394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'param' => 0,
    'name' => 0,
    'component' => 0,
    'hookParams' => 0,
    'items' => 0,
    'itemsHook' => 0,
    'disabledItemsCounter' => 0,
    'item' => 0,
    'classes' => 0,
    'isSubnav' => 0,
    'showSingle' => 0,
    'mods' => 0,
    'isEnabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056a9b5e9f1_06426748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056a9b5e9f1_06426748')) {function content_57a056a9b5e9f1_06426748($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_cmods')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('nav', null, 0);?>



<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = array('name','items','activeItem','showSingle','isSubnav','items','mods','classes','attributes'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars[((string)$_smarty_tpl->tpl_vars['param']->value)] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]) ? $_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]->value : null), null, 0);?>
<?php } ?>


<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['name']->value ? $_smarty_tpl->tpl_vars['name']->value : rand(0,'10e10'), null, 0);?>


<?php echo smarty_function_hook(array('run'=>((string)$_smarty_tpl->tpl_vars['component']->value)."_".((string)$_smarty_tpl->tpl_vars['name']->value),'assign'=>'itemsHook','params'=>$_smarty_tpl->tpl_vars['hookParams']->value,'items'=>$_smarty_tpl->tpl_vars['items']->value,'array'=>true),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable($_smarty_tpl->tpl_vars['itemsHook']->value ? $_smarty_tpl->tpl_vars['itemsHook']->value : $_smarty_tpl->tpl_vars['items']->value, null, 0);?>


<?php $_smarty_tpl->tpl_vars['disabledItemsCounter'] = new Smarty_variable(0, null, 0);?>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['disabledItemsCounter'] = new Smarty_variable($_smarty_tpl->tpl_vars['disabledItemsCounter']->value+(!(($tmp = @$_smarty_tpl->tpl_vars['item']->value['is_enabled'])===null||$tmp==='' ? true : $tmp)&&$_smarty_tpl->tpl_vars['item']->value['name']!='-'), null, 0);?>
<?php } ?>

<?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['classes']->value)." clearfix", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['isSubnav']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." sub", null, 0);?>
<?php }?>





<?php if (count($_smarty_tpl->tpl_vars['items']->value)-$_smarty_tpl->tpl_vars['disabledItemsCounter']->value-((($tmp = @$_smarty_tpl->tpl_vars['showSingle']->value)===null||$tmp==='' ? false : $tmp) ? 0 : 1)){?>
    <ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['isEnabled'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['is_enabled'], null, 0);?>

            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['isEnabled']->value)===null||$tmp==='' ? true : $tmp)){?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['name']!='-'){?>
                    <?php echo smarty_function_component(array('_default_short'=>'nav','template'=>'item','isRoot'=>!$_smarty_tpl->tpl_vars['isSubnav']->value,'isActive'=>((isset($_smarty_tpl->tpl_vars_local['activeItem']) ? $_smarty_tpl->tpl_vars_local['activeItem']->value : null)==$_smarty_tpl->tpl_vars['item']->value['name']),'params'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>

                <?php }else{ ?>
                    
                    <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-separator"></li>
                <?php }?>
            <?php }?>
        <?php } ?>
    </ul>
<?php }?><?php }} ?>