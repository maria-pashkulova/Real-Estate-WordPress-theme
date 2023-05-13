  <!-- footer start -->
 <footer class="footer-brown">
        <div class="footer footer-custom-col">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 order-xl">
                        <div class="footer-links footer-details">
                            <h5 class="footer-title d-md-none">Свържете се с нас
                                <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                            </h5>
                            <div class="footer-content">
                                <div class="footer-logo-size">
                                    <?php 
                                    if(function_exists('the_custom_logo')) {
                                    the_custom_logo();
                                }
                                ?>
                                </div>
                                <p>Key Spot предлага консултации и помощ при покупка на недвижими имоти.</p>
                                <div class="footer-contact">
                                    <ul>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> <?php the_field('address', '72');?>
                                        </li>
                                        <li>
                                            <i class="fas fa-phone-alt"></i><?php the_field('phone-number', 'menu_' . 24);?>
                                        </li>
                                        <li>
                                            <i class="fas fa-envelope"></i><?php the_field('email', '72');?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 order-lg">
                        <div class="footer-links">
                            <h5 class="footer-title">Къде да откриеш офиса ни?
                                <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                            </h5>
                            <div class="footer-content">
                                <div class="footer-map">
                                     <iframe title="realestate location" src="https://www.google.com/maps?q=<?php echo get_field('address', '72'); ?>&output=embed" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-5 order-xl">
                        <div class="footer-links footer-left-space">
                            <h5 class="footer-title">Типове имоти
                                <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                            </h5>
                            <ul class="footer-content">
                                  <?php get_template_part('includes/footer','properties');
                                        ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-7">
                        <div class="footer-links">
                            <h5 class="footer-title">Последно от блога
                                <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                            </h5>
                            <div class="footer-content">
                                <div class="footer-blog">
                                     <?php get_template_part('includes/footer','blog');?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="footer-social sub-footer-link">
                            <ul>
                                <li><a href="https://www.facebook.com/keyspotestate/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?php echo 'mailto:' .get_field('email', '72');?>"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 text-end">
                        <div class="copy-right">
                            <p class="mb-0"> © 2022 Key Spot агенция за недвижими имоти</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- video modal start -->
    <div class="modal fade video-modal" id="video">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <iframe title="realestate" src="https://www.youtube.com/embed/Sz_1tkcU0Co" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- video modal end -->

    <!-- tap to top start -->
    <div class="tap-top color-4">
        <div>
            <i class="fas fa-arrow-up"></i>
        </div>
    </div>
    <!-- tap to top end -->

    
    <!-- latest jquery-->
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery-3.6.0.min.js"></script>

    <!-- popper js-->
    <script src="<?php bloginfo('template_directory');?>/assets/js/popper.min.js"></script>

    <!-- magnific js -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.magnific-popup.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/zoom-gallery.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/zoom-gallery-multiple.js"></script> <!-- single-property.html -->

    <!-- Bootstrap js-->
    <script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="<?php bloginfo('template_directory');?>/assets/js/feather-icon/feather.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/feather-icon/feather-icon.js"></script>

    
 <!-- range slider js --><!--properties.html-->
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery-ui.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/range-slider.js"></script>

    

    <!-- filter js blog.html -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/filter.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/isotope.min.js"></script>


    <!-- wow js-->
    <script src="<?php bloginfo('template_directory');?>/assets/js/wow.min.js" ></script>

    <!--grid js --> <!--   properties.html-->
    <script src="<?php bloginfo('template_directory');?>/assets/js/grid-list.js"></script>

    <!-- tilt js -About us page-->
    <script src="<?php bloginfo('template_directory');?>/assets/js/tilt.jquery.js"></script>

    <!-- slick js -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/slick.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/slick-animation.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/custom-slick.js"></script>

    

    <!-- print js  -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/print.js"></script> <!-- single-property.html -->

    
    <!-- Template js-->
    <script src="<?php bloginfo('template_directory');?>/assets/js/script.js"></script>


    <?php
        wp_footer();
    ?>

</body>

</html>