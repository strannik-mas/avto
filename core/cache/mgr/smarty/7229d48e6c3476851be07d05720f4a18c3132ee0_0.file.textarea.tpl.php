<?php /* Smarty version 3.1.27, created on 2016-11-29 17:49:22
         compiled from "D:\domains\avto\manager\templates\default\element\tv\renders\input\textarea.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25700583d8762f10fa9_92943861%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7229d48e6c3476851be07d05720f4a18c3132ee0' => 
    array (
      0 => 'D:\\domains\\avto\\manager\\templates\\default\\element\\tv\\renders\\input\\textarea.tpl',
      1 => 1469081620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25700583d8762f10fa9_92943861',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583d876304fa45_27164549',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583d876304fa45_27164549')) {
function content_583d876304fa45_27164549 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25700583d8762f10fa9_92943861';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" rows="15"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'textarea'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,value: '<?php echo strtr($_smarty_tpl->tpl_vars['tv']->value->get('value'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        ,height: 140
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    MODx.makeDroppable(fld);
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>