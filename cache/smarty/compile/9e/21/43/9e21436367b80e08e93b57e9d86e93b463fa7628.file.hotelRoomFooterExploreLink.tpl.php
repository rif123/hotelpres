<?php /* Smarty version Smarty-3.1.19, created on 2017-10-07 08:01:22
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkhotelroom/views/templates/hook/hotelRoomFooterExploreLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119505665759d82762438b14-07692912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e21436367b80e08e93b57e9d86e93b463fa7628' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkhotelroom/views/templates/hook/hotelRoomFooterExploreLink.tpl',
      1 => 1507175261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119505665759d82762438b14-07692912',
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
  'unifunc' => 'content_59d82762445935_04804202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d82762445935_04804202')) {function content_59d82762445935_04804202($_smarty_tpl) {?><li class="item">
	<a data-block="#hotelRoomsBlock" class="jsFooterTraverseBlock" title="<?php echo smartyTranslate(array('s'=>'Our Rooms','mod'=>'wkhotelroom'),$_smarty_tpl);?>
" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelRoomsBlock<?php }?>">
		<?php echo smartyTranslate(array('s'=>'Our Rooms','mod'=>'wkhotelroom'),$_smarty_tpl);?>

	</a>
</li><?php }} ?>
