<?php
use_helper('I18N');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<!-- Mirrored from fortrend.co/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Dec 2014 08:03:55 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title><?php echo __("ForTrend") ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script type="text/javascript" src="/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/plugins.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/classie.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        });
    </script>

    <script type="text/javascript">
        jQuery.noConflict();

        jQuery(window).load(function() {
            jQuery('.flexslider').flexslider({
                animation: "slide",
                controlNav: true,
                directionNav: true,
                smoothHeight: true
            });
        });
    </script>

    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css" type="text/css"/>
    <link rel="stylesheet" href="/css/font-awesome.css" type="text/css"/>
    <link rel="stylesheet" href="/css/main.css" type="text/css"/>


    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/favicons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/favicons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/favicons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/images/favicons/apple-touch-icon-57-precomposed.png">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

</head>
<body>

<?php include_component('component', 'submenu', array("module" => $sf_context->getModuleName(), "action" => $sf_context->getActionName())) ?>

<div class="container" id="main-container">
    <?php echo $sf_data->getRaw('sf_content') ?>
    <footer id="footer">
        <div id="inner-footer">
		<span class="copyright">
		&copy; 2014 fortrend.co. All rights reserved.</span>
            <a href="#top" class="btn btn-scrollTop pull-right"><i class="fa fa-chevron-up"></i></a>
        </div>
    </footer>
</body>

<!-- Mirrored from fortrend.co/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Dec 2014 08:04:47 GMT -->
</html>
</div>