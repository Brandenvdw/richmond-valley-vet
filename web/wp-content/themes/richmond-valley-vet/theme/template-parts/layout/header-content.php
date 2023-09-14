<?php use Victoria\Constants;
$menu_id = 'primary_menu';
$header_logo = \Victoria\Settings\Site::get("header_logo");
$top_header_buttons = Victoria\Settings\Site::get("top_header_buttons");
$header_title = Victoria\Settings\Site::get("header_title");
?>

<header id="masthead" class="header-shadow z-[2000] bg-white top-0">
	<?php if($top_header_buttons):?>
		<div class="container flex flex-wrap gap-y-3 mt-[15px] mb-2.5 justify-center md:gap-0 md:justify-end">
			<?php foreach($top_header_buttons as $top_header_button): ?>
				<div class="flex justify-center items-center rounded-[20px] bg-tertiary leading-5 text-sm mr-2.5 py-1.5 px-2.5 min-w-[230px] md:min-w-max max-w-[40%] min-h-[60px] md:w-max md:min-h-full">
					<a href="<?php echo esc_attr($top_header_button["button_link"]) ?>" class="text-white">
						<?php echo esc_html($top_header_button["button_text"]) ?>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
	<div class="flex container text-primary justify-center mb-[15px] lg:min-h-[90px]">
		<div class="mr-2">
			<a href="<?php echo home_url('/'); ?>">
				<?php echo wp_get_attachment_image($header_logo) ?>
			</a>
		</div>
			<a href="<?php echo home_url('/'); ?>">
				<h1 class="text-[10px] leading-[70px] [text-shadow:_0_1px_0_rgba(204,204,204,1),_0_2px_0_rgba(201,201,201,1),_0_3px_0_rgba(187,187,187,1),_0_4px_0_rgba(185,185,185,1),_0_5px_0_rgba(170,170,170,1),_0_6px_1px_rgba(0,0,0,.1),_0_0_5px_rgba(0,0,0,.1),_0_1px_3px_rgba(0,0,0,.3),_0_3px_5px_rgba(0,0,0,.2),_0_5px_10px_rgba(0,0,0,.25),_0_10px_10px_rgba(0,0,0,.2)] sm:text-[29px] lg:text-[50px]"><?php echo esc_html($header_title) ?></h1>
			</a>
	</div>
<div class="bg-primary ">
	<div class="mx-auto flex min-h-[48px] lg:min-h-[60px]">
		<nav id="site-navigation" class="flex items-center w-full">
			<button data-menu-id="<?php echo $menu_id; ?>" class="group block lg:hidden menu-toggler  mr-5 z-[501]" aria-controls="primary-menu" aria-expanded="false">
				<div class="space-y-[8px] transform duration-300">
					<?php
					$hamburger_string = sprintf('<div class="w-8 h-0.5 %s duration-300 transition-all"></div>', Constants::get('hamburger-color'));
					echo wp_kses_post( implode("\n", array_fill(0, 3, $hamburger_string)) );
					?>
				</div>
			</button>


			<div id="<?php echo esc_attr($menu_id); ?>" class="w-full relative responsive-menu text-2xl lg:text-xs">
			<?php
			wp_nav_menu(
					array(
							'theme_location'  => 'menu-1',
							'container' => false,
							'menu_class' => 'menu-list',
							'walker'          => new \Victoria\Tailwind_Navwalker(),
							'depth'           => 2,
					));
			?>
			</div>
		</nav>
	</div><!-- #site-navigation -->
	</div>
</header>
