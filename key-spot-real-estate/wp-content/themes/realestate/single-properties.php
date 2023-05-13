<?php
    get_header();

       
    $address = '';
    if(get_field('property-region')){
        $address .= get_field('property-region') . ', ';
    }
    $address .= get_field('property-town'); 


?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- slider section start -->
    
<?php if(get_gallery()):?>
    <section class="p-0 ratio3_2">
        <div class="single-property-slider zoom-image-box zoom-gallery-multiple">
            <?php foreach ( get_gallery() as $attachment ) : ?>
                <div>
                    <a href="<?php echo $attachment->large_url ?>" class="zoom">
                        <div>
                            <img src="<?php echo $attachment->large_url ?>" class="bg-img" alt="">
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif;?>
    
    <!-- slider section end -->

    <!-- single property header start -->
    <section class="without-top property-main small-section">
        <div class="single-property-section">
            <div class="container">
                <div class="single-title">
                    <div class="left-single">
                        <div class="d-flex">
                            <h2 class="mb-0"><?php the_title(); ?></h2>
                            <span><span class="label label-shadow ms-2"><?php the_field('status'); ?></span></span>
                        </div>
                        <p class="mt-1">
                            <?php 
                                echo $address;
                            ?>      
                        </p>
                        <ul>
                            <?php 
                                if(get_field('bedrooms-count')):
                            ?>
                            <li>
                                <div>
                                    <img src="<?php bloginfo('template_directory');?>/assets/images/svg/icon/double-bed.svg" class="img-fluid" alt="">
                                    <span>Брой спални: <?php the_field('bedrooms-count'); ?></span>
                                </div>
                            </li>
                            <?php endif ?>
                            <?php 
                                if(get_field('bathrooms-count')):
                            ?>
                            <li>
                                <div>
                                    <img src="<?php bloginfo('template_directory');?>/assets/images/svg/icon/bathroom.svg" class="img-fluid" alt="">
                                    <span>Брой бани: <?php the_field('bathrooms-count'); ?></span>
                                </div>
                            </li>
                            <?php endif ?>
                            <li>
                                <div>
                                    <img src="<?php bloginfo('template_directory');?>/assets/images/svg/icon/square-ruler-tool.svg" class="img-fluid ruler-tool" alt="">
                                    <span><?php the_field('property-area'); ?> <?php the_field('area-units'); ?></span>
                                </div>
                            </li>
                        </ul>
                        <div class="share-buttons">
                            <div class="d-inline-block">
                                <a href="#" class="btn btn-gradient btn-pill color-2"><i class="far fa-share-square"></i>
                                    Сподели
                                </a>
                                <div class="share-hover">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/" class="icon-facebook"><i data-feather="facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/" class="icon-twitter"><i data-feather="twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" class="icon-instagram"><i data-feather="instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="btn btn-dashed btn-pill color-2 ms-md-2 ms-1 save-btn"><i class="far fa-heart"></i>
                                Запази</a>
                            <a href="#" class="btn btn-dashed btn-pill color-2 ms-md-2 ms-1" onclick="myFunction()"><i data-feather="printer"></i>
                                Принтирай</a>
                        </div>
                    </div>
                    <div class="right-single">
                        <h2 class="price"><?php the_field('property-price'); ?> <?php the_field('currency'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- single property header end -->

    <!-- single property start -->
    <section class="single-property mt-0 pt-0">
        <div class="container">
            <div class="row ratio_55">
                <div class="col-xl-9 col-lg-8">
                    <div class="description-section tab-description">
                        <div class="description-details">
                            <div class="desc-box">
                                <ul class="nav nav-tabs line-tab" id="top-tab" role="tablist">
                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active"
                                            href="#about">Основна информация</a></li>
                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                            href="#feature">Удобства</a></li>
                                    
                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                            href="#location-map">Местоположение</a></li>
                                </ul>

                                <div class=" tab-content" id="top-tabContent">
                                    <div class="tab-pane fade show active about page-section" id="about">
                                        <h4 class="content-title">Подробности за имота
                                            <a href="<?php the_field('location-url');?>"
                                                target="_blank">
                                                <i class="fa fa-map-marker-alt"></i> <?php echo $address; ?></a>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-4">
                                                <ul class="property-list-details">
                                                    <li><span>Тип имот:</span> 

                                                     <?php 
                                                    $property_terms = wp_get_object_terms( get_the_ID(), 'type' );

                                                    foreach ($property_terms as $term) {
                                                        echo $term->name;
                                                    }

                                                    ?>

                                                    </li>
                                                    <li><span>Статус :</span><?php the_field('status'); ?></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <ul class="property-list-details">
                                                    <li><span>Цена: </span> <?php the_field('property-price'); ?> <?php the_field('currency'); ?>
                                                    </li>
                                                    <li><span>Площ:</span> <?php the_field('property-area'); ?> <?php the_field('area-units'); ?>

                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <ul class="property-list-details">
                                                    <?php 
                                                        if(get_field('bedrooms-count')):
                                                    ?>
                                                    <li><span>Спални :</span><?php the_field('bedrooms-count'); ?> </li>

                                                    <?php endif;?>

                                                    <?php 
                                                        if(get_field('bathrooms-count')):
                                                    ?>
                                                    <li><span>Брой бани :</span><?php the_field('bathrooms-count'); ?> </li>
                                                    <?php endif;?>
                                                    <?php 
                                                        if(get_field('yard-area')):
                                                    ?>
                                                    <li><span>Площ на двор :</span><?php the_field('yard-area'); ?> </li>
                                                    <?php endif;?>

                                                    <?php 
                                                        if(get_field('floor')):
                                                    ?>
                                                    <li><span>Етаж :</span><?php the_field('floor'); ?></li>
                                                    <?php endif;?>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4 class="mt-4">Описание</h4>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="font-roboto">
                                                    <?php the_content() ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade page-section" id="feature">
                                        <div class="single-feature row">
                                            <div class="col-xl-3 col-6">
                                                    <?php
                                                    $amenities = get_field('amenities-1');
                                                    if( $amenities ): ?>
                                                        <ul>
                                                            <?php foreach( $amenities as $amenity ): ?>
                                                               <li>
                                                                <i class="fa fa-check"></i> <?php echo $amenity ?>
                                                                </li> 
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    <?php endif; ?>
                                            </div>
                                            <div class="col-xl-3 col-6">
                                               <?php
                                                    $amenities2 = get_field('amenities-2');
                                                    if( $amenities2 ): ?>
                                                        <ul>
                                                            <?php foreach( $amenities2 as $amenity ): ?>
                                                               <li>
                                                                <i class="fa fa-check"></i> <?php echo $amenity ?>
                                                                </li> 
                                                            <?php endforeach; ?>
                                                        </ul>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-xl-3 col-6">
                                                <?php
                                                    $amenities3 = get_field('amenities-3');
                                                    if( $amenities3 ): ?>
                                                        <ul>
                                                            <?php foreach( $amenities3 as $amenity ): ?>
                                                               <li>
                                                                <i class="fa fa-check"></i> <?php echo $amenity ?>
                                                                </li> 
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="tab-pane fade page-section" id="location-map">
                                        <h4 class="content-title">Местоположение</h4>

                                       <iframe src="https://www.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="desc-box">
                             

                                <?php 
                                if(comments_open() || get_comments_number()) { ?>
                                 <div class="page-section">
                                   <div class="review">
                                    <div class="review-box">
                                     <?php comments_template(); ?>
                                    </div>
                                    </div>
                                </div>
                             <?php } ?>
                                          
                                      
                            </div>
                        </div>
                    </div>
                    <div class="property-section p-t-40">
                        <div class="title-3 text-start inner-title">
                            <h2>Други имоти в категорията</h2>
                        </div>
                        <div class="row ratio_65">
                            <div class="col-12 property-grid-2">
                                <div class="property-2 row column-sm zoom-gallery property-label property-grid">
                                    
                                  <?php get_template_part('includes/other','properties');
                                        ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="left-sidebar sticky-cls single-sidebar">
                        <div class="filter-cards">
                          
                            <div class="advance-card">
                                <h6>Запитване за имота</h6>
                                <div class="category-property">
                                  <?php 
                                  echo do_shortcode('[contact-form-7 id="107" title="Запитване за конкретен имот"]');
                                  ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- single property end -->

 <?php endwhile; endif; ?>






<?php
    get_footer();
?>