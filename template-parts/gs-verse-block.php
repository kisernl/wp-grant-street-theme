<?php
/**
 * Verse Block Component
 * Displays a square image on the left with title and bible verse on the right
 */
?>

<section class="py-16">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
      
      <!-- Verse Block Container -->
      <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12 bg-gs-off-white/50 rounded-lg">
        
        <!-- Square Image - Left Column -->
        <div class="w-full md:w-1/2 flex justify-center">
          <div class="aspect-square">
            <img 
              src="<?php echo get_template_directory_uri(); ?>/assets/images/friends-1.webp"
              alt="Bible Reading" 
              class="w-full h-full object-cover rounded-lg shadow-lg"
            />
          </div>
        </div>
        
        <!-- Content - Right Column -->
        <div class="w-full md:w-1/2 flex flex-col space-y-36">
          
          <!-- Title -->
          <h2 class="text-2xl md:text-3xl lg:text-4xl font-medium text-primary font-title leading-tight">
            Hear the Heart of Jesus
          </h2>
          
          <!-- Bible Verse -->
          <div class="space-y-4 flex flex-col">
            <blockquote class="text-lg md:text-xl text-primary/90 font-body leading-relaxed italic">
              "Come to me, all who labor and are heavy laden, and I will give you rest."
            </blockquote>
            
            <!-- Verse Reference -->
            <cite class="text-base md:text-lg font-semibold text-primary/80 font-title not-italic">
              — Matthew 11:28
            </cite>

            <!-- CTA Button -->
            <a href="/visit" class="bg-primary/80 text-white w-fit font-base px-8 py-4 rounded-lg hover:bg-primary/60 transition-colors duration-200 shadow-lg">
              Plan Your Visit
              <svg class="inline ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
          
        </div>
        
      </div>
      
    </div>
  </div>
</section>