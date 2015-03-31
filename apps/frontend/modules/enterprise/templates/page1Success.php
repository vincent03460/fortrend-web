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
                        <h3 class="content-title"><?php echo __("企业文化=工匠精神") ?></h3>
                    </header>
                    <div class="blog-divider"></div>
                    <div class="post-content">
                        <br>
                        <img alt="" src="/images/blog/enterprise/page1-1.jpg" />
                        <br><br>

                        <strong><?php echo __("工作是一种修行，世间只有必然性没有偶然性！") ?></strong>
                        <p>
                            <?php echo __("很多人认为工匠是一种机械重复的工作者，其实工匠有着更深远的意思。他代表着一个时代的气质，坚定、踏实、精益求精。工匠不一定都能成为企业家。但大多数成功企业家身上都有这种工匠精神。") ?>
                        </p>
                        <p>
                            <?php echo __("所谓“工匠精神”其核心是：不仅仅是把工作当作赚钱的工具，而是树立一种对工作执着、对所做的事情和生产的产品精益求精、精雕细琢的精神。") ?>
                        </p>

                        <br>
                        <img alt="" src="/images/blog/enterprise/page1-2.png" />
                        <br><br>

                        <br>
                        <strong><?php echo __("工匠之术——用对方法，创造价值") ?></strong>
                        <p>
                            <?php echo __("工匠精神，就是追求极致的精神，并且专业、专注。") ?>
                        </p>
                        <p>
                            <?php echo __("在这个“商人精神”横行的年代，个人和企业都面临巨大的生存挑战。") ?>
                        </p>
                        <p>
                            <?php echo __("工匠用的工作获得金钱，但工匠不为钱工作。一个人所做的工作是他人生态度的表现，一生的职业就是他志向的表示、理想的所在。") ?>
                        </p>

                        <br>
                        <img alt="" src="/images/blog/enterprise/page1-3.png" />
                        <br><br>

                        <br>
                        <strong><?php echo __("工匠之行——在行动中体悟修行的乐趣") ?></strong>
                        <p>
                            <?php echo __("工匠精神不是口号，它存在于每一个人身上，心中。长久以来，正是由于缺乏对精品的坚持、追求和积累，才让我们的个人成长之路崎岖坎坷，组织发展之途充满刑荆。这种缺乏也让持久创新变得异常艰难，更让基业常青成为凤毛麟角，所以，在资源日渐匮乏的后成长时代，重提工匠精神、重塑工匠精神，是生存、发展的必经之路。") ?>
                        </p>

                        <br>
                        <img alt="" src="/images/blog/enterprise/page1-4.png" />
                        <br><br>
                    </div>
                </article>
            </div>

        </div>
    </div>
</div>
