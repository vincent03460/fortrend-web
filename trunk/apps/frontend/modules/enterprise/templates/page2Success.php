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
                        <h3 class="content-title"><?php echo __("梦想·激励人心的演说") ?></h3>
                    </header>
                    <div class="blog-divider"></div>
                    <div class="post-content">

                        <video width="640" height="360" controls>
                            <source src="/images/blog/enterprise/page2-1.mp4" type="video/mp4">
                            Your browser does not support to play the video.
                        </video>

                    </div>
                </article>
            </div>

        </div>
    </div>
</div>
