<?php
/**
 * Template Name: Single Landing Page
 */
?>

<?php get_header(); ?>


<!-- LandingPage heroheader section -->
<section>
  <?php echo get_theme_mod( "LandingPageHeroHeaderTopArea","" );?>
</section>

<?php $LandingPageHeroHeaderRequir = get_theme_mod( "LandingPageHeroHeaderRequired","1")?>
<?php if( $LandingPageHeroHeaderRequir==1 ){?>
<!-- banner section -->
<section id="home" class="w3l-banner py-5">
  <style>
    .w3l-banner {
      background: url(<?php if(get_theme_mod('LandingPageHeroHeaderBgImage') !='') {
        echo wp_get_attachment_url(get_theme_mod('LandingPageHeroHeaderBgImage'));
      }

      if(wp_get_attachment_url(get_theme_mod('LandingPageHeroHeaderBgImage'))=='') {
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
  <div class="container py-lg-5 py-md-4 mt-lg-0 mt-5 LandingPageHeroHeader">
    <div class="row align-items-center py-lg-5 py-4 mt-4">

      <div class="col-lg-6 col-sm-12 mt-lg-5">
        <h3 class="mb-4 title">
          <?php echo get_theme_mod( "LandingPageHeroHeaderTitleWord1" );if(get_theme_mod( "LandingPageHeroHeaderTitleWord1" )==''){echo 'Keeping';}?> <span
            class="type-js"><span
              class="text-js"><?php echo get_theme_mod( "LandingPageHeroHeaderTitleTypingWords" );if(get_theme_mod( "LandingPageHeroHeaderTitleTypingWords" )==''){echo 'You in';}?></span></span><br>
          <?php echo get_theme_mod( "LandingPageHeroHeaderTitleLine2and3" );if(get_theme_mod( "LandingPageHeroHeaderTitleLine2and3" )==''){echo 'Touch with Your Customers.';}?>
        </h3>
        <div class="separatorhny"></div>
        <p><?php echo get_theme_mod( "LandingPageHeroHeaderpara","Modern Approach to Every New Project" );?></p>

        <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
          <a href="<?php echo get_theme_mod( "LandingPageHeroHeaderReadMoreBtnURL","about#url" ); ?>" class="btn btn-style btn-white mr-lg-4 mr-sm-3">
            <?php echo get_theme_mod( "LandingPageHeroHeaderReadMoreBtnTxt" );if(get_theme_mod( "LandingPageHeroHeaderReadMoreBtnTxt" )==''){echo 'Read More';}?></a>
          <a class="btn btn-primary btn-style"
            href="<?php echo get_theme_mod( "LandingPageHeroHeaderContactBtnURL","contact#url" ); ?>"><?php echo get_theme_mod( "LandingPageHeroHeaderContactBtnTxt" );if(get_theme_mod( "LandingPageHeroHeaderContactBtnTxt" )==''){echo 'Contact Us';}?></a>

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
            <iframe src="<?php echo get_theme_mod( "LandingPageHeroHeaderPopupVideoUrl", 'https://player.vimeo.com/video/326582338');?>" frameborder="0"
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
  <?php echo get_theme_mod( "LandingPageHeroHeaderBottomArea","" );?>
</section>
<!-- /LandingPage heroheader section -->







<!--  LandingPage About Section -->

<section>
  <?php echo get_theme_mod( "LandingPageAboutSectionTopArea","" );?>
</section>

<?php $LandingPageAboutSectionRequir = get_theme_mod( "LandingPageAboutSectionRequired","1")?>
<?php if( $LandingPageAboutSectionRequir==1 ){?>

<div class="content-1 py-5">
  <div class="container py-md-5 LandingPageAbout">
    <div class="row content-1-grids">
      <div class="col-lg-5 content-1-left forms-25-info">
        <div class="header-title">
          <h3 class="hny-title mb-4">
            <?php echo get_theme_mod( "LandingPageAboutLeftTitle" );if(get_theme_mod( "LandingPageAboutLeftTitle" )==''){echo 'We found our creative space that is open for you.';}?>
          </h3>
        </div>
      </div>
      <div class="col-lg-7 content-1-right pl-lg-5 mt-lg-0 mt-4">
        <p class=""><?php echo get_theme_mod( "LandingPageAboutRightContent","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
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
  <?php echo get_theme_mod( "LandingPageAboutSectionBottomArea","" );?>
</section>

<!-- // LandingPage About Section -->





<!-- LandingPage Services -->

<section>
  <?php echo get_theme_mod( "LandingPageServicesTopArea","" );?>
</section>

<?php $LandingPageServicesRequir = get_theme_mod( "LandingPageServicesRequired","1")?>
<?php if( $LandingPageServicesRequir==1 ){?>
<section class="w3l-bottom-grids-6 py-5" id="features">
  <div class="container py-lg-5 py-md-4 LandingPageServices">
    <div class="grids-area-hny main-cont-wthree-fea row">
      <div class="col-lg-7 features-lefthny">

        <div class="row justify-content-center">
          <!-- feature-left-->
          <?php $LandingPageService1Requir = get_theme_mod( "LandingPageService1Required","1")?>
          <?php if( $LandingPageService1Requir==1 ){?>
          <div class="col-md-6 grids-feature mb-4">
            <div class="area-box">
              <span
                class="<?php echo get_theme_mod( "LandingPageService1Icon" ); if(get_theme_mod( "LandingPageService1Icon" )==''){echo 'fa fa-video-camera';}?>"></span>
              <h4><a href="<?php echo get_theme_mod( "LandingPageService1Url","#url" ); ?>"
                  class="title-head"><?php echo get_theme_mod( "LandingPageService1Title" );if(get_theme_mod( "LandingPageService1Title" )==''){echo 'Consulting';}?></a>
              </h4>
              <p class="mt-3"><?php echo get_theme_mod( "LandingPageService1Content","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo." );?>
              </p>
            </div>
          </div>
          <?php } ?>

          <?php $LandingPageService2Requir = get_theme_mod( "LandingPageService2Required","1")?>
          <?php if( $LandingPageService2Requir==1 ){?>
          <div class="col-md-6 grids-feature mb-4">
            <div class="area-box">
              <span
                class="<?php echo get_theme_mod( "LandingPageService2Icon" ); if(get_theme_mod( "LandingPageService2Icon" )==''){echo 'fa fa-tasks';}?>"></span>
              <h4><a href="<?php echo get_theme_mod( "LandingPageService2Url","#url" ); ?>"
                  class="title-head"><?php echo get_theme_mod( "LandingPageService2Title" );if(get_theme_mod( "LandingPageService2Title" )==''){echo 'Approach';}?></a>
              </h4>
              <p class="mt-3"><?php echo get_theme_mod( "LandingPageService2Content","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo." );?>
              </p>
            </div>
          </div>
          <?php } ?>

          <?php $LandingPageService3Requir = get_theme_mod( "LandingPageService3Required","1")?>
          <?php if( $LandingPageService3Requir==1 ){?>
          <div class="col-md-6 grids-feature mb-4">
            <div class="area-box">
              <span
                class="<?php echo get_theme_mod( "LandingPageService3Icon" ); if(get_theme_mod( "LandingPageService3Icon" )==''){echo 'fa fa-pencil-square-o';}?>"></span>
              <h4><a href="<?php echo get_theme_mod( "LandingPageService3Url","#url" ); ?>"
                  class="title-head"><?php echo get_theme_mod( "LandingPageService3Title" );if(get_theme_mod( "LandingPageService3Title" )==''){echo 'Management';}?></a>
              </h4>
              <p class="mt-3"><?php echo get_theme_mod( "LandingPageService3Content","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo." );?>
              </p>
            </div>
          </div>
          <?php } ?>

          <?php $LandingPageService4Requir = get_theme_mod( "LandingPageService4Required","1")?>
          <?php if( $LandingPageService4Requir==1 ){?>
          <div class="col-md-6 grids-feature mb-4">
            <div class="area-box">
              <span
                class="<?php echo get_theme_mod( "LandingPageService4Icon" ); if(get_theme_mod( "LandingPageService4Icon" )==''){echo 'fa fa-users';}?>"></span>
              <h4><a href="<?php echo get_theme_mod( "LandingPageService4Url","#url" ); ?>"
                  class="title-head"><?php echo get_theme_mod( "LandingPageService4Title" );if(get_theme_mod( "LandingPageService4Title" )==''){echo 'Market Research';}?></a>
              </h4>
              <p class="mt-3"><?php echo get_theme_mod( "LandingPageService4Content","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo." );?>
              </p>
            </div>
          </div>
          <?php } ?>

        </div>
        <!-- //feature-left-->
      </div>
      <div class="col-lg-5 features-rightthny mt-lg-0 mt-5 pl-lg-5">
        <h3 class="hny-title mb-4">
          <?php echo get_theme_mod( "LandingPageServicesTitle" );if(get_theme_mod( "LandingPageServicesTitle" )==''){echo 'We found our creative space that is open for you.';}?>
        </h3>
        <div class="separatorhny"></div>
        <p><?php echo get_theme_mod( "LandingPageServicesContent","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
          ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet
          elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init
          dolor sit, amet elit. Dolor ipsum non velit, culpa!" );?></p>
        <a class="btn btn-primary btn-style mt-md-5 mt-4"
          href="<?php echo get_theme_mod( "LandingPageServicesButtonUrl","about#url" ); ?>"><?php echo get_theme_mod( "LandingPageServicesButtonTxt" );if(get_theme_mod( "LandingPageServicesButtonTxt" )==''){echo 'Read More';}?></a>
      </div>

    </div>
  </div>
</section>
<?php } ?>

<section>
  <?php echo get_theme_mod( "LandingPageServicesBottomArea","" );?>
</section>

<!-- //LandingPage Services -->





<!--  LandingPage Content with Photo Section -->

<section>
  <?php echo get_theme_mod( "LandingPageCWPSectionTopArea","" );?>
</section>

<?php $LandingPageCWPSectionRequir = get_theme_mod( "LandingPageCWPSectionRequired","1")?>
<?php if( $LandingPageCWPSectionRequir==1 ){?>

<section class="w3l-servicesblock py-5" id="about">
  <div class="container py-lg-5 py-md-3 LandingPageCWP">

    <div class="row">

      <div class="col-lg-3 col-6 left-wthree-img">
        <img
          src="<?php if(get_theme_mod('LandingPageCWPImage1')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageCWPImage1') );} if(wp_get_attachment_url(get_theme_mod('LandingPageCWPImage1'))=='') { echo  get_template_directory_uri()."/assets/images/s1.jpg";  }?>"
          alt="" class="img-fluid radius-image">
      </div>
      <div class="col-lg-3 col-6 left-wthree-img">
        <img
          src="<?php if(get_theme_mod('LandingPageCWPImage1')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageCWPImage1') );} if(wp_get_attachment_url(get_theme_mod('LandingPageCWPImage1'))=='') { echo  get_template_directory_uri()."/assets/images/s2.jpg";  }?>"
          alt="" class="img-fluid radius-image">
      </div>

      <div class="col-lg-6 about-right-faq align-self mt-lg-0 mt-sm-5 mt-4 pl-lg-5">
        <h3 class="hny-title mb-4">
          <?php echo get_theme_mod( "LandingPageCWPTitle" );if(get_theme_mod( "LandingPageCWPTitle" )==''){echo 'We Work for Your Incredible Success';}?>
        </h3>
        <div class="separatorhny"></div>
        <p class=""><?php echo get_theme_mod( "LandingPageCWPContent","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
          ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet." );?></p>

        <div class="two-grids mt-md-0 mt-md-5 mt-4">

          <?php $LandingPageCWPFeature1Requir = get_theme_mod( "LandingPageCWPFeature1Required","1")?>
          <?php if( $LandingPageCWPFeature1Requir==1 ){?>
          <div class="grids_info">
            <h4><?php echo get_theme_mod( "LandingPageCWPF1Title" );if(get_theme_mod( "LandingPageCWPF1Title" )==''){echo 'Our Mission';}?></h4>
            <p class=""><?php echo get_theme_mod( "LandingPageCWPFeature1Content","Pellen tesque libero ut justo,
              ultrices in ligula." );?></p>
          </div>
          <?php } ?>

          <?php $LandingPageCWPFeature2Requir = get_theme_mod( "LandingPageCWPFeature2Required","1")?>
          <?php if( $LandingPageCWPFeature2Requir==1 ){?>
          <div class="grids_info">
            <h4><?php echo get_theme_mod( "LandingPageCWPF2Title" );if(get_theme_mod( "LandingPageCWPF2Title" )==''){echo 'Our Vision';}?></h4>
            <p class=""><?php echo get_theme_mod( "LandingPageCWPFeature2Content","Pellen tesque libero ut justo,
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
  <?php echo get_theme_mod( "LandingPageCWPSectionBottomArea","" );?>
</section>

<!--  //LandingPage Content with Photo Section -->






<!--  LandingPage stats section -->

<section>
  <?php echo get_theme_mod( "LandingPageStatsTopArea","" );?>
</section>

<?php $LandingPageStatsRequir = get_theme_mod( "LandingPageStatsRequired","1")?>
<?php if( $LandingPageStatsRequir==1 ){?>


<section class="w3_stats py-5" id="stats">
  <div class="container pb-md-4 LandingPageStats">
    <div class="w3-stats">

      <div class="row justify-content-center">

        <?php $LandingPageStatsGrid1Requir = get_theme_mod( "LandingPageStatsGrid1Required","1")?>
        <?php if( $LandingPageStatsGrid1Requir==1 ){?>
        <div class="col-md-3 col-6">
          <div class="counter">
            <span
              class="<?php echo get_theme_mod( "LandingPageStats1Icon" ); if(get_theme_mod( "LandingPageStats1Icon" )==''){echo 'fa fa-clone';}?>"></span>
            <div class="timer count-title count-number mt-3"
              data-to="<?php echo get_theme_mod( "LandingPageStats1Number" );if(get_theme_mod( "LandingPageStats1Number" )==''){echo '15100';}?>"
              data-speed="1500"></div>
            <p class="count-text">
              <?php echo get_theme_mod( "LandingPageStats1Desc" ); if(get_theme_mod( "LandingPageStats1Desc" )==''){echo 'Total Projects';}?></p>
          </div>
        </div>
        <?php } ?>

        <?php $LandingPageStatsGrid2Requir = get_theme_mod( "LandingPageStatsGrid2Required","1")?>
        <?php if( $LandingPageStatsGrid2Requir==1 ){?>
        <div class="col-md-3 col-6">
          <div class="counter">
            <span
              class="<?php echo get_theme_mod( "LandingPageStats2Icon" ); if(get_theme_mod( "LandingPageStats2Icon" )==''){echo 'fa fa-video-camera';}?>"></span>
            <div class="timer count-title count-number mt-3"
              data-to="<?php echo get_theme_mod( "LandingPageStats2Number" );if(get_theme_mod( "LandingPageStats2Number" )==''){echo '19256';}?>"
              data-speed="1500"></div>
            <p class="count-text">
              <?php echo get_theme_mod( "LandingPageStats2Desc" ); if(get_theme_mod( "LandingPageStats2Desc" )==''){echo 'Conferences';}?></p>
          </div>
        </div>
        <?php } ?>

        <?php $LandingPageStatsGrid3Requir = get_theme_mod( "LandingPageStatsGrid3Required","1")?>
        <?php if( $LandingPageStatsGrid3Requir==1 ){?>
        <div class="col-md-3 col-6">
          <div class="counter">
            <span
              class="<?php echo get_theme_mod( "LandingPageStats3Icon" ); if(get_theme_mod( "LandingPageStats3Icon" )==''){echo 'fa fa-smile-o';}?>"></span>
            <div class="timer count-title count-number mt-3"
              data-to="<?php echo get_theme_mod( "LandingPageStats3Number" );if(get_theme_mod( "LandingPageStats3Number" )==''){echo '12100';}?>"
              data-speed="1500"></div>
            <p class="count-text">
              <?php echo get_theme_mod( "LandingPageStats3Desc" ); if(get_theme_mod( "LandingPageStats3Desc" )==''){echo 'Happy Clients';}?></p>
          </div>
        </div>
        <?php } ?>

        <?php $LandingPageStatsGrid4Requir = get_theme_mod( "LandingPageStatsGrid4Required","1")?>
        <?php if( $LandingPageStatsGrid4Requir==1 ){?>
        <div class="col-md-3 col-6">
          <div class="counter">
            <span
              class="<?php echo get_theme_mod( "LandingPageStats4Icon" ); if(get_theme_mod( "LandingPageStats4Icon" )==''){echo 'fa fa-users';}?>"></span>
            <div class="timer count-title count-number mt-3"
              data-to="<?php echo get_theme_mod( "LandingPageStats4Number" );if(get_theme_mod( "LandingPageStats4Number" )==''){echo '2560';}?>"
              data-speed="1500"></div>
            <p class="count-text"><?php echo get_theme_mod( "LandingPageStats4Desc" ); if(get_theme_mod( "LandingPageStats4Desc" )==''){echo 'Satisfied
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
  <?php echo get_theme_mod( "LandingPageStatsBottomArea","" );?>
</section>

<!--  //LandingPage stats section -->






<!-- LandingPage team -->

<section>
    <?php echo get_theme_mod( "LandingPageTeamTopArea","" );?>
</section>

<?php $LandingPageTeamStatus = get_theme_mod( "LandingPageTeamRequired","1")?>
<?php if( $LandingPageTeamStatus==1 ){?>
<section class="w3l-team-main" id="team">
    <div class="team py-5">
        <div class="container py-lg-5 LandingPageTeam">
            <h6 class="sub-titlehny text-center">
                <?php echo get_theme_mod( "LandingPageTeamTitle1" );if(get_theme_mod( "LandingPageTeamTitle1" )==''){echo 'Strongest Team';}?></h6>
            <h3 class="hny-title mb-md-5 mb-5 text-center">
                <?php echo get_theme_mod( "LandingPageTeamTitle2" );if(get_theme_mod( "LandingPageTeamTitle2" )==''){echo 'Meet our team';}?></h3>

            <div class="row team-row mt-md-5 mt-4 justify-content-center">

                <?php $LandingPageTeam1Status = get_theme_mod( "LandingPageTeam1Required","1")?>
                <?php if( $LandingPageTeam1Status==1 ){?>
                <div class="col-lg-3 col-6 team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="<?php if(get_theme_mod('LandingPageTeam1Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageTeam1Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageTeam1Image'))=='') { echo  get_template_directory_uri()."/assets/images/team1.jpg";  }?>"
                                alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">

                                        <?php $LandingPageTeam1SFStatus = get_theme_mod( "LandingPageTeam1SocialFacebook","1")?>
                                        <?php if( $LandingPageTeam1SFStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "LandingPageTeam1SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                        <?php }?>

                                        <?php $LandingPageTeam1STStatus = get_theme_mod( "LandingPageTeam1SocialTwitter","1")?>
                                        <?php if( $LandingPageTeam1STStatus==1 ){?>
                                        <a href="<?php echo get_theme_mod( "LandingPageTeam1SocialTwitterURL","https://twitter.com/W3layouts" ); ?>">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <?php }?>

                                        <?php $LandingPageTeam1SIStatus = get_theme_mod( "LandingPageTeam1SocialInstagram","1")?>
                                        <?php if( $LandingPageTeam1SIStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "LandingPageTeam1SocialInstagramURL","https://www.instagram.com/w3layouts_/" ); ?>">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                        <?php }?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo get_theme_mod( "LandingPageTeam1TitleUrl","#url" ); ?>"
                            class="team-title"><?php echo get_theme_mod( "LandingPageTeam1Title" );if(get_theme_mod( "LandingPageTeam1Title" )==''){echo 'Daniel jacobs';}?></a>
                        <p><?php echo get_theme_mod( "LandingPageTeam1Designation" );if(get_theme_mod( "LandingPageTeam1Designation" )==''){echo 'Markrting Officer';}?>
                        </p>
                    </div>
                </div>
                <!-- end team member -->
                <?php }?>

                <?php $LandingPageTeam2Status = get_theme_mod( "LandingPageTeam2Required","1")?>
                <?php if( $LandingPageTeam2Status==1 ){?>
                <div class="col-lg-3 col-6 team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="<?php if(get_theme_mod('LandingPageTeam2Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageTeam2Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageTeam2Image'))=='') { echo  get_template_directory_uri()."/assets/images/team3.jpg";  }?>"
                                alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <?php $LandingPageTeam2SFStatus = get_theme_mod( "LandingPageTeam2SocialFacebook","1")?>
                                        <?php if( $LandingPageTeam2SFStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "LandingPageTeam2SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                        <?php }?>

                                        <?php $LandingPageTeam2STStatus = get_theme_mod( "LandingPageTeam2SocialTwitter","1")?>
                                        <?php if( $LandingPageTeam2STStatus==1 ){?>
                                        <a href="<?php echo get_theme_mod( "LandingPageTeam2SocialTwitterURL","https://twitter.com/W3layouts" ); ?>">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <?php }?>

                                        <?php $LandingPageTeam2SIStatus = get_theme_mod( "LandingPageTeam2SocialInstagram","1")?>
                                        <?php if( $LandingPageTeam2SIStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "LandingPageTeam2SocialInstagramURL","https://www.instagram.com/w3layouts_/" ); ?>">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo get_theme_mod( "LandingPageTeam2TitleUrl","#url" ); ?>"
                            class="team-title"><?php echo get_theme_mod( "LandingPageTeam2Title" );if(get_theme_mod( "LandingPageTeam2Title" )==''){echo 'Claire Daniel';}?></a>
                        <p><?php echo get_theme_mod( "LandingPageTeam2Designation" );if(get_theme_mod( "LandingPageTeam2Designation" )==''){echo 'Customer Officer';}?>
                        </p>
                    </div>
                </div>
                <!-- end team member -->
                <?php }?>

                <?php $LandingPageTeam3Status = get_theme_mod( "LandingPageTeam3Required","1")?>
                <?php if( $LandingPageTeam3Status==1 ){?>
                <div class="col-lg-3 col-6 team-wrap mt-lg-0 mt-5">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="<?php if(get_theme_mod('LandingPageTeam3Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageTeam3Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageTeam3Image'))=='') { echo  get_template_directory_uri()."/assets/images/team2.jpg";  }?>"
                                alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <?php $LandingPageTeam3SFStatus = get_theme_mod( "LandingPageTeam3SocialFacebook","1")?>
                                        <?php if( $LandingPageTeam3SFStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "LandingPageTeam3SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                        <?php }?>

                                        <?php $LandingPageTeam3STStatus = get_theme_mod( "LandingPageTeam3SocialTwitter","1")?>
                                        <?php if( $LandingPageTeam3STStatus==1 ){?>
                                        <a href="<?php echo get_theme_mod( "LandingPageTeam3SocialTwitterURL","https://twitter.com/W3layouts" ); ?>">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <?php }?>

                                        <?php $LandingPageTeam3SIStatus = get_theme_mod( "LandingPageTeam3SocialInstagram","1")?>
                                        <?php if( $LandingPageTeam3SIStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "LandingPageTeam3SocialInstagramURL","https://www.instagram.com/w3layouts_/" ); ?>">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo get_theme_mod( "LandingPageTeam3TitleUrl","#url" ); ?>"
                            class="team-title"><?php echo get_theme_mod( "LandingPageTeam3Title" );if(get_theme_mod( "LandingPageTeam3Title" )==''){echo 'Daniel Hunt';}?></a>
                        <p> <?php echo get_theme_mod( "LandingPageTeam3Designation" );if(get_theme_mod( "LandingPageTeam3Designation" )==''){echo 'Excutive Officer';}?>
                        </p>
                    </div>
                </div>
                <!-- end team member -->
                <?php }?>

                <?php $LandingPageTeam4Status = get_theme_mod( "LandingPageTeam4Required","1")?>
                <?php if( $LandingPageTeam4Status==1 ){?>
                <div class="col-lg-3 col-6 team-wrap mt-lg-0 mt-5">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="<?php if(get_theme_mod('LandingPageTeam4Image')!=''){ echo wp_get_attachment_url( get_theme_mod('LandingPageTeam4Image') );} if(wp_get_attachment_url(get_theme_mod('LandingPageTeam4Image'))=='') { echo  get_template_directory_uri()."/assets/images/team4.jpg";  }?>"
                                alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <?php $LandingPageTeam4SFStatus = get_theme_mod( "LandingPageTeam4SocialFacebook","1")?>
                                        <?php if( $LandingPageTeam4SFStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "LandingPageTeam4SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                        <?php }?>

                                        <?php $LandingPageTeam4STStatus = get_theme_mod( "LandingPageTeam4SocialTwitter","1")?>
                                        <?php if( $LandingPageTeam4STStatus==1 ){?>
                                        <a href="<?php echo get_theme_mod( "LandingPageTeam4SocialTwitterURL","https://twitter.com/W3layouts" ); ?>">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <?php }?>

                                        <?php $LandingPageTeam4SIStatus = get_theme_mod( "LandingPageTeam4SocialInstagram","1")?>
                                        <?php if( $LandingPageTeam4SIStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "LandingPageTeam4SocialInstagramURL","https://www.instagram.com/w3layouts_/" ); ?>">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo get_theme_mod( "LandingPageTeam4TitleUrl","#url" ); ?>" class="team-title"><?php echo get_theme_mod( "LandingPageTeam4Title" );if(get_theme_mod( "LandingPageTeam4Title" )==''){echo 'Kelli Grant';}?></a>
                        <p> <?php echo get_theme_mod( "LandingPageTeam4Designation" );if(get_theme_mod( "LandingPageTeam4Designation" )==''){echo 'Chef
                            Excutive Officer';}?></p>
                    </div>
                </div>
                <!-- end team member -->
                <?php }?>

            </div>
        </div>
</section>
<?php }?>

<section>
    <?php echo get_theme_mod( "LandingPageTeamBottomArea","" );?>
</section>

<!-- LandingPage team -->





<!-- LandingPage cover -->

<section>
  <?php echo get_theme_mod( "LandingPageCoverTopArea","" );?>
</section>

<?php $LandingPageCoverRequir = get_theme_mod( "LandingPageCoverRequired","1")?>
<?php if( $LandingPageCoverRequir==1 ){?>
<div class="middle py-5">
  <style>
    .middle {
      background: url(<?php if(get_theme_mod('LandingPageCoverBgImage') !='') {
        echo wp_get_attachment_url(get_theme_mod('LandingPageCoverBgImage'));
      }

      if(wp_get_attachment_url(get_theme_mod('LandingPageCoverBgImage'))=='') {
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
  <div class="container py-md-4 LandingPageCover">
    <div class="welcome-left text-left py-lg-4">
      <h3 class="hny-title mb-4"><?php echo get_theme_mod( "LandingPageCoverTitle1" );if(get_theme_mod( "LandingPageCoverTitle1" )==''){echo "Strategy is at the
        Heart of What We Do.";}?></h3>
      <div class="separatorhny"></div>
      <p class="pr-lg-5 mr-lg-5"><?php echo get_theme_mod( "LandingPageCoverContent" ); if(get_theme_mod( "LandingPageCoverContent" )==''){echo 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
        ligula. Semper at
        tempufddfel. Lorem ipsum dolor sit amet elit.';}?></p>
      <a href="<?php echo get_theme_mod( "LandingPageCoverReadMoreButtonUrl","about#url" ); ?>"
        class="btn btn-style btn-white mt-sm-5 mt-4 mr-2"><?php echo get_theme_mod( "LandingPageCoverReadMoreButtontxt",'Read More' ); ?></a>
      <a href="<?php echo get_theme_mod( "LandingPageCoverContactButtonUrl","contact#url" ); ?>"
        class="btn btn-style btn-primary mt-sm-5 mt-4"><?php echo get_theme_mod( "LandingPageCoverContactButtontxt",'Contact Us' ); ?></a>
    </div>
  </div>
</div>
<?php }?>

<section>
  <?php echo get_theme_mod( "LandingPageCoverBottomArea","" );?>
</section>

<!-- //LandingPage cover -->





<!-- LandingPage blog-posts-->

<section>
  <?php echo get_theme_mod( "LandingPageBlogGridsTopArea","" );?>
</section>

<?php $LandingPageBlogGridsRequir = get_theme_mod( "LandingPageBlogGridsRequired","1")?>
<?php if( $LandingPageBlogGridsRequir==1 ){?>
<div class="w3l-homeblog py-5" id="homeblog">
  <div class="container py-lg-5 py-md-4 LandingPageBlogGrids">
    <h6 class="sub-titlehny text-center">
      <?php echo get_theme_mod( "LandingPageBlogGridsTitle1" ); if(get_theme_mod( "LandingPageBlogGridsTitle1" )==''){echo 'Blog Posts';}?></h6>
    <h3 class="hny-title mb-md-5 mb-4 pb-md-0 pb-2 text-center">
      <?php echo get_theme_mod( "LandingPageBlogGridsTitle2" ); if(get_theme_mod( "LandingPageBlogGridsTitle2" )==''){echo 'Take Charge Of Your Life';}?>
    </h3>


    <?php global $wp_customize;
                    if ( isset( $wp_customize ) ) {
                      ?>
    <!-- <img src="/wp-content/themes/learncoach-w3layouts/assets/images/BlogSection.png"> -->
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

      <?php $LandingPageBlogGridsReadMoreBtnRequir = get_theme_mod( "LandingPageBlogGridsReadMoreBtnRequired","1")?>
      <?php if( $LandingPageBlogGridsReadMoreBtnRequir==1 ){?>
      <div class="readhny-btm text-center mx-auto mt-md-4">
        <a class="btn btn-primary btn-style mt-md-5 mt-4"
          href="<?php echo get_theme_mod( "LandingPageBlogGridsButtonUrl","/blog" ); ?>"><?php echo get_theme_mod( "LandingPageBlogGridsButtontxt",'Read More' ); ?></a>
      </div>
      <?php } ?>

    </div>
  </div>
</div>
<?php } ?>

<section>
  <?php echo get_theme_mod( "LandingPageBlogGridsBottomArea","" );?>
</section>

<!-- // LandingPage blog-posts-->





<!-- LandingPage cover Section 2 -->

<section>
    <?php echo get_theme_mod( "LandingPageCover2TopArea","" );?>
</section>

<?php $LandingPageCover2Requir = get_theme_mod( "LandingPageCover2Required","1")?>
<?php if( $LandingPageCover2Requir==1 ){?>
<section class="w3l-cover-section" id="subscribe">
    <style>
        .w3l-cover-section {
            background: url(<?php if(get_theme_mod('LandingPageCover2BgImage') !='') {
                echo wp_get_attachment_url(get_theme_mod('LandingPageCover2BgImage'));
            }

            if(wp_get_attachment_url(get_theme_mod('LandingPageCover2BgImage'))=='') {
                echo get_template_directory_uri()."/assets/images/banner1.jpg";
            }

            ?>);
            background-repeat: no-repeat;
            background-position: center;
            -ms-background-size: cover;
            background-size: cover;
            z-index: 0;
            position: relative;
        }
    </style>
    <div class="container py-5 LandingPageCover2">
        <div class="row subscription-grids py-5">
            <div class="col-lg-7 subscription-left forms-25-info">
                <div class="header-title">
                    <h3 class="p-0">
                        <?php echo get_theme_mod( "LandingPageCover2Title" );if(get_theme_mod( "LandingPageCover2Title" )==''){echo "Start Your Journey to Better Business";}?>
                    </h3>
                </div>
            </div>
            <div class="col-lg-5 subscription-right pl-lg-5 mt-lg-0 mt-4 text-lg-right">
                <a href="<?php echo get_theme_mod( "LandingPageCover2GetStartedButtonUrl","about#url" ); ?>"
                    class="btn btn-style btn-white mr-lg-4 mr-sm-3">
                    <?php echo get_theme_mod( "LandingPageCover2GetStartedButtontxt",'Get Started Today' ); ?></a>
            </div>
        </div>
</section>
<?php }?>

<section>
    <?php echo get_theme_mod( "LandingPageCover2BottomArea","" );?>
</section>

<!-- //LandingPage cover Section 2 -->





<!-- LandingPage Testimonials -->

<section>
  <?php echo get_theme_mod( "LandingPageTestimonialsTopArea","" );?>
</section>

<?php $LandingPageTestimonialsStatus = get_theme_mod( "LandingPageTestimonialsRequired","1")?>
<?php if( $LandingPageTestimonialsStatus==1 ){?>

<section class="w3l-clients-1" id="testimonials">
  <!-- /grids -->
  <div class="cusrtomer-layout py-5">
    <div class="container py-lg-5 py-md-4 LandingPageTestimonials">
      <div class="heading align-self text-center">
        <h6 class="sub-titlehny">
          <?php echo get_theme_mod( "LandingPageTestimonialsTitle1" );if(get_theme_mod( "LandingPageTestimonialsTitle1" )==''){echo 'Testimonials';}?></h6>
        <h3 class="hny-title mb-md-5 mb-4">
          <?php echo get_theme_mod( "LandingPageTestimonialsTitle2" );if(get_theme_mod( "LandingPageTestimonialsTitle2" )==''){echo 'What People Say';}?>
        </h3>
      </div>
      <!-- /grids -->
      <div class="testimonial-row">
        <div id="owl-demo1" class="owl-two owl-carousel owl-theme mb-md-3 mb-sm-5 mb-4">

          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q><?php echo get_theme_mod( "LandingPageTestimonialsMessage1" ); if(get_theme_mod( "LandingPageTestimonialsMessage1" )==''){echo 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                    laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                    facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                    voluptate rem ullam dolore nisi est quasi, doloribus tempora.';}?></q>
                </blockquote>
                <div class="testi-des">
                  <div class="peopl align-self">
                    <h3><?php echo get_theme_mod( "LandingPageTestimonialsClient1Name" );if(get_theme_mod( "LandingPageTestimonialsClient1Name" )==''){echo 'Gloria Parker';}?></h3>
                    <p class="indentity"><?php echo get_theme_mod( "LandingPageTestimonialsClient1Designation" );if(get_theme_mod( "LandingPageTestimonialsClient1Designation" )==''){echo 'Client Of Company';}?> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q><?php echo get_theme_mod( "LandingPageTestimonialsMessage2" ); if(get_theme_mod( "LandingPageTestimonialsMessage2" )==''){echo 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                    laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                    facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                    voluptate rem ullam dolore nisi est quasi, doloribus tempora.';}?></q>
                </blockquote>
                <div class="testi-des">
                  <div class="peopl align-self">
                    <h3><?php echo get_theme_mod( "LandingPageTestimonialsClient2Name" );if(get_theme_mod( "LandingPageTestimonialsClient2Name" )==''){echo 'Tommy sakura';}?></h3>
                    <p class="indentity"><?php echo get_theme_mod( "LandingPageTestimonialsClient2Designation" );if(get_theme_mod( "LandingPageTestimonialsClient2Designation" )==''){echo 'Client Of Company';}?> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q><?php echo get_theme_mod( "LandingPageTestimonialsMessage3" ); if(get_theme_mod( "LandingPageTestimonialsMessage3" )==''){echo 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                    laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                    facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                    voluptate rem ullam dolore nisi est quasi, doloribus tempora.';}?></q>
                </blockquote>
                <div class="testi-des">
                  <div class="peopl align-self">
                    <h3><?php echo get_theme_mod( "LandingPageTestimonialsClient3Name" );if(get_theme_mod( "LandingPageTestimonialsClient3Name" )==''){echo 'Bruce Bailey';}?> </h3>
                    <p class="indentity"><?php echo get_theme_mod( "LandingPageTestimonialsClient3Designation" );if(get_theme_mod( "LandingPageTestimonialsClient3Designation" )==''){echo 'Client Of Company';}?> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q><?php echo get_theme_mod( "LandingPageTestimonialsMessage4" ); if(get_theme_mod( "LandingPageTestimonialsMessage4" )==''){echo 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                    laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                    facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                    voluptate rem ullam dolore nisi est quasi, doloribus tempora.';}?></q>
                </blockquote>
                <div class="testi-des">
                  <div class="peopl align-self">
                    <h3><?php echo get_theme_mod( "LandingPageTestimonialsClient4Name" );if(get_theme_mod( "LandingPageTestimonialsClient4Name" )==''){echo 'Ruth Edwards';}?></h3>
                    <p class="indentity"><?php echo get_theme_mod( "LandingPageTestimonialsClient4Designation" );if(get_theme_mod( "LandingPageTestimonialsClient4Designation" )==''){echo 'Client Of Company';}?> </p>
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
  <?php echo get_theme_mod( "LandingPageTestimonialsBottomArea","" );?>
</section>

<!-- //LandingPage Testimonials -->



<!-- Contact section -->

<section>
  <?php echo get_theme_mod( "LandingPageContactTopArea","" );?>
</section>

<?php $LPContactStatus = get_theme_mod( "LandingPageContactRequired","1")?>
<?php if( $LPContactStatus==1 ){?>
<section class="w3l-contact-1 py-5" id="contact">
  <div class="contacts-9 py-lg-5 py-md-4">
    <div class="container LPContactSection">
      <div class="row contact-view mb-5 pb-lg-5 justify-content-center">

        <?php $LPContactDetailsStatus = get_theme_mod( "LPContactDetailsRequired","1")?>
        <?php if( $LPContactDetailsStatus==1 ){?>
        <div class="col-lg-6 cont-details">

          <div class="contactct-fm-text text-left mb-md-5 mb-4">
            <h4 class="sub-titlehny">
              <?php echo get_theme_mod( "LPContactDetailsTitle1" ); if(get_theme_mod( "LPContactDetailsTitle1" )==''){echo 'Get in touch';}?></h4>
            <h3 class="hny-title mb-4">
              <?php echo get_theme_mod( "LPContactDetailsTitle2" ); if(get_theme_mod( "LPContactDetailsTitle2" )==''){echo 'Find Us';}?></h3>
            <div class="separatorhny"></div>
            <p class="mb-sm-5 mb-4"><?php echo get_theme_mod( "LPContactDetailsContent" ); if(get_theme_mod( "LPContactDetailsContent" )==''){echo 'Start working with Us that can provide everything you need to generate awareness, drive traffic, connect. <br> We guarantee that you’ll be able to have any issue resolved within 24
            hours.';}?></p>
          </div>

          <?php $LPContactNumberStatus = get_theme_mod( "LandingPageContactNumberRequired","1")?>
          <?php if( $LPContactNumberStatus==1 ){?>
          <div class="cont-top">
            <div class="cont-left text-center">
              <span class="fa fa-phone"></span>
            </div>
            <div class="cont-right">
              <h6><?php echo get_theme_mod( "LPContactPhoneTitle" );if(get_theme_mod( "LPContactPhoneTitle" )==''){echo 'Phone number';}?></h6>
              <p><a
                  href="<?php echo get_theme_mod( "LPContactNumberUrl","tel:+(21) 255 088 4943" ); ?>"><?php echo get_theme_mod( "LPContactNumber" );if(get_theme_mod( "LPContactNumber" )==''){echo '+(21) 255 088 4943';}?></a>
              </p>
            </div>
          </div>
          <?php }?>

          <?php $LPContactEmailStatus = get_theme_mod( "LandingPageContactEmailRequired","1")?>
          <?php if( $LPContactEmailStatus==1 ){?>
          <div class="cont-top margin-up">
            <div class="cont-left text-center">
              <span class="fa fa-envelope-o"></span>
            </div>
            <div class="cont-right">
              <h6><?php echo get_theme_mod( "LPContactEmailTitle" );if(get_theme_mod( "LPContactEmailTitle" )==''){echo 'Send Email';}?></h6>
              <p><a href="<?php echo get_theme_mod( "LPContactMailUrl","mailto:advisory@mail.com" ); ?>"
                  class="mail"><?php echo get_theme_mod( "LPContactMailtxt" );if(get_theme_mod( "LPContactMailtxt" )==''){echo 'advisory@mail.com';}?></a>
              </p>
            </div>
          </div>
          <?php }?>

          <?php $LPContactAddressStatus = get_theme_mod( "LandingPageContactAddressRequired","1")?>
          <?php if( $LPContactAddressStatus==1 ){?>
          <div class="cont-top margin-up">
            <div class="cont-left text-center">
              <span class="fa fa-map-marker"></span>
            </div>
            <div class="cont-right">
              <h6><?php echo get_theme_mod( "LPContactAddressTitle" );if(get_theme_mod( "LPContactAddressTitle" )==''){echo 'Office Address';}?></h6>
              <p class="pr-lg-5"><?php echo get_theme_mod( "LPContactAddress","Address here, 434 Trainer Honey street, London, UK - 62617." );?></p>
            </div>
          </div>
          <?php }?>

        </div>
        <?php }?>

        <?php $LPContactFormStatus = get_theme_mod( "LandingPageContactFormRequired","1")?>
        <?php if( $LPContactFormStatus==1 ){?>
        <div class="col-lg-6 mt-lg-0 mt-5 map-content-9 LPContactForm">
<?php
///Contact US email code Starts here
$LPContactToEmail=get_theme_mod( "LPContactToEmail", "w3lSender" );
$LPContactFromEmail=$_REQUEST[get_theme_mod( "LandingPageContactFormEmail", "w3lSender" )];
$LPContactFromName=$_REQUEST[get_theme_mod( "LandingPageContactFormName", "w3lName" )];
$LPContactFromSubject=$_REQUEST[get_theme_mod( "LandingPageContactFormSubject", "w3lSubject" )];
$LPContactFromMessage=$_REQUEST[get_theme_mod( "LandingPageContactFormMessage", "w3lMessage" )];
if($LPContactFromEmail!='' && $LPContactToEmail!=''){
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
      <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;"> '.$LPContactFromName.'</td>

    </tr>
    <tr>
      <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Email : </td>
      <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;"> '.$LPContactFromEmail.'</td>
    </tr>

    <tr>
      <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Message : </td>
      <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;"> '.$LPContactFromMessage.'</td>
    </tr>
  </tbody>
</table>';
add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));

wp_mail( $LPLPContactToEmail, $LPContactFromSubject, $LPContactEmailMessage );

?>

<h3 class="hny-title mx-0 mb-4 text-left text-success">We got your details. We will contact you soon</h3>

<?php
///Contact US email code Ends here

}

?>

          <div class="contactct-fm map-content-9 pl-lg-4">

            <div class="contactct-fm-text text-left">
              <h4 class="sub-titlehny">
                <?php echo get_theme_mod( "LPContactFormTitle1" ); if(get_theme_mod( "LPContactFormTitle1" )==''){echo "Contact Us";}?></h4>
              <h3 class="hny-title mx-0 mb-4 text-left">
                <?php echo get_theme_mod( "LPContactFormTitle2" ); if(get_theme_mod( "LPContactFormTitle2" )==''){echo "Fill out the form.";}?></h3>
              <div class="separatorhny"></div>
              <p class="mb-sm-5 mb-4"><?php echo get_theme_mod( "LPContactFormContent" ); if(get_theme_mod( "LPContactFormContent" )==''){echo 'Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                consectetur adipisicing.';}?></p>
            </div>

            <form action="<?php echo get_theme_mod( "LandingPageContactFormURL", " " );?>" method="post">
              <div class="twice-two">
                <input type="text" class="form-control" name="<?php echo get_theme_mod( "LandingPageContactFormName", "w3lName" );?>" id="w3lName"
                  placeholder="<?php echo get_theme_mod( "LandingPageContactFormNameplaceholder", "Name" );?>" required="">

                <input type="email" class="form-control" name="<?php echo get_theme_mod( "LandingPageContactFormEmail", "w3lSender" );?>" id="w3lSender"
                  placeholder="<?php echo get_theme_mod( "LandingPageContactFormEmailplaceholder", "Email" );?>" required="">


              </div>
              <div class="twice">
                <input type="text" class="form-control" name="<?php echo get_theme_mod( "LandingPageContactFormSubject", "w3lSubject" );?>" id="w3lSubject"
                  placeholder="<?php echo get_theme_mod( "LandingPageContactFormSubjectplaceholder", "Subject" );?>" required="">

              </div>
              <textarea name="<?php echo get_theme_mod( "LandingPageContactFormMessage", "w3lMessage" );?>" class="form-control" id="w3lMessage"
                placeholder="<?php echo get_theme_mod( "LandingPageContactFormMessageplaceholder", "Message" );?>" required=""></textarea>

              <div class="text-right">
                <button type="submit"
                  class="btn btn-primary btn-style mt-4"><?php echo get_theme_mod( "LandingPageContactFormBtn", "Send Message" );?></button>
              </div>
            </form>

          </div>
        </div>
        <?php }?>
      </div>


      <!-- Contact Map section -->

      <section>
        <?php echo get_theme_mod( "LandingPageContactMapTopArea","" );?>
      </section>

      <?php $ContactMapStatus = get_theme_mod( "LandingPageContactMapRequired","1")?>
      <?php if( $ContactMapStatus==1 ){?>
      <div class="map-iframe LandingPageContactMap">
        <iframe
          src="<?php echo get_theme_mod( "LandingPageContactMapURL", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" );?>"
          width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
      </div>
      <?php }?>

      <section>
        <?php echo get_theme_mod( "LandingPageContactMapBottomArea","" );?>
      </section>

      <!-- //Contact Map section -->


    </div>
</section>
<?php }?>
<!-- //contact block -->

<section>
  <?php echo get_theme_mod( "LandingPageContactBottomArea","" );?>
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