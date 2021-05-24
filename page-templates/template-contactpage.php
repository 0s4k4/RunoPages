<?php
/**
 * Template Name: Contact Page
 */
?>
<?php get_header(); ?>


<!-- contact breadcrumb -->
<div class="inner-banner text-center pt-md-5">
  <div class="ContactPageBannerImage pt-md-5">
  <style>
    .inner-banner {
      background: url(<?php if(get_theme_mod('ContactPageBannerBgImage') !='') {
        echo wp_get_attachment_url(get_theme_mod('ContactPageBannerBgImage'));
      }

      if(wp_get_attachment_url(get_theme_mod('ContactPageBannerBgImage'))=='') {
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
<!-- //contact breadcrumb -->



<!-- Contact section -->

<section>
  <?php echo get_theme_mod( "ContactPageTopArea","" );?>
</section>

<?php $ContactStatus = get_theme_mod( "ContactPageRequired","1")?>
<?php if( $ContactStatus==1 ){?>
<section class="w3l-contact-1 py-5" id="contact">
  <div class="contacts-9 py-lg-5 py-md-4">
    <div class="container ContactSection">
      <div class="row contact-view mb-5 pb-lg-5 justify-content-center">

        <?php $ContactDetailsStatus = get_theme_mod( "ContactDetailsRequired","1")?>
        <?php if( $ContactDetailsStatus==1 ){?>
        <div class="col-lg-6 cont-details">

          <div class="contactct-fm-text text-left mb-md-5 mb-4">
            <h4 class="sub-titlehny">
              <?php echo get_theme_mod( "ContactDetailsTitle1" ); if(get_theme_mod( "ContactDetailsTitle1" )==''){echo 'Get in touch';}?></h4>
            <h3 class="hny-title mb-4">
              <?php echo get_theme_mod( "ContactDetailsTitle2" ); if(get_theme_mod( "ContactDetailsTitle2" )==''){echo 'Find Us';}?></h3>
            <div class="separatorhny"></div>
            <p class="mb-sm-5 mb-4"><?php echo get_theme_mod( "ContactDetailsContent" ); if(get_theme_mod( "ContactDetailsContent" )==''){echo 'Start working with Us that can provide everything you need to generate awareness, drive traffic, connect. <br> We guarantee that you’ll be able to have any issue resolved within 24
            hours.';}?></p>
          </div>

          <?php $ContactNumberStatus = get_theme_mod( "ContactPageNumberRequired","1")?>
          <?php if( $ContactNumberStatus==1 ){?>
          <div class="cont-top">
            <div class="cont-left text-center">
              <span class="fa fa-phone"></span>
            </div>
            <div class="cont-right">
              <h6><?php echo get_theme_mod( "ContactPhoneTitle" );if(get_theme_mod( "ContactPhoneTitle" )==''){echo 'Phone number';}?></h6>
              <p><a
                  href="<?php echo get_theme_mod( "ContactNumberUrl","tel:+(21) 255 088 4943" ); ?>"><?php echo get_theme_mod( "ContactNumber" );if(get_theme_mod( "ContactNumber" )==''){echo '+(21) 255 088 4943';}?></a>
              </p>
            </div>
          </div>
          <?php }?>

          <?php $ContactEmailStatus = get_theme_mod( "ContactPageEmailRequired","1")?>
          <?php if( $ContactEmailStatus==1 ){?>
          <div class="cont-top margin-up">
            <div class="cont-left text-center">
              <span class="fa fa-envelope-o"></span>
            </div>
            <div class="cont-right">
              <h6><?php echo get_theme_mod( "ContactEmailTitle" );if(get_theme_mod( "ContactEmailTitle" )==''){echo 'Send Email';}?></h6>
              <p><a href="<?php echo get_theme_mod( "ContactMailUrl","mailto:advisory@mail.com" ); ?>"
                  class="mail"><?php echo get_theme_mod( "ContactMailtxt" );if(get_theme_mod( "ContactMailtxt" )==''){echo 'advisory@mail.com';}?></a>
              </p>
            </div>
          </div>
          <?php }?>

          <?php $ContactAddressStatus = get_theme_mod( "ContactPageAddressRequired","1")?>
          <?php if( $ContactAddressStatus==1 ){?>
          <div class="cont-top margin-up">
            <div class="cont-left text-center">
              <span class="fa fa-map-marker"></span>
            </div>
            <div class="cont-right">
              <h6><?php echo get_theme_mod( "ContactAddressTitle" );if(get_theme_mod( "ContactAddressTitle" )==''){echo 'Office Address';}?></h6>
              <p class="pr-lg-5"><?php echo get_theme_mod( "ContactAddress","Address here, 434 Trainer Honey street, London, UK - 62617." );?></p>
            </div>
          </div>
          <?php }?>

        </div>
        <?php }?>






        

        <?php $ContactFormStatus = get_theme_mod( "ContactPageFormRequired","1")?>
        <?php if( $ContactFormStatus==1 ){?>
        <div class="col-lg-6 mt-lg-0 mt-5 map-content-9 ContactPageForm">
        <?php
      ///Contact US email code Starts here
      $ContactToEmail=get_theme_mod( "ContactToEmail", "w3lSender" );
      $ContactFromEmail=$_REQUEST[get_theme_mod( "ContactPageFormEmail", "w3lSender" )];
      $ContactFromName=$_REQUEST[get_theme_mod( "ContactPageFormName", "w3lName" )];
      $ContactFromSubject=$_REQUEST[get_theme_mod( "ContactPageFormSubject", "w3lSubject" )];
      $ContactFromMessage=$_REQUEST[get_theme_mod( "ContactPageFormMessage", "w3lMessage" )];
      if($ContactFromEmail!='' && $ContactToEmail!=''){
      $ContactEmailMessage = '<table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
        <thead>
          <tr>
            <th scope="col" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;line-height:30px"></th>
            <th scope="col" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;line-height:30px"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Name : </td>
            <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;"> '.$ContactFromName.'</td>

          </tr>
          <tr>
            <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Email : </td>
            <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;"> '.$ContactFromEmail.'</td>
          </tr>

          <tr>
            <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Message : </td>
            <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;"> '.$ContactFromMessage.'</td>
          </tr>
        </tbody>
      </table>';
      add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));

      wp_mail( $ContactToEmail, $ContactFromSubject, $ContactEmailMessage );

      ?>


        <h3 class="hny-title mx-0 mb-4 text-left text-success">We got your details. We will contact you soon</h3>

        <?php
      ///Contact US email code Ends here

      }

      ?>
          <div class="contactct-fm map-content-9 pl-lg-4">

            <div class="contactct-fm-text text-left">
              <h4 class="sub-titlehny">
                <?php echo get_theme_mod( "ContactFormTitle1" ); if(get_theme_mod( "ContactFormTitle1" )==''){echo "Contact Us";}?></h4>
              <h3 class="hny-title mx-0 mb-4 text-left">
                <?php echo get_theme_mod( "ContactFormTitle2" ); if(get_theme_mod( "ContactFormTitle2" )==''){echo "Fill out the form.";}?></h3>
              <div class="separatorhny"></div>
              <p class="mb-sm-5 mb-4"><?php echo get_theme_mod( "ContactFormContent" ); if(get_theme_mod( "ContactFormContent" )==''){echo 'Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                consectetur adipisicing.';}?></p>
            </div>

            <form action="<?php echo get_theme_mod( "ContactPageFormURL", " " );?>" method="post">
              <div class="twice-two">
                <input type="text" class="form-control" name="<?php echo get_theme_mod( "ContactPageFormName", "w3lName" );?>" id="w3lName"
                  placeholder="<?php echo get_theme_mod( "ContactPageFormNameplaceholder", "Name" );?>" required="">

                <input type="email" class="form-control" name="<?php echo get_theme_mod( "ContactPageFormEmail", "w3lSender" );?>" id="w3lSender"
                  placeholder="<?php echo get_theme_mod( "ContactPageFormEmailplaceholder", "Email" );?>" required="">


              </div>
              <div class="twice">
                <input type="text" class="form-control" name="<?php echo get_theme_mod( "ContactPageFormSubject", "w3lSubject" );?>" id="w3lSubject"
                  placeholder="<?php echo get_theme_mod( "ContactPageFormSubjectplaceholder", "Subject" );?>" required="">

              </div>
              <textarea name="<?php echo get_theme_mod( "ContactPageFormMessage", "w3lMessage" );?>" class="form-control" id="w3lMessage"
                placeholder="<?php echo get_theme_mod( "ContactPageFormMessageplaceholder", "Message" );?>" required=""></textarea>

              <div class="text-right">
                <button type="submit"
                  class="btn btn-primary btn-style mt-4"><?php echo get_theme_mod( "ContactPageFormBtn", "Send Message" );?></button>
              </div>
            </form>

          </div>
        </div>
        <?php }?>
      </div>


      <!-- Contact Map section -->

      <section>
        <?php echo get_theme_mod( "ContactPageMapTopArea","" );?>
      </section>

      <?php $ContactMapStatus = get_theme_mod( "ContactPageMapRequired","1")?>
      <?php if( $ContactMapStatus==1 ){?>
      <div class="map-iframe ContactPageMap">
        <iframe
          src="<?php echo get_theme_mod( "ContactPageMapURL", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" );?>"
          width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
      </div>
      <?php }?>

      <section>
        <?php echo get_theme_mod( "ContactPageMapBottomArea","" );?>
      </section>

      <!-- //Contact Map section -->


    </div>
</section>
<?php }?>
<!-- //contact block -->

<section>
  <?php echo get_theme_mod( "ContactPageBottomArea","" );?>
</section>

<!-- /contact-section -->










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

get_footer(); ?>