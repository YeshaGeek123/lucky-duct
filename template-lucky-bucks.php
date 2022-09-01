<?php
/**
 * Template Name: Lucky Bucks
 */
get_header();
?>
   	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
			get_template_part( 'template-parts/content', 'lucky-bucks' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();