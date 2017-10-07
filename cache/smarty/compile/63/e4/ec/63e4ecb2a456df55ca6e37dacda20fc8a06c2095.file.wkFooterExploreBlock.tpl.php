<?php /* Smarty version Smarty-3.1.19, created on 2017-10-07 08:01:22
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkfooterexploreblock/views/templates/hook/wkFooterExploreBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37104615959d827623d2bc5-24732423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63e4ecb2a456df55ca6e37dacda20fc8a06c2095' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkfooterexploreblock/views/templates/hook/wkFooterExploreBlock.tpl',
      1 => 1507175261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37104615959d827623d2bc5-24732423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d827623efd56_22584567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d827623efd56_22584567')) {function content_59d827623efd56_22584567($_smarty_tpl) {?><div class="col-sm-3">
	<div class="row">
		<section class="col-xs-12 col-sm-12">
			<div class="row margin-lr-0 footer-section-heading">
				<p><?php echo smartyTranslate(array('s'=>'Explore','mod'=>'wkfooterexploreblock'),$_smarty_tpl);?>
</p>
				<hr/>
			</div>
			<div class="row margin-lr-0">
				<ul class="footer-explore-section">
					<li class="item">
						<a title="<?php echo smartyTranslate(array('s'=>'Home','mod'=>'wkfooterexploreblock'),$_smarty_tpl);?>
" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>">
							<?php echo smartyTranslate(array('s'=>'Home','mod'=>'wkfooterexploreblock'),$_smarty_tpl);?>

						</a>
					</li>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayFooterExploreSectionHook"),$_smarty_tpl);?>

					<li class="item">
						<a title="<?php echo smartyTranslate(array('s'=>'Contact','mod'=>'wkfooterexploreblock'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
">
							<?php echo smartyTranslate(array('s'=>'Contact','mod'=>'wkfooterexploreblock'),$_smarty_tpl);?>

						</a>
					</li>
				</ul>
			</div>
		</section>
	</div>
</div>

<?php }} ?>
