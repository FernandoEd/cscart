<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 22:19:41
         compiled from "C:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\product_variations\hooks\products\product_multicolumns_list_control.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141194505860c7abcde6a9f4-76198364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0a2f12952005d9765d4bc28f77e62f1dc4d040d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\product_variations\\hooks\\products\\product_multicolumns_list_control.pre.tpl',
      1 => 1623081185,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '141194505860c7abcde6a9f4-76198364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_features' => 0,
    'product' => 0,
    'variation_feature' => 0,
    'variant' => 0,
    'addons' => 0,
    'variant_names' => 0,
    'variant_name' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7abcde84c07_76558960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7abcde84c07_76558960')) {function content_60c7abcde84c07_76558960($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['show_features']->value&&$_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("variation_features_variants", null, null); ob_start(); ?>
    <?php  $_smarty_tpl->tpl_vars['variation_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variation_feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variation_feature']->key => $_smarty_tpl->tpl_vars['variation_feature']->value) {
$_smarty_tpl->tpl_vars['variation_feature']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['display_on_catalog']===smarty_modifier_enum("YesNo::YES")) {?>
            <div class="ty-grid-list__item-features-item">
                <span class="ty-grid-list__item-features-description">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variation_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:
                </span>
                <?php $_smarty_tpl->tpl_vars['variant_names'] = new Smarty_variable(array(), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variation_feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['variant']->value['product_id']||$_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants']===smarty_modifier_enum("YesNo::YES")) {?>
                        <?php $_smarty_tpl->createLocalArrayVariable('variant_names', null, 0);
$_smarty_tpl->tpl_vars['variant_names']->value[] = $_smarty_tpl->tpl_vars['variant']->value['variant'];?>
                    <?php }?>
                <?php } ?>
                <?php  $_smarty_tpl->tpl_vars['variant_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant_name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variant_names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['variant_name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['variant_name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['variant_name']->key => $_smarty_tpl->tpl_vars['variant_name']->value) {
$_smarty_tpl->tpl_vars['variant_name']->_loop = true;
 $_smarty_tpl->tpl_vars['variant_name']->iteration++;
 $_smarty_tpl->tpl_vars['variant_name']->last = $_smarty_tpl->tpl_vars['variant_name']->iteration === $_smarty_tpl->tpl_vars['variant_name']->total;
?>
                    <span class="ty-grid-list__item-features-variant">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_name']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['variant_name']->last) {?>,<?php }?>
                    </span>
                <?php } ?>
            </div>
        <?php }?>
    <?php } ?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if (trim(Smarty::$_smarty_vars['capture']['variation_features_variants'])) {?>
        <div class="ty-grid-list__item-features">
            <?php echo Smarty::$_smarty_vars['capture']['variation_features_variants'];?>

        </div>
    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/product_multicolumns_list_control.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/product_multicolumns_list_control.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_features']->value&&$_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("variation_features_variants", null, null); ob_start(); ?>
    <?php  $_smarty_tpl->tpl_vars['variation_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variation_feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variation_feature']->key => $_smarty_tpl->tpl_vars['variation_feature']->value) {
$_smarty_tpl->tpl_vars['variation_feature']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['display_on_catalog']===smarty_modifier_enum("YesNo::YES")) {?>
            <div class="ty-grid-list__item-features-item">
                <span class="ty-grid-list__item-features-description">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variation_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:
                </span>
                <?php $_smarty_tpl->tpl_vars['variant_names'] = new Smarty_variable(array(), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variation_feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['variant']->value['product_id']||$_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants']===smarty_modifier_enum("YesNo::YES")) {?>
                        <?php $_smarty_tpl->createLocalArrayVariable('variant_names', null, 0);
$_smarty_tpl->tpl_vars['variant_names']->value[] = $_smarty_tpl->tpl_vars['variant']->value['variant'];?>
                    <?php }?>
                <?php } ?>
                <?php  $_smarty_tpl->tpl_vars['variant_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant_name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variant_names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['variant_name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['variant_name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['variant_name']->key => $_smarty_tpl->tpl_vars['variant_name']->value) {
$_smarty_tpl->tpl_vars['variant_name']->_loop = true;
 $_smarty_tpl->tpl_vars['variant_name']->iteration++;
 $_smarty_tpl->tpl_vars['variant_name']->last = $_smarty_tpl->tpl_vars['variant_name']->iteration === $_smarty_tpl->tpl_vars['variant_name']->total;
?>
                    <span class="ty-grid-list__item-features-variant">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_name']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['variant_name']->last) {?>,<?php }?>
                    </span>
                <?php } ?>
            </div>
        <?php }?>
    <?php } ?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if (trim(Smarty::$_smarty_vars['capture']['variation_features_variants'])) {?>
        <div class="ty-grid-list__item-features">
            <?php echo Smarty::$_smarty_vars['capture']['variation_features_variants'];?>

        </div>
    <?php }?>
<?php }?>
<?php }?><?php }} ?>
