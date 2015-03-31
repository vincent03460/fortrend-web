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
                        <h3 class="content-title"><?php echo __("亚洲富豪钟爱房产投资") ?></h3>
                    </header>
                    <div class="blog-divider"></div>
                    <div class="post-content">

                        <em>2015-03-15</em>
                        <br>
                        <p>
                            <?php echo __("莱坊最新的2015年《财富报告》显示，超高资产净值人士愈来愈注重将房地产视为主流的投资类别，特别是亚洲，房地产在投资组合中平均佔38%。") ?>
                        </p>
                        <p>
                            <?php echo __("纵观全球，37%的受访者表示，他们的富豪客户于2014年增加房地产的投资比重，而35%预期这个趋势将延续至2015年。") ?>
                        </p>
                        <p>
                            <?php echo __("在亚洲，22%受访者的富豪客户于2014年增加房地产投资，而27%预期今年将持续。") ?>
                        </p>
                        <p>
                            <?php echo __("房地产是最受欢迎的投资类别，84%的亚洲理财顾问表示其客户对此类别更感兴趣。办公楼（68%）则是第二受欢迎。") ?>
                        </p>
                        <p>
                            <?php echo __("至于豪宅，平均来说，中国和香港的超高资产净值人士平均每人拥有4.7个和4.6个住宅物业，膺全球首两位，较全球平均3个的数目为高。") ?>
                        </p>
                        <p>
                            <?php echo __("（星洲日报／投资致富‧Smart财富）") ?>
                        </p>

                    </div>
                </article>
            </div>

        </div>
    </div>
</div>
