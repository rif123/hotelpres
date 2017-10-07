<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 06:05:19
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179964510859d5af7f0d1b90-96999216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f80841b9b1d86a4dcc7c7ab8f914150caf8b773' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1507175259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179964510859d5af7f0d1b90-96999216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d5af7f0d54e6_00389754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d5af7f0d54e6_00389754')) {function content_59d5af7f0d54e6_00389754($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
