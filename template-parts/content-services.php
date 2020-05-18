<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kmcentre
 */

?>

<?php $header_image = get_the_post_thumbnail_url(get_the_ID(), 'header');;
if ($header_image) {
	$header_image = $header_image;
} else {
	$header_image = get_template_directory_uri() . '/images/services/fon.jpg';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header page-header">
    <div class="page-header__image" style="background-image: url('<?php echo $header_image; ?>');">
      <div class="page-header__container">

        <?php

				if (function_exists('yoast_breadcrumb')) {
					yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
				}

				the_title('<h1 class="entry-title">', '</h1>');
				?>

      </div>
    </div>
  </header><!-- .entry-header -->


  <div class="entry-content">
    <?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'kmcentre'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'kmcentre'),
				'after'  => '</div>',
			)
		);
		?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <?php kmcentre_entry_footer(); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->