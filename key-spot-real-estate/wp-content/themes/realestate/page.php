 <?php
    get_header();
?>

 <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="<?php bloginfo('template_directory');?>/assets/images/inner-background.jpeg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Качи имот</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Начало</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Качи имот</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->


 <!-- submit property section start -->
    <section class="property-wizard">
        <div class="container">
            <div class="row wizard-box">
                <div class="col-sm-12">
                    <div class="wizard-step-container row">
                       <div class="col-xxl-3 col-lg-4">
                           <div class="theme-card">
                            <ul class="wizard-steps">
                                <li class="step-container step-1">
                                    <div class="media">
                                        <div class="step-icon">
                                            <i data-feather="check"></i>
                                            <span>1</span>
                                        </div>
                                        <div class="media-body">
                                            <h5>Основна информация</h5>
                                           
                                        </div>
                                    </div>
                                </li>
                                <li class="step-container step-2">
                                    <div class="media">
                                        <div class="step-icon">
                                            <i data-feather="check"></i>
                                            <span>2</span>
                                        </div>
                                        <div class="media-body">
                                            <h5>Адрес</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="step-container step-3">
                                    <div class="media">
                                        <div class="step-icon">
                                            <i data-feather="check"></i>
                                            <span>3</span>
                                        </div>
                                        <div class="media-body">
                                            <h5>Галерия</h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                           </div>
                       </div>
                        <div class="wizard-form-details col-xxl-9 col-lg-8">
                            <div class="theme-card my-3">
                                <div class="wizard-step-1 d-block">
                                    <h2><?php the_title()?></h2>
                                    <p class="font-roboto"></p>

                                     <?php 
                                        the_content();
                                     ?>

                                </div>
                              
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- submit property section end -->

<?php
    get_footer();
?>      