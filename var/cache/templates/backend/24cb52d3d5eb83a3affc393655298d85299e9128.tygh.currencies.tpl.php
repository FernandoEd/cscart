<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 22:16:51
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\storefronts\components\currencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73786388460c7ab231b6093-84862616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24cb52d3d5eb83a3affc393655298d85299e9128' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\storefronts\\components\\currencies.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '73786388460c7ab231b6093-84862616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'all_currencies' => 0,
    'currency' => 0,
    'currency_storefront_ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7ab231bd058_39969894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7ab231bd058_39969894')) {function content_60c7ab231bd058_39969894($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('currencies','storefronts.manage_currency_availability'));
?>


<div class="control-group">
    <label for="currencies_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("currencies");?>

    </label>
    <div class="controls" id="currencies_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['currency_storefront_ids'] = new Smarty_variable(array(), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['currency']->value['storefront_ids']) {?>
                <?php $_smarty_tpl->tpl_vars['currency_storefront_ids'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['currency']->value['storefront_ids']), null, 0);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['currency_storefront_ids']->value===array()||in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['currency_storefront_ids']->value)) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
        <?php } ?>
        <p><a href="<?php echo htmlspecialchars(fn_url("currencies.manage"), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("storefronts.manage_currency_availability");?>
</a></p>
    </div>
</div>
<?php }} ?>
