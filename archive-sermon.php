<?php get_header(); ?>

<div class="parallax-container">
  <!-- Fixed parallax background -->
  <div class="parallax-background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-design-4.png');"></div>
  
  <!-- Scrollable content -->
  <div class="parallax-content">
    
    <!-- Archive Header Section -->
    <section class="relative py-16 lg:py-20 m-8">
      <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-4xl lg:text-6xl font-bold text-primary leading-tight drop-shadow-2xl font-serif mb-4">
          Sermons
        </h1>
        <div class="w-16 h-1 bg-primary mx-auto mb-6"></div>
        <p class="text-xl text-primary/80 max-w-2xl mx-auto font-serif leading-relaxed">
          Listen to our weekly sermons and grow in faith together. Discover God's word through expository preaching and biblical teaching.
        </p>
      </div>
    </section>

    <!-- Filter and Search Section -->
    <div class="content-section transparent">
      <div class="py-8 px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
          
          <!-- Search and Filter Bar -->
          <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 mb-8 border border-white/20 sermon-filter-bar">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              
              <!-- Search Box -->
              <div class="flex flex-col">
                <label for="sermon-search" class="text-sm font-medium text-primary mb-2">Search Sermons</label>
                <input 
                  type="text" 
                  id="sermon-search" 
                  placeholder="Search by title, speaker, or scripture..." 
                  class="px-4 py-2 rounded-lg border border-primary/20 bg-white/80 text-primary placeholder-primary/60 focus:outline-none focus:ring-2 focus:ring-primary/30"
                  onkeyup="filterSermons()"
                />
              </div>
              
              <!-- Speaker Filter -->
              <div class="flex flex-col">
                <label for="speaker-filter" class="text-sm font-medium text-primary mb-2">Filter by Speaker</label>
                <select 
                  id="speaker-filter" 
                  class="px-4 py-2 rounded-lg border border-primary/20 bg-white/80 text-primary focus:outline-none focus:ring-2 focus:ring-primary/30"
                  onchange="filterSermons()"
                >
                  <option value="">All Speakers</option>
                  <?php
                  // Get unique speakers
                  $speakers = get_posts(array(
                    'post_type' => 'sermon',
                    'posts_per_page' => -1,
                    'meta_key' => '_sermon_speaker',
                    'meta_compare' => 'EXISTS'
                  ));
                  
                  $unique_speakers = array();
                  foreach ($speakers as $sermon) {
                    $speaker = get_post_meta($sermon->ID, '_sermon_speaker', true);
                    if (!empty($speaker) && !in_array($speaker, $unique_speakers)) {
                      $unique_speakers[] = $speaker;
                    }
                  }
                  
                  foreach ($unique_speakers as $speaker) {
                    echo '<option value="' . esc_attr($speaker) . '">' . esc_html($speaker) . '</option>';
                  }
                  ?>
                </select>
              </div>
              
              <!-- Series Filter -->
              <div class="flex flex-col">
                <label for="series-filter" class="text-sm font-medium text-primary mb-2">Filter by Series</label>
                <select 
                  id="series-filter" 
                  class="px-4 py-2 rounded-lg border border-primary/20 bg-white/80 text-primary focus:outline-none focus:ring-2 focus:ring-primary/30"
                  onchange="filterSermons()"
                >
                  <option value="">All Series</option>
                  <?php
                  $series = get_terms(array(
                    'taxonomy' => 'sermon_series',
                    'hide_empty' => true
                  ));
                  
                  if (!is_wp_error($series)) {
                    foreach ($series as $series_term) {
                      echo '<option value="' . esc_attr($series_term->slug) . '">' . esc_html($series_term->name) . '</option>';
                    }
                  }
                  ?>
                </select>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Sermons Grid Section -->
    <div class="content-section transparent" id="sermons-container">
      <div class="py-8 px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
          
          <!-- Sermons Count -->
          <div class="mb-8">
            <p class="text-primary/70 text-sm">
              <?php
              global $wp_query;
              $total_sermons = $wp_query->found_posts;
              echo 'Showing ' . $total_sermons . ' sermon' . ($total_sermons !== 1 ? 's' : '');
              ?>
            </p>
          </div>
          
          <!-- Sermons Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="sermons-grid">
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
              $speaker = get_post_meta(get_the_ID(), '_sermon_speaker', true);
              $sermon_text = get_post_meta(get_the_ID(), '_sermon_text', true);
              $description = get_post_meta(get_the_ID(), '_sermon_description', true);
              $audio_link = get_post_meta(get_the_ID(), '_sermon_audio_link', true);
              $video_link = get_post_meta(get_the_ID(), '_sermon_video_link', true);
              $text_link = get_post_meta(get_the_ID(), '_sermon_text_link', true);
              $series_terms = get_the_terms(get_the_ID(), 'sermon_series');
              $series = $series_terms && !is_wp_error($series_terms) ? $series_terms[0]->name : '';
            ?>
            
            <article class="sermon-card bg-white/95 backdrop-blur-sm rounded-xl overflow-hidden shadow-lg border border-white/30 transition-all duration-300 hover:shadow-2xl hover:scale-105"
                     data-speaker="<?php echo esc_attr(strtolower($speaker)); ?>"
                     data-series="<?php echo esc_attr($series_terms && !is_wp_error($series_terms) ? $series_terms[0]->slug : ''); ?>"
                     data-title="<?php echo esc_attr(strtolower(get_the_title())); ?>"
                     data-text="<?php echo esc_attr(strtolower($sermon_text)); ?>">
              
              <!-- Featured Image -->
              <?php if (has_post_thumbnail()) : ?>
              <div class="sermon-image h-48 bg-gradient-to-br from-primary/20 to-primary/40 relative overflow-hidden">
                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover')); ?>
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                <div class="absolute bottom-4 left-4">
                  <span class="bg-white/90 text-primary px-3 py-1 rounded-full text-xs font-medium">
                    <?php echo get_the_date(); ?>
                  </span>
                </div>
              </div>
              <?php else : ?>
              <div class="sermon-image h-48 bg-gradient-to-br from-primary/20 to-primary/40 flex items-center justify-center relative">
                <svg class="w-16 h-16 text-primary/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                </svg>
                <div class="absolute bottom-4 left-4">
                  <span class="bg-white/90 text-primary px-3 py-1 rounded-full text-xs font-medium">
                    <?php echo get_the_date(); ?>
                  </span>
                </div>
              </div>
              <?php endif; ?>
              
              <!-- Card Content -->
              <div class="p-6">
                
                <!-- Sermon Title -->
                <h2 class="text-xl font-bold text-primary mb-3 leading-tight">
                  <a href="<?php the_permalink(); ?>" class="hover:text-primary/80 transition-colors duration-200">
                    <?php the_title(); ?>
                  </a>
                </h2>
                
                <!-- Sermon Meta -->
                <div class="space-y-2 mb-4 text-sm">
                  <?php if ($speaker) : ?>
                  <div class="flex items-center text-primary/70">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span class="font-medium"><?php echo esc_html($speaker); ?></span>
                  </div>
                  <?php endif; ?>
                  
                  <?php if ($sermon_text) : ?>
                  <div class="flex items-center text-primary/70">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <span><?php echo esc_html($sermon_text); ?></span>
                  </div>
                  <?php endif; ?>
                  
                  <?php if ($series) : ?>
                  <div class="flex items-center text-primary/70">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m0 0l4-4m-4 4l4 4"></path>
                    </svg>
                    <span class="italic"><?php echo esc_html($series); ?></span>
                  </div>
                  <?php endif; ?>
                </div>
                
                <!-- Description -->
                <?php if ($description || has_excerpt()) : ?>
                <p class="text-primary/80 text-sm mb-4 leading-relaxed">
                  <?php echo $description ? esc_html(wp_trim_words($description, 20)) : get_the_excerpt(); ?>
                </p>
                <?php endif; ?>
                
                <!-- Action Links -->
                <div class="flex flex-wrap gap-2 sermon-media-links">
                  <?php if ($audio_link) : ?>
                  <a href="<?php echo esc_url($audio_link); ?>" target="_blank" rel="noopener" class="inline-flex items-center px-3 py-2 bg-green-600 text-white text-xs rounded-lg hover:bg-green-700 transition-colors duration-200">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072M18.364 5.636a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path>
                    </svg>
                    Audio
                  </a>
                  <?php endif; ?>
                  
                  <?php if ($video_link) : ?>
                  <a href="<?php echo esc_url($video_link); ?>" target="_blank" rel="noopener" class="inline-flex items-center px-3 py-2 bg-red-600 text-white text-xs rounded-lg hover:bg-red-700 transition-colors duration-200">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293H15M9 10v4a1 1 0 001 1h4M9 10V9a1 1 0 011-1h4a1 1 0 011 1v1"></path>
                    </svg>
                    Video
                  </a>
                  <?php endif; ?>
                  
                  <?php if ($text_link) : ?>
                  <a href="<?php echo esc_url($text_link); ?>" target="_blank" rel="noopener" class="inline-flex items-center px-3 py-2 bg-blue-600 text-white text-xs rounded-lg hover:bg-blue-700 transition-colors duration-200">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Text
                  </a>
                  <?php endif; ?>
                  
                  <a href="<?php the_permalink(); ?>" class="inline-flex items-center px-3 py-2 bg-primary text-white text-xs rounded-lg hover:bg-primary/80 transition-colors duration-200">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    Read More
                  </a>
                </div>
                
              </div>
            </article>
            
            <?php endwhile; endif; ?>
            
          </div>
          
          <!-- No Results Message -->
          <div id="no-results" class="hidden text-center py-16">
            <div class="bg-white/80 backdrop-blur-sm rounded-xl p-8 border border-white/30">
              <svg class="w-16 h-16 text-primary/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
              </svg>
              <h3 class="text-xl font-semibold text-primary mb-2">No sermons found</h3>
              <p class="text-primary/70">Try adjusting your search or filter criteria.</p>
              <button onclick="clearFilters()" class="mt-4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/80 transition-colors duration-200">
                Clear Filters
              </button>
            </div>
          </div>
          
          <!-- Pagination -->
          <?php if ($wp_query->max_num_pages > 1) : ?>
          <div class="pagination mt-16 text-center">
            <div class="bg-white/80 backdrop-blur-sm rounded-xl p-6 border border-white/30 inline-block">
              <?php
              the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => '← Previous',
                'next_text' => 'Next →',
                'class' => 'sermon-pagination'
              ));
              ?>
            </div>
          </div>
          <?php endif; ?>
          
        </div>
      </div>
    </div>
    
  </div>
