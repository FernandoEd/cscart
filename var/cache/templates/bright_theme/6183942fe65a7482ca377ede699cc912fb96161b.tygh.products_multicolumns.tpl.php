<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 20:07:07
         compiled from "C:\xampp\htdocs\cscart\design\themes\responsive\templates\blocks\product_list_templates\products_multicolumns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127936161160c78cbb0b1387-97690052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6183942fe65a7482ca377ede699cc912fb96161b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\blocks\\product_list_templates\\products_multicolumns.tpl',
      1 => 1623081178,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '127936161160c78cbb0b1387-97690052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_add_to_cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c78cbb0bdaf8_73638809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c78cbb0bdaf8_73638809')) {function content_60c78cbb0bdaf8_73638809($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_rating'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_add_to_cart'=>(($tmp = @$_smarty_tpl->tpl_vars['show_add_to_cart']->value)===null||$tmp==='' ? false : $tmp),'but_role'=>"action",'show_features'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/products_multicolumns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_list_templates/products_multicolumns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_rating'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_add_to_cart'=>(($tmp = @$_smarty_tpl->tpl_vars['show_add_to_cart']->value)===null||$tmp==='' ? false : $tmp),'but_role'=>"action",'show_features'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true), 0);
}?><?php }} ?>