<?php /* Smarty version Smarty-3.1.19, created on 2017-10-07 08:01:21
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wktestimonialblock/views/templates/hook/hotelTestimonialNaviagtionMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138535247559d82761c7c811-17890454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc8b655f3179de5724efb272c4b8034eb5631f92' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wktestimonialblock/views/templates/hook/hotelTestimonialNaviagtionMenu.tpl',
      1 => 1507175261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138535247559d82761c7c811-17890454',
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
  'unifunc' => 'content_59d82761c86b23_98240188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d82761c86b23_98240188')) {function content_59d82761c86b23_98240188($_smarty_tpl) {?><li>
	<a class="navigation-link jsNaviLink" data-block="#hotelTestimonialBlock" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelTestimonialBlock<?php }?>"><?php echo smartyTranslate(array('s'=>'Testimonials','mod'=>'blocknevigationmenu'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
