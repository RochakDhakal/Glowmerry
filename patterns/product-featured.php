<?php

/**
 * Title: Featured Product (WooCommerce)
 * Slug: glowmerry/product-featured
 * Categories: glowmerry-woocommerce-patterns, glowmerry
 */

$glowmerry_product_url = get_template_directory_uri();
$glowmerry_product_img = array(
	$glowmerry_product_url . '/assets/images/cocolo.jpg',
	$glowmerry_product_url . '/assets/images/white-cocolo.jpg',
	$glowmerry_product_url . '/assets/images/scent-stick.jpg',
	$glowmerry_product_url . '/assets/images/lipstick.jpg',
	$glowmerry_product_url . '/assets/images/star.png',
	$glowmerry_product_url . '/assets/images/star-1.png',
)
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"30px","bottom":"90px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0"},"border":{"style":"none","width":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:30px;padding-right:var(--wp--preset--spacing--40);padding-bottom:90px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
		<h3 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Browse By Review', 'glowmerry' ); ?></h3>
		<!-- /wp:heading -->
		<?php
		if ( class_exists( 'WooCommerce' ) ) {
			?>
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"66px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
			<div class="wp-block-group" style="margin-top:66px"><!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"rating","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/featured","hideControls":["inherit","featured","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
				<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"100%","height":"355px","className":"is-style-cover-hover-zoom-in","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} /-->

						<!-- wp:post-title {"textAlign":"center","level":6,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0rem","top":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"heading","fontSize":"slightly-large","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

						<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"foreground-alt","fontFamily":"arimo","fontSize":"normal","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"lineHeight":"1"},"spacing":{"padding":{"top":"8px","bottom":"8px"},"margin":{"top":"0","bottom":"0"}}}} /-->

						<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"tiny","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"textTransform":"uppercase"}}} /-->
					</div>
					<!-- /wp:group -->
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
			<!-- wp:columns {"className":"glowmerry-static-display","style":{"spacing":{"blockGap":{"top":"25px","left":"25px"}}}} -->
			<div class="wp-block-columns glowmerry-static-display"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
					<div class="wp-block-group"><!-- wp:image {"id":315,"width":"295px","height":"355px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-cover-hover-zoom-in"} -->
						<figure class="wp-block-image size-full is-resized is-style-cover-hover-zoom-in"><img src="<?php echo esc_url( $glowmerry_product_img[0] ); ?>" alt="" class="wp-image-315" style="object-fit:cover;width:295px;height:355px" /></figure>
						<!-- /wp:image -->

						<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"8px","bottom":"8px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"slightly-large"} -->
						<h6 class="wp-block-heading has-slightly-large-font-size" style="margin-top:8px;margin-bottom:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:400">Nutrispa Care Set</h6>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0"}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-bottom:0"><?php esc_html_e( '$129.99', 'glowmerry' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:image {"id":313,"width":"auto","height":"16px","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $glowmerry_product_img[5] ); ?>" alt="" class="wp-image-313" style="width:auto;height:16px" /></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
					<div class="wp-block-group"><!-- wp:image {"id":317,"width":"295px","height":"355px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-cover-hover-zoom-in"} -->
						<figure class="wp-block-image size-full is-resized is-style-cover-hover-zoom-in"><img src="<?php echo esc_url( $glowmerry_product_img[1] ); ?>" alt="" class="wp-image-317" style="object-fit:cover;width:295px;height:355px" /></figure>
						<!-- /wp:image -->

						<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"8px","bottom":"8px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"slightly-large"} -->
						<h6 class="wp-block-heading has-slightly-large-font-size" style="margin-top:8px;margin-bottom:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:400">Body Cream</h6>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0"}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-bottom:0"><?php esc_html_e( '$99.99', 'glowmerry' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:image {"id":313,"width":"auto","height":"16px","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $glowmerry_product_img[4] ); ?>" alt="" class="wp-image-313" style="width:auto;height:16px" /></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
					<div class="wp-block-group"><!-- wp:image {"id":323,"width":"295px","height":"355px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-cover-hover-zoom-in"} -->
						<figure class="wp-block-image size-full is-resized is-style-cover-hover-zoom-in"><img src="<?php echo esc_url( $glowmerry_product_img[2] ); ?>" alt="" class="wp-image-323" style="object-fit:cover;width:295px;height:355px" /></figure>
						<!-- /wp:image -->

						<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"8px","bottom":"8px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"slightly-large"} -->
						<h6 class="wp-block-heading has-slightly-large-font-size" style="margin-top:8px;margin-bottom:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:400">Nature Scented Stick</h6>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0"}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-bottom:0"><?php esc_html_e( '$69.99', 'glowmerry' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:image {"id":313,"width":"auto","height":"16px","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $glowmerry_product_img[5] ); ?>" alt="" class="wp-image-313" style="width:auto;height:16px" /></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
					<div class="wp-block-group"><!-- wp:image {"id":324,"width":"295px","height":"355px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-cover-hover-zoom-in"} -->
						<figure class="wp-block-image size-full is-resized is-style-cover-hover-zoom-in"><img src="<?php echo esc_url( $glowmerry_product_img[3] ); ?>" alt="" class="wp-image-324" style="object-fit:cover;width:295px;height:355px" /></figure>
						<!-- /wp:image -->

						<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"8px","bottom":"8px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"slightly-large"} -->
						<h6 class="wp-block-heading has-slightly-large-font-size" style="margin-top:8px;margin-bottom:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:400">Lipcare</h6>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0"}}},"textColor":"primary"} -->
						<p class="has-primary-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-bottom:0"><?php esc_html_e( '$79.99', 'glowmerry' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:image {"id":313,"width":"auto","height":"16px","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $glowmerry_product_img[5] ); ?>" alt="" class="wp-image-313" style="width:auto;height:16px" /></figure>
						<!-- /wp:image -->
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