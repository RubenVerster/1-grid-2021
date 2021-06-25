<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if(isset($pageMetaTitle)){echo '<title>' . $pageMetaTitle . '</title>';}?>
    <?php if(isset($pageMetaDescription)){echo '<meta name="description" content="'. $pageMetaDescription . '"/>';}?>
    <?php if(isset($pageCanonical)){echo '<link rel="canonical" href="' . $pageCanonical . '" />';}?>

    <!--Font awesome free-->
    <!--<link href="<?php /*echo FROOT . '/libs/fontawesome-free/fontawesome.css'*/?>" rel="stylesheet">
    <link href="<?php /*echo FROOT . '/libs/fontawesome-free/brands.css'*/?>" rel="stylesheet">
    <link href="<?php /*echo FROOT . '/libs/fontawesome-free/solid.css'*/?>" rel="stylesheet">-->


    <!--Preload our fonts-->
    <link rel="preload" as="font" href="<?php echo FROOT . '/assets/fonts/pfdin-bold.woff2'?>" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="<?php echo FROOT . '/assets/fonts/pfdin-medium.woff2'?>" type="font/woff2" crossorigin="anonymous">


    <!-- Google Tag Manager -->
    <script>
        /* Data Layer array for custom events*/
        dataLayer = [];
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TH7RNSQ');
    </script>
    <!-- End Google Tag Manager -->



<!--    <link rel="preload" as="font" href="<?php /*echo FROOT . '/assets/fonts/pfdin-light.woff2'*/?>" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="<?php /*echo FROOT . '/assets/fonts/Open-sans-regular.woff2'*/?>" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="<?php /*echo FROOT . '/libs/fontello/font/fontello.woff2?23905172'*/?>" type="font/woff2" crossorigin="anonymous">-->


    <!--preconnect/preload tag manger script resources -->
    <!--<link rel="preload" href="https://snap.licdn.com">
    <link rel="preload" href="https://stats.g.doubleclick.net">
    <link rel="preload" href="https://ip.freshmarketer.com">
    <link rel="preload" href="https://api.trstplse.com">
    <link rel="preload" href="https://a.trstplse.com">
    <link rel="preload" href="https://px.ads.linkedin.com">
    <link rel="preload" href="https://a.omappapi.com">
    <link rel="preload" href="https://api.omappapi.com">
    <link rel="preload" href="https://www.google.com">
    <link rel="preload" href="https://www.google.co.za">
    <link rel="preload" href="https://www.facebook.com">
    <link rel="preconnect" href="https://connect.facebook.net">
    <link rel="preload" href="https://www.clickcease.com">
    <link rel="preload" href="https://cdn.freshmarketer.com">
    <link rel="preload" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://www.google-analytics.com">
    <link rel="preconnect" href="https://optin-monster.s3.amazonaws.com">-->



    <link rel="shortcut icon" href="<?php echo FROOT . '/media/favicon.png'?>"/>

    <!--critical css path-->
    <style>
        <?php if (isset($pageCssCriticalPathCss)) {
           echo $pageCssCriticalPathCss;
       } ?>
    </style>


    <!--deferred-styles-->
    <noscript id="deferred-styles">
        <link rel='stylesheet' media='all' href="<?php echo FROOT .'/assets/css/main.min.css?v=2020-05-14'?>"/>
        <!--fontello-->
        <link rel='stylesheet' media='all' href="<?php echo FROOT . '/libs/fontello/css/fontello.css?v=2020-05-28'?>" >
        <link rel='stylesheet' media='all' href="<?php echo FROOT . '/libs/fontello/css/fontello-chat.css?v=2021-03-18'?>" >
        <?php if (isset($pageCssIncludes)) {
            echo $pageCssIncludes;
        } ?>
    </noscript>

    <!--Sentry error tracking-->
