<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kmcentre
 */

get_header();

?>

	<main id="primary" class="site-main">
<div class="overflow_hidden">
	<div class="radius_niz_mini">
	<div class="top-slider">
	<?php add_revslider('slider-top'); ?>
	</div>
	</div>
	</div>
	<div class=" row services">
	<div class="overflow_hidden">
				<div class="radius_row_niz services_row">
							<div class="services__container _container">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit magnam deleniti, sint, <br>maiores recusandae consequatur vel minima commodi, doloribus iure et? Voluptates maxime quis <br>veritatis obcaecati expedita aut <br>provident nesciunt!
							</div>	
			</div>
			</div>
</div>
	<div class="site-main__container _container">
	123
	</div>
	
	</main><!-- #main -->

<?php
get_footer();
