<?php
    get_header();
?>
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

    <!-- blog details section start-->
    <section class="ratio_40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-single-detail theme-card">

                        <?php 
                        if (has_post_thumbnail()):
                            ?>
                            <div class="blog-detail-image">
                               <img src="<?php the_post_thumbnail_url(); ?>" class="bg-img img-fluid" alt="">
                           </div>
                       <?php endif; ?>  

                       
                        <div class="blog-title">
                            <ul class="post-detail">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                <li>
                                    <?php echo get_the_date('d.m.Y'); ?>
                                </li>

                                <?php 
                                    $fname = get_the_author_meta('first_name');
                                    $lname = get_the_author_meta('last_name');
                                ?>
                                <li> Публикувано от : <?php echo $fname; ?> <?php echo $lname;?> </li>
                                <li>
                                    <?php 

                                    //масив от масиви - категориите (terms) в които е текущия пост
                                    $customTaxonomyTerms = wp_get_object_terms( get_the_ID(), 'categories' );

                                    //брой категории
                                    $termsCount = sizeof($customTaxonomyTerms);

                                    for ($i=0; $i < $termsCount ; $i++) { 

                                        if($i != $termsCount-1) {
                                            echo $customTaxonomyTerms[$i]->name . ', ';
                                        } else {
                                           echo $customTaxonomyTerms[$i]->name ;
                                       }

                                   }

                                   ?>

                                </li>
                            </ul>
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <div class="details-property">
                            <div class="row">
                                <p class="col-xl-12"><?php the_content(); ?></p>
                            </div>
                        </div>

                            <?php 
                                if(comments_open() || get_comments_number()) {
                                    comments_template(); 
                                }
                            ?>
                        
                        <?php endwhile; endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog details section end-->

<?php
    get_footer();
?>