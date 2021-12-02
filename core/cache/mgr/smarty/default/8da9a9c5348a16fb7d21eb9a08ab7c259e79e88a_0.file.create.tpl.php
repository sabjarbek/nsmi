<?php
/* Smarty version 3.1.33, created on 2021-11-03 14:24:20
  from '/home/a/azizovlabg/institut/public_html/manager/templates/default/resource/staticresource/create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61827164035d43_66825743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8da9a9c5348a16fb7d21eb9a08ab7c259e79e88a' => 
    array (
      0 => '/home/a/azizovlabg/institut/public_html/manager/templates/default/resource/staticresource/create.tpl',
      1 => 1629185981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61827164035d43_66825743 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }
}
}
