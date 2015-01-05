<?php
use_helper('I18N');
?>
<section class="property-banner" id="page-banner">
    <img src="/images/page-property-banner.jpg" alt="" class="img-responsive">
</section>

<section id="content">
    <div class="row" id="gallery">
        <div class="col-md-3">
            <div class="sidebar-menu">
                <div class="sidebar-title">
                    <h2><?php echo __("Property") ?></h2>
                </div>
                <?php include_component('component', 'leftmenu', array("module" => $sf_context->getModuleName(), "action" => $sf_context->getActionName())) ?>
            </div>
        </div>
        <div class="col-md-9" id="page-content">
            <div class="row">
                <div class="col-md-8">
                    <h2><?php echo __("Development of a 24 Storey 5-Star Service Suites") ?></h2>

                    <div class="divider"></div>
                    <ul class="property-listing">
                        <li><?php echo __("Environment conducive to talent and knowledge-based industry.") ?></li>
                        <li><?php echo __("In the heart of Kuala Lumpur - minutes' walk to central business district and PETRONAS Twin Towers.") ?></li>
                        <li><?php echo __("Pedestrian-friendly environment.") ?></li>
                        <li><?php echo __("Public realm - open space for recreation and social activities.") ?></li>
                        <li><?php echo __("Arts and cultural centre.") ?></li>
                        <li><?php echo __("Build-in future-proof digital master plan.") ?></li>
                        <li><?php echo __("MRT accessibility and connectivity to major highways and airport.") ?></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="/images/propety-introduction_01.jpg" class="img-responsive img-styled mb10">
                    <img src="/images/propety-introduction_02.jpg" class="img-responsive img-styled mb10">
                    <img src="/images/propety-introduction_03.jpg" class="img-responsive img-styled mb10">
                </div>
            </div>
        </div>
    </div>
</section>