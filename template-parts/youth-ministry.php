<!-- Youth Ministry Section -->
<section class="py-20 bg-transparent">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            
            <!-- Youth Ministry Layout - Text Left, Image Right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Youth Ministry Content (Left) -->
                <div class="space-y-6">
                    <div>
                        <h2 class="text-4xl lg:text-5xl font-serif font-bold text-primary mb-4">Youth Ministry</h2>
                        <div class="w-16 h-1 bg-primary mb-6"></div>
                    </div>
                    
                    <div class="bg-primary/10 backdrop-blur-sm rounded-lg p-8">
                        <!-- Description -->
                        <div class="space-y-4 mb-8">
                            <p class="text-lg text-primary/90 leading-relaxed">
                                Our Youth Ministry is designed for middle school and high school students who want to grow in their faith while having fun with friends. We create a welcoming environment where teens can ask questions, build meaningful relationships, and discover the love of Jesus for themselves.
                            </p>
                        </div>
                        
                        <!-- Meeting Details -->
                        <div class="space-y-4">
                            <h3 class="text-xl font-semibold text-primary mb-4">Weekly Gatherings</h3>
                            
                            <!-- Combined Meeting Info -->
                            <div class="p-6 bg-white/50 rounded-lg space-y-4">
                                <!-- Time -->
                                <div class="flex items-center space-x-3">
                                    <div class="bg-primary/20 w-8 h-8 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm text-primary/70 font-medium">When</p>
                                        <p class="text-primary font-semibold">Wednesdays at 6:30 PM</p>
                                    </div>
                                </div>
                                
                                <!-- Location -->
                                <div class="flex items-center space-x-3">
                                    <div class="bg-primary/20 w-8 h-8 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm text-primary/70 font-medium">Where</p>
                                        <p class="text-primary font-semibold">Village Church Main Building</p>
                                        <p class="text-sm text-primary/80">123 Main Street, St. George</p>
                                    </div>
                                </div>
                                
                                <!-- Ages -->
                                <div class="flex items-center space-x-3">
                                    <div class="bg-primary/20 w-8 h-8 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm text-primary/70 font-medium">Who</p>
                                        <p class="text-primary font-semibold">Middle & High School Students</p>
                                        <p class="text-sm text-primary/80">Grades 6-12</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CTA Button -->
                        <div class="mt-8">
                            <a href="<?php echo home_url('/connect'); ?>" class="inline-flex items-center justify-center px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary/90 transition-colors w-full sm:w-auto">
                                Connect with Youth Ministry
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Youth Ministry Image (Right) -->
                <div class="lg:order-2">
                    <div class="relative">
                        <div class="aspect-[4/5] overflow-hidden rounded-lg shadow-xl">
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/youth-min-sm.webp" 
                                alt="Youth Ministry at Village Church"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <!-- Decorative accent -->
                        <div class="absolute -bottom-4 -right-4 w-20 h-20 bg-primary/20 rounded-lg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>