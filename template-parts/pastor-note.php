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
            Welcome to the Village Church!
          </h2>
          
          <div class="prose prose-lg text-gray-700 leading-relaxed">
            <p class="text-lg lg:text-xl font-body">
              I'm Pastor Pete Roman, and I want you to know that you are truly welcome here. In a world that often feels overwhelming, we believe this is a place where you can take a deep breath, find peace, and experience the love of Jesus in a real and meaningful way.
            </p>
            
            <p class="text-lg lg:text-xl font-body">
              No matter where you've been or what you're facing, you are not alone— we're here to walk alongside you. We hope you find a sense of belonging, encouragement, and hope as we seek God together. We're so glad you're here!
            </p>
          </div>
          
          <!-- Pastor Signature -->
          <div class="mt-8 pt-6 border-t border-gray-200">
            <p class="text-primary font-semibold text-lg">Pastor Pete Roman</p>
            <!-- <p class="text-gray-600">Lead Pastor</p> -->
          </div>
        </div>
      </div>
      
      <!-- Image Column -->
      <div class="order-2 lg:order-2">
        <div class="relative">
          <!-- Square Image Container -->
          <div class="aspect-square w-full max-w-md mx-auto lg:ml-auto lg:mr-0 overflow-hidden rounded-lg shadow-lg">
            <img 
              src="<?php echo get_template_directory_uri(); ?>/assets/images/pastor-family.webp" 
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