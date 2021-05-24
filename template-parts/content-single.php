<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package w3layouts
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<!-- blog single breadcrumb -->
		<div class="inner-banner text-center pt-md-5">
			<div class="BlogSinglePageBannerImage pt-md-5">
				<style>
					.inner-banner {
						background: url(<?php if(get_theme_mod('BlogSinglePageBannerBgImage') !='') {
							echo wp_get_attachment_url(get_theme_mod('BlogSinglePageBannerBgImage'));
						}

						if(wp_get_attachment_url(get_theme_mod('BlogSinglePageBannerBgImage'))=='') {
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
			</div>
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
		<!-- //blog single breadcrumb -->

	</header> <!-- entry-header -->




	<section class="text-11 py-5">
		<div class="text11 py-lg-5 py-md-4">
			<div class="container w3BlogLayout">

				<?php if ( has_post_thumbnail() ) { ?>

				<div>
					<?php w3layouts_post_thumbnail(); ?>
				</div>
				<?php }?>

				<div class="text11-content">
					<h4 class=""><?php if ( is_singular() ) :
							the_title( '', '' );
						else :
							the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
						endif;?></h6>

						<?php $BlogTitleBelowDate = get_theme_mod( "BlogTitleBelowDate","1")?>
						<?php if( $BlogTitleBelowDate==1 ){?>
						<h6><?php echo get_the_date( 'F j, Y' ); ?> </h6>
						<?php } ?>

						<?php $BlogDetailsAuthor = get_theme_mod( "BlogDetailsAuthor","1")?>
						<?php if( $BlogDetailsAuthor==1 ){?>
						<a href="#admin" class="admin">- <?php echo w3layouts_posted();?></a>
						<?php } ?>

						<ul class="list-unstyled mb-0 ml-4 d-inline-block">

							<!-- <li class="list-inline-item mr-2 mb-0">
								<a href="#url" class="text-muted like"><i
										class="fa fa-heart-o mr-1"></i>23
								</a>
							</li> -->

							<!-- <?php $BlogDetailsComments = get_theme_mod( "BlogDetailsComments","1")?>
						<?php if( $BlogDetailsComments==1 ){?>
              <li class="list-inline-item">
								<a href="#url" class="text-muted comments">
									<i class="fa fa-comment-o mr-1"></i>08
								</a>
							</li>
						<?php } ?> -->

						</ul>


						<div class="entry-content">
							<div class="single-post-content">
								<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'w3layouts' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'w3layouts' ),
				'after'  => '</div>',
			)
		);

		?>


								<?php if(get_option('author_card_below')==1){?>
								<div class="author-card author-listhny my-lg-5 my-sm-4">
									<div class="row">
										<div class="author-left col-sm-3 mb-sm-0 mb-4">
											<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID'));?>">
												<img class="img-fluid" src="<?php print get_avatar_url( get_the_author_meta( 'ID' ), ['size' => '200'] ); ?>"
													alt="<?php the_author_meta('display_name'); ?>">
											</a>
										</div>
										<div class="author-right col-sm-9 position-relative align-self">

											<h4><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID'));?>"
													class="title-team-28"><?php the_author_meta('display_name'); ?></a></h4>
											<p class="para-team mb-0"><?php the_author_meta('user_description'); ?></p>

											<div class="share-icons mt-4">
												<?php
								if(!empty(get_the_author_meta('twitterurl')))
								{?>
												<a href="<?php the_author_meta('twitterurl'); ?>"><span class="fa fa-twitter"></span></a>

												<?php }
								?>
												<?php
									if(!empty(get_the_author_meta('facebookurl')))
									{?>
												<a href="<?php the_author_meta('facebookurl'); ?>"><span class="fa fa-facebook"></span></a>

												<?php }
									?>
												<?php
									if(!empty(get_the_author_meta('instagramurl')))
									{?>
												<a href="<?php the_author_meta('instagramurl'); ?>"><span class="fa fa-instagram"></span></a>

												<?php }
									?>

												<?php
									if(!empty(get_the_author_meta('dribbleurl')))
									{?>
												<a href="<?php the_author_meta('dribbleurl'); ?>"><span class="fa fa-dribbble"></span></a>

												<?php }?>
												<?php
									if(!empty(get_the_author_meta('vkurl')))
									{?>
												<a href="<?php the_author_meta('vkurl'); ?>"><span class="fa fa-vk"></span></a>

												<?php }
									?>
												<?php
									if(!empty(get_the_author_meta('pinteresturl')))
									{?>
												<a href="<?php the_author_meta('pinteresturl'); ?>"><span class="fa fa-pinterest"></span></a>

												<?php }
									?>
												<?php
									if(!empty(get_the_author_meta('tumblrurl')))
									{?>
												<a href="<?php the_author_meta('tumblrurl'); ?>"><span class="fa fa-tumblr"></span></a>

												<?php }
									?>


											</div>
										</div>
									</div>
								</div>
								<?php }?>
							</div>
						</div>
						<!-- .entry-content -->
						<?php	the_post_navigation(
				array(
					'prev_text' => '<span class="fa fa-arrow-left" aria-hidden="true"></span> <span class="nav-subtitle">' . esc_html__( 'Previous Post', 'w3layouts' ) . '</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Post', 'w3layouts' ) . ' </span> <span class="fa fa-arrow-right" aria-hidden="true"></span>',
				)
			);
			?>


						<?php // If comments are open or we have at least one comment, load up the comment template.
						 if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

				</div>

			</div>

			<?php 
						// if($BLOGlayoutselected==1){ get_sidebar(); }
						?>

			<?php	if($w3layoutsArticleLayout=='sidebarright'){ get_sidebar(); }?>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->






