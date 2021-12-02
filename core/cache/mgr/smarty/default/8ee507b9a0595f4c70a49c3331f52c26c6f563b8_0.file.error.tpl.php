<?php
/* Smarty version 3.1.33, created on 2021-11-17 08:47:48
  from '/home/a/azizovlabg/institut/public_html/manager/templates/default/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61949784095e99_48762568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ee507b9a0595f4c70a49c3331f52c26c6f563b8' => 
    array (
      0 => '/home/a/azizovlabg/institut/public_html/manager/templates/default/error.tpl',
      1 => 1629185981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61949784095e99_48762568 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modx_error">
    <h2><i class="icon icon-exclamation-triangle"></i> An error occurred...</h2>

    <div class="error_container<?php if (count($_smarty_tpl->tpl_vars['_e']->value['errors']) > 0) {?> multiple<?php }?>">
        <p><?php echo $_smarty_tpl->tpl_vars['_e']->value['message'];?>
</p>

        <?php if (count($_smarty_tpl->tpl_vars['_e']->value['errors']) > 0) {?>
        <p>&nbsp;</p>
        <p><strong>Errors:</strong></p>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_e']->value['errors'], 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
            <li><i class="icon icon-angle-right"></i> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <?php }?>
    </div>
</div><?php }
}
