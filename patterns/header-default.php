<?php
/**
 * Title: Header Default
 * Slug: glowmerry/header-default
 * Categories: header,glowmerry-patterns,glowmerry
 */

?>

<!-- wp:group {"style":{"border":{"bottom":{"width":"0px","style":"none"},"top":{},"right":{},"left":{}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"Light","layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group has-light-background-color has-background" style="padding-top:15px;padding-right:var(--wp--preset--spacing--40);padding-bottom:15px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( 'Best special offers every week! 40% Off! Shop now', 'glowmerry' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0px","bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:20px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:navigation {"className":"is-style-link-hover-primary","style":{"spacing":{"blockGap":"20px"},"typography":{"textTransform":"uppercase"}},"fontSize":"slightly-small"} -->
				<!-- wp:home-link {"label":"Home"} /-->
				<!-- wp:page-list /-->
				<!-- /wp:navigation -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group"><!-- wp:site-title {"level":2,"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"className":"is-style-hover-primary-fill is-style-default","style":{"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"backgroundColor":"transparent","textColor":"heading"} /-->
						<?php
						if ( class_exists( 'WooCommerce' ) ) {
							?>
							<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon","textColor":"primary","style":{"spacing":{"margin":{"left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

							<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag","hasHiddenPrice":true,"iconColor":{"color":"#7E6071","name":"Primary","slug":"primary","class":"has-primary-product-count-color"},"productCountColor":{"color":"#7E6071","name":"Primary","slug":"primary","class":"has-primary-product-count-color"}} /-->
							<?php
						}
						?>
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->