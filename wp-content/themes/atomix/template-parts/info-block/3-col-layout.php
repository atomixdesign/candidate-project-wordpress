<?php

/**
 * @var array $args
 */
$id         = $args['id'];
$class      = $args['class'];
$image      = $args['image'];
$heading    = $args['heading'];
$subHeading = $args['subHeading'];
$content    = $args['content'];

?>

<section class="<?php echo $class; ?>" id="<?php echo $id; ?>">
<div class="container">
    <?php if( $heading): ?>
      <h2 class="text-md-center"><?php echo $heading; ?></h2>
    <?php endif; ?>

  
  <div class="row">
    <div class="col-12">
      <div class="col3-layout">
      <?php if( $subHeading): ?>
        <h3>
        <?php echo $subHeading; ?>
        </h3>
      <?php endif; ?>
        <?php  $heroImage = $image;
          if( !empty( $heroImage ) ): ?>
          <img class="img-fluid" src="<?php echo esc_url($heroImage['url']); ?>" alt="<?php echo esc_attr($heroImage['alt']); ?>" />
        <?php endif; ?>

        <?php if( $content): ?>
          <?php echo $content; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
</section>