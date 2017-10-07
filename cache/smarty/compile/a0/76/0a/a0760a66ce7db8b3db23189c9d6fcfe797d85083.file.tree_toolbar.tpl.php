<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 06:05:19
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/admin/themes/default/template/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116156532359d5af7fc71cb8-03579379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0760a66ce7db8b3db23189c9d6fcfe797d85083' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/admin/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1507175259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116156532359d5af7fc71cb8-03579379',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d5af7fc77588_66953132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d5af7fc77588_66953132')) {function content_59d5af7fc77588_66953132($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
