<?php /* Smarty version Smarty-3.1.19, created on 2017-10-07 08:01:21
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/blockuserinfo/nav-xs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55145560459d82761c921d9-28519061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ac944b98063efc229134805e0e2c30d914035b7' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/blockuserinfo/nav-xs.tpl',
      1 => 1507175260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55145560459d82761c921d9-28519061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d82761cb6107_63589987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d82761cb6107_63589987')) {function content_59d82761cb6107_63589987($_smarty_tpl) {?><ul class="nav nav-pills nav-stacked visible-xs wk-nav-style">
	<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
		<li>
			<a class="navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my orders','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Booking History','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		</li>
		<li>
			<a class="navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Accounts Settings','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		</li>
		<li>
			<a class="navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
"  title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sign Out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		</li>
	<?php } else { ?>
		<li>
			<a class="navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		</li>
	<?php }?>
</ul><?php }} ?>
