<?php /* Smarty version Smarty-3.1.19, created on 2017-10-07 08:01:22
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkhotelfeaturesblock/views/templates/hook/hotelFeatureFooterExploreLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21728446559d8276241b809-08108380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78a280a44b82e56a8e962f945c134a537b593626' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkhotelfeaturesblock/views/templates/hook/hotelFeatureFooterExploreLink.tpl',
      1 => 1507175261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21728446559d8276241b809-08108380',
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
  'unifunc' => 'content_59d8276242ad07_43552600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d8276242ad07_43552600')) {function content_59d8276242ad07_43552600($_smarty_tpl) {?><li class="item">
	<a data-block="#hotelAmenitiesBlock" class="jsFooterTraverseBlock" title="<?php echo smartyTranslate(array('s'=>'Amenities','mod'=>'wkhotelfeaturesblock'),$_smarty_tpl);?>
" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelAmenitiesBlock<?php }?>">
		<?php echo smartyTranslate(array('s'=>'Amenities','mod'=>'wkhotelfeaturesblock'),$_smarty_tpl);?>

	</a>
</li><?php }} ?>
