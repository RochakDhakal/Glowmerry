<?php
/**
 * Title: 404 Page Not Found
 * Slug: glowmerry/404-page-not-found
 * Categories: glowmerry-patterns, glowmerry
 */

$glowmerry_error_url = get_template_directory_uri();
$glowmerry_error_img = array(
	$glowmerry_error_url . '/assets/images/error.png',
)
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"60px","bottom":"60px"},"blockGap":"0"},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":{},"bottom":{},"left":{}}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"1260px"}} -->
<main class="wp-block-group has-white-background-color has-background" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:60px;padding-right:var(--wp--preset--spacing--40);padding-bottom:60px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
	<div class="wp-block-group"><!-- wp:image {"id":2224,"width":"600px","height":"300px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":["#117DD1","#EA0023"]}}} -->
		<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $glowmerry_error_img[0] ); ?>" alt="" class="wp-image-2224" style="object-fit:contain;width:600px;height:300px" /></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"textTransform":"uppercase"}},"textColor":"foreground-alt","fontSize":"medium-large"} -->
		<p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-large-font-size" style="text-transform:uppercase"><?php esc_html_e( 'Oops! Page not found', 'glowmerry' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"10px"}},"layout":{"type":"constrained","contentSize":"450px","justifyContent":"left"}} -->
	<div class="wp-block-group" style="margin-top:40px"><!-- wp:heading -->
		<h2 class="wp-block-heading">Helpful Links</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
		<p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e( "Something went wrong! We couldn't find the page you were looking for. But don't worry, we've got some other Links that might be helpful:", 'glowmerry' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"40px"}}}} -->
	<div class="wp-block-columns" style="margin-top:40px"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Pages', 'glowmerry' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} -->
			<!-- wp:page-list /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"","style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
		<div class="wp-block-column has-dark-color has-text-color has-link-color"><!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Categories', 'glowmerry' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"dark","layout":{"type":"constrained","contentSize":"75%","justifyContent":"left"}} -->
			<div class="wp-block-group has-dark-color has-text-color has-link-color"><!-- wp:categories {"className":"is-style-category-dark"} /--></div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Recent News', 'glowmerry' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:query {"queryId":42,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
			<div class="wp-block-query"><!-- wp:post-template -->
				<!-- wp:post-title {"level":5,"isLink":true,"className":"is-style-title-hover-primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"dark"} /-->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</main>
<!-- /wp:group -->