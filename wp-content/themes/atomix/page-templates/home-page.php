<?php
/* Template Name: Home page */ ?>
<?php get_header(); ?>


<?php get_template_part( 'template-parts/hero-banner/hero-banner', null ,[
        'id' => 'heroBanner',
        'image' => get_field('banner_image'),
        'heroTitle' => get_field("hero_banner_title"),
        'ctaLabel' => get_field('cta_label'),
        'ctaUrl' => get_field('cta_url'),
    ]); ?>
<?php get_template_part( 'template-parts/info-block/3-col-layout', null,  [
        'id' => 'infoBlock',
        'class' => 'module-spacer',
        'image' => get_field('content_image'),
        'heading' => get_field("block_heading"),
        'subHeading' => get_field('content_sub_title'),
        'content' => get_field('content'),
    ]); ?>
<?php  get_template_part( 'template-parts/carousel-slider/slider', null, [
    'id' => 'carouselSlider',
    'class' => 'module-spacer bg-lightest',
]); ?>
<?php get_template_part( 'template-parts/team/our-team', null , [
    'id' => 'ourTeam',
    'class' => 'module-spacer bg-white team-grid',
] ); ?>

<?php get_footer(); ?>