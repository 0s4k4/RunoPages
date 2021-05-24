<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package w3layouts
 */

?>

<!-- footer -->
<footer>
  <section class="w3l-footer-29-main">

    <?php $FooterStatus = get_theme_mod( "FooterRequired","1")?>
    <?php if( $FooterStatus==1 ){?>
    <div class="footer-29 py-5">
      <div class="container py-lg-4 AdvisoryFooter">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">

            <div class="footer-logo mb-3">
              <a class="navbar-brand"
                href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_theme_mod( "FooterLogoText" );if(get_theme_mod( "FooterLogoText" )==''){echo 'Advisory';}?></a>
            </div>

            <p><?php echo get_theme_mod( "FooterAboutPara","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at
              tempufddfel. Lorem ipsum dolor sit amet Semper at elit." );?></p>

            <?php $FooterSocialmediaStatus = get_theme_mod( "FooterSocialmediaRequired","1")?>
            <?php if( $FooterSocialmediaStatus==1 ){?>
            <div class="main-social-footer-29 mt-4 FooterSocial">

              <?php $FooterSFStatus = get_theme_mod( "FooterSocialFacebook","1")?>
              <?php if( $FooterSFStatus==1 ){?>
              <a href="<?php echo get_theme_mod( "FooterSocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>" class="facebook"><span
                  class="fa fa-facebook"></span></a>
              <?php }?>

              <?php $FooterSTStatus = get_theme_mod( "FooterSocialTwitter","1")?>
              <?php if( $FooterSTStatus==1 ){?>
              <a href="<?php echo get_theme_mod( "FooterSocialTwitterURL","https://twitter.com/W3layouts" ); ?>" class="twitter"><span
                  class="fa fa-twitter"></span></a>
              <?php }?>

              <?php $FooterSIStatus = get_theme_mod( "FooterSocialInstagram","1")?>
              <?php if( $FooterSIStatus==1 ){?>
              <a href="<?php echo get_theme_mod( "FooterSocialInstagramURL","https://www.instagram.com/w3layouts_/" ); ?>" class="instagram"><span
                  class="fa fa-instagram"></span></a>
              <?php }?>

              <?php $FooterSLStatus = get_theme_mod( "FooterSocialLinkedin","1")?>
              <?php if( $FooterSLStatus==1 ){?>
              <a href="<?php echo get_theme_mod( "FooterSocialLinkedinURL","https://in.linkedin.com/company/w3layouts" ); ?>" class="linkedin"><span
                  class="fa fa-linkedin"></span></a>
              <?php }?>

            </div>
            <?php }?>

          </div>

          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

          <?php
                  if(is_active_sidebar('footer-menu-list-1')){
                  dynamic_sidebar('footer-menu-list-1');
                  }
                ?>

          </div>

          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
          <?php
                  if(is_active_sidebar('footer-menu-list-2')){
                  dynamic_sidebar('footer-menu-list-2');
                  }
                ?>
          </div>

          <?php $FooterContactInfoStatus = get_theme_mod( "FooterContactInfoRequired","1")?>
        <?php if( $FooterContactInfoStatus==1 ){?>
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
            <h6 class="footer-title-29">
              <?php echo get_theme_mod( "FooterContactTitle" );if(get_theme_mod( "FooterContactTitle" )==''){echo 'Contact Info';}?> </h6>

            <?php $FooterContactAddressStatus = get_theme_mod( "FooterContactAddressRequired","1")?>
            <?php if( $FooterContactAddressStatus==1 ){?>
            <p><strong><?php echo get_theme_mod( "FooterAddressTitle" );if(get_theme_mod( "FooterAddressTitle" )==''){echo 'Address :';}?></strong>
              <?php echo get_theme_mod( "FooterContactAddress","Advisory Consutancy, 343 Honey Avenue street, NY - 62617." );?></p>
            <?php }?>

            <?php $FooterContactNumberStatus = get_theme_mod( "FooterContactNumberRequired","1")?>
            <?php if( $FooterContactNumberStatus==1 ){?>
            <p class="my-2">
              <strong><?php echo get_theme_mod( "FooterPhoneNumberTitle" );if(get_theme_mod( "FooterPhoneNumberTitle" )==''){echo 'Phone :';}?></strong>
              <a
                href="<?php echo get_theme_mod( "FooterContactPhoneURL","tel:+12 23456799" ); ?>"><?php echo get_theme_mod( "FooterContactPhone", "+12 23456799" );?></a>
            </p>
            <?php }?>

            <?php $FooterOfficialEmailStatus = get_theme_mod( "FooterOfficialEmailRequired","1")?>
            <?php if( $FooterOfficialEmailStatus==1 ){?>
            <p>
              <strong><?php echo get_theme_mod( "FooterOfficialEmailTitle" );if(get_theme_mod( "FooterOfficialEmailTitle" )==''){echo 'Email :';}?></strong>
              <a
                href="<?php echo get_theme_mod( "FooterOfficialEmailURL","mailto:info@example.com" ); ?>"><?php echo get_theme_mod( "FooterOfficialEmail", "info@example.com" );?></a>
            </p>
            <?php }?>

            <?php $FooterMapStatus = get_theme_mod( "FooterMapRequired","1")?>
        <?php if( $FooterMapStatus==1 ){?>
            <div class="map-iframe-ft mt-4">
              <iframe
                src="<?php echo get_theme_mod( "FooterContactMapURL", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" );?>"
                width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
            </div>
            <?php }?>
          </div>
        <?php }?>

        </div>
      </div>
    </div>
  </section>
  <?php }?>

  <!-- copyright -->
  <section class="w3l-copyright">

    <div class="container">

      <div class="row bottom-copies justify-content-center">

        <?php $FooterCRStatus = get_theme_mod( "FooterCopyrightRequired","1")?>
        <?php if( $FooterCRStatus==1 ){?>
        <p class="col-lg-8 copy-footer-29 CopyRights">&copy; <?php echo date('Y'); ?>
          <?php echo get_theme_mod( "FooterCopyrightAllRights", "All Rights Reserved by" );?>
          <a href="<?php echo get_theme_mod( "FooterCopyrightURL", "https://w3layouts.com/" );?>">
            <?php echo get_theme_mod( "FooterCopyrightName", "W3Layouts." );?></a>
          </p>
        <?php }?>

        <?php $FooterRMStatus = get_theme_mod( "FooterRightMenuRequired","1")?>
        <?php if( $FooterRMStatus==1 ){?>
        <div class="col-lg-4 footer-list-29">


          <?php
                  if(is_active_sidebar('footer-menu-list-3')){
                  dynamic_sidebar('footer-menu-list-3');
                  }
                ?>

        </div>
        <?php }?>

      </div>

    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <!-- /move top -->

  </section>
  <!-- //copyright -->

</footer>

<!-- //footer -->






<?php global $wp_customize;
  if ( !isset( $wp_customize ) ) {
    ?>


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



<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->


<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

<script>
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

  $(document).ready(function () {
    // Now to start autoTyping just call the autoType function with the 
    // class of outer div
    // The second paramter is the speed between each letter is typed.   
    autoType(".type-js", 200);
  });
</script>
<!-- magnific popup -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
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

    $('.popup-with-move-anim').magnificPopup({
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
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
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
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- //disable body scroll which navbar is in active -->

<!--bootstrap-->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<!-- //bootstrap-->

<?php }?>

<?php wp_footer(); ?>

</body>

</html>