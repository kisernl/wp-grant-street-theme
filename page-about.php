<?php get_header(); ?>

<div class="bg-gs-off-white/50">
    <div id="mission" class="bg-transparent md:px-8 md:pb-0 rounded-b-xl">
      <?php get_template_part('template-parts/gs-about-hero'); ?>
    </div>
    <div id="our-mission"></div>
    <div class="my-24">
      <!-- Mission Statement -->
      <section class="my-20 py-20 bg-white rounded-xl max-w-4xl mx-auto">
          <div class="container mx-auto">
              <div class="mx-auto px-10">
                  <div class="text-center mb-12">
                      <h2 class="text-4xl font-title font-bold text-primary mb-6">Our Mission</h2>
                      <div class="w-16 h-1 bg-primary mx-auto"></div>
                  </div>
                  
                  <div class="text-center">
                      <blockquote class="text-xl lg:text-2xl font-serif text-primary leading-relaxed italic">
                        "To invite and lead people into a growing relationship with Jesus Christ by sharing the gospel and creating environments where people are equipped to know, love, and serve God."
                      </blockquote>
                  </div>
              </div>
          </div>
      </section>
    </div>

    <div class="content-section m-0 md:m-8 pb-12 my-rounded-xl">
      <?php get_template_part('template-parts/gs-about-verse'); ?>
    </div>

    <div id="our-beliefs" class="bg-white">
      <?php get_template_part('template-parts/gs-beliefs'); ?>
    </div>

    <!-- staff cards -->
    <div id="our-leaders" class="py-20 bg-gs-off-white/50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-title font-bold text-primary mb-6">Our Staff</h2>
                <div class="w-16 h-1 bg-primary mx-auto"></div>
            </div>
            
            <div class="max-w-6xl mx-auto">
                <?php echo do_shortcode('[staff_cards orderby="menu_order"]'); ?>
            </div>
        </div>

        <div class="max-w-3xl mx-auto p-8 bg-white rounded-lg shadow-md text-center my-16">
            <h3 class="text-2xl font-title font-semibold text-primary mb-4">Our Leadership</h3>
            <div class="w-16 h-0.5 bg-primary mx-auto"></div>
            <p class="text-gray-700 my-4">Our board of deacons provide vital oversight and support to our church family. These men are elected from within our congregation and are called to serve with wisdom, humility, and love.</p>
            <p class="text-gray-700">You can reach our deacons at <a href="mailto:church@grantstreetbaptist.org" class="text-primary hover:underline">church@grantstreetbaptist.org</a>.</p>
        </div>
    </div>

    <!-- Decorative separator like front-page.php -->
    <!-- <div class="content-section">
      <div class="flex justify-center py-12">
          <div class="w-24 border-b-2 border-primary/80"></div>
      </div>
    </div> -->
</div>

<?php get_footer(); ?>