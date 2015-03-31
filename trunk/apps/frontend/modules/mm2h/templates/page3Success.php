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
                        <h3 class="content-title"><?php echo __("中国人在马来西亚买房有限制吗？") ?></h3>
                    </header>
                    <div class="blog-divider"></div>
                    <div class="post-content">
                        <p>
                            <?php echo __("如果该外国人非《第二家园》参与者，那么就要受以下限制：") ?>
                        </p>
                        <ol>
                            <li>
                                <?php echo __("2014年1月1日起外国人（包括第二家园参与者）只可以买100万马币以上的房子") ?>
                            </li>
                            <li>
                                <?php echo __("不可以购买属于《马来保留地》地契类的房子") ?>
                            </li>
                            <li>
                                <?php echo __("不可以购买属于《农业用途》地契类的房子，在马来西亚属于《农业用途》的土地是允许在该土地上建立居住房的。") ?>
                            </li>
                            <li>
                                <?php echo __("不可以购买属于《土著单位》的房子") ?>
                            </li>
                        </ol>
                    </div>
                </article>
            </div>

        </div>
    </div>
</div>
