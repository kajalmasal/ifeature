<?php
/**
 * Header Template
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v3.0 (or later)
 * @link     https://www.cyberchimps.com/
 */
?>
	<!DOCTYPE html>
	<!--[if lt IE 7]>
	<html class="ie ie6 lte9 lte8 lte7" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if IE 7]>
	<html class="ie ie7 lte9 lte8 lte7" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if IE 8]>
	<html class="ie ie8 lte9 lte8" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if IE 9]>
	<html class="ie ie9" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if gt IE 9]>
	<html <?php language_attributes(); ?>> <![endif]-->
	<!--[if !IE]><!-->
<html <?php language_attributes(); ?>>
	<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width"/>

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

		<!-- IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/inc/js/html5.js" type="text/javascript"></script>
		<![endif]-->

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

<!-- ---------------- Top Header ------------------- -->
<?php
if( Cyberchimps_Helper::cyberchimps_get_option( 'top_header_bar', 1 ) ): ?>
	<div class="container-full-width" id="top_header">
		<div class="container">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span6">
						<div class="top-head-description">
							<?php echo get_bloginfo( 'description' ); ?>
						</div>
					</div>
					<div class="top-head-social span6">
						<?php Cyberchimps_Hooks::cyberchimps_header_social_icons(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<!-- ---------------- Header --------------------- -->
<div id="header_section">
<div id="header_section" class="container-full-width">

	<div class="container">

		<?php do_action( 'cyberchimps_before_wrapper' ); ?>

		<div class="container-fluid">

			<?php do_action( 'cyberchimps_header' ); ?>

		</div>
		<!-- container fluid -->

	</div>
	<!-- container -->

</div>
<!-- container full width -->

<?php do_action( 'cyberchimps_before_navigation' ); ?>

<!-- ---------------- Menu ----------------------- -->

<div class="container-full-width" id="main_navigation">
	<div class="container">
		<div class="container-fluid">
			<nav id="navigation" role="navigation">
				<div class="main-navigation navbar navbar-inverse">
					<div class="navbar-inner">
						<div class="container">
							<?php /* hide collapsing menu if not responsive */
							if (Cyberchimps_Helper::cyberchimps_get_option( 'responsive_design', 'checked' )): ?>
							<div class="nav-collapse collapse" aria-expanded="true">
								<?php endif; ?>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav', 'walker' => new cyberchimps_walker(), 'fallback_cb' => 'cyberchimps_fallback_menu' ) ); ?>

								<?php if( Cyberchimps_Helper::cyberchimps_get_option( 'searchbar', 1 ) == "1" ) : ?>

									<?php get_search_form(); ?>

								<?php endif; ?>

								<?php /* hide collapsing menu if not responsive */
								if (Cyberchimps_Helper::cyberchimps_get_option( 'responsive_design', 'checked' )): ?>
							</div>
						<!-- collapse -->

						<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
						<?php endif; ?>
						</div>
						<!-- container -->
					</div>
					<!-- .navbar-inner .row-fluid -->
				</div>
				<!-- main-navigation navbar -->
			</nav>
			<!-- #navigation -->
		</div>
		<!-- container-fluid -->
	</div>
	<!-- container -->
</div>
<!-- container full width -->
</div>
<?php do_action( 'cyberchimps_after_navigation' ); ?>
