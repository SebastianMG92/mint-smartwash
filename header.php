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

$cta_link = get_field('cta_link', 'options');
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
<div id="page" class="relative">
	<!-- Loader -->
	<div data-loader class="fixed inset-0 z-[100] bg-root-blue loader">
		<div class="loader--spinner">
		</div>
	</div>

	<header id="header" class="header absolute top-0 inset-x-0 z-40">
		<?php if($show_action_bar): ?>
			<div class="header--action-bar bg-root-green text-white py-3">
				<div class="container text-center md:flex md:justify-between md:items-center">
					<?php if($action_bar_left_text): ?>
						<div class="header--action-bar__left rich-text leading-none text-lg lg:text-xl">
							<?php echo $action_bar_left_text; ?>
						</div>
					<?php endif; ?>
	
					<?php if($action_bar_right_text): ?>
						<div class="rich-text mt-2 lg:mt-0 lg:text-lg">
							<?php echo $action_bar_right_text; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>

		<div class="pt-9 inset-x-0 top-0 header--main">
			<div class="container flex justify-between items-center">
				<div class="basis-1/3">
					<?php if($logo): ?>
						<figure class="header--logo">
							<a class="block" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="Go to homepage">
								<img  src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
							</a>
						</figure>
					<?php endif; ?>
				</div>
	
				<div class="flex justify-end basis-2/3 items-center">
					<?php if($cta_link): ?>
						<a aria-label="Go to <?php echo $cta_link["title"]; ?>" class="button button__green button__icon button__icon-top mr-5 font-semibold text-lg" href="<?php echo $cta_link["url"] ?>" <?php if ( ! empty( $cta_link["target"] ) ): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>>
							<div class="hidden mr-5 md:block">
								<?php echo $cta_link["title"]; ?>
							</div>
							<?php do_action("get_icon", "location", "block w-4"); ?>
						</a>
					<?php endif; ?>
	
					<button type="button" class="p-2 text-white header--hamburger" aria-label="open navigation">
						<?php do_action("get_icon", "hamburger", "block w-7 md:w-12"); ?>
					</button>
				</div>
			</div>
		</div>
	</header>


	<nav id="navigation" class="fixed inset-0 z-50 bg-root-blue text-white header--navigation">
		<div class="relative z-10 container pt-[9.375rem] pb-10 h-full md:pt-[7.0625rem] lg:pt-28">
			<div class="flex justify-end text-white">
				<button type="button" class="header--close-button" aria-label="close navigation">
					<?php do_action("get_icon", "close", "block w-7 md:w-12"); ?>
				</button>
			</div>

			<div class="text-center h-full flex justify-center pt-24">
				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'main-navigation',
							'container'       => 'ul',
							'menu_class'      => 'text-2xl font-bold header--list md:text-4xl',
						)
					);
				?>
			</div>
		</div>

		<figure class="pointer-events-none absolute inset-x-0 bottom-0 top-1/3 z-0 opacity-40">
			<img  class="mx-auto w-full h-full object-cover object-top" src="<?php echo get_template_directory_uri(); ?>/dist/Lightblue.webp" role="presentation" />
		</figure>
	</nav>
