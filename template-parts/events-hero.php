<?php
/**
 * Visit Page Hero Section
 * 
 * Hero component specifically designed for the Visit page.
 * Welcomes visitors and provides key information about Sunday services.
 */
?>

<section 
  class="h-[50vh] md:h-[70vh] rounded-b-xl md:rounded-xl flex items-end mb-16 justify-start relative"
  style="
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/serve-team-md.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;"
>
  <div class="absolute inset-0 bg-slate-900 bg-opacity-20 rounded-b-xl md:rounded-xl"></div>
  <div class="px-6 md:px-8 relative z-10">
    <div class="space-y-4 mt-32 mb-12 md:mb-16 md:ml-8">
      <h1 class="text-4xl sm:text-4xl lg:text-7xl font-bold text-white leading-tight drop-shadow-lg mb-4 font-title">
         Events
      </h1>

      
      <div class="font-sans">
        <p class="text-lg md:text-xl text-white max-w-3xl drop-shadow-lg font-body">
          We love spending time together
        </p>
      </div>

    </div>
  </div>
</section>