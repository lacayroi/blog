<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
	<footer>
		<div class="container">
			<div class="col-lg-2 col-md-3 col-sm-3 hidden-xs">
				<div class="logo-footer">
					<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png" alt="<?php bloginfo( 'name' ); ?>" id="logo-footer" /></a>
				</div>
			</div>
			<div class="col-lg-4 visible-lg">
				<div class="row">
					<p class="site-tile-left">Copyright &copy; 2018</p>
					<h1 class="site-title"><a href="<?php echo get_home_url(); ?>" title="<?php bloginfo( 'name' ); ?>">Digitech</a></h1>
					<p class="site-tile-right">. All Rights Reserved.</p>
				</div>
				<div itemscope="" itemtype="http://schema.org/LocalBusiness">
					<div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
						<span itemprop="streetAddress">Tầng 3 số 349 Ngõ 191</span>, <span itemprop="addressLocality">Minh Khai</span>, <span itemprop="addressRegion">Hai Bà Trưng, Hà Nội.</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-5 col-sm-5 hidden-xs">
				<h4>Vina.com | Theo dõi chúng tôi:</h4>
				<span class="bottom-social">
					<a href="https://www.facebook.com/" target="_blank"><i
					class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i
					class="fa fa-twitter"></i></a> <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a> <a href="#/" target="_blank"><i class="fa fa-rss"></i></a>
				</span>
			</div>
			<div class="hidden-lg hidden-md hidden-sm col-xs-12 footer-mobile">
				<h4>Vina.com | Theo dõi chúng tôi:</h4>
				<p><span class="bottom-social"><a
					href="https://www.facebook.com/"><i
					class="fa fa-facebook"></i></a> <a
					href="#"><i
					class="fa fa-twitter"></i></a>
					<a
					href="https://plus.google.com/"><i
					class="fa fa-google-plus"></i></a> <a
					href="#"><i
					class="fa fa-pinterest"></i></a> <a
					href="<?php echo get_home_url(); ?>/rss/"><i
					class="fa fa-rss"></i></a>
				</span>
				</p>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<div class="newsletter-content">
					<div class="textwidget hidden-xs">
						<h4><span class="hidden-sm">Đăng ký nhận bản tin</span><span class="visible-sm">Đăng ký nhận bản tin</span></h4>
					</div>
					<div id="email-form-footer">
						<form method="post" class="af-form-wrapper" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl" target="edit_new">
							<div style="display: none;">
								<input type="hidden" name="meta_web_form_id" value="1273624904" />
								<input type="hidden" name="meta_split_id" value="" />
								<input type="hidden" name="listname" value="awlist3913805" />
								<input type="hidden" name="redirect" value="http://vkool.com/thank-you/" id="redirect_0d87bdb0fc51a1043da3cf023dd4cad9" />
								<input type="hidden" name="meta_adtracking" value="VKool_Subscribers_Right_Sidebar" />
								<input type="hidden" name="meta_message" value="1001" />
								<input type="hidden" name="meta_required" value="email" />
								<input type="hidden" name="meta_tooltip" value="email||Enter your email address here" />
							</div>
							<div id="af-form-1273624904" class="af-form">
								<div id="af-body-1273624904" class="af-body af-standards">
									<div class="af-element">
										<label class="previewLabel" for="awf_field-74058140"></label>
										<div class="af-textWrap">
											<input class="text" id="awf_field-74058140" type="text" name="email" value="Enter your email address here" tabindex="500" onfocus=" if (this.value == 'Enter your email address here') { this.value = ''; }" onblur="if (this.value == '') { this.value='Enter your email address here';} " />
										</div>
										<div class="af-clear"></div>
									</div>
									<div class="af-element buttonContainer">
										<input name="submit" class="submit" type="submit" value="Let Me In" tabindex="501" />
										<div class="af-clear"></div>
									</div>
									<span class="icon-email"><i class="fa fa-envelope"></i></span>
								</div>
							</div>
							<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jEzszGxMLJwMLA==" alt="" />
							</div>
						</form>
						<script type="text/javascript">
							(function() {
								var IE = /*@cc_on!@*/ false;
								if (!IE) {
									return;
								}
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
							})();
						</script>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<a id="back-to-top" href="#" rel="nofollow"></a>
    </div>
<?php wp_footer(); ?>	
</body>
</html>