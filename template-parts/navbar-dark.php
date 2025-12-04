<nav class="absolute top-0 left-0 right-0 md:left-10 md:right-10 z-50 transition-all duration-300 md:rounded-lg md:mt-14 bg-gs-off-white/50 backdrop-blur-md" x-data="{ isOpen: false }">
  <div class="mx-auto md:px-6 px-4 py-0 text-primary">
    <div class="flex justify-between items-center h-16">
      <!-- Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-3">
        <div class="relative h-16" style="width: 75px;">
          <img 
            src="<?php echo get_template_directory_uri(); ?>/assets/images/tvcsg-blue.svg"
            alt="The Village Church Logo" 
            class="h-16 w-auto"
          />
        </div>
        <div class="flex flex-col xl:flex-row items-baseline space-x-0.5">
          <span class="md:text-2xl text-lg font-semibold leading-tight font-title mr-1 text-primary">The Village Church</span>
          <span class="md:text-lg text-base font-base leading-tight font-body text-primary/80">of Saint George - EPC</span>
        </div>
      </a>

      <!-- Desktop Navigation -->
      <div class="hidden lg:flex items-center space-x-8 text-primary font-title">
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'flex space-x-8 font-title items-center text-primary',
          'items_wrap' => '%3$s',
          'fallback_cb' => false,
          'walker' => new Primary_Menu_Walker_Dark(),
        ]);
        ?>
        <div class="flex items-center space-x-8">
          <a href="/visit" class="focus:outline-none font-sans px-8 py-2 rounded-lg transition-all duration-300 border border-primary text-primary bg-transparent hover:bg-button/20">Visit</a>
        </div>
      </div>

      <!-- Mobile menu button -->
      <div class="lg:hidden">
        <button
          @click="isOpen = !isOpen"
          class="focus:outline-none transition-colors duration-300 text-primary hover:text-primary/70"
        >
          <svg x-show="!isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg x-show="isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Navigation -->
    <div x-show="isOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform scale-95"
         x-transition:enter-end="opacity-100 transform scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-95"
         class="md:hidden pb-6 border-t border-primary/20 bg-gs-off-white/90 backdrop-blur-md rounded-b-lg">
      <div class="flex flex-col space-y-4 pt-6">
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'flex flex-col space-y-4',
          'items_wrap' => '%3$s',
          'fallback_cb' => false,
          'walker' => new Mobile_Menu_Walker(),
        ]);
        ?>
      </div>
    </div>
  </div>
</nav>