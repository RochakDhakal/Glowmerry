<?php

/**
 * Title: Hero Section
 * Slug: glowmerry/hero-section
 * Categories: glowmerry-patterns, glowmerry
 */

$glowmerry_cover_url = get_template_directory_uri();
$glowmerry_cover_img = array(
	$glowmerry_cover_url . '/assets/images/cover.png',
)
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":{"topRight":"60px","bottomLeft":"60px","topLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:60px;border-bottom-left-radius:60px;border-bottom-right-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( $glowmerry_cover_img[0] ); ?>","id":20,"dimRatio":0,"isUserOverlayColor":true,"minHeight":690,"contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":{"topRight":"60px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-cover is-light" style="border-top-right-radius:60px;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:690px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-20" alt="" src="<?php echo esc_url( $glowmerry_cover_img[0] ); ?>" data-object-fit="cover" />
		<div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1260px","wideSize":"1260px","justifyContent":"center"}} -->
			<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"670px","justifyContent":"left"}} -->
				<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
					<h1 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-style:normal;font-weight:400;text-transform:capitalize"><?php esc_html_e( 'Effortless beauty for every occasion.', 'glowmerry' ); ?></h1>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"18px"}},"elements":{"link":{"color":{"text":"var:preset|color|Light"}}}},"textColor":"Light"} -->
				<p class="has-light-color has-text-color has-link-color" style="margin-top:18px"><?php esc_html_e( 'Unleash the rejuvenating power of night skincare.', 'glowmerry' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"34px"},"blockGap":{"top":"10px","left":"10px"}}}} -->
				<div class="wp-block-buttons" style="margin-top:34px"><!-- wp:button {"backgroundColor":"Light","textColor":"heading","className":"is-style-hover-secondary-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}}} -->
					<div class="wp-block-button is-style-hover-secondary-fill"><a class="wp-block-button__link has-heading-color has-light-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e( 'Visit Shop', 'glowmerry' ); ?></a></div>
					<!-- /wp:button -->

					<!-- wp:button {"backgroundColor":"transparent","className":"is-style-hover-secondary-fill","style":{"border":{"width":"1px"}}} -->
					<div class="wp-block-button is-style-hover-secondary-fill"><a class="wp-block-button__link has-transparent-background-color has-background wp-element-button" style="border-width:1px"><?php esc_html_e( 'Get In Touch', 'glowmerry' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->