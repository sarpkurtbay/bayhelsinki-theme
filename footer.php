<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bayhelsinki
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer">

		<div class="marquee-container">
			<span class="marquee">Kanavaranta 7 C 12 00160 Helsinki | Open Everyday | 0503077688 |</span>
		</div>

		<div class="footer-container">
			<div class="footer-content">
				<div class="contact-information">
					<div class="address">
						<p>Kanavaranta  <span>7 C 12</span><br>
						00160  <span>Helsinki</span></p>
					</div>
					<div class="phone-number">
						<p>+358445321017</p>
					</div>
				</div>

				<div class="newsletter-subscription-form">
					<div id="bb_form">
						<form method="post" action="https://embed.brndbot.net/create" id="bb_form_inner">
							<div id="alert" class="alert" style="display: none;"></div>
							
							<div class="form-group">
								<label for="bb_email">Stay in the know</label>
								<div class="combined-box">
									<input type="email" name="bb_email" id="bb_email" placeholder="Email Address" class="form-control" 			required="required" />
									<input type="hidden" name="bb_uuid" id="bb_uuid" value="9f80925b-6c2c-4867-bf8e-7bec2ded6968" />
									<button type="submit" class="btn" id="bb_submit">Submit</button>
								</div>
							</div>
						</form>
					</div>
					<script>window.jQuery || document.write('<scr'+'ipt src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></scr'+'ipt>')</script>
					<script src="https://assets.brandbot.com/public/embed/form-1.2.js"></script>
					<!-- Ending BrandBot Signup Form -->
				</div>

				<div class="footer-navigation">
					<nav id="site-navigation-responsive" class="main-navigation">

					<?php
						wp_nav_menu( array(
							'theme_location' => 'studio-footer-menu-column-1',
							'menu_class' => 'footer-menu-column studio-footer-menu-column-1'
						) );
					?>

					<?php
						wp_nav_menu( array(
							'theme_location' => 'studio-footer-menu-column-2',
							'menu_class' => 'footer-menu-column studio-footer-menu-column-2'
						) );
					?>

					<?php
						wp_nav_menu( array(
							'theme_location' => 'studio-footer-menu-column-3',
							'menu_class' => 'footer-menu-column studio-footer-menu-column-3'
						) );
					?>
								
					</nav><!-- #site-navigation "menu-1" just a note about theme location-->
				</div>
			</div>
		</div>
		<div class="footer-detail-bar-container">
			<div class="footer-detail-bar-content">
				<a href="#">Terms & Conditions</a>
				<a href="#">Privacy Policy</a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<script>
  var APP_ID = "APP_ID";
  window.intercomSettings = {
	app_id: "he1jx0qq",
	alignment: 'right',     
	horizontal_padding: 20, 
	vertical_padding: 20 
	};
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/' + APP_ID;var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>

</body>
</html>
