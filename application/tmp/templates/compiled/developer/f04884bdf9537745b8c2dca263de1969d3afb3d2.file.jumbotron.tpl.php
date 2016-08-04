<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:37
         compiled from "D:\xampp\htdocs\ls_alfa\framework\frontend\components\jumbotron\jumbotron.tpl" */ ?>
<?php /*%%SmartyHeaderCode:684757a056a9d400f3-59653891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f04884bdf9537745b8c2dca263de1969d3afb3d2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\framework\\frontend\\components\\jumbotron\\jumbotron.tpl',
      1 => 1469787443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '684757a056a9d400f3-59653891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'param' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'title' => 0,
    'titleUrl' => 0,
    'subtitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056a9d6ff29_33416776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056a9d6ff29_33416776')) {function content_57a056a9d6ff29_33416776($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('jumbotron', null, 0);?>



<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = array('title','subtitle','titleUrl','content','mods','classes','attributes'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars[((string)$_smarty_tpl->tpl_vars['param']->value)] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]) ? $_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]->value : null), null, 0);?>
<?php } ?>




<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-inner">
        
            
            <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
                <h1 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title">
                    <?php if ($_smarty_tpl->tpl_vars['titleUrl']->value){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['titleUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <?php }?>
                </h1>
            <?php }?>

            
            <?php if ($_smarty_tpl->tpl_vars['subtitle']->value){?>
                <h2 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-subtitle">
                    <?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>

                </h2>
            <?php }?>
        
    </div>
</div><?php }} ?>