<?php get_header(); ?>

<div class="parallax-container">
  <!-- Fixed parallax background -->
  <div class="parallax-background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-design-4.webp');"></div>
  
  <!-- Scrollable content -->
  <div class="parallax-content">
    <div class="content-section md:m-8 rounded-b-xl">
      <?php get_template_part('template-parts/connect-hero'); ?>
    </div>

    <!-- Title Card -->
<section class="py-12">
    <div class="container mx-auto">
        <div class="max-w-6xl mx-auto">

            <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                
                <!-- Background Image -->
                <div class="absolute inset-0">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-blue-chevron-r.png" 
                        alt="Welcome to Village Church"
                        class="w-full h-full object-cover object-start"
                    />
                </div>
                
                <!-- Content Overlay -->
                <div class="relative z-10 py-16 px-8 text-center">
                    <h1 class="text-3xl md:text-4xl font-title font-bold text-white mb-6">
                        Connect & Thrive
                    </h1>
                    
                    <p class="text-xl text-muted leading-relaxed text-white font-body mb-8">Here at the Village Church, we believe that community is key to spiritual growth and personal flourishing. Our ministries are designed to help you connect with others, deepen your faith, and experience the love of Jesus.</p>
                    
                    <!-- Navigation Buttons -->
                    <div class="flex flex-col sm:flex-row gap-12 justify-center">
                        <a href="#kids-ministry" class="inline-flex items-center justify-center px-6 py-3 bg-white/90 text-primary font-semibold rounded-lg hover:bg-white hover:scale-105 transition-all duration-300 shadow-lg min-w-72">
                            Kids
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </a>
                        <a href="#youth-ministry" class="inline-flex items-center justify-center px-6 py-3 bg-white/90 text-primary font-semibold rounded-lg hover:bg-white hover:scale-105 transition-all duration-300 shadow-lg min-w-72">
                            Youth
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </a>
                        <a href="#connect-ministry" class="inline-flex items-center justify-center px-6 py-3 bg-white/90 text-primary font-semibold rounded-lg hover:bg-white hover:scale-105 transition-all duration-300 shadow-lg min-w-72">
                            Adults
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Dark overlay for text readability -->
                <div class="absolute inset-0 bg-white/30"></div>
            </div>
        </div>
    </div>
</section>

<div id="kids-ministry">
    <?php get_template_part('template-parts/kids-ministry'); ?>
</div>
<div id="youth-ministry">
    <?php get_template_part('template-parts/youth-ministry'); ?>
</div>
<div id="connect-ministry">
    <?php get_template_part('template-parts/connect-ministry'); ?>
</div>
    <?php get_template_part('template-parts/connect-card-cta'); ?>

    
    <!-- Decorative separator like front-page.php -->
    <div class="content-section">
      <div class="flex justify-center py-12">
          <div class="w-24 border-b-2 border-primary/80"></div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>