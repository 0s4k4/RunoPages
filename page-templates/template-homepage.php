<?php
/**
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>


<!-- HomePage heroheader section -->
<section>
  <?php echo get_theme_mod( "HomePageHeroHeaderTopArea","" );?>
</section>

<?php $HomePageHeroHeaderRequir = get_theme_mod( "HomePageHeroHeaderRequired","1")?>
<?php if( $HomePageHeroHeaderRequir==1 ){?>
<!-- banner section -->
<section id="home" class="w3l-banner py-5">
  <style>
    .w3l-banner {
      background: url(<?php if(get_theme_mod('HomePageHeroHeaderBgImage') !='') {
        echo wp_get_attachment_url(get_theme_mod('HomePageHeroHeaderBgImage'));
      }

      if(wp_get_attachment_url(get_theme_mod('HomePageHeroHeaderBgImage'))=='') {
        echo get_template_directory_uri()."/assets/images/banner.jpg";
      }

      ?>);
      background-repeat: no-repeat;
      background-position: center;
      -ms-background-size: cover;
      background-size: cover;
      z-index: 0;
      position: relative;
      min-height: 740px;
    }
  </style>
  <div class="container py-lg-5 py-md-4 mt-lg-0 mt-5 HomePageHeroHeader">
    <div class="row align-items-center py-lg-5 py-4 mt-4">

      <div class="col-lg-6 col-sm-12 mt-lg-5">
        <h3 class="mb-4 title">
          <?php echo get_theme_mod( "HomePageHeroHeaderTitleWord1" );if(get_theme_mod( "HomePageHeroHeaderTitleWord1" )==''){echo 'Keeping';}?> <span
            class="type-js"><span
              class="text-js"><?php echo get_theme_mod( "HomePageHeroHeaderTitleTypingWords" );if(get_theme_mod( "HomePageHeroHeaderTitleTypingWords" )==''){echo 'You in';}?></span></span><br>
          <?php echo get_theme_mod( "HomePageHeroHeaderTitleLine2and3" );if(get_theme_mod( "HomePageHeroHeaderTitleLine2and3" )==''){echo 'Touch with Your Customers.';}?>
        </h3>
        <div class="separatorhny"></div>
        <p><?php echo get_theme_mod( "HomePageHeroHeaderpara","Modern Approach to Every New Project" );?></p>

        <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
          <a href="<?php echo get_theme_mod( "HomePageHeroHeaderReadMoreBtnURL","about#url" ); ?>" class="btn btn-style btn-white mr-lg-4 mr-sm-3">
            <?php echo get_theme_mod( "HomePageHeroHeaderReadMoreBtnTxt" );if(get_theme_mod( "HomePageHeroHeaderReadMoreBtnTxt" )==''){echo 'Read More';}?></a>
          <a class="btn btn-primary btn-style"
            href="<?php echo get_theme_mod( "HomePageHeroHeaderContactBtnURL","contact#url" ); ?>"><?php echo get_theme_mod( "HomePageHeroHeaderContactBtnTxt" );if(get_theme_mod( "HomePageHeroHeaderContactBtnTxt" )==''){echo 'Contact Us';}?></a>

        </div>
      </div>

      <div class="col-lg-5 offset-lg-1 col-md-8 col-sm-10 mt-lg-0 mt-5">
        <div class="banner-play-w3 text-lg-center">
          <!--//video-->
          <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center pl-3">
            <span class="video-play-icon">
              <span class="fa fa-play"></span>
            </span>
          </a>

          <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
          <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
            <iframe src="<?php echo get_theme_mod( "HomePageHeroHeaderPopupVideoUrl", 'https://player.vimeo.com/video/326582338');?>" frameborder="0"
              allow="autoplay; fullscreen" allowfullscreen></iframe>
          </div>
          <!--//video-->
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- //banner section -->
<?php } ?>

<section>
  <?php echo get_theme_mod( "HomePageHeroHeaderBottomArea","" );?>
</section>
<!-- /HomePage heroheader section -->







<!--  HomePage About Section -->

<section>
  <?php echo get_theme_mod( "HomePageAboutSectionTopArea","" );?>
</section>

<?php $HomePageAboutSectionRequir = get_theme_mod( "HomePageAboutSectionRequired","1")?>
<?php if( $HomePageAboutSectionRequir==1 ){?>

<div class="content-1 py-5">
  <div class="container py-md-5 HomePageAbout">
    <div class="row content-1-grids">
      <div class="col-lg-5 content-1-left forms-25-info">
        <div class="header-title">
          <h3 class="hny-title mb-4">
            <?php echo get_theme_mod( "HomePageAboutLeftTitle" );if(get_theme_mod( "HomePageAboutLeftTitle" )==''){echo 'We found our creative space that is open for you.';}?>
          </h3>
        </div>
      </div>
      <div class="col-lg-7 content-1-right pl-lg-5 mt-lg-0 mt-4">
        <p class=""><?php echo get_theme_mod( "HomePageAboutRightContent","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
          ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet
          elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init
          dolor sit, amet elit. Dolor ipsum non velit, culpa!Lorem ipsum init dolor sit" );?>
        </p>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<section>
  <?php echo get_theme_mod( "HomePageAboutSectionBottomArea","" );?>
</section>

<!-- // HomePage About Section -->





<!-- HomePage Services -->

<section>
  <?php echo get_theme_mod( "HomePageServicesTopArea","" );?>
</section>

<?php $HomePageServicesRequir = get_theme_mod( "HomePageServicesRequired","1")?>
<?php if( $HomePageServicesRequir==1 ){?>
<section class="w3l-bottom-grids-6 py-5" id="features">
  <div class="container py-lg-5 py-md-4 HomePageServices">
    <div class="grids-area-hny main-cont-wthree-fea row">
      <div class="col-lg-7 features-lefthny">

        <div class="row justify-content-center">
          <!-- feature-left-->
          <?php $HomePageService1Requir = get_theme_mod( "HomePageService1Required","1")?>
          <?php if( $HomePageService1Requir==1 ){?>
          <div class="col-md-6 grids-feature mb-4">
            <div class="area-box">
              <span
                class="<?php echo get_theme_mod( "HomePageService1Icon" ); if(get_theme_mod( "HomePageService1Icon" )==''){echo 'fa fa-video-camera';}?>"></span>
              <h4><a href="<?php echo get_theme_mod( "HomePageService1Url","#url" ); ?>"
                  class="title-head"><?php echo get_theme_mod( "HomePageService1Title" );if(get_theme_mod( "HomePageService1Title" )==''){echo 'Consulting';}?></a>
              </h4>
              <p class="mt-3"><?php echo get_theme_mod( "HomePageService1Content","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo." );?>
              </p>
            </div>
          </div>
          <?php } ?>

          <?php $HomePageService2Requir = get_theme_mod( "HomePageService2Required","1")?>
          <?php if( $HomePageService2Requir==1 ){?>
          <div class="col-md-6 grids-feature mb-4">
            <div class="area-box">
              <span
                class="<?php echo get_theme_mod( "HomePageService2Icon" ); if(get_theme_mod( "HomePageService2Icon" )==''){echo 'fa fa-tasks';}?>"></span>
              <h4><a href="<?php echo get_theme_mod( "HomePageService2Url","#url" ); ?>"
                  class="title-head"><?php echo get_theme_mod( "HomePageService2Title" );if(get_theme_mod( "HomePageService2Title" )==''){echo 'Approach';}?></a>
              </h4>
              <p class="mt-3"><?php echo get_theme_mod( "HomePageService2Content","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo." );?>
              </p>
            </div>
          </div>
          <?php } ?>

          <?php $HomePageService3Requir = get_theme_mod( "HomePageService3Required","1")?>
          <?php if( $HomePageService3Requir==1 ){?>
          <div class="col-md-6 grids-feature mb-4">
            <div class="area-box">
              <span
                class="<?php echo get_theme_mod( "HomePageService3Icon" ); if(get_theme_mod( "HomePageService3Icon" )==''){echo 'fa fa-pencil-square-o';}?>"></span>
              <h4><a href="<?php echo get_theme_mod( "HomePageService3Url","#url" ); ?>"
                  class="title-head"><?php echo get_theme_mod( "HomePageService3Title" );if(get_theme_mod( "HomePageService3Title" )==''){echo 'Management';}?></a>
              </h4>
              <p class="mt-3"><?php echo get_theme_mod( "HomePageService3Content","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo." );?>
              </p>
            </div>
          </div>
          <?php } ?>

          <?php $HomePageService4Requir = get_theme_mod( "HomePageService4Required","1")?>
          <?php if( $HomePageService4Requir==1 ){?>
          <div class="col-md-6 grids-feature mb-4">
            <div class="area-box">
              <span
                class="<?php echo get_theme_mod( "HomePageService4Icon" ); if(get_theme_mod( "HomePageService4Icon" )==''){echo 'fa fa-users';}?>"></span>
              <h4><a href="<?php echo get_theme_mod( "HomePageService4Url","#url" ); ?>"
                  class="title-head"><?php echo get_theme_mod( "HomePageService4Title" );if(get_theme_mod( "HomePageService4Title" )==''){echo 'Market Research';}?></a>
              </h4>
              <p class="mt-3"><?php echo get_theme_mod( "HomePageService4Content","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo." );?>
              </p>
            </div>
          </div>
          <?php } ?>

        </div>
        <!-- //feature-left-->
      </div>
      <div class="col-lg-5 features-rightthny mt-lg-0 mt-5 pl-lg-5">
        <h3 class="hny-title mb-4">
          <?php echo get_theme_mod( "HomePageServicesTitle" );if(get_theme_mod( "HomePageServicesTitle" )==''){echo 'We found our creative space that is open for you.';}?>
        </h3>
        <div class="separatorhny"></div>
        <p><?php echo get_theme_mod( "HomePageServicesContent","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
          ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet
          elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init
          dolor sit, amet elit. Dolor ipsum non velit, culpa!" );?></p>
        <a class="btn btn-primary btn-style mt-md-5 mt-4"
          href="<?php echo get_theme_mod( "HomePageServicesButtonUrl","#url" ); ?>"><?php echo get_theme_mod( "HomePageServicesButtonTxt" );if(get_theme_mod( "HomePageServicesButtonTxt" )==''){echo 'Read More';}?></a>
      </div>

    </div>
  </div>
</section>
<?php } ?>

<section>
  <?php echo get_theme_mod( "HomePageServicesBottomArea","" );?>
</section>

<!-- //HomePage Services -->





<!--  HomePage Content with Photo Section -->

<section>
  <?php echo get_theme_mod( "HomePageCWPSectionTopArea","" );?>
</section>

<?php $HomePageCWPSectionRequir = get_theme_mod( "HomePageCWPSectionRequired","1")?>
<?php if( $HomePageCWPSectionRequir==1 ){?>

<section class="w3l-servicesblock py-5" id="about">
  <div class="container py-lg-5 py-md-3 HomePageCWP">

    <div class="row">

      <div class="col-lg-3 col-6 left-wthree-img">
        <img
          src="<?php if(get_theme_mod('HomePageCWPImage1')!=''){ echo wp_get_attachment_url( get_theme_mod('HomePageCWPImage1') );} if(wp_get_attachment_url(get_theme_mod('HomePageCWPImage1'))=='') { echo  get_template_directory_uri()."/assets/images/s1.jpg";  }?>"
          alt="" class="img-fluid radius-image">
      </div>
      <div class="col-lg-3 col-6 left-wthree-img">
        <img
          src="<?php if(get_theme_mod('HomePageCWPImage2')!=''){ echo wp_get_attachment_url( get_theme_mod('HomePageCWPImage2') );} if(wp_get_attachment_url(get_theme_mod('HomePageCWPImage2'))=='') { echo  get_template_directory_uri()."/assets/images/s2.jpg";  }?>"
          alt="" class="img-fluid radius-image">
      </div>

      <div class="col-lg-6 about-right-faq align-self mt-lg-0 mt-sm-5 mt-4 pl-lg-5">
        <h3 class="hny-title mb-4">
          <?php echo get_theme_mod( "HomePageCWPTitle" );if(get_theme_mod( "HomePageCWPTitle" )==''){echo 'We Work for Your Incredible Success';}?>
        </h3>
        <div class="separatorhny"></div>
        <p class=""><?php echo get_theme_mod( "HomePageCWPContent","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
          ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet." );?></p>

        <div class="two-grids mt-md-0 mt-md-5 mt-4">

          <?php $HomePageCWPFeature1Requir = get_theme_mod( "HomePageCWPFeature1Required","1")?>
          <?php if( $HomePageCWPFeature1Requir==1 ){?>
          <div class="grids_info">
            <h4><?php echo get_theme_mod( "HomePageCWPF1Title" );if(get_theme_mod( "HomePageCWPF1Title" )==''){echo 'Our Mission';}?></h4>
            <p class=""><?php echo get_theme_mod( "HomePageCWPFeature1Content","Pellen tesque libero ut justo,
              ultrices in ligula." );?></p>
          </div>
          <?php } ?>

          <?php $HomePageCWPFeature2Requir = get_theme_mod( "HomePageCWPFeature2Required","1")?>
          <?php if( $HomePageCWPFeature2Requir==1 ){?>
          <div class="grids_info">
            <h4><?php echo get_theme_mod( "HomePageCWPF2Title" );if(get_theme_mod( "HomePageCWPF2Title" )==''){echo 'Our Vision';}?></h4>
            <p class=""><?php echo get_theme_mod( "HomePageCWPFeature2Content","Pellen tesque libero ut justo,
              ultrices in ligula." );?></p>
          </div>
          <?php } ?>

        </div>

      </div>

    </div>

  </div>
</section>
<?php } ?>

<section>
  <?php echo get_theme_mod( "HomePageCWPSectionBottomArea","" );?>
</section>

<!--  //HomePage Content with Photo Section -->






<!--  HomePage stats section -->

<section>
  <?php echo get_theme_mod( "HomePageStatsTopArea","" );?>
</section>

<?php $HomePageStatsRequir = get_theme_mod( "HomePageStatsRequired","1")?>
<?php if( $HomePageStatsRequir==1 ){?>


<section class="w3_stats py-5" id="stats">
  <div class="container pb-md-4 HomePageStats">
    <div class="w3-stats">

      <div class="row justify-content-center">

        <?php $HomePageStatsGrid1Requir = get_theme_mod( "HomePageStatsGrid1Required","1")?>
        <?php if( $HomePageStatsGrid1Requir==1 ){?>
        <div class="col-md-3 col-6">
          <div class="counter">
            <span
              class="<?php echo get_theme_mod( "HomePageStats1Icon" ); if(get_theme_mod( "HomePageStats1Icon" )==''){echo 'fa fa-clone';}?>"></span>
            <div class="timer count-title count-number mt-3"
              data-to="<?php echo get_theme_mod( "HomePageStats1Number" );if(get_theme_mod( "HomePageStats1Number" )==''){echo '15100';}?>"
              data-speed="1500"></div>
            <p class="count-text">
              <?php echo get_theme_mod( "HomePageStats1Desc" ); if(get_theme_mod( "HomePageStats1Desc" )==''){echo 'Total Projects';}?></p>
          </div>
        </div>
        <?php } ?>

        <?php $HomePageStatsGrid2Requir = get_theme_mod( "HomePageStatsGrid2Required","1")?>
        <?php if( $HomePageStatsGrid2Requir==1 ){?>
        <div class="col-md-3 col-6">
          <div class="counter">
            <span
              class="<?php echo get_theme_mod( "HomePageStats2Icon" ); if(get_theme_mod( "HomePageStats2Icon" )==''){echo 'fa fa-video-camera';}?>"></span>
            <div class="timer count-title count-number mt-3"
              data-to="<?php echo get_theme_mod( "HomePageStats2Number" );if(get_theme_mod( "HomePageStats2Number" )==''){echo '19256';}?>"
              data-speed="1500"></div>
            <p class="count-text">
              <?php echo get_theme_mod( "HomePageStats2Desc" ); if(get_theme_mod( "HomePageStats2Desc" )==''){echo 'Conferences';}?></p>
          </div>
        </div>
        <?php } ?>

        <?php $HomePageStatsGrid3Requir = get_theme_mod( "HomePageStatsGrid3Required","1")?>
        <?php if( $HomePageStatsGrid3Requir==1 ){?>
        <div class="col-md-3 col-6">
          <div class="counter">
            <span
              class="<?php echo get_theme_mod( "HomePageStats3Icon" ); if(get_theme_mod( "HomePageStats3Icon" )==''){echo 'fa fa-smile-o';}?>"></span>
            <div class="timer count-title count-number mt-3"
              data-to="<?php echo get_theme_mod( "HomePageStats3Number" );if(get_theme_mod( "HomePageStats3Number" )==''){echo '12100';}?>"
              data-speed="1500"></div>
            <p class="count-text">
              <?php echo get_theme_mod( "HomePageStats3Desc" ); if(get_theme_mod( "HomePageStats3Desc" )==''){echo 'Happy Clients';}?></p>
          </div>
        </div>
        <?php } ?>

        <?php $HomePageStatsGrid4Requir = get_theme_mod( "HomePageStatsGrid4Required","1")?>
        <?php if( $HomePageStatsGrid4Requir==1 ){?>
        <div class="col-md-3 col-6">
          <div class="counter">
            <span
              class="<?php echo get_theme_mod( "HomePageStats4Icon" ); if(get_theme_mod( "HomePageStats4Icon" )==''){echo 'fa fa-users';}?>"></span>
            <div class="timer count-title count-number mt-3"
              data-to="<?php echo get_theme_mod( "HomePageStats4Number" );if(get_theme_mod( "HomePageStats4Number" )==''){echo '2560';}?>"
              data-speed="1500"></div>
            <p class="count-text"><?php echo get_theme_mod( "HomePageStats4Desc" ); if(get_theme_mod( "HomePageStats4Desc" )==''){echo 'Satisfied
              Partners';}?></p>
          </div>
        </div>
        <?php } ?>

      </div>

    </div>
  </div>
</section>
<?php } ?>

<section>
  <?php echo get_theme_mod( "HomePageStatsBottomArea","" );?>
</section>

<!--  //HomePage stats section -->





<!-- HomePage blog-posts-->

<section>
  <?php echo get_theme_mod( "HomePageBlogGridsTopArea","" );?>
</section>

<?php $HomePageBlogGridsRequir = get_theme_mod( "HomePageBlogGridsRequired","1")?>
<?php if( $HomePageBlogGridsRequir==1 ){?>
<div class="w3l-homeblog py-5" id="homeblog">
  <div class="container py-lg-5 py-md-4 HomePageBlogGrids">
    <h6 class="sub-titlehny text-center">
      <?php echo get_theme_mod( "HomePageBlogGridsTitle1" ); if(get_theme_mod( "HomePageBlogGridsTitle1" )==''){echo 'Blog Posts';}?></h6>
    <h3 class="hny-title mb-md-5 mb-4 pb-md-0 pb-2 text-center">
      <?php echo get_theme_mod( "HomePageBlogGridsTitle2" ); if(get_theme_mod( "HomePageBlogGridsTitle2" )==''){echo 'Take Charge Of Your Life';}?>
    </h3>


    <?php global $wp_customize;
                    if ( isset( $wp_customize ) ) {
                      ?>
    <img src="/wp-content/themes/learncoach-w3layouts/assets/images/BlogSection.png">
    <?php }?>

    <div class="row top-pics">
      <?php
            // the query
            $the_query = new WP_Query( array(
                'posts_per_page' => 2,
            ));
          ?>
      <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <div class="col-lg-4 col-md-6">
        <div class="blog-post">
          <a href="<?php the_permalink() ?>">
            <?php w3layouts_post_thumbnail(); ?>
          </a>

          <div class="card-body blog-details">
            <div>
              <p><?php echo the_category(', ');?></p>
              <a href="<?php the_permalink(); ?>" class="blog-desc">
                <?php the_title(); ?>
              </a>

              <div class="author align-items-center">
                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID'));?>">
                  <img src="<?php print get_avatar_url( get_the_author_meta( 'ID' ), ['size' => '56'] ); ?>"
                    alt="<?php the_author_meta('display_name'); ?>" class="img-fluid rounded-circle">
                </a>

                <ul class="blog-meta">
                  <li class="meta-item blog-lesson">

                    <span class="meta-value"> <?php echo get_the_date( 'F j, Y' ); ?> </span>.

                    <!-- <span class="meta-value ml-2">
                      <span class="fa fa-clock-o"></span> 1 min</span> -->
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

      <?php else : ?>
      <p><?php __('No News'); ?></p>
      <?php endif; ?>
    </div>



  <?php $HomePageBlogGridsReadMoreBtnRequir = get_theme_mod( "HomePageBlogGridsReadMoreBtnRequired","1")?>
  <?php if( $HomePageBlogGridsReadMoreBtnRequir==1 ){?>
  <div class="readhny-btm text-center mx-auto mt-md-4">
    <a class="btn btn-primary btn-style mt-md-5 mt-4"
      href="<?php echo get_theme_mod( "HomePageBlogGridsButtonUrl","/blog" ); ?>"><?php echo get_theme_mod( "HomePageBlogGridsButtontxt",'Read More' ); ?></a>
  </div>
  <?php } ?>

  </div>
</div>
</div>
<?php } ?>

<section>
  <?php echo get_theme_mod( "HomePageBlogGridsBottomArea","" );?>
</section>

<!-- // HomePage blog-posts-->





<!-- HomePage cover -->

<section>
  <?php echo get_theme_mod( "HomePageCoverTopArea","" );?>
</section>

<?php $HomePageCoverRequir = get_theme_mod( "HomePageCoverRequired","1")?>
<?php if( $HomePageCoverRequir==1 ){?>
<div class="middle py-5">
  <style>
    .middle {
      background: url(<?php if(get_theme_mod('HomePageCoverBgImage') !='') {
        echo wp_get_attachment_url(get_theme_mod('HomePageCoverBgImage'));
      }

      if(wp_get_attachment_url(get_theme_mod('HomePageCoverBgImage'))=='') {
        echo get_template_directory_uri()."/assets/images/banner2.jpg";
      }

      ?>);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      -webkit-background-size: cover;
      -o-background-size: cover;
      -moz-background-size: cover;
      -ms-background-size: cover;
      position: relative;
      z-index: 1;
    }
  </style>
  <div class="container py-md-4 HomePageCover">
    <div class="welcome-left text-left py-lg-4">
      <h3 class="hny-title mb-4"><?php echo get_theme_mod( "HomePageCoverTitle1" );if(get_theme_mod( "HomePageCoverTitle1" )==''){echo "Strategy is at the
        Heart of What We Do.";}?></h3>
      <div class="separatorhny"></div>
      <p class="pr-lg-5 mr-lg-5"><?php echo get_theme_mod( "HomePageCoverContent" ); if(get_theme_mod( "HomePageCoverContent" )==''){echo 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
        ligula. Semper at
        tempufddfel. Lorem ipsum dolor sit amet elit.';}?></p>
      <a href="<?php echo get_theme_mod( "HomePageCoverReadMoreButtonUrl","about#url" ); ?>"
        class="btn btn-style btn-white mt-sm-5 mt-4 mr-2"><?php echo get_theme_mod( "HomePageCoverReadMoreButtontxt",'Read More' ); ?></a>
      <a href="<?php echo get_theme_mod( "HomePageCoverContactButtonUrl","contact#url" ); ?>"
        class="btn btn-style btn-primary mt-sm-5 mt-4"><?php echo get_theme_mod( "HomePageCoverContactButtontxt",'Contact Us' ); ?></a>
    </div>
  </div>
</div>
<?php }?>

<section>
  <?php echo get_theme_mod( "HomePageCoverBottomArea","" );?>
</section>

<!-- //HomePage cover -->





<!-- HomePage Testimonials -->

<section>
  <?php echo get_theme_mod( "HomePageTestimonialsTopArea","" );?>
</section>

<?php $HomePageTestimonialsStatus = get_theme_mod( "HomePageTestimonialsRequired","1")?>
<?php if( $HomePageTestimonialsStatus==1 ){?>

<section class="w3l-clients-1" id="testimonials">
  <!-- /grids -->
  <div class="cusrtomer-layout py-5">
    <div class="container py-lg-5 py-md-4 HomePageTestimonials">
      <div class="heading align-self text-center">
        <h6 class="sub-titlehny">
          <?php echo get_theme_mod( "HomePageTestimonialsTitle1" );if(get_theme_mod( "HomePageTestimonialsTitle1" )==''){echo 'Testimonials';}?></h6>
        <h3 class="hny-title mb-md-5 mb-4">
          <?php echo get_theme_mod( "HomePageTestimonialsTitle2" );if(get_theme_mod( "HomePageTestimonialsTitle2" )==''){echo 'What People Say';}?>
        </h3>
      </div>
      <!-- /grids -->
      <div class="testimonial-row">
        <div id="owl-demo1" class="owl-two owl-carousel owl-theme mb-md-3 mb-sm-5 mb-4">

          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q><?php echo get_theme_mod( "HomePageTestimonialsMessage1" ); if(get_theme_mod( "HomePageTestimonialsMessage1" )==''){echo 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                    laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                    facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                    voluptate rem ullam dolore nisi est quasi, doloribus tempora.';}?></q>
                </blockquote>
                <div class="testi-des">
                  <div class="peopl align-self">
                    <h3>
                      <?php echo get_theme_mod( "HomePageTestimonialsClient1Name" );if(get_theme_mod( "HomePageTestimonialsClient1Name" )==''){echo 'Gloria Parker';}?>
                    </h3>
                    <p class="indentity">
                      <?php echo get_theme_mod( "HomePageTestimonialsClient1Designation" );if(get_theme_mod( "HomePageTestimonialsClient1Designation" )==''){echo 'Client Of Company';}?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q><?php echo get_theme_mod( "HomePageTestimonialsMessage2" ); if(get_theme_mod( "HomePageTestimonialsMessage2" )==''){echo 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                    laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                    facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                    voluptate rem ullam dolore nisi est quasi, doloribus tempora.';}?></q>
                </blockquote>
                <div class="testi-des">
                  <div class="peopl align-self">
                    <h3>
                      <?php echo get_theme_mod( "HomePageTestimonialsClient2Name" );if(get_theme_mod( "HomePageTestimonialsClient2Name" )==''){echo 'Tommy sakura';}?>
                    </h3>
                    <p class="indentity">
                      <?php echo get_theme_mod( "HomePageTestimonialsClient2Designation" );if(get_theme_mod( "HomePageTestimonialsClient2Designation" )==''){echo 'Client Of Company';}?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q><?php echo get_theme_mod( "HomePageTestimonialsMessage3" ); if(get_theme_mod( "HomePageTestimonialsMessage3" )==''){echo 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                    laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                    facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                    voluptate rem ullam dolore nisi est quasi, doloribus tempora.';}?></q>
                </blockquote>
                <div class="testi-des">
                  <div class="peopl align-self">
                    <h3>
                      <?php echo get_theme_mod( "HomePageTestimonialsClient3Name" );if(get_theme_mod( "HomePageTestimonialsClient3Name" )==''){echo 'Bruce Bailey';}?>
                    </h3>
                    <p class="indentity">
                      <?php echo get_theme_mod( "HomePageTestimonialsClient3Designation" );if(get_theme_mod( "HomePageTestimonialsClient3Designation" )==''){echo 'Client Of Company';}?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q><?php echo get_theme_mod( "HomePageTestimonialsMessage4" ); if(get_theme_mod( "HomePageTestimonialsMessage4" )==''){echo 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                    laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                    facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                    voluptate rem ullam dolore nisi est quasi, doloribus tempora.';}?></q>
                </blockquote>
                <div class="testi-des">
                  <div class="peopl align-self">
                    <h3>
                      <?php echo get_theme_mod( "HomePageTestimonialsClient4Name" );if(get_theme_mod( "HomePageTestimonialsClient4Name" )==''){echo 'Ruth Edwards';}?>
                    </h3>
                    <p class="indentity">
                      <?php echo get_theme_mod( "HomePageTestimonialsClient4Designation" );if(get_theme_mod( "HomePageTestimonialsClient4Designation" )==''){echo 'Client Of Company';}?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- /grids -->
  </div>
  <!-- //grids -->
</section>
<?php }?>

<section>
  <?php echo get_theme_mod( "HomePageTestimonialsBottomArea","" );?>
</section>

<!-- //HomePage Testimonials -->






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