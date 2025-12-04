<?php get_header(); ?>

<div class="parallax-container">
  <!-- Fixed parallax background -->
  <div class="parallax-background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-design-4.webp');"></div>
  
  <!-- Scrollable content -->
  <div class="parallax-content">
    <div class="content-section md:m-8 rounded-b-xl">
      <?php get_template_part('template-parts/contact-hero'); ?>
    </div>

     <!-- Simple Three-Column Contact Block -->
     <section class="pb-16 pt-16 md:pt-24 bg-transparent">
         <div class="container mx-auto px-4">
             <div class="max-w-6xl mx-auto">
                 
                 <!-- Title -->
                 <!-- <div class="text-center mb-12">
                     <h2 class="text-3xl md:text-4xl font-title font-bold text-primary mb-4">
                         Get In Touch
                     </h2>
                 </div> -->
                 
                 <!-- Three Columns -->
                 <div class="grid grid-cols-1 md:grid-cols-3 md:gap-12">
                     
                     <!-- Find Us Column -->
                     <div class="text-center mb-12">
                         <h3 class="text-3xl font-title font-semibold text-primary mb-8">Find Us</h3>
                         <div class="space-y-2 text-gray-700">
                             <p>202 N Parler Ave<br>St George, SC 29477</p>
                             <a href="https://maps.app.goo.gl/eTN2RPvEGJZuXCkh8" target="_blank" 
                                class="inline-block mt-3 text-primary hover:text-primary/80 font-medium">
                                 Get Directions →
                             </a>
                         </div>
                     </div>
                     
                     <!-- Contact Us Column -->
                     <div class="text-center mb-16 md:border-l-2 md:border-r-2 border-primary/60 p-12 md:p-0 bg-secondary/30 rounded-lg md:bg-transparent md:rounded-none">
                         <h3 class="text-3xl font-title font-semibold text-primary mb-8">Contact Us</h3>
                         <div class="space-y-2 text-gray-700">
                             <p><strong>Phone</strong><br>
                                <a href="tel:+18434089736" class="hover:text-primary">843-408-9736</a>
                             </p>
                             <p><strong>Email</strong><br>
                                <a href="mailto:info@tvcstgeorge.com" class="hover:text-primary">
                                   info@tvcstgeorge.com
                                </a>
                             </p>
                         </div>
                     </div>
                     
                     <!-- Connect With Us Column -->
                     <div class="text-center">
                         <h3 class="text-3xl font-title font-semibold text-primary mb-8">Connect With Us</h3>
                         <div class="space-y-3">
                             <a href="https://tally.so/r/2EEy4j" target="_blank" 
                                class="block w-3/4 mx-auto px-4 py-2 bg-primary text-white rounded hover:bg-primary/90 transition-colors">
                                 Connect Card
                             </a>
                             <a href="https://www.facebook.com/tvcstgeorge" target="_blank" 
                                class="block w-3/4 mx-auto px-4 py-2 border border-primary text-primary rounded hover:bg-primary hover:text-white transition-colors">
                                 Facebook
                             </a>
                             <p class="text-sm text-gray-600 mt-3">
                                Follow us for updates and events
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

    <!-- Decorative separator -->
    <div class="content-section">
      <div class="flex justify-center py-12">
          <div class="w-24 border-b-2 border-primary/80"></div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>