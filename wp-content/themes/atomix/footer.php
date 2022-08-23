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
		</div><!-- #primary -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-lightest">

		<div class="container-md">
  <div class="row">
    <div class="col-12 logo-wrapper">
	<?php if ( has_custom_logo() ) : ?>
		<?php // the_custom_logo(); ?>
		<a class="footer-logo" href="#">
			<img
          class="footer-image"
          src="<?= get_template_directory_uri(); ?>/assets/images/logo.png"
          srcset="<?= get_template_directory_uri(); ?>/assets/images/logo@2x.png 2x"
          alt="logo"
      />
	</a>
	<?php endif; ?>
    </div>
  </div>

  <?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Footer menu', 'twentytwentyone' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
          <?php 
		wp_nav_menu(
			array(
				'theme_location'  => 'footer',
				'menu_class'      => 'accordion',
				'container_class' => 'accordion-container',
				'depth' => '2',
				'fallback_cb'     => false,
				'menu' => 'accordion-item',
				
			)
		);
		  ?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>

    

                            

  <div class="accordion" id="FooterMenu">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading1">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse1"
          aria-expanded="false"
          aria-controls="collapseOne"
        >
          About
        </button>
      </h2>
      <div
        id="collapse1"
        class="accordion-collapse collapse"
        aria-labelledby="heading1"
        data-bs-parent="#FooterMenu"
      >
        <div class="accordion-body">
          <ul>
            <li><a href="">About menu item 1</a></li>
            <li><a href="">About menu item 2</a></li>
            <li><a href="">About menu item 3</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading2">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse2"
          aria-expanded="false"
          aria-controls="collapseTwo"
        >
          Services
        </button>
      </h2>
      <div
        id="collapse2"
        class="accordion-collapse collapse"
        aria-labelledby="heading2"
        data-bs-parent="#FooterMenu"
      >
        <div class="accordion-body">
          <ul>
            <li><a href="">Services menu item 1</a></li>
            <li><a href="">Services menu item 2</a></li>
            <li><a href="">Services menu item 3</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading3">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse3"
          aria-expanded="false"
          aria-controls="collapseThree"
        >
          Footer links
        </button>
      </h2>
      <div
        id="collapse3"
        class="accordion-collapse collapse"
        aria-labelledby="heading3"
        data-bs-parent="#FooterMenu"
      >
        <div class="accordion-body">
          <ul>
            <li><a href="">Footer menu item 1</a></li>
            <li><a href="">Footer menu item 2</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading4">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse4"
          aria-expanded="false"
          aria-controls="collapse4"
        >
          Footer links
        </button>
      </h2>
      <div
        id="collapse4"
        class="accordion-collapse collapse"
        aria-labelledby="heading4"
        data-bs-parent="#FooterMenu"
      >
        <div class="accordion-body">
          <ul>
            <li><a href="">Footer menu item 1</a></li>
            <li><a href="">Footer menu item 2</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <hr />
  <nav
    class="navbar navbar-expand navbar-light bg-lightest footer-bottom-navbar"
    aria-label="FooterNavbar"
  >
    <div class="collapse navbar-collapse" id="foortLinks">
      <ul class="navbar-nav me-auto footer-links">
        <li class="nav-item">
          <span>© 2022 Company Inc.</span>

		  

        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Terms and conditions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Privacy policy</a>

		  <?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '<div class="privacy-policy">', '</div>' );
			}
			?>

        </li>
        <li class="nav-item">
			<span>
				<?php
				printf(
					/* translators: %s: WordPress. */
					esc_html__( 'Website by %s.', 'twentytwentyone' ),
					'<a href="' . esc_url( __( 'https://wordpress.org/', 'twentytwentyone' ) ) . '">atomix</a>'
				);
				?>
			</span>
        </li>
      </ul>

      <?php if( have_rows('footer_social_menu','option') ): ?>
        <ul class="navbar-nav me-md-0 ms-md-auto social-links">
        <?php while( have_rows('footer_social_menu','option') ): the_row(); 
          if( get_row_layout() == 'bottom_links' ):
            $label = get_sub_field('link_label');
        ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php the_sub_field('link_url'); ?>"><i class="<?php echo $label; ?>"></i></a>
        </li>
        <?php 
        endif;
        endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>
  </nav>
</div>


	</footer><!-- #colophon -->

	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
