<?php
/**
 * Template Name: Contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package straightlineRefrigerationResponsive
 */
get_header();

?>
<div id="barba-wrapper">

	<div class="barba-container">

		<div id="main-content" class="content-area">

			<main id="main" class="site-main">

				<section id="contactHero">

					<div class="mediumHero teamHero" aria-label="[Straightline Refrigeration Team Photo]">

						<div class="mediumHeroOverlay">

							<div class="heroHeadingWrap fullWidth bottomHeading">

								<div class="col50 heroHeading homeHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Let’s Talk Solutions</h1>

									</div>

								</div>
								<div class="col50"></div>

							</div>

						</div>

					</div>

				</section>

				<div class="mobileHeroHeading">

					<h1 class="whiteText">Let’s Talk Solutions</h1>

				</div>

				<section id ="contactContent">

					<div id="contactWrapper">

						<div class="pageWidth flex-container centeredContainer">

							<div id="formWrap" class="smallPaddedSection">

								<h2>Contact Straightline Refrigeration</h2>

								<p>
									Whether a small challenge or a grand vision, we'll start with a solid plan. Set up a consultation!
								</p>

								<h3>Call us at <a class="plainLink" href="tel:(920)903-1043">(920) 903-1043</a></h3>

								<p>or complete the form below.</p>

							</div>

						</div>

						<div class="col60 contactWrap">

							<?php echo do_shortcode('[caldera_form id="CF5c7d6d9457fa6"]'); ?>

						</div>

					</div>

					<div class="pageWidth paddedSection">

						<div class="contactWrap">

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2857.1358334270067!2d-88.4374370199389!3d44.26602502831783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8803b7061f51df53%3A0xc44fc214a0c9406b!2sStraightline+Refrigeration!5e0!3m2!1sen!2sus!4v1537098566983" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

						</div>

					</div>

				</section>

			</main>

		</div>

	</div>

</div>
<?php

get_footer();
