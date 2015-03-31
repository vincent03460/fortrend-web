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
                        <h3 class="content-title"><?php echo __("办理马来西亚第二家园好处多") ?></h3>
                    </header>
                    <div class="blog-divider"></div>
                    <div class="post-content">
                        <p>
                            <?php echo __("亲，当你拥有马来第二家园身份时，你想到的好处只是多次免签往返吗？No No No,马来第二家园好处多多——惊喜超乎你的想象！我和我的小伙伴们都惊呆了耶！") ?>
                        </p>
                        <p>
                            <?php echo __("中国高考热，让家长们是焦头烂额呀！为了减轻孩子面对“万人挤过独木桥”的高考压力，有的送孩子进各种培训办辅导班，有的干脆举家搬迁，陪孩子出国留学，爱像圆周率，无限不循环。可怜天下父母心！") ?>
                        </p>
                        <p>
                            <?php echo __("然而，自从有了第二家园，家长们有了更轻松的选择：回国后办理归侨身份，即可轻松为孩子高考争取最高20分的加分！哦卖糕滴！轻轻松松分数到手啊！粑粑麻麻们看过来看过来！！！高考加分很简单！可是，到底怎么才算是华侨呢？表急表急，马来西亚第二家园计划网 (%1%) 来为你揭开华侨的神秘面纱！", array("%1%" => "<a href='http://www.immimy.com/' target='_blank'>http://www.immimy.com</a>")) ?>
                        </p>

                        <br>
                        <strong><?php echo __("华侨是指定居在国外的中国公民。") ?></strong>
                        <p>
                            <?php echo __("“定居”是指中国公民已取得住在国长期或者永久居留权，并已在住在国连续居留两年，两年内累计居留不少于18个月。") ?>
                        </p>
                        <p>
                            <?php echo __("中国公民虽未取得住在国长期或者永久居留权，但已取得住在国连续5年以上（含5年）合法居留资格，5年内在住在国累计居留不少于30个月，视为华侨。") ?>
                        </p>
                        <p>
                            <?php echo __("（马来西亚第二家园签证属于第二类）") ?>
                        </p>
                        <p>
                            <?php echo __("根据《中华人民共和国归侨侨眷权益保护法》第十四条规定：") ?>
                        </p>
                        <p>
                            <?php echo __("“各级人民政府应当对归侨、侨眷就业给予照顾，提供必要的指导和服务。归侨学生、归侨子女和华侨在国内的子女升学，按照国家有关规定给予照顾。”在此规定下，全国各省、直辖市教育厅/局分别对辖区内考生高考加分的分值做了规定，加分范围在：5—20分。") ?>
                        </p>

                        <br>
                        <strong><?php echo __("认定办法：") ?></strong>
                        <p>
                            <?php echo __("申请人持有第二家园身份5年以上，5年间在马来居留不少于30个月。") ?>
                        </p>
                        <p>
                            <?php echo __("办理归侨证地点：户籍所在地的各市/区的侨办侨政处。") ?>
                        </p>
                        <p>
                            <?php echo __("办理归侨证所需材料：贴签之后使用的所有护照原件。") ?>
                        </p>
                    </div>
                </article>
            </div>

        </div>
    </div>
</div>
