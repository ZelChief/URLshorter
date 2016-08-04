<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:47:33
         compiled from "D:\xampp\htdocs\ls_alfa\framework\frontend\components\field\field.checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1403957a05e25517401-26793369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eee54bf0e72d055b57c43d9548043419d2d3c12c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\framework\\frontend\\components\\field\\field.checkbox.tpl',
      1 => 1469787442,
      2 => 'file',
    ),
    'b994f6370c21713fc2e75f0f166b62fba6bbecfa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\framework\\frontend\\components\\field\\field.tpl',
      1 => 1469787441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1403957a05e25517401-26793369',
  'function' => 
  array (
    'field_input_attr_value' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'field_input_attr_common' => 
    array (
      'parameter' => 
      array (
        'useValue' => true,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'component' => 0,
    'name' => 0,
    '_value' => 0,
    '_aRequest' => 0,
    '_uid' => 0,
    '_inputClasses' => 0,
    'useValue' => 0,
    '_rules' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'json' => 0,
    '_inputAttributes' => 0,
    '_mods' => 0,
    '_attributes' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a05e255e0bd2_95494673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a05e255e0bd2_95494673')) {function content_57a05e255e0bd2_95494673($_smarty_tpl) {?><?php if (!is_callable('smarty_function_field_make_rule')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.field_make_rule.php';
if (!is_callable('smarty_function_cmods')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('field', null, 0);?>


	
	<?php $_smarty_tpl->tpl_vars['_uid'] = new Smarty_variable((($tmp = @(isset($_smarty_tpl->tpl_vars_local['id']) ? $_smarty_tpl->tpl_vars_local['id']->value : null))===null||$tmp==='' ? (($_smarty_tpl->tpl_vars['component']->value).(rand(0,'10e10'))) : $tmp), null, 0);?>

	
	<?php $_smarty_tpl->tpl_vars['_mods'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['_value'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['value']) ? $_smarty_tpl->tpl_vars_local['value']->value : null), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['_inputClasses'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['inputClasses']) ? $_smarty_tpl->tpl_vars_local['inputClasses']->value : null), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['_attributes'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['_inputAttributes'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['inputAttributes']) ? $_smarty_tpl->tpl_vars_local['inputAttributes']->value : null), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['_rules'] = new Smarty_variable((($tmp = @(isset($_smarty_tpl->tpl_vars_local['rules']) ? $_smarty_tpl->tpl_vars_local['rules']->value : null))===null||$tmp==='' ? array() : $tmp), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['name']) ? $_smarty_tpl->tpl_vars_local['name']->value : null), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['label'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['label']) ? $_smarty_tpl->tpl_vars_local['label']->value : null), null, 0);?>



<?php if ((isset($_smarty_tpl->tpl_vars_local['entity']) ? $_smarty_tpl->tpl_vars_local['entity']->value : null)){?>
	<?php echo smarty_function_field_make_rule(array('entity'=>(isset($_smarty_tpl->tpl_vars_local['entity']) ? $_smarty_tpl->tpl_vars_local['entity']->value : null),'field'=>(($tmp = @(isset($_smarty_tpl->tpl_vars_local['entityField']) ? $_smarty_tpl->tpl_vars_local['entityField']->value : null))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['name']->value : $tmp),'scenario'=>(isset($_smarty_tpl->tpl_vars_local['entityScenario']) ? $_smarty_tpl->tpl_vars_local['entityScenario']->value : null),'assign'=>'_rules'),$_smarty_tpl);?>

<?php }?>


