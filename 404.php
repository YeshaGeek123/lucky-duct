<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package lucky-duct
 */

get_header();
?>
<!-- Start of Inner Banner -->
<section class="main-banner inner-banner">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="banner-content">
					<h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'redeluxe' ); ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of Inner Banner -->

<!-- 404 Page Section Start -->
<div class="inner-page-text error-404 not-found text-center">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img width="329" height="273" src="<?php echo home_url(); ?>/wp-content/themes/lucky-duct/assets/images/404.svg" alt="404 Not Found!">
			</div>
		</div>
	</div>
</div>
<!-- 404 Page Section End -->

<?php
get_footer();
