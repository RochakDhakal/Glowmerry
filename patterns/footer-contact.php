<?php
/**
 * Title: Footer Contact
 * Slug: glowmerry/footer-contact
 * Categories: footer,glowmerry-patterns, glowmerry
 */

?>
<!-- wp:group {"style":{"border":{"radius":{"topLeft":"60px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-top-left-radius:60px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group" style="padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"40px","left":"125px"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
			<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
				<div class="wp-block-group"><!-- wp:site-title {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|Light"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|Light"}}}},"textColor":"Light"} -->
					<p class="has-light-color has-text-color has-link-color"><?php esc_html_e( 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'glowmerry' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"24px"}}},"textColor":"white","fontSize":"normal"} -->
					<p class="has-white-color has-text-color has-link-color has-normal-font-size" style="margin-top:24px"><?php esc_html_e( 'Email: support@example.com', 'glowmerry' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"white","fontSize":"normal"} -->
					<p class="has-white-color has-text-color has-link-color has-normal-font-size" style="margin-top:10px"><?php esc_html_e( 'Tel: +123 9876543210', 'glowmerry' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"25%"} -->
			<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|Light"}}},"spacing":{"margin":{"bottom":"25px"}}},"textColor":"Light","fontSize":"medium"} -->
				<h5 class="wp-block-heading has-light-color has-text-color has-link-color has-medium-font-size" style="margin-bottom:25px;font-style:normal;font-weight:700"><?php esc_html_e( 'Quick Link', 'glowmerry' ); ?></h5>
				<!-- /wp:heading -->
				<!-- wp:navigation {"textColor":"Light","overlayMenu":"never","className":"is-style-link-hover-secondary","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:page-list /-->
				<!-- /wp:navigation -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"25%"} -->
			<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|Light"}}},"spacing":{"margin":{"bottom":"25px"}}},"textColor":"Light","fontSize":"medium"} -->
				<h5 class="wp-block-heading has-light-color has-text-color has-link-color has-medium-font-size" style="margin-bottom:25px;font-style:normal;font-weight:700"><?php esc_html_e( 'Subscribe Newsletter', 'glowmerry' ); ?></h5>
				<!-- /wp:heading -->

				<!-- wp:contact-form-7/contact-form-selector {"id":2422,"hash":"4a8931a","title":"Untitled","className":"glowmerry-contact-newsletter-3"} -->
				<div class="wp-block-contact-form-7-contact-form-selector glowmerry-contact-newsletter-3">[contact-form-7 id="4a8931a" title="Glowmerry Contact"]</div>
				<!-- /wp:contact-form-7/contact-form-selector -->

			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|border-alt","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-alt);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:30px;padding-right:var(--wp--preset--spacing--40);padding-bottom:30px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group has-white-color has-text-color has-link-color"><!-- wp:social-links {"iconBackgroundColor":"border-alt","iconBackgroundColorValue":"#FFFFFF1A","style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
			<ul class="wp-block-social-links has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

				<!-- wp:social-link {"url":"#","service":"instagram"} /-->

				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

				<!-- wp:social-link {"url":"#","service":"x"} /-->
			</ul>
			<!-- /wp:social-links -->

			<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
			<p class="has-text-align-center has-normal-font-size">Proudly Powered by WordPress | Theme Glowmerry by WalkerWP</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"normal"} -->
			<p class="has-normal-font-size">Privacy Policy / Terms &amp; Condition</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","className":"glowmerry-scrollto-top is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"50%"}}} -->
		<div class="wp-block-button glowmerry-scrollto-top is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%">Scroll to Top</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->