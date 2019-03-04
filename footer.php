<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package straightlineRefrigerationResponsive
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

    <div class="footerContact pageWidth flex-container">

      <div class="col30" id="footerLogo">

        <a href="/"><img src="/wp-content/uploads/2019/02/logoWhiteMedium.png" class="footerLogo" alt="Straightline Refrigeration Logo"></a>

      </div>

      <div class="col30">

        <address class="noStyle">

          <a href="tel:(920)903-1043" class="centerText"><h4>(920) 903-1043</h4></a>

          <a href="mailto:info@straightlinerefrigeration.com" id="footerEmail" class="centerText"><p>info@straightlinerefrigeration.com</p></a>

          <p class="centerText">1925 West Packard Street</p>

          <p class="centerText">Appleton, WI</p>

        </address>

      </div>

      <div class="col30">

        <nav role="navigation" aria-label="footer navigation">

          <div class="footerLinkWrap">

            <a href="/">HOME</a>

            <a href="/about/">ABOUT</a>

            <a href="/projects/">PROJECTS</a>

            <a href="/contact/">CONTACT US</a>

          </div>

        </nav>

      </div>

    </div>

    <div id="copyright">

      <div id ="copyrightContentWrap" class="pageWidth">

        <div class="col30">

          <div id="copyrightWrap">

            <svg class="smallIcon" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">

								<defs>

									<symbol id="icon-copyright" viewBox="0 0 24 28">

										<title>copyright</title>

										<path d="M17.969 16.781v1.703c0 2.203-3.516 3.016-5.719 3.016-4.281 0-7.5-3.266-7.5-7.578 0-4.234 3.187-7.422 7.422-7.422 1.547 0 5.594 0.547 5.594 3.031v1.703c0 0.141-0.109 0.25-0.25 0.25h-1.844c-0.141 0-0.25-0.109-0.25-0.25v-1.094c0-0.984-1.891-1.437-3.172-1.437-2.922 0-4.953 2.109-4.953 5.141 0 3.141 2.125 5.437 5.078 5.437 1.125 0 3.25-0.422 3.25-1.406v-1.094c0-0.141 0.109-0.25 0.234-0.25h1.859c0.125 0 0.25 0.109 0.25 0.25zM12 4c-5.516 0-10 4.484-10 10s4.484 10 10 10 10-4.484 10-10-4.484-10-10-10zM24 14c0 6.625-5.375 12-12 12s-12-5.375-12-12 5.375-12 12-12v0c6.625 0 12 5.375 12 12z"></path>

									</symbol>

								</defs>

							</svg>

							<svg class="icon icon-copyright"><use xlink:href="#icon-copyright"></use></svg><p>&nbsp;<script>document.write(new Date().getFullYear());</script> Straightline Refrigeration</p>

          </div>

        </div>

        <div id ="copyrightLinkWrap" class="col30">

          <nav role="navigation" aria-label="privacy policy and contact links">

            <a href="/privacy-policy/" class="borderRight" id="privacyLink">Privacy Policy</a>

            <a href="/contact/" id="contactLink" >Contact Us</a>

          </nav>

        </div>

        <div class="col30">

          <div id="siteAuthor">Web Design by<a href="https://insightcreative.com" target="_blank" rel="noopener" id="siteAuthorLink"> Insight Creative</a></div>

        </div>

      </div>

    </div>

	<!--  Script for barba.js  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/barba.js/1.0.0/barba.min.js" type="text/javascript" async></script>

  <!-- Script for lazysizes lazy loading images -->
  <script src="/js/lazysizes.min.js"></script>

  <script src="/js/main.min.js" type="text/javascript" async></script>

  <script src="/js/jquery.formalize.min.js" type="text/javascript" async></script>

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
