<?php get_header(); ?>

<div class="bg-gs-off-white/50">
    
    <!-- Hero Section -->
    <div class="content-section md:px-8 rounded-b-xl">
      <?php get_template_part('template-parts/gs-events-hero'); ?>
    </div>

     
    <!-- Standing Events Section -->
    <div class="pb-16">
      <?php get_template_part('template-parts/gs-standing-events'); ?>
    </div>
   

    <!-- Events Content Section -->
    <div class="content-section">
      <div class="bg-white/95 backdrop-filter backdrop-blur-sm rounded-2xl shadow-lg m-0 p-4 pt-8 md:mx-8 md:p-12">
        <div class="mb-10">
            <h2 class="text-4xl font-semibold mb-8 text-center font-title">Upcoming Events</h2>
            <div class="w-16 h-1 bg-primary mx-auto"></div>
        </div>
        <main class="events-container m-0 p-0 md:p-8">
    
    <?php if (have_posts()) : ?>
        
        <!-- Events Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <?php while (have_posts()) : the_post(); ?>
                <?php 
                $event_date = get_post_meta(get_the_ID(), '_event_date', true);
                $event_end_date = get_post_meta(get_the_ID(), '_event_end_date', true);
                $event_time = get_post_meta(get_the_ID(), '_event_time', true);
                $event_end_time = get_post_meta(get_the_ID(), '_event_end_time', true);
                $event_location = get_post_meta(get_the_ID(), '_event_location', true);
                $event_description = get_post_meta(get_the_ID(), '_event_description', true);
                
                // Build date display for archive
                $archive_date_display = '';
                if ($event_date) {
                    $formatted_start = date('F j, Y', strtotime($event_date));
                    $archive_date_display = $formatted_start;
                    
                    if ($event_end_date && $event_end_date !== $event_date) {
                        $formatted_end = date('F j, Y', strtotime($event_end_date));
                        $archive_date_display = $formatted_start . ' - ' . $formatted_end;
                    }
                }
                
                // Build time display for archive
                $archive_time_display = '';
                if ($event_time) {
                    $formatted_start_time = date('g:i A', strtotime($event_time));
                    $archive_time_display = $formatted_start_time;
                    
                    if ($event_end_time && $event_end_time !== $event_time) {
                        $formatted_end_time = date('g:i A', strtotime($event_end_time));
                        $archive_time_display = $formatted_start_time . ' - ' . $formatted_end_time;
                    }
                }
                ?>
                
                <article class="event-card-branded bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    
                    <!-- Event Image -->
                    <div class="event-card-image-branded aspect-video overflow-hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium_large', [
                                    'class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-300',
                                    'alt' => get_the_title() . ' featured image'
                                ]); ?>
                            </a>
                        <?php else : ?>
                            <div class="w-full h-full bg-secondary flex items-center justify-center">
                                <svg class="w-16 h-16 text-muted/50" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Event Content -->
                    <div class="event-card-content p-6 space-y-4">
                        
                        <!-- Event Title -->
                        <h2 class="event-title-branded text-xl font-serif font-semibold text-primary leading-tight">
                            <a href="<?php the_permalink(); ?>" class="hover:text-primary/80 transition-colors">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        
                        <!-- Event Meta -->
                        <div class="space-y-2 text-sm text-muted">
                            <?php if ($archive_date_display) : ?>
                                <div class="event-date-branded flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span><?php echo esc_html($archive_date_display); ?></span>
                                    <?php if ($archive_time_display) : ?>
                                        <span class="text-muted/60">•</span>
                                        <span><?php echo esc_html($archive_time_display); ?></span>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($event_location) : ?>
                                <div class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span><?php echo esc_html($event_location); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Event Description -->
                        <div class="event-description-branded text-muted leading-relaxed">
                            <?php 
                            if ($event_description) {
                                echo '<p>' . esc_html(wp_trim_words($event_description, 20, '...')) . '</p>';
                            } else {
                                echo '<p>' . esc_html(wp_trim_words(get_the_excerpt(), 20, '...')) . '</p>';
                            }
                            ?>
                        </div>
                        
                        <!-- Read More Button -->
                        <div class="pt-2">
                            <a href="<?php the_permalink(); ?>" 
                               class="event-button-branded inline-flex items-center text-primary hover:text-primary/80 font-medium transition-colors">
                                Learn More
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
                        echo str_replace('page-numbers', 'page-numbers bg-secondary text-primary hover:bg-primary hover:text-white px-4 py-2 rounded-lg transition-colors', $link);
                    }
                }
                echo '</nav>';
            }
            ?>
        </div>
        
    <?php else : ?>
        
        <!-- No Events Message -->
        <div class="text-center py-16">
            <svg class="w-16 h-16 text-muted/50 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
            </svg>
            <h2 class="text-2xl font-serif font-semibold text-primary mb-2">No Events Found</h2>
            <p class="text-muted mb-6">Check back soon for upcoming events and activities!</p>
            <a href="<?php echo home_url(); ?>" class="inline-flex items-center px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary/90 transition-colors">
                Return Home
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
        
    <?php endif; ?>
        
        </main>
      </div>
    </div>

    <!-- Decorative separator -->
    <!-- <div class="content-section">
      <div class="flex justify-center py-12 mt-8">
        <div class="w-24 border-b-2 border-primary/80"></div>
      </div>
    </div> -->
    <div class="mt-16">
    <?php get_template_part('template-parts/gs-events-cta'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>