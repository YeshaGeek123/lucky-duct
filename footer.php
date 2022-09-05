<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lucky-duct
 */

?>

<footer id="colophon" class="site-footer">
	<div class="top-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="contact-form">
						<h3 class="h3-title">Contact Us</h3>
						<?php
						echo do_shortcode('[contact-form-7 id="66" title="Footer Contact Form"]');
						?>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="footer-content">
						<div class="footer-logo">
							<a href="javascript:void(0);" title="Lucky Duct" class="custom-logo-link">
								<img width="330" height="106" src="<?php the_field('footer_logo','options'); ?>" alt="Footer Logo">
							</a>
						</div>
						<?php
							$phone = get_field('phone_number','option');
							$val = array("(", ")", " ", "-", ".");
							$replace = array("", "", "", "", "");
							$phone_link = str_replace($val, $replace, $phone);
                    	?>
						<div class="social-link">
							<ul>
								<li>
									<span class="icon"><img width="16" height="11" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/mail.svg" alt="Mail"></span>
									<a href="mailto:<?php the_field('email','options'); ?>" title="<?php the_field('email','options'); ?>"><?php the_field('email','options'); ?></a>
								</li>
								<li>
									<a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone; ?>" class="phone"><span class="callus"><?php echo $phone; ?></span></a>
								</li>
								<li>
									<span class="icon"><img width="12" height="17" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/map.svg" alt="Mail"></span>
									<a href="<?php the_field('address_link','options'); ?>" title="<?php the_field('address','options'); ?>" target="_blank"><?php the_field('address','options'); ?></a>
								</li>
							</ul>
							<ul>
								<li>
									<a href="<?php the_field('facebook_link','options'); ?>" target="_blank" title="Follow Us On Facebook"><i class="fa fa-facebook-f"></i></a>
								</li>
								<li>
									<a href="<?php the_field('twitter_link','options'); ?>" target="_blank" title="Follow Us On Twitter"><i class="fa fa-twitter"></i></a>
								</li>
							</ul>
						</div>
						<div class="client">
							<ul>
								<?php
								if(have_rows('brand_logo','options')):
									while(have_rows('brand_logo','options')): the_row();
								?>
								<li>
									<a href="<?php the_sub_field('footer_brand_logo_link'); ?>"  title="Contact Us" target="_blank"><img width="100" height="85" src="<?php the_sub_field('footer_brand_logo'); ?>" alt="Brand Logo"></a>
								</li>
								<?php
									endwhile;
								endif;
								?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom-box">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer-bottom-text">
						<div class="footer-menu">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-menu',
								)
							);
							?>
						</div>
						<div class="footer-bottom-link">
							<ul>
								<li>
									&copy; <?php echo date('Y'); ?> Lucky Duct
								</li>
								<li><a href="<?php echo home_url(); ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
								<li><a href="<?php echo home_url(); ?>/terms-of-use" title="Terms of Service">Terms of Use</a></li>
								<li><a href="<?php echo home_url(); ?>/cookie-policy" title="Cookies Policy">Cookies Policy</a></li>
							</ul>
						</div>
						<div class="footer-other-link">
							<p>Web Design &amp; Digital Marketing with <span><i class="fa fa-heart" aria-hidden="true"></i></span> by <a href="https://www.dotcomdesign.com" target="_blank" title="Dotcom Design" class="dotcom-link">Dotcom Design</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->

<!-- CTA  Button Start -->
<div class="cta-btn">
        <a href="tel:<?php echo $phone_link; ?>" title="Call <?php echo $phone; ?>" class="sec-btn lg-btn">call <span class="callus"><?php echo $phone; ?></span></a>
    </div>
    <!-- CTA  Button Start -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>

</html>