<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Blogling
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('posts-entry fbox'); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<?php if ( get_theme_mod( 'show_post_page_byline' ) == '' ) : ?>
				<div class="entry-meta">
					<?php bloggist_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php else: ?>
					<div class="blogling-spacer"></div>
				<?php endif; ?>

			<?php endif; ?>

		</header><!-- .entry-header -->

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="featured-thumbnail">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail('bloggist-small'); ?></a>
			</div>
		<?php endif; ?>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<footer class="entry-footer">
			<?php bloggist_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
