<?php /* Smarty version Smarty-3.1.19, created on 2017-10-07 08:01:21
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkabouthotelblock/views/templates/hook/hotelInteriorNaviagtionMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198877256159d82761c36c97-35753014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cd3630658ed6a3a73026595932d66dce967e735' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkabouthotelblock/views/templates/hook/hotelInteriorNaviagtionMenu.tpl',
      1 => 1507175261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198877256159d82761c36c97-35753014',
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
  'unifunc' => 'content_59d82761c3f1f2_92366171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d82761c3f1f2_92366171')) {function content_59d82761c3f1f2_92366171($_smarty_tpl) {?><li>
	<a class="navigation-link jsNaviLink" data-block="#hotelInteriorBlock" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelInteriorBlock<?php }?>"><?php echo smartyTranslate(array('s'=>'Interior','mod'=>'wkabouthotelblock'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
