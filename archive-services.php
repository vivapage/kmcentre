<?php

/**
 * The template for displaying archive pages
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

					the_archive_title('<h1 class="page-title">', '</h1>');
					?>
        </div>
      </div>
    </header><!-- .page-header -->
    <?php
		$id = 29;
		$p = get_page($id);
		echo apply_filters('the_content', $p->post_content);
		?>
  </div>
</main><!-- #main -->

<?php
get_footer();