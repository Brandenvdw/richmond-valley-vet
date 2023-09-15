
<?php

$id          = basename( __FILE__ ) . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$class_name   = '';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

$hero_cover_text = get_field("hero_cover_text");
$background_cover = get_field("background_cover");
$mobile_image = get_field("mobile_image");

$background_cover_url = null;
if($background_cover) :
    $background_cover_url = wp_get_attachment_url($background_cover);
endif;

$mobile_image_url = null;
if($mobile_image) :
    $mobile_image_url = wp_get_attachment_image_url($mobile_image, "full");
endif;


?>

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class_name ); ?> max-h-[650px] relative block overflow-hidden">
	<?php if($background_cover_url): ?>
        <video class="relative z-[-1] hidden bottom-[150px] md:block w-full align-baseline m-0" muted autoplay loop>
            <source src="<?php echo esc_attr( $background_cover_url) ?>" type="video/mp4" />
        </video>
        <div class="absolute bg-[rgba(255,255,255,.7)] top-1/2 left-1/2 bottom-0 h-full w-1/3 -translate-y-1/2 z-[2] flex items-center justify-center text-center px-9">
            <div class=" border-l-4 border-red-500 p-7 text-center text-lg"><?php echo $hero_cover_text ?></div>
        </div>
    <?php endif; ?>
    <?php if($mobile_image_url) :?>
        <img class="w-full m-0 md:hidden" src="<?php echo $mobile_image_url ?>" alt="mobile_image" />
    <?php endif;?>
</section>

