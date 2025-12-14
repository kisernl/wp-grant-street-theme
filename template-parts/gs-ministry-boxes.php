<?php
/**
 * The template part for displaying ministry boxes in a bento box layout
 */
?>

<section class="md:py-20">
  <div class="my-8 px-4 py-12 md:py-8 md:m-8 md:p-12 rounded-xl relative overflow-hidden" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-design-orange.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">

    <!-- Ministry Boxes Grid - Responsive Layout -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <!-- Kids Ministry -->
      <a href="/connect#kids" class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 h-[280px]">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/kids-min-2.jpg" 
          alt="Kids Ministry" 
          class="w-full h-full object-cover"
        />
        <!-- Button color overlay -->
        <!-- <div class="absolute inset-0 bg-button/30 group-hover:opacity-0 transition-opacity duration-300"></div> -->
        <!-- Bottom overlay only for text contrast -->
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-black/80 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-6">
          <h3 class="text-2xl font-bold text-white mb-2 font-title">Kids Ministry</h3>
          <p class="text-white/90 text-sm font-body">Fun, safe environment for children to learn and grow</p>
        </div>
      </a>

      <!-- I'm New -->
      <a href="/visit" class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 h-[280px]">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/family-walking-sm.webp" 
          alt="I'm New" 
          class="w-full h-full object-cover"
        />
        <!-- Button color overlay -->
        <!-- <div class="absolute inset-0 bg-button/30 group-hover:opacity-0 transition-opacity duration-300"></div> -->
        <!-- Bottom overlay only for text contrast -->
        <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-black/80 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-6">
          <h3 class="text-2xl font-bold text-white mb-1 font-title">I'm New</h3>
          <p class="text-white/90 text-sm font-body">What to expect and how to get started</p>
        </div>
      </a>
      
      <!-- Youth -->
      <a href="/connect#youth" class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 h-[280px]">
              <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/images/youth-min-sm.webp" 
                alt="Youth" 
                class="w-full h-full object-cover"
              />
              <!-- Button color overlay -->
              <!-- <div class="absolute inset-0 bg-button/30"></div> -->
              <!-- Bottom overlay only for text contrast -->
              <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-black/80 to-transparent"></div>
              <div class="absolute bottom-0 left-0 right-0 p-4">
                <h3 class="text-2xl font-bold text-white mb-1 font-title">Youth</h3>
                <p class="text-white/90 text-sm font-body">Asking questions and building relationships</p>
              </div>
            </a>

      <!-- Bible Studies -->
      <a href="/connect#studies" class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 h-[280px]">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/bible-reading-sm.jpg" 
          alt="Bible Studies" 
          class="w-full h-full object-cover"
        />
        <!-- Button color overlay -->
        <!-- <div class="absolute inset-0 bg-button/30 group-hover:opacity-0 transition-opacity duration-300"></div> -->
        <!-- Bottom overlay only for text contrast -->
        <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-black/80 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-4">
          <h3 class="text-2xl font-bold text-white mb-1 font-title">Bible Studies</h3>
          <p class="text-white/90 text-sm font-body">Being shaped by God's Word together</p>
        </div>
      </a>

    </div>
  </div>
</section>