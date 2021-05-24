<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package w3layouts
 */

get_header();
?>



<main id="primary" class="site-main">

  <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
  <header>
    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
  </header>
  <?php
			endif;
?>



<!-- Search breadcrumb -->
<div class="inner-banner SearchPageBannerImage text-center">
    <style>
      .inner-banner {
        background: url(<?php if(get_theme_mod('SearchPageBannerBgImage') !='') {
          echo wp_get_attachment_url(get_theme_mod('SearchPageBannerBgImage'));
        }

        if(wp_get_attachment_url(get_theme_mod('SearchPageBannerBgImage'))=='') {
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
	<!-- //Search breadcrumb -->



  <div class="w3l-homeblog py-5">
    <div class="container py-lg-5 py-md-4">
      
    <div class="row top-pics text11-content BlogHomeLayout">


          <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

        </div>
        <!-- pagination -->
        <div class="pagination-wrapper mt-4 pt-lg-3">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <?php w3layouts_pagination(); ?>
            </ul>
          </nav>
        </div>

        <!-- //pagination -->


        <?php 
                    // get_sidebar(); ?>
      </div>


    </div>
</main>

<?php
// get_sidebar();
get_footer();