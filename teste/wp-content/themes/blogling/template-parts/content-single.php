<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blogling
 */

?>
<?php if ( has_post_thumbnail() ) : ?>
	<div class="featured-thumbnail">
		<?php the_post_thumbnail('bloggist-slider'); ?>
	</div>
<?php endif; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('posts-entry fbox'); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
			<?php if ( get_theme_mod( 'show_post_page_byline' ) == '' ) : ?>
				<div class="entry-meta">
					<div class="blog-data-wrapper">
						<div class="post-data-divider"></div>
						<div class="post-data-positioning">
							<div class="post-data-text">
								<?php bloggist_posted_on(); ?>
							</div>
						</div>
					</div>
				</div><!-- .entry-meta -->
				<?php else: ?>
					<div class="blogling-spacer"></div>
				<?php endif; ?>
				<?php
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>

			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blogling' ),
				'after'  => '</div>',
			) );
			?>
			<?php if ( get_theme_mod( 'show_post_categories' ) == '' ) : ?>
				<div class="post-category">
					<img src="<?php echo get_stylesheet_directory_uri().'/img/category.png'; ?>">
					<?php the_category(', '); ?>
				</div>
				<?php else: ?>
				<?php endif; ?>

			</div><!-- .entry-content -->
		</article><!-- #post-<?php the_ID(); ?> -->
