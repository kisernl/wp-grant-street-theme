<?php get_header(); ?>

<main class="bg-gs-off-white/50">

    <div class="content-section md:px-8 rounded-b-xl">
      <?php get_template_part('template-parts/gs-give-hero'); ?>
    </div>

    <!-- Why We Give -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-serif font-bold text-primary mb-4">Why We Give</h2>
                <div class="w-16 h-1 bg-primary mx-auto mb-8"></div>
                <div class="space-y-4 text-base text-muted leading-relaxed">
                    <p>
                        At Grant Street Baptist Church, giving is an act of worship and a way to participate in what God is doing in our community and around the world. Your generosity helps us share the Gospel, care for those in need, and build up the body of Christ.
                    </p>
                    <p>
                        We believe giving should be joyful, voluntary, and guided by the Holy Spirit. Whether you're giving your first gift or have been a faithful giver for years, we're grateful for your heart to partner with us in ministry.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Giving Options -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-serif font-bold text-primary mb-4">Ways to Give</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-4"></div>
                    <p class="text-base text-muted">
                        Thank you for supporting the ministry of Grant Street Baptist Church
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <!-- Online Giving -->
                    <div class="bg-white border border-gray-200 rounded-lg p-8 text-center hover:shadow-md transition-shadow duration-300">
                        <h3 class="text-2xl font-serif font-semibold text-primary mb-4">Online Giving</h3>
                        <p class="text-muted mb-6">
                            Give securely online using our Stripe form
                        </p>
                        <a href="https://grantstreetbaptistchurch.betterworld.org/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-6 py-3 bg-primary text-white font-medium rounded-md hover:bg-primary/90 transition-colors duration-200">
                            Give Online
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Mail Check -->
                    <div class="bg-white border border-gray-200 rounded-lg p-8 text-center hover:shadow-md transition-shadow duration-300">
                        <h3 class="text-2xl font-serif font-semibold text-primary mb-4">Mail a Check</h3>
                        <p class="text-muted mb-4">
                            Make checks payable to:<br>
                            <strong>Grant Street Baptist Church</strong>
                        </p>
                        <div class="bg-secondary/30 rounded-lg p-4 text-center">
                            <address class="not-italic text-sm text-primary">
                                724 Grant St<br>Bessemer, AL 35020
                            </address>
                        </div>
                    </div>

                </div>

                <!-- Contact Info -->
                <div class="mt-12 text-center">
                    <p class="text-sm text-muted mb-4">
                        Questions about giving?
                    </p>
                    <a href="/contact" class="text-primary hover:text-primary/80 font-medium">
                        Contact Us
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Decorative separator -->
    <!-- <div class="flex justify-center py-12">
        <div class="w-24 border-b-2 border-primary/80"></div>
    </div> -->

</main>

<?php get_footer(); ?>