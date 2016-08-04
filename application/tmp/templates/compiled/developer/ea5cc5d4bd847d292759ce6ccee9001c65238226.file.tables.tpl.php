<?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:42
         compiled from "D:\xampp\htdocs\ls_alfa\application\frontend\skin\developer\actions\ActionAdmin\tables.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2978057a056ae879053-40945007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea5cc5d4bd847d292759ce6ccee9001c65238226' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\skin\\developer\\actions\\ActionAdmin\\tables.tpl',
      1 => 1470057415,
      2 => 'file',
    ),
    'f5f2381307f0613c91f1307f60fcb3ed0b70de46' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\skin\\developer\\layouts\\layout.admin.tpl',
      1 => 1469787451,
      2 => 'file',
    ),
    'bd37bbf6970b2038e4a167943eeecbef580616cf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\skin\\developer\\layouts\\layout.base.tpl',
      1 => 1469793545,
      2 => 'file',
    ),
    '988fa62d277ea3e1e7b719492735f5d1445124d2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\framework\\frontend\\components\\layout\\layout.tpl',
      1 => 1469787443,
      2 => 'file',
    ),
    'e8e68edc75a57a36080e0ef620ae942c966904ab' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\skin\\developer\\navs\\nav.tables.tpl',
      1 => 1469985438,
      2 => 'file',
    ),
    'fd7db3d8aa1fc47cc7c533298f56586fc734a8f6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ls_alfa\\application\\frontend\\skin\\developer\\blocks.tpl',
      1 => 1469787451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2978057a056ae879053-40945007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'rtl' => 0,
    'sHtmlDescription' => 0,
    'sHtmlKeywords' => 0,
    'sHtmlRobots' => 0,
    'sHtmlTitle' => 0,
    'aHtmlRssAlternate' => 0,
    'sHtmlCanonical' => 0,
    'aHtmlHeadFiles' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'aRouter' => 0,
    'sPage' => 0,
    'sPath' => 0,
    'oUserCurrent' => 0,
    'component' => 0,
    'mods' => 0,
    'attributes' => 0,
    'sLayoutAfter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57a056aea47c02_97069299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a056aea47c02_97069299')) {function content_57a056aea47c02_97069299($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_json')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.json.php';
if (!is_callable('smarty_function_hook')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_cmods')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_lang')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_add_block')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.add_block.php';
?>
<!doctype html>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('layout', null, 0);?>


    <?php $_smarty_tpl->tpl_vars['rtl'] = new Smarty_variable(Config::Get('view.rtl') ? 'dir="rtl"' : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang'] = new Smarty_variable(Config::Get('lang.current'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['attributes'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null), null, 0);?>


<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['rtl']->value;?>
> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['rtl']->value;?>
> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['rtl']->value;?>
> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['rtl']->value;?>
> <!--<![endif]-->

<head prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article#">
    
        <meta charset="utf-8">

        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlDescription']->value;?>
">
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlKeywords']->value;?>
">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlRobots']->value;?>
">

        <title><?php echo $_smarty_tpl->tpl_vars['sHtmlTitle']->value;?>
</title>

        
        <?php if ($_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value){?>
            <link rel="alternate" type="application/rss+xml" href="<?php echo $_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value['title'];?>
">
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['sHtmlCanonical']->value){?>
            <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['sHtmlCanonical']->value;?>
" />
        <?php }?>

        
        
            
            <?php echo $_smarty_tpl->tpl_vars['aHtmlHeadFiles']->value['css'];?>

        
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>


        <link href="<?php echo Config::Get('path.skin.assets.web');?>
/images/favicons/favicon.ico?v1" rel="shortcut icon" />
        <link rel="search" type="application/opensearchdescription+xml" href="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
opensearch/" title="<?php echo Config::Get('view.name');?>
" />

        <script>
            var PATH_ROOT                   = '<?php echo smarty_function_router(array('page'=>'/'),$_smarty_tpl);?>
',
                PATH_SKIN                   = '<?php echo Config::Get('path.skin.web');?>
',
                PATH_FRAMEWORK_FRONTEND     = '<?php echo Config::Get('path.framework.frontend.web');?>
',
                PATH_FRAMEWORK_LIBS_VENDOR  = '<?php echo Config::Get('path.framework.libs_vendor.web');?>
',

                LIVESTREET_SECURITY_KEY = '<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
',
                LANGUAGE                = '<?php echo Config::Get('lang.current');?>
',
                WYSIWYG                 = <?php if (Config::Get('view.wysiwyg')){?>true<?php }else{ ?>false<?php }?>;

            var aRouter = [];
            <?php  $_smarty_tpl->tpl_vars['sPath'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sPath']->_loop = false;
 $_smarty_tpl->tpl_vars['sPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aRouter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sPath']->key => $_smarty_tpl->tpl_vars['sPath']->value){
$_smarty_tpl->tpl_vars['sPath']->_loop = true;
 $_smarty_tpl->tpl_vars['sPage']->value = $_smarty_tpl->tpl_vars['sPath']->key;
?>
                aRouter['<?php echo $_smarty_tpl->tpl_vars['sPage']->value;?>
'] = '<?php echo $_smarty_tpl->tpl_vars['sPath']->value;?>
';
            <?php } ?>
        </script>

        
        
            
            <?php echo $_smarty_tpl->tpl_vars['aHtmlHeadFiles']->value['js'];?>

        
    
    <script>
        ls.lang.load(<?php echo smarty_function_json(array('var'=>$_smarty_tpl->tpl_vars['aLangJs']->value),$_smarty_tpl);?>
);
        ls.registry.set(<?php echo smarty_function_json(array('var'=>$_smarty_tpl->tpl_vars['aVarsJs']->value),$_smarty_tpl);?>
);
    </script>

    
    <?php ob_start();?><?php echo Config::Get('view.grid.type');?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='fluid'){?>
        <style>
            .grid-role-userbar,
            .grid-role-nav .nav--main,
            .grid-role-header .jumbotron-inner,
            .grid-role-container {
                min-width: <?php echo Config::Get('view.grid.fluid_min_width');?>
;
                max-width: <?php echo Config::Get('view.grid.fluid_max_width');?>
;
            }
        </style>
    <?php }else{ ?>
        <style>
            .grid-role-userbar,
            .grid-role-nav .nav--main,
            .grid-role-header .jumbotron-inner,
            .grid-role-container { width: <?php echo Config::Get('view.grid.fixed_width');?>
; }
        </style>
    <?php }?>


    <?php echo smarty_function_hook(array('run'=>'html_head_end'),$_smarty_tpl);?>

</head>



<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." user-role-user", null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." user-role-admin", null, 0);?>
    <?php }?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." user-role-guest", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['oUserCurrent']->value||!$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." user-role-not-admin", null, 0);?>
