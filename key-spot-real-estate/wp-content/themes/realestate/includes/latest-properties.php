<?php 

$args = [
	'post_type' => 'properties',
	'posts_per_page' => 3,
];

$query = new WP_Query($args); 

?>

<?php if($query->have_posts()): ?>
	<?php while ($query->have_posts()) : $query->the_post(); ?>

		<li>
             <div class="media">
             	<?php 
                  if (has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                  <?php endif; ?> 

                  <div class="media-body">
                     <h5>
                     	<a href="<?php the_permalink();?>">
                     		<?php the_title(); ?>
                     	</a>
                     </h5>
                   </div>
             </div>
        </li>

	<?php endwhile;?>
<?php endif;?>