<?php /* Smarty version Smarty-3.1.21, created on 2021-06-10 20:55:47
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\cscart_points\views\loyalty\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17832717960c25223eabe70-57167800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee56f681fec0862d39d2e0abf3a5e25028d2b0a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\cscart_points\\views\\loyalty\\manage.tpl',
      1 => 1623347526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17832717960c25223eabe70-57167800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'value' => 0,
    'points' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c25223eb3346_03178773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c25223eb3346_03178773')) {function content_60c25223eb3346_03178773($_smarty_tpl) {?><table style="width:90%;height:90%;">
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
      
      <tr style=" border: 1px solid black;">
          <th  style=" border-right: 5px solid black;"  > 
            <a style="color:black;font-size:16px;margin-bottom:30%;"ref="admin.php?dispatch=loyalty.update&id_user=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['points'], ENT_QUOTES, 'UTF-8');?>
)</a>
            
        </th>
            
       <th>         
        <?php if (count($_smarty_tpl->tpl_vars['value']->value['pontos'])>0) {?>
            
                <?php  $_smarty_tpl->tpl_vars['points'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['points']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['pontos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['points']->key => $_smarty_tpl->tpl_vars['points']->value) {
$_smarty_tpl->tpl_vars['points']->_loop = true;
?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['points']->value['data'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['points']->value['points'], ENT_QUOTES, 'UTF-8');?>

                    <br>      
                <?php } ?>
            
        <?php }?>
        <form id="frm<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
points" method="POST" action="admin.php?dispatch=loyalty.manage" class="hidden">
            <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
"/>
           
            <input type="number" name="points"/>
            <input type="submit" value="OK"/> 
        </form>
</th>
            <th style=" border-left: 5px solid black;"><button style="height: 100%;width:100%;background:white;border:blanchedalmond" onclick="$('#frm<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
points').toggle();">
                Insert Points
         </button>
         
            </th>
        

            </tr>                
            <?php } ?>
   
    </table><?php }} ?>
