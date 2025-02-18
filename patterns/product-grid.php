<?php

/**
 * Title: Product Grid (WooCommerce)
 * Slug: glowmerry/product-grid
 * Categories: glowmerry-woocommerce-patterns, glowmerry
 */

$glowmerry_product_url = get_template_directory_uri();
$glowmerry_product_img = array(
	$glowmerry_product_url . '/assets/images/serum.jpg',
	$glowmerry_product_url . '/assets/images/lotion.jpg',
	$glowmerry_product_url . '/assets/images/brush.jpg',
	$glowmerry_product_url . '/assets/images/polish.jpg',
)
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"95px","bottom":"95px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:95px;padding-right:var(--wp--preset--spacing--40);padding-bottom:95px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"765px"}} -->
		<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"100px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group" style="border-radius:100px"><!-- wp:paragraph {"style":{"color":{"background":"#7e60711a"},"border":{"radius":"100px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"20px","right":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color has-background has-link-color" style="border-radius:100px;background-color:#7e60711a;padding-top:5px;padding-right:20px;padding-bottom:5px;padding-left:20px"><?php esc_html_e( 'Best Sellers', 'glowmerry' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.2","textTransform":"capitalize"},"spacing":{"margin":{"top":"24px","bottom":"65px"}}},"fontSize":"very-large"} -->
			<h3 class="wp-block-heading has-text-align-center has-very-large-font-size" style="margin-top:24px;margin-bottom:65px;font-style:normal;font-weight:300;line-height:1.2;text-transform:capitalize"><?php esc_html_e( 'Awaken radiant skin with the power of overnight care.', 'glowmerry' ); ?></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<?php
		if ( class_exists( 'WooCommerce' ) ) {
			?>
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":4,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":true,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
				<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
					<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"100%","height":"300px","className":"is-style-cover-hover-zoom-in"} /-->

					<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"8px","top":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","fontSize":"slightly-large","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

					<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
					<!-- /wp:woocommerce/product-template -->

					<!-- wp:woocommerce/product-collection-no-results -->
					<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
					<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium"} -->
						<p class="has-medium-font-size"><strong><?php esc_html_e( 'No Products Found', 'glowmerry' ); ?></strong></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p><?php esc_html_e( 'You can try ', 'glowmerry' ); ?><a class="wc-link-clear-any-filters" href="#"><?php esc_html_e( 'clearing any filters', 'glowmerry' ); ?></a><?php esc_html_e( ' or head to our ', 'glowmerry' ); ?><a class="wc-link-stores-home" href="#"><?php esc_html_e( "store's home", 'glowmerry' ); ?></a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- /wp:woocommerce/product-collection-no-results -->
				</div>
				<!-- /wp:woocommerce/product-collection -->
			</div>
			<!-- /wp:group -->
			<?php
		} else {
			?>
			<!-- wp:columns {"className":"glowmerry-static-data"} -->
			<div class="wp-block-columns glowmerry-static-data"><!-- wp:column {"width":"25%"} -->
				<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group"><!-- wp:image {"id":2281,"sizeSlug":"full","linkDestination":"none","className":"is-style-cover-hover-zoom-in"} -->
						<figure class="wp-block-image size-full is-style-cover-hover-zoom-in"><img src="<?php echo esc_url( $glowmerry_product_img[0] ); ?>" alt="" class="wp-image-2281" /></figure>
						<!-- /wp:image -->

						<!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"slightly-large"} -->
						<h5 class="wp-block-heading has-slightly-large-font-size" style="font-style:normal;font-weight:300"><?php esc_html_e( 'Nutrispa Anti blemish face serum', 'glowmerry' ); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( '$79.99', 'glowmerry' ); ?><s><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-foreground-color"><?php esc_html_e( '$99.99', 'glowmerry' ); ?></mark></s></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"25%"} -->
				<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group"><!-- wp:image {"id":2280,"sizeSlug":"full","linkDestination":"none","className":"is-style-cover-hover-zoom-in"} -->
						<figure class="wp-block-image size-full is-style-cover-hover-zoom-in"><img src="<?php echo esc_url( $glowmerry_product_img[1] ); ?>" alt="" class="wp-image-2280" /></figure>
						<!-- /wp:image -->

						<!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"slightly-large"} -->
						<h5 class="wp-block-heading has-slightly-large-font-size" style="font-style:normal;font-weight:300"><?php esc_html_e( 'Natural Lighting Face Cream', 'glowmerry' ); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( '$89.99', 'glowmerry' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"25%"} -->
				<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group"><!-- wp:image {"id":2279,"sizeSlug":"full","linkDestination":"none","className":"is-style-cover-hover-zoom-in"} -->
						<figure class="wp-block-image size-full is-style-cover-hover-zoom-in"><img src="<?php echo esc_url( $glowmerry_product_img[2] ); ?>" alt="" class="wp-image-2279" /></figure>
						<!-- /wp:image -->

						<!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"slightly-large"} -->
						<h5 class="wp-block-heading has-slightly-large-font-size" style="font-style:normal;font-weight:300"><?php esc_html_e( 'Makeup Pen Brush', 'glowmerry' ); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( '$49.99', 'glowmerry' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"25%"} -->
				<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group"><!-- wp:image {"id":2294,"sizeSlug":"full","linkDestination":"none","className":"is-style-cover-hover-zoom-in"} -->
						<figure class="wp-block-image size-full is-style-cover-hover-zoom-in"><img src="<?php echo esc_url( $glowmerry_product_img[3] ); ?>" alt="" class="wp-image-2294" /></figure>
						<!-- /wp:image -->

						<!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"slightly-large"} -->
						<h5 class="wp-block-heading has-slightly-large-font-size" style="font-style:normal;font-weight:300"><?php esc_html_e( 'Nutrispa Anti Mascara', 'glowmerry' ); ?></h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( '$89.99', 'glowmerry' ); ?> <s><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-foreground-color"><?php esc_html_e( '$119.99', 'glowmerry' ); ?></mark></s></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<?php
		}
		?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->