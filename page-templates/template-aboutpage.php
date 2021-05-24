<?php
/**
 * Template Name: About Page
 */
?>
<?php get_header(); ?>


<!-- about breadcrumb -->
<div class="inner-banner text-center pt-md-5">
  <div class="AboutPageBannerImage pt-md-5">
    <style>
        .inner-banner {
            background: url(<?php if(get_theme_mod('AboutPageBannerBgImage') !='') {
                echo wp_get_attachment_url(get_theme_mod('AboutPageBannerBgImage'));
            }

            if(wp_get_attachment_url(get_theme_mod('AboutPageBannerBgImage'))=='') {
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
    <section class="w3l-breadcrumb text-center">
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
<!-- //about breadcrumb -->





<!-- AboutPage about section -->

<section>
    <?php echo get_theme_mod( "AboutPageAboutTopArea","" );?>
</section>

<?php $AboutPageAboutRequir = get_theme_mod( "AboutPageAboutRequired","1")?>
<?php if( $AboutPageAboutRequir==1 ){?>
<section class="w3l-index3" id="about1">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3 AboutPageAbout">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-md-5 mb-4">
                    <img src="<?php if(get_theme_mod('AboutPageAboutImage')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageAboutImage') );} if(wp_get_attachment_url(get_theme_mod('AboutPageAboutImage'))=='') { echo  get_template_directory_uri()."/assets/images/ab1.jpg";  }?>"
                        alt="" class="radius-image-full img-fluid">
                </div>
                <div class="col-lg-6 pl-lg-5 ">
                    <h3 class="sub-titlehny">
                        <?php echo get_theme_mod( "AboutPageAboutTitle1" );if(get_theme_mod( "AboutPageAboutTitle1" )==''){echo 'About Us';}?></h3>
                    <h3 class="hny-title mx-0 mb-4">
                        <?php echo get_theme_mod( "AboutPageAboutTitle2" );if(get_theme_mod( "AboutPageAboutTitle2" )==''){echo 'We Work for Your Incredible Success';}?>
                    </h3>
                    <div class="separatorhny"></div>
                    <p class=""><?php echo get_theme_mod( "AboutPageAboutpara","Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
              consectetur adipisicing.Nunc id ipsum fringilla, gravida felis vitae. lacinia id, sunt in
              culpa quis lacinia. Lorem ipsum dolor, sit amet init elit. Eos,
              debitis. Quas minima sunt natus tempore, maiores aliquid modi felis vitae facere aperiam sequi
              optio lacinia id ipsum." );?></p>
                    <a href="<?php echo get_theme_mod( "AboutPageAboutBtnUrl","#url" ); ?>"
                        class="btn btn-style btn-primary mt-sm-5 mt-4"><?php echo get_theme_mod( "AboutPageAboutBtnTxt" );if(get_theme_mod( "AboutPageAboutBtnTxt" )==''){echo 'Read More';}?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<section>
    <?php echo get_theme_mod( "AboutPageAboutBottomArea","" );?>
</section>

<!-- AboutPage about section -->






<!-- AboutPage Services -->

<section>
    <?php echo get_theme_mod( "AboutPageServicesTopArea","" );?>
</section>

<?php $AboutPageServicesRequir = get_theme_mod( "AboutPageServicesRequired","1")?>
<?php if( $AboutPageServicesRequir==1 ){?>
<section class="w3l-content-4 py-5" id="why">
    <div class="content-4-main py-lg-5 py-md-4">
        <div class="container AboutPageServices">
            <div class="row cont-ser-info-inn mx-lg-0">

                <div class="col-lg-4 cont-ser-right">

                    <?php $AboutPageService1Requir = get_theme_mod( "AboutPageService1Required","1")?>
                    <?php if( $AboutPageService1Requir==1 ){?>
                    <div class="cont-ser-right-grids mb-lg-5 mb-4">
                        <div class="row">
                            <div class="col-2 cont-ser-right-icon">
                                <div class="cont-ser-icon">
                                    <span
                                        class="<?php echo get_theme_mod( "AboutPageService1Icon" ); if(get_theme_mod( "AboutPageService1Icon" )==''){echo 'fa fa-sitemap';}?>"></span>
                                </div>
                            </div>
                            <div class="col-10 cont-ser-right-info">
                                <h6><a
                                        href="<?php echo get_theme_mod( "AboutPageService1Url","#url" ); ?>"><?php echo get_theme_mod( "AboutPageService1Title" );if(get_theme_mod( "AboutPageService1Title" )==''){echo 'Organization';}?></a>
                                </h6>
                                <p><?php echo get_theme_mod( "AboutPageService1Content","Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit." );?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <?php $AboutPageService2Requir = get_theme_mod( "AboutPageService2Required","1")?>
                    <?php if( $AboutPageService2Requir==1 ){?>
                    <div class="cont-ser-right-grids mb-lg-5 mb-4">
                        <div class="row">
                            <div class="col-2 cont-ser-right-icon">
                                <div class="cont-ser-icon">
                                    <span
                                        class="<?php echo get_theme_mod( "AboutPageService2Icon" ); if(get_theme_mod( "AboutPageService2Icon" )==''){echo 'fa fa-bar-chart';}?>"></span>
                                </div>
                            </div>
                            <div class="col-10 cont-ser-right-info">
                                <h6><a
                                        href="<?php echo get_theme_mod( "AboutPageService2Url","#url" ); ?>"><?php echo get_theme_mod( "AboutPageService2Title" );if(get_theme_mod( "AboutPageService2Title" )==''){echo 'Marketing';}?></a>
                                </h6>
                                <p><?php echo get_theme_mod( "AboutPageService2Content","Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit." );?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <?php $AboutPageService3Requir = get_theme_mod( "AboutPageService3Required","1")?>
                    <?php if( $AboutPageService3Requir==1 ){?>
                    <div class="cont-ser-right-grids">
                        <div class="row">
                            <div class="col-2 cont-ser-right-icon">
                                <div class="cont-ser-icon">
                                    <span
                                        class="<?php echo get_theme_mod( "AboutPageService3Icon" ); if(get_theme_mod( "AboutPageService3Icon" )==''){echo 'fa fa-thumbs-o-up';}?>"></span>
                                </div>
                            </div>
                            <div class="col-10 cont-ser-right-info">
                                <h6><a href="<?php echo get_theme_mod( "AboutPageService3Url","#url" ); ?>"><?php echo get_theme_mod( "AboutPageService3Title" );if(get_theme_mod( "AboutPageService3Title" )==''){echo 'Improvement';}?>
                                    </a></h6>
                                <p><?php echo get_theme_mod( "AboutPageService3Content","Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit." );?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>

                <div class="col-lg-4 cont-ser-left px-lg-4 mt-lg-0 mt-5">
                    <img src="<?php if(get_theme_mod('AboutPageServicesImage')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageServicesImage') );} if(wp_get_attachment_url(get_theme_mod('AboutPageServicesImage'))=='') { echo  get_template_directory_uri()."/assets/images/services.jpg";  }?>"
                        class="img-fluid radius-image" alt="">
                </div>

                <div class="col-lg-4 cont-ser-right">

                    <?php $AboutPageService4Requir = get_theme_mod( "AboutPageService4Required","1")?>
                    <?php if( $AboutPageService4Requir==1 ){?>
                    <div class=" cont-ser-right-grids mb-lg-5 mb-4">
                        <div class="row">
                            <div class="col-2 cont-ser-right-icon">
                                <div class="cont-ser-icon">
                                    <span
                                        class="<?php echo get_theme_mod( "AboutPageService4Icon" ); if(get_theme_mod( "AboutPageService4Icon" )==''){echo 'fa fa-object-group';}?>"></span>
                                </div>
                            </div>
                            <div class="col-10 cont-ser-right-info">
                                <h6><a
                                        href="<?php echo get_theme_mod( "AboutPageService4Url","#url" ); ?>"><?php echo get_theme_mod( "AboutPageService4Title" );if(get_theme_mod( "AboutPageService4Title" )==''){echo 'Sustainability';}?></a>
                                </h6>
                                <p><?php echo get_theme_mod( "AboutPageService4Content","Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit." );?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <?php $AboutPageService5Requir = get_theme_mod( "AboutPageService5Required","1")?>
                    <?php if( $AboutPageService5Requir==1 ){?>
                    <div class="cont-ser-right-grids mb-lg-5 mb-4">
                        <div class="row">
                            <div class="col-2 cont-ser-right-icon">
                                <div class="cont-ser-icon">
                                    <span
                                        class="<?php echo get_theme_mod( "AboutPageService5Icon" ); if(get_theme_mod( "AboutPageService5Icon" )==''){echo 'fa fa-bullseye';}?>"></span>
                                </div>
                            </div>
                            <div class="col-10 cont-ser-right-info">
                                <h6><a
                                        href="<?php echo get_theme_mod( "AboutPageService5Url","#url" ); ?>"><?php echo get_theme_mod( "AboutPageService5Title" );if(get_theme_mod( "AboutPageService5Title" )==''){echo 'Customer Strategy';}?></a>
                                </h6>
                                <p><?php echo get_theme_mod( "AboutPageService5Content","Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit." );?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <?php $AboutPageService6Requir = get_theme_mod( "AboutPageService6Required","1")?>
                    <?php if( $AboutPageService6Requir==1 ){?>
                    <div class="cont-ser-right-grids">
                        <div class="row">
                            <div class="col-2 cont-ser-right-icon">
                                <div class="cont-ser-icon">
                                    <span
                                        class="<?php echo get_theme_mod( "AboutPageService6Icon" ); if(get_theme_mod( "AboutPageService6Icon" )==''){echo 'fa fa-flask';}?>"></span>
                                </div>
                            </div>
                            <div class="col-10 cont-ser-right-info">
                                <h6><a
                                        href="<?php echo get_theme_mod( "AboutPageService5Url","#url" ); ?>"><?php echo get_theme_mod( "AboutPageService6Title" );if(get_theme_mod( "AboutPageService6Title" )==''){echo 'Transformation';}?></a>
                                </h6>
                                <p><?php echo get_theme_mod( "AboutPageService6Content","Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit." );?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>

            </div>
        </div>
    </div>
</section>
<?php } ?>

<section>
    <?php echo get_theme_mod( "AboutPageServicesBottomArea","" );?>
</section>

<!-- //AboutPage Services -->





<!-- AboutPage skills Section -->

<section>
    <?php echo get_theme_mod( "AboutPageSkillsTopArea","" );?>
</section>

<?php $AboutPageSkillsStatus = get_theme_mod( "AboutPageSkillsRequired","1")?>
<?php if( $AboutPageSkillsStatus==1 ){?>

<section class="w3l-skills" id="skills">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3 AboutPageSkills">
            <div class="row">

                <div class="col-lg-6">
                    <h3 class="hny-title mx-0 mb-4">
                        <?php echo get_theme_mod( "AboutPageSkillsTitle" );if(get_theme_mod( "AboutPageSkillsTitle" )==''){echo 'Strategy is at the Heart of What We Do';}?>
                    </h3>
                    <div class="separatorhny"></div>
                    <p><?php echo get_theme_mod( "AboutPageSkillsDisc","Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
              ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet elit." );?> </p>
                    <div class="skills-bars mt-md-5 mt-4">

                        <div class="progress-info">
                            <h6 class="progress-tittle">
                                <?php echo get_theme_mod( "AboutPageSkill1Title" );if(get_theme_mod( "AboutPageSkill1Title" )==''){echo 'Digital Strategy';}?>
                            </h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>

                        <div class="progress-info">
                            <h6 class="progress-tittle">
                                <?php echo get_theme_mod( "AboutPageSkill2Title" );if(get_theme_mod( "AboutPageSkill2Title" )==''){echo 'Financial Services';}?>
                            </h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%" aria-valuenow="95"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>

                        <div class="progress-info">
                            <h6 class="progress-tittle">
                                <?php echo get_theme_mod( "AboutPageSkill3Title" );if(get_theme_mod( "AboutPageSkill3Title" )==''){echo 'Counsalting';}?>
                            </h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 55%" aria-valuenow="55"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                    <img src="<?php if(get_theme_mod('AboutPageSkillImage')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageSkillImage') );} if(wp_get_attachment_url(get_theme_mod('AboutPageSkillImage'))=='') { echo  get_template_directory_uri()."/assets/images/ab2.jpg";  }?>"
                        alt="" class="radius-image-full img-fluid">
                </div>

            </div>
        </div>

    </div>
</section>
<?php }?>

<section>
    <?php echo get_theme_mod( "AboutPageSkillsBottomArea","" );?>
</section>

<!-- //AboutPage skills Section -->





<!-- AboutPage cover Section -->

<section>
    <?php echo get_theme_mod( "AboutPageCoverTopArea","" );?>
</section>

<?php $AboutPageCoverRequir = get_theme_mod( "AboutPageCoverRequired","1")?>
<?php if( $AboutPageCoverRequir==1 ){?>
<section class="w3l-cover-section" id="subscribe">
    <style>
        .w3l-cover-section {
            background: url(<?php if(get_theme_mod('AboutPageCoverBgImage') !='') {
                echo wp_get_attachment_url(get_theme_mod('AboutPageCoverBgImage'));
            }

            if(wp_get_attachment_url(get_theme_mod('AboutPageCoverBgImage'))=='') {
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
    <div class="container py-5 AboutPageCover">
        <div class="row subscription-grids py-5">
            <div class="col-lg-7 subscription-left forms-25-info">
                <div class="header-title">
                    <h3 class="p-0">
                        <?php echo get_theme_mod( "AboutPageCoverTitle" );if(get_theme_mod( "AboutPageCoverTitle" )==''){echo "Start Your Journey to Better Business";}?>
                    </h3>
                </div>
            </div>
            <div class="col-lg-5 subscription-right pl-lg-5 mt-lg-0 mt-4 text-lg-right">
                <a href="<?php echo get_theme_mod( "AboutPageCoverGetStartedButtonUrl","about#url" ); ?>"
                    class="btn btn-style btn-white mr-lg-4 mr-sm-3">
                    <?php echo get_theme_mod( "AboutPageCoverGetStartedButtontxt",'Get Started Today' ); ?></a>
            </div>
        </div>
</section>
<?php }?>

<section>
    <?php echo get_theme_mod( "AboutPageCoverBottomArea","" );?>
</section>

<!-- //AboutPage cover Section -->






<!-- AboutPage team -->

<section>
    <?php echo get_theme_mod( "AboutPageTeamTopArea","" );?>
</section>

<?php $AboutPageTeamStatus = get_theme_mod( "AboutPageTeamRequired","1")?>
<?php if( $AboutPageTeamStatus==1 ){?>
<section class="w3l-team-main" id="team">
    <div class="team py-5">
        <div class="container py-lg-5 AboutPageTeam">
            <h6 class="sub-titlehny text-center">
                <?php echo get_theme_mod( "AboutPageTeamTitle1" );if(get_theme_mod( "AboutPageTeamTitle1" )==''){echo 'Strongest Team';}?></h6>
            <h3 class="hny-title mb-md-5 mb-5 text-center">
                <?php echo get_theme_mod( "AboutPageTeamTitle2" );if(get_theme_mod( "AboutPageTeamTitle2" )==''){echo 'Meet our team';}?></h3>

            <div class="row team-row mt-md-5 mt-4 justify-content-center">

                <?php $AboutPageTeam1Status = get_theme_mod( "AboutPageTeam1Required","1")?>
                <?php if( $AboutPageTeam1Status==1 ){?>
                <div class="col-lg-3 col-6 team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="<?php if(get_theme_mod('AboutPageTeam1Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageTeam1Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageTeam1Image'))=='') { echo  get_template_directory_uri()."/assets/images/team1.jpg";  }?>"
                                alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">

                                        <?php $AboutPageTeam1SFStatus = get_theme_mod( "AboutPageTeam1SocialFacebook","1")?>
                                        <?php if( $AboutPageTeam1SFStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "AboutPageTeam1SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                        <?php }?>

                                        <?php $AboutPageTeam1STStatus = get_theme_mod( "AboutPageTeam1SocialTwitter","1")?>
                                        <?php if( $AboutPageTeam1STStatus==1 ){?>
                                        <a href="<?php echo get_theme_mod( "AboutPageTeam1SocialTwitterURL","https://twitter.com/W3layouts" ); ?>">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <?php }?>

                                        <?php $AboutPageTeam1SIStatus = get_theme_mod( "AboutPageTeam1SocialInstagram","1")?>
                                        <?php if( $AboutPageTeam1SIStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "AboutPageTeam1SocialInstagramURL","https://www.instagram.com/w3layouts_/" ); ?>">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                        <?php }?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo get_theme_mod( "AboutPageTeam1TitleUrl","#url" ); ?>"
                            class="team-title"><?php echo get_theme_mod( "AboutPageTeam1Title" );if(get_theme_mod( "AboutPageTeam1Title" )==''){echo 'Daniel jacobs';}?></a>
                        <p><?php echo get_theme_mod( "AboutPageTeam1Designation" );if(get_theme_mod( "AboutPageTeam1Designation" )==''){echo 'Markrting Officer';}?>
                        </p>
                    </div>
                </div>
                <!-- end team member -->
                <?php }?>

                <?php $AboutPageTeam2Status = get_theme_mod( "AboutPageTeam2Required","1")?>
                <?php if( $AboutPageTeam2Status==1 ){?>
                <div class="col-lg-3 col-6 team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="<?php if(get_theme_mod('AboutPageTeam2Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageTeam2Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageTeam2Image'))=='') { echo  get_template_directory_uri()."/assets/images/team3.jpg";  }?>"
                                alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <?php $AboutPageTeam2SFStatus = get_theme_mod( "AboutPageTeam2SocialFacebook","1")?>
                                        <?php if( $AboutPageTeam2SFStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "AboutPageTeam2SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                        <?php }?>

                                        <?php $AboutPageTeam2STStatus = get_theme_mod( "AboutPageTeam2SocialTwitter","1")?>
                                        <?php if( $AboutPageTeam2STStatus==1 ){?>
                                        <a href="<?php echo get_theme_mod( "AboutPageTeam2SocialTwitterURL","https://twitter.com/W3layouts" ); ?>">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <?php }?>

                                        <?php $AboutPageTeam2SIStatus = get_theme_mod( "AboutPageTeam2SocialInstagram","1")?>
                                        <?php if( $AboutPageTeam2SIStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "AboutPageTeam2SocialInstagramURL","https://www.instagram.com/w3layouts_/" ); ?>">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo get_theme_mod( "AboutPageTeam2TitleUrl","#url" ); ?>"
                            class="team-title"><?php echo get_theme_mod( "AboutPageTeam2Title" );if(get_theme_mod( "AboutPageTeam2Title" )==''){echo 'Claire Daniel';}?></a>
                        <p><?php echo get_theme_mod( "AboutPageTeam2Designation" );if(get_theme_mod( "AboutPageTeam2Designation" )==''){echo 'Customer Officer';}?>
                        </p>
                    </div>
                </div>
                <!-- end team member -->
                <?php }?>

                <?php $AboutPageTeam3Status = get_theme_mod( "AboutPageTeam3Required","1")?>
                <?php if( $AboutPageTeam3Status==1 ){?>
                <div class="col-lg-3 col-6 team-wrap mt-lg-0 mt-5">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="<?php if(get_theme_mod('AboutPageTeam3Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageTeam3Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageTeam3Image'))=='') { echo  get_template_directory_uri()."/assets/images/team2.jpg";  }?>"
                                alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <?php $AboutPageTeam3SFStatus = get_theme_mod( "AboutPageTeam3SocialFacebook","1")?>
                                        <?php if( $AboutPageTeam3SFStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "AboutPageTeam3SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                        <?php }?>

                                        <?php $AboutPageTeam3STStatus = get_theme_mod( "AboutPageTeam3SocialTwitter","1")?>
                                        <?php if( $AboutPageTeam3STStatus==1 ){?>
                                        <a href="<?php echo get_theme_mod( "AboutPageTeam3SocialTwitterURL","https://twitter.com/W3layouts" ); ?>">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <?php }?>

                                        <?php $AboutPageTeam3SIStatus = get_theme_mod( "AboutPageTeam3SocialInstagram","1")?>
                                        <?php if( $AboutPageTeam3SIStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "AboutPageTeam3SocialInstagramURL","https://www.instagram.com/w3layouts_/" ); ?>">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo get_theme_mod( "AboutPageTeam3TitleUrl","#url" ); ?>"
                            class="team-title"><?php echo get_theme_mod( "AboutPageTeam3Title" );if(get_theme_mod( "AboutPageTeam3Title" )==''){echo 'Daniel Hunt';}?></a>
                        <p> <?php echo get_theme_mod( "AboutPageTeam3Designation" );if(get_theme_mod( "AboutPageTeam3Designation" )==''){echo 'Excutive Officer';}?>
                        </p>
                    </div>
                </div>
                <!-- end team member -->
                <?php }?>

                <?php $AboutPageTeam4Status = get_theme_mod( "AboutPageTeam4Required","1")?>
                <?php if( $AboutPageTeam4Status==1 ){?>
                <div class="col-lg-3 col-6 team-wrap mt-lg-0 mt-5">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="<?php if(get_theme_mod('AboutPageTeam4Image')!=''){ echo wp_get_attachment_url( get_theme_mod('AboutPageTeam4Image') );} if(wp_get_attachment_url(get_theme_mod('AboutPageTeam4Image'))=='') { echo  get_template_directory_uri()."/assets/images/team4.jpg";  }?>"
                                alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <?php $AboutPageTeam4SFStatus = get_theme_mod( "AboutPageTeam4SocialFacebook","1")?>
                                        <?php if( $AboutPageTeam4SFStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "AboutPageTeam4SocialFacebookURL","https://www.facebook.com/w3layouts/" ); ?>">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                        <?php }?>

                                        <?php $AboutPageTeam4STStatus = get_theme_mod( "AboutPageTeam4SocialTwitter","1")?>
                                        <?php if( $AboutPageTeam4STStatus==1 ){?>
                                        <a href="<?php echo get_theme_mod( "AboutPageTeam4SocialTwitterURL","https://twitter.com/W3layouts" ); ?>">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <?php }?>

                                        <?php $AboutPageTeam4SIStatus = get_theme_mod( "AboutPageTeam4SocialInstagram","1")?>
                                        <?php if( $AboutPageTeam4SIStatus==1 ){?>
                                        <a
                                            href="<?php echo get_theme_mod( "AboutPageTeam4SocialInstagramURL","https://www.instagram.com/w3layouts_/" ); ?>">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo get_theme_mod( "AboutPageTeam4TitleUrl","#url" ); ?>" class="team-title"><?php echo get_theme_mod( "AboutPageTeam4Title" );if(get_theme_mod( "AboutPageTeam4Title" )==''){echo 'Kelli Grant';}?></a>
                        <p> <?php echo get_theme_mod( "AboutPageTeam4Designation" );if(get_theme_mod( "AboutPageTeam4Designation" )==''){echo 'Chef
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
    <?php echo get_theme_mod( "AboutPageTeamBottomArea","" );?>
</section>

<!-- AboutPage team -->






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