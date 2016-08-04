<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:46
         compiled from "D:\xampp\htdocs\ls_alfa\application\frontend\components\user\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215357a056b2d5aa46-26783303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1babb1eaa65cf5db3d8a0b08c2bb25af7b229953' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\components\\user\\header.tpl',
      1 => 1469787452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215357a056b2d5aa46-26783303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'mods' => 0,
    'component' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056b2da85a8_05329673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056b2da85a8_05329673')) {function content_57a056b2da85a8_05329673($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_hook')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.hook.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('user-profile', null, 0);?>

<?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['user']) ? $_smarty_tpl->tpl_vars_local['user']->value : null), null, 0);?>
<?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['user']->value->getProfileName()){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." has-name", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['user']->value->isOnline()){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." is-online", null, 0);?>
<?php }?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
 clearfix" <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>
    <?php echo smarty_function_hook(array('run'=>'profile_top_begin','user'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>


    
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-user clearfix">
        <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value->getUserWebPath();?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->getProfileAvatarPath(100);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->getProfileName();?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-user-avatar js-user-profile-avatar" itemprop="photo">
        </a>

        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-user-body">
	        <h2 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-user-login" itemprop="nickname">
	            <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value->getUserWebPath();?>
">
	                <?php echo $_smarty_tpl->tpl_vars['user']->value->getLogin();?>

	            </a>
	        </h2>

	        <?php if ($_smarty_tpl->tpl_vars['user']->value->getProfileName()){?>
	            <p class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-user-name" itemprop="name">
	                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->getProfileName(), ENT_QUOTES, 'UTF-8', true);?>

	            </p>
	        <?php }?>
        </div>
    </div>

    
    <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-rating">
        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-rating-label">Рейтинг</div>
        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-rating-value"><?php echo $_smarty_tpl->tpl_vars['user']->value->getRating();?>
</div>
    </div>

    <?php echo smarty_function_hook(array('run'=>'profile_top_end','user'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>

</div><?php }} ?>