<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:37
         compiled from "D:\xampp\htdocs\ls_alfa\application\frontend\components\admin\plugins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1780457a056a9d79350-77263769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebc00d69ed381f217cbda8c7fe8164db2dfc9434' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\components\\admin\\plugins.tpl',
      1 => 1469787452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1780457a056a9d79350-77263769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugin' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056a9dea4b1_73221600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056a9dea4b1_73221600')) {function content_57a056a9dea4b1_73221600($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_router')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.router.php';
?>

<table class="table admin-plugins">
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['plugins']) ? $_smarty_tpl->tpl_vars_local['plugins']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
            <tr <?php if ($_smarty_tpl->tpl_vars['plugin']->value['is_active']){?>class="active"<?php }?>>
                
                <td>
                    <h3><?php echo $_smarty_tpl->tpl_vars['plugin']->value['property']->name->data;?>
</h3>
                    <p><?php echo $_smarty_tpl->tpl_vars['plugin']->value['property']->description->data;?>
</p>

                    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'admin.plugins.plugin.version'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'admin.plugins.plugin.author'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'admin.plugins.plugin.url'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'info-list','list'=>array(array('label'=>$_tmp1,'content'=>htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['property']->version, ENT_QUOTES, 'UTF-8', true)),array('label'=>$_tmp2,'content'=>$_smarty_tpl->tpl_vars['plugin']->value['property']->author->data),array('label'=>$_tmp3,'content'=>$_smarty_tpl->tpl_vars['plugin']->value['property']->homepage))),$_smarty_tpl);?>

                </td>

                
                <td>
                    <ul class="admin-plugins-actions">
                        
                        <li>
                            <?php if ($_smarty_tpl->tpl_vars['plugin']->value['is_active']){?>
                                <?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'admin.plugins.plugin.deactivate'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','url'=>$_tmp4."plugins/?plugin=".((string)$_smarty_tpl->tpl_vars['plugin']->value['code'])."&action=deactivate&security_ls_key=".((string)$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value),'text'=>$_tmp5),$_smarty_tpl);?>

                            <?php }else{ ?>
                                <?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'admin.plugins.plugin.activate'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','url'=>$_tmp6."plugins/?plugin=".((string)$_smarty_tpl->tpl_vars['plugin']->value['code'])."&action=activate&security_ls_key=".((string)$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value),'mods'=>'primary','text'=>$_tmp7),$_smarty_tpl);?>

                            <?php }?>
                        </li>

                        
                        <?php if ($_smarty_tpl->tpl_vars['plugin']->value['apply_update']&&$_smarty_tpl->tpl_vars['plugin']->value['is_active']){?>
                            <li>
                                <?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'admin.plugins.plugin.apply_update'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','url'=>$_tmp8."plugins/?plugin=".((string)$_smarty_tpl->tpl_vars['plugin']->value['code'])."&action=apply_update&security_ls_key=".((string)$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value),'text'=>$_tmp9),$_smarty_tpl);?>

                            </li>
                        <?php }?>

                        
                        <?php if ($_smarty_tpl->tpl_vars['plugin']->value['property']->settings!=''&&$_smarty_tpl->tpl_vars['plugin']->value['is_active']){?>
                            <li>
                                <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'admin.plugins.plugin.settings'),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','url'=>$_smarty_tpl->tpl_vars['plugin']->value['property']->settings,'text'=>$_tmp10),$_smarty_tpl);?>

                            </li>
                        <?php }?>

                        
                        <li>
                            <?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'common.remove_confirm'),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'admin.plugins.plugin.remove'),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','url'=>$_tmp11."plugins/?plugin=".((string)$_smarty_tpl->tpl_vars['plugin']->value['code'])."&action=remove&security_ls_key=".((string)$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value),'attributes'=>array('onclick'=>"return confirm('".$_tmp12."');"),'text'=>$_tmp13),$_smarty_tpl);?>

                        </li>
                    </ul>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table><?php }} ?>