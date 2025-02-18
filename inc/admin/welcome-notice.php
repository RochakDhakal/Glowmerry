<?php
/**
 * File for holding dashboard welcome page for theme
 */

if ( ! function_exists( 'glowmerry_is_plugin_installed' ) ) {
	function glowmerry_is_plugin_installed( $plugin_slug ) {
		$plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
		return file_exists( $plugin_path );
	}
}
if ( ! function_exists( 'glowmerry_is_plugin_activated' ) ) {
	function glowmerry_is_plugin_activated( $plugin_slug ) {
		return is_plugin_active( $plugin_slug );
	}
}
if ( ! function_exists( 'glowmerry_welcome_notice' ) ) :
	function glowmerry_welcome_notice() {
		global $pagenow;
		$meta           = get_option( 'glowmerry-welcome-notice' );
		$current_screen = get_current_screen();

		if ( is_admin() && ! $meta ) {
			if ( $current_screen->id !== 'dashboard' && $current_screen->id !== 'themes' ) {
				return;
			}
			if ( is_network_admin() ) {
				return;
			}
			if ( ! current_user_can( 'manage_options' ) ) {
				return;
			}
			$theme = wp_get_theme();

			if ( is_child_theme() ) {
				$theme = wp_get_theme()->parent();
			}
			$glowmerry_version   = $theme->get( 'Version' );
			$glowmerry_admin_url = get_template_directory_uri();
			$glowmerry_admin_img = array(
				$glowmerry_admin_url . '/assets/images/admin-image.png',
			);
			?>
			<div class="glowmerry-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice">
				<div class="info-container">
					<div class="info-content">
						<h1><?php echo __( 'Welcome to Glowmerry! Please Install and activate all recommended plugins to import the demo with a single click.', 'glowmerry' ); ?></h1>
						<ul class="required-plugin-list">
							<li>
								<?php echo __( 'Walker Core', 'glowmerry' ); ?>
								<?php
								if ( glowmerry_is_plugin_activated( 'walker-core/walker-core.php' ) ) {
									echo __( ': Plugin has been already activated!', 'glowmerry' );
								} elseif ( glowmerry_is_plugin_installed( 'walker-core/walker-core.php' ) ) {
									echo __( ': Plugin is not activated, Activate the plugin to use one click demo import and unlock premium features.', 'glowmerry' );
								} else {
									echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=walker-core&TB_iframe=true&width=600&height=550">' . esc_html__( 'Install and Activate', 'glowmerry' ) . '</a>';
								}
								?>

							</li>
							<li>
								<?php echo __( 'Advanced Import - Need only to use "one click demo import" features', 'glowmerry' ); ?>
								<?php
								if ( glowmerry_is_plugin_activated( 'advanced-import/advanced-import.php' ) ) {
									echo __( ': Plugin has been already activated!', 'glowmerry' );
								} elseif ( glowmerry_is_plugin_installed( 'advanced-import/advanced-import.php' ) ) {
									echo __( ': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'glowmerry' );
								} else {
									echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__( 'Install and Activate', 'glowmerry' ) . '</a>';
								}
								?>
							</li>
						</ul>
						<div class='admin-btn'>
							<a href="<?php echo admin_url(); ?>themes.php?page=about-glowmerry" class="button admin-button info-button"><?php echo __( 'Explore Glowmerry', 'glowmerry' ); ?></a>
						</div>
					</div>
					<div class="theme-display-image">
						<img src="<?php echo esc_url( $glowmerry_admin_img[0] ); ?>" />
					</div>
				</div>
			</div>
			<?php
		}
	}
endif;
add_action( 'admin_notices', 'glowmerry_welcome_notice' );

if ( ! function_exists( 'glowmerry_ignore_admin_notice' ) ) :
	function glowmerry_ignore_admin_notice() {
		if ( isset( $_GET['glowmerry'] ) && $_GET['glowmerry-welcome-notice'] = 'true' ) {
			update_option( 'glowmerry-welcome-notice', true );
		}
	}
endif;
add_action( 'admin_init', 'glowmerry_ignore_admin_notice' );
function glowmerry_dashboard_menu() {
	add_theme_page( esc_html__( 'Glowmerry', 'glowmerry' ), esc_html__( 'Glowmerry', 'glowmerry' ), 'edit_theme_options', 'about-glowmerry', 'glowmerry_theme_info_display' );
}
add_action( 'admin_menu', 'glowmerry_dashboard_menu' );
function glowmerry_theme_info_display() {
	?>
	<div class="dashboard-about-glowmerry">
		<h1> <?php echo __( 'Welcome to the Glowmerry - FSE WordPress Theme', 'glowmerry' ); ?></h1>
		<p><?php echo __( "GlowMerry is a stylish and feature-rich eCommerce theme designed for modern online stores, offering a seamless shopping experience across all devices. With its customizable shop layouts, sleek product pages featuring many core-block styles, it ensures effortless navigation for customers. The optimized cart and checkout process enhance conversions, while its mobile-friendly and performance-optimized design guarantees fast-loading pages and high SEO rankings. Built with flexibility in mind, GlowMerry supports Elementor and Gutenberg for easy customization, includes custom widgets and sidebars for enhanced functionality, and seamlessly integrates a stylish blog layout for sharing updates and promotions. Whether you're selling fashion, electronics, beauty products, or handmade crafts, GlowMerry provides the perfect balance of aesthetics and functionality to create a high-converting online store. Ready to start? Explore more at https://walkerwp.com/ ", 'glowmerry' ); ?></p>

		<h3 class="glowmerry-baisc-guideline-header"><?php echo __( 'Basic Theme Setup', 'glowmerry' ); ?></h3>
		<div class="glowmerry-baisc-guideline">
			<div class="featured-box">
				<ul>
					<li><strong><?php echo __( 'Setup Header Layout:', 'glowmerry' ); ?></strong>
						<ul>
							<li> - <?php echo __( 'Go to Appearance -> Editor -> Template Parts -> Header:', 'glowmerry' ); ?></li>
							<li> - <?php echo __( 'Click on Header -> Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'glowmerry' ); ?></li>
							<li> - <?php echo __( 'Click on save to update your layout', 'glowmerry' ); ?></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="featured-box">
				<ul>
					<li><strong><?php echo __( 'Setup Footer Layout:', 'glowmerry' ); ?></strong>
						<ul>
							<li> - <?php echo __( 'Go to Appearance -> Editor -> Template Parts -> Footer:', 'glowmerry' ); ?></li>
							<li> - <?php echo __( 'click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'glowmerry' ); ?></li>
							<li> - <?php echo __( 'Click on save to update your layout', 'glowmerry' ); ?></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="featured-box">
				<ul>
					<li><strong><?php echo __( 'Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'glowmerry' ); ?></strong>
						<ul>
							<li> - <?php echo __( 'Go to Appearance -> Editor -> Templates:', 'glowmerry' ); ?></li>
							<li> - <?php echo __( 'click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'glowmerry' ); ?></li>
							<li> - <?php echo __( 'Click on save to update your layout', 'glowmerry' ); ?></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<h3><?php echo __( 'Required Plugins', 'glowmerry' ); ?></h3>
		<p class="notice-text"><?php echo __( 'Please install and activate all recommended pluign to import the demo with "one click demo import" feature and unlock premium features!(For Pro version)', 'glowmerry' ); ?></p>
		<ul class="glowmerry-required-plugin">
			<li>
				<h4><?php echo __( '1.  Walker Core', 'glowmerry' ); ?>
					<?php
					if ( glowmerry_is_plugin_activated( 'walker-core/walker-core.php' ) ) {
						echo __( ': Plugin has been already activated!', 'glowmerry' );
					} elseif ( glowmerry_is_plugin_installed( 'walker-core/walker-core.php' ) ) {
						echo __( ': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'glowmerry' );
					} else {
						echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=walker-core&TB_iframe=true&width=600&height=550">' . esc_html__( 'Install and Activate', 'glowmerry' ) . '</a>';
					}
					?>
				</h4>
			</li>
			<li>
				<h4><?php echo __( '2. Advanced Import - Need only to use "one click demo import" features', 'glowmerry' ); ?>
					<?php
					if ( glowmerry_is_plugin_activated( 'advanced-import/advanced-import.php' ) ) {
						echo __( ': Plugin has been already activated!', 'glowmerry' );
					} elseif ( glowmerry_is_plugin_installed( 'advanced-import/advanced-import.php' ) ) {
						echo __( ': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'glowmerry' );
					} else {
						echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__( 'Install and Activate', 'glowmerry' ) . '</a>';
					}
					?>
				</h4>
			</li>
		</ul>
		<div class="featured-list">
			<div class="half-col free-features">
				<h3><?php echo __( 'Glowmerry Features (Free)', 'glowmerry' ); ?></h3>
				<ul>
					<li><strong> - <?php echo __( 'Home Sections and Patterns', 'glowmerry' ); ?></strong>
						<ul>
							<li> <?php echo __( '404 - Page Not Found pattern', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Hero Section Block', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Product Display Block - 2', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Call to Action Block - 2', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Testimonial Block', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Blog Block', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Sidebar pattern', 'glowmerry' ); ?></li>
						</ul>
					</li>
					<li> <strong>- <?php echo __( 'Our FSE Templates Ready', 'glowmerry' ); ?></strong>
						<ul>
							<li> <?php echo __( '404 Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Archive Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Blank Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Front Page Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Index Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Full Width Page Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Left Sidebar Page Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Right Sidebar Page Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Search Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Left Sidebar Single Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Single Full Width Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Single Right Sidebar Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Sitemap Template', 'glowmerry' ); ?></li>
						</ul>
					<li> <strong>- <?php echo __( 'Our WooCommerce Section and Patterns', 'glowmerry' ); ?></strong>
						<ul>
							<li> <?php echo __( 'Product Display Grid - 2', 'glowmerry' ); ?></li>
						</ul>
					<li> <strong>- <?php echo __( 'Our WooCommerce FSE Templates Ready', 'glowmerry' ); ?></strong>
						<ul>
							<li> <?php echo __( 'Product Archive Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Single Product Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Cart Template', 'glowmerry' ); ?></li>
							<li> <?php echo __( 'Checkout Template', 'glowmerry' ); ?></li>
						</ul>
					<li>
					<li><strong> - <?php echo __( 'Header Layouts', 'glowmerry' ); ?></strong></li>
					<li> <strong>- <?php echo __( 'Footer Layouts - 2', 'glowmerry' ); ?></strong></li>
					<li> <strong>- <?php echo __( 'Sidebar Layouts', 'glowmerry' ); ?></strong></li>
					<li><strong> - <?php echo __( 'Multiple Fonts Option', 'glowmerry' ); ?></strong></li>
					<li><strong> - <?php echo __( '15+ Style Scheme Option', 'glowmerry' ); ?></strong></li>
				</ul>
			</div>
			<div class="half-col pro-features">
				<h3><?php echo __( 'Premium Features', 'glowmerry' ); ?></h3>
				<ul>
					<li><?php echo __( 'Including all free features and more Premium patterns (10+ Patterns and 15+ Templates)', 'glowmerry' ); ?></strong></li>
					<li><?php echo __( 'Blog Carousel Layout', 'glowmerry' ); ?></li>
					<li><?php echo __( '3 Slider Patterns', 'glowmerry' ); ?></li>
					<li><?php echo __( '2 WooCommerce Product Patterns', 'glowmerry' ); ?></li>
				</ul>
			</div>
		</div>
	</div>
	<?php
}
