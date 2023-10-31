<?php
/**
 * Standard Excerpt Template
 *
 * @package portfolio-theme
 * @since 0.1
 */

 if(get_post_type( get_the_ID() ) == "about_me"){
    if(get_the_title()== 'My Expertise'){?>
    <div class="col-lg-4 about-card">
    <h3 id="post-<?php the_ID(); ?>" class="font-weight-light"><?php the_title(); ?></h3>
    <span class="line mb-5"></span>
    <div class="row">
        <div class="col-1 text-danger pt-1"><?php the_field('expertise_icon_1'); ?></i></div>
        <div class="col-10 ml-auto mr-3">
            <h6><?php the_field('expertise_name_1'); ?></h6>
            <p class="subtitle"><?php the_field('expertise_description_1'); ?></p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-1 text-danger pt-1"><?php the_field('expertise_icon_2'); ?></i></div>
        <div class="col-10 ml-auto mr-3">
            <h6><?php the_field('expertise_name_2'); ?></h6>
            <p class="subtitle"><?php the_field('expertise_description_2'); ?></p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-1 text-danger pt-1"><?php the_field('expertise_icon_3'); ?></i></div>
        <div class="col-10 ml-auto mr-3">
            <h6><?php the_field('expertise_name_3'); ?></h6>
            <p class="subtitle"><?php the_field('expertise_description_3'); ?></p>
            <hr>
        </div>
    </div>
<?php 
}

if(get_the_title()== 'Personal Info'){?>
    <div class="col-lg-4 about-card">
        <h3 id="post-<?php the_ID(); ?>" class="font-weight-light"><?php the_title(); ?></h3>
        <span class="line mb-5"></span>
        <ul class="mt40 info list-unstyled">
            <li><span>Email</span> : <?php the_field('email'); ?></li>
        </ul>
        <ul class="social-icons pt-3">
            <li class="social-item"><a class="social-link" href="<?php the_field('youtube_link'); ?>" target="_blank"><?php the_field('youtube_icon'); ?></a></li>
            <li class="social-item"><a class="social-link" href="<?php the_field('linkedin_link'); ?>" target="_blank"><?php the_field('linkedin_icon'); ?></a></li>
            <li class="social-item"><a class="social-link" href="<?php the_field('github_link'); ?>" target="_blank"><?php the_field('github_icon'); ?></a></li>
        </ul>  
    </div>
<?php } 

    if(get_the_title()== 'Who am I ?'){ ?>
    <div class="col-lg-4 about-card">
                    <h3 id="post-<?php the_ID(); ?>" class="font-weight-light"><?php the_title(); ?></h3>
                    <span class="line mb-5"></span>
                    <h5 class="mb-3"><?php the_field('who-subtitle'); ?></h5>
                    <p class="mt-20"><?php the_field('who-description'); ?></p>
                    <?php the_field('button_download'); ?>
                </div>
<?php }
}

if(get_post_type( get_the_ID() ) == "resume"){
    if(get_the_title()== 'Skills'){?>

                <div class="col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2"><?php the_title(); ?></h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <h6><?php the_field('skill1'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent1'); ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6><?php the_field('skill2'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent2'); ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                           <h6><?php the_field('skill3'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent3'); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6><?php the_field('skill4'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent4'); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6><?php the_field('skill5'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent5'); ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6><?php the_field('skill6'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent6'); ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6><?php the_field('skill7'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent7'); ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6><?php the_field('skill8'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent8'); ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

<?php   }

    if(get_the_title()== 'Languages'){?>
                    <div class="card">
                       <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2"><?php the_title(); ?></h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body pb-2">
<?php 
                        if(get_field( "language_1" )){?> 
                           <h6><?php the_field('language_1'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width:<?php the_field('language_percentage_1'); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
<?php                        }
                        if(get_field( "language_2" )){?>
                            <h6><?php the_field('language_2'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('language_percentage_2'); ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
<?php                       }                        
                        if(get_field( "language_3" )){?>
                            <h6><?php the_field('language_3'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('language_percentage_3'); ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
<?php                       }?>

                        </div>
                    </div>                  
                </div>
<?php   }

    if(get_the_title()== 'Education'){?>
        <div class="col-md-6 col-lg-4">
            <div class="card">
            <div class="card-header">
                <div class="mt-2">
                    <h4><?php the_title(); ?></h4>
                    <span class="line"></span>  
                </div>
            </div>
            <div class="card-body">
                <h6 class="title text-danger"><?php the_field('start_date1'); echo ' - '; the_field('end_date1'); ?></h6>
                <P><?php the_field('degree_education1'); ?></P>
                <P class="subtitle"><?php the_field('university1'); ?></P>
                <!--<hr>
                <h6 class="title text-danger">2006 - 2011</h6>
                <P>High School Degree</P>
                <P class="subtitle">Juan Pedro Esnaola High School (Buenos Aires, Argentina)</P>-->
                
            </div>
            </div>
        </div>
<?php }

    if(get_the_title()== 'Work Experience'){?>
        <div class="col-md-6 col-lg-4">
                            <div class="card">
                            <div class="card-header">
                                    <div class="mt-2">
                                        <h4><?php the_title(); ?></h4>
                                        <span class="line"></span>  
                                    </div>
                            </div>
                                <div class="card-body">
                                <?php if(! empty (get_field('job_title1'))){?>
                                    <h6 class="title text-danger"><?php the_field('start_date1'); echo ' - '; the_field('end_date1'); ?></h6>
                                    <P><?php the_field('job_title1'); ?></P>
                                    <P class="subtitle"><a href="<?php the_field('company_link1'); ?>" target="_blank"><?php the_field('company1'); ?></a></P>
                                        <ul>
                                            <?php if(have_rows('description1')){
                                                    $fields=get_field('description1');
                                                    foreach($fields as $field){?>
                                            <?php if(strlen($field) > 0) echo '<li>'.$field.'</li>'; ?>
                                                <?php }?>
                                        </ul>
                                            <?php }
                                        }?>
                                <?php if(! empty (get_field('job_title2'))){?>
                                    <hr>
                                    <h6 class="title text-danger"><?php the_field('start_date2'); echo ' - '; the_field('end_date2'); ?></h6>
                                    <P><?php the_field('job_title2'); ?></P>
                                    <P class="subtitle"><a href="<?php the_field('company_link2'); ?>" target="_blank"><?php the_field('company2'); ?></a></P>
                                        <ul>
                                            <?php if(have_rows('description2')){
                                                    $fields=get_field('description2');
                                                    foreach($fields as $field){?>
                                            <?php if(strlen($field) > 0) echo '<li>'.$field.'</li>'; ?>
                                                <?php }?>
                                        </ul>
                                    <?php }?>   
                                    
                                </div>
                            </div>
                        </div>
                                    <?php }
        }
}   

if(get_post_type( get_the_ID() ) == "portfolio"){
    $category=get_field('project_category');
    $image = get_field('image');    ?>
<div class="col-md-6 col-lg-4 <? echo strtolower($category) ?> all">
    <div class="portfolio-item">
        <img src="<?php echo $image['url']; ?>" class="img-fluid" alt="">
        <div class="content-holder">
            <a class="img-popup" href="#"></a>
            <div class="text-holder">
                <h5 class="title"><?php the_title(); ?></h5>
                <p class="subtitle"><?php the_field('description'); ?></p>
            </div>
        </div>   
    </div>             
</div>
<?php } ?>