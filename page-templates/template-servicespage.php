<?php
/**
 * Template Name: Services Page
 */
?>

<?php get_header(); ?>


<!-- Services breadcrumb -->
<div class="inner-banner text-center pt-md-5">
  <div class="ServicesPageBannerImage pt-md-5">
    <style>
        .inner-banner {
            background: url(<?php if(get_theme_mod('ServicesPageBannerBgImage') !='') {
                echo wp_get_attachment_url(get_theme_mod('ServicesPageBannerBgImage'));
            }

            if(wp_get_attachment_url(get_theme_mod('ServicesPageBannerBgImage'))=='') {
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
<!-- //Services breadcrumb -->





<!-- ServicesPage Services -->

<section>
    <?php echo get_theme_mod( "ServicesPageServicesTopArea","" );?>
</section>

<?php $ServicesPageServicesRequir = get_theme_mod( "ServicesPageServicesRequired","1")?>
<?php if( $ServicesPageServicesRequir==1 ){?>
<div class="w3l-homeblog py-5" id="services">
    <div class="container py-lg-5 py-md-4 ServicesPageServices">

        <h4 class="sub-titlehny">
            <?php echo get_theme_mod( "ServicesPageServicesTitle1" );if(get_theme_mod( "ServicesPageServicesTitle1" )==''){echo 'What We Do';}?></h4>
        <h3 class="hny-title mx-0 mb-4 text-left">
            <?php echo get_theme_mod( "ServicesPageServicesTitle2" );if(get_theme_mod( "ServicesPageServicesTitle2" )==''){echo 'Our Services';}?>
        </h3>
        <div class="separatorhny"></div>
        <p class="sup-ser-para mb-sm-5 mb-4"><?php echo get_theme_mod( "ServicesPageServicesContent","Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
        consectetur adipisicing.Nunc id ipsum fringilla, gravida felis vitae." );?></p>

        <div class="row top-pics justify-content-center">

            <?php $ServicesPageService1Requir = get_theme_mod( "ServicesPageService1Required","1")?>
            <?php if( $ServicesPageService1Requir==1 ){?>
            <div class="ser-grid col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="top-pic1">
                    <style>
                        .w3l-homeblog .top-pic1 {
                            background: url(<?php if(get_theme_mod('ServicesPageService1BgImage') !='') {
                                echo wp_get_attachment_url(get_theme_mod('ServicesPageService1BgImage'));
                            }

                            if(wp_get_attachment_url(get_theme_mod('ServicesPageService1BgImage'))=='') {
                                echo get_template_directory_uri()."/assets/images/ab.jpg";
                            }

                            ?>);
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: 0px 0px;
                        }
                    </style>
                    <div class="card-body blog-details">
                        <div>
                            <div class="icon-ser"><span
                                    class="<?php echo get_theme_mod( "ServicesPageService1Icon" ); if(get_theme_mod( "ServicesPageService1Icon" )==''){echo 'fa fa-linode';}?>"></span>
                            </div>
                            <a href="<?php echo get_theme_mod( "ServicesPageService1Url","#url" ); ?>"
                                class="blog-desc"><?php echo get_theme_mod( "ServicesPageService1Title" );if(get_theme_mod( "ServicesPageService1Title" )==''){echo 'Advanced<br> Analytic';}?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php $ServicesPageService2Requir = get_theme_mod( "ServicesPageService2Required","1")?>
            <?php if( $ServicesPageService2Requir==1 ){?>
            <div class="ser-grid col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="top-pic2">
                    <style>
                        .w3l-homeblog .top-pic2 {
                            background: url(<?php if(get_theme_mod('ServicesPageService2BgImage') !='') {
                                echo wp_get_attachment_url(get_theme_mod('ServicesPageService2BgImage'));
                            }

                            if(wp_get_attachment_url(get_theme_mod('ServicesPageService2BgImage'))=='') {
                                echo get_template_directory_uri()."/assets/images/ab1.jpg";
                            }

                            ?>);
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: 0px 0px;
                        }
                    </style>
                    <div class="card-body blog-details">
                        <div>
                            <div class="icon-ser"><span
                                    class="<?php echo get_theme_mod( "ServicesPageService2Icon" ); if(get_theme_mod( "ServicesPageService2Icon" )==''){echo 'fa fa-thumbs-o-up';}?>"></span>
                            </div>
                            <a href="<?php echo get_theme_mod( "ServicesPageService2Url","#url" ); ?>"
                                class="blog-desc"><?php echo get_theme_mod( "ServicesPageService2Title" );if(get_theme_mod( "ServicesPageService2Title" )==''){echo 'New Business<br> Innovation';}?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php $ServicesPageService3Requir = get_theme_mod( "ServicesPageService3Required","1")?>
            <?php if( $ServicesPageService3Requir==1 ){?>
            <div class="ser-grid col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="top-pic3">
                    <style>
                        .w3l-homeblog .top-pic3 {
                            background: url(<?php if(get_theme_mod('ServicesPageService3BgImage') !='') {
                                echo wp_get_attachment_url(get_theme_mod('ServicesPageService3BgImage'));
                            }

                            if(wp_get_attachment_url(get_theme_mod('ServicesPageService3BgImage'))=='') {
                                echo get_template_directory_uri()."/assets/images/ab2.jpg";
                            }

                            ?>);
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: 0px 0px;
                        }
                    </style>
                    <div class="card-body blog-details">
                        <div>
                            <div class="icon-ser"><span
                                    class="<?php echo get_theme_mod( "ServicesPageService3Icon" ); if(get_theme_mod( "ServicesPageService3Icon" )==''){echo 'fa fa-money';}?>"></span>
                            </div>
                            <a href="<?php echo get_theme_mod( "ServicesPageService3Url","#url" ); ?>"
                                class="blog-desc"><?php echo get_theme_mod( "ServicesPageService3Title" );if(get_theme_mod( "ServicesPageService3Title" )==''){echo 'Corporate<br> Finance';}?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php $ServicesPageService4Requir = get_theme_mod( "ServicesPageService4Required","1")?>
            <?php if( $ServicesPageService4Requir==1 ){?>
            <div class="ser-grid col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="top-pic4">
                    <style>
                        .w3l-homeblog .top-pic4 {
                            background: url(<?php if(get_theme_mod('ServicesPageService4BgImage') !='') {
                                echo wp_get_attachment_url(get_theme_mod('ServicesPageService4BgImage'));
                            }

                            if(wp_get_attachment_url(get_theme_mod('ServicesPageService4BgImage'))=='') {
                                echo get_template_directory_uri()."/assets/images/ab3.jpg";
                            }

                            ?>);
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: 0px 0px;
                        }
                    </style>
                    <div class="card-body blog-details">
                        <div>
                            <div class="icon-ser"><span
                                    class="<?php echo get_theme_mod( "ServicesPageService4Icon" ); if(get_theme_mod( "ServicesPageService4Icon" )==''){echo 'fa fa-handshake-o';}?>"></span>
                            </div>
                            <a href="<?php echo get_theme_mod( "ServicesPageService4Url","#url" ); ?>"
                                class="blog-desc"><?php echo get_theme_mod( "ServicesPageService4Title" );if(get_theme_mod( "ServicesPageService4Title" )==''){echo 'Partnership<br> System';}?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php $ServicesPageService5Requir = get_theme_mod( "ServicesPageService5Required","1")?>
            <?php if( $ServicesPageService5Requir==1 ){?>
            <div class="ser-grid col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="top-pic5">
                    <style>
                        .w3l-homeblog .top-pic5 {
                            background: url(<?php if(get_theme_mod('ServicesPageService5BgImage') !='') {
                                echo wp_get_attachment_url(get_theme_mod('ServicesPageService5BgImage'));
                            }

                            if(wp_get_attachment_url(get_theme_mod('ServicesPageService5BgImage'))=='') {
                                echo get_template_directory_uri()."/assets/images/ab4.jpg";
                            }

                            ?>);
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: 0px 0px;
                        }
                    </style>
                    <div class="card-body blog-details">
                        <div>
                            <div class="icon-ser"><span
                                    class="<?php echo get_theme_mod( "ServicesPageService5Icon" ); if(get_theme_mod( "ServicesPageService5Icon" )==''){echo 'fa fa-bullhorn';}?>"></span>
                            </div>
                            <a href="<?php echo get_theme_mod( "ServicesPageService5Url","#url" ); ?>"
                                class="blog-desc"><?php echo get_theme_mod( "ServicesPageService5Title" );if(get_theme_mod( "ServicesPageService5Title" )==''){echo 'Information<br> Technology';}?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php $ServicesPageService6Requir = get_theme_mod( "ServicesPageService6Required","1")?>
            <?php if( $ServicesPageService6Requir==1 ){?>
            <div class="ser-grid col-lg-4 col-md-6 mt-lg-5 mt-4">
                <div class="top-pic6">
                    <style>
                        .w3l-homeblog .top-pic6 {
                            background: url(<?php if(get_theme_mod('ServicesPageService6BgImage') !='') {
                                echo wp_get_attachment_url(get_theme_mod('ServicesPageService6BgImage'));
                            }

                            if(wp_get_attachment_url(get_theme_mod('ServicesPageService6BgImage'))=='') {
                                echo get_template_directory_uri()."/assets/images/ab5.jpg";
                            }

                            ?>);
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: 0px 0px;
                        }
                    </style>
                    <div class="card-body blog-details">
                        <div>
                            <div class="icon-ser"><span
                                    class="<?php echo get_theme_mod( "ServicesPageService6Icon" ); if(get_theme_mod( "ServicesPageService6Icon" )==''){echo 'fa fa-cubes';}?>"></span>
                            </div>
                            <a href="<?php echo get_theme_mod( "ServicesPageService6Url","#url" ); ?>"
                                class="blog-desc"><?php echo get_theme_mod( "ServicesPageService6Title" );if(get_theme_mod( "ServicesPageService6Title" )==''){echo 'Recession<br>Strategies';}?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>

        <?php $ServicesPageBtnRequir = get_theme_mod( "ServicesPageBtnRequired","1")?>
        <?php if( $ServicesPageBtnRequir==1 ){?>
            <div class="readhny-btm text-center mx-auto mt-md-4">
                <a class="btn btn-primary btn-style mt-md-5 mt-4" href="<?php echo get_theme_mod( "ServicesPageReadMoreBtnUrl","#url" ); ?>"><?php echo get_theme_mod( "ServicesPageReadMoreBtnTxt" );if(get_theme_mod( "ServicesPageReadMoreBtnTxt" )==''){echo 'Read More';}?></a>
            </div>
        <?php } ?>

    </div>
</div>
<?php } ?>

<section>
    <?php echo get_theme_mod( "ServicesPageServicesBottomArea","" );?>
</section>

<!-- //ServicesPage Services -->






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