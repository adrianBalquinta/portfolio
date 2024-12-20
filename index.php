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
        <div id="About" class="row about-section">
    
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

                get_template_part('template-parts/content', 'none');

            }

            ?>

        </div>
    </div>

 <!--Resume Section-->
 <!--
    <section class="section" id="resume">
        <div class="container">
            <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
           <div class="row">
/*
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

                    get_template_part('template-parts/content', 'none');

                }

            */
            </div> end row
        </div>
    </section> end resume section -->


    <!-- refactor-->
    <section class="section" id="Resume">
    <div class="container">
        <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
        <div class="row">

            <?php
            // Fetch Resume Posts
            $resume = new WP_query(array(
                'posts_per_page' => -1, // Fetch all posts
                'post_type'      => 'resume'
            ));

            // Initialize empty arrays to group posts
            $work_experience = [];
            $education = null;
            $skills = null;
            $languages = null;

            // Group posts by title
            if ($resume->have_posts()) {
                while ($resume->have_posts()) {
                    $resume->the_post();
                    //echo get_the_title();
                    switch (get_the_title()) {
                        case 'Work Experience':
                            $work_experience = get_the_ID();
                            break;
                        case 'Education':
                            $education = get_the_ID();
                            break;
                        case 'Skills':
                            $skills = get_the_ID();
                            break;
                        case 'Languages':
                            $languages = get_the_ID();
                            break;
                    }
                }
                wp_reset_postdata();
            }
            ?>

            <!-- Left Column: First Work Experience -->
            <div class="col-lg-4 d-flex flex-column">
                <?php if (!empty($work_experience)) {
                    $post = get_post($work_experience);
                    setup_postdata($post);
                    get_template_part('template-parts/content', 'excerpt', ['section' => 'work1']);
                    wp_reset_postdata();
                } ?>
            </div>

            <!-- Center Column: Second Work Experience + Education -->
            <div class="col-lg-4 d-flex flex-column">
                <?php if (!empty($work_experience)) {
                    $post = get_post($work_experience);
                    setup_postdata($post);
                    get_template_part('template-parts/content', 'excerpt', ['section' => 'work2']);
                    wp_reset_postdata();
                } ?>
                <?php if ($education) {
                    $post = get_post($education);
                    setup_postdata($post);
                    get_template_part('template-parts/content', 'excerpt', ['section' => 'education']);
                    wp_reset_postdata();
                } ?>
            </div>

            <!-- Right Column: Skills + Languages -->
            <div class="col-lg-4 d-flex flex-column">
                <?php if ($skills) {
                    $post = get_post($skills);
                    setup_postdata($post);
                    get_template_part('template-parts/content', 'excerpt', ['section' => 'skills']);
                    wp_reset_postdata();
                } ?>
                <?php if ($languages) {
                    $post = get_post($languages);
                    setup_postdata($post);
                    get_template_part('template-parts/content', 'excerpt', ['section' => 'languages']);
                    wp_reset_postdata();
                } ?>
            </div>
        </div><!-- end row -->
    </div>
</section>
    <!-- end refactor-->

    <!--Call-To-Action Section-->
    <section class="section bg-dark py-5">
        <div class="container text-center">
        <?php dynamic_sidebar('cta-1'); ?>
        </div>
    </section><!--end Call-To-Action Section-->
    
     <!-- Portfolio Section -->

     <section class="section bg-custom-gray" id="Portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">My</span> Portfolio</h1>
            <div class="portfolio">
                <div class="filters">
                    <a href="#portfolio" data-filter=".all" class="active">All</a>
                    <a href="#portfolio" data-filter=".woocommerce">WooCommerce</a>
                    <a href="#portfolio" data-filter=".wordpress">WordPress</a>
                    <a href="#portfolio" data-filter=".ecommerce">Dropshipping e-Commerce</a>
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

                    get_template_part('template-parts/content', 'none');

                }
                ?>
                </div><!-- end portfolio-container -->
            </div><!-- end portfolio -->
        </div><!-- end container -->           
    </section>
   <!-- End of portfolio section -->

   <!-- Contact Form -->
   <div class="section contact" id="Contact">
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
                                <h6 class="d-inline">Email :<br> <span class="text-muted">contact@adrianwebsolutions.com</span></h6>
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