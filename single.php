<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package scrolling_panels_sounddevco_2019
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="post-single site-main">
		<header id="masthead" class="main-header">
			<a class='logo-box' href='http://www.sounddev.co/'>
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img" />
			</a>
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src='<?php echo get_template_directory_uri(); ?>/img/mobile-menu.png'/></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav>
		</header><!-- #masthead -->
		<div class='body-wrapper'>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
			<div class='page-footer'>
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
	</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
