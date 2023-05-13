<?php
    get_header();
?>

 <!-- section start -->
    <section class="error-section small-section">
            <div class="container">
                <div class="row">
                    <div class="col text-center not-found">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/inner-pages/2.svg" class="img-fluid" alt="">
                        <h2>Страницата не беше намерена</h2>
                        <p class="font-roboto">Страницата, която се опитвате да достъпите не беше намерена. Възможно е да сте попаднали тук, защото сте последвали изтекла връзка от друг сайт.
                        Разгледайте нашите имоти или се свържете с нас.
                        </p>
                        <div class="btns">
                            <a href="<?php echo get_post_type_archive_link( 'properties' ); ?>" class="btn btn-gradient color-4">Към всички имоти</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section end -->



<?php
    get_footer();
?>      
