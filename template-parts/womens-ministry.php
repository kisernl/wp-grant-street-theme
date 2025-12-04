<!-- Women's Ministry -->
<div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0">
        <!-- Image -->
        <div class="lg:col-span-1">
            <div class="aspect-[4/3] lg:aspect-square overflow-hidden">
                <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/images/womens-ministry.webp" 
                alt="Women's Ministry at Village Church"
                class="w-full h-full object-cover"
                />
            </div>
        </div>
        
        <!-- Content -->
        <div class="lg:col-span-2 p-8">
            <div class="flex items-center mb-4">
                <h3 class="text-2xl font-serif font-bold text-primary">Women's Ministry</h3>
            </div>
            
            <p class="text-gray-700 leading-relaxed mb-6">
                Connect with women of all ages and life stages in a warm, welcoming environment. Our gatherings focus on deepening our relationship with Christ, supporting one another, and growing in wisdom and grace as we navigate life together.
            </p>
            
            <!-- Meeting Details -->
            <div class="space-y-3 mb-6">
                <div class="flex items-center text-sm text-gray-600">
                    <svg class="w-4 h-4 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>1st & 3rd Thursdays at 7:00 PM</span>
                </div>
                <div class="flex items-center text-sm text-gray-600">
                    <svg class="w-4 h-4 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Church Fellowship Hall</span>
                </div>
            </div>
            
            <!-- CTA Button -->
            <a href="<?php echo home_url('/connect'); ?>" class="inline-flex items-center justify-center px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary/90 transition-colors w-full lg:w-auto">
                Join Women's Ministry
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</div>