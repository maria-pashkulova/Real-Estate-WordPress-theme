<?php
	get_header();
?>

<!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="<?php bloginfo('template_directory');?>/assets/images/inner-background.jpeg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Резутати от търсенето за: 

                    	'<?php echo get_search_query();?>'
                    </h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Начало</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Резултати от търсене</li>
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
            <div class="row ratio_55">
                <div class="col-12 property-grid-slider property-grid-2">
                    <div class="property-wrapper-grid">
                        <div class="property-2 row column-sm property-label property-grid">


                        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                <?php
                                $address = '';
                                if(get_field('property-region')){
                                    $address .= get_field('property-region') . ', ';
                                }
                                $address .= get_field('property-town'); 
                                ?>

                            <div class="col-xl-6 col-md-6 wow fadeInUp">
                                <div class="property-box">
                                	<?php if(get_gallery()):?>
                                    <div class="property-image">
                                        <div class="property-slider">
                                        	<?php foreach ( get_gallery() as $attachment ) : ?>
                                    				<a href="<?php the_permalink()?>">
                                    					<img src="<?php echo $attachment->large_url ?>"
                                    					alt="<?php echo $attachment->alt ?>" class="bg-img" >
                                    				</a>

                                    			<?php endforeach; ?>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-shadow"><?php the_field('status'); ?></span>
                                            </div>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>

                                            	<?php 
                                            	$currentPostId = get_the_ID();
                                            	echo get_gallery_images_count($currentPostId);
                                            	?>
                                            </span>
                                        </div>                 
                                       
                                    </div>
    								<?php endif; ?>
                                        	
                                    <div class="property-details">
                                        <span class="font-roboto"><?php echo $address; ?></span>
                                        <a href="<?php the_permalink()?>">
                                            <h3><?php the_title(); ?></h3>
                                        </a>
                                        <h6><?php the_field('property-price'); ?> <?php the_field('currency'); ?></h6>
                                        <p class="font-roboto"><?php the_excerpt(); ?></p>
                                        <ul>
                                            <?php 
                                                if(get_field('bedrooms-count')):
                                            ?>
                                            <li><img src="<?php bloginfo('template_directory');?>/assets/images/svg/icon/double-bed.svg" class="img-fluid" alt="">Спални: <?php the_field('bedrooms-count'); ?></li>
                                            <?php endif;?>

                                            <?php 
                                                if(get_field('bathrooms-count')):
                                            ?>
                                            <li><img src="<?php bloginfo('template_directory');?>/assets/images/svg/icon/bathroom.svg" class="img-fluid" alt="">Бани: <?php the_field('bathrooms-count'); ?></li>

                                            <?php endif;?>
                                            <li><img src="<?php bloginfo('template_directory');?>/assets/images/svg/icon/square-ruler-tool.svg" class="img-fluid ruler-tool" alt=""><?php the_field('property-area'); ?> <?php the_field('area-units'); ?></li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span><?php echo get_the_date('d.m.Y'); ?></span>
                                            <button type="button" class="btn btn-dashed btn-pill color-2" onclick="document.location='<?php the_permalink()?>'">Детайли</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; else: ?>
                             <p class="font-roboto">Не бяха намерени резултати</p>
                               
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- property grid end -->

<?php
	get_footer();
?>		