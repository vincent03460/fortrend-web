<?php
use_helper('I18N');
?>
<section id="page-banner">
    <img src="/images/page-greatcoin-banner.jpg" alt="" class="img-responsive">
</section>

<section id="content">
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar-menu">
                <div class="sidebar-title">
                    <h2><?php echo __("Greatcoin") ?></h2>
                </div>
                <?php include_component('component', 'leftmenu', array("module" => $sf_context->getModuleName(), "action" => $sf_context->getActionName())) ?>
            </div>
        </div>
        <div class="col-md-9" id="page-content">
            <h2><?php echo __("Greatcoin") ?></h2>

            <div class="divider"></div>
            <p><?php echo __("From a user perspective, Greatcoin is pretty much like cash for the Internet. Greatcoin is unique in that only 30 million greatcoins will ever be created.") ?></p>
        </div>
    </div>
</section>