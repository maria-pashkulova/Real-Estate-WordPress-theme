<?php  
$terms = get_terms('type');

if ( !empty( $terms ) && !is_wp_error( $terms ) ):
    foreach ( $terms as $term ): ?>

        <li>
            <a href="<?php echo get_category_link( $term->term_id ) ?>"><i class="fas fa-arrow-right me-2"></i><?php echo $term->name ?> <span
                class="float-end">(<?php echo $term->count ?>)</span>
            </a>
        </li>

    <?php endforeach; endif; ?>
    