</div>

<!-- JavaScript for Filtering -->
<script>
function filterSermons() {
  const searchTerm = document.getElementById('sermon-search').value.toLowerCase();
  const speakerFilter = document.getElementById('speaker-filter').value.toLowerCase();
  const seriesFilter = document.getElementById('series-filter').value;
  const sermonCards = document.querySelectorAll('.sermon-card');
  const noResults = document.getElementById('no-results');
  let visibleCount = 0;

  sermonCards.forEach(card => {
    const title = card.getAttribute('data-title');
    const speaker = card.getAttribute('data-speaker');
    const series = card.getAttribute('data-series');
    const text = card.getAttribute('data-text');
    
    const matchesSearch = !searchTerm || 
      title.includes(searchTerm) || 
      speaker.includes(searchTerm) || 
      text.includes(searchTerm);
    
    const matchesSpeaker = !speakerFilter || speaker.includes(speakerFilter);
    const matchesSeries = !seriesFilter || series === seriesFilter;
    
    if (matchesSearch && matchesSpeaker && matchesSeries) {
      card.style.display = 'block';
      visibleCount++;
    } else {
      card.style.display = 'none';
    }
  });
  
  // Show/hide no results message
  if (visibleCount === 0) {
    noResults.classList.remove('hidden');
  } else {
    noResults.classList.add('hidden');
  }
}

function clearFilters() {
  document.getElementById('sermon-search').value = '';
  document.getElementById('speaker-filter').value = '';
  document.getElementById('series-filter').value = '';
  filterSermons();
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
  filterSermons();
});
</script>

<?php get_footer(); ?>
