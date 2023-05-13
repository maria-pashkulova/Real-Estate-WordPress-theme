<?php 

//масив от масиви - категориите (terms) в които е текущия пост
$customTaxonomyTerms = wp_get_object_terms( get_the_ID(), 'type' );

//брой категории
$termsCount = sizeof($customTaxonomyTerms);

//масив с ids на категориите на текущия пост
$currentPostTermIdsArray = array();
for ($i=0; $i < $termsCount ; $i++) { 
    array_push($currentPostTermIdsArray, $customTaxonomyTerms[$i]->term_id);
}


$args = [
	'post_type' => 'properties',
	'posts_per_page' => 4,
    'tax_query' => array(
        array(
            'taxonomy' => 'type',
            'field' => 'term_id',
            'terms' => $currentPostTermIdsArray
        )
    ),
    'post__not_in' => array ( get_the_ID()),
];

$query = new WP_Query($args); 

?>

<?php if($query->have_posts()): ?>
	<?php while ($query->have_posts()) : $query->the_post(); ?>

        <?php
        $address = '';
        if(get_field('property-region')){
            $address .= get_field('property-region') . ', ';
        }
        $address .= get_field('property-town'); 


        ?>


        <div class="col-md-6 wow">
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
                <p class="font-roboto">
                   <?php the_excerpt(); ?>
               </p>
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
                <span> <?php echo get_the_date('d.m.Y'); ?></span>
                <button type="button"  onclick="document.location='<?php the_permalink()?>'" class="btn btn-dashed btn-pill color-2">Детайли</button>
            </div>
        </div>
    </div>
</div>


	<?php endwhile;?>
<?php endif;?>
