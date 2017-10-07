<?php /* Smarty version Smarty-3.1.19, created on 2017-10-07 08:01:22
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wktestimonialblock/views/templates/hook/hotelTestimonialFooterExploreLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61112344859d82762454125-19708094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9d6c0206c9a246d1f5063b5b04604cca6c46723' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wktestimonialblock/views/templates/hook/hotelTestimonialFooterExploreLink.tpl',
      1 => 1507175261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61112344859d82762454125-19708094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d82762461993_24268416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d82762461993_24268416')) {function content_59d82762461993_24268416($_smarty_tpl) {?><li class="item">
	<a data-block="#hotelTestimonialBlock" class="jsFooterTraverseBlock" title="<?php echo smartyTranslate(array('s'=>'Testimonials','mod'=>'blocknevigationmenu'),$_smarty_tpl);?>
" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelTestimonialBlock<?php }?>">
		<?php echo smartyTranslate(array('s'=>'Testimonials','mod'=>'blocknevigationmenu'),$_smarty_tpl);?>

	</a>
</li><?php }} ?>
