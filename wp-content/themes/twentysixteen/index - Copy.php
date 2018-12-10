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

	<!-- content -->
        <section class="slider">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12 col-sm-12">
                        <div class="slider row class-test3">
                            <div class="main-slider">
                                <div class="featured-posts" id="featured-posts">
								<?php
									$i = 0;
									query_posts('meta_key=meta-checkbox&meta_value=yes&posts_per_page=6&order_by=ID');
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
                                                        <meta itemprop="datePublished" content="<?php the_time(get_option('date_format')); ?>"><?php the_time(get_option('date_format')); ?>
											</time>
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
								} else if( $i <= 2 ){
							?>
								
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mgb-10">
                                                <div class="featured_post hentry" itemscope itemtype="http://schema.org/Article">
                                                    <meta content="<?php echo $image[0]; ?>" itemprop="image">
                                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_cat', array('class' => 'theme-thumb')); ?>
                                                    </a>
                                                    <div class="slider-wraper-inner">
                                                        <h2 class="entry-title slider-title" itemprop="name headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                        <div class="hidden">
                                                            <time itemprop="dateCreated" class="meta-date updated" datetime="<?php the_time(get_option('date_format')); ?>">
                                                                <meta itemprop="datePublished" content="<?php the_time(get_option('date_format')); ?>"><?php the_time(get_option('date_format')); ?>
													</time>
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
                                        </div>
                                    </div>
									
							<?php 
								} else if( $i <= 6 ) {
							?>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="featured_post hentry" itemscope itemtype="http://schema.org/Article">
                                                    <meta content="<?php echo $image[0]; ?>" itemprop="image">
                                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_cat', array('class' => 'theme-thumb')); ?>
                                                    </a>
                                                    <div class="slider-wraper-inner">
                                                        <h2 class="entry-title slider-title" itemprop="name headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                        <div class="hidden">
                                                            <time itemprop="dateCreated" class="meta-date updated" datetime="<?php the_time(get_option('date_format')); ?>">
                                                                <meta itemprop="datePublished" content="<?php the_time(get_option('date_format')); ?>"><?php the_time(get_option('date_format')); ?>
													</time>
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
					<!-- widget -->
                    <div class="col-lg-3 col-md-4 hidden-sm hidden-xs" style="background: #E5E5E5;padding: 10px 10px 0px 10px;">
                        <div class="widget ads img-responsive">
                            <div id="email-form-sidebar-single">
								<span class="email-form-sidebar-single-title">Want Wrap-up of this week's best articles from Vina.com?</span><form method="post" class="af-form-wrapper" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl" target="edit_new"><div style="display: none;">
								<input type="hidden" name="meta_web_form_id" value="1273624904">
								<input type="hidden" name="meta_split_id" value="">
								<input type="hidden" name="listname" value="awlist3913805">
								<input type="hidden" name="redirect" value="http://vina.com/thank-you/" id="redirect_0d87bdb0fc51a1043da3cf023dd4cad9"><input type="hidden" name="meta_adtracking" value="Vina_Subscribers_Right_Sidebar">
								<input type="hidden" name="meta_message" value="1001">
								<input type="hidden" name="meta_required" value="email"><input type="hidden" name="meta_tooltip" value="email||Enter your email address here"></div><div id="af-form-1273624904" class="af-form"><div id="af-body-1273624904" class="af-body af-standards"><div class="af-element">
								<label class="previewLabel" for="awf_field-74058140"></label><div class="af-textWrap"><input class="text" id="awf_field-74058140" type="text" name="email" value="Enter your email address here" tabindex="500" onfocus=" if (this.value == 'Enter your email address here') { this.value = ''; }" onblur="if (this.value == '') { this.value='Enter your email address here';} "></div><div class="af-clear"></div></div><div class="af-element buttonContainer">
								<input name="submit" class="submit" type="submit" value="Let Me In" tabindex="501"><div class="af-clear"></div></div></div></div><div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jEzszGxMLJwMLA==" alt=""></div></form> <script type="text/javascript">(function() {
											var IE = /*@cc_on!@*/false;
											if (!IE) { return; }
											if (document.compatMode && document.compatMode == 'BackCompat') {
												if (document.getElementById("af-form-1273624904")) {
													document.getElementById("af-form-1273624904").className = 'af-form af-quirksMode';
												}
												if (document.getElementById("af-body-1273624904")) {
													document.getElementById("af-body-1273624904").className = "af-body inline af-quirksMode";
												}
												if (document.getElementById("af-header-1273624904")) {
													document.getElementById("af-header-1273624904").className = "af-header af-quirksMode";
												}
												if (document.getElementById("af-footer-1273624904")) {
													document.getElementById("af-footer-1273624904").className = "af-footer af-quirksMode";
												}
											}
										})();</script> 
							</div>
							
							<div id="socical-baner">
								<div id="count-link-socical-facebook" class="count-link-socical">
								<a class="count-link-socical-icon" href="https://www.facebook.com/maylamdahaiau/" target="_blank"><span><i class="fa fa-fw"></i></span><p>Like us on Facebook</p></a><div class="count-link-socical-right">
								<span class="count-value"></span>
								<span class="count-link-socical-des">FANS</span></div></div>
								<div id="count-link-socical-google" class="count-link-socical">
								<a class="count-link-socical-icon" href="" target="_blank"><span><i class="fa fa-fw"></i></span><p>Follow us on Google+</p></a><div class="count-link-socical-right">
								<span class="count-value"></span>
								<span class="count-link-socical-des">Followers</span></div></div>
								<div id="count-link-socical-twitter" class="count-link-socical">
								<a class="count-link-socical-icon" href="" target="_blank"><span><i class="fa fa-fw"></i></span><p>Follow us on Twitter</p></a><div class="count-link-socical-right">
								<span class="count-value"></span>
								<span class="count-link-socical-des">Followers</span></div></div>
                    </div>
                </div>
            </div>
        </section>
		
		<!-- new hot -->
        <section id="news-hot" class="clearfix">
            <div class="container">
                <div class="onecol">
				
                    <div id="catbox1-0" class="catbox clearfix catbox-even">
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <h2 class="catbox-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/bep-tu" title="Bếp từ">Bếp từ <span class="channel-row-see-all">Xem tất cả »</span></a></h2>
							<?php 
								$r = new WP_Query( array(
								'meta_key' 		=>	'meta-checkbox'
								,'meta_value'		=>	'yes'
								,'posts_per_page'	=>	'3',
								'category_name'    => 'bep-tu',
							) );

							?>
							<ul class="row">
							<?php 
								while ( $r->have_posts() ) : $r->the_post(); 
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							?>
                                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hentry" itemscope itemtype="http://schema.org/Article">
                                    <meta content="<?php echo $image[0]; ?>" itemprop="image">
                                    <meta content="<?php the_permalink(); ?>" itemprop="url">
                                    <div class="inner-item">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_post_thumbnail('post_cat', array('class' => 'theme-thumb')); ?> 
										</a>
                                    </div>
                                    <h2 class="entry-title" itemprop="name headline"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                    <div class="entry-meta">
										<?php 
											$author_id=$post->post_author;
											echo the_author_meta( 'display_name' , $author_id ); 
										?>
                                        <br/>
                                        <time itemprop="dateCreated" class="meta-date updated" datetime="<?php the_time(get_option('date_format')); ?>">
                                            <meta itemprop="datePublished" content="<?php the_time(get_option('date_format')); ?>"><?php the_time(get_option('date_format')); ?></time>
                                        <span class="vcard author hidden"><span itemprop="author" class="fn"><i class="fa fa-user"></i> 
										<?php 
											$author_id=$post->post_author;
											echo the_author_meta( 'display_name' , $author_id ); 
										?></span></span>
                                        <div class="share-wrap">
                                            <div class="share" id="share_bt<?php echo $post->ID; ?>">
                                                <span id="fttext_share_bt<?php echo $post->ID; ?>" class="text-share"><i class="fa fa-share"></i></span>
                                                <div id="fticon_share_bt<?php echo $post->ID; ?>" class="social hidden">
                                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></a>
                                                    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a>
                                                    <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a>
                                                    <a href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" title="Share on Pinterest" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="description">
										<?php the_excerpt(); ?>
									</div>
                                </li>
								<?php 
									endwhile;
									wp_reset_query();
								?>
                            </ul>
                        </div>
								
						
                        <div class="col-lg-3 col-md-4 hidden-sm hidden-xs"><span class="trending-title">More in <span class="trending">Bếp từ</span></span>
							<?php 
								$r = new WP_Query( array(
								'posts_per_page'      => 7,
								'category_name'       => 'bep-tu',
								'no_found_rows'       => true,
								'post_status'         => 'publish',
								'ignore_sticky_posts' => true
							) );

							if ($r->have_posts()) :
							?>
							<ul class="trend">
								<?php while ( $r->have_posts() ) : $r->the_post(); ?>
                                <li>
                                    <h4 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                                </li>
								<?php endwhile; ?>
                            </ul>
							<?php 
								endif;
								wp_reset_query();
							?>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
				
                <div class="onecol">
                    <div id="catbox1-0" class="catbox clearfix catbox-even">
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <h2 class="catbox-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/bep-tu-cong-nghiep" title="Bếp từ công nghiệp">Bếp từ công nghiệp <span class="channel-row-see-all">Xem tất cả »</span></a></h2>
                            <?php 
								$r = new WP_Query( array(
								'meta_key' 		=>	'meta-checkbox'
								,'meta_value'		=>	'yes'
								,'posts_per_page'	=>	'3',
								'category_name'    => 	'bep-tu-cong-nghiep'
							) );

							?>
							<ul class="row">
							<?php 
								while ( $r->have_posts() ) : $r->the_post(); 
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							?>
                                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hentry" itemscope itemtype="http://schema.org/Article">
                                    <meta content="<?php echo $image[0]; ?>" itemprop="image">
                                    <meta content="<?php the_permalink(); ?>" itemprop="url">
                                    <div class="inner-item">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_post_thumbnail('post_cat', array('class' => 'theme-thumb')); ?> 
										</a>
                                    </div>
                                    <h2 class="entry-title" itemprop="name headline"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                    <div class="entry-meta">
										<?php 
											$author_id=$post->post_author;
											echo the_author_meta( 'display_name' , $author_id ); 
										?>
                                        <br/>
                                        <time itemprop="dateCreated" class="meta-date updated" datetime="<?php the_time(get_option('date_format')); ?>">
                                            <meta itemprop="datePublished" content="<?php the_time(get_option('date_format')); ?>"><?php the_time(get_option('date_format')); ?></time>
                                        <span class="vcard author hidden"><span itemprop="author" class="fn"><i class="fa fa-user"></i> 
										<?php 
											$author_id=$post->post_author;
											echo the_author_meta( 'display_name' , $author_id ); 
										?></span></span>
                                        <div class="share-wrap">
                                            <div class="share" id="share_btcn<?php echo $post->ID; ?>">
                                                <span id="fttext_share_btcn<?php echo $post->ID; ?>" class="text-share"><i class="fa fa-share"></i></span>
                                                <div id="fticon_share_btcn<?php echo $post->ID; ?>" class="social hidden">
                                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></a>
                                                    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a>
                                                    <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a>
                                                    <a href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" title="Share on Pinterest" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="description">
										<?php the_excerpt(); ?>
									</div>
                                </li>
								<?php 
									endwhile;
									wp_reset_query();
								?>
                            </ul>
                        </div>
						
                        <div class="col-lg-3 col-md-4 hidden-sm hidden-xs"><span class="trending-title">More in <span class="trending">Bếp từ công nghiệp</span></span>
                            <?php 
								$r = new WP_Query( array(
								'posts_per_page'      => 7,
								'category_name'       => 'bep-tu-cong-nghiep',
								'no_found_rows'       => true,
								'post_status'         => 'publish',
								'ignore_sticky_posts' => true
							) );

							if ($r->have_posts()) :
							?>
							<ul class="trend">
								<?php while ( $r->have_posts() ) : $r->the_post(); ?>
                                <li>
                                    <h4 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                                </li>
								<?php endwhile; ?>
                            </ul>
							<?php 
								endif;
								wp_reset_query();
							?>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </section>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div id="footer-top-title-wrap" class="footer-top-title-wrap-home">
						<span class="footer-top-title">Everything on Vina.Com</span>
						<span class="footer-top-title-line"></span>
					</div>
				</div>
			</div>
		</div>
		
		<section id="featured-topics" class="slab clearfix">
			<div class="featured-topics container">
				<div class="viewport">
					<div class="hidden-xs trending-links">
						<div class="row">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
								<h5 class="subheading"><a href="">VIETNAM TRAVEL</a></h5>
								<ul>
									<li><a href="">Travel to Hanoi</a></li>
									<li><a href="">Travel to Ho Chi Minh</a></li>
									<li><a href="">Travel to Da Nang</a></li>
									<li><a href="">Travel to Da Lat</a></li>
									<li><a href="">Travel to Hoi An</a></li>
									<li><a href="">Travel to Halong Bay</a></li>
								</ul>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
								<h5 class="subheading"><a href="">VIETNAM FOOD</a></h5>
								<ul class="fancy">
									<li><a href="">North Vietnam</a></li>
									<li><a href="">Central Vietnam</a></li>
									<li><a href="">South Vietnam</a></li>
									<li><a href="">Traditional Vietnam Food</a></li>
									<li><a href="">Vietnam Street Food</a></li>
								</ul>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
								<h5 class="subheading"><a href="">VIETNAM PHOTOS</a></h5>
								<ul class="fancy">
									<li><a href="">Hanoi Photos</a></li>
									<li><a href="">Ho Chi Minh Photos</a></li>
									<li><a href="">Da Nang Photos</a></li>
									<li><a href="">Dalat Photos</a></li>
									<li><a href="">Hoi An Photos</a></li>
									<li><a href="">Halong Bay Photos</a></li>
								</ul>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
								<h5 class="subheading"><a href="">VIETNAM CAFE</a></h5>
								<ul class="fancy"></ul>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
								<h5 class="subheading"><a href="">VIETNAM CAFE</a></h5>
								<ul class="fancy"></ul>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
								<h5 class="subheading"><a href="">VIETNAM CAFE</a></h5>
								<ul class="fancy"></ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
