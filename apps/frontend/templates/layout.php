<?php
use_helper('I18N');
?>

<!DOCTYPE html>
<html class="ie ie8">
<html class="ie ie9">
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo __("Fortrend") ?></title>
    <meta name="description" content="Fortrend">
    <meta name="author" content="FIFOTHEMES.COM">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Library CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/css/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/css/animations.css" media="screen">
    <link rel="stylesheet" href="/css/superfish.css" media="screen">
    <link rel="stylesheet" href="/css/revolution-slider/css/settings.css" media="screen">
    <link rel="stylesheet" href="/css/prettyPhoto.css" media="screen">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/global.css">
    <!-- Skin -->
    <link rel="stylesheet" href="/css/colors/blue.css" class="colors">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/css/theme-responsive.css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <link rel="apple-touch-icon" href="/images/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/ico/apple-touch-icon-72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/ico/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/ico/apple-touch-icon-144.png">
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!--[if IE]>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
</head>
<body class="home-4">
<div class="page-mask">
    <div class="page-loader">

        <div class="spinner"></div>
        <?php echo __("Loading...") ?>
    </div>

</div>

<div class="wrap">
    <!-- Header Start -->
    <header id="header">
        <!-- Header Top Bar Start -->
        <div class="top-bar">
            <div class="slidedown collapse">
                <div class="container">
                    <div class="pull-right">
                        <?php echo __("Language") ?>: <a href="/home/language?lang=cn">中文</a> | <a href="/home/language?lang=en">EN</a>
                    </div>
                    <div class="pull-right" style="margin-right: 30px;">
                        <a href="http://member.fortrend-international.com/" target="_blank"><?php echo __("LOGIN") ?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top Bar End -->
        <!-- Main Header Start -->
        <div class="main-header">
            <div class="container">
                <!-- TopNav Start -->
                <div class="topnav navbar-header">
                    <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
                        <i class="fa fa-angle-down icon-current"></i>
                    </a>
                </div>
                <!-- TopNav End -->
                <!-- Logo Start -->
                <div class="logo pull-left"> 
                    <h1>
                        <a href="/home">
                            <img style="padding-bottom: 10px;" src="/images/logo.png" alt="Fortrend" height="70px">
                        </a>
                    </h1>
                </div>
                <!-- Logo End -->
                <!-- Mobile Menu Start -->
                <div class="mobile navbar-header">
                    <a class="navbar-toggle" data-toggle="collapse" href=".navbar-collapse">
                        <i class="fa fa-bars fa-2x"></i>
                    </a>
                </div>
                <!-- Mobile Menu End -->
                <!-- Menu Start -->
                <nav class="collapse navbar-collapse menu">
                    <ul class="nav navbar-nav sf-menu">
                        <li>
                            <a href="/home"><?php echo __("HOME") ?></a>
                        </li>

                        <li>
                            <a href="#" class="sf-with-ul">
                                <?php echo __("PROPERTY") ?>
                                <span class="sf-sub-indicator"><i class="fa fa-angle-down "></i></span>
                            </a>
                            <ul>
                                <li><a href="/property" class="sf-with-ul"><?php echo __("INTRODUCTION") ?></a></li>
                                <li><a href="/property/concept" class="sf-with-ul"><?php echo __("CONCEPT") ?></a></li>
                                <li><a href="/property/floorPlans" class="sf-with-ul"><?php echo __("FLOOR PLANS") ?></a></li>
                                <li><a href="/property/gallery" class="sf-with-ul"><?php echo __("GALLERY") ?></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="sf-with-ul">
                                <?php echo __("GREATCOIN") ?>
                                <span class="sf-sub-indicator"><i class="fa fa-angle-down "></i></span>
                            </a>
                            <ul>
                                <li><a href="/greatcoin" class="sf-with-ul"><?php echo __("GREAT COIN") ?></a></li>
                                <li><a href="/greatcoin/whatIsGreatcoin" class="sf-with-ul"><?php echo __("INTRODUCTION WHAT IS GREATCOIN") ?></a></li>
                                <li><a href="/greatcoin/benefitsOfGreatcoin" class="sf-with-ul"><?php echo __("BENEFITS OF GREATCOIN") ?></a></li>
                                <li><a href="/greatcoin/howGreatcoinWorks" class="sf-with-ul"><?php echo __("HOW GREATCOIN WORKS") ?></a></li>
                            </ul>
                        </li>

                        <?php if ($sf_context->getRequest()->getParameter("demo") == "1") { ?>
                        <li>
                            <a href="#" class="sf-with-ul">
                                <?php echo __("MM2H") ?>
                                <span class="sf-sub-indicator"><i class="fa fa-angle-down "></i></span>
                            </a>
                            <ul>
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
                        </li>
                        <li>
                            <a href="#" class="sf-with-ul">
                                <?php echo __("O2O") ?>
                                <span class="sf-sub-indicator"><i class="fa fa-angle-down "></i></span>
                            </a>
                            <ul>
                                <li><a href="/o2o/page1?demo=1"><?php echo __("O2O全渠道成为电子商务发展的新趋势") ?></a></li>
                                <li><a href="/o2o/page2?demo=1"><?php echo __("O2O是打造全渠道零售的必经之路") ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sf-with-ul">
                                <?php echo __("企业文化") ?>
                                <span class="sf-sub-indicator"><i class="fa fa-angle-down "></i></span>
                            </a>
                            <ul>
                                <li><a href="/enterprise/page1?demo=1"><?php echo __("企业文化=工匠精神") ?></a></li>
                                <li><a href="/enterprise/page2?demo=1"><?php echo __("梦想·激励人心的演说") ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sf-with-ul">
                                <?php echo __("核心价值") ?>
                                <span class="sf-sub-indicator"><i class="fa fa-angle-down "></i></span>
                            </a>
                            <ul>
                                <li><a href="/core_value/page1?demo=1"><?php echo __("核心价值（房地产）") ?></a></li>
                                <li><a href="/core_value/page2?demo=1"><?php echo __("从化项目图") ?></a></li>
                                <li><a href="/core_value/page4?demo=1"><?php echo __("金边项目用图") ?></a></li>
                                <li><a href="/core_value/page3?demo=1"><?php echo __("房地产资讯") ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sf-with-ul">
                                <?php echo __("矿业开采") ?>
                                <span class="sf-sub-indicator"><i class="fa fa-angle-down "></i></span>
                            </a>
                            <ul>
                                <li><a href="/mining/page1?demo=1"><?php echo __("矿业开采") ?></a></li>
                                <li><a href="/mining/page2?demo=1"><?php echo __("视频") ?></a></li>
                            </ul>
                        </li>
                        <?php } ?>

                        <li>
                            <a href="/keep_in_touch"><?php echo __("KEEP IN TOUCH") ?></a>
                        </li>
                    </ul>
                </nav>
                <!-- Menu End -->
            </div>
        </div>
        <!-- Main Header End -->
    </header>
    <!-- Header End -->
    <!-- Content Start -->
    <div id="main">
        <?php echo $sf_data->getRaw('sf_content') ?>
    </div>
    <!-- Content End -->
    
    <!-- Footer Start -->
    <footer id="footer">
        <!-- Footer Top Start -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <section class="col-lg-6 col-md-6 col-xs-12 col-sm-6 footer-one">
                        <h3><?php echo __("Latest news & event") ?></h3>
                        <ul style="margin-left: 22px;">
                            <li type="disc"><?php echo __("Coming soon...") ?></li>
                        </ul>
                        <ul style="margin-left: 22px; display: none;">
                            <li type="disc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                            <li type="disc">Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget.</li>
                            <li type="disc">Aenean massa. Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus. Nulla consequat massa quis enim. Donec pede justo, fringilla ve l, aliquet nec, vulputate eget, ar cu.</li>
                            <li type="disc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                            <li type="disc">Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget.</li>
                        </ul>
                    </section>
                    <section class="col-lg-6 col-md-6 col-xs-12 col-sm-6 footer-two">
                        <ul style="margin-left: 22px; display: none;">
                            <li type="disc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, aliquet nec, vulputate eget.</li>
                            <li type="disc">Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget.</li>
                            <li type="disc">Aenean massa. Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus.</li>
                            <li type="disc">Nulla consequat massa quis enim. Donec pede justo, fringilla ve l, aliquet nec, vulputate eget, ar cu.</li>
                            <li type="disc">Lorem ipsum dolor sit amet, Donec pede justo, fringilla vel, aliqu et nec, vulputate eget, ar cu.</li>
                            <li type="disc">Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget.</li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 "> © <?php echo __("Copyright 2014. All Rights Reserved.") ?></div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Scroll To Top -->
    
