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
            <h2><?php echo __("How Greatcoin Works") ?></h2>

            <div class="divider"></div>
            <p><?php echo __("It isn't just about sending money, it has many features and opens many possibilities that the community is still exploring. Here are some of the technologies currently being researched and in some cases, turned into real products and services.") ?></p>
            <br/>

            <div class="row">
                <div class="col-md-5">
                    <img src="/images/how_global-access.jpg" class="img-responsive img-styled mb10">
                </div>
                <div class="col-md-7">
                    <h4 class="page-subtitle mt0"><?php echo __("Global access") ?></h4>

                    <div class="divider"></div>
                    <p><?php echo __("All payments in the world can be fully interoperable. Any bank, business or individual are securely send and receive payments anywhere at any time, with or without a bank account. Greatcoin is available in a large number of countries that still remain out of reach for most payment systems due to their own limitations. Greatcoin increases global access to commerce and it can help international trades to flourish.") ?></p>
                </div>
            </div>
            <br/>

            <div class="row">
                <div class="col-md-5 col-md-push-7">
                    <img src="/images/how_cost-efficient.jpg" class="img-responsive img-styled mb10">
                </div>
                <div class="col-md-7 col-md-pull-5">
                    <h4 class="page-subtitle mt0"><?php echo __("Cost efficient") ?></h4>

                    <div class="divider"></div>
                    <p><?php echo __("Secure payments are possible without slow and costly middlemen with the help of cryptogrphy. Greatcoin transaction can be much cheaper than its alternatives and be completed in a short time, this means it holds some potential to become a common way to transfer any currency in the future. It could also play a role in reducing poverty in many countries by cutting high transaction fees on workers' salary.") ?></p>
                </div>
            </div>
            <br/>

            <div class="row">
                <div class="col-md-5">
                    <img src="/images/how_micro-tansaction.jpg" class="img-responsive img-styled mb10">
                </div>
                <div class="col-md-7">
                    <h4 class="page-subtitle mt0"><?php echo __("Micro transaction") ?></h4>

                    <div class="divider"></div>
                    <p><?php echo __("You can process payments to the scale of a dollar and soon even much smaller amounts. Such payments are routine even today. From viewing web pages with a small tip for each ad not shown, to buying bandwidth from a WiFi hotspot by the kilobyte. Greatcoin is efficient enough to make all of these ideas possible.") ?></p>
                </div>
            </div>
            <br/>

            <div class="row">
                <div class="col-md-5 col-md-push-7">
                    <img src="/images/how_flexibility.jpg" class="img-responsive img-styled mb10">
                </div>
                <div class="col-md-7 col-md-pull-5">
                    <h4 class="page-subtitle mt0"><?php echo __("Flexibility") ?></h4>

                    <div class="divider"></div>
                    <p><?php echo __("All the transactions are public and transparent and the identity of the people behind the payments is private by default. This allows individuals and organizations to work with flexible transparency rules. Now you can choose to reveal certain transactions and balances only to certain employees just like a non-profit organization is free to allow the public to see how much they receive in daily and monthly donations.") ?></p>
                </div>
            </div>
        </div>
    </div>
</section>