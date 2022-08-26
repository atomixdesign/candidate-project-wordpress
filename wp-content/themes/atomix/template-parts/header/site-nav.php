<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	
	<nav id="site-navigation" class="navbar-nav me-auto ms-auto" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">

	</nav><!-- #site-navigation -->
	
  <?php endif; ?>

	<button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#mainNav"
      aria-controls="mainNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fal fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
    <?php if( have_rows('menu_repeater', 'option') ): ?>
      <ul class="navbar-nav me-auto ms-auto">
      <?php while( have_rows('menu_repeater', 'option') ): the_row();
        $Level1heading = get_sub_field('level_1_heading');
        $Level1headingUrl = get_sub_field('level_1_url');
        $categoryImage = get_sub_field('level_1_image');
      ?>
      <li class="nav-item dropdown has-megamenu">
          <?php if (have_rows('level_2_menu','option')): ?>
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              aria-current="page"
              data-bs-toggle="dropdown"
              data-bs-auto-close="false"
              aria-expanded="false"
            >
            <?php echo $Level1heading; ?>
            </a>
          <?php else : ?>
            <a
            class="nav-link"
            href="<?php echo $Level1headingUrl; ?>"
            >
            <?php echo $Level1heading; ?>
            </a>
          <?php endif; ?>
          <?php if (have_rows('level_2_menu','option')): ?>
          <div class="dropdown-menu megamenu" role="menu">
            <div class="container-md">
              <div class="row">
                <div class="col-md-4 col-lg-3 mega-image">
                  <figure class="figure">
                  <img
                      class="figure-img menu-image"
                      src="<?php echo $categoryImage; ?>"
                      alt="Navigation Image"
                    />
                  </figure>
                </div>
                <?php while (have_rows('level_2_menu','option')) : the_row();  ?>
                <div class="col-md-4 col-lg-3">
                  <a
                    class="dropdown-item"
                    data-bs-toggle="collapse"
                    href="#menu1"
                    role="button"
                    aria-expanded="false"
                    aria-controls="menu1"
                    data-bs-parent="#mainNav"
                  >
                  <?php the_sub_field('level_2_heading'); ?>
                  </a>
                  <?php if (have_rows('level_2_sub_links')) : ?>
                  <div class="collapse sub-nav-links" id="menu1">
                    <ul>
                    <?php while (have_rows('level_2_sub_links')) : the_row(); ?>
                      <li>
                        <a href="<?php the_sub_field('sub_link_url'); ?>"><?php the_sub_field('sub_link_label'); ?></a>
                      </li>
                      <?php endwhile; ?>
                    </ul>
                  </div>
                  <?php endif; ?>
                </div>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
          <?php endif; ?>
        </li>
        <?php endwhile; ?>
  
      </ul>
      <?php endif; ?>
      
      <?php if( get_field('menu_right_button', 'option') ): ?>
        <?php while( have_rows('menu_right_button', 'option') ): the_row(); ?>
      <ul class="navbar-nav ms-auto me-0 header-action">
        <li>
          <a class="btn btn-light btn-sm" href=""><?php the_sub_field('button_label') ?></a>
        </li>
      </ul>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>


