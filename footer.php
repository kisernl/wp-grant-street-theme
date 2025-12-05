<footer class="bg-primary text-white">
  <!-- Top Section - 4 Columns -->
  <div class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      
      <!-- Column 1: Church Logo and Name -->
      <div class="space-y-4">
        <div class="flex items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gsbc-logo-w.png" 
               alt="Grant Street Baptist Church Logo" 
               class="w-16 h-auto -ml-4">
          <div>
            <h3 class="font-title font-bold text-xl leading-tight">Grant Street</h3>
            <p class="text-sm text-white/80 font-body">Baptist Church</p>
          </div>
        </div>
        <p class="text-sm text-white/80 font-body leading-relaxed">
          <em>A Going Church for the Coming Christ!</em>
        </p>
      </div>

      <!-- Column 2: Navigation Links -->
      <div class="space-y-4">
        <h4 class="font-semibold text-lg mb-4">Quick Links</h4>
        <nav class="space-y-2">
          <a href="<?php echo home_url(); ?>" class="block text-white/80 hover:text-white transition-colors">Home</a>
          <a href="<?php echo home_url('/about'); ?>" class="block text-white/80 hover:text-white transition-colors">About</a>
          <a href="<?php echo home_url('/connect'); ?>" class="block text-white/80 hover:text-white transition-colors">Connect</a>
          <a href="<?php echo home_url('/resources'); ?>" class="block text-white/80 hover:text-white transition-colors">Resources</a>
          <a href="<?php echo home_url('/events'); ?>" class="block text-white/80 hover:text-white transition-colors">Events</a>
          <a href="<?php echo home_url('/contact'); ?>" class="block text-white/80 hover:text-white transition-colors">Contact</a>
        </nav>
      </div>

      <!-- Column 3: Contact Info -->
      <div class="space-y-4">
        <h4 class="font-semibold text-lg mb-4">Contact Info</h4>
        <div class="space-y-3 text-sm">
          <div class="flex items-start space-x-3">
            <svg class="w-4 h-4 mt-1 text-white/60" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
            </svg>
            <div class="text-white/80">
              <p>202 N Parler Ave</p>
              <p>St George, SC 29477</p>
            </div>
          </div>
          
          <div class="flex items-center space-x-3">
            <svg class="w-4 h-4 text-white/60" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
            </svg>
            <a href="tel:+18434089736" class="text-white/80 hover:text-white transition-colors">(843) 408-9736</a>
          </div>
          
          <div class="flex items-center space-x-3">
            <svg class="w-4 h-4 text-white/60" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
            </svg>
            <a href="mailto:info@tvcstgeorge.com" class="text-white/80 hover:text-white transition-colors">info@tvcstgeorge.com</a>
          </div>
        </div>
      </div>

      <!-- Column 4: Connect With Us -->
      <div class="space-y-4">
        <h4 class="font-semibold text-lg mb-4">Connect With Us</h4>
        <div class="space-y-4">
          <div class="text-sm text-white/80">
            <p class="mb-2">Sundays:</p>
            <p>10:00 AM</p>
          </div>
          
          <div class="flex space-x-4">
            <a href="https://www.facebook.com/tvcstgeorge" target="_blank" class="text-white/80 hover:text-white transition-colors" aria-label="Facebook">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </a>
            <a href="https://www.youtube.com/@tvcstgeorge" target="_blank" class="text-white/80 hover:text-white transition-colors" aria-label="YouTube">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
              </svg>
            </a>
          </div>
          
          <!-- Connect Card Button -->
          <div class="mt-20">
            <a href="https://tally.so/r/2EEy4j" target="_blank" rel="noopener"
               class="inline-block bg-secondary text-white font-semibold px-4 py-2 rounded-md hover:bg-secondary/90 transition-colors duration-200 text-sm mt-4">
              Connect Card
              <svg class="inline ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Bottom Section - Copyright and Credits -->
  <div class="border-t border-primary-foreground/20 font-serif">
    <div class="container mx-auto px-4 py-4">
      <div class="flex flex-col md:flex-row md:justify-between md:items-center text-sm text-white/80 space-y-2 md:space-y-0">
        <p>&copy; <?php echo date('Y'); ?> The Village Church of Saint George.<br class="md:hidden"> All rights reserved.</p>
        <p class="font-serif text-white/80">Web design and hosting by <a href="https://mayflycreative.co" class="text-white hover:underline" target="_blank" rel="noopener">mayflycreative.co</a></p>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
