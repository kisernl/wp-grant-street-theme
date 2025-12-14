<?php
/**
 * The template part for displaying the hero section
 */
?>

<section 
  class="h-[80vh] rounded-b-xl md:rounded-xl flex items-end md:mx-12 justify-start relative"
  style="
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home-hero.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;"
>
  <div class="absolute inset-0 bg-gradient-to-r from-gs-dark-green/90 via-gs-dark-green/50 to-transparent rounded-b-xl md:rounded-xl"></div>
  <div class="px-6 md:px-8 relative z-10">
    <div class="space-y-4 pt-32 mb-12 md:mb-16 md:ml-8">
      <h1 class="text-5xl font-bold text-white leading-tight drop-shadow-lg mb-4 font-body">
        Welcome to Grant Street
      </h1>
  

      
      <div class="font-body">
        <p class="text-lg md:text-xl text-white max-w-3xl drop-shadow-lg font-body">
          Sharing the love of Jesus with Bessemer, Birmingham, and the World
        </p>
      </div>

      <div class="pt-8">
        <a 
          href="/visit" 
          class="inline-block bg-button text-white px-12 py-4 text-lg font-medium hover:bg-button/80 transition-colors duration-200 drop-shadow-lg rounded-lg"
        >
          Plan your visit
        </a>
      </div>
    </div>
  </div>
</section>