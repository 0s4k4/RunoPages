<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package w3layouts
 */

get_header();
?>


<div class="inner-banner">
    <style>
        .inner-banner {
            background: url(<?php if(get_theme_mod('ErrorPageBannerBgImage') !='') {
                echo wp_get_attachment_url(get_theme_mod('ErrorPageBannerBgImage'));
            }

            if(wp_get_attachment_url(get_theme_mod('ErrorPageBannerBgImage'))=='') {
                echo get_template_directory_uri()."/assets/images/banner2.jpg";
            }

            ?>);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            min-height: 300px;
            position: relative;
        }
    </style>
    <section class="w3l-breadcrumb">
        <div class="container">
            <?php $BreadcrumbsStatus = get_theme_mod( "BreadcrumbsRequired","1")?>
            <?php if( $BreadcrumbsStatus==1 ){?>
            <ul class="breadcrumbs-custom-path AllBreadcrumbs">
                <?php get_breadcrumb(); ?>
            </ul>
            <?php }?>
        </div>
    </section>
</div>


<main id="primary" class="site-main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <section class="error-page py-5 text-center">
            <div class="container py-md-5 py-sm-4">
                <div class="main-cover w3">
                    <h4 class="cover-para w3ls">404</h4>
                    <h5 class="error">Sorry We Can't Find That Page!</h5>
                    <p class="">The page you are looking for was moved, removed, renamed or never existed..</p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary btn-style btn back-button mt-md-5 mt-4">Back to Home</a>
                </div>
            </div>
        </section>

</main><!-- #main -->

<?php
get_footer();