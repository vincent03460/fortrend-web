<?php
use_helper('I18N');
?>
<section class="property-banner" id="page-banner">
    <img src="/images/page-property-banner.jpg" alt="" class="img-responsive">
</section>

<section id="content">
    <div class="row">
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
                    <h2><?php echo __("Concept") ?></h2>

                    <div class="divider"></div>
                    <p>
                        <?php echo __("138 precious suites available, spaciously distributed up to 24 levels. The apartment is close to work and offers you space for leisure and recreation when you reach home.") ?>
                        <br/><br/>
                        <?php echo __("Located strategically in the vibrant city life of KL, this development has been designed as a lifestyle hub for the vibrant, upwardly mobile community.") ?>
                        <br/><br/>
                        <?php echo __("And when you make your home at here, the vibrant life in the heart of Malaysia will be right at your doorstep.") ?>
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="/images/concept_01.jpg" class="img-responsive img-styled mb10">
                </div>
            </div>
        </div>
    </div>
</section>
