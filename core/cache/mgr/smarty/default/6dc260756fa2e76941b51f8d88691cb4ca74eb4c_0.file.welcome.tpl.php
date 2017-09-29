<?php /* Smarty version 3.1.27, created on 2016-12-01 17:41:10
         compiled from "D:\domains\avto\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3034858402876ec2eb5_30736109%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dc260756fa2e76941b51f8d88691cb4ca74eb4c' => 
    array (
      0 => 'D:\\domains\\avto\\manager\\templates\\default\\welcome.tpl',
      1 => 1469081622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3034858402876ec2eb5_30736109',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58402876ecea37_28345075',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58402876ecea37_28345075')) {
function content_58402876ecea37_28345075 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3034858402876ec2eb5_30736109';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>