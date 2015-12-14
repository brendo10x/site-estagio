<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package AccesspressLite
 */

get_header(); 
global $accesspresslite_options;
$accesspresslite_settings = get_option( 'accesspresslite_options', $accesspresslite_options );
?>

<div class="ak-container">
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Autor: %s', 'accesspresslite' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Dia: %s', 'accesspresslite' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Mês: %s', 'accesspresslite' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'accesspresslite' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Ano: %s', 'accesspresslite' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'accesspresslite' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Apartes', 'accesspresslite' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galerias', 'accesspresslite');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Imagens', 'accesspresslite');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'accesspresslite' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Cotações', 'accesspresslite' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'accesspresslite' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Status', 'accesspresslite' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Áudios', 'accesspresslite' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Bate-papo', 'accesspresslite' );

						else :
							_e( 'Arquivos', 'accesspresslite' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php 
			while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content' );
				?>

			<?php endwhile; ?>

			<?php accesspresslite_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar('right'); ?>
</div>
<?php get_footer(); ?>