<?php /* Smarty version Smarty-3.1.19, created on 2017-10-07 08:01:22
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkabouthotelblock/views/templates/hook/hotelInteriorFooterExploreLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69809953659d82762402848-20878788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ff43aa60303c53b40c7396c6bf26d1c2b00ff70' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkabouthotelblock/views/templates/hook/hotelInteriorFooterExploreLink.tpl',
      1 => 1507175261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69809953659d82762402848-20878788',
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
  'unifunc' => 'content_59d8276240f297_00507331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d8276240f297_00507331')) {function content_59d8276240f297_00507331($_smarty_tpl) {?><li class="item">
	<a data-block="#hotelInteriorBlock" class="jsFooterTraverseBlock" title="<?php echo smartyTranslate(array('s'=>'Interior','mod'=>'wkabouthotelblock'),$_smarty_tpl);?>
" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelInteriorBlock<?php }?>">
		<?php echo smartyTranslate(array('s'=>'Interior','mod'=>'wkabouthotelblock'),$_smarty_tpl);?>

	</a>
</li><?php }} ?>
