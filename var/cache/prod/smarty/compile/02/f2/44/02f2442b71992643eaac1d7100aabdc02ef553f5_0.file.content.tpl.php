<?php
/* Smarty version 3.1.33, created on 2024-01-11 23:03:26
  from 'C:\wamp64\www\TestPrestashop\admin089b73rid\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_65a065aee84555_24725124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02f2442b71992643eaac1d7100aabdc02ef553f5' => 
    array (
      0 => 'C:\\wamp64\\www\\TestPrestashop\\admin089b73rid\\themes\\default\\template\\content.tpl',
      1 => 1704759410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a065aee84555_24725124 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
