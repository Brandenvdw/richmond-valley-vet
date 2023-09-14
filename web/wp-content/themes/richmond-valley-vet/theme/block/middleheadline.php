<?php

use Victoria\Utils;

$id          = basename( __FILE__ ) . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$class_name   = '';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

$middle_headline_text = get_field("middle_headline_text");
$middle_headline_buttons = get_field("middle_headline_buttons")

?>

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class_name ); ?> bg-secondary p-35">
<div class="flex justify-center items-center container flex-col text-center p-9 text-white">
    <?php if($middle_headline_text): ?>
      <?php foreach($middle_headline_text as $paragraph): ?>
        <p class="m-0"><?php echo wp_kses_post($paragraph["paragraph"])?></p>
      <?php endforeach; ?>
    <?php endif;?>
    <?php if($middle_headline_buttons): ?>
      <div class="flex flex-col md:flex-row">
        <?php foreach($middle_headline_buttons as $button): ?>
          <a class="bg-primary min-w-[150px] py-2 border rounded border-[rgba(204,204,204,1)_rgba(204,204,204,1)_rgba(187,187,187,1)] transition-all hover:opacity-80 duration-300" href="<?php echo Utils::get_link_attributes($button["button"]) ?>">
            <?php echo wp_kses_post($button["button"]["title"])?>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif;?>
</section>