<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mint-smartwash
 */

$footer_logo = get_field('footer_logo', 'options');
$footer_description = get_field('footer_description', 'options');

$copyright = get_field('copyright', 'options');

$facebook = get_field('facebook', 'options');
$instagram = get_field('instagram', 'options');
$twitter = get_field('twitter', 'options');
$whatsapp = get_field('whatsapp', 'options');

$title_company = get_field('title_company', 'options');

$title_find_us = get_field('title_find_us', 'options');
$find_us = get_field('find_us', 'options');

$title_hours = get_field('title_hours', 'options');
$hours = get_field('hours', 'options');
?>

	<footer class="relative pt-10 md:pt-24 footer">
		<div class="relative z-10 container grid grid-cols-2 gap-10 pb-5 sm:grid-cols-3 md:grid-cols-12 md:gap-x-0 md:pb-24">
			
			<div class="col-span-2 sm:col-span-3 md:col-span-3">
				<?php if($footer_logo): ?>
					<figure class="block mx-auto w-40 md:mr-auto md:ml-0 lg:w-fit">
                        <img loading="lazy" class="block w-full" src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>" />
                    </figure>
				<?php endif; ?>

				<?php if($footer_description): ?>
					<div class="mt-7 text-center md:text-left">
						<?php echo $footer_description; ?>
					</div>
				<?php endif; ?>

				<div class="mt-6 flex justify-center md:justify-start">
					<?php if($facebook): ?>	
						<a class="mr-5 last:mr-0" href="<?php echo $facebook["url"] ?>" <?php if ( ! empty( $facebook["target"] ) ): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>>
							<?php do_action("get_icon", "facebook", "block w-8 lg:w-9"); ?>
						</a>
					<?php endif; ?>

					<?php if($instagram): ?>	
						<a class="mr-5 last:mr-0" href="<?php echo $instagram["url"] ?>" <?php if ( ! empty( $instagram["target"] ) ): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>>
							<?php do_action("get_icon", "instagram", "block w-8 lg:w-9"); ?>
						</a>
					<?php endif; ?>

					<?php if($twitter): ?>	
						<a class="mr-5 last:mr-0" href="<?php echo $twitter["url"] ?>" <?php if ( ! empty( $twitter["target"] ) ): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>>
							<?php do_action("get_icon", "twitter", "block w-8 lg:w-9"); ?>
						</a>
					<?php endif; ?>

					<?php if($whatsapp): ?>	
						<a class="mr-5 text-white last:mr-0" href="<?php echo $whatsapp["url"] ?>" <?php if ( ! empty( $whatsapp["target"] ) ): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>>
							<?php do_action("get_icon", "whatsapp", "block w-8 lg:w-9"); ?>
						</a>
					<?php endif; ?>
				</div>

			</div>

			<div class="sm:col-span-1 md:col-start-5 md:col-end-8">
				<?php if($title_company): ?>
					<h6 class="text-root-green font-bold text-lg mb-5 lg:mb-7">
						<?php echo $title_company; ?>
					</h6>
				<?php endif; ?>

				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'footer-navigation',
							'container'       => 'ul'
						)
					);
				?>

			</div>

			<div class="sm:col-span-1 md:col-span-3">
				<?php if($title_find_us): ?>
					<h6 class="text-root-green font-bold text-lg mb-5 lg:mb-7">
						<?php echo $title_find_us; ?>
					</h6>
				<?php endif; ?>

				<?php if($find_us): ?>
					<div class="footer--list">
						<?php echo $find_us; ?>
					</div>
				<?php endif; ?>

			</div>

			<div class="col-span-2 sm:col-span-1 md:col-span-2">
				<?php if($title_hours): ?>
					<h6 class="text-root-green font-bold text-lg mb-5 lg:mb-7">
						<?php echo $title_hours; ?>
					</h6>
				<?php endif; ?>

				<?php if($hours): ?>
					<div class="footer--list">
						<?php echo $hours; ?>
					</div>
				<?php endif; ?>

			</div>

		</div>

		<?php if($copyright): ?>
			<div class="relative z-10 container">
				<div class="py-5 border-t text-center text-root-grey-secondary md:py-10">
					<?php echo $copyright; ?>
				</div>
			</div>
		<?php endif; ?>

		<figure class="absolute inset-0 z-0 opacity-10">
			<img loading="lazy" role="presentation" class="w-full h-full object-cover object-center" src="<?php echo get_template_directory_uri(); ?>/dist/FooterPhoto.png" />
		</figure>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
