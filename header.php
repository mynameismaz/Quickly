<!DOCTYPE html>
<html lang="en">
<head <?php language_attributes(); ?>>
	<!-- metatags and stuff -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Massimo Piedimonte">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<main class="container-fluid">
	<!-- header section -->
	<header>
		<!-- navbar -->
		<nav class="quickly-navbar">
			<?php
				// if there's a logo, use it... otherwise use the name of the website
				$logo = empty(get_custom_logo()) ? '<a class="quickly-navbar-brand" href="'. get_home_url() .'">' . get_bloginfo('name') . '</a>' : get_custom_logo();
			?>
			<?php print $logo ?>
		  <section class="quickly-navbar-hamburger-menu">
				<div>
					<span class="js-quickly-navbar-hamburger-menu-item"></span>
					<span class="js-quickly-navbar-hamburger-menu-item"></span>
					<span class="js-quickly-navbar-hamburger-menu-item"></span>
				</div>
			</section>

		  <section class="quickly-navbar-content quickly-navbar-content-off">
		   	<?php
					wp_nav_menu( array(
						'theme_location'	=> 'top',
				    'depth'						=> 1,
						'container'				=> 'ul',
						'menu_class'			=> 'quickly-navbar-content-menu',
				    'fallback_cb'			=> 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker
					) );
		   	?>
		   	<div class="quickly-navbar-content-searchform">
					<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
						<div class="input-group">
						  <input type="text" class="form-control" name="s" placeholder="Search for...">
						  	<span class="input-group-btn">
						    <button type="submit" class="btn btn-secondary" type="button">Go!</button>
						  </span>
						</div>
					</form>
				</div>
		  </section>
		</nav>
	</header>