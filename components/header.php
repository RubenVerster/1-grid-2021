<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if(isset($pageMetaTitle)){echo '<title>' . $pageMetaTitle . '</title>';}?>
    <?php if(isset($pageMetaDescription)){echo '<meta name="description" content="'. $pageMetaDescription . '"/>';}?>
    <?php if(isset($pageCanonical)){echo '<link rel="canonical" href="' . $pageCanonical . '" />';}?>

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

    <!-- Google Site Verification -->
    <meta name="google-site-verification" content="DERjJZoUImPuKVhFht-rt0i12pq7PTxPMgSYe2OhorU" />

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
    }?>


    <meta property="article:publisher" content="https://www.facebook.com/1grid.co.za" />

    <?php if (isset($pageSocialShareImage)) {
        echo '<meta property="og:image" content="' . $pageSocialShareImage . '"/>' ;
    } else {
        echo '<meta property="og:image" content="' . FROOTLIVE . '/media/1-grid-logo.png' . '"/>' ;
    }?>
    <?php if (isset($pageSocialShareImage)) {
        echo '<meta property="og:image:secure_url" content="' . $pageSocialShareImage . '"/>' ;
    }?>
    <meta name="twitter:card" content="summary_large_image" />

    <?php if (isset($pageSocialTwitterDescription)) {
        echo '<meta name="twitter:description" content="' . $pageSocialTwitterDescription . '"/>' ;
    } elseif (isset($pageSocialDescription)) {
        echo '<meta name="twitter:description" content="' . $pageSocialDescription . '"/>' ;
    }?>

    <?php if (isset($pageSocialTwitterTitle)) {
        echo '<meta name="twitter:title" content="' . $pageSocialTwitterTitle . '"/>' ;
    } elseif (isset($pageSocialTitle)) {
        echo '<meta name="twitter:title" content="' . $pageSocialTitle . ' "/>' ;
    }?>
    <meta name="twitter:site" content="@1grid_hosting" />

    <?php if (isset($pageSocialShareTwitterImage)) {
        echo '<meta name="twitter:image" content="' . $pageSocialShareTwitterImage . '"/>' ;
    } elseif (isset($pageSocialShareImage)) {
        echo '<meta name="twitter:image" content="' . $pageSocialShareImage . '"/>' ;
    }?>

    <meta name="twitter:creator" content="@1grid_hosting" />

    <?php if (isset($pageSocialProductPriceAmount)) {
        echo '<meta property="product:price:amount" content="' . $pageSocialProductPriceAmount . '"/>' ;
    }?>
    <?php if (isset($pageSocialProductPriceCurrency)) {
        echo '<meta property="product:price:currency" content="' . $pageSocialProductPriceCurrency . '"/>' ;
    }?>

    <!-- Ruben Verster -->
    <!-- fontawesome kit link -->
    <script src="https://kit.fontawesome.com/c61cdb2cdb.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />

</head>
<body>
