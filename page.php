<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package w3layouts
 */

get_header();
?>


<!-- Page breadcrumb -->
<div class="inner-banner PagePageBannerImage text-center">
    <style>
      .inner-banner {
        background: url(<?php if(get_theme_mod('PagePageBannerBgImage') !='') {
          echo wp_get_attachment_url(get_theme_mod('PagePageBannerBgImage'));
        }

        if(wp_get_attachment_url(get_theme_mod('PagePageBannerBgImage'))=='') {
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
	<!-- //Page breadcrumb -->


	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