<?php global $wp_customize;
if ( isset( $wp_customize ) ) { ?>


<!-- move top -->
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->


<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

<!-- <script>
  function autoType(elementClass, typingSpeed) {
    var thhis = $(elementClass);
    thhis.css({
      "position": "relative",
      "display": "inline-block"
    });
    thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
    thhis = thhis.find(".text-js");
    var text = thhis.text().trim().split('');
    var amntOfChars = text.length;
    var newString = "";
    thhis.text("|");
    setTimeout(function () {
      thhis.css("opacity", 1);
      thhis.prev().removeAttr("style");
      thhis.text("");
      for (var i = 0; i < amntOfChars; i++) {
        (function (i, char) {
          setTimeout(function () {
            newString += char;
            thhis.text(newString);
          }, i * typingSpeed);
        })(i + 1, text[i]);
      }
    }, 1500);
  }

  jQuery(document).ready(function () {
    // Now to start autoTyping just call the autoType function with the 
    // class of outer div
    // The second paramter is the speed between each letter is typed.   
    autoType(".type-js", 200);
  });
</script> -->

<!-- magnific popup -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script>
	jQuery(document).ready(function () {
		jQuery('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		jQuery('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!-- //magnific popup -->

<!-- /counter-->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/counter.js"></script>
<!-- //counter-->

<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/owl-carousel.js"></script><!-- owl carousel -->
<!-- script for tesimonials carousel slider -->
<script>
	jQuery(document).ready(function () {
		jQuery("#owl-demo1").owlCarousel({
			loop: true,
			margin: 20,
			nav: false,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				1000: {
					items: 1,
					nav: false,
					loop: false
				}
			}
		})
	})
</script>
<!-- //script for tesimonials carousel slider -->

<!--/MENU-JS-->
<script>
	jQuery(window).on("scroll", function () {
		var scroll = jQuery(window).scrollTop();

		if (scroll >= 80) {
			jQuery("#site-header").addClass("nav-fixed");
		} else {
			jQuery("#site-header").removeClass("nav-fixed");
		}
	});

	//Main navigation Active Class Add Remove
	jQuery(".navbar-toggler").on("click", function () {
		jQuery("header").toggleClass("active");
	});
	jQuery(document).on("ready", function () {
		if ($(window).width() > 991) {
			jQuery("header").removeClass("active");
		}
		jQuery(window).on("resize", function () {
			if (jQuery(window).width() > 991) {
				jQuery("header").removeClass("active");
			}
		});
	});
</script>
<!--//MENU-JS-->

<!-- disable body scroll which navbar is in active -->
<script>
	jQuery(function () {
		jQuery('.navbar-toggler').click(function () {
			jQuery('body').toggleClass('noscroll');
		})
	});
</script>
<!-- //disable body scroll which navbar is in active -->

<!--bootstrap-->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<!-- //bootstrap-->

<?php }
?>