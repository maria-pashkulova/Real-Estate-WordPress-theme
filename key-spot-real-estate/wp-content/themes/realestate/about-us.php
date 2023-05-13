<?php
 /** 
  * Template Name: About Us
  * 
  * @package WordPress 
  * @subpackage Twenty_Fourteen 
  * @since Twenty Fourteen 1.0 
  */
	get_header();
?>
<!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="<?php bloginfo('template_directory');?>/assets/images/inner-background.jpeg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2><?php the_title() ?></h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Начало</a></li>
                            <li class="breadcrumb-item active" aria-current="page">За нас</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- About us section start -->
    <section class="about-main ratio_36">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-2">
                        <h2>За агенцията</h2>
                        <p class="font-roboto">KEY SPOT НЕДВИЖИМИ ИМОТИ - КЛЮЧЪТ КЪМ ВАШИЯ УСПЕХ</p>
                    </div>
                    <div class="user-about">
                        <div class="row">
                            <div class="col-xl-5 col-lg-7">
                                <div class="about-content">
                                    <h3> Key Spot събира агенти <br/> с дългогодишен опит в сферата на недвижимите имоти</h3>
                                    <p class="font-roboto"><?php the_content() ?></p>
                                </div>
                                <div class="about-listing">
                                    <ul>
                                        <li>
                                            <h4>400+</h4>
                                            <p>Имоти</p>
                                        </li>
                                        <li>
                                            <h4>20+</h4>
                                            <p>Брокери</p>
                                        </li>
                                        <li>
                                            <h4>750+</h4>
                                            <p>Продадени имоти</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-7 map-image col-lg-5">
                                <img src="<?php bloginfo('template_directory');?>/assets/images/about/map.png" class="img-fluid bg-img" alt="">
                                <div class="marker-icons">
                                    <ul>
                                        <li><img class="img-fluid marker-1" src="<?php bloginfo('template_directory');?>/assets/images/leaflet/marker-icon.png" alt=""></li>
                                        <li><img class="img-fluid marker-2" src="<?php bloginfo('template_directory');?>/assets/images/leaflet/marker-icon.png" alt=""></li>
                                        <li><img class="img-fluid marker-3" src="<?php bloginfo('template_directory');?>/assets/images/leaflet/marker-icon.png" alt=""></li>
                                        <li><img class="img-fluid marker-4" src="<?php bloginfo('template_directory');?>/assets/images/leaflet/marker-icon.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us section end -->

    <!-- Why choose us section start -->
    <section class="why-choose ratio_40 service-section service-1 bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-2">
                        <h2>Защо да ни изберете?</h2>
                        <p class="font-roboto">Ето още няколко начина как да Ви бъдем полезни</p>
                    </div>
                    <div class="row property-service column-space">
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box">
                                <div class="icon-round">
                                     <i data-feather="settings"></i>
                                </div>
                                <h3>Поддръжка на апартаменти</h3>
                                <p>Една от често използваните ни услуги е комплексното обслужване по поддръжка и управление на апартаменти.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box">
                                <div class="icon-round">
                                    <i data-feather="home"></i>
                                </div>
                                <h3>Обзавеждане</h3>
                                <p>Разполагаме с екип-майстори, които ще сбъднат Вашите желания за страхотно модерен дом.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box">
                                <div class="icon-round">
                                    <i data-feather="dollar-sign"></i>
                                </div>
                                <h3>Ипотечни кредити</h3>
                                <p>Нашата агенция ще Ви съдейства с получаването на изгоден кредит за нуждите Ви</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why choose us section end -->

    <!-- testimonial section start -->
    <section class="about-testimonial">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php get_template_part('includes/testimonials','listing');
                                        ?>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->





<?php
    get_footer();
?>      
