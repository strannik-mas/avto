<?php /* Smarty version 3.1.27, created on 2016-11-29 15:46:41
         compiled from "D:\domains\avto\core\components\migx\templates\mgr\setuptab.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2570583d6aa17b20d5_73286935%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84693684ef2d1b10501f3eb50357781a09e72227' => 
    array (
      0 => 'D:\\domains\\avto\\core\\components\\migx\\templates\\mgr\\setuptab.tpl',
      1 => 1480368884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2570583d6aa17b20d5_73286935',
  'variables' => 
  array (
    'cmptabcaption' => 0,
    'cmptabdescription' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583d6aa17cd660_97202523',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583d6aa17cd660_97202523')) {
function content_583d6aa17cd660_97202523 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2570583d6aa17b20d5_73286935';
?>
 
{
    title: '<?php echo $_smarty_tpl->tpl_vars['cmptabcaption']->value;?>
',
    defaults: {
        autoHeight: true
    },
    items: [{
        html: '<p><?php echo $_smarty_tpl->tpl_vars['cmptabdescription']->value;?>
</p>',
        border: false,
        bodyCssClass: 'panel-desc'
    },
    {
        xtype: 'form',
        id: 'migx_setup_form',
        standardSubmit: true,
        url: config.src,
        items: [{
            xtype: 'modx-tabs',
            id: 'migx-tab-setup',
            defaults: {
                border: false,
                autoHeight: true
            },
            border: true,
            items: [{
                title: 'Setup',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Setup MIGX-Configurator. (Creates/upgrades Configurations-table)</p>'
                         +'<p>Make allways backups before upgrading!</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.setupmigx('setupmigx')},
                    text: 'Setup',
                    scope: this
                }]
            },{
                title: 'Upgrade MIGX',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Adds the autoinc-field MIGX_id to all existing MIGX-TVs from older Versions</p>'
                    +'<p>Make allways backups before upgrading!</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.setupmigx('upgrademigx')},
                    text: 'Upgrade',
                    scope: this
                }]
            }]
        }]
    }]
}





<?php }
}
?>