<?php  
$terms = get_terms('type');

if ( !empty( $terms ) && !is_wp_error( $terms ) ):
    foreach ( $terms as $term ): ?>

        <li>
            <a href="<?php echo get_category_link( $term->term_id ) ?>"><?php echo $term->name ?> 
            </a>
        </li>

<?php endforeach; endif; ?>
    