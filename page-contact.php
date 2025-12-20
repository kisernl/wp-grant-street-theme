<?php get_header(); ?>

<div class="bg-gs-off-white/50">

    <div class="content-section md:px-8 rounded-b-xl">
      <?php get_template_part('template-parts/contact-hero'); ?>
    </div>

     <!-- Simple Three-Column Contact Block -->
     <section class="md:mx-16 my-24 px-2 py-12 md:p-12 bg-white items-center rounded-xl md:rounded-none">
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
                     <div class="text-center mb-12 md:mb-0">
                         <h3 class="text-3xl font-title font-semibold text-primary mb-8">Find Us</h3>
                         <div class="space-y-2 text-gray-700">
                             <p>724 Grant St<br>Bessemer, AL 35020</p>
                             <a href="https://maps.app.goo.gl/CdDWWdZvZ6nX2Btu6" target="_blank" 
                                class="inline-block mt-3 text-primary hover:text-primary/80 font-medium">
                                 Get Directions →
                             </a>
                         </div>
                     </div>
                     
                     <!-- Contact Us Column -->
                     <div class="text-center mb-12 md:mb-0 md:border-l-2 md:border-r-2 border-primary/60 p-12 md:p-0 bg-secondary/30 rounded-lg md:bg-transparent md:rounded-none">
                         <h3 class="text-3xl font-title font-semibold text-primary mb-8">Contact Us</h3>
                         <div class="space-y-2 text-gray-700">
                             <p><strong>Phone</strong><br>
                                <a href="tel:+12054262323" class="hover:text-primary">205-426-2323</a>
                             </p>
                             <p><strong>Email</strong><br>
                                <a href="mailto:church@grantstreetbc.com" class="hover:text-primary">
                                   church@grantstreetbc.com
                                </a>
                             </p>
                         </div>
                     </div>
                     
                     <!-- Connect With Us Column -->
                     <div class="text-center mb-12 md:mb-0">
                         <h3 class="text-3xl font-title font-semibold text-primary mb-8">Connect With Us</h3>
                         <div class="space-y-3">
                             <a href="https://tally.so/r/Np5O2b" target="_blank" 
                                class="block w-3/4 mx-auto px-4 py-2 bg-primary text-white rounded hover:bg-secondary transition-colors">
                                 Connect Card
                             </a>
                             <a href="https://www.facebook.com/GrantStreetBC" target="_blank" 
                                class="block w-3/4 mx-auto px-4 py-2 border border-primary text-primary rounded hover:bg-primary hover:text-white transition-colors">
                                 Facebook
                             </a>
                             <!-- <p class="text-sm text-gray-600 mt-3">
                                Follow us for updates and events
                             </p> -->
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

    <!-- Decorative separator -->
    <div class="">
      <div class="flex justify-center pb-12">
          <div class="w-24 border-b-2 border-primary/80"></div>
      </div>
    </div>

</div>

<?php get_footer(); ?>