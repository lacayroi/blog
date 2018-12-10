<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css">
	<link
	href="<?php echo get_template_directory_uri() ?>/css/awebew-from.css" rel="stylesheet" type="text/css" />
	<?php wp_head(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri() ?>/js/jquery.min.js'></script>
</head>

<body <?php body_class(); ?>>
    <div class="hfeed site row-offcanvas row-offcanvas-left">
        <header>
            <script>
                $(function() {
                    //caches a jQuery object containing the header element
                    var header = $(".navbar-fixed-top");
                    $(window).scroll(function() {
                        var scroll = $(window).scrollTop();

                        if (scroll >= 80) {
                            $('.navbar-fixed-top').fadeIn("400");

                        } else {
                            $('.navbar-fixed-top').hide();

                        }
                    });
                });
            </script>
            <div role="navigation" class="navbar navbar-default navbar-fixed-top-home navbar-home">
                <div class="container">
                    <div class="navbar-header">
                        <button data-target=".navbar-collapse" data-toggle="offcanvas" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
					<?php
						$link 	= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					?>
                        <?php twentysixteen_the_custom_logo(); ?>
                        <div id="mobile-search" class="visible-xs pull-right"><i class="fa fa-search"></i>
                            <div id="search2" class="search2">
                                <form action="<?php echo esc_url( home_url( '/' ) ); ?>search/" class="searchform" method="GET">
                                    <div>
                                        <input type="text" class="s" name="q" value="" />
                                        <input type="submit" value="Search" class="searchsubmit" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-collapse collapse sidebar-offcanvas">
						<?php 
							wp_nav_menu( array(
								'menu' 			=> 'Main Menu' ,
								'menu_id' 		=> 'menu-mn-home-top',
								'menu_class' 	=> 'nav navbar-nav',
								'container' 	=> '')
							);
						?>
                        <div class="social-icons navbar-right hidden-sm hidden-xs">
                            <ul>
                                <li class="click-search">
                                    <a><i class="fa fa-search"></i></a>
                                    <div id="search" class="search">
                                        <div class="navbar-form hidden-sm">
                                            <form action="<?php echo esc_url( home_url( '/' ) ); ?>search/" class="searchform" method="GET">
                                                <div>
                                                    <input type="text" class="s" name="q" value="" />
                                                    <input type="submit" value="Search" class="searchsubmit" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="click-social"><a><i class="fa fa-facebook"></i></a><a><i class="fa fa-twitter"></i></a><a><i	class="fa fa-google-plus"></i></a>
                                    <div id="social">
                                        <div class="pull-right">
                                            <div class="btn-like">
                                                <div id="fb-root"></div>
											<script>(function(d, s, id) {
											  var js, fjs = d.getElementsByTagName(s)[0];
											  if (d.getElementById(id)) return;
											  js = d.createElement(s); js.id = id;
											  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=1655431778095019';
											  fjs.parentNode.insertBefore(js, fjs);
											}(document, 'script', 'facebook-jssdk'));</script>
											<div class="fb-like" data-href="https://www.facebook.com/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                                            </div>
                                            <div class="btn-plus">
                                                <!-- Đặt thẻ này vào nơi bạn muốn nút chia sẻ kết xuất. -->
										<div class="g-plus" data-action="share" data-href="<?php echo get_site_url(); ?>"></div>

										<!-- Đặt thẻ này sau thẻ chia sẻ cuối cùng. -->
										<script type="text/javascript">
										  window.___gcfg = {lang: 'vi'};

										  (function() {
											var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
											po.src = 'https://apis.google.com/js/platform.js';
											var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
										  })();
										</script>
                                            </div>
                                            <div class="btn-tweet">
                                                <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_site_url(); ?>" data-count="horizontal">Tweet</a>
                                            </div>
                                            <a href="<?php echo get_home_url(); ?>/feed/" title="Vina RSS Feed"><i
										class="fa fa-rss-square"></i></a> <i class="fa fa-envelope-o"></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="sidebar-offcanvas" id="mobile-menu">
			<?php 
				wp_nav_menu( 
					array(
					'menu' 			=> 'Main Menu' ,
					'menu_id' 		=> 'menu-mn-home-mobile',
					'menu_class' 	=> 'visible-xs mobile-nav',
					'container' 	=> '')
				);
			?>
        </div>
		<!-- end header -->