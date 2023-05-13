<?php
	get_header();
?>
<!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="<?php bloginfo('template_directory');?>/assets/images/inner-background.jpeg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2><?php single_cat_title(); ?></h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Начало</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Имоти</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- property grid start -->
    <section class="property-section">
        <div class="container">
            <div class="row ratio_63">
                <div class="col-xl-3 col-lg-4">
                    <div class="left-sidebar">
                        <div class="filter-cards">
                            <div class="advance-card">
                                <div class="back-btn d-lg-none d-block">
                                   Назад
                                </div>
                            </div>
                            <div class="advance-card">
                                <h6>Категории</h6>
                                <div class="category-property">
                                    <ul>
                                        <?php get_template_part('includes/properties','type');
                                        ?>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="advance-card">
                                <h6>Контакти</h6>
                                <div class="category-property">
                                    <ul>
                                        <li>
                                            <i data-feather="map-pin" class="me-2"></i><?php the_field('address','72');?>
                                        </li>
                                        <li>
                                            <i data-feather="phone-call" class="me-2"></i> <?php the_field('phone-number', 'menu_' . 24);?>
                                        </li>
                                        <li>
                                            <i data-feather="mail" class="me-2"></i><?php the_field('email','72');?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="advance-card">
                                <h6>Последни предложения</h6>
                                <div class="recent-property">
                                    <ul>
                                         <?php get_template_part('includes/latest','properties');
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
<!-- FILTER ENDS HERE -->

                <div class="col-xl-9 col-lg-8 property-grid-2">
                    <div class="filter-panel">
                        <div class="top-panel">
                            <div>
                                <h2>Имоти от тип '<?php single_cat_title(); ?>'</h2>
                            </div>
                            <ul class="grid-list-filter d-flex">
                                <li class="d-lg-none d-block">
                                    <div>
                                        <h6 class="mb-0 mobile-filter font-roboto">Подробно търсене <i
                                                data-feather="align-center" class="float-end"></i></h6>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                     <?php get_template_part('includes/properties','listing');
                                        ?>
                </div>
            </div>
        </div>
    </section>
    <!-- property grid end -->




<?php
	get_footer();
?>		