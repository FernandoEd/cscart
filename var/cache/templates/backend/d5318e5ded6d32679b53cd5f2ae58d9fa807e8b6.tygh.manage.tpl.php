<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 20:06:29
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\static_data\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127649087560c78c95985438-31178734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5318e5ded6d32679b53cd5f2ae58d9fa807e8b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\static_data\\manage.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '127649087560c78c95985438-31178734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_direction' => 0,
    'section_data' => 0,
    'section' => 0,
    'request_key' => 0,
    'request_value' => 0,
    'static_data' => 0,
    'direction' => 0,
    'is_allow_update_static_data' => 0,
    'owner_object_name' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c78c959d2fb5_73479068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c78c959d2fb5_73479068')) {function content_60c78c959d2fb5_73479068($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_data'));
?>
<?php if ($_smarty_tpl->tpl_vars['language_direction']->value=="rtl") {?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("right", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("left", null, 0);?>
<?php }?>

<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="static_data_tree_form" id="static_data_tree_form">
    <?php $_smarty_tpl->tpl_vars['static_data_statuses'] = new Smarty_variable(fn_get_default_statuses('',true), null, 0);?>

    <div class="<?php if (!fn_allow_save_object('',"static_data",$_smarty_tpl->tpl_vars['section_data']->value['skip_edition_checking'])) {?> cm-hide-inputs<?php }?>" id="static_data_list">
        <?php if ($_smarty_tpl->tpl_vars['section_data']->value['multi_level']==true) {?>
            <input name="section" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->tpl_vars['section_data']->value['owner_object']) {?>
                <?php $_smarty_tpl->tpl_vars["request_key"] = new Smarty_variable($_smarty_tpl->tpl_vars['section_data']->value['owner_object']['key'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars["owner_condition"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['request_key']->value)."=".((string)$_REQUEST[$_smarty_tpl->tpl_vars['request_key']->value]), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["request_value"] = new Smarty_variable($_REQUEST[$_smarty_tpl->tpl_vars['request_key']->value], null, 0);?>

                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_key']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_value']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["owner_condition"] = new Smarty_variable('', null, 0);?>
            <?php }?>

            <?php $_smarty_tpl->_capture_stack[0][] = array("static_data_table", null, null); ob_start(); ?>
                <div class="items-container multi-level longtap-selection">
                    <?php if ($_smarty_tpl->tpl_vars['static_data']->value) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/static_data/components/multi_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['static_data']->value,'header'=>true,'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0);?>

                    <?php } else { ?>
                        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
                    <?php }?>
                </div>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"static_data_tree_form",'object'=>"static_data",'items'=>Smarty::$_smarty_vars['capture']['static_data_table']), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/static_data/components/single_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
    <!--static_data_list--></div>

    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"static_data:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"static_data:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"static_data:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


        <?php if ($_smarty_tpl->tpl_vars['section_data']->value['multi_level']==true&&$_smarty_tpl->tpl_vars['static_data']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[static_data.m_update]",'but_role'=>"action",'but_target_form'=>"static_data_tree_form",'but_meta'=>"cm-submit"), 0);?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['is_allow_update_static_data']->value&&fn_allow_save_object('',"static_data",$_smarty_tpl->tpl_vars['section_data']->value['skip_edition_checking'])) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/static_data/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('static_data'=>array()), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_section",'text'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['section_data']->value['add_title']),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['section_data']->value['add_button']),'act'=>"general",'icon'=>"icon-plus"), 0);?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['owner_object_name']->value) {?>
    <?php ob_start();
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['section_data']->value['mainbox_title']);
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['owner_object_name']->value), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_smarty_tpl->__($_smarty_tpl->tpl_vars['section_data']->value['mainbox_title']), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'tools'=>Smarty::$_smarty_vars['capture']['tools'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true,'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>
<?php }} ?>