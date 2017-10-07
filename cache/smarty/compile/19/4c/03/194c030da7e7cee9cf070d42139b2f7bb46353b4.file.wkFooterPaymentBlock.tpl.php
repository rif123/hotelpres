<?php /* Smarty version Smarty-3.1.19, created on 2017-10-07 08:01:22
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkfooterpaymentblock/views/templates/hook/wkFooterPaymentBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13191623459d827624a2689-37020900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '194c030da7e7cee9cf070d42139b2f7bb46353b4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkfooterpaymentblock/views/templates/hook/wkFooterPaymentBlock.tpl',
      1 => 1507175261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13191623459d827624a2689-37020900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d827624ad1d8_55441868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d827624ad1d8_55441868')) {function content_59d827624ad1d8_55441868($_smarty_tpl) {?><div class="row">
	<section class="col-xs-12 col-sm-12">
		<div class="row margin-lr-0 footer-section-heading">
			<p><?php echo smartyTranslate(array('s'=>'payment accepted','mod'=>'wkfooterpaymentblock'),$_smarty_tpl);?>
</p>
			<hr/>
		</div>
		<div class="row margin-lr-0 footer-payment-block">
			<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/icon-visa.png">
			<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/icon-master-card.png">
			<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/icon-american-express.png">
			<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/icon-paypal.png">
		</div>
	</section>
</div><?php }} ?>
