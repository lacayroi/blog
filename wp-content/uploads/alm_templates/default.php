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