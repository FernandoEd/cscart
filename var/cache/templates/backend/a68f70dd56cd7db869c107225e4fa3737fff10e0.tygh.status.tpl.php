<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 22:16:50
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\storefronts\components\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139833421760c7ab22e0ce91-27630113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a68f70dd56cd7db869c107225e4fa3737fff10e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\storefronts\\components\\status.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '139833421760c7ab22e0ce91-27630113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7ab22e14695_05771841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7ab22e14695_05771841')) {function content_60c7ab22e14695_05771841($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('storefront_status','storefront_status.tooltip','ttc_stores_status'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[status]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("storefront_status");?>

    </label>
    <div class="controls">
        <input type="hidden"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');?>
"
        />

        <?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('checked'=>$_smarty_tpl->tpl_vars['status']->value===smarty_modifier_enum("StorefrontStatuses::OPEN"),'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value),'input_value'=>smarty_modifier_enum("StorefrontStatuses::OPEN"),'input_id'=>"status_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0);?>


        <p>
            <?php echo $_smarty_tpl->__("storefront_status.tooltip");?>

        </p>

        <p class="muted description"><?php echo $_smarty_tpl->__("ttc_stores_status");?>
</p>
    </div>
</div>
<?php }} ?>
