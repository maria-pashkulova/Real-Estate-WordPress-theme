<?php
	get_header();
?>
 
 <!-- Custom post type "blog" only -->
   <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">

       <img src="<?php bloginfo('template_directory');?>/assets/images/inner-background.jpeg" class="bg-img img-fluid" alt="">
        
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Блог</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Начало</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Блог</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- blog section start-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="blog-grid row grid mt-0">
                       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="grid-item wow fadeInUp col-sm-6">
                            <div class="blog-wrap">
                                <div class="blog-image">
                                    <div>

                                    <?php 
                                        if (has_post_thumbnail()):
                                    ?>
                                     <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                                     <?php endif; ?>  
                                    </div>
                                    <div class="blog-label">
                                        <div>
                                            <h3> <?php echo get_the_date('d'); ?></h3>
                                            <span><?php echo get_the_date('M'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-details">
                                    <h3>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <p class="font-roboto">
                                        
                                        <?php the_excerpt(); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>">прочети повече</a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="sticky-cls blog-sidebar blog-right">
                        <div class="filter-cards">
                            <div class="advance-card">
                                <h6>Категории</h6>
                                <div class="category-property">
                                    <ul>
                                        <?php get_template_part('includes/blog','categories');
                                        ?>

                                    </ul>
                                </div>
                            </div>
                            <div class="advance-card">
                                <h6>Последни публикации</h6>
                                <div class="recent-property">
                                    <ul>
                                        <?php get_template_part('includes/latest','blogs');
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end-->
    

   
<?php
	get_footer();
?>		