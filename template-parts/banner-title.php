<?php
/**
 * Title Banner
 *
 * @package portfolio-theme
 * @since 0.1
 */

 $blog_info = get_bloginfo('name');
 $description = get_bloginfo('description','display');

?>

<div class="header-content">

<?php
if ( is_page() ) {

    the_title( '<h1 class="page-title">', '</h1>' );

} elseif ( is_single() ) {?>

    <p class="tag-line sub-title"><?php echo get_the_date( 'M d, Y' ); ?></p>
    <?php
    the_title('<h1 class="page-title">', '</h1>');

} elseif ( ! is_front_page() && is_home() ) {

    // in WP settings you can set a page as the Posts Page
            // This will return the ID of the Page assigned to display the Blog Posts Index
    echo('hola');        
    $portfolio_blog_title = get_the_title( get_option( 'page_for_posts', true ) );

    ?>

    <h1 class="page-title"><?php echo esc_html( $portfolio_blog_title ); ?></h1>

<?php
} elseif ( is_home() ) {?>


    <h4 class="header-subtitle">Hello, I am</h4>
    <h1 class="header-title"><?php esc_html_e( $blog_info, 'portfolio-theme' ); ?> </h1>
<?php    
    if ( $description ) {?>
        <h6 class="header-mono" ><?php echo esc_html( $description ) ?></h6>
        <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Print Resume</button>
<?php
    }?>

<?php
} elseif ( is_archive() ) {

    the_archive_title( '<h1 class="page-title">', '</h1>' );

} elseif ( is_404() ) {?>

    <p class="tag-line sub-title">404</p>
    <h1><?php esc_html_e( 'Couldn\'t Be Found', 'portfolio-theme' ); ?></h1>

<?php
} elseif ( is_search() ) {

    $search_title = sprintf( '%s %s', __('Search results for: ', 'portfolio-theme'), get_search_query() ); ?>

    <h1 class="page-title"><?php echo esc_html( $search_title ); ?></h1>

<?php
} ?>

</div>