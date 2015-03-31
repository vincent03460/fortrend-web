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
                        <h3 class="content-title"><?php echo __("马来西亚房地产税费详解") ?></h3>
                    </header>
                    <div class="blog-divider"></div>
                    <div class="post-content">
                        <p>
                            <?php echo __("马来西亚的房地产市场的税收政策与内地是有区别的，建议对此有意投资马来西亚房地产市场的投资者应该有所了解。") ?>
                        </p>
                        <p>
                            <?php echo __("购房期间交易费用：") ?>
                        </p>
                        <ol>
                            <li>
                                <?php echo __("契税：根据房地产总价按比例征收，0-10万令吉为1%，10-50万令吉为2%，50万令吉以上为3%。") ?>
                            </li>
                            <li>
                                <?php echo __("合同律师费及杂费：约0.7%") ?>
                            </li>
                            <li>
                                <?php echo __("贷款律师费及杂费：贷款总额的约0.8%") ?>
                            </li>
                            <li>
                                <?php echo __("贷款印花税：贷款总额的0.5%") ?>
                            </li>
                        </ol>

                        <br>
                        <p>
                            <?php echo __("购房后所需费用") ?>
                        </p>
                        <ol>
                            <li>
                                <?php echo __("门牌税+地契税=1500马币左右(公寓)") ?>
                            </li>
                            <li>
                                <?php echo __("物业管理费：100平米房子/500—1,200/月") ?>
                            </li>
                        </ol>
                    </div>
                </article>
            </div>

        </div>
    </div>
</div>
