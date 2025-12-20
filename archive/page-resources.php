<?php get_header(); ?>

<div class="parallax-container">
  <!-- Fixed parallax background -->
  <div class="parallax-background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-design-4.webp');"></div>
  
  <!-- Scrollable content -->
  <div class="parallax-content">
    <div class="content-section md:m-8 rounded-b-xl">
      <?php get_template_part('template-parts/resources-hero'); ?>
      <?php get_template_part('template-parts/livestream-card'); ?>
      <?php get_template_part('template-parts/youtube-card'); ?>
    </div>

    <!-- <div class="recent-sermons">
      <?php # get_template_part('template-parts/latest-sermons'); ?>
    </div> -->

    <!-- Decorative separator -->
    <div class="content-section bg-transparent">
      <div class="flex justify-center py-12">
        <div class="w-24 border-b-2 border-primary/80"></div>
      </div>
    </div>
</div>

<?php get_footer(); ?>