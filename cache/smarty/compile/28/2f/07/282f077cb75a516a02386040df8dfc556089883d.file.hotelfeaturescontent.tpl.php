<?php /* Smarty version Smarty-3.1.19, created on 2017-10-07 08:01:22
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkhotelfeaturesblock/views/templates/hook/hotelfeaturescontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71286311959d827621b3b88-80786402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282f077cb75a516a02386040df8dfc556089883d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/hotelcommerce/modules/wkhotelfeaturesblock/views/templates/hook/hotelfeaturescontent.tpl',
      1 => 1507175261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71286311959d827621b3b88-80786402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOTEL_AMENITIES_HEADING' => 0,
    'HOTEL_AMENITIES_DESCRIPTION' => 0,
    'hotelAmenities' => 0,
    'amenityPosition' => 0,
    'module_dir' => 0,
    'amenity' => 0,
    'amenityIteration' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d82762212f35_24285742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d82762212f35_24285742')) {function content_59d82762212f35_24285742($_smarty_tpl) {?><div id="hotelAmenitiesBlock" class="row home_block_container">
    <div class="col-xs-12 col-sm-12 home_amenities_wrapper">
        <div class="row home_block_desc_wrapper">
            <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                <p class="home_block_heading"><?php echo $_smarty_tpl->tpl_vars['HOTEL_AMENITIES_HEADING']->value;?>
</p>
                <p class="home_block_description"><?php echo $_smarty_tpl->tpl_vars['HOTEL_AMENITIES_DESCRIPTION']->value;?>
</p>
                <hr class="home_block_desc_line"/>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['hotelAmenities']->value) {?>
            <div class="homeAmenitiesBlock home_block_content">
                <?php $_smarty_tpl->tpl_vars['amenityPosition'] = new Smarty_variable(0, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['amenityIteration'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['amenity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['amenity']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotelAmenities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['amenityBlock']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['amenity']->key => $_smarty_tpl->tpl_vars['amenity']->value) {
$_smarty_tpl->tpl_vars['amenity']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['amenityBlock']['iteration']++;
?>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['amenityBlock']['iteration']%2!=0) {?>
                        <div class="row margin-lr-0">
                        <?php if ($_smarty_tpl->tpl_vars['amenityPosition']->value) {?>
                            <?php $_smarty_tpl->tpl_vars['amenityPosition'] = new Smarty_variable(0, null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['amenityPosition'] = new Smarty_variable(1, null, 0);?>
                        <?php }?>
                    <?php }?>
                            <div class="col-md-6 padding-lr-0 hidden-xs hidden-sm">
                                <div class="row margin-lr-0 amenity_content">
                                    <?php if ($_smarty_tpl->tpl_vars['amenityPosition']->value) {?>
                                        <div class="col-md-6 padding-lr-0">
                                            <div class="amenity_img_primary">
                                                <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/hotels_features_img/<?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_image'];?>
')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 padding-lr-0 amenity_desc_cont">
                                            <div class="amenity_desc_primary">
                                                <div class="amenity_desc_secondary">
                                                    <p class="amenity_heading"><?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_title'];?>
</p>
                                                    <p class="amenity_description"><?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_description'];?>
</p>
                                                    <hr class="amenity_desc_hr" />
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-md-6 padding-lr-0 amenity_desc_cont">
                                            <div class="amenity_desc_primary">
                                                <div class="amenity_desc_secondary">
                                                    <p class="amenity_heading"><?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_title'];?>
</p>
                                                    <p class="amenity_description"><?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_description'];?>
</p>
                                                    <hr class="amenity_desc_hr" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 padding-lr-0">
                                            <div class="amenity_img_primary">
                                                <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/hotels_features_img/<?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_image'];?>
')">
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="col-sm-12 padding-lr-0 visible-sm">
                                <div class="row margin-lr-0 amenity_content">
                                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['amenityBlock']['iteration']%2!=0) {?>
                                        <div class="col-sm-6 padding-lr-0">
                                            <div class="amenity_img_primary">
                                                <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/hotels_features_img/<?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_image'];?>
')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 padding-lr-0 amenity_desc_cont">
                                            <div class="amenity_desc_primary">
                                                <div class="amenity_desc_secondary">
                                                    <p class="amenity_heading"><?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_title'];?>
</p>
                                                    <p class="amenity_description"><?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_description'];?>
</p>
                                                    <hr class="amenity_desc_hr" />
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-sm-6 padding-lr-0 amenity_desc_cont">
                                            <div class="amenity_desc_primary">
                                                <div class="amenity_desc_secondary">
                                                    <p class="amenity_heading"><?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_title'];?>
</p>
                                                    <p class="amenity_description"><?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_description'];?>
</p>
                                                    <hr class="amenity_desc_hr" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 padding-lr-0">
                                            <div class="amenity_img_primary">
                                                <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/hotels_features_img/<?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_image'];?>
')">
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="col-xs-12 padding-lr-0 visible-xs">
                                <div class="row margin-lr-0 amenity_content">
                                    <div class="col-xs-12 padding-lr-0">
                                        <div class="amenity_img_primary">
                                            <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/img/hotels_features_img/<?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_image'];?>
')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 padding-lr-0 amenity_desc_cont">
                                        <div class="amenity_desc_primary">
                                            <div class="amenity_desc_secondary">
                                                <p class="amenity_heading"><?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_title'];?>
</p>
                                                <p class="amenity_description"><?php echo $_smarty_tpl->tpl_vars['amenity']->value['feature_description'];?>
</p>
                                                <hr class="amenity_desc_hr" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['amenityBlock']['iteration']%2==0) {?>
                        </div>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['amenityIteration'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['amenityBlock']['iteration'], null, 0);?>
                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['amenityIteration']->value%2) {?>
                    </div>
                <?php }?>
            </div>
        <?php }?>
    </div>
    <hr class="home_block_seperator"/>
</div><?php }} ?>
