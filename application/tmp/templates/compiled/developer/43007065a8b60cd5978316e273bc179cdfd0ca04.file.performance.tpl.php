<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:38
         compiled from "D:\xampp\htdocs\ls_alfa\framework\frontend\components\performance\performance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1271957a056aa1080d7-09855783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43007065a8b60cd5978316e273bc179cdfd0ca04' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\framework\\frontend\\components\\performance\\performance.tpl',
      1 => 1469787443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1271957a056aa1080d7-09855783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bIsShowStatsPerformance' => 0,
    'stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056aa12c937_19358493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056aa12c937_19358493')) {function content_57a056aa12c937_19358493($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.hook.php';
?>

<?php if ($_smarty_tpl->tpl_vars['bIsShowStatsPerformance']->value){?>
    <?php $_smarty_tpl->tpl_vars['stats'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['stats']) ? $_smarty_tpl->tpl_vars_local['stats']->value : null), null, 0);?>

    <div class="alert alert--info performance">
        <?php echo smarty_function_hook(array('run'=>'statistics_performance_begin'),$_smarty_tpl);?>


        <table>
            <tr>
                <td>
                    <h4>MySql</h4>
                    query: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['sql']['count'];?>
</strong><br />
                    time: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['sql']['time'];?>
</strong>
                </td>
                <td>
                    <h4>Cache</h4>
                    query: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['cache']['count'];?>
</strong><br />
                    &mdash; set: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['cache']['count_set'];?>
</strong><br />
                    &mdash; get: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['cache']['count_get'];?>
</strong><br />
                    time: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['cache']['time'];?>
</strong>
                </td>
                <td>
                    <h4>PHP</h4>
                    time load modules: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['engine']['time_load_module'];?>
</strong><br />
                    full time: <strong><?php echo (isset($_smarty_tpl->tpl_vars_local['timeFullPerformance']) ? $_smarty_tpl->tpl_vars_local['timeFullPerformance']->value : null);?>
</strong>
                </td>
                <td>
                    <h4>Memory</h4>
                    memory usage: <strong><?php echo memory_get_usage(true)/1024/1024;?>
 Mb</strong><br />
                    memory peak usage: <strong><?php echo memory_get_peak_usage(true)/1024/1024;?>
 Mb</strong>
                </td>

                <?php echo smarty_function_hook(array('run'=>'statistics_performance_item'),$_smarty_tpl);?>

            </tr>
        </table>

        <?php echo smarty_function_hook(array('run'=>'statistics_performance_end'),$_smarty_tpl);?>

    </div>
<?php }?><?php }} ?>