<?php }?>

<?php ob_start();?><?php echo Config::Get('view.skin');?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo Config::Get('view.grid.type');?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." template-".$_tmp1." ".$_tmp2, null, 0);?>

<body class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
    
    <?php echo smarty_function_component(array('_default_short'=>'userbar'),$_smarty_tpl);?>




    
    <?php if (Config::Get('view.layout_show_banner')){?>
        <?php ob_start();?><?php echo smarty_function_router(array('page'=>'/'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'jumbotron','title'=>Config::Get('view.name'),'subtitle'=>Config::Get('view.description'),'titleUrl'=>$_tmp1,'classes'=>'grid-role-header'),$_smarty_tpl);?>

    <?php }?>
    
    <div id="container" class="grid-row grid-role-container <?php echo smarty_function_hook(array('run'=>'container_class'),$_smarty_tpl);?>
 <?php if (!$_smarty_tpl->tpl_vars['layoutSidebarBlocksShow']->value){?>no-sidebar<?php }?>">
        
        <div class="grid-row grid-role-wrapper" class="<?php echo smarty_function_hook(array('run'=>'wrapper_class'),$_smarty_tpl);?>
">
            
            <div class="grid-col grid-col-8 grid-role-content"
                 role="main"
                 <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='profile'){?>itemscope itemtype="http://data-vocabulary.org/Person"<?php }?>>

                <?php echo smarty_function_hook(array('run'=>'content_begin'),$_smarty_tpl);?>


                
                
                    <h2 class="page-header">
                        
    <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
