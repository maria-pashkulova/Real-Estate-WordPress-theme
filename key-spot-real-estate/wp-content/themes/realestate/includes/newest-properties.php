<?php 

$args = [
    'post_type' => 'properties',
    'posts_per_page' => 3,
];

$query = new WP_Query($args); 

?>


<?php if($query->have_posts()): ?>
<?php while ($query->have_posts()) : $query->the_post(); ?>

   <div class="col-xl-4 col-md-6 wow fadeInUp">
    <div class="property-box ">
        <div class="property-image">
            <a href="#">
                <?php
                    if (has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" class="bg-img" alt="">
                     <?php else : ?>
                     <img src="<?php bloginfo('template_directory');?>/assets/images/no-property-thumbnail.png" class="bg-img" alt="">
                    <?php endif; ?> 
                <div class="labels-left">
                    <span class="label label-shadow"><?php the_field('status'); ?></span>
                </div>
            </a>
            <div class="bottom-property">
                <div class="d-flex">
                    <div>
                        <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
                        <h6><?php the_field('property-price'); ?> <?php the_field('currency'); ?></h6>
                    </div>
                    <button type="button" class="btn btn-gradient color-4 mt-3" onclick="document.location='<?php the_permalink();?>'">Детайли</button>
                </div>
                <div class="overlay-option">
                    <ul>
                        <li>
                            <span>Площ</span>
                            <h6><?php the_field('property-area'); ?> <?php the_field('area-units'); ?></h6>
                        </li>
                        <li>
                            <span>Етаж</span>
                            <?php 
                                if(get_field('floor')):
                            ?>
                            <h6><?php the_field('floor'); ?></h6>
                             <?php else : ?>
                            <h6>-</h6>
                             <?php endif;?>
                        </li>
                        <li>
                            <span>Спални</span>
                             <?php 
                                if(get_field('bedrooms-count')):
                            ?>
                            <h6><?php the_field('bedrooms-count'); ?></h6>
                             <?php else : ?>
                            <h6>-</h6>
                             <?php endif;?>
                        </li>
                        <li>
                            <span>Бани</span>
                              <?php 
                                if(get_field('bathrooms-count')):
                            ?>
                            <h6><?php the_field('bathrooms-count'); ?></h6>
                             <?php else : ?>
                            <h6>-</h6>
                             <?php endif;?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endwhile; endif;?>