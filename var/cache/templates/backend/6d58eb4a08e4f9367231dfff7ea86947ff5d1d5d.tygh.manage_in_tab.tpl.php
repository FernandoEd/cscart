<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 20:20:36
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\tabs\manage_in_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170871755360c78fe4c26768-99414294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d58eb4a08e4f9367231dfff7ea86947ff5d1d5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\tabs\\manage_in_tab.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '170871755360c78fe4c26768-99414294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c78fe4c5fa43_62078817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c78fe4c5fa43_62078817')) {function content_60c78fe4c5fa43_62078817($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="product_tabs") {?>hidden<?php }?>" id="content_product_tabs">
    <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--content_product_tabs--></div>
<?php }} ?>
