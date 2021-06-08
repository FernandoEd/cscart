<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 21:07:28
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\addons\components\manage\addons_disabled_msg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141555994060bfb1e0e623b8-39274742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0fe2bdc9f3031d21946eb3d2cf7e316c2a420e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\addons\\components\\manage\\addons_disabled_msg.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '141555994060bfb1e0e623b8-39274742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bfb1e0e64f51_19556124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bfb1e0e64f51_19556124')) {function content_60bfb1e0e64f51_19556124($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('tools_addons_disabled_msg','tools_re_enable_add_ons'));
?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['init_addons']) {?>
    <div class="alert alert-block addon-info-msg">
        <span><?php echo $_smarty_tpl->__("tools_addons_disabled_msg");?>
</span>
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="dispatch" value="addons.tools">
            <button type="submit" class="btn btn-warning" name="init_addons" value="restore">
                <?php echo $_smarty_tpl->__("tools_re_enable_add_ons");?>

            </button>
        </form>
    </div>
<?php }?>
<?php }} ?>
