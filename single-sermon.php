<?php get_header('single'); ?>

<div class="parallax-container">
  <!-- Fixed parallax background -->
  <div class="parallax-background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-design-4.webp');"></div>
  
  <!-- Scrollable content -->
  <div class="parallax-content">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <!-- Sermon Hero Header Section -->
    <section class="relative py-16 lg:py-16 m-8">
        
    </section>

    <!-- Two Column Layout Below Gradient -->
    <div class="content-section transparent" id="content">
        <div class="py-16 px-6 md:px-8">
            <div class="max-w-7xl mx-auto">
                
                <!-- Grid: 1/3 Left Column, 2/3 Right Column -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12 items-start">
                    
                    <!-- Left Column: Title and Sermon Details (1/3 width) -->
                    <div class="lg:col-span-1">
                        <div class="lg:sticky lg:top-8 lg:h-fit">
                            <div class="space-y-6 p-8">
                                
                                <!-- Sermon Title -->
                                <h1 class="text-3xl lg:text-4xl xl:text-5xl font-bold text-primary leading-tight drop-shadow-2xl font-sans">
                                    <?php the_title(); ?>
                                </h1>
                                
                                <!-- Sermon Details -->
                                <?php 
                                $speaker = get_sermon_speaker();
                                $sermon_text = get_sermon_text();
                                $series = get_sermon_series();
                                ?>
                                
                                <div class="border-t border-primary/20 pt-6 space-y-3">
                                    
                                    <?php if ($speaker) : ?>
                                    <div class="flex items-center text-primary/80 text-sm font-sans">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        Speaker: <?php echo esc_html($speaker); ?>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <?php if ($sermon_text) : ?>
                                    <div class="flex items-center text-primary/80 text-sm font-sans">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                        Scripture: <?php echo esc_html($sermon_text); ?>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <?php if ($series) : ?>
                                    <div class="flex items-center text-primary/80 text-sm font-sans">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m0 0l4-4m-4 4l4 4"></path>
                                        </svg>
                                        Series: <?php echo esc_html($series); ?>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <div class="flex items-center text-primary/80 text-sm font-sans">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <?php echo get_the_date(); ?>
                                    </div>
                                </div>
                                
                                <!-- Sermon Description -->
                                <?php 
                                $description = get_sermon_description();
                                if ($description) :
                                ?>
                                <div class="border-t border-primary/20 pt-6">
                                    <p class="text-lg text-primary/80 leading-relaxed font-serif">
                                        <?php echo esc_html($description); ?>
                                    </p>
                                </div>
                                <?php endif; ?>
                                
                                <!-- Sermon Links -->
                                <div class="border-t border-primary/20 pt-6">
                                    <h3 class="text-lg font-semibold text-primary mb-4 font-sans">Listen & Watch</h3>
                                    <div class="space-y-3">
                                        
                                        <?php if (sermon_has_audio()) : ?>
                                        <a href="<?php echo esc_url(get_sermon_audio_link()); ?>" target="_blank" rel="noopener" class="flex items-center py-3 px-4 text-primary/80 bg-primary/10 rounded-xl hover:bg-primary/20 transition-colors duration-200 font-sans font-medium">
                                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072M18.364 5.636a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path>
                                            </svg>
                                            Listen to Audio
                                        </a>
                                        <?php endif; ?>
                                        
                                        <?php if (sermon_has_video()) : ?>
                                        <a href="<?php echo esc_url(get_sermon_video_link()); ?>" target="_blank" rel="noopener" class="flex items-center py-3 px-4 text-primary/80 bg-primary/10 rounded-xl hover:bg-primary/20 transition-colors duration-200 font-sans font-medium">
                                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293H15M9 10v4a1 1 0 001 1h4M9 10V9a1 1 0 011-1h4a1 1 0 011 1v1"></path>
                                            </svg>
                                            Watch Video
                                        </a>
                                        <?php endif; ?>
                                        
                                        <?php if (sermon_has_text_link()) : ?>
                                        <a href="<?php echo esc_url(get_sermon_text_link()); ?>" target="_blank" rel="noopener" class="flex items-center py-3 px-4 text-primary/80 bg-primary/10 rounded-xl hover:bg-primary/20 transition-colors duration-200 font-sans font-medium">
                                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                            Read Text/PDF
                                        </a>
                                        <?php endif; ?>
                                        
                                    </div>
                                </div>
                                
                                <!-- Back to Sermons Button -->
                                <div class="border-t border-primary/20 pt-6">
                                    <a href="<?php echo home_url('/sermons'); ?>" class="inline-flex items-center py-3 text-primary/80 rounded-xl transition-colors duration-200 font-sans font-medium w-full justify-start bg-transparent">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m0 0l4-4m-4 4l4 4"></path>
                                        </svg>
                                        All Sermons
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
                        
                        <!-- Sermon Content Section -->
                        <div class="post-content-wrapper">
                            <div class="p-8 md:p-12">
                                
                                <!-- Sermon Content -->
                                <div class="prose prose-lg prose-invert max-w-none font-serif post-content-dark">
                                    <?php the_content(); ?>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>

    <!-- Sermon Navigation Section -->
    <div class="content-section transparent">
        <nav class="py-12 px-6 md:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Previous Sermon -->
                    <?php 
                    $prev_sermon = get_previous_post(false, '', 'sermon');
                    ?>
                    <?php if ($prev_sermon) : ?>
                    <a href="<?php echo get_permalink($prev_sermon); ?>" class="group block p-6 bg-transparent transition-all duration-200">
                        <div class="flex items-center text-primary/80 text-sm font-body mb-2">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            Previous Sermon
                        </div>
                        <div class="text-primary font-medium font-serif group-hover:text-primary/90">
                            <?php echo wp_trim_words($prev_sermon->post_title, 10); ?>
                        </div>
                    </a>
                    <?php else : ?>
                    <div></div>
                    <?php endif; ?>

                    <!-- Next Sermon -->
                    <?php 
                    $next_sermon = get_next_post(false, '', 'sermon');
                    ?>
                    <?php if ($next_sermon) : ?>
                    <a href="<?php echo get_permalink($next_sermon); ?>" class="group block p-6 bg-transparent transition-all duration-200 text-right">
                        <div class="flex items-center justify-end text-primary/80 text-sm font-sans mb-2">
                            Next Sermon
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="text-primary font-medium font-serif group-hover:text-primary/90">
                            <?php echo wp_trim_words($next_sermon->post_title, 10); ?>
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
