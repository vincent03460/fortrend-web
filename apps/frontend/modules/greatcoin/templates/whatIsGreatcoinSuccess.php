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
            <h2><?php echo __("What is Greatcoin") ?></h2>

            <div class="divider"></div>
            <p><?php echo __("Greatcoin is a digital wallet, a substitute for your money,you can use Greatcoin just like using cash.Because of the depreciation, in 10 years time RM100 might still be RM100 but the value will not be RM100 anymore due to inflation.But Greatcoin is different. In 10 years, the value of RM100 will increase to RM1000-RM5000.") ?></p>

            <h4 class="mt20"><strong><?php echo __("Why use Greatcoin?") ?></strong></h4>

            <h4 class="page-subtitle"><i class="fa fa-fw">&#xf023;</i> <?php echo __("Safety") ?></h4>

            <p><?php echo __("Educate everyone to not use real money, by using current technology (apps or computer). Just as our banking network. While preventing robberies and other risks.") ?></p>

            <h4 class="page-subtitle"><i class="fa fa-fw">&#xf0d6;</i> <?php echo __("Value") ?></h4>

            <p>
                <?php echo __("Because we only provide a maximum of 30,000,000 units (30 million) we are now a corporate hypermarkets, developers, chain stores and all places. In the future, you can use GreatCoin to invest in the market. ") ?>
                <br/>
                <?php echo __("For example: real estate, stocks, foreign exchange, gold, futures, etc. Because of the limited amount of GreatCoins, the value will increase.") ?>
            </p>

            <h4 class="page-subtitle"><i class="fa fa-fw">&#xf0f2;</i> <?php echo __("Career") ?></h4>

            <p><?php echo __("At the same time, We also create career opportunities for the people, Because GreatCoin can turn liabilities into assets. If more people are using Greatcoin, it will increase more job opportunity, hence gain popularity and value of Greatcoin.") ?></p>
        </div>
    </div>
</section>