</div>
<!-- Wrap End -->

<!-- The Scripts -->
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/jquery.parallax.js"></script>
<script src="/js/jquery.wait.js"></script>
<script src="/js/modernizr-2.6.2.min.js"></script>
<script src="/js/modernizr.custom.js"></script>
<script src="/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="/js/jquery.nivo.slider.pack.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/superfish.js"></script>
<script src="/js/tweetMachine.js"></script>
<script src="/js/tytabs.js"></script>
<script src="/js/jquery.gmap.min.js"></script>
<script src="/js/circularnav.js"></script>
<script src="/js/jquery.sticky.js"></script>
<script src="/js/jflickrfeed.js"></script>
<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="/js/custom.js"></script>

<script type="text/javascript">
    function initActiveMenu() {
        var url = "<?php echo "/" . $sf_context->getModuleName() ?>";
        var menu = $("nav.menu > ul.sf-menu > li > a[href$=\"" + url + "\"]");

        if (menu.length) {
            menu.attr("id", "current");
            return;
        }

        menu = $("nav.menu > ul.sf-menu > li > ul > li > a[href$=\"" + url + "\"]");

        if (menu.length) {
            menu.parent().parent().prev().attr("id", "current");
            return;
        }
    }

    initActiveMenu();
</script>

<?php include_slot("javascript") ?>

</body>
</html>