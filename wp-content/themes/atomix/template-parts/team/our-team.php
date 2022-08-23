<?php

/**
 * @var array $args
 */
$sectionId  = $args['id'];
$class      = $args['class'];

?>
<section class="<?php echo $class; ?>" id="<?php echo $sectionId; ?>">
<div class="container-md team-container">
  <h2 class="text-center">Team section</h2>
  <div class="row g-0">
    <div class="col-12">
    <?php if( have_rows('team_members') ): ?>
      <div class="team-carousel">
      <?php while( have_rows('team_members') ): the_row(); ?>
        <div class="carousel-cell">
          <div class="card team-item">
            <figure class="figure">
            <?php if( get_sub_field('team_member_image') ): ?>
              <img
                class="figure-img team-thumbnail"
                src="<?php the_sub_field('team_member_image') ?>"
                alt="logo"
              />
            <?php endif; ?>
            </figure>
            <div class="card-body">
              <h5>
              <?php if( get_sub_field('team_member_position')): ?>
              <?php the_sub_field('team_member_position'); ?>
            <?php endif; ?>
              </h5>
              <h3>
              <?php if( get_sub_field('team_member_name')): ?>
              <?php the_sub_field('team_member_name'); ?>
            <?php endif; ?>
              </h3>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
</section>
<script>
  jQuery(".team-carousel").flickity({
    cellAlign: "center",
    contain: true,
    pageDots: true,
    wrapAround: true,
    prevNextButtons: false,
    watchCSS: true,
    arrowShape: {
      x0: 10,
      x1: 60,
      y1: 50,
      x2: 65,
      y2: 45,
      x3: 20,
    },
  });
</script>
