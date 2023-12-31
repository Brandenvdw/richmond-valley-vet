<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */
 use Victoria\Settings\Site;
 use Victoria\Utils;

 $footer_left = Site::get("footer_left");
 $footer_left_title = $footer_left["title"];
 $footer_left_button_link = $footer_left["button_link"];
 $footer_right = Site::get("footer_right");
 $footer_right_title = $footer_right["title"];
 $footer_right_icons = $footer_right["icons"];
 $sub_footer = Site::get("sub_footer");
 $sub_footer_copyright_line = $sub_footer["copyright_line"];
 $sub_footer_statenweb_link = $sub_footer["staten_web"];
 $sub_footer_jpi_link = $sub_footer["jpi"];
 $phone = Site::get("phone");
 $address = Site::get("address");
 $fax = Site::get("fax");

?>

<footer id="colophon" class="bg-primary pt-9">
	<div class="container justify-between flex flex-col lg:flex-row">
		<div class="flex flex-col max-w-[390px] justify-center items-center">
			<p class="text-white text-2xl text-center mb-4"><?php echo wp_kses_post($footer_left_title)?></p>
			<div class="max-w-[200px] flex items-center flex-col text-sm">
				<?php if($address):?>
					<p class="text-center"><?php echo wp_kses_post($address)?></p>
				<?php endif ?>
				<?php if($phone):?>
					<p class="text-center">Phone:<a class="underline hover:no-underline" href="tel:<?php echo wp_kses_post($phone)?>"><?php echo wp_kses_post($phone)?></a></p>
				<?php endif ?>
				<?php if($fax):?>
					<p class="text-center">Fax:<?php echo wp_kses_post($fax)?></p>
				<?php endif ?>
				<?php if($footer_left_button_link): ?>
					<a class="bg-foreground p-[15px] hover:opacity-80 duration-300 text-primary rounded flex mt-5" <?php echo Utils::get_link_attributes($footer_left_button_link) ?>>
						<?php echo wp_kses_post($footer_left_button_link["title"]) ?>
					</a>
				<?php endif?>
			</div>
		</div>
		<div class="flex flex-col items-center mt-5 lg:mt-0">
			<p class="text-white text-2xl text-center"><?php echo wp_kses_post($footer_right_title)?></p>
			<div class="flex gap-3 my-4">
				<?php foreach((array)$footer_right_icons as $icon): ?>
					<?php if($icon["social_media_icon"] === "Facebook"):?>
						<a href="https://www.facebook.com/RVVet/" class="rounded-full w-9 h-9 flex items-center justify-center bg-transparent hover:bg-blue-400 duration-300">
							<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512" fill="white"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
						</a>
					<?php endif; ?>
					<?php if($icon["social_media_icon"] === "Twitter"):?>
						<a href="https://www.facebook.com/RVVet/" class="rounded-full w-9 h-9 flex items-center justify-center bg-transparent hover:bg-blue-200 duration-300">
						<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="white"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
						</a>
					<?php endif; ?>
					<?php if($icon["social_media_icon"] === "Instagram"):?>
						<a href="https://www.facebook.com/RVVet/" class="rounded-full w-9 h-9 flex items-center justify-center bg-transparent hover:bg-red-400 duration-300">
						<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" fill="white"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
						</a>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<div class="w-full container flex flex-col items-center justify-center text-xs gap-2.5">
		<?php echo wp_kses_post(do_shortcode($sub_footer_copyright_line))?>
		<p class="mb-2.5">
			Powered by <a class="underline hover:no-underline" <?php echo Utils::get_link_attributes($sub_footer_statenweb_link)?>><?php echo wp_kses_post($sub_footer_statenweb_link["title"])?></a> and <a class="underline hover:no-underline" <?php echo Utils::get_link_attributes($sub_footer_jpi_link)?>><?php echo wp_kses_post($sub_footer_jpi_link["title"])?></a>
		</p>
	</div>

</footer><!-- #colophon -->
