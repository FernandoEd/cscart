<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 20:02:44
         compiled from "C:\xampp\htdocs\cscart\design\themes\bright_theme\templates\addons\blog\blocks\text_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17831983260c78bb4550632-30526066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b4520ee6e20796d526001f3158af9db8effc76f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\bright_theme\\templates\\addons\\blog\\blocks\\text_links.tpl',
      1 => 1623081186,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17831983260c78bb4550632-30526066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    'page' => 0,
    'settings' => 0,
    'parent_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c78bb4562fa9_97715738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c78bb4562fa9_97715738')) {function content_60c78bb4562fa9_97715738($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view_all','view_all'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['parent_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['content']['items']['parent_page_id'], null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div class="ty-blog-text-links">
        <ul>
            <?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
?>
                <li class="ty-blog-text-links__item">
                    <div class="ty-blog-text-links__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>
</div>
                    <a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-blog-text-links__a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a>
                </li>
            <?php } ?>
        </ul>

        <?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
        <div class="ty-mtb-s ty-uppercase">
            <a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['parent_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_all");?>
</a>
        </div>
        <?php }?>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/blog/blocks/text_links.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/blog/blocks/text_links.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars['parent_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['content']['items']['parent_page_id'], null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div class="ty-blog-text-links">
        <ul>
            <?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
?>
                <li class="ty-blog-text-links__item">
                    <div class="ty-blog-text-links__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>
</div>
                    <a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-blog-text-links__a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a>
                </li>
            <?php } ?>
        </ul>

        <?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
        <div class="ty-mtb-s ty-uppercase">
            <a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['parent_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_all");?>
</a>
        </div>
        <?php }?>
    </div>
<?php }
}?><?php }} ?>