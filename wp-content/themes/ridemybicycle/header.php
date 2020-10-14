<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head>
section and everything up until
<div id="content">
* * @link
https://developer.wordpress.org/themes/basics/template-files/#template-partials
* * @package ridemybicycle */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<?php if( !has_site_icon() ) :?>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">
		<?php endif; ?>
		<title><?php the_title() ?></title>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<div class="wrap">
			<?php require_once(get_template_directory() . '/template-parts/preloader.php') ?>
			<header class="header">
				<div class="container">
					<div class="row py-4 d-flex align-items-center">
						<div class="col-12 col-md-6">
							<div class="header__logo header-logo text-center text-md-left">
								<?php
									// $custom_logo_id = get_theme_mod( 'custom_logo' );
									// $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
									if ( has_custom_logo() ) : ?>
										<a href="<?= get_home_url(); ?>">
											<img class="header-logo__image" src="<?= esc_url( $logo[0] ); ?>" alt="<?= get_bloginfo( 'name' ); ?>">
											<span class="header-logo__name ml-2">
												<?= get_bloginfo( 'name' ); ?>
											</span>
											<!-- /.logo__name -->
										</a>
									<?php else : ?>
										<a href="<?= get_home_url(); ?>">
											<img class="header-logo__image mb-2" src="<?= get_stylesheet_directory_uri(); ?>/images/logo.png" alt="<?= get_bloginfo( 'name' ); ?>">
											<span class="header-logo__name ml-2">
												<?= get_bloginfo( 'name' ); ?>
											</span>
											<!-- /.logo__name -->
										</a>
									<?php endif; ?>
							</div>
							<!-- /.header__logo -->
						</div>
						<!-- /.col-6 -->
						<div class="col-12 col-md-6">
							<div class="header__search header-search text-center text-md-right">
									<?= get_search_form(); ?>
							</div>
							<!-- /.search -->
						</div>
						<!-- /.col-6 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
				<?php  if( get_nav_menu_locations()) : ?>
				<nav class="navbar navbar-expand-md navbar-dark header__menu py-0" role="navigation">
					<div class="container py-0 pl-0">
						<!-- Brand and toggle get grouped for better mobile display -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
							<span class="navbar-toggler-icon"></span>
						</button>
							<?php
							wp_nav_menu( array(
								'theme_location'    => 'top-menu',
		
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
							) );
							?>
					</div>
					<!-- /.container -->
				</nav>
				<!-- /.navbar -->
				<?php endif; ?>
			</header>
			<!-- /.header -->
