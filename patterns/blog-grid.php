<?php

/**
 * Title: Blog Grid
 * Slug: glowmerry/blog-grid
 * Categories: glowmerry-patterns, glowmerry
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"90px","bottom":"90px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:90px;padding-right:var(--wp--preset--spacing--40);padding-bottom:90px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'News & Blogs', 'glowmerry' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"slightly-large","fontFamily":"public-sans"} -->
<p class="has-foreground-color has-text-color has-link-color has-public-sans-font-family has-slightly-large-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><a href="#"><?php esc_html_e( 'View All', 'glowmerry' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"65px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:65px"><!-- wp:query {"queryId":13,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#485577","isUserOverlayColor":true,"minHeight":270,"contentPosition":"top right","className":"is-style-cover-hover-zoom-in","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-right is-style-cover-hover-zoom-in" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;min-height:270px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#485577"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-category-background-dark","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"},":hover":{"color":{"text":"var:preset|color|heading"}}}}},"textColor":"white","fontSize":"slightly-small"} /--></div></div>
<!-- /wp:cover -->

<!-- wp:post-title {"isLink":true,"className":"is-style-title-hover-primary","style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"18px","bottom":"24px"}}},"textColor":"heading","fontSize":"medium-large"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"normal","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-normal-font-size" style="margin-top:0;margin-bottom:0"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} /-->

<!-- wp:post-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"textTransform":"capitalize"}},"textColor":"foreground-alt"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->