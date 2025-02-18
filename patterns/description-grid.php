<?php
/**
 * Title: Product Description Grid
 * Slug: glowmerry/description-grid
 * Categories: glowmerry-patterns, glowmerry
 */
$glowmerry_icon_url = get_template_directory_uri();
$glowmerry_icon_img = array(
	$glowmerry_icon_url . '/assets/images/icon-1.png',
	$glowmerry_icon_url . '/assets/images/icon-2.png',
	$glowmerry_icon_url . '/assets/images/icon-3.png',
)
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"65px","bottom":"65px"}}},"backgroundColor":"Light","layout":{"type":"constrained","contentSize":"1080px","justifyContent":"center"}} -->
<div class="wp-block-group has-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:65px;padding-right:var(--wp--preset--spacing--40);padding-bottom:65px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1080px"}} -->
	<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"40px","left":"160px"},"margin":{"top":"0","bottom":"0"}}}} -->
		<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":""} -->
			<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained","contentSize":"252px"}} -->
				<div class="wp-block-group"><!-- wp:image {"id":199,"width":"auto","height":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $glowmerry_icon_img[0] ); ?>" alt="" class="wp-image-199" style="aspect-ratio:1;object-fit:cover;width:auto;height:50px" /></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"16px","bottom":"16px"}}},"fontSize":"slightly-large"} -->
					<h6 class="wp-block-heading has-text-align-center has-slightly-large-font-size" style="margin-top:16px;margin-bottom:16px"><?php esc_html_e( 'Earth-Friendly Ingredients', 'glowmerry' ); ?></h6>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"slightly-small"} -->
					<p class="has-text-align-center has-foreground-color has-text-color has-link-color has-slightly-small-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Get your activewear fix delivered to your doorstep for free.', 'glowmerry' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":""} -->
			<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained","contentSize":"252px"}} -->
				<div class="wp-block-group"><!-- wp:image {"id":252,"width":"auto","height":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $glowmerry_icon_img[1] ); ?>" alt="" class="wp-image-252" style="aspect-ratio:1;object-fit:cover;width:auto;height:50px" /></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"16px","bottom":"16px"}}},"fontSize":"slightly-large"} -->
					<h6 class="wp-block-heading has-text-align-center has-slightly-large-font-size" style="margin-top:16px;margin-bottom:16px"><?php esc_html_e( 'Dermatologist Tested', 'glowmerry' ); ?></h6>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"slightly-small"} -->
					<p class="has-text-align-center has-foreground-color has-text-color has-link-color has-slightly-small-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Get your activewear fix delivered to your doorstep for free.', 'glowmerry' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":""} -->
			<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained","contentSize":"252px"}} -->
				<div class="wp-block-group"><!-- wp:image {"id":253,"width":"auto","height":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $glowmerry_icon_img[2] ); ?>" alt="" class="wp-image-253" style="aspect-ratio:1;object-fit:cover;width:auto;height:50px" /></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"top":"16px","bottom":"16px"}}},"fontSize":"slightly-large"} -->
					<h6 class="wp-block-heading has-text-align-center has-slightly-large-font-size" style="margin-top:16px;margin-bottom:16px"><?php esc_html_e( '100% Vegan', 'glowmerry' ); ?></h6>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"slightly-small"} -->
					<p class="has-text-align-center has-foreground-color has-text-color has-link-color has-slightly-small-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Get your activewear fix delivered to your doorstep for free.', 'glowmerry' ); ?></p>
					<!-- /wp:paragraph -->
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