<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<section id="main-body">
    <div class="container">
        <div class="row">
			<div id="content" class="col-lg-9 col-md-9">
							
				<?php custom_breadcrumbs(); ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<section id="home-article">
					<?php
						global $count_post; 
						$count_post = 0;
						if (have_posts()) : while (have_posts()) : the_post();  
					?>
					
						<a href="<?php the_permalink(); ?>">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">
								<div class="featured-img col-lg-3 col-md-3">
									<span itemprop='image' itemscope itemtype='http://schema.org/ImageObject'>
										<?php the_post_thumbnail('vn_posts_l_new', array('class' => 'img-responsive','itemprop' => 'image')); ?>
										<span class="hidden" itemprop='width'>360</span>
										<span class="hidden" itemprop='height width'>216</span>
									</span>
								</div>
								<div class="entry-content entry-fade col-lg-9 col-md-9">
									<h3 itemprop="name headline"><?php the_title(); ?></h3>
									<figure><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></figure>
								</div>
							</article>
						</a>
						
						<?php endwhile; else : 
							get_template_part( 'no-results' );
											
						endif; ?>

					<?php if ( $wp_query->max_num_pages > 1 )  { hr_pagenavi(); }; ?>

				</section> <!-- /main -->
							
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
