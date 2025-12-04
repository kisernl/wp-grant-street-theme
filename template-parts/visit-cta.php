<!-- Visit CTA Section -->
<section class="p-4 md:p-12 md:mx-32 md:rounded-lg my-12 bg-secondary/50">
    <div class="container mx-auto">
        <div class="max-w-5xl mx-auto">
            
            <!-- CTA Card -->
            <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                
                <!-- Background Image -->
                <div class="absolute inset-0">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/friends-2-md.webp" 
                        alt="Welcome to Village Church"
                        class="w-full h-full object-cover object-start"
                    />
                    <!-- Dark overlay for text readability -->
                    <div class="absolute inset-0 bg-black/50"></div>
                </div>
                
                <!-- Content Overlay -->
                <div class="relative z-10 py-16 px-8 text-center">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-white mb-6">
                        We're looking forward to meeting you!
                    </h2>
                    
                    <!-- CTA Button -->
                    <a href="<?php echo home_url('/visit'); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary font-semibold rounded-lg hover:bg-button hover:text-white transition-all duration-300 transform shadow-lg">
                        Plan My Visit
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>