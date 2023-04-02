<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package Puzzle
 */

?>
<!doctype html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
			<link rel="profile" href="https://gmpg.org/xfn/11">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" integrity="sha256-ybRkN9dBjhcS2qrW1z+hfCxq+1aBdwyQM5wlQoQVt/0=" crossorigin="anonymous" />
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

			<!-- <link rel="stylesheet" type="text/css" href="css/tooltipster.css" /> -->
			<script type="text/javascript" src="js/jquery.tooltipster.min.js"></script>
			<?php wp_head(); ?>
		</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'malerc' ); ?></a>
				<header id="myHeader">
					<?php if (is_front_page() || is_404() ): ?>
						<div class="container-fluid">
								<div class="menu-here"> 
									<nav class="navbar navbar-expand-lg navbar-light navbar-center wfixed">

										<a class="logo_header" style="list-style: none;" href="<?php echo esc_url(home_url('/')); ?>">
											<?php dynamic_sidebar('logo');?>
										</a> 
									
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
										aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
										<div class="menu-m">
											<span class="menu-global menu-top"></span>
											<span class="menu-global menu-middle"></span>
											<span class="menu-global menu-bottom"></span>
										</div>
										</button>
										
										<?php wp_nav_menu(
											array(
											'theme_location'    => 'menu-1',
											'menu_id'        => 'primary-menu',
											'menu_class'        => 'navbar-nav',
											'container_class'  => 'collapse navbar-collapse main-nav-toggle',
											'container_id'    => 'navbarNav',
											)
											); 
										?>

										<div class="widget-phone">
											<?php dynamic_sidebar('widget-1');?>
										</div> 
									</nav>
								</div>
							</div>
					<?php else: ?>
						<div class="container-fluid">
								<div class="menu-here"> 
									<nav class="navbar navbar-expand-lg navbar-light navbar-center wfixed">

										<a class="logo_header" style="list-style: none;" href="<?php echo esc_url(home_url('/')); ?>">
											<?php dynamic_sidebar('logo');?>
										</a> 
									
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
										aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
										<div class="menu-m">
											<span class="menu-global menu-top"></span>
											<span class="menu-global menu-middle"></span>
											<span class="menu-global menu-bottom"></span>
										</div>
										</button>
										
										<?php wp_nav_menu(
											array(
											'theme_location'    => 'menu-1',
											'menu_id'        => 'primary-menu',
											'menu_class'        => 'navbar-nav',
											'container_class'  => 'collapse navbar-collapse main-nav-toggle',
											'container_id'    => 'navbarNav',
											)
											); 
										?>

										<div class="widget-phone">
											<?php dynamic_sidebar('widget-1');?>
										</div> 
									</nav>
								</div>
							</div>
					<?php endif;?>
				</header>




