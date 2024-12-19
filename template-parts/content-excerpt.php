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
            <li><span>Address</span> : <?php the_field('address'); ?></li>
            <li><span>Github</span> : <?php the_field('github'); ?></li>
        </ul>
        <ul class="social-icons pt-3">
            <li class="social-item"><a class="social-link" href="<?php the_field('youtube_link'); ?>" target="_blank"><?php the_field('youtube_icon'); ?></a></li>
            <li class="social-item"><a class="social-link" href="<?php the_field('linkedin_link'); ?>" target="_blank"><?php the_field('linkedin_icon'); ?></a></li>
            <li class="social-item"><a class="social-link" href="<?php the_field('github_link'); ?>" target="_blank"><?php the_field('github_icon'); ?></a></li>
        </ul>
        <?php the_field('download_link'); ?>  
    </div>
<?php } 

    if(get_the_title()== 'Who am I ?'){ ?>
    <div class="col-lg-4 about-card">
                    <h3 id="post-<?php the_ID(); ?>" class="font-weight-light"><?php the_title(); ?></h3>
                    <span class="line mb-5"></span>
                    <h5 class="mb-3"><?php the_field('who-subtitle'); ?></h5>
                    <p class="mt-20"><?php the_field('who-description'); ?></p>
                    <?php //the_field('button_download'); ?>
                </div>
<?php }
}
/*
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
                            <h6><?php echo get_field('skill1'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent1'); ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6><?php echo get_field('skill2'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent2'); ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                           <h6><?php echo get_field('skill3'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent3'); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6><?php echo get_field('skill4'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent4'); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6><?php echo get_field('skill5'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent5'); ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6><?php echo get_field('skill6'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent6'); ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6><?php echo get_field('skill7'); ?></h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent7'); ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6><?php echo get_field('skill8'); ?></h6>
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
                <P><?php the_field('mayor_subject1'); ?></P>
                <P class="subtitle"><a href="<?php the_field('link_1'); ?>" target="_blank"><?php the_field('university1'); ?></a></P>
                
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
}*/   

// Check for 'section' context passed from the index file
$section = isset($args['section']) ? $args['section'] : '';
// Render content based on section
if ($section === 'work1') { ?>
    <div class="card mb-4">
        <div class="card-header">
            <h4><?php the_title(); ?></h4>
            <span class="line"></span>
        </div>
        <div class="card-body">
            <h6 class="title text-danger"><?php the_field('start_date1'); echo ' - '; the_field('end_date1'); ?></h6>
            <p><?php the_field('job_title1'); ?></p>
            <p class="subtitle"><a href="<?php the_field('company_link1'); ?>" target="_blank"><?php the_field('company1'); ?></a></p>
            <ul>
                <?php
                    if(have_rows('description1')){
                        $fields=get_field('description1');
                        foreach($fields as $field){
                            if(strlen($field) > 0) echo '<li>'.$field.'</li>';
                        }
                    }
                ?>
            </ul>
        </div>
    </div>
<?php } elseif ($section === 'work2') { ?>
    <div class="card mb-4">
        <div class="card-header">
            <h4><?php the_title(); ?></h4>
            <span class="line"></span>
        </div>
        <div class="card-body">
            <h6 class="title text-danger"><?php the_field('start_date2'); echo ' - '; the_field('end_date2'); ?></h6>
            <p><?php the_field('job_title2'); ?></p>
            <p class="subtitle"><a href="<?php the_field('company_link2'); ?>" target="_blank"><?php the_field('company2'); ?></a></p>
            <ul>
                <?php
                    if(have_rows('description2')){
                        $fields=get_field('description2');
                        foreach($fields as $field){
                            if(strlen($field) > 0) echo '<li>'.$field.'</li>';
                        }
                    }
                ?>
            </ul>
        </div>
    </div>
<?php } elseif ($section === 'education') { ?>
    <div class="card mb-4">
        <div class="card-header">
            <h4><?php the_title(); ?></h4>
            <span class="line"></span>
        </div>
        <div class="card-body">
            <h6 class="title text-danger"><?php the_field('start_date1'); echo ' - '; the_field('end_date1'); ?></h6>
            <p><?php the_field('degree_education1'); ?></p>
            <p><?php the_field('mayor_subject1'); ?></p>
            <p class="subtitle"><a href="<?php the_field('link_1'); ?>" target="_blank"><?php the_field('university1'); ?></a></p>
        </div>
    </div>
<?php } elseif ($section === 'skills') { ?>
    <div class="card mb-4 flex-grow-1">
        <div class="card-header">
            <h4><?php the_title(); ?></h4>
            <span class="line"></span>
        </div>
        <div class="card-body pb-2">
            <?php for ($i = 1; $i <= 8; $i++) {
                if (get_field('skill' . $i)) { ?>
                    <h6><?php echo esc_html(get_field('skill' . $i)); ?></h6>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('skill_percent' . $i); ?>%;" aria-valuenow="<?php the_field('skill_percent' . $i); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
<?php } elseif ($section === 'languages') { ?>
    <div class="card mt-auto">
        <div class="card-header">
            <h4><?php the_title(); ?></h4>
            <span class="line"></span>
        </div>
        <div class="card-body pb-2">
            <?php for ($i = 1; $i <= 3; $i++) {
                if (get_field('language_' . $i)) { ?>
                    <h6><?php the_field('language_' . $i); ?></h6>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?php the_field('language_percentage_' . $i); ?>%;" aria-valuenow="<?php the_field('language_percentage_' . $i); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
<?php } 

if(get_post_type( get_the_ID() ) == "portfolio"){
    $category=get_field('project_category');
    $image =(! empty(get_field('image_1'))) 
            ? get_field('image_1') 
            : get_field('image');?>
<div class="col-md-6 col-lg-4 <? echo strtolower($category)?> all">
    <div class="portfolio-item">
        <img src="<?php echo $image['url']; ?>" class="img-fluid" alt="">
        <div class="content-holder">
            <a class="img-popup" href="<?php the_permalink(); ?>">
            <div class="text-holder">
                <h5 class="title"><?php the_title(); ?></h5>
                <p class="subtitle"><?php the_field('gallery_description'); ?></p>
            </div>
            </a>
        </div>   
    </div>             
</div>
<?php } ?>