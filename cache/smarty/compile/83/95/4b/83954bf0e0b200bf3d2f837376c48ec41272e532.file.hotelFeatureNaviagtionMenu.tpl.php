<?php /* Smarty version Smarty-3.1.19, created on 2017-10-07 08:01:21
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkhotelfeaturesblock/views/templates/hook/hotelFeatureNaviagtionMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27985680459d82761c4db57-57506414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83954bf0e0b200bf3d2f837376c48ec41272e532' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkhotelfeaturesblock/views/templates/hook/hotelFeatureNaviagtionMenu.tpl',
      1 => 1507175261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27985680459d82761c4db57-57506414',
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
  'unifunc' => 'content_59d82761c563d9_22128129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d82761c563d9_22128129')) {function content_59d82761c563d9_22128129($_smarty_tpl) {?><li>
	<a class="navigation-link jsNaviLink" data-block="#hotelAmenitiesBlock" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelAmenitiesBlock<?php }?>"><?php echo smartyTranslate(array('s'=>'Amenities','mod'=>'wkhotelfeaturesblock'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
