<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 21:07:29
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\addons\components\manage\manage_adv_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132347237660bfb1e1dac863-84777148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b202a72fb4d1b3347f7db40e4e85c9812ff9180b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\addons\\components\\manage\\manage_adv_buttons.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '132347237660bfb1e1dac863-84777148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bfb1e1db1299_24231456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bfb1e1db1299_24231456')) {function content_60bfb1e1db1299_24231456($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('visit_marketplace'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:adv_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:adv_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url(((string)$_smarty_tpl->tpl_vars['config']->value['resources']['marketplace_url'])),'but_text'=>$_smarty_tpl->__("visit_marketplace"),'but_meta'=>"btn btn-primary",'but_role'=>"action",'but_target'=>"_blank"), 0);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:adv_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
