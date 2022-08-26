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
        <a class="footer-logo" href="#">
        <?php the_custom_logo(); ?>
        </a>
	  <?php endif; ?>
    </div>
  </div>

            
<?php if( have_rows('footer_main_menu', 'option') ): $i = 0;?>
  <div class="accordion" id="FooterMenu">
  <?php while( have_rows('footer_main_menu', 'option') ): the_row(); $i++;
        $Level1heading = get_sub_field('footer_menu_heading');
      ?>
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading<?php echo $i; ?>">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse<?php echo $i; ?>"
          aria-expanded="false"
          aria-controls="collapsearea<?php echo $i; ?>"
        >
        <?php echo $Level1heading; ?>
        </button>
      </h2>
      <div
        id="collapse<?php echo $i; ?>"
        class="accordion-collapse collapse"
        aria-labelledby="heading<?php echo $i; ?>"
        data-bs-parent="#FooterMenu"
      >
      <?php if (have_rows('sub_links_repeater','option')): ?>
        <div class="accordion-body">
          <ul>
          <?php while (have_rows('sub_links_repeater','option')) : the_row();  ?>
            <li><a href="<?php the_sub_field('sub_link_url'); ?>"><?php the_sub_field('sub_link_label'); ?></a></li>
            <?php endwhile; ?>
          </ul>
        </div>
        
        <?php endif; ?>
      </div>
    </div>
    
    
    <?php endwhile; ?>
  </div>
  <?php endif; ?>
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
        <?php if( have_rows('footer_bottom_menu','option') ): ?>
        <?php while( have_rows('footer_bottom_menu','option') ): the_row(); 
          if( get_row_layout() == 'bottom_links' ):
            $Bottomlabel = get_sub_field('link_label');
        ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php the_sub_field('link_url'); ?>"><?php echo $Bottomlabel; ?></a>
        </li>
        <?php 
        endif;
        endwhile;
        endif; ?>
        
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
