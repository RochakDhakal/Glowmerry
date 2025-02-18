<?php
/**
 * Title: Featured Product (WooCommerce)
 * Slug: glowmerry/wc-featured-product
 * Categories: glowmerry-woocommerce-patterns, glowmerry
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"30px","bottom":"90px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0"},"border":{"style":"none","width":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:30px;padding-right:var(--wp--preset--spacing--40);padding-bottom:90px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
		<h3 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Featured Products', 'glowmerry' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"66px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
		<div class="wp-block-group" style="margin-top:66px"><!-- wp:woocommerce/product-collection {"queryId":55,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"rating","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/featured","hideControls":["inherit","featured","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
			<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"100%","height":"355px","className":"is-style-cover-hover-zoom-in","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} /-->

					<!-- wp:post-title {"textAlign":"center","level":6,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0rem","top":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"heading","fontSize":"slightly-large","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

					<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"foreground-alt","fontFamily":"arimo","fontSize":"normal","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"lineHeight":"1"},"spacing":{"padding":{"top":"8px","bottom":"8px"},"margin":{"top":"0","bottom":"0"}}}} /-->

					<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"tiny","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"textTransform":"uppercase"}}} /-->
				</div>
				<!-- /wp:group -->
				<!-- /wp:woocommerce/product-template -->
			</div>
			<!-- /wp:woocommerce/product-collection -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->