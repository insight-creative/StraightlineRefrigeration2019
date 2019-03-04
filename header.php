<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package straightlineRefrigerationResponsive
 */
?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>

	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-13074741-49"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-13074741-49');
</script>

</head>

<body <?php body_class(); ?>>

<nav role="navigation" aria-label="mobile navigation">

	<div class = "menu">

			<div class = "linkWrap">

				<ul class="linkList">

					<li>

						<a class="menuLink" href = "/" role="link">HOME</a>

					</li>

					<li>

						<a class="menuLink" href = "/about/" role="link">ABOUT</a>

					</li>

					<li>

						<a class="menuLink" href = "/projects/" role="link">PROJECTS</a>

					</li>

					<li>

						<a class="menuLink" href = "/contact/" role="link">CONTACT</a>

					</li>

				</ul>

			</div>

			<div class="closeMenuButton fullWidth centeredContainer" aria-label="close mobile menu" tabindex="0">

				<div id="closeMenuButtonWrapper">

					<h4 id="closeMenuTitle">CLOSE MENU</h4>

				</div>

			</div>

	</div>

</nav>

<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

		<nav role="navigation" aria-label="desktop sub navigation">

			<div class="secondaryNavigation">

				<div class="pageWidth secondaryMenuWrap">

					<svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

						<defs>

							<symbol id="icon-phone" viewBox="0 0 32 32">

								<title>phone</title>

								<path d="M22 20c-2 2-2 4-4 4s-4-2-6-4-4-4-4-6 2-2 4-4-4-8-6-8-6 6-6 6c0 4 4.109 12.109 8 16s12 8 16 8c0 0 6-4 6-6s-6-8-8-6z"></path>

							</symbol>

						</defs>

					</svg>

					<svg class="icon icon-phone"><use xlink:href="#icon-phone"></use></svg>

					<a class="secondaryLink" href="tel:(920)903-1043" role="link">(920) 903-1043</a>

				</div>

			</div>

		</nav>

		<div id="site-navigation" class="main-navigation">

			<nav role="navigation" aria-label="primary navigation">

				<div class="pageWidth menuLinkWrap">

						<a href="https://wordpress-154794-764936.cloudwaysapps.com/" role="link">

							<img src="/wp-content/uploads/2019/02/logoWhiteMedium.png" class="siteLogo" alt="Straightline Refrigeration Logo"></a>

						<ul class="linkList2">

							<li>

								<a class="menuLink" href="/" role="link">HOME</a>

							</li>

							<li>

								<a class="menuLink" href="/about/" role="link">ABOUT</a>

							</li>

							<li>

								<a class="menuLink" href="/projects/" role="link">PROJECTS</a>

							</li>

							<li>

								<a class="primaryButton" href="/contact/" role="link">CONTACT</a>

							</li>

						</ul>

						<div class = "menuButtonWrap" aria-label="mobile menu toggle button" tabindex="0">

							<div class = "menuTextWrap">

								<span class = "menuText">MENU</span>

								<span class = "menuBars">

									<span></span>

									<span></span>

									<span></span>

								</span>

							</div>

						</div>

				</div>

			</nav>

		</div><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
