<?php /* Smarty version Smarty-3.1.19, created on 2017-10-07 08:01:21
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkhotelroom/views/templates/hook/hotelRoomNaviagtionMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201249557459d82761c65003-29810803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '523148108ce995e158933c39a2f1b7e1aaa9a8e5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkhotelroom/views/templates/hook/hotelRoomNaviagtionMenu.tpl',
      1 => 1507175261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201249557459d82761c65003-29810803',
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
  'unifunc' => 'content_59d82761c6ddd2_74967494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d82761c6ddd2_74967494')) {function content_59d82761c6ddd2_74967494($_smarty_tpl) {?><li>
	<a class="navigation-link jsNaviLink" data-block="#hotelRoomsBlock" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelRoomsBlock<?php }?>"><?php echo smartyTranslate(array('s'=>'Our Rooms','mod'=>'wkhotelroom'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
