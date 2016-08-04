<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:37
         compiled from "D:\xampp\htdocs\ls_alfa\application\frontend\components\userbar\userbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:794257a056a9a93824-17203907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07bfb1179295e86825dcd5d58d738b1d8095ad48' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\components\\userbar\\userbar.tpl',
      1 => 1469794091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '794257a056a9a93824-17203907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'sMenuHeadItemSelect' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056a9adf456_93192825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056a9adf456_93192825')) {function content_57a056a9adf456_93192825($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_lang')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<div class="userbar">
    <div class="userbar-inner clearfix" style="min-width: <?php echo Config::Get('view.grid.fluid_min_width');?>
; max-width: <?php echo Config::Get('view.grid.fluid_max_width');?>
;">
        <?php if (!Config::Get('view.layout_show_banner')){?>
            <h1 class="userbar-logo">
                <a href="<?php echo smarty_function_router(array('page'=>'/'),$_smarty_tpl);?>
"><?php echo Config::Get('view.name');?>
</a>
            </h1>
        <?php }?>

        <nav class="userbar-nav">
            <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
                <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.settings'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'settings/account'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'admin.title'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'auth'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(array('text'=>"<img src=\"".((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileAvatarPath(24))."\" alt=\"".((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getDisplayName())."\" class=\"avatar\" /> ".((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getDisplayName()),'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath()),'classes'=>'nav-item--userbar-username','menu'=>array(array('name'=>'settings','text'=>$_tmp1,'url'=>$_tmp2),array('name'=>'admin','text'=>$_tmp3,'url'=>$_tmp4,'is_enabled'=>$_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()))),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['logout'],'url'=>$_tmp5."logout/?security_ls_key=".((string)$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value))), null, 0);?>
            <?php }else{ ?>
                <?php ob_start();?><?php echo smarty_function_router(array('page'=>'auth/login'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'auth/register'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['login']['title'],'classes'=>'js-modal-toggle-login','url'=>$_tmp6),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['registration']['title'],'classes'=>'js-modal-toggle-registration','url'=>$_tmp7)), null, 0);?>
            <?php }?>

            <?php echo smarty_function_component(array('_default_short'=>'nav','name'=>'userbar','activeItem'=>$_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value,'mods'=>'userbar','items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>

        </nav>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
    <?php echo smarty_function_component(array('_default_short'=>'modal-create'),$_smarty_tpl);?>

<?php }?><?php }} ?>