<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area-journal-posts">
		<main id="main" class="site-mains" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		
		<?php the_post_navigation(); ?>

			

			

			<?php
				
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile;  ?>

		</main>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>