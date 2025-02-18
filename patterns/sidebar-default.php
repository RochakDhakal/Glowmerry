<?php
/**
 * Title: Sidebar Default
 * Slug: glowmerry/sidebar-default
 * Categories: glowmerry-patterns, glowmerry
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topRight":"40px"}}},"backgroundColor":"Light","layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group has-light-background-color has-background" style="border-top-right-radius:40px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"slightly-large"} -->
		<h4 class="wp-block-heading has-slightly-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:500"><?php esc_html_e( 'Search', 'glowmerry' ); ?></h4>
		<!-- /wp:heading -->

		<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"25px"}}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"},"margin":{"top":"30px","bottom":"0"},"blockGap":"0"},"border":{"radius":{"bottomLeft":"40px"}}},"backgroundColor":"Light","layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group has-light-background-color has-background" style="border-bottom-left-radius:40px;margin-top:30px;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"slightly-large"} -->
		<h4 class="wp-block-heading has-slightly-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:500"><?php esc_html_e( 'Recent Blogs', 'glowmerry' ); ?></h4>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"25px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
		<div class="wp-block-group" style="margin-top:25px"><!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-small-posts","name":"Small image and title"}} -->
			<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
				<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
				<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":""} -->
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"90px","className":"is-style-cover-hover-zoom-in"} /--></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"15px"}}} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:post-title {"level":6,"isLink":true,"className":"is-style-title-hover-primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","fontSize":"tiny"} /-->

						<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"tiny"} /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"},"margin":{"top":"30px","bottom":"0"},"blockGap":"0"},"border":{"radius":{"topRight":"40px","bottomRight":"40px"}}},"backgroundColor":"Light","layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group has-light-background-color has-background" style="border-top-right-radius:40px;border-bottom-right-radius:40px;margin-top:30px;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"slightly-large"} -->
		<h4 class="wp-block-heading has-slightly-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:500"><?php esc_html_e( 'Categories', 'glowmerry' ); ?></h4>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"25px"}},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}}}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
		<div class="wp-block-group" style="margin-top:25px"><!-- wp:categories {"className":"is-style-category-dark"} /--></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"},"margin":{"top":"30px","bottom":"0"},"blockGap":"0"},"border":{"radius":{"topLeft":"40px","bottomLeft":"40px"}}},"backgroundColor":"Light","layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group has-light-background-color has-background" style="border-top-left-radius:40px;border-bottom-left-radius:40px;margin-top:30px;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"slightly-large"} -->
		<h4 class="wp-block-heading has-slightly-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:500"><?php esc_html_e( 'Tag Clouds', 'glowmerry' ); ?></h4>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"25px"}},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|Light"}},"color":{"text":"var:preset|color|Light"}}}},"textColor":"Light","layout":{"type":"constrained","contentSize":"100%"}} -->
		<div class="wp-block-group has-light-color has-text-color has-link-color" style="margin-top:25px"><!-- wp:tag-cloud {"smallestFontSize":"12px","largestFontSize":"12px","className":"is-style-category-dark is-style-tag-background-foreground","fontFamily":"arimo"} /--></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->