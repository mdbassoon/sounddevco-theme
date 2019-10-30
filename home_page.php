<?php /* Template Name: Home Page Template */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package scrolling_panels_sounddevco_2019
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main home-page">
			<div id='panel-1' class='panel'>
				<div class='logo-box'>
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
					<h2>Sound Development. Sound Practices.</h2>
				</div>
				<div class='scroll-button'>Scroll Down <div class='down-arrow'></div></div>
				<img class='panel-background' src="<?php echo get_template_directory_uri(); ?>/img/panel-1.jpg" alt="seattle-skyline"/>
			</div>
			<div id='panel-2' class='panel'>
				<?php dynamic_sidebar('Panel 2');?>	
				<div class='contact-button'>Contact Us <div class='down-arrow'></div><div class='down-arrow-2'></div></div>
				<img class='panel-background' src="<?php echo get_template_directory_uri(); ?>/img/panel-2.jpg" alt="shaking-hands-building-trust"/>
			</div>	
			<div id='panel-3' class='panel'>
				<?php dynamic_sidebar('Panel 3');?>
				<div class='top-button'><div class='up-arrow'></div>Top</div>
				<div class='contact-button'>Contact Us <div class='down-arrow'></div><div class='down-arrow-2'></div></div>
				<img class='panel-background' src="<?php echo get_template_directory_uri(); ?>/img/panel-3.jpg" alt="working-on-coding"/>
				<div id='portfolio-slider' class='slider'>
					<div id='portfolio-close' class='close'>X</div>
					<div class='slider-wrapper'>
							<div class='slide' id='slide-1'>
								<div class='slide-margin'>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/columbia-pediatrics.png"/>
									<h1>Columbia Pediatrics</h1>
									<p>Columbia Pediatrics has served children in Long Beach for over 40 years! We built their modern, clean and colorful website designed by Long Beach Web Design. All of our sites are built to be completely responsive, ensuring great user interaction no matter the device or screen size.</p>
									<p><a target='_blank' href='https://www.columbiapediatrics.com/'>https://www.columbiapediatrics.com/</a></p>
								</div>
							</div>
							<div class='slide' id='slide-2'>
								<div class='slide-margin'>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/skybound.png"/>
									<h1>Skybound</h1>
									<p>Skybound needed to extend their custom shopify theme in time for last minute Black Friday deals. We were able to help them get their message out in time. We can build or modify existing or custom themes from shopify or wordpress to help you get the most out of your ecommerce business.</p>
									<p><a target='_blank' href='https://www.skyboundusa.com/'>https://www.skyboundusa.com/</a></p>
								</div>
							</div>
							<div class='slide' id='slide-3'>
								<div class='slide-margin'>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/pcps.png"/>
									<h1>PCPS Inc.</h1>
									<p>This beautiful, minimalistic custom Wordpress template has helped PCPS increase their visibility. We have built websites for companies across a wide range of industries, and work hard to ensure the end results are exactly what they need.</p>
									<p><a target='_blank' href='https://www.pcps-inc.com/'>https://www.pcps-inc.com/</a></p>
								</div>
							</div>
							<div class='slide' id='slide-4'>
								<div class='slide-margin'>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/karate.png"/>
									<h1>American Martial Arts Academy</h1>
									<p>One of the biggest karate programs in Orange County, CA, the OC Karate School needed a new website that would help them showcase their variety programs and allow people to sign up and view event. Now, they run all of their scheduling through their site and all of their event information is in one convenient place.</p>
									<p><a target='_blank' href='https://www.karateoc.com/'>https://www.karateoc.com/</a></p>
								</div>
							</div>
							<div class='slide' id='slide-5'>
								<div class='slide-margin'>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/sober.png"/>
									<h1>Sober Crying</h1>
									<p>Sober Crying wanted to bring their self designed site to life so they could sell their custom clothing. We were able to take their design and turn it into a fully functioning ecommerce site. We allowed them to cut out all the middle men and ensure that they keep what they make with a site that best represents their brand.</p>
									<p><a target='_blank' href='https://www.sobercrying.com/'>https://www.sobercrying.com/</a></p>
								</div>
							</div>
							<div class='slide' id='slide-6'>
								<div class='slide-margin'>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/supply.png"/>
									<h1>101 Supply</h1>
									<p>101 Supply needed a site that could help them sell their diverse array of products with multiple pricing schemes. We were able to set them up with a clean, functional ecommerce site that got their business off the ground.</p>
									<p><a target='_blank' href='https://www.101supply.net/'>https://www.101supply.net/</a></p>
								</div>
							</div>
							<div class='slide' id='slide-7'>
								<div class='slide-margin'>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/kelly.png"/>
									<h1>Kelly Williams Insurance</h1>
									<p>Kelly Williams had their site for years and they still very much liked it. They realized, however, that having a site you could only view on a desktop was hurting their SEO. We adapted it to work on any screen size, keeping Kelly Williams and Googles indexing bots happy for years to come.</p>
									<p><a target='_blank' href='http://kellywilliamsins.com/'>http://kellywilliamsins.com/</a></p>
								</div>
							</div>
							<div class='slide' id='slide-8'>
								<div class='slide-margin'>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/sdc.png"/>
									<h1>SDC Millworks</h1>
									<p>SDC Millworks needed a redesign so they could showcase their projects and services in a clean, approachable way. We built them a very streamlined site, with a gallery that helps them show off their best!</p>
									<p><a target='_blank' href='https://sdcmillworks.com/'>https://sdcmillworks.com/</a></p>
								</div>
							</div>
							<div class='slide' id='slide-9'>
								<div class='slide-margin'>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/premiere.png"/>
									<h1>Premiere Packaging, Inc.</h1>
									<p>Premiere packaging is a full-service paper, packaging and janitorial supply distributor based in Southern California with an extensive product line representing every major manufacturer in the industry. We brought their catalog online with an easy to navigate ecommerce site.</p>
									<p><a target='_blank' href='https://premierepackaging.com/'>https://premierepackaging.com/</a></p>
								</div>
							</div>
							<div class='slide' id='slide-10'>
								<div class='slide-margin'>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/chiro.png"/>
									<h1>Long Beach Spine &amp; Rehabilitation Chiropractic Center</h1>
									<p>Because they offer a multitude of services, we built Long Beach Spine &amp; Rehabilitation Chiropractic Center a clean site that clearly outlines everything they offer, as well gives them a place where they can keep information relevant to their patients.</p>
									<p><a target='_blank' href='https://www.longbeachchiro.com/'>https://www.longbeachchiro.com/</a></p>
								</div>
							</div>
							<div class='slide' id='slide-11'>
								<div class='slide-margin'>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/btc.png"/>
									<h1>Bator Training &amp; Consulting Inc.</h1>
									<p>Ken Bator is a consultant that needed a site that would help him expand his clientele and showcase his training videos. We've built sites for a wide range of businesses.</p>
									<p><a target='_blank' href='https://btcinc.net/'>https://btcinc.net/</a></p>
								</div>
							</div>
					</div>
					<div class='left-arrow arrow' href=''></div>
					<div class='right-arrow arrow' href=''></div>
				</div>		
			</div>			
			<div id='panel-4' class='panel'>
				<?php dynamic_sidebar('Panel 4');?>
				<div class='top-button'><div class='up-arrow'></div>Top</div>
				<div class='contact-button'>Contact Us <div class='down-arrow'></div><div class='down-arrow-2'></div></div>
				<img class='panel-background' src="<?php echo get_template_directory_uri(); ?>/img/panel-4.jpg" alt="refining-it-down-with-stickies"/>
			</div>			
			<div id='panel-5' class='panel'>
				<?php dynamic_sidebar('Panel 5');?>
				<div class='top-button'><div class='up-arrow'></div>Top</div>
				<div class='contact-button'>Contact Us <div class='down-arrow'></div><div class='down-arrow-2'></div></div>
				<img class='panel-background' src="<?php echo get_template_directory_uri(); ?>/img/panel-5.jpg" alt="multiple-monitors-platforms"/>
			</div>
			<div id='panel-6' class='panel'>
				<?php dynamic_sidebar('Panel 6');?>
				<div class='top-button'><div class='up-arrow'></div>Top</div>
				<div class='contact-button'>Contact Us <div class='down-arrow'></div><div class='down-arrow-2'></div></div>
				<img class='panel-background' src="<?php echo get_template_directory_uri(); ?>/img/panel-6.jpg" alt="scientist-pipetting-protective-gloves"/>
			</div>
			<div id='panel-7' class='panel'>
				<?php dynamic_sidebar('Panel 7');?>
				<div class='top-button'><div class='up-arrow'></div><div class='up-arrow-2'></div>Top</div>
				<div class='contact-button'>Contact Us<div class='down-arrow'></div></div>
				<img class='panel-background' src="<?php echo get_template_directory_uri(); ?>/img/panel-7.jpg" alt="digitally-enhancing-file"/>
				<div id='sound-slider' class='slider'>
				<div id='sound-close' class='close'>X</div>
				<div class='slider-wrapper'>
						<div class='slide' id='slide-1'>
							<div class='slide-margin'>
								<h1>WEB SYNTHESIZER</h1>
								<p>Using the <a target='_blank' href='https://developer.mozilla.org/en-US/docs/Web/API/Web_Audio_API'>Web Audio API</a>, we were able to build a polyphonic synthesizer with the React framework. To demonstrate the power of react and this API, we hooked up the real time information feed into a web canvas, which will show you the shape of the chords as you play them! Use your computer keyboard, mouse, phone or midi controller and have fun making some music. This API gives your browser the potential to be as powerful as any commercial synthesizer, but it is especially useful in providing a way to take a programmatic approach to video game music.</p>
								<p><a target='_blank' href='http://synth.sounddev.co/'>http://synth.sounddev.co/</a></p>
							</div>
						</div>
				</div>
			</div>	
			</div>
			<div id='panel-8' class='panel'>
				<?php dynamic_sidebar('Panel 8');?>
				<div class='top-button'><div class='up-arrow'></div><div class='up-arrow-2'></div>Top</div>
				<img class='panel-background' src="<?php echo get_template_directory_uri(); ?>/img/panel-8.jpg" alt="open-laptop-cell-phone-sunglasses"/>
				<div class='panel-footer'>
					<ul>
						<li><a href='<?php echo get_site_url(); ?>/blog'>BLOG</a></li>
						<li><a href='<?php echo get_site_url(); ?>/about'>ABOUT US</a></li>
						<li><a href='<?php echo get_site_url(); ?>/contact'>CONTACT US</a></li>
						<li><a href='<?php echo get_site_url(); ?>/careers'S>CAREERS</a></li>
					</ul>
					<p>
					&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><br>
					<span>Designed by <a href="http://www.longbeachwebdesign.com" title="Long Beach, CA Website Design, Ecommerce, Website Hosting, & Graphics" target="_blank">LBWD</a></span>		
						</p>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
