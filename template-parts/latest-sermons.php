<section class="py-12 container mx-auto">
  <h2 class="text-3xl font-semibold text-center mb-6">Latest Sermons</h2>
  <div class="grid md:grid-cols-3 gap-8">
    <?php
      // Query for sermons with explicit parameters
      $sermons_args = array(
        'post_type' => 'sermon',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'meta_query' => array(
          'relation' => 'OR',
          array(
            'key' => '_sermon_speaker',
            'compare' => 'EXISTS',
          ),
          array(
            'key' => '_sermon_speaker',
            'compare' => 'NOT EXISTS',
          ),
        ),
      );
      
      $sermons = new WP_Query($sermons_args);
      
      
      if ($sermons->have_posts()) :
        while ($sermons->have_posts()) : $sermons->the_post(); 
          $speaker = get_post_meta(get_the_ID(), '_sermon_speaker', true);
          $sermon_text = get_post_meta(get_the_ID(), '_sermon_text', true);
          $audio_link = get_post_meta(get_the_ID(), '_sermon_audio_link', true);
          $video_link = get_post_meta(get_the_ID(), '_sermon_video_link', true);
        ?>
        <article class="bg-white shadow rounded-lg p-6">
          <h3 class="text-2xl font-bold mb-2">
            <a href="<?php the_permalink(); ?>" class="text-gray-900 hover:text-green-700 transition-colors">
              <?php the_title(); ?>
            </a>
          </h3>
          
          <?php if ($speaker) : ?>
          <p class="text-gray-600 mb-2">
            <strong>Speaker:</strong> <?php echo esc_html($speaker); ?>
          </p>
          <?php endif; ?>
          
          <?php if ($sermon_text) : ?>
          <p class="text-gray-600 mb-2">
            <strong>Scripture:</strong> <?php echo esc_html($sermon_text); ?>
          </p>
          <?php endif; ?>
          
          <p class="text-gray-500 text-sm mb-4">
            <?php echo get_the_date(); ?>
          </p>
          
          <?php if (has_excerpt()) : ?>
          <p class="text-gray-700 mb-4">
            <?php the_excerpt(); ?>
          </p>
          <?php endif; ?>
          
          <div class="flex gap-2">
            <?php if ($audio_link) : ?>
            <a href="<?php echo esc_url($audio_link); ?>" class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700 transition-colors" target="_blank">
              🎵 Audio
            </a>
            <?php endif; ?>
            
            <?php if ($video_link) : ?>
            <a href="<?php echo esc_url($video_link); ?>" class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700 transition-colors" target="_blank">
              📹 Video
            </a>
            <?php endif; ?>
            
            <a href="<?php the_permalink(); ?>" class="bg-gray-600 text-white px-3 py-1 rounded text-sm hover:bg-gray-700 transition-colors">
              Read More →
            </a>
          </div>
        </article>
      <?php 
        endwhile; 
        wp_reset_postdata();
      else : ?>
        <div class="col-span-3 text-center py-8">
          <p class="text-gray-600 text-lg">No sermons found.</p>
          <?php if (current_user_can('manage_options')) : ?>
          <p class="text-sm text-gray-500 mt-2">
            <a href="<?php echo admin_url('post-new.php?post_type=sermon'); ?>" class="text-green-600 hover:text-green-700">
              Add your first sermon →
            </a>
          </p>
          <?php endif; ?>
        </div>
      <?php endif; ?>
  </div>
</section>
