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
 $blog_info = get_bloginfo('name');
 $description = get_bloginfo('description','display');
 ?>


<?php
                if( have_posts()){

                    while( have_posts() ){
                        the_post();
            ?>
                    <section id="post-<?php the_ID(); ?>" <?php post_class('section blog-wrapper sect-pt4'); ?>>
<?php 
                        if(has_post_thumbnail()){
                            the_post_thumbnail('full');
                        } ?>
  <div class="text-center my-4">
    <a href="<?php echo home_url('#Portfolio'); ?>" class="btn btn-primary">
        ← Back to Home
    </a>
  </div>
  
  <!--/ Section Blog-Single Star /-->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="post-box">
            <div class="post-meta">
              <h1 class="article-title"><?php the_field('title_1');?></h1>
              <ul>
                <li>
                  <span class="ti-user"></span>
                  <a href="#"><?php echo $blog_info;?></a>
                </li>
                <li>
                  <span class="ti-world"></span>
                  <a href="#"><?php echo $description;?></a>
                </li>
              </ul>
            </div>
            <div class="article-content">
              <p>
                <?php the_field('description_1');?>
              </p>
              <?php if(!empty(get_field('image_2'))) $image=get_field('image_2'); ?>
              <a href="<?php echo  $image['url'];?>" target="_blank">
                <img src="<?php echo  $image['url'];?>" class="img-fluid post-thumb" alt="">
              </a>  
              <blockquote class="blockquote-blog">
                <p class="mb-0"><?php the_field('title_2');?></p>
              </blockquote>
              <p>
                <?php the_field('description_2');?>
              </p>
              <?php if(!empty(get_field('image_3'))) $image1=get_field('image_3'); ?>
              <a href="<?php echo  $image1['url'];?>" target="_blank">
                <img src="<?php echo  $image1['url'];?>" class="img-fluid post-thumb" alt="">
              </a>
              <blockquote class="blockquote-blog">
                <p class="mb-0"><?php the_field('title_3');?></p>
              </blockquote>
              <p>
                <?php the_field('description_3');?>
              </p>
              <?php if(!empty(get_field('image_4'))) $image2=get_field('image_4'); ?>
              <a href="<?php echo  $image2['url'];?>" target="_blank">
                <img src="<?php echo  $image2['url'];?>" class="img-fluid post-thumb" alt="">
              </a>
              <blockquote class="blockquote-blog">
                <p class="mb-0"><?php the_field('title_4');?></p>
              </blockquote>
              <p>
                <?php the_field('description_4');?>
              </p>
              <?php if(!empty(get_field('image_5'))) $image3=get_field('image_5'); ?>
              <a href="<?php echo  $image3['url'];?>" target="_blank">
                <img src="<?php echo  $image3['url'];?>" class="img-fluid post-thumb" alt="">
              </a>
              <blockquote class="blockquote-blog">
                <p class="mb-0"><?php the_field('title_5');?></p>
              </blockquote>
              <p>
                <?php the_field('description_5');?>
              </p>
              <?php if(!empty(get_field('image_6'))) $image4=get_field('image_6'); ?>
              <a href="<?php echo  $image4['url'];?>" target="_blank">
                <img src="<?php echo  $image4['url'];?>" class="img-fluid post-thumb" alt="">
              </a>
            </div>
          </div>
        </div>
        <!--<div class="col-md-4">
          <div class="widget-sidebar">
            <h5 class="sidebar-title">Recent Post</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
                <li>
                  <a href="#">Atque placeat maiores.</a>
                </li>
                <li>
                  <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                </li>
                <li>
                  <a href="#">Nam quo autem exercitationem.</a>
                </li>
                <li>
                  <a href="#">Atque placeat maiores nam quo autem</a>
                </li>
                <li>
                  <a href="#">Nam quo autem exercitationem.</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="widget-sidebar">
            <h5 class="sidebar-title">Archives</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
                <li>
                  <a href="#">September, 2017.</a>
                </li>
                <li>
                  <a href="#">April, 2017.</a>
                </li>
                <li>
                  <a href="#">Nam quo autem exercitationem.</a>
                </li>
                <li>
                  <a href="#">Atque placeat maiores nam quo autem</a>
                </li>
                <li>
                  <a href="#">Nam quo autem exercitationem.</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="widget-sidebar widget-tags">
            <h5 class="sidebar-title">Tags</h5>
            <div class="sidebar-content">
              <ul>
                <li>
                  <a href="#">Web.</a>
                </li>
                <li>
                  <a href="#">PrestaShop.</a>
                </li>
                <li>
                  <a href="#">PHP.</a>
                </li>
                <li>
                  <a href="#">Photoshop</a>
                </li>
                <li>
                  <a href="#">Corel Draw</a>
                </li>
                <li>
                  <a href="#">JavaScript</a>
                </li>
              </ul>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  <!--/ Section Blog-Single End /-->

                        </section>
            
                   
<?php               }
            }else{
                get_template_part('template-parts/content','none');
            } ?>



 <!--end single post-->

 <?php 
get_footer();