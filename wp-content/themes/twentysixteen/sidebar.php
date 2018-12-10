<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if( is_single() ) { ?>
	
	<div class="col-lg-3 col-md-3 sidebar" style="margin-top: 50px;">
		<?php
			$categories = get_the_category();
			$cat_name = $categories[0]->slug;
		?>
		<div class="widget popular">
			<h4 class="widget-title"><span>Bài cùng chuyên mục</span></h4>
			<ul>
				<?php
					$i = 0;
					$r = new WP_Query( array(
						'category_name'		=> $cat_name,
						'post__not_in' 		=> array($post->ID),
						'posts_per_page'	=> 10,
						'orderby'			=> 'rand',
					) );
					while($r->have_posts()) : $r->the_post();
					$len = count($r->the_post);
					if ($i == 0) {
				?>
					<li class="first">  
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_sidebar', array('class' => 'theme-thumb')); ?></a>               
						<h4 class="entry-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h4>
					</li>
				<?php
						} else {
				?>
					<li class="last">                  
						<h4 class="entry-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h4>
					</li>
				<?php
						}
						$i++;
					//}
				?>
				<?php endwhile; wp_reset_query(); ?>
			</ul>
		</div>
	</div>

<?php } else { ?>

	<div class="col-lg-3 col-md-3 sidebar" style="margin-top: 50px;">
	
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#xemnhieu" aria-controls="xemnhieu" role="tab" data-toggle="tab">Xem nhiều</a></li>
			<li role="presentation"><a href="#ngaunhien" aria-controls="ngaunhien" role="tab" data-toggle="tab">Ngẫu nhiên</a></li>
		</ul>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="xemnhieu">
				<div class="widget popular">
					<ul>
						<?php
							$i = 0;
							query_posts('orderby=meta_value_num&order=DESC&posts_per_page=10&meta_key=views');
							while(have_posts()) : the_post();
							$len = count(the_post);
							if ($i == 0) {
						?>
							<li class="first">  
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_sidebar', array('class' => 'theme-thumb')); ?></a>               
								<h4 class="entry-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h4>
							</li>
						<?php
								} else {
						?>
							<li class="last">                  
								<h4 class="entry-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h4>
							</li>
						<?php
								}
								$i++;
							//}
						?>
						<?php endwhile; wp_reset_query(); ?>
					</ul>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="ngaunhien">
				<div class="widget popular">
					<ul>
						<?php
							$i = 0;
							query_posts('orderby=rand&posts_per_page=10');
							while(have_posts()) : the_post();
							$len = count(the_post);
							if ($i == 0) {
						?>
							<li class="first">  
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_sidebar', array('class' => 'theme-thumb')); ?></a>               
								<h4 class="entry-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h4>
							</li>
						<?php
								} else {
						?>
							<li class="last">                  
								<h4 class="entry-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h4>
							</li>
						<?php
								}
								$i++;
							//}
						?>
						<?php endwhile; wp_reset_query(); ?>
					</ul>
				</div>
			</div>
		</div><!--tab -->
		
		<div class="widget popular">
			<h4 class="widget-title"><span>Sự kiện nổi bật</span></h4>
			<ul>
				<?php
					$i = 0;
					query_posts('posts_per_page=10&category_name=su-kien&no_found_rows=true&post_status=publish&ignore_sticky_posts=true');
					while(have_posts()) : the_post();
					$len = count(the_post);
					if ($i == 0) {
				?>
					<li class="first">  
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_sidebar', array('class' => 'theme-thumb')); ?></a>               
						<h4 class="entry-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h4>
					</li>
				<?php
						} else {
				?>
					<li class="last">                  
						<h4 class="entry-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h4>
					</li>
				<?php
						}
						$i++;
					//}
				?>
				<?php endwhile; wp_reset_query(); ?>
			</ul>
		</div>
		
		<div class="widget popular">
			<h4 class="widget-title"><span>Bạn quan tâm chủ đề gì?</span></h4>
			<div class="tagcloud">
				<?php wp_tag_cloud( array(
				   'smallest' => 1, // size of least used tag
				   'largest'  => 1, // size of most used tag
				   'unit'     => 'em', // unit for sizing the tags
				   'number'   => 45, // displays at most 45 tags
				   'orderby'  => 'name', // order tags alphabetically
				   'order'    => 'ASC', // order tags by ascending order
				   'taxonomy' => 'post_tag' // you can even make tags for custom taxonomies
				) ); ?>
			</div>
		</div>
		
	</div>

<?php } ?>