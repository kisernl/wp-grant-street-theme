<?php get_header(); ?>

<div class="parallax-container">
  <!-- Fixed parallax background -->
  <div class="parallax-background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-design-4.webp');"></div>
  
  <!-- Scrollable content -->
  <div class="parallax-content">
    <div class="content-section md:m-8 rounded-b-xl">
      <?php get_template_part('template-parts/about-hero'); ?>
    </div>

    <div id="our-heart" class="content-section m-2 md:m-8 rounded-xl">
      <!-- Mission Statement -->
      <section class="py-20 bg-transparent">
          <div class="container mx-auto px-4">
              <div class="max-w-4xl mx-auto">
                  <div class="text-center mb-16">
                      <h2 class="text-4xl font-serif font-bold text-primary mb-6">Our Heart</h2>
                      <div class="w-16 h-1 bg-primary mx-auto"></div>
                  </div>
                  
                  <div class="text-center">
                      <blockquote class="text-2xl lg:text-3xl font-serif text-primary leading-relaxed italic">
                          "The Village Church is a community of peace where people can process personal struggles, heal from past wounds, and experience the overwhelming love of Jesus. We pray that through our love, people recognize their need for God’s grace, receive salvation in Jesus, and find peace in life with the Spirit."
                      </blockquote>
                  </div>
              </div>
          </div>
      </section>
    </div>

    <div id="our-story" class="content-section m-0 md:m-8 rounded-xl">
      <?php get_template_part('template-parts/our-story'); ?>
    </div>

    <div id="our-beliefs" class="content-section m-2 md:m-8 rounded-xl">
      <?php get_template_part('template-parts/our-beliefs'); ?>
    </div>

    <div id="our-pastor" class="content-section mb-24">
      <?php get_template_part('template-parts/our-pastor'); ?>
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