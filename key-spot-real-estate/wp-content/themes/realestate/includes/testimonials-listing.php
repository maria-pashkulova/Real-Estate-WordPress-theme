<div class="title-3 text-start">
    <h2>Нашите доволни клиенти</h2>
    <p class="font-roboto"> Най-високата оценка за успешната ни работа са усмивките на хората след съвместно приключена сделка, благодарностите и подкрепата, които те ни дават.</p>
</div>
<div class="testimonial-4">

    <div class="modern-client row">
        <div class="col-lg-6">
            <div class="img-testimonial">
                <?php query_posts('cat=14'); ?>
                <?php if(have_posts() ) : while (have_posts()) : the_post(); ?>
                    <div >
                        <div class="img-left thumbnail-resize">
                            <?php 
                            if (has_post_thumbnail()):
                                ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                            <?php endif; ?>  
                            
                        </div>
                    </div>
                    <?php 
                endwhile;
            endif;
            ?>
        </div>
    </div>
    <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
        <div class="right-height">
            <div class="comment-right">
                <?php query_posts('cat=14'); ?>
                <?php if(have_posts() ) : while (have_posts()) : the_post(); ?>
                    <div>
                        <div class="media">
                            <div class="media-body">
                                <h3 class="d-flex"><?php the_title() ?></h3>           
                            </div>
                            <ul class="client-rating">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <p class="font-roboto">
                            <?php the_content() ?>
                        </p>
                    </div>
                    <?php 
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
</div>
</div>