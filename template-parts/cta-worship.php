<?php
/**
 * The template part for displaying the worship call-to-action section
 */
?>

<section class="py-16 lg:py-20 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
      <!-- Image Column -->
      <div class="order-2 lg:order-1">
        <div class="aspect-square max-w-md mx-auto lg:max-w-full">
          <img 
            src="<?php echo get_template_directory_uri(); ?>/assets/images/sanctuary-preach.jpg" 
            alt="Sunday worship service" 
            class="w-full h-full object-cover rounded-lg shadow-lg"
          />
        </div>
      </div>

      <!-- Content Column -->
      <div class="order-1 lg:order-2 text-center lg:text-left space-y-6">
        <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight font-serif">
          Join us for worship at 10a this Sunday
        </h2>
        
        <p class="text-xl text-gray-700 font-sans">
          Experience meaningful worship, inspiring music, and a message that will encourage you throughout the week.
        </p>
        
        <div class="pt-4">
          <a 
            href="#" 
            class="inline-block bg-blue-600 text-white px-8 py-3 text-lg font-medium hover:bg-blue-700 transition-colors duration-200 rounded-md shadow-md hover:shadow-lg"
          >
            Learn More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
