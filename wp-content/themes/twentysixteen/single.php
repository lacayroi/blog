<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<section id="main-body">
    <div class="container">
        <div class="row">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the single post content template.
				get_template_part( 'template-parts/content', 'single' );

				// End of the loop.
			endwhile;
			?>
			
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
