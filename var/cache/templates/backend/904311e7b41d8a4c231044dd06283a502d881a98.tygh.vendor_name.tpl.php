<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 20:20:18
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\reviews\vendor_name.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134327979460c78fd2a35305-95441625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '904311e7b41d8a4c231044dd06283a502d881a98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\reviews\\vendor_name.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '134327979460c78fd2a35305-95441625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_review_reply' => 0,
    'NAME_CHARACTERS_THRESHOLD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c78fd2a53fa9_49531707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c78fd2a53fa9_49531707')) {function content_60c78fd2a53fa9_49531707($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\modifier.truncate.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('administrator'));
?>


<?php $_smarty_tpl->tpl_vars['NAME_CHARACTERS_THRESHOLD'] = new Smarty_variable(30, null, 0);
if ($_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company']) {?><a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company_id'])), ENT_QUOTES, 'UTF-8');?>
"title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company'],$_smarty_tpl->tpl_vars['NAME_CHARACTERS_THRESHOLD']->value,"...",true), ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?><span><?php echo $_smarty_tpl->__("administrator");?>
</span><?php }?>
<?php }} ?>
