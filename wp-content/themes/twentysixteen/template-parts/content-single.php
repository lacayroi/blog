<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="entry entry-content">
	<div itemscope="" itemtype="http://schema.org/Article" class="hentry" id="content">
		<?php custom_breadcrumbs(); ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		
		<div class="entry-meta entry-meta-single entry-meta-single"> 
			<i class="fa fa-calendar"></i>      
			<h3 class="timeline-date-stamp" style="margin-top:5px;"><span class="entry-date" itemprop="datePublished" content="<?php the_time(get_option('date_format')); ?>"><time class="entry-date updated"><?php the_time(get_option('date_format')); ?></time></span>
			</h3> | <i class="fa fa-folder-open"></i> <?php the_category(', '); ?> | <i class="fa fa-user" aria-hidden="true"></i>
			<span itemprop="author" class="author vcard"><span class="fn">
			<?php 
				$author_id=$post->post_author;
				echo the_author_meta( 'display_name' , $author_id ); 
			?>
			</span></span>
		</div>    

		<div class="entry-content">
			<?php
				the_content();

				if ( '' !== get_the_author_meta( 'description' ) ) {
					get_template_part( 'template-parts/biography' );
				}
			?>
		</div><!-- .entry-content -->
		
		<div class="rating" style="overflow: hidden;padding-top: 15px;">
			<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings($pid); endif; ?>
		</div>
		
		<?php if(has_tag()) { ?>
			<div class="tags">
				<i class="fa fa-tags" aria-hidden="true"></i><?php the_tags( '<strong>Từ khóa:</strong> ', ' , ', '<br />' ); ?> 
			</div>
		<?php } ?>
		
		<?php 
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
		?>
		<div id="crestashareiconincontent" class="cresta-share-icon first_style">
			<div class="sbutton crestaShadow facebook-cresta-share" id="facebook-cresta-c"><a rel="nofollow" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="Share to Facebook" onclick="window.open(this.href,'targetWindow','toolbars=0,location=0,status=0,menubar=0,scrollbars=1,resizable=1,width=640,height=320,left=200,top=200');return false;"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
			<div class="sbutton crestaShadow googleplus-cresta-share" id="googleplus-cresta-c"><a rel="nofollow" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="Share to Google Plus" onclick="window.open(this.href,'targetWindow','toolbars=0,location=0,status=0,menubar=0,scrollbars=1,resizable=1,width=640,height=320,left=200,top=200');return false;"><i class="fa fa-google-plus" aria-hidden="true"></i></a></div>
			<div class="sbutton crestaShadow linkedin-cresta-share" id="linkedin-cresta-c"><a rel="nofollow" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;source=<?php echo get_site_url(); ?>" title="Share to LinkedIn" onclick="window.open(this.href,'targetWindow','toolbars=0,location=0,status=0,menubar=0,scrollbars=1,resizable=1,width=640,height=320,left=200,top=200');return false;"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
			<div class="sbutton crestaShadow pinterest-cresta-share" id="pinterest-cresta-c"><a rel="nofollow" href="https://pinterest.com/pin/create/bookmarklet/?url=<?php the_permalink(); ?>&amp;media=<?php echo $image[0]; ?>&amp;description=<?php the_title(); ?>" title="Share to Pinterest" onclick="window.open(this.href,'targetWindow','toolbars=0,location=0,status=0,menubar=0,scrollbars=1,resizable=1,width=640,height=320,left=200,top=200');return false;"><i class="fa fa-pinterest" aria-hidden="true"></i></a></div>
			<div class="sbutton crestaShadow print-cresta-share" id="print-cresta-c"><a rel="nofollow" href="#" title="Print this page" onclick="window.print();"><i class="fa fa-print" aria-hidden="true"></i></a></div>
			<div style="clear: both;"></div>
		</div>
		
		<div class="interested">
			<?php
				$categories = get_the_category($post->ID);
				if ($categories) 
				{
					$category_ids = array();
					foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
			 
					$args=array(
						'category__in' => $category_ids,
						'post__not_in' => array($post->ID),
						'showposts'=>6,
						'caller_get_posts'=>1
					);
					$my_query = new wp_query($args);
					if( $my_query->have_posts() ) 
					{
						echo '<div class="title"><h4>Bài viết liên quan</h4></div><div class="related-loop list-news row">';
						while ($my_query->have_posts())
						{
							$my_query->the_post();
							?>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="new-img">
									<a href="<?php the_permalink(); ?>">
										<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post_cat_related' ); ?>
											<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" width="310">
									</a>
								</div>
								<h4>
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
										<?php the_title(); ?>
									</a>
								</h4>
							</div>
							<?php
						}
						echo '</div>';
					}
				}
				wp_reset_query();
			?>
		</div><!-- .interested -->
		
		<div class="comment-article">

		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Bình luận</a></li>
			<li role="presentation"><a href="#facebook" aria-controls="facebook" role="tab" data-toggle="tab">Facebook</a></li>
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="home">
			<?php

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			?>
			</div>
			<div role="tabpanel" class="tab-pane" id="facebook">
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1';
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="800" data-numposts="5"></div>
			</div>
		  </div>

		</div>
	</div><!-- #post-## -->
	
	<?php 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
	?>
	
	<script type="text/javascript">
	var offset = $('#button-share').offset();  
	$(window).scroll(function () {    
		var scrollTop = $(window).scrollTop(); 
		// check the visible top of the browser     
		if (offset.top < scrollTop) {
			var navbartoggle = $('.navbar-toggle');
			if ( $( "#logo2" ).length ) {
			}
			else{
				//$("#button-share").prepend(navbartoggle);
				$("#button-share").prepend(text);
				$("#button-share").css('margin','0');
			}    	
			$('#button-share').addClass('fixed-top');
			$('#single-share-count').addClass('single-share-count-scroll');
		   
		} else {
			$(".navbar-header").append($('#button-share .navbar-toggle'));
			
			$('#button-share').removeClass('fixed-top');
			$('#single-share-count').removeClass('single-share-count-scroll');
		   
			$("#button-share").css('margin','10px 0');
			$("#logo2").remove();
		}
	}); 
	
	var share = '<span class="share-img-icons"><a onclick="javascript:window.open(this.href,&#39;&#39;, &#39;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&#39;);return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a> <a onclick="javascript:window.open(this.href,&#39;&#39;, &#39;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&#39;);return false;"  href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fa fa-twitter"></i></a> <a onclick="javascript:window.open(this.href,&#39;&#39;, &#39;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&#39;);return false;"  href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a> <a onclick="javascript:window.open(this.href,&#39;&#39;, &#39;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&#39;);return false;"  href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $image[0]; ?>&description=<?php the_title(); ?>"><i class="fa fa-pinterest"></i></a></span>';
	
	$( ".entry.entry-content img" ).mouseenter(function() {
		if ( $( ".entry.entry-content .share-img" ).length ) {
		}
		else{
			$( ".entry.entry-content img" ).wrap( "<div class='share-img'></div>" );
		}
		
		if ( $( ".entry.entry-content .share-img-icons" ).length ) {
		}
		else{
			$(share).appendTo(".share-img");
		}
		
	});

	$( ".photo-cover img" ).mouseenter(function() {
		if ( $( ".photo-cover .share-img" ).length ) {
		}
		else{
			$( ".photo-cover img" ).wrap( "<div class='share-img'></div>" );
		}
		
		if ( $( ".photo-cover .share-img-icons" ).length ) {
		}
		else{
			$(share).appendTo(".share-img");
		}
		
	});
	</script>
</div>