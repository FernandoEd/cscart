<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 22:16:59
         compiled from "C:\xampp\htdocs\cscart\design\themes\responsive\templates\blocks\wrappers\sidebox_general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93513458060c7ab2ba98d94-42165178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307c6a49cf6b4f504b295716aa9450940f68f9ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\blocks\\wrappers\\sidebox_general.tpl',
      1 => 1623081178,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '93513458060c7ab2ba98d94-42165178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'content' => 0,
    'sidebox_wrapper' => 0,
    'hide_wrapper' => 0,
    'block' => 0,
    'content_alignment' => 0,
    'header_class' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7ab2babb458_00210410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7ab2babb458_00210410')) {function content_60c7ab2babb458_00210410($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['sidebox_wrapper']->value)===null||$tmp==='' ? "ty-sidebox" : $tmp), ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['hide_wrapper']->value)) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->tpl_vars['hide_wrapper']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value=="RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=="LEFT") {?> ty-float-left<?php }?>">
        <h3 class="ty-sidebox__title cm-combination <?php if ($_smarty_tpl->tpl_vars['header_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['header_class']->value, ENT_QUOTES, 'UTF-8');
}?>" id="sw_sidebox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"wrapper:sidebox_general_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"wrapper:sidebox_general_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (trim(Smarty::$_smarty_vars['capture']['title'])) {?>
            <span class="hidden-phone">
                <?php echo Smarty::$_smarty_vars['capture']['title'];?>

            </span>
            <?php } else { ?>
                <span class="ty-sidebox__title-wrapper hidden-phone"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
            <?php }?>
                <?php if (trim(Smarty::$_smarty_vars['capture']['title'])) {?>
                    <span class="visible-phone">
                        <?php echo Smarty::$_smarty_vars['capture']['title'];?>

                    </span>
                <?php } else { ?>
                    <span class="ty-sidebox__title-wrapper visible-phone"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
                <?php }?>
                <span class="ty-sidebox__title-toggle visible-phone">
                    <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                    <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                </span>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"wrapper:sidebox_general_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </h3>
        <div class="ty-sidebox__body" id="sidebox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</div>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/wrappers/sidebox_general.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/wrappers/sidebox_general.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['sidebox_wrapper']->value)===null||$tmp==='' ? "ty-sidebox" : $tmp), ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['hide_wrapper']->value)) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->tpl_vars['hide_wrapper']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value=="RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=="LEFT") {?> ty-float-left<?php }?>">
        <h3 class="ty-sidebox__title cm-combination <?php if ($_smarty_tpl->tpl_vars['header_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['header_class']->value, ENT_QUOTES, 'UTF-8');
}?>" id="sw_sidebox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"wrapper:sidebox_general_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"wrapper:sidebox_general_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (trim(Smarty::$_smarty_vars['capture']['title'])) {?>
            <span class="hidden-phone">
                <?php echo Smarty::$_smarty_vars['capture']['title'];?>

            </span>
            <?php } else { ?>
                <span class="ty-sidebox__title-wrapper hidden-phone"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
            <?php }?>
                <?php if (trim(Smarty::$_smarty_vars['capture']['title'])) {?>
                    <span class="visible-phone">
                        <?php echo Smarty::$_smarty_vars['capture']['title'];?>

                    </span>
                <?php } else { ?>
                    <span class="ty-sidebox__title-wrapper visible-phone"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
                <?php }?>
                <span class="ty-sidebox__title-toggle visible-phone">
                    <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                    <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                </span>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"wrapper:sidebox_general_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </h3>
        <div class="ty-sidebox__body" id="sidebox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</div>
    </div>
<?php }
}?><?php }} ?>
