<?php
/**
 * Events Call to Action Component
 * 
 * Displays a CTA section to encourage visitors to stay updated
 */
?>

<!-- Call to Action Section -->
<section class="py-20 bg-gs-green/60 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center space-y-6">
            <h2 class="text-3xl md:text-4xl font-bold">
                Want to Stay Updated?
            </h2>
            <p class="text-xl opacity-90 leading-relaxed">
                Email us to join our newsletter and follow us on Facebook to never miss an opportunity to connect.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <!-- Email Button -->
                <a 
                    href="mailto:church@grantstreetbc.com"
                    class="inline-flex items-center justify-center gap-2 px-6 py-3 text-base font-medium text-primary bg-white rounded-md hover:bg-gray-100 transition-colors duration-200"
                >
                    <!-- Mail Icon SVG -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>Email Us</span>
                </a>
                
                <!-- Facebook Button -->
                <a
                    href="https://www.facebook.com/grantstreetbc" 
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center justify-center gap-2 px-6 py-3 text-base font-medium text-white bg-transparent border-2 border-white rounded-md hover:bg-white hover:text-primary transition-colors duration-200"
                >
                    <!-- Facebook Icon SVG -->
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    <span>Follow on Facebook</span>
                </a>
            </div>
        </div>
    </div>
</section>