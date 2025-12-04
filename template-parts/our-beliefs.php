<!-- Our Beliefs & Values Section -->
<section class="py-20 bg-transparent">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="max-w-6xl mx-auto space-y-20">
            
            <!-- Our Beliefs Section - Text Left, Image Right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Beliefs Content (Left) -->
                <div class="space-y-6">
                    <div>
                        <h2 class="text-4xl lg:text-5xl font-serif font-bold text-primary mb-4">Our Beliefs</h2>
                        <div class="w-16 h-1 bg-primary mb-6"></div>
                    </div>
                    
                    <div class="bg-primary/10 backdrop-blur-sm rounded-lg p-8">
                        <p class="text-lg text-primary/90 leading-relaxed mb-6">
                            The Village Church is part of the Evangelical Presbyterian Church Denomination. Our beliefs coincide with the beliefs of the EPC.
                        </p>
                        
                        <div class="space-y-4">
                            <div class="flex flex-col gap-3">
                                <p class="text-primary/90">For more information:</p>
                                <a href="https://epc.org/" target="_blank" rel="noopener" class="inline-flex items-center justify-center px-6 py-3 bg-white text-primary font-medium rounded-lg hover:bg-white/90 transition-colors w-full sm:w-auto">
                                    EPC | A Global Movement
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        
                        <p class="text-primary/90 mt-6">
                            To discuss more about this please <a href="<?php echo home_url('/contact'); ?>" class="text-primary font-medium underline hover:text-primary/80 transition-colors">get in touch with us!</a>
                        </p>
                    </div>
                </div>
                
                <!-- Beliefs Image (Right) -->
                <div class="lg:order-2">
                    <div class="relative">
                        <div class="aspect-[1/1] overflow-hidden rounded-lg shadow-xl">
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/our-beliefs.webp" 
                                alt="Bible Study - Our Beliefs"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <!-- Decorative accent -->
                        <div class="absolute -bottom-4 -right-4 w-20 h-20 bg-primary/20 rounded-lg"></div>
                    </div>
                </div>
            </div>

            <!-- Our Values Section - Image Left, Text Right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Values Image (Left on desktop, Second on mobile) -->
                <div class="order-2 lg:order-1">
                    <div class="relative">
                        <div class="aspect-[3/5] overflow-hidden rounded-lg shadow-xl">
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/friends-2-md.webp" 
                                alt="Community Values - Our Values"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <!-- Decorative accent -->
                        <div class="absolute -bottom-4 -left-4 w-20 h-20 bg-primary/20 rounded-lg"></div>
                    </div>
                </div>
                
                <!-- Values Content (Right on desktop, First on mobile) -->
                <div class="order-1 lg:order-2 space-y-6">
                    <div>
                        <h2 class="text-4xl lg:text-5xl font-serif font-bold text-primary mb-4">Our Values</h2>
                        <div class="w-16 h-1 bg-primary mb-6"></div>
                    </div>
                    
                    <!-- Values List -->
                    <div class="space-y-4">
                        <!-- Intentionally Diverse -->
                        <div class="bg-primary/10 backdrop-blur-sm rounded-lg p-6">
                            <h3 class="text-xl font-semibold text-primary mb-3">Intentionally Diverse</h3>
                            <p class="text-primary/90 leading-relaxed">
                                Reflecting the diversity of our community and embracing it as central to the gospel.
                            </p>
                        </div>

                        <!-- Intentionally Small -->
                        <div class="bg-primary/10 backdrop-blur-sm rounded-lg p-6">
                            <h3 class="text-xl font-semibold text-primary mb-3">Intentionally Small</h3>
                            <p class="text-primary/90 leading-relaxed">
                                Cultivating deep relationships while prioritizing multiplication to extend our impact.
                            </p>
                        </div>

                        <!-- Intentionally Multiplying -->
                        <div class="bg-primary/10 backdrop-blur-sm rounded-lg p-6">
                            <h3 class="text-xl font-semibold text-primary mb-3">Intentionally Multiplying</h3>
                            <p class="text-primary/90 leading-relaxed">
                                Establishing discipleship communities in new neighborhoods as we grow.
                            </p>
                        </div>

                        <!-- Intentionally Modest -->
                        <div class="bg-primary/10 backdrop-blur-sm rounded-lg p-6">
                            <h3 class="text-xl font-semibold text-primary mb-3">Intentionally Modest</h3>
                            <p class="text-primary/90 leading-relaxed">
                                Using our resources to bless the community while maintaining essential needs.
                            </p>
                        </div>

                        <!-- Intentionally Outward -->
                        <div class="bg-primary/10 backdrop-blur-sm rounded-lg p-6">
                            <h3 class="text-xl font-semibold text-primary mb-3">Intentionally Outward</h3>
                            <p class="text-primary/90 leading-relaxed">
                                Partnering with others to serve our community rather than building programs for ourselves.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>