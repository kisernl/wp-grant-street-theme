<?php get_header(); ?>

<div class="bg-gs-off-white/50">
    
    <!-- Blog Hero Section -->
    <div class="content-section md:px-8 rounded-b-xl">
      <section class="h-[50vh] md:h-[70vh] rounded-b-xl md:rounded-xl flex items-end mb-16 justify-start relative"
               style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/news-hero.webp');
                      background-size: cover;
                      background-position: center;
                      background-repeat: no-repeat;">
        <div class="absolute inset-0 bg-slate-900 bg-opacity-20 rounded-b-xl md:rounded-xl"></div>
        <div class="px-6 md:px-8 relative z-10">
          <div class="space-y-4 mt-32 mb-12 md:mb-16 md:ml-8">
            <h1 class="text-4xl sm:text-4xl lg:text-7xl font-bold text-white leading-tight drop-shadow-lg mb-4 font-title">
              News
            </h1>
            <div class="font-sans">
              <p class="text-lg md:text-xl text-white max-w-3xl drop-shadow-lg font-body">
                Stories, insights, and reflections from our church community
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Posts Content Section -->
    <div class="content-section">
      <div class="bg-white/95 backdrop-filter backdrop-blur-sm rounded-2xl shadow-lg mx-0 p-0 md:mx-8 md:p-12">
        
        <!-- Posts Grid -->
        <div class="posts-container m-4 p-0 md:p-8">
          <?php if (have_posts()) : ?>
            <!-- Posts Grid - Similar to Event Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
              <?php while (have_posts()) : the_post(); ?>
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-primary/20">
                  
                  <!-- Post Image -->
                  <div class="aspect-video overflow-hidden">
                    <?php if (has_post_thumbnail()) : ?>
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium_large', [
                          'class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-300',
                          'alt' => get_the_title() . ' featured image'
                        ]); ?>
                      </a>
                    <?php else : ?>
                      <div class="w-full h-full bg-primary/10 flex items-center justify-center">
                        <svg class="w-16 h-16 text-primary/30" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                        </svg>
                      </div>
                    <?php endif; ?>
                  </div>
                  
                  <!-- Post Content -->
                  <div class="p-6 space-y-4">
                    
                    <!-- Post Title -->
                    <h2 class="text-xl font-serif font-semibold text-primary leading-tight">
                      <a href="<?php the_permalink(); ?>" class="hover:text-primary/80 transition-colors">
                        <?php the_title(); ?>
                      </a>
                    </h2>
                    
                    <!-- Post Meta -->
                    <div class="space-y-2 text-sm text-muted">
                      <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        <span><?php echo get_the_date(); ?></span>
                      </div>
                      
                      <?php if (get_the_category()) : ?>
                        <div class="flex items-center space-x-2">
                          <svg class="w-4 h-4 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>
                          </svg>
                          <span><?php echo get_the_category()[0]->name; ?></span>
                        </div>
                      <?php endif; ?>
                      
                      <?php if (get_the_author()) : ?>
                        <div class="flex items-center space-x-2">
                          <svg class="w-4 h-4 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                          </svg>
                          <span><?php echo get_the_author(); ?></span>
                        </div>
                      <?php endif; ?>
                    </div>
                    
                    <!-- Post Excerpt -->
                    <div class="text-muted leading-relaxed">
                      <?php if (has_excerpt()) : ?>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                      <?php else : ?>
                        <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                      <?php endif; ?>
                    </div>
                    
                    <!-- Read More Button -->
                    <div class="pt-2">
                      <a href="<?php the_permalink(); ?>" 
                         class="inline-flex items-center text-primary hover:text-primary/80 font-medium transition-colors">
                        Read More
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>
                    
                  </div>
                  
                </article>
              <?php endwhile; ?>
            </div>
            
            <!-- Pagination -->
            <div class="flex justify-center">
              <?php
              $pagination = paginate_links([
                'type' => 'array',
                'prev_text' => '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>',
                'next_text' => '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
              ]);
              
              if ($pagination) {
                echo '<nav class="flex space-x-2">';
                foreach ($pagination as $link) {
                  if (strpos($link, 'current') !== false) {
                    echo str_replace('page-numbers', 'page-numbers bg-primary text-white px-4 py-2 rounded-lg', $link);
                  } else {
                    echo str_replace('page-numbers', 'page-numbers bg-white text-primary hover:bg-primary hover:text-white px-4 py-2 rounded-lg transition-colors border border-primary/20', $link);
                  }
                }
                echo '</nav>';
              }
              ?>
            </div>
            
          <?php else : ?>
            
            <!-- No Posts Message -->
            <div class="text-center py-16">
              <svg class="w-16 h-16 text-muted/50 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
              </svg>
              <h2 class="text-2xl font-serif font-semibold text-primary mb-2">No Posts Found</h2>
              <p class="text-muted mb-6">Check back soon for new content!</p>
              <a href="<?php echo home_url(); ?>" class="inline-flex items-center px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary/90 transition-colors">
                Return Home
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
            
          <?php endif; ?>
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
