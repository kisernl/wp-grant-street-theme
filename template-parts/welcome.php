<?php
/**
 * The template part for displaying the welcome section
 */
?>

<section class="py-20 md:py-12 md:bg-white">
  <!-- Desktop Version -->
  <div class="hidden md:block max-w-7xl mx-auto py-24 px-4 md:px-16 rounded-lg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-blue-chev-r.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-center text-white">
      
      <!-- Content Column -->
      <div class="order-2 md:order-1">
        <div class="space-y-12">
          <!-- Who We Are Section -->
          <div class="space-y-6">
            <h3 class="text-xl md:text-2xl font-bold uppercase tracking-wide font-title">
              Who We Are
            </h3>
            
            <p class="text-lg md:text-xl leading-relaxed font-body">
              We are a people shaped by these words of Jesus: <em>They will know you are my disciples by how you love one another.</em>
            </p>
            
            <div class="pt-2">
              <a 
                href="<?php echo home_url('/about'); ?>" 
                class="inline-block bg-secondary px-8 py-3 text-lg font-medium hover:bg-button/70 transition-colors duration-200 rounded-lg shadow-md hover:shadow-lg"
              >
                Learn More
              </a>
            </div>
          </div>

          <!-- Join Us Section -->
          <div class="space-y-6 pt-8 border-t border-gray-200">
            <h3 class="text-xl md:text-2xl font-bold uppercase tracking-wide font-title">
              Plan Your Visit
            </h3>
            
            <p class="text-lg md:text-xl leading-relaxed font-body">
              We gather every Sunday at 10am for worship, community, and to hear God's word together. Visit the link below to plan your visit.
            </p>
            
            <div class="pt-2">
              <a 
                href="<?php echo home_url('/visit'); ?>" 
                class="inline-block text-white px-8 py-3 text-lg font-medium bg-secondary hover:bg-button/70 transition-colors duration-200 rounded-lg shadow-lg"
              >
                Plan Your Visit
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Image Column -->
      <div class="order-1 md:order-2">
        <div class="relative flex justify-center md:justify-end">
          <div class="relative w-full max-w-lg">
            <!-- Single Featured Image -->
            <div class="relative">
              <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/images/prayer-worship.webp" 
                alt="Church community gathering" 
                class="w-full h-[400px] md:h-[500px] object-cover rounded-md shadow-xl"
              />
              
              <!-- Decorative accent -->
              <div class="absolute -top-4 -left-4 w-full h-full bg-primary/10 rounded-lg -z-10"></div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Mobile Version -->
  <div class="block md:hidden max-w-7xl mx-auto py-24 px-4 md:px-16 rounded-lg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-blue-chev-m.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-center text-white">
      
      <!-- Content Column -->
      <div class="order-2 md:order-1">
        <div class="space-y-12">
          <!-- Who We Are Section -->
          <div class="space-y-6">
            <h3 class="text-xl md:text-2xl font-bold uppercase tracking-wide font-title">
              Who We Are
            </h3>
            
            <p class="text-lg md:text-xl leading-relaxed font-body">
              We are a people shaped by these words of Jesus: <em>They will know you are my disciples by how you love one another.</em>
            </p>
            
            <div class="pt-2">
              <a 
                href="<?php echo home_url('/about'); ?>" 
                class="inline-block bg-secondary px-8 py-3 text-lg font-medium hover:bg-primary/30 transition-colors duration-200 rounded-lg shadow-md hover:shadow-lg"
              >
                Learn More
              </a>
            </div>
          </div>

          <!-- Join Us Section -->
          <div class="space-y-6 pt-8 border-t border-gray-200">
            <h3 class="text-xl md:text-2xl font-bold uppercase tracking-wide font-title">
              Plan Your Visit
            </h3>
            
            <p class="text-lg md:text-xl leading-relaxed font-body">
              We gather every Sunday at 10am for worship, community, and to hear God's word together. Visit the link below to plan your visit.
            </p>
            
            <div class="pt-2">
              <a 
                href="<?php echo home_url('/visit'); ?>" 
                class="inline-block text-white px-8 py-3 text-lg font-medium bg-secondary hover:bg-primary/80 transition-colors duration-200 rounded-lg shadow-lg"
              >
                Plan Your Visit
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Image Column -->
      <div class="order-1 md:order-2">
        <div class="relative flex justify-center md:justify-end">
          <div class="relative w-full max-w-lg">
            <!-- Single Featured Image -->
            <div class="relative">
              <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/images/prayer-worship.webp" 
                alt="Church community gathering" 
                class="w-full h-[400px] md:h-[500px] object-cover rounded-md shadow-xl"
              />
              
              <!-- Decorative accent -->
              <div class="absolute -top-4 -left-4 w-full h-full bg-primary/10 rounded-lg -z-10"></div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>