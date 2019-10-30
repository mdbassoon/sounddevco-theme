<?php /* Template Name: Contact Template */
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
		<img class='panel-background' src="<?php echo get_template_directory_uri(); ?>/img/panel-8.jpg" alt="open-laptop-cell-phone-sunglasses"/>
		<main id="main" class="about-page contact-page">
			<div class='content-wrapper'>
				<a class='logo-box' href='http://www.sounddev.co/'>
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img" />
					<h2>Sound Development. Sound Practices.</h2>
				</a>
				<div class='page-box'>
					<h1>CONTACT US</h1>
					<p><?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]'); ?></p>					
				</div>
				<div class='panel-footer'>
					<ul>
						<li><a href='<?php echo get_site_url(); ?>/blog'>BLOG</a></li>
						<li><a href='<?php echo get_site_url(); ?>/about'>ABOUT US</a></li>
						<li><a href='<?php echo get_site_url(); ?>/contact'>CONTACT US</a></li>
						<li><a href='<?php echo get_site_url(); ?>/careers'>CAREERS</a></li>
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