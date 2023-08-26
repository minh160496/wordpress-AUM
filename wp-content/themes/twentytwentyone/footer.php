<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
			<div class="footer">
				<div class="foot-title-botton">
					<div class="foot-logo"> 
						<a href="#" rel="home">
						<img width="122" height="36" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/03/logo-udemy-white.png" class="foot-title-img" alt="" loading="lazy"> </a>
					</div>
					<div class="foot-title-content">
					<ul class="foot_menu_botton--content">
						<li>
							<a href="tel:%20(04)%20495-9400%201-800-544-2787" target="_blank" rel="noopener">
							<span>
							<i aria-hidden="true" class="tk tk-phone"></i> </span>
							(04) 495-9400 1-800-544-2787 </a>
						</li>
						<li style="color:#848E99">
							<span>
							<i aria-hidden="true" class="tk tk-map-marker"></i>  </span>
							A24BT5 Building London, England 
						</li>
						<li>
							<a href="mailto:contact@thimpress.com" target="_blank" rel="noopener">
							<span>
							<i aria-hidden="true" class="foot_menu_botton--span"></i> </span>
							contact@thimpress.com </a>
						</li>
						<li style="color:#848E99">
							<span>
							<i aria-hidden="true" class="far fa-clock"></i> </span>
							Daily: 10:00 Am - 5:00 Pm Monday &amp; Holiday: Closed 
						</li>
					</ul>

					</div>
				</div>
				<div class="foot_menu_botton">
					<div class="foot_menu_botton--title "><h4 class="title">Menu</h4></div>
					<ul class="foot_menu_botton--content">
						<li>
							<a href="#" target="_blank" rel="noopener">
							Classes </a>
						</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						Programs </a>
					</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						About Us </a>
					</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						Team </a>
					</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						Contact </a>
					</li>
					</ul>
					
				</div>
				<div class="foot_menu_botton">
					<div class="foot_menu_botton--title "><h4 class="title">Courses</h4></div>
					<ul class="foot_menu_botton--content">
						<li>
							<a href="#" target="_blank" rel="noopener">
							Classes </a>
						</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						Programs </a>
					</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						About Us </a>
					</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						Team </a>
					</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						Contact </a>
					</li>
					</ul>
					
				</div>
				<div class="foot_menu_botton">
					<div class="foot_menu_botton--title "><h4 class="title">Topics</h4></div>
					<ul class="foot_menu_botton--content">
						<li>
							<a href="#" target="_blank" rel="noopener">
							Classes </a>
						</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						Programs </a>
					</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						About Us </a>
					</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						Team </a>
					</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						Contact </a>
					</li>
					</ul>
					
				</div>
				<div class="foot_menu_botton">
					<div class="foot_menu_botton--title "><h4 class="title">Info For</h4></div>
					<ul class="foot_menu_botton--content">
						<li>
							<a href="#" target="_blank" rel="noopener">
							Classes </a>
						</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						Programs </a>
					</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						About Us </a>
					</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						Team </a>
					</li>
					<li>
						<a href="#" target="_blank" rel="noopener">
						Contact </a>
					</li>
					</ul>
					
				</div>
				
			</div>
			<div class="foot_botton_link">
				<div class="foot_botton_link--title">
				<p class="foot_botton_link--titlecontent"><a href="#">Premium LMS &amp; Online Education WordPress Theme</a></p> </div>
			</div>
			
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer">

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
		<div class="site-info">
			<div class="site-name">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php else : ?>
					<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
						<?php if ( is_front_page() && ! is_paged() ) : ?>
							<?php bloginfo( 'name' ); ?>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</div><!-- .site-name -->

			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '<div class="privacy-policy">', '</div>' );
			}
			?>

			<div class="powered-by">
				<?php
				printf(
					/* translators: %s: WordPress. */
					esc_html__( 'Proudly powered by %s.', 'twentytwentyone' ),
					'<a href="' . esc_url( __( 'https://wordpress.org/', 'twentytwentyone' ) ) . '">WordPress</a>'
				);
				?>
			</div><!-- .powered-by -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
