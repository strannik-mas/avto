<?php /* Smarty version 3.1.27, created on 2016-11-29 17:49:23
         compiled from "D:\domains\avto\core\components\migx\elements\tv\tinymce.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26317583d8763112f73_53401347%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25aca49d398742258339429aa2a5bae3ea526494' => 
    array (
      0 => 'D:\\domains\\avto\\core\\components\\migx\\elements\\tv\\tinymce.tpl',
      1 => 1480368884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26317583d8763112f73_53401347',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583d87631b7098_77696679',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583d87631b7098_77696679')) {
function content_583d87631b7098_77696679 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26317583d8763112f73_53401347';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="rtf-tinymcetv tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    var tvid = 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
';
    
    var field = (Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
    field.onLoad = function(){
        //console.log('we load');
        if (typeof(Tiny) != 'undefined') {
		    var s={};
            if (Tiny.config){
                s = Tiny.config || {};
                delete s.assets_path;
                delete s.assets_url;
                delete s.core_path;
                delete s.css_path;
                delete s.editor;
                delete s.id;
                delete s.mode;
                delete s.path;
                s.cleanup_callback = "Tiny.onCleanup";
                var z = Ext.state.Manager.get(MODx.siteId + '-tiny');
                if (z !== false) {
                    delete s.elements;
                }			
		    }
			//s.mode = "specific_textareas";
            //s.editor_selector = "modx-richtext";
            			
            s.mode = "exact";
            s.elements = "tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
";              
 		    //s.language = "en";// de seems not to work at the moment
            tinyMCE.init(s);
            
		}
    };
        
    field.onHide = function(){
        //console.log('we hide');
        if (typeof(tinyMCE) != 'undefined') {
            var tinyinstance = tinyMCE.getInstanceById('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
');
            if (typeof(tinyinstance) != 'undefined') {
                tinyinstance.remove();
            }
        }     
    };
        
    field.onBeforeSubmit = function(){
        //console.log('we submit');
        if (typeof(tinyMCE) != 'undefined') {
            tinyMCE.getInstanceById('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
').save(); 
        }       
    };        


});

<?php echo '</script'; ?>
>
<?php }
}
?>