<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 19:52:30
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\social_buttons\hooks\pages\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86875600460c7894ee95f31-25237958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65a8c51f426e40e0b5629e65c3f8aa1127d20970' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\social_buttons\\hooks\\pages\\detailed_content.post.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '86875600460c7894ee95f31-25237958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'addons' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7894eeaa441_64011339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7894eeaa441_64011339')) {function content_60c7894eeaa441_64011339($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_type']->value!=(defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"page_data",'object_data'=>$_smarty_tpl->tpl_vars['page_data']->value), 0);?>

    <?php }?>
<?php }?>
<?php }} ?>
