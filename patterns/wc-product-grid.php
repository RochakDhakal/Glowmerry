<?php
/**
 * Title: Product Display Grid (WooCommerce)
 * Slug: glowmerry/wc-product-grid
 * Categories: glowmerry-woocommerce-patterns, glowmerry
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"95px","bottom":"95px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:95px;padding-right:var(--wp--preset--spacing--40);padding-bottom:95px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"765px","wideSize":"763px"}} -->
	<div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100px"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"color":{"background":"#7e60711a"},"border":{"radius":"100px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"20px","right":"20px"}}},"textColor":"primary","fontSize":"normal"} -->
			<p class="has-text-align-center has-primary-color has-text-color has-background has-link-color has-normal-font-size" style="border-radius:100px;background-color:#7e60711a;padding-top:5px;padding-right:20px;padding-bottom:5px;padding-left:20px">Best Sellers</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"capitalize"},"spacing":{"margin":{"top":"24px"}}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="margin-top:24px;font-style:normal;font-weight:400;text-transform:capitalize">Awaken radiant skin with the power of overnight care.</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"66px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group" style="margin-top:66px"><!-- wp:group {"metadata":{"categories":["woo-commerce"],"patternName":"woocommerce-blocks/product-collection-3-columns","name":"Product Collection 3 Columns"},"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0px","bottom":"80px"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:80px;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":4,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill","fixedWidth":""},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"align":"wide"} -->
			<div class="wp-block-woocommerce-product-collection alignwide"><!-- wp:woocommerce/product-template -->
				<!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true,"width":"300px","height":"300px","aspectRatio":"3/5"} /-->

				<!-- wp:post-title {"textAlign":"center","level":6,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

				<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"primary","fontSize":"slightly-large","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->
				<!-- /wp:woocommerce/product-template -->
			</div>
			<!-- /wp:woocommerce/product-collection -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->