<?php if (!function_exists('smarty_template_function_field_input_attr_value')) {
    function smarty_template_function_field_input_attr_value($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['field_input_attr_value']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<?php if ($_smarty_tpl->tpl_vars['_value']->value){?><?php echo $_smarty_tpl->tpl_vars['_value']->value;?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['_aRequest']->value[$_smarty_tpl->tpl_vars['name']->value])){?><?php echo $_smarty_tpl->tpl_vars['_aRequest']->value[$_smarty_tpl->tpl_vars['name']->value];?>
<?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!is_callable('smarty_function_cattr')) include 'D:\xampp\htdocs\ls_alfa\framework/classes/modules/viewer/plugs\function.cattr.php';
?><?php if (!function_exists('smarty_template_function_field_input_attr_common')) {
    function smarty_template_function_field_input_attr_common($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['field_input_attr_common']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	id="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
"
	class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-input <?php echo $_smarty_tpl->tpl_vars['_inputClasses']->value;?>
"
	<?php if ($_smarty_tpl->tpl_vars['useValue']->value){?>value="<?php smarty_template_function_field_input_attr_value($_smarty_tpl,array());?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['name']->value){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars_local['placeholder']) ? $_smarty_tpl->tpl_vars_local['placeholder']->value : null)){?>placeholder="<?php echo (isset($_smarty_tpl->tpl_vars_local['placeholder']) ? $_smarty_tpl->tpl_vars_local['placeholder']->value : null);?>
"<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars_local['isDisabled']) ? $_smarty_tpl->tpl_vars_local['isDisabled']->value : null)){?>disabled<?php }?>
	<?php  $_smarty_tpl->tpl_vars['rule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_rules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rule']->key => $_smarty_tpl->tpl_vars['rule']->value){
$_smarty_tpl->tpl_vars['rule']->_loop = true;
?>
		<?php if (is_bool($_smarty_tpl->tpl_vars['rule']->value)&&!$_smarty_tpl->tpl_vars['rule']->value){?>
			<?php continue 1?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['rule']->key==='remote'){?>
			data-parsley-remote-validator="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_rules']->value['remote-validator'])===null||$tmp==='' ? 'fields' : $tmp);?>
"
			data-parsley-trigger="focusout"

			
			<?php $_smarty_tpl->tpl_vars['json'] = new Smarty_variable(array('type'=>'post','data'=>array('security_ls_key'=>$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value)), null, 0);?>

			<?php if (array_key_exists('remote-options',$_smarty_tpl->tpl_vars['_rules']->value)){?>
				<?php $_smarty_tpl->tpl_vars['json'] = new Smarty_variable(array_merge_recursive($_smarty_tpl->tpl_vars['json']->value,$_smarty_tpl->tpl_vars['_rules']->value['remote-options']), null, 0);?>
			<?php }?>

			data-parsley-remote-options='<?php echo json_encode($_smarty_tpl->tpl_vars['json']->value);?>
'
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['rule']->key==='remote-options'){?>
			<?php continue 1?>
		<?php }?>

		data-parsley-<?php echo $_smarty_tpl->tpl_vars['rule']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['rule']->value;?>
"
	<?php } ?>
	<?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['_inputAttributes']->value),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>




	<?php $_smarty_tpl->tpl_vars['_mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['_mods']->value)." checkbox", null, 0);?>
	<?php $_smarty_tpl->tpl_vars['_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['_value']->value ? $_smarty_tpl->tpl_vars['_value']->value : '1', null, 0);?>

	<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['_mods']->value),$_smarty_tpl);?>
 clearfix <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
 " <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['_attributes']->value),$_smarty_tpl);?>
>
		
		<?php if ($_smarty_tpl->tpl_vars['label']->value){?>
			<label for="<?php echo $_smarty_tpl->tpl_vars['_uid']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-label"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
		<?php }?>

		
		<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-holder">
			
	<input type="checkbox" <?php smarty_template_function_field_input_attr_common($_smarty_tpl,array());?>
 <?php if ((isset($_smarty_tpl->tpl_vars_local['checked']) ? $_smarty_tpl->tpl_vars_local['checked']->value : null)){?>checked<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['_aRequest']->value[(isset($_smarty_tpl->tpl_vars_local['name']) ? $_smarty_tpl->tpl_vars_local['name']->value : null)]==1){?>checked<?php }?><?php }?> />

		</div>

		
		<?php if ((isset($_smarty_tpl->tpl_vars_local['note']) ? $_smarty_tpl->tpl_vars_local['note']->value : null)){?>
			<small class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-note js-<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-note"><?php echo (isset($_smarty_tpl->tpl_vars_local['note']) ? $_smarty_tpl->tpl_vars_local['note']->value : null);?>
</small>
		<?php }?>
	</div>
<?php }} ?>