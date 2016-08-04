<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:47:33
         compiled from "D:\xampp\htdocs\ls_alfa\application\frontend\components\auth\auth.invite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2343457a05e25497706-04306414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fb89975c7ef98555325a8d8998e64db78730ff5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\components\\auth\\auth.invite.tpl',
      1 => 1469787453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2343457a05e25497706-04306414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a05e254a9964_10920607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a05e254a9964_10920607')) {function content_57a05e254a9964_10920607($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<form action="<?php echo smarty_function_router(array('page'=>'auth'),$_smarty_tpl);?>
invite/" method="post">
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'invite_code','rules'=>array('required'=>true,'type'=>'alphanum'),'label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['invite']['form']['fields']['code']['label']),$_smarty_tpl);?>


    <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_invite','mods'=>'primary','text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['invite']['form']['fields']['submit']['text']),$_smarty_tpl);?>

</form><?php }} ?>