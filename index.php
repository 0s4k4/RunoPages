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

  <!-- blog breadcrumb -->
  <div class="inner-banner text-center pt-md-5">
  <div class="BlogPageBannerImage pt-md-5">
    <style>
      .inner-banner {
        background: url(<?php if(get_theme_mod('BlogPageBannerBgImage') !='') {
          echo wp_get_attachment_url(get_theme_mod('BlogPageBannerBgImage'));
        }

        if(wp_get_attachment_url(get_theme_mod('BlogPageBannerBgImage'))=='') {
          echo get_template_directory_uri()."/assets/images/banner2.jpg";
        }

        ?>);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
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
  <!-- //blog breadcrumb -->





  <div class="w3l-homeblog py-5">
    <div class="container py-lg-5 py-md-4 BlogHomeHeaderTitles">

      <?php $BlogHeaderStatus = get_theme_mod( "BlogHeaderRequired","1")?>
      <?php if( $BlogHeaderStatus==1 ){?>

        <?php $BlogHeaderTitle1Status = get_theme_mod( "BlogHeaderTitle1Required","1")?>
        <?php if( $BlogHeaderTitle1Status==1 ){?>
          <h4 class="sub-titlehny"><?php echo get_theme_mod( "BlogHomeHeaderTitle1" );if(get_theme_mod( "BlogHomeHeaderTitle1" )==''){echo 'Our Posts';}?>
        </h4>
        <?php }?>

        <?php $BlogHeaderTitle2Status = get_theme_mod( "BlogHeaderTitle2Required","1")?>
        <?php if( $BlogHeaderTitle2Status==1 ){?>
          <h3 class="hny-title mx-0 mb-4 text-left">
          <?php echo get_theme_mod( "BlogHomeHeaderTitle2" );if(get_theme_mod( "BlogHomeHeaderTitle2" )==''){echo "Latest Blog Posts";}?></h3>
        <?php }?>

      <div class="separatorhny"></div>
      
      <?php $BlogHeaderparaStatus = get_theme_mod( "BlogHeaderparaRequired","1")?>
        <?php if( $BlogHeaderparaStatus==1 ){?>
          <p class="sup-ser-para mb-sm-5 mb-4"><?php echo get_theme_mod( "BlogHomeHeaderpara","Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
          consectetur adipisicing.Nunc id ipsum fringilla, gravida felis vitae." );?></p>
        <?php }?>

      <?php }?>


      <div class="row top-pics text11-content BlogHomeLayout">

        <?php	$BlogHomePostsLayout=get_theme_mod( "BlogHomePostsLayout");
					// echo 'Article Layout : '.$w3layoutsArticleLayout;
					?>


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
      <div class="pagination-wrapper mt-3">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-start">
            <?php w3layouts_pagination(); ?>
          </ul>
        </nav>
      </div>

      <!-- //pagination -->

    </div>
  </div>
</main>






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
    if (jQuery(window).width() > 991) {
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

get_footer(); ?>