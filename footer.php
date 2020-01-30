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
			<span class="marquee">BAY Helsinki Pilates Yoga & Barre | Kanavaranta 7 C 12 00160 Helsinki | +358445321017 |</span>
		</div>
		<div class="mh3 mh4-ns">
			<div class="studio-footer mv5-ns container--mw1300">
				<div class="studio-footer-content grid--col12">
					<div class="studio-footer-newsletter">
						<div class="studio-footer-newsletter-cover">
						<h3 >READY FOR BETTER?<br>
							WE HOPE SO.</h3>
						<p class="studio-footer-newsletter-description">Be the first to know about what's going on at the studio and get our exclusive offers.</p>
						<button class="email-list-button button button--small button--inlineBlock button--dark-outline button--br50">Stay in the know</button>
						</div>
							<!-- Begin BrandBot Signup Form -->
							<!-- <link href="https://assets.brandbot.com/public/embed/form-1.4.css" rel="stylesheet" type="text/css"> -->
						<div class="studio-footer-newsletter-content">
						<div id="bb_form">
								<form method="post" action="https://embed.brndbot.net/create" id="bb_form_inner">
									<div id="alert" class="alert" style="display: none;"></div>
									
									<div class="bb_form-name-container">
										<div class="form-group">
											<label for="bb_first_name">First Name</label>
											<input type="text" name="bb_first_name" id="bb_first_name" class="form-control" required="required" />
										</div> 

										<div class="form-group">
											<label for="bb_last_name">Last Name</label>
											<input type="text" name="bb_last_name" id="bb_last_name" class="form-control" required="required" />
										</div> 
									</div>
									
									<div class="form-group email">
										<label for="bb_email">Email Address</label>
										<input type="email" name="bb_email" id="bb_email" class="form-control" required="required" />
									</div>

									<div class="form-group">
										<input type="hidden" name="bb_uuid" id="bb_uuid" value="9f80925b-6c2c-4867-bf8e-7bec2ded6968" />
										<button type="submit" class="btn button button--small button--inlineBlock button--dark-outline button--br50" id="bb_submit">Subscribe</button>
									</div>

								</form>
							</div>

							<script>window.jQuery || document.write('<scr'+'ipt src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></scr'+'ipt>')</script>
							<script src="https://assets.brandbot.com/public/embed/form-1.2.js"></script>
							<!-- Ending BrandBot Signup Form -->

						</div>
							
					</div>

					<div class="studio-footer-navigation-column studio-footer-navigation-column_discover">
						<h6>Discover</h6>
						<nav class="studio-footer-navigation">
						<?php
										wp_nav_menu( array(
											'theme_location' => 'studio-footer-menu-column-discover',
											'menu_class' => 'footer-menu studio-footer-menu'
										) );
						?>
						</nav>
					</div>
					<div class="studio-footer-navigation-column studio-footer-navigation-column_support">
						<h6>Support</h6>
						<nav class="studio-footer-navigation">
						<?php
						wp_nav_menu( array(
						'theme_location' => 'studio-footer-menu-column-support',
						'menu_class' => 'footer-menu studio-footer-menu'
						) );
						?>
						</nav>
						
					</div>
					<div class="studio-footer-navigation-column studio-footer-navigation-column_contact">
						<div class="studio-footer-navigation-column_contact-location">
						<h6>Location</h6>
						<p>Kanavaranta <span>7 C 12</span></p>
						<p>00160 <span>Helsinki</span></p>
						</div>
						<div class="studio-footer-navigation-column_contact-phone">
						<h6>Phone</h6>
						<p>+358445321017</p>
						</div>
					</div>

					<div class="studio-footer-navigation-column studio-footer-navigation-column_social">
						<a href="https://www.facebook.com/bayhelsinki/">
							<img src="<?php bloginfo('template_url'); ?>/dist/img/facebook-logo-white.png">
						</a> 
						<a href="https://www.instagram.com/bayhelsinki/">
							<img src="<?php bloginfo('template_url'); ?>/dist/img/instagram-logo-white.png">
						</a> 
					</div>

				</div>
				

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
	horizontal_padding: 32, 
	vertical_padding: 32 
	};
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/' + APP_ID;var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>

</body>
</html>
