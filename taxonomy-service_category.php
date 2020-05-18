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

<main id="primary" class="site-main">

  <div class="page__container _container">

    <?php $attachment_id = get_field('header_cat_serv');
    $size = "header";
    $image = wp_get_attachment_image_src($attachment_id, $size);
    $header_image = $image[0];
    if ($header_image) {
      $header_image = $header_image;
    } else {
      $header_image = get_template_directory_uri() . '/images/services/fon.jpg';
    }
    ?>
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

    <?php the_archive_description('<div class="archive-description">', '</div>'); ?>

  </div>

</main><!-- #main -->

<?php
//get_sidebar();
get_footer();