<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:37
         compiled from "D:\xampp\htdocs\ls_alfa\framework\frontend\components\button\button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227057a056a9ce2cd1-43362233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406ea9d6f81da96405b2fdb7e515e6160bf0078d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\framework\\frontend\\components\\button\\button.tpl',
      1 => 1469787440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227057a056a9ce2cd1-43362233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'param' => 0,
    'icon' => 0,
    'text' => 0,
    'url' => 0,
    'type' => 0,
    'tag' => 0,
    'value' => 0,
    'name' => 0,
    '_aRequest' => 0,
    'isDisabled' => 0,
    'form' => 0,
    'id' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056a9d36851_40207842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056a9d36851_40207842')) {function content_57a056a9d36851_40207842($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('button', null, 0);?>



<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = array('type','text','value','url','id','name','isDisabled','form','icon','mods','classes','attributes'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars[((string)$_smarty_tpl->tpl_vars['param']->value)] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]) ? $_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]->value : null), null, 0);?>
<?php } ?>


<?php if ($_smarty_tpl->tpl_vars['icon']->value&&!$_smarty_tpl->tpl_vars['text']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." icon", null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['tag'] = new Smarty_variable($_smarty_tpl->tpl_vars['url']->value ? 'a' : 'button', null, 0);?>
<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? 'submit' : $tmp), null, 0);?>


<<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>

        <?php if (!$_smarty_tpl->tpl_vars['url']->value){?>
            type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"
            value="<?php if ($_smarty_tpl->tpl_vars['value']->value){?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['_aRequest']->value[$_smarty_tpl->tpl_vars['name']->value])){?><?php echo $_smarty_tpl->tpl_vars['_aRequest']->value[$_smarty_tpl->tpl_vars['name']->value];?>
<?php }?>"
            <?php if ($_smarty_tpl->tpl_vars['isDisabled']->value){?>disabled<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['form']->value){?>form="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
"<?php }?>
        <?php }else{ ?>
            href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"
            role="button"
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['id']->value){?>id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['name']->value){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>
        class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
"
        <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
    <?php if ($_smarty_tpl->tpl_vars['icon']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>$_smarty_tpl->tpl_vars['icon']->value,'attributes'=>array('aria-hidden'=>'true')),$_smarty_tpl);?>

    <?php }?>

    
    <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

</<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
><?php }} ?>