<?php get_header('single'); ?>

<div class="parallax-container">
  <!-- Fixed parallax background -->
  <div class="parallax-background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-design-4.webp');"></div>
  
  <!-- Scrollable content -->
  <div class="parallax-content">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <!-- Post Hero Header Section -->
    <section class="relative py-16 lg:py-16">
        
        
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
                                
                                <!-- Post Title -->
                                <h1 class="text-3xl lg:text-4xl xl:text-5xl font-bold text-primary leading-tight drop-shadow-2xl font-sans">
                                    <?php the_title(); ?>
                                </h1>
                                
                                <!-- Post Excerpt -->
                                <?php if (has_excerpt()) : ?>
                                <div class="border-t border-primary/20 pt-6">
                                    <p class="text-lg text-primary/80 leading-relaxed font-serif">
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                                <?php endif; ?>
                                
                                <!-- Date & Additional Details -->
                                <div class="border-t border-primary/20 pt-6 space-y-3">
                                    <?php 
                                    $content = get_post_field('post_content', get_the_ID());
                                    $word_count = str_word_count(strip_tags($content));
                                    $reading_time = ceil($word_count / 200);
                                    ?>
                                    <div class="flex items-center text-primary/80 text-sm font-sans">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <?php echo get_the_date(); ?>
                                    </div>
                                    
                                    <div class="flex items-center text-primary/80 text-sm font-sans">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <?php echo get_the_author(); ?>
                                    </div>
                                    
                                    <?php $tags = get_the_tags(); if ($tags) : ?>
                                    <div class="flex items-center text-primary/80 text-sm font-sans">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                        </svg>
                                        <?php echo count($tags); ?> tag<?php echo count($tags) > 1 ? 's' : ''; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                
                                <!-- Back to Blog Button -->
                                <div class="border-t border-primary/20 pt-6">
                                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="inline-flex items-center py-3 text-primary/80 rounded-xl transition-colors duration-200 font-sans font-medium w-full justify-start bg-transparent">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m0 0l4-4m-4 4l4 4"></path>
                                        </svg>
                                        All Posts
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
                        
                        <!-- Post Content Section -->
                        <div class="post-content-wrapper">
                            <div class="p-8 md:p-12">
                                
                                <!-- Post Content -->
                                <div class="prose prose-lg prose-invert max-w-none font-serif post-content-dark">
                                    <?php the_content(); ?>
                                </div>
                                
                                <!-- Tags Section -->
                                <?php $tags = get_the_tags(); if ($tags) : ?>
                                <div class="pt-8 mt-8 border-t border-white/20">
                                    <h3 class="text-lg font-semibold text-primary mb-4 font-sans flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                        </svg>
                                        Tags
                                    </h3>
                                    <div class="flex flex-wrap gap-3">
                                        <?php foreach ($tags as $tag) : ?>
                                        <a href="<?php echo get_tag_link($tag->term_id); ?>" class="inline-block bg-primary/10 hover:bg-primary/20 text-primary px-4 py-2 rounded-full text-sm font-medium border border-primary/20 transition-colors duration-200">
                                            #<?php echo $tag->name; ?>
                                        </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>

    <!-- Post Navigation Section -->
    <div class="content-section transparent">
        <nav class="py-12 px-6 md:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Previous Post -->
                    <?php $prev_post = get_previous_post(); ?>
                    <?php if ($prev_post) : ?>
                    <a href="<?php echo get_permalink($prev_post); ?>" class="group block p-6 bg-transparent transition-all duration-200">
                        <div class="flex items-center text-primary/80 text-sm font-body mb-2">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            Previous Post
                        </div>
                        <div class="text-primary font-medium font-serif group-hover:text-primary/90">
                            <?php echo wp_trim_words($prev_post->post_title, 10); ?>
                        </div>
                    </a>
                    <?php else : ?>
                    <div></div>
                    <?php endif; ?>

                    <!-- Next Post -->
                    <?php $next_post = get_next_post(); ?>
                    <?php if ($next_post) : ?>
                    <a href="<?php echo get_permalink($next_post); ?>" class="group block p-6 bg-transparent transition-all duration-200 text-right">
                        <div class="flex items-center justify-end text-primary/80 text-sm font-sans mb-2">
                            Next Post
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