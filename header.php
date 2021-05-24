<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package w3layouts
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="author" content="W3Layouts.com" />

	<!-- Google fonts -->
	<link href="//fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,600;0,700;1,300;1,500&display=swap" rel="stylesheet">
	<link href="//fonts.googleapis.com/css2?family=Zilla+Slab+Highlight:wght@700&display=swap" rel="stylesheet">
	<!-- google fonts -->

	<link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/style-liberty.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body id="top-gap-fixed-header" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php
	 $SiteName = get_bloginfo( 'name' );
	 if(!empty(get_bloginfo( 'description' )))
	 {
		 $SiteDiscription = ' - '.get_bloginfo( 'description' );
	 }

	 $logoselected =get_option('headerlogo');
			?>

	<!--header-->
	<header id="site-header" class="main-header fixed-top">
		<div class="container w3HeaderLogoEd">
			<nav class="navbar navbar-expand-lg stroke px-0">
				<?php $HeaderImageLogoStatus = get_theme_mod( "HeaderImageLogo","0")?>
				<?php if( $HeaderImageLogoStatus==1 ){
			$custom_logo_id = get_theme_mod( 'custom_logo' );
		 $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		 ?>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<!-- <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" /> -->
					<img src="<?php echo $image[0]; ?>" class="logo img-fluid" alt="<?php echo $SiteName;?><?php echo $SiteDiscription;?>">
				</a>
				<?php }?>
				<?php if($HeaderImageLogoStatus!=1) {
					$logoseText = get_theme_mod( "w3layoutsHeaderlogoText", '<span class="hny-log">A</span>dvisory' );

					?>
				<h1><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php echo $logoseText; ?>
					</a></h1>

				<?php } ?>
				<button class="navbar-toggler collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
					aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<?php
        wp_nav_menu( array(
            'theme_location' => 'menu-1', // Defined when registering the menu
            'menu_id'        => 'primary-menu',
            'container'      => false,
            'depth'          => 3,
            'menu_class'     => 'navbar-nav ml-auto',
            'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
            'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
        ) );
				?>
					<ul class="navbar-nav search-right mt-0 mx-0">
						<?php $HeaderSearchRequir = get_theme_mod( "HeaderSearchRequired","1")?>
						<?php if( $HeaderSearchRequir==1 ){?>
						<!--/search-right-->
						<div class="search-right HeaderSearch">
							<a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
							<!-- search popup -->
							<div id="search" class="pop-overlay">
								<div class="search-popup">

									<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search-box">
										<input type="search" name="s" placeholder="<?php echo get_theme_mod( 'HeaderSearchPlaceHolder', 'Enter Keyword');?>"
											required="required" autofocus="">
										<button type="submit" class="btn"><span class="fa fa-search" aria-hidden="true"></span></button>
									</form>

								</div>
								<a class="close" href="#close">&times;</a>
							</div>
							<!-- /search popup -->
						</div>
						<?php } ?>
						<!--//search-right-->
					</ul>
				</div>


				<!-- toggle switch for light and dark theme -->
				<?php $DarkandLightModeRequir = get_theme_mod( "DarkandLightModeRequired","1")?>
				<?php if( $DarkandLightModeRequir==1 ){?>
				<div class="cont-ser-position DarkandLight">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
				<?php } ?>
				<!-- //toggle switch for light and dark theme -->

			</nav>
		</div>
	</header>