<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 20:20:18
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\common\content_more.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1699164460c78fd28a6ca3-63270777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86dccc8a29a65f9250f2ac0cea4d265690e70416' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\common\\content_more.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1699164460c78fd28a6ca3-63270777',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text_limit' => 0,
    'display' => 0,
    'text' => 0,
    'more_text' => 0,
    'meta' => 0,
    'visible_comment_lines' => 0,
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c78fd28b0a75_20223260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c78fd28b0a75_20223260')) {function content_60c78fd28b0a75_20223260($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('content_more'));
?>


<?php $_smarty_tpl->tpl_vars['text_limit'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['text_limit']->value)===null||$tmp==='' ? 600 : $tmp), null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>
    <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable((mb_strlen($_smarty_tpl->tpl_vars['text']->value, 'UTF-8')>$_smarty_tpl->tpl_vars['text_limit']->value), null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? "–" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['more_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['more_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("content_more") : $tmp), null, 0);?>

<div class="cs-content-more" data-ca-elem="contentMore">
    <div class="cs-content-more__text <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-elem="contentMoreText"
        <?php if ($_smarty_tpl->tpl_vars['visible_comment_lines']->value) {?>
            style="--cs-content-more-visible-comment-lines: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visible_comment_lines']->value, ENT_QUOTES, 'UTF-8');?>
;"
        <?php }?>
    >
        <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    </div>
    <div class="cs-content-more__btn-wrapper <?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>hidden<?php }?>" data-ca-elem="contentMoreBtnWrapper">
        <button type="button" class="cs-content-more__btn" data-ca-elem="contentMoreBtn">
            <?php echo $_smarty_tpl->tpl_vars['more_text']->value;?>

        </button>
    </div>
</div>
<?php }} ?>