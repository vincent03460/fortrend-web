<?php
use_helper('I18N');
?>

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
                <article class="post hentry">
                    <header class="post-header">
                        <h3 class="content-title"><?php echo __("马来西亚“第二家园计划” 中国人人数高居榜首") ?></h3>
                    </header>
                    <div class="blog-divider"></div>
                    <div class="post-content">
                        <p>
                            <?php echo __("马来西亚“第二家园计划”自2002年推介以来，迄今获得120个国家的1万9488人参与；中国以3332人参与高居榜首，参与人数逐年增加，并拥有很大的开发潜能。") ?>
                        </p>
                        <p>
                            <?php echo __("大马旅游部长黄燕燕指出，在去年1月至8月期间，共有475名中国人获得批准，相比去年同期，只有133人参与而已。") ?>
                        </p>
                        <p>
                            <?php echo __("黄燕燕8日中国银行签署“第二家园合作计划”合作备忘录后在记者会上说，通过这项合作，旅游部能向中国银行的30万名高阶客户介绍这项计划。") ?>
                        </p>
                        <p>
                            <?php echo __("她说，中国银行是中国最大的银行，单在中国就有1万间分行，并在全球有超过1000间分行。“他们有30万名高端客户，即每人存款100万美元(300万令吉)以上，我们可以向这批人直接介绍我们的第二家园计划。”") ?>
                        </p>
                    </div>
                </article>
            </div>

        </div>
    </div>
</div>
