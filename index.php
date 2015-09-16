<!doctype html>

<?php
    $url_home = 'http://localhost/jobfairlanding/';
?>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>JobFAIR '15</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="shortcut icon" href="favicon.ico?v=2">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
 
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
         <!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        

        <div id="screen">
            <?php include 'partials/menu.html'; ?>

            <?php  include 'partials/baner.html'; ?>
            <div class="prazan-prostor"><br><br><br><br></div>
            <?php include 'partials/link_cv_partner.html'; ?>
            <div class="prazan-prostor"><br><br><br><br></div>

           <?php include 'partials/news.html' ?>

            <div class="prazan-prostor"><br><br></div>
            <?php include 'partials/googlemaps.html'; ?>
            <?php include 'partials/footer.html'; ?>
        </div>

        
        
        <script type="text/javascript">
            $(document).ready(function() {
                console.log("fensi index.php");
            $(".fancybox").fancybox();
            });
        </script>
    
        
        <script src="js/main.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
    
        
    </body>
</html>
