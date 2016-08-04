<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:37
         compiled from "D:\xampp\htdocs\ls_alfa\framework\frontend\components\nav\nav-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2763657a056a9b66482-06493315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c95b39a31461d200eb49843bd81d3d06236223e6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\framework\\frontend\\components\\nav\\nav-item.tpl',
      1 => 1469787443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2763657a056a9b66482-06493315',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'param' => 0,
    'show' => 0,
    'url' => 0,
    'menu' => 0,
    'mods' => 0,
    'count' => 0,
    'isActive' => 0,
    'classes' => 0,
    'component' => 0,
    'attributes' => 0,
    'data' => 0,
    'text' => 0,
    'showZeroCounter' => 0,
    'isRoot' => 0,
    'activeItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056a9bc5cb9_54983841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056a9bc5cb9_54983841')) {function content_57a056a9bc5cb9_54983841($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('nav-item', null, 0);?>



<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = array('menu','url','text','showZeroCounter','activeItem','count','isRoot','isActive','show','data','mods','classes','attributes'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars[((string)$_smarty_tpl->tpl_vars['param']->value)] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]) ? $_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]->value : null), null, 0);?>
<?php } ?>


<?php $_smarty_tpl->tpl_vars['show'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['url']->value)===null||$tmp==='' ? '#' : $tmp), null, 0);?>


<?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable($_smarty_tpl->tpl_vars['menu']->value ? ((string)$_smarty_tpl->tpl_vars['mods']->value)." has-children" : $_smarty_tpl->tpl_vars['mods']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value ? ((string)$_smarty_tpl->tpl_vars['mods']->value)." has-badge" : $_smarty_tpl->tpl_vars['mods']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable($_smarty_tpl->tpl_vars['isActive']->value ? ((string)$_smarty_tpl->tpl_vars['classes']->value)." active" : $_smarty_tpl->tpl_vars['classes']->value, null, 0);?>





<?php if ($_smarty_tpl->tpl_vars['show']->value){?>
    <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
 role="menuitem"
        <?php  $_smarty_tpl->tpl_vars['dataItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dataItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dataItem']->key => $_smarty_tpl->tpl_vars['dataItem']->value){
$_smarty_tpl->tpl_vars['dataItem']->_loop = true;
?>
            data-<?php echo $_smarty_tpl->tpl_vars['dataItem']->key;?>
=<?php echo $_smarty_tpl->tpl_vars['dataItem']->value;?>

        <?php } ?>>

        
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-link">
            <?php echo $_smarty_tpl->tpl_vars['text']->value;?>


            
            <?php if (isset($_smarty_tpl->tpl_vars['count']->value)&&($_smarty_tpl->tpl_vars['showZeroCounter']->value||(!$_smarty_tpl->tpl_vars['showZeroCounter']->value&&$_smarty_tpl->tpl_vars['count']->value>0))){?>
                <?php echo smarty_function_component(array('_default_short'=>'badge','value'=>$_smarty_tpl->tpl_vars['count']->value,'classes'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-badge"),$_smarty_tpl);?>

            <?php }?>

            
            <?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
                <div class="caret <?php if (!$_smarty_tpl->tpl_vars['isRoot']->value){?>caret--right<?php }?> <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-caret"></div>
            <?php }?>
        </a>

        
        <?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
            <?php echo smarty_function_component(array('_default_short'=>'nav','activeItem'=>$_smarty_tpl->tpl_vars['activeItem']->value,'mods'=>'stacked','isSubnav'=>true,'items'=>$_smarty_tpl->tpl_vars['menu']->value),$_smarty_tpl);?>

        <?php }?>
    </li>
<?php }?><?php }} ?>