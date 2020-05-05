<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kmcentre
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

<script src="https://use.fontawesome.com/1e8ecfac9b.js"></script>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
	<div class="top-header">
	<div class="top-header__container _container">
		<div class="top-header__item"><?php do_action('wpml_add_language_selector');?></div>
		<div class="top-header__item"><i class="fa fa-phone" aria-hidden="true"></i><span> +38 (044) 272 11 75</span>   <span>+38 (095) 438 68 71</span>   <span>+38 (067) 186 18 70</span></div>
		<div class="top-header__item"><i class="fa fa-map-marker" aria-hidden="true"></i> м. Київ, вул. Січових Стрільців (Артема), 5-Б, оф. 23</div>
		<div class="top-header__item"><i class="fa fa-clock-o" aria-hidden="true"></i> пн-пт 9:00 - 20:30  сб 10:00 - 18:00</div>
		<div class="top-header__item">
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>	
		</div>
	</div>
	</div><!-- .top-header -->
		<div class="site-branding">
		<div class="site-branding__container _container">
		<div class="site-branding_logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>"></a>
		</div>
		<?php $kmcentre_description = get_bloginfo( 'description', 'display' ); ?>
		<div class="site-branding_description"><p class="site-description"><?php echo $kmcentre_description;?></p></div>

		
			<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kmcentre' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>

		</nav><!-- #site-navigation -->
		<div class="site-branding_button">
		<div class="actions">
    <div class="actions-content"><a class="btn rounded" href="#"><span>Записатися на прийом </span></a></div>
  </div>
		</div>
		</div><!-- .site-branding -->
		
	</header><!-- #masthead -->
