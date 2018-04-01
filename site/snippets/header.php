<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?php echo $page->title() ?></title>

  <!-- responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Main stylesheet -->
  <link rel="stylesheet" href="<?php echo url() ?>/assets/css/style.css">
  <!-- Responsive stylesheet -->
  <link rel="stylesheet" href="<?php echo url() ?>/assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    
</head>

<body>
<!-- PRELOADER -->
<div class="page-loader">
  <div class="loader">Loading...</div>
</div>
<!-- /PRELOADER -->  
<div class="boxed_wrapper">

<?php snippet('topbar') ?>
 
<!--Start header area-->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="index.html">
                        <img src="images/logo/logo.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
                <div class="header-contact-info">

                </div>
            </div>
        </div>
    </div>
</header>  
<!--End header area--> 
