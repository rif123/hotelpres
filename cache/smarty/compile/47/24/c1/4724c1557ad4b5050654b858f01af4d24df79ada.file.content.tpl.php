<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 06:05:17
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/admin/themes/default/template/controllers/addons_catalog/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204919824459d5af7df01041-41350783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4724c1557ad4b5050654b858f01af4d24df79ada' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/admin/themes/default/template/controllers/addons_catalog/content.tpl',
      1 => 1507175259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204919824459d5af7df01041-41350783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d5af7df06857_45756289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d5af7df06857_45756289')) {function content_59d5af7df06857_45756289($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
