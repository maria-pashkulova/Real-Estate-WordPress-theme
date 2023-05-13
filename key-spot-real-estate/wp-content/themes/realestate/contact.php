<?php
 /** 
  * Template Name: Contact
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
                    <h2>Свържете се с нас</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Начало</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Контакти</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    
    <!-- Get in touch section start -->
    <section class="small-section get-in-touch">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-6 contact-img">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/inner-pages/1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="log-in">
                        <div class="mb-4 text-start">
                            <h2>Очакваме те да ни пишеш!</h2>
                        </div>
                        <?php 
                        echo do_shortcode(' [contact-form-7 id="75" title="Форма за контакти 1" html_class="row gx-3"]');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get in touch section end -->

    <!-- contact details section start -->
    <section class="small-section contact_section pt-0 contact_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="contact_wrap">
                        <i data-feather="map-pin"></i>
                        <h4>Адрес</h4>
                        <p class="font-roboto">
                            <?php the_field('address');?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="contact_wrap">
                        <i data-feather="mail"></i>
                        <h4>Контакти</h4>
                        <ul>
                            <li class="font-roboto">Имейл: <a href="<?php echo 'mailto:' .get_field('email');?>"><?php the_field('email');?></a></li>
                            <li class="font-roboto">
                                Телефон: <a href="<?php echo 'tel:'. get_field('phone-number', 'menu_' . 24) ; ?>">
                                        <?php the_field('phone-number', 'menu_' . 24);?>
                                    </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact details section end -->




<?php
    get_footer();
?>      