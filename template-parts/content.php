<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package w3layouts
 */

?>


<div class="col-lg-4 col-md-6 mt-4">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="blog-post">
		<a href="<?php the_permalink() ?>">
						<?php w3layouts_post_thumbnail(); ?>
					</a>

			<div class="card-body blog-details">
				<?php

if ( 'post' === get_post_type() ) :
	?>

		<?php endif; ?>
		<?php $BlogHomePageCategoryRequired = get_theme_mod( "BlogHomePageCategory","1")?>
		<?php $BlogHomePageAuthRequired = get_theme_mod( "BlogHomePageAuthor","1")?>
		<?php $BlogHomePageDateRequired = get_theme_mod( "BlogHomePageDate","1")?>
		<?php $BlogHomePagePostedTimeRequired = get_theme_mod( "BlogHomePageTime","1")?>
		<div <?php if( $BlogHomePageCategoryRequired==1 || $BlogHomePageAuthRequired==1 || $BlogHomePageDateRequired==1 || $BlogHomePagePostedTimeRequired==1){?> <?php }?>>

		<?php if( $BlogHomePageCategoryRequired==1 ){?>
				<p><?php echo the_category(', ');?></p>
					<?php }?>

				<a href="<?php the_permalink() ?>" class="blog-desc"><?php
						if ( is_singular() ) :
							the_title( '', '' );
						else :
							the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="blog-desc">', '</a>' );
						endif;
						?>
				</a>
				<div class="author align-items-center">

				<?php if( $BlogHomePageAuthRequired==1 ){?>
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID'));?>">
					<img src="<?php print get_avatar_url( get_the_author_meta( 'ID' ), ['size' => '56'] ); ?>" alt="<?php the_author_meta('display_name'); ?>" class="img-fluid rounded-circle">
				</a>
					<?php }?>

					<ul class="blog-meta">
						<li class="meta-item blog-lesson">

						<?php if( $BlogHomePageDateRequired==1 ){?>
							<span class="meta-value"> <?php echo get_the_date( 'F j, Y' ); ?> </span>
						<?php }?>

						<!-- <?php if( $BlogHomePagePostedTimeRequired==1 ){?>
							<span class="meta-value ml-2">
							<span class="fa fa-clock-o"></span> 5	min</span>
						<?php }?> -->

						</li>
					</ul>
				</div>

			</div>
			</div>
		</div>


		<div class="single-left1 mb-5">

			<?php
		if ( 'post' === get_post_type() ) :
		?>

			<?php endif; ?>
			<?php $BlogHomePageDateRequired = get_theme_mod( "BlogHomePageDateBelow","1")?>
			<?php $BlogHomePageAuthRequired = get_theme_mod( "BlogHomePageAuthorBelow","1")?>
			<?php $BlogHomePageCommentsRequired = get_theme_mod( "BlogHomePageCommentsBelow","1")?>
			<?php $BlogHomePageReadMoreRequired = get_theme_mod( "BlogHomePageReadMoreBelow","1")?>
			<div
				<?php if( $BlogHomePageDateRequired==1 || $BlogHomePageAuthRequired==1 || $BlogHomePageCommentsRequired==1 || $BlogHomePageReadMoreRequired==1){?>
				<?php }?>>
				<div class="blg-img">
					
				</div>

			</div>



	</article>

</div>


<!-- </article>#post-<?php the_ID(); ?> -->