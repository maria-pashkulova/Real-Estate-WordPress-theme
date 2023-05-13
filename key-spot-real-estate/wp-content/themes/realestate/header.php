<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sheltos - Filter search tab & fixed header home page">
    <meta name="keywords" content="sheltos">
    <meta name="author" content="sheltos">
    <link rel="icon" href="<?php bloginfo('template_directory');?>/assets/images/tab-image.png" type="image/x-icon" />
    <title><?=bloginfo('name')?></title>

   <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- magnific css -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/css/magnific-popup.css">

     <!-- range slider css --> <!-- properties.html -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/css/jquery-ui.css">

    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/css/animate.css">

    <!-- Template css -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/css/color1.css">

     <!-- Font awesome new css - version compatibility - за страницата за отделен имот (single-property.html)-->
    <link href="<?php bloginfo('template_directory');?>/assets/css/v5-font-face.css" rel="stylesheet">
   
   <?php
    wp_head();
    ?>

</head>

<body>

    <!-- Loader start -->
    <div class="loader-wrapper">
        <div class="row loader-img">
            <div class="col-12">
                <img src="<?php bloginfo('template_directory');?>/assets/images/loader/loader-2.gif" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <!-- Loader end -->

    <!-- header start -->
    <header class="header-4 fixed-header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="menu">
                        <div class="brand-logo main-navigation-logo">
                            
                                <?php 
                                    if(function_exists('the_custom_logo')) {
                                    the_custom_logo();
                                }
                                ?>
                        
                        </div>
                        <nav>
                            <div class="main-navbar">
                                <div id="mainnav">
                                    <div class="toggle-nav">
                                        <i class="fa fa-bars sidebar-bar"></i>
                                    </div>

                                    <ul class="nav-menu">
                                    <li class="back-btn">
                                            <div class="mobile-back text-end">
                                                <span>Назад</span>
                                                <i aria-hidden="true" class="fa fa-angle-right ps-2"></i>
                                            </div>
                                    </li>
                                    <?php 
                                         wp_nav_menu(array(
                                        'theme_location'  => 'primary-menu',
                                        'menu'            => 'primary-menu',
                                        'container'       => '',
                                        'items_wrap'      => '%3$s'
                                        
                                     ));
                                    ?>
                                    </ul>

                                </div>
                            </div>
                        </nav>
                        <ul class="header-right">
                             <li>
                                <a href="<?php echo 'tel:'. get_field('phone-number', 'menu_' . 24) ; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call" id="IconChangeColor"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" id="mainIconPathAttribute" stroke-width="1" stroke="#ff0000"></path></svg>
                                </a>
                            </li>
                             <li>
                                <a href="<?php echo site_url('/step-1');?>" class="btn btn-gradient btn-pill color-2" >Качи имот </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--  header end -->


    