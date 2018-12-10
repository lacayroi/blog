<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


<div id="post-<?php the_ID(); ?>" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hentry" itemscope="" itemtype="http://schema.org/Article">
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'single-post-thumbnail' ); ?>
    <meta content="<?php echo $image[0]; ?>" itemprop="image">
    <meta content="<?php the_permalink(); ?>" itemprop="url">
    <div class="inner-item">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('post_cat', array('class' => 'theme-thumb')); ?> 
			</a>
		</a>
    </div>
    <h2 class="entry-title" itemprop="name headline"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    <div class="entry-meta">
		<?php 
			$author_id=$post->post_author;
			echo the_author_meta( 'display_name' , $author_id ); 
		?>
        <br>
        <time itemprop="dateCreated" class="meta-date updated" datetime="<?php the_time(get_option('date_format')); ?>">
            <meta itemprop="datePublished" content="<?php the_time(get_option('date_format')); ?>"><?php the_time(get_option('date_format')); ?></time>
        <span class="vcard author hidden"><span itemprop="author" class="fn"><i class="fa fa-user"></i> <?php 
			$author_id=$post->post_author;
			echo the_author_meta( 'display_name' , $author_id ); 
		?></span></span>
        <div class="share-wrap">
            <div class="share" id="share_<?php the_ID(); ?>">
                <span id="text_share_<?php the_ID(); ?>" class="text-share"><i class="fa fa-share"></i></span>
                <div id="icon_share_<?php the_ID(); ?>" class="social hidden">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a>
                    <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a>
                    <a href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" title="Share on Pinterest" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
