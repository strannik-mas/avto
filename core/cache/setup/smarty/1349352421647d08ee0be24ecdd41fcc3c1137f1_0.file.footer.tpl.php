<?php /* Smarty version 3.1.27, created on 2016-11-28 20:08:56
         compiled from "D:\domains\avto\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2062583c56984cb134_78270563%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1349352421647d08ee0be24ecdd41fcc3c1137f1' => 
    array (
      0 => 'D:\\domains\\avto\\setup\\templates\\footer.tpl',
      1 => 1469081622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062583c56984cb134_78270563',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583c5698505ab2_10419711',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583c5698505ab2_10419711')) {
function content_583c5698505ab2_10419711 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'D:/domains/avto/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '2062583c56984cb134_78270563';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>