<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 20:55:46
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\store_locator\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2440069460c25222ebb504-42059136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '238f965bd89dd66650057d6686ba9725d975305c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\store_locator\\hooks\\index\\styles.post.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2440069460c25222ebb504-42059136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_locator_shipping' => 0,
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c25222ec02c6_38446762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c25222ec02c6_38446762')) {function content_60c25222ec02c6_38446762($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.style.php';
?><?php if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value&&$_smarty_tpl->tpl_vars['shipping']->value['company_id']==0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }?><?php }} ?>
