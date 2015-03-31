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
                        <h3 class="content-title"><?php echo __("核心价值（房地产）") ?></h3>
                    </header>
                    <div class="blog-divider"></div>
                    <div class="post-content">
                        <br>
                        <strong><?php echo __("尊重 「环境优先」：") ?></strong>
                        <p>
                            <?php echo __("趋势国际在项目规划时，总是先替周边的环境着想，以协调的外观，使自身融合在大自然环境之中，创造突出环保而不突兀的作品。") ?>
                        </p>

                        <br>
                        <strong><?php echo __("细腻 「人性设计」：") ?></strong>
                        <p>
                            <?php echo __("趋势国际想的总是比别人多一些，以人性为出发点，以环保绿色为主调，规划设计每一个空间，为客户创造出舒适的住所。") ?>
                        </p>

                        <br>
                        <strong><?php echo __("苛求 「严谨施工」：") ?></strong>
                        <p>
                            <?php echo __("趋势国际于施工过程中，每一步骤都要求确实合乎规范，绝不为了赶工而破坏了质量，因为趋势国际对每一栋建筑的态度，都是希望它能成为每一位客户永续传承的作品。") ?>
                        </p>

                        <br>
                        <strong><?php echo __("企业精神") ?></strong>
                        <p>
                            <?php echo __("趋势国际团队以房地产建设为本质，以细腻的质量与贴心的规划为目标，延伸出绿色宜居的理念。希冀让客户可以在众多相似的产品之中，创造出一个确实符合需求，实在且可永续传承的作品。") ?>
                        </p>
                        <p>
                            <?php echo __("从开发规划到营建管理，再到销售服务与最终的保固，趋势国际以一贯的理念、一贯的质量，透过完整的服务，为客户创造出最大的效益，谋求最佳的保障。") ?>
                        </p>
                    </div>
                </article>
            </div>

        </div>
    </div>
</div>
