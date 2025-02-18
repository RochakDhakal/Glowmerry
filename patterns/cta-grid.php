<?php

/**
 * Title: Call To Action Grid
 * Slug: glowmerry/cta-grid
 * Categories: glowmerry-patterns, glowmerry
 */

$glowmerry_cta_url = get_template_directory_uri();
$glowmerry_cta_img = array(
	$glowmerry_cta_url . '/assets/images/serum-2.jpg',
	$glowmerry_cta_url . '/assets/images/cream.jpg',
	$glowmerry_cta_url . '/assets/images/nail-polish.jpg',
)
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:var(--wp--preset--spacing--40);padding-bottom:60px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"50px","left":"50px"}}}} -->
		<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":265,"width":"auto","height":"540px","aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $glowmerry_cta_img[0] ); ?>" alt="" class="wp-image-265" style="aspect-ratio:3/2;object-fit:cover;width:auto;height:540px" /></figure>
				<!-- /wp:image -->

				<!-- wp:image {"id":271,"width":"auto","height":"540px","aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"50px"}}}} -->
				<figure class="wp-block-image size-full is-resized" style="margin-top:50px"><img src="<?php echo esc_url( $glowmerry_cta_img[1] ); ?>" alt="" class="wp-image-271" style="aspect-ratio:3/2;object-fit:cover;width:auto;height:540px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":275,"width":"auto","height":"810px","aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( $glowmerry_cta_img[2] ); ?>" alt="" class="wp-image-275" style="aspect-ratio:3/2;object-fit:cover;width:auto;height:810px" /></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"50px","bottom":"50px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"526px"}} -->
				<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:var(--wp--preset--spacing--40);padding-bottom:50px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"very-large"} -->
					<h3 class="wp-block-heading has-text-align-center has-very-large-font-size"><?php esc_html_e( 'Affectionate Beauty Collection', 'glowmerry' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"24px","bottom":"24px"}}},"textColor":"foreground"} -->
					<p class="has-text-align-center has-foreground-color has-text-color has-link-color" style="margin-top:24px;margin-bottom:24px"><?php esc_html_e( 'Empower yourself with the Love Letter Collection. Keep your loved ones near, wearing a cherished letter around your neck, destined to become a beloved piece for future generations. These love letters are meant to be worn and adored for life.', 'glowmerry' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","className":"is-style-hover-primary-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"width":"1px"},"typography":{"textTransform":"uppercase"}},"fontSize":"slightly-large"} -->
						<div class="wp-block-button has-custom-font-size is-style-hover-primary-fill has-slightly-large-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px"><?php esc_html_e( 'Start Shopping', 'glowmerry' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
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