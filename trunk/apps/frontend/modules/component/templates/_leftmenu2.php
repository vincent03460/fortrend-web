<?php
use_helper('I18N');
?>

<?php if ($module == "mm2h") { ?>
<h3 class="title"><?php echo __("MM2H第二家园") ?></h3>
<ul class="category-list slide">
    <li><a href="/mm2h/page1?demo=1"><?php echo __("2015马来西亚房产暨第二家园广州说明会首度开幕") ?></a></li>
    <li><a href="/mm2h/page2?demo=1"><?php echo __("GST消费税 必推高屋价") ?></a></li>
    <li><a href="/mm2h/page3?demo=1"><?php echo __("中国人在马来西亚买房有限制吗？") ?></a></li>
    <li><a href="/mm2h/page4?demo=1"><?php echo __("办理马来西亚第二家园好处多") ?></a></li>
    <li><a href="/mm2h/page5?demo=1"><?php echo __("如何申請马来西亚“第二家园计划”") ?></a></li>
    <li><a href="/mm2h/page6?demo=1"><?php echo __("马来西亚“第二家园”计划的优势") ?></a></li>
    <li><a href="/mm2h/page7?demo=1"><?php echo __("马来西亚“第二家园计划” 中国人人数高居榜首") ?></a></li>
    <li><a href="/mm2h/page8?demo=1"><?php echo __("马来西亚mm2h房产投资") ?></a></li>
    <li><a href="/mm2h/page9?demo=1"><?php echo __("马来西亚房地产税费详解") ?></a></li>
    <li><a href="/mm2h/page10?demo=1"><?php echo __("马来西亚第二家园或成为亚洲投资移民新星") ?></a></li>
    <li><a href="/mm2h/page11?demo=1"><?php echo __("马来西亚第二家园计划常见问题") ?></a></li>
    <li><a href="/mm2h/page12?demo=1"><?php echo __("马来西亚节庆年整装待发 第二家园成亮点") ?></a></li>
</ul>
<?php } elseif ($module == "o2o") { ?>
<h3 class="title"><?php echo __("亚洲全渠道零售协会") ?></h3>
<ul class="category-list slide">
    <li><a href="/o2o/page1?demo=1"><?php echo __("O2O全渠道成为电子商务发展的新趋势") ?></a></li>
    <li><a href="/o2o/page2?demo=1"><?php echo __("O2O是打造全渠道零售的必经之路") ?></a></li>
</ul>
<?php } elseif ($module == "enterprise") { ?>
<h3 class="title"><?php echo __("趋势国际的企业文化") ?></h3>
<ul class="category-list slide">
    <li><a href="/enterprise/page1?demo=1"><?php echo __("企业文化=工匠精神") ?></a></li>
    <li><a href="/enterprise/page2?demo=1"><?php echo __("梦想·激励人心的演说") ?></a></li>
</ul>
<?php } elseif ($module == "core_value") { ?>
<h3 class="title"><?php echo __("核心价值") ?></h3>
<ul class="category-list slide">
    <li><a href="/core_value/page1?demo=1"><?php echo __("核心价值（房地产）") ?></a></li>
    <li><a href="/core_value/page2?demo=1"><?php echo __("从化项目图") ?></a></li>
    <li><a href="/core_value/page4?demo=1"><?php echo __("金边项目用图") ?></a></li>
    <li>
        <a href="/core_value/page3?demo=1"><?php echo __("房地产资讯") ?></a>
        <ul class="category-list slide category-list-2">
            <li><a href="/core_value/page3a?demo=1"><?php echo __("一线城市地价羊年或将走高") ?></a></li>
            <li><a href="/core_value/page3b?demo=1"><?php echo __("一线城市房价将步入上涨通道") ?></a></li>
            <li><a href="/core_value/page3c?demo=1"><?php echo __("亚洲富豪钟爱房产投资") ?></a></li>
            <li><a href="/core_value/page3d?demo=1"><?php echo __("大马超级富豪喜爱产业投资") ?></a></li>
            <li><a href="/core_value/page3e?demo=1"><?php echo __("房产需求和薪金稳扬 外资疯涌金边置产") ?></a></li>
        </ul>
    </li>
</ul>
<?php } elseif ($module == "mining") { ?>
<h3 class="title"><?php echo __("矿业开采") ?></h3>
<ul class="category-list slide">
    <li><a href="/mining/page1?demo=1"><?php echo __("矿业开采") ?></a></li>
    <li><a href="/mining/page2?demo=1"><?php echo __("视频") ?></a></li>
</ul>
<?php } ?>

<style type="text/css">
    li.active a {
        color: #727272;
    }
    ul.category-list-2 {
        padding: 5px 0px 0px 16px;
    }
</style>

<script type="text/javascript" src="/js/jquery.min.1-9.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var url = "<?php echo "/" . $module . ($action == "index" ? "" : "/" . $action) ?>";
        var menu = $("ul.category-list.slide li a[href$=\"" + url + "\"]");
        menu.parent().addClass("active");
    });
</script>