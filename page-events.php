<?php get_header(); ?>

<div class="parallax-container">
  <!-- Fixed parallax background -->
  <div class="parallax-background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-design-4.webp');"></div>
  
  <!-- Scrollable content -->
  <div class="parallax-content">
    
    <!-- Hero Section -->
    <div class="content-section md:m-8 rounded-b-xl">
      <?php get_template_part('template-parts/events-hero'); ?>
    </div>

    <!-- Events Content Section -->
    <div class="content-section">
      <div class="bg-white/95 backdrop-filter backdrop-blur-sm rounded-2xl shadow-lg mx-0 p-0 md:mx-8 md:p-12">
        
        <!-- Events Content -->
        <div class="events-container m-0 p-0">
          <?php echo do_shortcode('[event_cards]'); ?>
        </div>
        
        <!-- Link to Archive if needed -->
        <div class="text-center mt-12">
          <a href="<?php echo get_post_type_archive_link('ecs_event'); ?>" 
             class="inline-block bg-primary text-white font-semibold px-8 py-4 rounded-lg hover:bg-primary/90 transition-colors duration-200 shadow-lg">
            View All Events Archive
            <svg class="inline ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        
      </div>
    </div>

    <!-- Decorative separator -->
    <div class="content-section">
      <div class="flex justify-center py-12">
        <div class="w-24 border-b-2 border-primary/80"></div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>