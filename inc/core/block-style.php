<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package glowmerry
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function glowmerry_register_block_styles() {
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'link-hover-primary',
				'label' => 'Hover : Primary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'link-hover-secondary',
				'label' => 'Hover : Secondary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'link-hover-terniary',
				'label' => 'Hover : Ternairy',
				'glowmerry',
			)
		);
		register_block_style(
			'core/page-list',
			array(
				'name'  => 'hide-bullet-list',
				'label' => 'Hide Bullet Style',
				'glowmerry',
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'hover-primary-fill',
				'label' => 'Hover : Primary Fill',
				'glowmerry',
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'hover-secondary-fill',
				'label' => 'Hover : Secondary Fill',
				'glowmerry',
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'hover-terniary-fill',
				'label' => 'Hover : Terniary Fill',
				'glowmerry',
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-with-uparrow-icon',
				'label' => 'Up Arrow Icon',
				'glowmerry',
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-with-arrow-icon',
				'label' => 'Arrow Icon',
				'glowmerry',
			)
		);
		register_block_style(
			'core/search',
			array(
				'name'  => 'hover-search-primary-fill',
				'label' => 'Hover : Primary Fill',
				'glowmerry',
			)
		);
		register_block_style(
			'core/search',
			array(
				'name'  => 'hover-search-secondary-fill',
				'label' => 'Hover : Secondary Fill',
				'glowmerry',
			)
		);
		register_block_style(
			'core/search',
			array(
				'name'  => 'hover-search-terniary-fill',
				'label' => 'Hover : Terniary Fill',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'title-hover-primary',
				'label' => 'Underline Hover : Primary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'title-hover-secondary',
				'label' => 'Underline Hover : Secondary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'title-hover-terniary',
				'label' => 'Underline Hover : Terniary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-author-name',
			array(
				'name'  => 'author-icon-foreground',
				'label' => 'Icon : Foreground',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-author-name',
			array(
				'name'  => 'author-icon-foreground-alt',
				'label' => 'Icon : Foreground Alt',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-author-name',
			array(
				'name'  => 'author-icon-meta',
				'label' => 'Icon : Meta',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-author-name',
			array(
				'name'  => 'author-icon-white',
				'label' => 'Icon : White',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-date',
			array(
				'name'  => 'date-icon-foreground',
				'label' => 'Icon : Foreground',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-date',
			array(
				'name'  => 'date-icon-foreground-alt',
				'label' => 'Icon : Foreground Alt',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-date',
			array(
				'name'  => 'date-icon-meta',
				'label' => 'Icon : Meta',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-date',
			array(
				'name'  => 'date-icon-white',
				'label' => 'Icon : White',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'category-background-primary',
				'label' => 'Background : Primary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'category-background-secondary',
				'label' => 'Background : Secondary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'category-background-mixed',
				'label' => 'Background : Mixed',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'category-background-dark',
				'label' => 'Background : Dark',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'category-background-light',
				'label' => 'Background : Light',
				'glowmerry',
			)
		);
		register_block_style(
			'core/tag-cloud',
			array(
				'name'  => 'tag-background-primary',
				'label' => 'Background : Primary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/tag-cloud',
			array(
				'name'  => 'tag-background-secondary',
				'label' => 'Background : Secondary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/tag-cloud',
			array(
				'name'  => 'tag-background-terniary',
				'label' => 'Background : Terniary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/tag-cloud',
			array(
				'name'  => 'tag-background-foreground',
				'label' => 'Background : Foreground',
				'glowmerry',
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'cover-hover-zoom-in',
				'label' => 'Hover : Zoom In',
				'glowmerry',
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'cover-hover-zoom-out',
				'label' => 'Hover : Zoom Out',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'cover-hover-zoom-in',
				'label' => 'Hover : Zoom In',
				'glowmerry',
			)
		);
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'cover-hover-zoom-out',
				'label' => 'Hover : Zoom Out',
				'glowmerry',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'cover-hover-zoom-in',
				'label' => 'Hover : Zoom In',
				'glowmerry',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'cover-hover-zoom-out',
				'label' => 'Hover : Zoom Out',
				'glowmerry',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'image-hover-pulse',
				'label' => 'Hover : Pulse',
				'glowmerry',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'image-hover-spin',
				'label' => 'Hover : Spin',
				'glowmerry',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'image-pulse',
				'label' => 'Pulse',
				'glowmerry',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'image-spin',
				'label' => 'Spin',
				'glowmerry',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'image-greyscale',
				'label' => 'Greyscale - Hover: Colored',
				'glowmerry',
			)
		);
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'social-links-radius-none',
				'label' => 'Border Radius : None',
				'glowmerry',
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'category-primary',
				'label' => 'Primary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'category-secondary',
				'label' => 'Secondary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'category-terniary',
				'label' => 'Terniary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'category-light',
				'label' => 'Light',
				'glowmerry',
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'category-dark',
				'label' => 'Dark',
				'glowmerry',
			)
		);
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'pagination-primary',
				'label' => 'Pagination : Primary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'pagination-secondary',
				'label' => 'Pagination : Secondary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'pagination-terniary',
				'label' => 'Pagination : Terniary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'read-more-primary',
				'label' => 'Hover : Primary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'read-more-secondary',
				'label' => 'Hover : Secondary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'read-more-terniary',
				'label' => 'Hover : Terniary',
				'glowmerry',
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'box-shadow',
				'label' => 'Box Shadow : Light',
				'glowmerry',
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'box-shadow-medium',
				'label' => 'Box Shadow : Medium',
				'glowmerry',
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'box-shadow-large',
				'label' => 'Box Shadow : Large',
				'glowmerry',
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'box-shadow-hover',
				'label' => 'Box Shadow on Hover',
				'glowmerry',
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'translate-hover',
				'label' => 'Translate on Hover',
				'glowmerry',
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'overflow-hidden',
				'label' => 'Overflow : Hidden',
				'glowmerry',
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'box-shadow',
				'label' => 'Box Shadow : Light',
				'glowmerry',
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'box-shadow-medium',
				'label' => 'Box Shadow : Medium',
				'glowmerry',
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'box-shadow-large',
				'label' => 'Box Shadow : Large',
				'glowmerry',
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'box-shadow-hover',
				'label' => 'Box Shadow on Hover',
				'glowmerry',
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'translate-hover',
				'label' => 'Translate on Hover',
				'glowmerry',
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'overflow-hidden',
				'label' => 'Overflow : Hidden',
				'glowmerry',
			)
		);

		/*
		WooCommerce Core Block
		*/
		register_block_style(
			'woocommerce/product-image',
			array(
				'name'  => 'cover-hover-zoom-out',
				'label' => 'Hover : Zoom Out',
				'glowmerry',
			)
		);
		register_block_style(
			'woocommerce/product-image',
			array(
				'name'  => 'cover-hover-zoom-in',
				'label' => 'Hover : Zoom In',
				'glowmerry',
			)
		);
		register_block_style(
			'woocommerce/product-button',
			array(
				'name'  => 'hover-wc-primary-fill',
				'label' => 'Hover : Primary',
				'glowmerry',
			)
		);
		register_block_style(
			'woocommerce/product-button',
			array(
				'name'  => 'hover-wc-secondary-fill',
				'label' => 'Hover : Secondary',
				'glowmerry',
			)
		);
		register_block_style(
			'woocommerce/product-button',
			array(
				'name'  => 'hover-wc-terniary-fill',
				'label' => 'Hover : Terniary',
				'glowmerry',
			)
		);
	}
	add_action( 'init', 'glowmerry_register_block_styles' );
}
