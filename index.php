<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio-theme
 * @since 1.0.0
 */

get_header();
?>
    <div class="container-fluid">
        <div id="about" class="row about-section">
    
        <?php
            $about_me = new WP_query(array(
                'posts_per_page' => 3,
                'post_type' => 'about_me'
            ));

            if( $about_me->have_posts()){


                while($about_me->have_posts() ){

                    $about_me->the_post();
                    get_template_part('template-parts/content','excerpt');

                }
            } else {

                get_template_parts('template-parts/content', 'none');

            }

            ?>

        </div>
    </div>

 <!--Resume Section-->
    <section class="section" id="resume">
        <div class="container">
            <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
           <div class="row">
<?php
                $resume = new WP_query(array(
                    'posts_per_page' => 4,
                    'post_type' => 'resume'
                ));
                
                if( $resume->have_posts()){


                    while($resume->have_posts() ){

                        $resume->the_post();
                        get_template_part('template-parts/content','excerpt');

                    }
                } else {

                    get_template_parts('template-parts/content', 'none');

                }

            ?>
            </div><!-- end row -->
        </div>
    </section><!-- end resume section -->

    <!--Call-To-Action Section-->
    <section class="section bg-dark py-5">
        <div class="container text-center">
        <?php dynamic_sidebar('cta-1'); ?>
        </div>
    </section><!--end Call-To-Action Section-->
    
     <!-- Portfolio Section -->
     <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">My</span> Portfolio</h1>
            <div class="portfolio">
                <div class="filters">
                    <a href="#" data-filter=".all" class="active">
                        All
                    </a>
                    <a href="#" data-filter=".advertising">
                        Advertising
                    </a>
                    <a href="#" data-filter=".branding">
                        Branding
                    </a>
                    <a href="#" data-filter=".web">
                        Web
                    </a>
                </div>
                <div class="portfolio-container"> 
<?php 
                    $portfolio = new WP_query(array(
                    'post_type' => 'portfolio'
                ));
                
                if( $portfolio->have_posts()){


                    while($portfolio->have_posts() ){

                        $portfolio->the_post();
                        get_template_part('template-parts/content','excerpt');

                    }
                } else {

                    get_template_parts('template-parts/content', 'none');

                }
                ?>
                </div><!-- end portfolio-container -->
            </div> <!-- end portfolio --> 
        </div> <!-- end container -->           
    </section>
    <!-- End of portfolio section -->
   <!-- Contact Form -->
   <div class="section contact" id="contact">
        <div id="map" class="map"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
<?php               echo do_shortcode("[contact-form]"); ?>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <h4 class="contact-title">Get in touch</h4>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-envelope icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Email :<br> <span class="text-muted">adrian.balquinta@gmail.com</span></h6>
                            </div>
                        </div>
                        <ul class="social-icons pt-4">
                            <li class="social-item"><a class="social-link text-dark" href="https://www.youtube.com/@adrianbalquinta9994" target="_blank"><i class="ti-youtube" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#" target="_blank"><i class="ti-linkedin" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="https://github.com/adrianBalquinta?tab=repositories" target="_blank"><i class="ti-github" aria-hidden="true"></i></a></li>
                        </ul> 
                    </div>
                </div>
            </div>

        </div>
    </div>
   <!-- End Contact Form -->
    
<?php 
get_footer();