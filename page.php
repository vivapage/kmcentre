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

<?php $header_image = get_the_post_thumbnail_url(get_the_ID(), 'header');;
if ($header_image) {
	$header_image = $header_image;
} else {
	$header_image = get_template_directory_uri() . '/images/services/fon.jpg';
}
?>

<main id="primary" class="site-main">
  <div class="page__container _container">
    <header class="page-header">
      <div class="page-header__image" style="background-image: url('<?php echo $header_image; ?>');">
        <div class="page-header__container">

          <?php

					if (function_exists('yoast_breadcrumb')) {
						yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
					}

					the_title('<h1 class="page-title">', '</h1>');
					?>
        </div>
      </div>

      <?php
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/content', 'page');


			endwhile; // End of the loop.
			?>
  </div>
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();