<?php get_header('single'); ?>

<div class="parallax-container">
  <!-- Fixed parallax background -->
  <div class="parallax-background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-design-4.webp');"></div>
  
  <!-- Scrollable content -->
  <div class="parallax-content">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <!-- Event Hero Header Section -->
    <section class="relative md:py-8 lg:py-16">
        
        
    </section>
    <!-- Two Column Layout Below Gradient -->
    <div class="content-section transparent" id="content">
        <div class="py-16 px-6 md:px-8 mt-8">
            <div class="max-w-7xl mx-auto">
                
                <!-- Grid: 1/3 Left Column, 2/3 Right Column -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12 items-start">
                    
                    <!-- Left Column: Title and Details (1/3 width) -->
                    <div class="lg:col-span-1">
                        <div class="lg:sticky lg:top-8 lg:h-fit">
                            <div class="space-y-6 p-8">
                                
                                <!-- Event Title -->
                                <h1 class="text-3xl lg:text-4xl xl:text-5xl font-bold text-primary leading-tight drop-shadow-2xl font-sans">
                                    <?php the_title(); ?>
                                </h1>
                                
                                <!-- Event Meta Information -->
                                <div class="border-t border-primary/20 pt-6 space-y-3">
                                    <?php 
                                    $event_date = get_post_meta(get_the_ID(), '_event_date', true);
                                    $event_end_date = get_post_meta(get_the_ID(), '_event_end_date', true);
                                    $event_time = get_post_meta(get_the_ID(), '_event_time', true);
                                    $event_end_time = get_post_meta(get_the_ID(), '_event_end_time', true);
                                    $event_location = get_post_meta(get_the_ID(), '_event_location', true);
                                    $event_price = get_post_meta(get_the_ID(), '_event_price', true);
                                    $event_url = get_post_meta(get_the_ID(), '_event_url', true);
                                    
                                    // Build date display
                                    $date_display = '';
                                    if ($event_date) {
                                        $formatted_start = date('F j, Y', strtotime($event_date));
                                        $date_display = $formatted_start;
                                        
                                        if ($event_end_date && $event_end_date !== $event_date) {
                                            $formatted_end = date('F j, Y', strtotime($event_end_date));
                                            $date_display = $formatted_start . ' - ' . $formatted_end;
                                        }
                                    }
                                    
                                    // Build time display  
                                    $time_display = '';
                                    if ($event_time) {
                                        $formatted_start_time = date('g:i A', strtotime($event_time));
                                        $time_display = $formatted_start_time;
                                        
                                        if ($event_end_time && $event_end_time !== $event_time) {
                                            $formatted_end_time = date('g:i A', strtotime($event_end_time));
                                            $time_display = $formatted_start_time . ' - ' . $formatted_end_time;
                                        }
                                    }
                                    ?>
                                    
                                    <?php if ($date_display) : ?>
                                    <div class="flex items-center text-primary/80 text-sm font-sans">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                        </svg>
                                        <?php echo esc_html($date_display); ?>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <?php if ($time_display) : ?>
                                    <div class="flex items-center text-primary/80 text-sm font-sans">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                        </svg>
                                        <?php echo esc_html($time_display); ?>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <?php if ($event_location) : ?>
                                    <div class="flex items-center text-primary/80 text-sm font-sans">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <?php echo esc_html($event_location); ?>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <?php if ($event_price) : ?>
                                    <div class="flex items-center text-primary/80 text-sm font-sans">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <?php echo esc_html($event_price); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                
                                <!-- Event URL -->
                                <?php if ($event_url) : ?>
                                <div class="border-t border-primary/20 pt-6">
                                    <a href="<?php echo esc_url($event_url); ?>" target="_blank" rel="noopener" class="inline-flex items-center py-3 text-primary/80 rounded-xl transition-colors duration-200 font-sans font-medium w-full justify-start bg-transparent">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                        Event Website
                                    </a>
                                </div>
                                <?php endif; ?>
                                
                                <!-- Back to Events Button -->
                                <div class="border-t border-primary/20 pt-6">
                                    <a href="<?php echo home_url('/events'); ?>" class="inline-flex items-center py-3 text-primary/80 rounded-xl transition-colors duration-200 font-sans font-medium w-full justify-start bg-transparent">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m0 0l4-4m-4 4l4 4"></path>
                                        </svg>
                                        All Events
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    
                    <!-- Right Column: Image and Content (2/3 width) -->
                    <div class="lg:col-span-2 space-y-8">
                        
                        <!-- Featured Image Section -->
                        <?php if (has_post_thumbnail()) : ?>
                        <div class="featured-image-wrapper">
                            <div class="">
                                <?php the_post_thumbnail('large', array('class' => 'w-full h-auto rounded-xl shadow-2xl')); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <!-- Event Content Section -->
                        <div class="post-content-wrapper">
                            <div class="p-8 md:p-12">
                                
                                <!-- Event Content -->
                                <div class="prose prose-lg prose-invert max-w-none font-serif post-content-dark">
                                    <?php 
                                    $content = get_the_content();
                                    if (empty($content)) {
                                        $description = get_post_meta(get_the_ID(), '_event_description', true);
                                        if ($description) {
                                            echo '<p>' . wp_kses_post($description) . '</p>';
                                        }
                                    } else {
                                        the_content();
                                    }
                                    ?>
                                </div>
                                
                                <!-- Contact Information -->
                                <?php 
                                $contact_name = get_post_meta(get_the_ID(), 'ecs_contact_name', true);
                                $contact_phone = get_post_meta(get_the_ID(), 'ecs_contact_phone', true);
                                $contact_email = get_post_meta(get_the_ID(), 'ecs_contact_email', true);
                                ?>
                                
                                <?php if ($contact_name || $contact_phone || $contact_email) : ?>
                                <div class="pt-8 mt-8 border-t border-white/20">
                                    <h3 class="text-lg font-semibold text-primary mb-4 font-sans flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        Contact Information
                                    </h3>
                                    <div class="space-y-3">
                                        <?php if ($contact_name) : ?>
                                        <div class="flex items-center text-primary/80">
                                            <span class="font-medium text-primary mr-2">Contact:</span>
                                            <span><?php echo esc_html($contact_name); ?></span>
                                        </div>
                                        <?php endif; ?>
                                        
                                        <?php if ($contact_phone) : ?>
                                        <div class="flex items-center text-primary/80">
                                            <span class="font-medium text-primary mr-2">Phone:</span>
                                            <a href="tel:<?php echo esc_attr($contact_phone); ?>" class="text-primary hover:text-primary/80 transition-colors">
                                                <?php echo esc_html($contact_phone); ?>
                                            </a>
                                        </div>
                                        <?php endif; ?>
                                        
                                        <?php if ($contact_email) : ?>
                                        <div class="flex items-center text-primary/80">
                                            <span class="font-medium text-primary mr-2">Email:</span>
                                            <a href="mailto:<?php echo esc_attr($contact_email); ?>" class="text-primary hover:text-primary/80 transition-colors">
                                                <?php echo esc_html($contact_email); ?>
                                            </a>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <!-- Share Section -->
                                <!-- <div class="pt-8 mt-8 border-t border-white/20">
                                    <h3 class="text-lg font-semibold text-primary mb-4 font-sans flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                                        </svg>
                                        Share This Event
                                    </h3>
                                    <div class="flex space-x-3">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" 
                                           target="_blank" 
                                           class="inline-block bg-primary/10 hover:bg-primary/20 text-primary px-4 py-2 rounded-full text-sm font-medium border border-primary/20 transition-colors duration-200"
                                           aria-label="Share on Facebook">
                                            Facebook
                                        </a>
                                        <a href="mailto:?subject=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode('Check out this event: ' . get_permalink()); ?>" 
                                           class="inline-block bg-primary/10 hover:bg-primary/20 text-primary px-4 py-2 rounded-full text-sm font-medium border border-primary/20 transition-colors duration-200"
                                           aria-label="Share via Email">
                                            Email
                                        </a>
                                    </div>
                                </div> -->
                                
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>

    <!-- Event Navigation Section -->
    <div class="content-section transparent">
        <nav class="py-12 px-6 md:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Previous Event -->
                    <?php $prev_post = get_previous_post(); ?>
                    <?php if ($prev_post) : ?>
                    <a href="<?php echo get_permalink($prev_post); ?>" class="group block p-6 bg-transparent transition-all duration-200">
                        <div class="flex items-center text-primary/80 text-sm font-body mb-2">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            Previous Event
                        </div>
                        <div class="text-primary font-medium font-serif group-hover:text-primary/90">
                            <?php echo wp_trim_words($prev_post->post_title, 10); ?>
                        </div>
                    </a>
                    <?php else : ?>
                    <div></div>
                    <?php endif; ?>

                    <!-- Next Event -->
                    <?php $next_post = get_next_post(); ?>
                    <?php if ($next_post) : ?>
                    <a href="<?php echo get_permalink($next_post); ?>" class="group block p-6 bg-transparent transition-all duration-200 text-right">
                        <div class="flex items-center justify-end text-primary/80 text-sm font-sans mb-2">
                            Next Event
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="text-primary font-medium font-serif group-hover:text-primary/90">
                            <?php echo wp_trim_words($next_post->post_title, 10); ?>
                        </div>
                    </a>
                    <?php else : ?>
                    <div></div>
                    <?php endif; ?>
                    
                </div>
            </div>
        </nav>
    </div>

    <?php endwhile; endif; ?>
    
  </div>
</div>

<?php get_footer(); ?>