<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 19:52:31
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\blog\hooks\pages\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186728830460c7894f14a228-64462198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8b63010e4b3818bf1c165bc0a53ab00c7688076' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\detailed_content.post.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '186728830460c7894f14a228-64462198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7894f16aa87_84518174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7894f16aa87_84518174')) {function content_60c7894f16aa87_84518174($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('blog','image'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("blog"),'target'=>"#blog_image"), 0);?>

<div id="blog_image" class="in collapse">
    <fieldset>
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("image");?>
:</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"blog_image",'image_object_type'=>"blog",'image_pair'=>$_smarty_tpl->tpl_vars['page_data']->value['main_pair'],'no_detailed'=>true,'hide_titles'=>true), 0);?>

            </div>
        </div>
    </fieldset>
</div>

<?php }?>
<?php }} ?>
