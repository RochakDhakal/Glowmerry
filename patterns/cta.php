<?php

/**
 * Title: Call To Action
 * Slug: glowmerry/cta
 * Categories: glowmerry-patterns, glowmerry
 */

$glowmerry_cta_url = get_template_directory_uri();
$glowmerry_cta_img = array(
	$glowmerry_cta_url . '/assets/images/lotion-cover.jpg',
)
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( $glowmerry_cta_img[0] ); ?>","id":182,"dimRatio":20,"overlayColor":"black","isUserOverlayColor":true,"minHeight":580,"isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-cover is-light" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-182" alt="" src="<?php echo esc_url( $glowmerry_cta_img[0] ); ?>" data-object-fit="cover" />
		<div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"765px"}} -->
			<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|Light"}}}},"textColor":"Light","fontSize":"super-large"} -->
				<h1 class="wp-block-heading has-text-align-center has-light-color has-text-color has-link-color has-super-large-font-size" style="font-style:normal;font-weight:400;text-transform:capitalize"><?php esc_html_e( 'Beauty Is Power A Smile Is Its Sword', 'glowmerry' ); ?></h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|Light"},":hover":{"color":{"text":"var:preset|color|heading"}}}},"spacing":{"margin":{"top":"34px"}}},"textColor":"white"} -->
				<p class="has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:34px;text-transform:uppercase"><a href="#"><?php esc_html_e( 'Explore More', 'glowmerry' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->