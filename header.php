<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mint-smartwash
 */

$logo = get_field('logo', 'options');

$show_action_bar = get_field('show_action_bar', 'options');
$action_bar_left_text = get_field('action_bar_left_text', 'options');
$action_bar_right_text = get_field('action_bar_right_text', 'options');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class("relative text-root-grey font-base font-normal antialiased"); ?>>

<?php wp_body_open(); ?>
<?php // include_once('template-parts/loader.php'); ?>

<div id="page" class="relative">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'mint-smartwash' ); ?></a>

	<header id="header" class="header absolute top-0 inset-x-0 z-40">
		<?php if($show_action_bar): ?>
			<div class="header--action-bar bg-root-green text-white py-3">
				<div class="container text-center lg:flex lg:justify-between lg:items-center">
					<?php if($action_bar_left_text): ?>
						<div class="header--action-bar__left rich-text text-lg lg:text-xl">
							<?php echo $action_bar_left_text; ?>
						</div>
					<?php endif; ?>
	
					<?php if($action_bar_right_text): ?>
						<div class="rich-text lg:text-lg">
							<?php echo $action_bar_right_text; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</header>


	<nav id="navigation" class="fixed top-0 inset-x-0 z-40 -translate-y-full bg-custom-black_light text-white pt-[6.438rem] pb-5 lg:pt-[8.25rem] lg:pb-6 navigation" aria-disabled="true">
		<div class="custom-container lg:flex lg:justify-between">

			<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'main-navigation',
						'container'       => 'ul',
						'menu_class'      => 'flex flex-col navigation-main-menu',
					)
				);
			?>

		</div>
	</nav>
