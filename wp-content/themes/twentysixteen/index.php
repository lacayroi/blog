<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="content-home">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9">
					<section class="slider">
						<div class="slider row class-test3">
							<div class="main-slider">
								<div class="featured-posts" id="featured-posts">
								<?php
									$i = 0;
									query_posts('meta_key=meta-checkbox&meta_value=yes&posts_per_page=3&order_by=ID');
									while(have_posts()) : the_post();
									$len = count(the_post);
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
									if ($i == 0) {
								?>
									<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
										<div class="featured_post hentry" itemscope itemtype="http://schema.org/Article">
											
											<meta content="<?php echo $image[0]; ?>" itemprop="image">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_featured', array('class' => 'theme-thumb')); ?>
											</a>
											<div class="slider-wraper-inner">
												<h2 class="entry-title slider-title first" itemprop="name headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
												<div class="hidden">
													<time itemprop="dateCreated" class="meta-date updated" datetime="<?php the_time(get_option('date_format')); ?>">
														<meta itemprop="datePublished" content="<?php the_time(get_option('date_format')); ?>"><?php the_time(get_option('date_format')); ?></time>
													<span itemprop="author" class="fn"><i class="fa fa-user"></i> 
														<?php 
															$author_id=$post->post_author;
															echo the_author_meta( 'display_name' , $author_id ); 
														?>
													</span>
												</div>
												<div class="share-wrap">
													<div class="share" id="share_<?php echo $post->ID; ?>">
														<span id="fttext_share_<?php echo $post->ID; ?>" class="text-share"><i class="fa fa-share"></i></span>
														<div id="fticon_share_<?php echo $post->ID; ?>" class="social hidden">
															<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></a>
															<a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a>
															<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a>
															<a href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" title="Share on Pinterest" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="row">
										<?php 
											} else {
										?>
											<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mgb-10">
												<div class="featured_post hentry" itemscope itemtype="http://schema.org/Article">
													<meta content="<?php echo $image[0]; ?>" itemprop="image">
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_cat', array('class' => 'theme-thumb')); ?>
													</a>
													<div class="slider-wraper-inner">
														<h2 class="entry-title slider-title" itemprop="name headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
														<div class="hidden">
															<time itemprop="dateCreated" class="meta-date updated" datetime="<?php the_time(get_option('date_format')); ?>">
																<meta itemprop="datePublished" content="<?php the_time(get_option('date_format')); ?>"><?php the_time(get_option('date_format')); ?></time>
															<span itemprop="author" class="fn"><i class="fa fa-user"></i> 
																<?php 
																	$author_id=$post->post_author;
																	echo the_author_meta( 'display_name' , $author_id ); 
																?>
															</span>
														</div>
														<div class="share-wrap">
															<div class="share" id="share_<?php echo $post->ID; ?>">
																<span id="fttext_share_<?php echo $post->ID; ?>" class="text-share"><i class="fa fa-share"></i></span>
																<div id="fticon_share_<?php echo $post->ID; ?>" class="social hidden">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a>
							<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a>
							<a href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" title="Share on Pinterest" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<?php
												}
												$i++;
												endwhile; 
																											wp_reset_query();
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section><!-- .slide -->
					
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
										<?php the_post_thumbnail('vn_posts_l_new', array('class' => 'post_home','itemprop' => 'image')); ?>
										<span class="hidden" itemprop='width'>360</span>
										<span class="hidden" itemprop='height width'>216</span>
									</span>
								</div>
								<div class="entry-content entry-fade col-lg-9 col-md-9">
									<h3 itemprop="name headline"><?php the_title(); ?></h3>
									<figure><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></figure>
									<div class="timepost">
										<span>
											<?php 
												$author_id=$post->post_author;
												echo the_author_meta( 'display_name' , $author_id ); 
											?>
										</span>
										<span class="namecate">
											<?php the_category(', '); ?>
										</span>
									</div>
								</div>
							</article>
						</a>
					<?php
						endwhile;
						//if ( $wp_query->max_num_pages > 1 )  { hr_pagenavi(); };
						echo do_shortcode( '[ajax_load_more post_type="post" button_label="Xem thêm"]' );
						endif;
					?>
					</section>
					
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
