<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 20:20:18
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\product_reviews\views\product_reviews\components\reviews\review_status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187365103960c78fd2cbba61-14098602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2617f5fe2c29d2d8117db1e5489fa248f0a7d6a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\reviews\\review_status.tpl',
      1 => 1622708843,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '187365103960c78fd2cbba61-14098602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_review_status' => 0,
    'config' => 0,
    'product_review_id' => 0,
    'product_review_status_descr' => 0,
    'rev' => 0,
    'return_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c78fd2cdb092_73710861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c78fd2cdb092_73710861')) {function content_60c78fd2cdb092_73710861($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['product_review_status']->value) {?>
    <?php $_smarty_tpl->tpl_vars['return_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"product_review",'id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'status'=>$_smarty_tpl->tpl_vars['product_review_status']->value,'items_status'=>$_smarty_tpl->tpl_vars['product_review_status_descr']->value,'object_id_name'=>"product_review_id",'table'=>"product_reviews",'st_result_ids'=>$_smarty_tpl->tpl_vars['rev']->value,'btn_meta'=>"nowrap cs-product-reviews-reviews-review-status__btn",'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'ajax_full_render'=>true), 0);?>


<?php }?>
<?php }} ?>
