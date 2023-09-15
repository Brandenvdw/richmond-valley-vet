<?php

namespace Victoria\Blocks;

use Victoria\Base\Thing;

class FeatureBlog extends Thing {

	const BLOCK_SLUG = 'featureblog';
	const BLOCK_NAME = 'StatenWeb Feature Blog';

	public function attach_hooks() {
		if ( function_exists( 'acf_register_block_type' ) ) {
			add_action( 'acf/init', array( $this, 'register' ) );
		}
	}

	public function register() {
		// register a testimonial block.
		acf_register_block_type(
			array(
				'name'            => sprintf('sw-%s', self::BLOCK_SLUG),
				'title'           => __( self::BLOCK_NAME ),
				'description'     => __( self::BLOCK_NAME ),
				'render_template' => sprintf('block/%s.php', self::BLOCK_SLUG),
				'category'        => 'common',
				'icon'            => 'admin-site',
				'keywords'        => array( self::BLOCK_NAME ),
				'align'           => 'full',
				'mode'			=> 'preview',
				'supports'		=> [
					'jsx' 			=> true,
				],
				'enqueue_assets'  => function() {
				},
			)
		);
	}

}
