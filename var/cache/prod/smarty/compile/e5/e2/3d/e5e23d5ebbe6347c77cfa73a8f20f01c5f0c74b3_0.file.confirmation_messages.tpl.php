<?php
/* Smarty version 3.1.33, created on 2024-01-11 23:03:40
  from 'C:\wamp64\www\TestPrestashop\admin089b73rid\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_65a065bcd6f975_28578951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5e23d5ebbe6347c77cfa73a8f20f01c5f0c74b3' => 
    array (
      0 => 'C:\\wamp64\\www\\TestPrestashop\\admin089b73rid\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1704759408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a065bcd6f975_28578951 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
