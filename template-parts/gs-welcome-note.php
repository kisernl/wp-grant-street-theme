<?php
/**
 * The template part for displaying the pastor note section
 */
?>

<section class="py-20 md:py-24 bg-transparent">
  <div class="max-w-6xl mx-auto px-4 md:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
      
      <!-- Content Column -->
      <div class="order-1 lg:order-1">
        <div class="max-w-xl">
          <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-6 font-title">
            Welcome to Grant Street Baptist Church!
          </h2>
          
          <div class="prose prose-lg text-gray-700 leading-relaxed">
            <p class="text-lg lg:text-xl font-body">
              We're so glad you're checking out Grant Street Baptist Church! Whether you're new to church or looking for a place to belong, we'd love to welcome you.
            </p>
            
            <p class="text-lg lg:text-xl font-body">
              We know visiting a new church can feel intimidating—you never know what to expect. That's why we created this page to help you feel at home before you even step through the doors.
            </p>
          </div>
          
          <!-- About Us Button -->
          <div class="mt-8">
            <a 
              href="/about" 
              class="inline-flex items-center px-6 py-3 text-base font-medium text-white bg-primary rounded-md hover:bg-primary/90 transition-colors duration-200"
            >
              Learn More About Us
              <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
              </svg>
            </a>
          </div>
          
        </div>
      </div>
      
      <!-- Image Column -->
      <div class="order-2 lg:order-2">
        <div class="relative">
          <!-- Square Image Container -->
          <div class="aspect-square w-full max-w-md mx-auto lg:ml-auto lg:mr-0 overflow-hidden rounded-lg shadow-lg">
            <img 
              src="<?php echo get_template_directory_uri(); ?>/assets/images/mens-ministry.webp" 
              alt="Pastor Pete Roman" 
              class="w-full h-full object-cover"
            >
          </div>
          
          <!-- Decorative Elements -->
          <div class="absolute -top-4 -right-4 w-24 h-24 bg-primary/10 rounded-lg -z-10"></div>
        </div>
      </div>
      
    </div>
  </div>
</section>