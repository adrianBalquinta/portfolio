<?php
/**
 * The template for displaying all single posts
 *
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio-theme
 * @since 1.0.0
 */

 get_header();
 ?>

<section class="projects">
    <div class="content-area">
        <div class="container">
            <div class="row">
<?php
                if( have_posts()){

                    while( have_posts() ){
                        the_post();
            ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 
                        if(has_post_thumbnail()){
                            the_post_thumbnail('full');
                        } ?>
                        <button class="btn btn-primary btn-rounded"><i class="ti-eye pr-2"></i>Watch Front-End Live</button>
                        <button class="btn btn-primary btn-rounded"><i class="ti-eye pr-2"></i>Watch Back-End Live</button>
                        <div class="mt-2">
                            <h2><?php the_field('title_1');?></h2>
                            <span class="line"></span>  
                        </div>
                        <p class="post-description"> <?php the_field('description_1');?></p>
                        <h3 class="features">Key Features:</h3>
                        <h4 class="feature-title"><?php the_field('title_2');?></h4>
                        <p class="feature-description"> <?php the_field('description_2');?></p>

                        
                        <!-- BootStrap Carousel -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php if(! empty(get_field('image_2'))){
                              $image=get_field('image_2');
                              echo  $image['url'];
                            } ?>" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="<?php if(! empty(get_field('image_3'))){
                              $image=get_field('image_3');
                              echo  $image['url'];
                            } ?>" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="<?php if(! empty(get_field('image_4'))){
                              $image=get_field('image_4');
                              echo  $image['url'];
                            } ?>" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                        </div><!-- end Carousel -->


                        <h4 class="feature-title"><?php the_field('title_3');?></h4>
                        <p class="feature-description"> <?php the_field('description_3');?></p>
                        <h4 class="feature-title"><?php the_field('title_4');?></h4>
                        <p class="feature-description"> <?php the_field('description_4');?></p>
                        <h4 class="feature-title"><?php the_field('title_5');?></h4>
                        <p class="feature-description"> <?php the_field('description_5');?></p>
                        <h4 class="feature-title"><?php the_field('title_2');?></h4>
                        <p class="feature-description"> <?php the_field('description_2');?></p>

                        
                    </article>
<?php               }
            }else{
                get_template_part('template-parts/content','none');
            } ?>

            </div>
        </div>
    </div>
</section>
 <!--end single post-->

 <?php 
get_footer();