<!--    <script src="https://browser.sentry-cdn.com/5.5.0/bundle.min.js" integrity="sha384-/kLYKYxlMDI1l+lhDHECQrq1Z4fnk/A32MWVF6rRnuE2WiOuAmg3wr3McNOG3Szi" crossorigin="anonymous"></script>
    <script>
        Sentry.init({ dsn: 'https://86fbf30d6faf453eb694bc5b311ccbf2@bugsnag.1-grid.com/21' });
    </script>-->





    <!--[if IE 9]>
    <link href="/libs/css/bootstrap-ie9.min.css" rel="stylesheet">
    <link href="/libs/css/ie9_custom_overrides.css?v=0" rel="stylesheet"/>

    <script src="/libs/js/html5shiv.min.js"></script>
    <script src="/libs/js/Respond.js"></script>

    <script src="/libs/js/jquery1.10.2.min.js"></script>
    <script src="/libs/js/ie9_custom_overrides.js?v=65"></script>
    <![endif]-->

    <!--[if IE 8]>
    <link rel='stylesheet' media='all' href="/assets/css/main.min.css?v=2020-05-11B"/>
    <link rel='stylesheet' media='all' href="/libs/fontello/css/fontello.min.css?v=2020-05-28" >

    <link href="/libs/css/bootstrap-ie8.min.css" rel="stylesheet"/>
    <link href="/libs/css/ie8_custom_overrides.css?v=362" rel="stylesheet"/>

    <script src="/libs/js/html5shiv.min.js"></script>
    <script src="/libs/js/Respond.js"></script>
    <script src="/libs/js/jquery1.10.2.min.js"></script>
    <script src="/libs/js/ie8_custom_overrides.js?v=104"></script>
    <![endif]-->




    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo FROOT . '/media/touch/apple-touch-icon-iphone-60x60.png'?>" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo FROOT . '/media/touch/apple-touch-icon-ipad-76x76.png'?>" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo FROOT . '/media/touch/apple-touch-icon-iphone-retina-120x120.png'?>" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo FROOT . '/media/touch/apple-touch-icon-ipad-retina-152x152.png'?>" />


    <!--header and address bar color Chrome, Firefox OS and Opera-->
    <meta name="theme-color" content="#20bfdd">
    <!--header and address bar color Windows phones-->
    <meta name="msapplication-navbutton-color" content="#20bfdd">
    <!--header and address bar color iOS Safari-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">


    <!-- Social Media Metas -->
    <meta name="author" content="1-grid.com" />
    <meta name="contact" content="support@1-grid.com" />
    <meta property="og:locale" content="en_ZA" />
    <meta property="og:type" content="product" />



    <?php if (isset($pageSocialTitle)) {
    echo '<meta property="og:title" content="' . $pageSocialTitle . '"/>' ;
}?>
    <?php if (isset($pageSocialDescription)) {
    echo '<meta property="og:description" content="' . $pageSocialDescription . '"/>' ;
}?>
    <?php if (isset($pageSocialUri)) {
    echo '<meta property="og:url" content="' . $pageSocialUri . ' "/>' ;
}?>

    <?php if (isset($pageSocialSitename)) {
    echo '<meta property="og:site_name" content="' . $pageSocialSitename . '"/>' ;
} else {
    echo '<meta property="og:site_name" content="1-grid.com"/>';
}
    ?>


    <meta property="article:publisher" content="https://www.facebook.com/1grid.co.za" />

    <?php if (isset($pageSocialShareImage)) {
        echo '<meta property="og:image" content="' . $pageSocialShareImage . '"/>' ;
    } else {
        echo '<meta property="og:image" content="' . FROOTLIVE . '/media/1-grid-logo.png' . '"/>' ;
    }
    ?>
    <?php if (isset($pageSocialShareImage)) {
        echo '<meta property="og:image:secure_url" content="' . $pageSocialShareImage . '"/>' ;
    }?>
    <meta name="twitter:card" content="summary_large_image" />

    <?php if (isset($pageSocialTwitterDescription)) {
        echo '<meta name="twitter:description" content="' . $pageSocialTwitterDescription . '"/>' ;
    } elseif (isset($pageSocialDescription)) {
        echo '<meta name="twitter:description" content="' . $pageSocialDescription . '"/>' ;
    } ?>

    <?php if (isset($pageSocialTwitterTitle)) {
        echo '<meta name="twitter:title" content="' . $pageSocialTwitterTitle . '"/>' ;
    } elseif (isset($pageSocialTitle)) {
        echo '<meta name="twitter:title" content="' . $pageSocialTitle . ' "/>' ;
    } ?>
    <meta name="twitter:site" content="@1grid_hosting" />

    <?php if (isset($pageSocialShareTwitterImage)) {
        echo '<meta name="twitter:image" content="' . $pageSocialShareTwitterImage . '"/>' ;
    } elseif (isset($pageSocialShareImage)) {
        echo '<meta name="twitter:image" content="' . $pageSocialShareImage . '"/>' ;
    } ?>

    <meta name="twitter:creator" content="@1grid_hosting" />

    <?php if (isset($pageSocialProductPriceAmount)) {
        echo '<meta property="product:price:amount" content="' . $pageSocialProductPriceAmount . '"/>' ;
    }?>
    <?php if (isset($pageSocialProductPriceCurrency)) {
        echo '<meta property="product:price:currency" content="' . $pageSocialProductPriceCurrency . '"/>' ;
    }?>


    <!-- Google Site Verification -->
    <meta name="google-site-verification" content="DERjJZoUImPuKVhFht-rt0i12pq7PTxPMgSYe2OhorU" />

    <link rel='stylesheet' href='/public/assets/css/widgets/navbar-desktop.css' />

    <!-- fontawesome kit link -->
    <!-- Ruben Verster -->
    <script src="https://kit.fontawesome.com/c61cdb2cdb.js" crossorigin="anonymous"></script>

</head>

<body id="body" data-fkl="body" data-fkl-enabled="false">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TH7RNSQ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- FakeLoader Start -->
    <div data-fkl="loader" id="fakeLoader"></div>
    <!-- FakeLoader End -->
    <div class="page-container">

        <?php include 'navbar_desktop.php' ?>

        <div class="main-content">
