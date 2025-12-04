<?php get_header(); ?>

<div class="parallax-container">
  <!-- Fixed parallax background -->
  <div class="parallax-background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-design-4.webp');"></div>
  
  <!-- Scrollable content -->
  <div class="parallax-content">
    <div class="content-section md:m-8 rounded-b-xl">
      <?php get_template_part('template-parts/visit-hero'); ?>
    </div>
    <div class="content-section m-2 md:m-8 rounded-xl">
      <?php get_template_part('template-parts/pastor-note'); ?>
    </div>
    <div class="content-section m-2 md:m-8 rounded-xl text-center">
      <?php get_template_part('template-parts/new-faq'); ?>
    </div>
    <div class="content-section m-2 md:m-8 rounded-xl text-center">
      <h2 class="text-4xl md:text-5xl font-bold text-primary mt-20 mb-4 font-title">
        Other Questions?
      </h2>
      <?php get_template_part('template-parts/connect-card-cta'); ?>
    </div>    

    <!-- Decorative separator like front-page.php -->
    <div class="content-section">
      <div class="flex justify-center py-12">
          <div class="w-24 border-b-2 border-primary/80"></div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>