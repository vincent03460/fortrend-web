<?php
use_helper('I18N');
?>
<ul id="left_menu_pane" class="menu">
    <?php if ($module == "property") { ?>
    <li>
        <a href="/property"><?php echo __("Introduction") ?></a>
    </li>
    <li>
        <a href="/property/concept"><?php echo __("Concept") ?></a>
    </li>
    <li>
        <a href="/property/floorPlans"><?php echo __("Floor Plans") ?></a>
    </li>
    <li>
        <a href="/property/gallery"><?php echo __("Gallery") ?></a>
    </li>
    <?php } elseif ($module == "greatcoin") { ?>
    <li>
        <a href="/greatcoin"><?php echo __("Introduction") ?></a>
    </li>
    <li>
        <a href="/greatcoin/whatIsGreatcoin"><?php echo __("What is Greatcoin") ?></a>
    </li>
    <li>
        <a href="/greatcoin/benefitsOfGreatcoin"><?php echo __("Benefits of Greatcoin") ?></a>
    </li>
    <li>
        <a href="/greatcoin/howGreatcoinWorks"><?php echo __("How Greatcoin Works") ?></a>
    </li>
    <?php } elseif ($module == "keep_in_touch") { ?>
    <li>
        <a href="/keep_in_touch"><?php echo __("Keep in Touch") ?></a>
    </li>
    <?php } ?>
</ul>

<script type="text/javascript" src="/js/jquery-1.9.2.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var url = "<?php echo "/" . $module . ($action == "index" ? "" : "/" . $action) ?>";
        var menu = $("ul#left_menu_pane li a[href$=\"" + url + "\"]");
        menu.parent().addClass("active");
    });
</script>