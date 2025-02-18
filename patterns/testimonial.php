<?php
/**
 * Title: Testimonial
 * Slug: glowmerry/testimonial
 * Categories: glowmerry-patterns, glowmerry
 */

$glowmerry_testimonial_url = get_template_directory_uri();
$glowmerry_testimonial_img = array(
	$glowmerry_testimonial_url . '/assets/images/gold-star.png',
	$glowmerry_testimonial_url . '/assets/images/ad-bazzar.png',
	$glowmerry_testimonial_url . '/assets/images/ad-luxuries.png',
	$glowmerry_testimonial_url . '/assets/images/ad-nestify.png',
	$glowmerry_testimonial_url . '/assets/images/ad-nexes.png',
	$glowmerry_testimonial_url . '/assets/images/ad-vogue.png',
	$glowmerry_testimonial_url . '/assets/images/blob.png',
)
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"75px","bottom":"90px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"bottom":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:75px;padding-right:var(--wp--preset--spacing--40);padding-bottom:90px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( $glowmerry_testimonial_img[6] ); ?>","id":381,"source":"file","title":"blob"},"backgroundSize":"contain","backgroundRepeat":"no-repeat"}},"layout":{"type":"constrained","contentSize":"505px"}} -->
	<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:image {"id":353,"width":"auto","height":"15px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
		<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $glowmerry_testimonial_img[0] ); ?>" alt="" class="wp-image-353" style="width:auto;height:15px" /></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium-large"} -->
		<p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-large-font-size"><?php esc_html_e( 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,', 'glowmerry' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":6,"fontSize":"normal"} -->
		<h6 class="wp-block-heading has-text-align-center has-normal-font-size"><?php esc_html_e( 'Cicero', 'glowmerry' ); ?></h6>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"90px"}}},"layout":{"type":"constrained","contentSize":"1000px"}} -->
	<div class="wp-block-group" style="margin-top:90px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"70px"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%"><!-- wp:image {"id":367,"width":"125px","height":"45px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $glowmerry_testimonial_img[5] ); ?>" alt="" class="wp-image-367" style="object-fit:contain;width:125px;height:45px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%"><!-- wp:image {"id":372,"width":"125px","height":"45px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $glowmerry_testimonial_img[1] ); ?>" alt="" class="wp-image-372" style="object-fit:contain;width:125px;height:45px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%"><!-- wp:image {"id":373,"width":"125px","height":"45px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $glowmerry_testimonial_img[2] ); ?>" alt="" class="wp-image-373" style="object-fit:contain;width:125px;height:45px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%"><!-- wp:image {"id":374,"width":"125px","height":"45px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $glowmerry_testimonial_img[3] ); ?>" alt="" class="wp-image-374" style="object-fit:contain;width:125px;height:45px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%"><!-- wp:image {"id":375,"width":"125px","height":"45px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $glowmerry_testimonial_img[4] ); ?>" alt="" class="wp-image-375" style="object-fit:contain;width:125px;height:45px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->