"><?php echo smarty_function_lang(array('_default_short'=>'admin.title'),$_smarty_tpl);?>
</a>
    <span>&raquo;</span>
    
    <?php echo smarty_function_lang(array('_default_short'=>'admin.items.tables'),$_smarty_tpl);?>



                    </h2>


                

                    
                    <?php if ($_smarty_tpl->tpl_vars['layoutShowSystemMessages']->value){?>
                        <?php if ($_smarty_tpl->tpl_vars['aMsgError']->value){?>
                            <?php echo smarty_function_component(array('_default_short'=>'alert','text'=>$_smarty_tpl->tpl_vars['aMsgError']->value,'mods'=>'error','close'=>true),$_smarty_tpl);?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['aMsgNotice']->value){?>
                            <?php echo smarty_function_component(array('_default_short'=>'alert','text'=>$_smarty_tpl->tpl_vars['aMsgNotice']->value,'close'=>true),$_smarty_tpl);?>

                        <?php }?>
                    <?php }?>
                

                
    <?php /*  Call merged included template "navs/nav.tables.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('navs/nav.tables.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2978057a056ae879053-40945007');
content_57a056ae9995f9_83356778($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "navs/nav.tables.tpl" */?>
    <?php echo smarty_function_component(array('_default_short'=>'admin','template'=>'tables','table'=>$_smarty_tpl->tpl_vars['table']->value),$_smarty_tpl);?>



                <?php echo smarty_function_hook(array('run'=>'content_end'),$_smarty_tpl);?>

            </div>

            
            <?php if ($_smarty_tpl->tpl_vars['layoutSidebarBlocksShow']->value){?>
                <aside class="grid-col grid-col-4 grid-role-sidebar" role="complementary">
                    <?php echo $_smarty_tpl->tpl_vars['layoutSidebarBlocks']->value;?>

                </aside>
            <?php }?>
        </div> 


        
        <footer class="grid-row grid-role-footer">
            
                <?php echo smarty_function_hook(array('run'=>'footer_begin'),$_smarty_tpl);?>

                <?php echo smarty_function_hook(array('run'=>'copyright'),$_smarty_tpl);?>

                <?php echo smarty_function_hook(array('run'=>'footer_end'),$_smarty_tpl);?>

            
        </footer>
    </div> 


    
    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>'tags-favourite','template'=>'modal'),$_smarty_tpl);?>

    <?php }else{ ?>
        <?php echo smarty_function_component(array('_default_short'=>'auth','template'=>'modal'),$_smarty_tpl);?>

    <?php }?>


    
    <?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'component@admin.toolbar.admin','priority'=>100),$_smarty_tpl);?>

    <?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'component@toolbar-scrollup.toolbar.scrollup','priority'=>-100),$_smarty_tpl);?>


    
    <?php ob_start();?><?php /*  Call merged included template "blocks.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('blocks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'toolbar'), 0, '2978057a056ae879053-40945007');
content_57a056aea21b55_97700791($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "blocks.tpl" */?><?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar','classes'=>'js-toolbar-default','items'=>$_tmp2),$_smarty_tpl);?>



    <?php echo smarty_function_hook(array('run'=>'body_end'),$_smarty_tpl);?>


    <?php echo $_smarty_tpl->tpl_vars['sLayoutAfter']->value;?>

</body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:42
         compiled from "D:\xampp\htdocs\ls_alfa\application\frontend\skin\developer\navs\nav.tables.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a056ae9995f9_83356778')) {function content_57a056ae9995f9_83356778($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_lang')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'tables.domen1'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'tables.domen2'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'tables.domen3'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'tables.domen4'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'tables.domen5'),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'tables.domen6'),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'tables.others'),$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'nav','name'=>'tables','activeItem'=>$_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value,'mods'=>'pills','items'=>array(array('url'=>$_tmp1."domen1/",'text'=>$_tmp2,'name'=>'domen1'),array('url'=>$_tmp3."domen2/",'text'=>$_tmp4,'name'=>'domen2'),array('url'=>$_tmp5."domen3/",'text'=>$_tmp6,'name'=>'domen3'),array('url'=>$_tmp7."domen4/",'text'=>$_tmp8,'name'=>'domen4'),array('url'=>$_tmp9."domen5/",'text'=>$_tmp10,'name'=>'domen5'),array('url'=>$_tmp11."domen6/",'text'=>$_tmp12,'name'=>'domen6'),array('url'=>$_tmp13."others/",'text'=>$_tmp14,'name'=>'others'))),$_smarty_tpl);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-08-02 11:15:42
         compiled from "D:\xampp\htdocs\ls_alfa\application\frontend\skin\developer\blocks.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a056aea21b55_97700791')) {function content_57a056aea21b55_97700791($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_blocks')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\function.get_blocks.php';
if (!is_callable('smarty_insert_block')) include 'D:\\xampp\\htdocs\\ls_alfa\\framework/classes/modules/viewer/plugs\\insert.block.php';
?>

<?php echo smarty_function_get_blocks(array('assign'=>'aBlocksLoad'),$_smarty_tpl);?>


<?php if (isset($_smarty_tpl->tpl_vars['aBlocksLoad']->value[$_smarty_tpl->tpl_vars['group']->value])){?>
    <?php  $_smarty_tpl->tpl_vars['aBlock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aBlock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlocksLoad']->value[$_smarty_tpl->tpl_vars['group']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aBlock']->key => $_smarty_tpl->tpl_vars['aBlock']->value){
$_smarty_tpl->tpl_vars['aBlock']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['aBlock']->value['type']=='block'){?>
            <?php echo smarty_insert_block(array('block' => $_smarty_tpl->tpl_vars['aBlock']->value['name'], 'params' => $_smarty_tpl->tpl_vars['aBlock']->value['params']),$_smarty_tpl);?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['aBlock']->value['type']=='template'){?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['aBlock']->value['name'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('params'=>$_smarty_tpl->tpl_vars['aBlock']->value['params']), 0);?>

        <?php }?>
    <?php } ?>
<?php }?><?php }} ?>