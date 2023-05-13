<?php 

$args = [
	'post_type' => 'blog',
	'posts_per_page' => 2,
];

$query = new WP_Query($args); 

?>

<?php if($query->have_posts()): ?>
	<?php while ($query->have_posts()) : $query->the_post(); ?>

		<div class="media">
           
             <?php 
             if (has_post_thumbnail()): ?>
                <div class="img-overlay footer-img-overlay">
                <img src="<?php the_post_thumbnail_url(); ?>"  alt="">
                </div>
            <?php endif; ?>  
            
                
            <div class="media-body">
                <h6>
                    <a href="<?php the_permalink();?>">

                        <?php the_title(); ?>
                    </a>
                </h6>
                </div>
            </div>

	<?php endwhile;?>
<?php endif;?>

