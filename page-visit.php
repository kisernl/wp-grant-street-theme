<?php get_header(); ?>

<div class="bg-gs-off-white/50">
    <div class="content-section md:px-8 rounded-b-xl">
      <?php get_template_part('template-parts/gs-visit-hero'); ?>
    </div>
    <div class="m-2 md:m-8 rounded-xl bg-white">
      <?php get_template_part('template-parts/gs-welcome-note'); ?>
    </div>
    <div class="content-section m-2 md:m-8 rounded-xl text-center">
      <?php get_template_part('template-parts/gs-new-faq'); ?>
    </div>
    <div class="text-center">
      <?php get_template_part('template-parts/gs-connect-cta'); ?>
    </div>

    <!-- Decorative separator like front-page.php -->
    <!-- <div class="content-section">
      <div class="flex justify-center py-12">
          <div class="w-24 border-b-2 border-primary/80"></div>
      </div>
    </div> -->
  </div>
</div>

<?php get_footer(); ?>