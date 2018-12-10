<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="content-home" style="margin-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>

						<?php get_search_form(); ?>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</div><!-- .site-main -->

		</div><!-- .content-area -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
