<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 20:20:18
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\reviews\customer_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148120275860c78fd2b7b8f1-21159757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52b354cce4f5f4fc66262b02e6e78715ba65bdb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\reviews\\customer_icon.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '148120275860c78fd2b7b8f1-21159757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c78fd2b91d76_22795794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c78fd2b91d76_22795794')) {function content_60c78fd2b91d76_22795794($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.verified_purchase','anonymous'));
?>


<?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_buyer']||$_smarty_tpl->tpl_vars['user_data']->value['user_id']) {?>
    
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_buyer']===smarty_modifier_enum("YesNo::YES")) {?>
        <i class="icon-ok-sign muted" title="<?php echo $_smarty_tpl->__("product_reviews.verified_purchase");?>
"></i>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_anon']) {?>
        <i class="icon-eye-close muted" title="<?php echo $_smarty_tpl->__("anonymous");?>
"></i>
    <?php }?>

<?php }?>
<?php }} ?>
