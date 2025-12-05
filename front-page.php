<?php get_header(); ?>

<main class="bg-white">
    <div class="bg-gs-off-white/50">
      <?php get_template_part('template-parts/gs-home-hero'); ?>
    </div>
    
    <div class="bg-gs-off-white/50">
      <?php get_template_part('template-parts/announcement-block'); ?>
    </div>
    
    <div class="bg-white pt-16">
      <?php get_template_part('template-parts/gs-weekly-details'); ?>
    </div>

    <div class="bg-white">
      <?php get_template_part('template-parts/gs-verse-block'); ?>
    </div>
    
  <div class="bg-gs-off-white/50">
    <div class="pb-12">
      <?php get_template_part('template-parts/gs-ministry-boxes'); ?>
    </div>



    <div class="-mt-12">
      <?php get_template_part('template-parts/gs-pastor-welcome'); ?>
    </div>
    
  </div>

<div class="bg-white py-32">
      <?php
      // Check for upcoming events using the correct field names from Event Cards Simple plugin
      $today = date('Y-m-d');
      
      $upcoming_events = new WP_Query(array(
          'post_type' => 'ecs_event',
          'posts_per_page' => -1,
          'post_status' => 'publish',
          'meta_query' => array(
              array(
                  'key' => '_event_date',
                  'value' => $today,
                  'compare' => '>=',
                  'type' => 'DATE'
              )
          ),
          'meta_key' => '_event_date',
          'orderby' => 'meta_value',
          'order' => 'ASC'
      ));
      
      // Only display events section if there are upcoming events
      if ($upcoming_events->have_posts()) : ?>
      <div class="content-section">
        <div class="container mx-auto px-4">
          <div class="max-w-6xl mx-auto">
            
            <!-- Section Header -->
            <div class="text-center mb-12">
              <h2 class="text-4xl lg:text-5xl font-serif font-bold text-primary mb-6">Upcoming Events</h2>
              <div class="w-16 h-1 bg-primary mx-auto mb-6"></div>
            </div>

            <!-- Event Cards - Full Width Container -->
            <div class="mb-12">
              <?php echo do_shortcode('[event_cards]'); ?>
            </div>

            <!-- CTA Button -->
            <div class="text-center">
              <a href="/events" class="inline-block bg-primary text-white font-semibold px-8 py-4 rounded-lg hover:bg-primary/90 transition-colors duration-200 shadow-lg">
                View All Events
                <svg class="inline ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
            
          </div>
        </div>
      </div>
      <?php 
      endif; 
      wp_reset_postdata();
      ?>
      <!-- <div class="flex justify-center py-12">
        <div class="w-24 border-b-2 border-primary/80"></div>
      </div> -->
</div>

</main>
<?php get_footer(); ?>
