<?php

/**
 * @var array $args
 */
$sectionId  = $args['id'];
$class      = $args['class'];

?>

<section class="<?php echo $class; ?>" id="<?php echo $sectionId; ?>">
<div class="container-fluid">
<?php if( $heading): ?>
      <h2 class="text-center"><?php echo $heading; ?></h2>
<?php endif; ?>
</div>

<?php if( have_rows('slides') ): ?>
  <div class="position-relative">
  <div class="main-carousel">
  <?php while( have_rows('slides') ): the_row(); ?>
    <div class="carousel-cell">
      <div class="row">
        <div class="col-lg-6 carousel-image">
        <?php if( get_sub_field('slide_image') ): ?>
              <img src="<?php the_sub_field('slide_image') ?>" alt="">
            <?php endif; ?>
        </div>
        <div class="col-lg-6 carousel-content">
          <h3>
            <?php if( get_sub_field('slide_title')): ?>
              <?php the_sub_field('slide_title'); ?>
            <?php endif; ?>
          </h3>
          <p>
          <?php if( get_sub_field('slide_content')): ?>
            <?php the_sub_field('slide_content'); ?>
            <?php endif; ?>
          </p>
          <?php if( get_sub_field('slide_cta_label') || get_sub_field('slide_cta_link')): ?>
            <a class="btn btn-secondary" href="<?php the_sub_field('slide_cta_link'); ?>"><?php the_sub_field('slide_cta_label'); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</div>

<?php endif; ?>



</section>
<script>
  jQuery(".main-carousel").flickity({
    cellAlign: "left",
    contain: true,
    pageDots: true,
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
