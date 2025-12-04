<?php
/**
 * The template part for displaying ministry links section
 */
?>

<section class="py-20 lg:py-32 bg-gradient-to-t from-primary/70 to-transparent">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      
      <!-- Left Column - Featured Image -->
      <div class="order-1 lg:order-1">
        <div class="relative">
          <img 
            src="<?php echo get_template_directory_uri(); ?>/assets/images/connect-block.webp" 
            alt="Church community" 
            class="w-full h-[600px] object-cover rounded-sm shadow-xl"
          />
          <!-- Decorative accent -->
          <!-- <div class="absolute -top-4 -left-4 w-full h-full bg-muted rounded-sm -z-10"></div> -->
        </div>
      </div>

      <!-- Right Column - Ministry Links -->
      <div class="order-2 lg:order-2">
        <div class="space-y-8">
          
          <div class="mb-12">
            <h2 class="text-3xl md:text-4xl font-base text-primary bg-white/80 mb-4 font-sans border-2 p-4 border-white/30 rounded-sm">Life Together at <br/>The Village Church</h2>
          </div>

          <!-- Youth Ministry -->
          <div class="group border-l-2 border-b-2 border-white/30 pl-6">
            <a 
              href="<?php echo home_url('/ministries#youth'); ?>" 
              class="block pb-4 transition-all duration-300"
            >
              <h3 class="text-2xl font-medium text-white font-sans group-hover:text-white/80 transition-colors duration-300">Youth</h3>
            </a>
          </div>

          <!-- Kids Ministry -->
          <div class="group border-l-2 border-b-2 border-white/30 pl-6">
            <a 
              href="<?php echo home_url('/ministries#kids'); ?>" 
              class="block pb-4 transition-all duration-300"
            >
              <h3 class="text-2xl font-medium text-white font-sans group-hover:text-white/80 transition-colors duration-300">Kids</h3>
            </a>
          </div>

          <!-- Small Groups -->
          <div class="group border-l-2 border-b-2 border-white/30 pl-6">
            <a 
              href="<?php echo home_url('/ministries#small-groups'); ?>" 
              class="block pb-4 transition-all duration-300"
            >
              <h3 class="text-2xl font-medium text-white font-sans group-hover:text-white/80 transition-colors duration-300">Small Groups</h3>
            </a>
          </div>

          <!-- Serve -->
          <div class="group border-l-2 border-b-2 border-white/30 pl-6">
            <a 
              href="<?php echo home_url('/ministries#serve'); ?>" 
              class="block pb-4 transition-all duration-300"
            >
              <h3 class="text-2xl font-medium text-white font-sans group-hover:text-white/80 transition-colors duration-300">Serve</h3>
            </a>
          </div>

        </div>
      </div>
      
    </div>
  </div>
</section>