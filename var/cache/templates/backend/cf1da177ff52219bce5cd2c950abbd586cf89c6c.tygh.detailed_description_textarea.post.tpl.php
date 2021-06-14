<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 19:52:30
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\blog\hooks\pages\detailed_description_textarea.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180895819360c7894eb678d9-68255554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf1da177ff52219bce5cd2c950abbd586cf89c6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\detailed_description_textarea.post.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '180895819360c7894eb678d9-68255554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7894eb7d1b8_52254267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7894eb7d1b8_52254267')) {function content_60c7894eb7d1b8_52254267($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ttc_post_description'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_post_description");?>
</p>
<?php }?><?php }} ?>
