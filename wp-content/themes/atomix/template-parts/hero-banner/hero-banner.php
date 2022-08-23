<?php

/**
 * @var array $args
 */
$id         = $args['id'];
$class      = $args['class'];
$image      = $args['image'];
$heroTitle  = $args['heroTitle'];
$ctaLabel   = $args['ctaLabel'];
$ctaUrl     = $args['ctaUrl'];

?>

<section id="<?php echo $id; ?>" class="<?php echo $class; ?>">
<div class="container-fluid px-0">
  <div class="hero-banner">
  <?php  $heroImage = $image;
    if( !empty( $heroImage ) ): ?>
    <img class="hero-image" src="<?php echo esc_url($heroImage['url']); ?>" alt="<?php echo esc_attr($heroImage['alt']); ?>" />
    <?php endif; ?>
    <div class="hero-content text-center">
    <?php if( $heroTitle): ?>
      <h1>
      <?php echo $heroTitle; ?>
      </h1>
      <?php endif; ?>
      <?php if( $ctaUrl || $ctaLabel ): ?>
        <a class="btn btn-secondary" href="<?php echo $ctaUrl; ?>"><?php echo $ctaLabel; ?></a>
      <?php else : ?>
        <a class="btn btn-secondary" href="/">Contact us</a>
      <?php endif; ?>
     
    </div>
  </div>
</div>
</section>
