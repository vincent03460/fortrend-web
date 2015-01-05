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
            <h2><?php echo __("Benefits of Greatcoin") ?></h2>

            <div class="divider"></div>
            <p><?php echo __("Greatcoin has several important features that set it apart from normal fiat currencies.") ?></p>
            <br/>

            <div class="row">
                <div class="col-md-3">
                    <img src="/images/benefits-decentralize.jpg" class="img-responsive img-styled mb10">
                </div>
                <div class="col-md-9">
                    <h4 class="page-subtitle mt0"><?php echo __("It's decentralized") ?></h4>

                    <p><?php echo __("Every machine that generates Greatcoin and processes transactions makes up a part of the network, and the machines work together. In summary, one central authority can't tinker with monetary policy and cause a meltdown - or simply decide to take people's Greatcoins away from them. If some part of the network goes offline for some reason, the money keeps on flowing.") ?></p>
                </div>
            </div>

            <div class="row mt20">
                <div class="col-md-3">
                    <img src="/images/benefits-easy-setup.jpg" class="img-responsive img-styled mb10">
                </div>
                <div class="col-md-9">
                    <h4 class="page-subtitle mt0"><?php echo __("Quick and Easy to set up") ?></h4>

                    <p><?php echo __("Conventional banks make you jump through hoops simply to open a bank account, back and forth, its not fun. As for Greatcoin, you can set up an address in seconds, no questions asked, and with no fees payable.") ?></p>
                </div>
            </div>

            <div class="row mt20">
                <div class="col-md-3">
                    <img src="/images/benefits-private.jpg" class="img-responsive img-styled mb10">
                </div>
                <div class="col-md-9">
                    <h4 class="page-subtitle mt0"><?php echo __("Private & Confidential") ?></h4>

                    <p><?php echo __("Greatcoin stores details of every single transaction that ever happened in the network. If you have a publicly used Greatcoin address, anyone can tell how many Greatcoins are stored at that address. They just don't know that it's yours.") ?></p>
                </div>
            </div>

            <div class="row mt20">
                <div class="col-md-3">
                    <img src="/images/benefits-send_money.jpg" class="img-responsive img-styled mb10">
                </div>
                <div class="col-md-9">
                    <h4 class="page-subtitle mt0"><?php echo __("Send Money anywhere") ?></h4>

                    <p><?php echo __("You can send money anywhere and it will arrive minutes later, no hassle!") ?></p>
                </div>
            </div>

            <div class="row mt20">
                <div class="col-md-3">
                    <img src="/images/benefits-non-repudiable.jpg" class="img-responsive img-styled mb10">
                </div>
                <div class="col-md-9">
                    <h4 class="page-subtitle mt0"><?php echo __("It's non-repudiable") ?></h4>

                    <p><?php echo __("When your Greatcoins are sent, there's no getting them back, unless the recipient returns them to you. They're gone forever. <br/>So, Greatcoin has a lot going for. so what are you waiting for? sign up now!") ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
