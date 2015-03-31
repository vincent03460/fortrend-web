<?php
use_helper('I18N');
?>

<style type="text/css">
    .portfolio-pad .portfolio-item-link {
        min-height: 199px;
    }

    .portfolio-pad .portfolio-item {
        background-image: none;
        margin-bottom: 12px;
    }
</style>

<div class="content">
    <div class="container">
        <div class="row">

            <div class="sidebar col-lg-3 col-md-3 col-sm-4 col-xs-12">

                <!-- Category Widget Start -->
                <div class="widget category">
                    <?php include_component("component", "leftmenu2", array("action" => $sf_context->getActionName(), "module" => $sf_context->getModuleName())) ?>
                </div>
                <!-- Category Widget End -->

            </div>

            <div class="posts-block col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row portfolio-pad">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3 animate_start">
                        <div class="portfolio-item">
                            <a href="/images/blog/core_value/page4-1.jpg" class="portfolio-item-link" data-rel="prettyPhoto">
                                <span class="portfolio-item-hover" style="opacity: 0;"></span><span class="fullscreen" style="top: 65%; opacity: 0;"><i class="fa fa-search"></i></span><img src="/images/blog/core_value/page4-1.jpg" alt=" ">
                            </a>
                            <div class="portfolio-item-title">
                                <strong><?php echo _("柬埔寨投资的楼盘之一") ?></strong>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3 animate_start">
                        <div class="portfolio-item">
                            <a href="/images/blog/core_value/page4-2.jpg" class="portfolio-item-link" data-rel="prettyPhoto">
                                <span class="portfolio-item-hover" style="opacity: 0;"></span><span class="fullscreen" style="top: 65%; opacity: 0;"><i class="fa fa-search"></i></span><img src="/images/blog/core_value/page4-2.jpg" alt=" ">
                            </a>
                            <div class="portfolio-item-title">
                                <strong><?php echo _("柬埔寨金边房地产正热") ?></strong>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3 animate_start">
                        <div class="portfolio-item">
                            <a href="/images/blog/core_value/page4-3.jpg" class="portfolio-item-link" data-rel="prettyPhoto">
                                <span class="portfolio-item-hover" style="opacity: 0;"></span><span class="fullscreen" style="top: 65%; opacity: 0;"><i class="fa fa-search"></i></span><img src="/images/blog/core_value/page4-3.jpg" alt=" ">
                            </a>
                            <div class="portfolio-item-title">
                                <strong><?php echo _("趋势国际金边开发的项目") ?></strong>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3 animate_start">
                        <div class="portfolio-item">
                            <a href="/images/blog/core_value/page4-4.jpg" class="portfolio-item-link" data-rel="prettyPhoto">
                                <span class="portfolio-item-hover" style="opacity: 0;"></span><span class="fullscreen" style="top: 65%; opacity: 0;"><i class="fa fa-search"></i></span><img src="/images/blog/core_value/page4-4.jpg" alt=" ">
                            </a>
                            <div class="portfolio-item-title">
                                <strong><?php echo _("金边的高档酒店公寓") ?></strong>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3 animate_start">
                        <div class="portfolio-item">
                            <a href="/images/blog/core_value/page4-5.jpg" class="portfolio-item-link" data-rel="prettyPhoto">
                                <span class="portfolio-item-hover" style="opacity: 0;"></span><span class="fullscreen" style="top: 65%; opacity: 0;"><i class="fa fa-search"></i></span><img src="/images/blog/core_value/page4-5.jpg" alt=" ">
                            </a>
                            <div class="portfolio-item-title">
                                <strong><?php echo _("金边的高尚公寓") ?></strong>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>