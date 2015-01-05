<?php
use_helper('I18N');
?>
<header class="navbar navbar-fixed-top navbar-white" role="header">
	<div class="container" role="top-header">
		<div class="top-header clearfix">
			<ul class="nav navbar-nav navbar-right">
				<li>
                    <a href="http://fortrend-international.com/" class="" target="_blank"><?php echo __("Login") ?></a>
                </li>
            </ul>
		</div>
	</div>
	<div class="container">
		<div class="navbar-header">
			<a href="/home" class="brand">
				<img height="" width="150" src="/images/logo.png">
			</a>
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<nav class="collapse navbar-collapse" role="navigation">
			<ul class="nav navbar-nav navbar-right" id="main-navigation">
				<li>
					<a href="/home"><?php echo __("Home") ?></a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __("Property") ?><span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/property"><?php echo __("Introduction") ?></a></li>
						<li><a href="/property/concept"><?php echo __("Concept") ?></a></li>
						<li><a href="/property/floorPlans"><?php echo __("Floor Plans") ?></a></li>
						<li><a href="/property/gallery"><?php echo __("Gallery") ?></a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __("Greatcoin") ?><span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/greatcoin"><?php echo __("Introduction") ?></a></li>
						<li><a href="/greatcoin/whatIsGreatcoin"><?php echo __("What is Greatcoin") ?></a></li>
						<li><a href="/greatcoin/benefitsOfGreatcoin"><?php echo __("Benefits of Greatcoin") ?></a></li>
						<li><a href="/greatcoin/howGreatcoinWorks"><?php echo __("How Greatcoin Works") ?></a></li>
					</ul>
				</li>
				<li>
					<a href="/keep_in_touch"><?php echo __("Keep in Touch") ?></a>
				</li>
			</ul>
		</nav>
	</div>
</header>

<script type="text/javascript" src="/js/jquery-1.9.2.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        initActiveMenu();

        function initActiveMenu() {
            var url = "<?php echo "/" . $module ?>";
            var menu = $("ul#main-navigation > li.dropdown > ul > li > a[href$=\"" + url + "\"]");

            if (menu.length) {
                menu.parent().parent().parent().addClass("active");
                return;
            }

            menu = $("ul#main-navigation > li > a[href$=\"" + url + "\"]");

            if (menu.length) {
                menu.parent().addClass("active");
                return;
            }
        }
    });
</script>