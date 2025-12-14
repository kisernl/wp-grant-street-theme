<nav class="absolute top-0 left-0 right-0 p-4 z-50 transition-all duration-300 md:rounded-lg" 
     x-data="{ isOpen: false }" 
     x-effect="document.body.style.overflow = isOpen ? 'hidden' : ''"
     style="isolation: isolate;">
  <div class="mx-auto md:px-8 px-4 py-0 text-primary">
    <div class="flex justify-between items-center h-16">
      <!-- Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
        <div class="relative h-16" style="width: 65px;">
          <img 
            src="<?php echo get_template_directory_uri(); ?>/assets/images/gsbc-logo.svg"
            alt="Grant Street Baptist Church Logo" 
            class="h-16 w-auto"
          />
        </div>
        <div class="flex flex-col">
          <span class="md:text-2xl text-lg font-bold leading-tight font-title text-primary">Grant Street</span>
          <span class="md:text-md text-base font-base leading-tight font-body text-primary/80">Baptist Church</span>
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
          'walker' => new Primary_Menu_Walker(),
        ]);
        ?>
        <div class="flex items-center space-x-8">
          <a href="https://www.facebook.com/GrantStreetBC/live" target="_blank" rel="noopener" class="focus:outline-none font-sans px-8 py-2 rounded-lg transition-all duration-300 border border-primary text-primary bg-transparent hover:bg-button/20">Livestream</a>
        </div>
        <div class="flex items-center space-x-8">
          <a href="/visit" class="focus:outline-none font-sans px-8 py-2 rounded-lg transition-all duration-300 border border-primary text-white bg-primary hover:bg-primary/80">Visit</a>
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

    <!-- Mobile Navigation Overlay -->
    <div x-show="isOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="lg:hidden fixed inset-0 bg-primary overflow-y-auto"
         style="z-index: 9999;">
      <!-- Mobile Header -->
      <div class="flex justify-between items-center p-4 border-b border-white/20">
        <!-- Logo Only (White) -->
        <a href="<?php echo esc_url(home_url('/')); ?>" @click="isOpen = false">
          <img 
            src="<?php echo get_template_directory_uri(); ?>/assets/images/gsbc-logo-w.png"
            alt="Grant Street Baptist Church Logo" 
            class="h-12 w-auto"
          />
        </a>
        
        <!-- Close Button -->
        <button
          @click="isOpen = false"
          class="focus:outline-none transition-colors duration-300 text-white hover:text-white/70 p-2"
        >
          <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      
      <!-- Menu Content -->
      <div class="flex flex-col space-y-6 pt-8 px-6">
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'flex flex-col space-y-4 text-white',
          'items_wrap' => '%3$s',
          'fallback_cb' => false,
          'walker' => new Mobile_Menu_Walker(),
        ]);
        ?>
        <div class="py-4 border-t border-white/20">
          <a href="https://www.facebook.com/GrantStreetBC/live" target="_blank" rel="noopener" class="block w-full text-center text-lg font-sans text-white font-bold py-3 border border-white rounded-lg hover:bg-white/10 transition-colors mb-4">Livestream</a>
          <a href="/visit" class="block w-full text-center text-lg font-sans text-primary bg-white font-bold py-3 rounded-lg hover:bg-white/90 transition-colors">Visit</a>
        </div>
      </div>
    </div>
  </div>
</nav>
