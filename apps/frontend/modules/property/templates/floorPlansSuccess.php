<?php
use_helper('I18N');
?>
<section class="property-banner" id="page-banner">
    <img src="/images/page-property-banner.jpg" alt="" class="img-responsive">
</section>

<section id="content">
    <div class="row" id="floor-plans">
        <div class="col-md-3">
            <div class="sidebar-menu">
                <div class="sidebar-title">
                    <h2><?php echo __("Property") ?></h2>
                </div>
                <?php include_component('component', 'leftmenu', array("module" => $sf_context->getModuleName(), "action" => $sf_context->getActionName())) ?>
            </div>
        </div>
        <div class="col-md-9" id="page-content">
            <h2><?php echo __("Floor Plans") ?></h2>

            <div class="divider"></div>

            <div class="row mb20">
                <div class="col-xs-6">
                    <img src="/images/floor-plans_1200psf.jpg" class="img-responsive img-styled mb10">

                    <p class="textCetner"><?php echo __("Suite - %1% sqft", array("%1%" => "1,200")) ?></p>
                </div>
                <div class="col-xs-6">
                    <img src="/images/floor-plans_800psf.jpg" class="img-responsive img-styled mb10">

                    <p class="textCetner"><?php echo __("Suite - %1% sqft", array("%1%" => "800")) ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <img src="/images/floor-plans_600psf.jpg" class="img-responsive img-styled mb10">

                    <p class="textCetner"><?php echo __("Suite - %1% sqft", array("%1%" => "600")) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>