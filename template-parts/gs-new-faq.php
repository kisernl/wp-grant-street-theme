<?php
/**
 * The template part for displaying FAQ accordion
 */
?>

<section class="py-20 bg-transparent">
  <div class="max-w-4xl mx-auto px-2 md:px-6">
    
    <!-- Section Header -->
    <div class="text-center mb-12">
      <h2 class="text-4xl md:text-5xl font-bold text-primary mb-6 font-title">
        Where to Start
      </h2>
      <p class="text-xl text-gray-600 max-w-2xl mx-auto font-body">
        You may have a few questions about what to expect on your first visit. 
      </p>
    </div>

    <!-- FAQ Accordion -->
    <div class="space-y-4">
      
      <!-- When? -->
      <div class="bg-white/80 backdrop-blur-sm rounded-lg shadow-md overflow-hidden border border-primary/10">
        <button 
          class="faq-trigger w-full px-6 py-4 text-left flex items-center justify-between bg-transparent hover:bg-primary/5 transition-colors duration-200"
          data-target="faq-when"
        >
          <span class="text-xl font-semibold text-primary font-title">When do you meet?</span>
          <svg class="faq-icon w-6 h-6 text-primary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="faq-when" class="faq-content hidden">
          <div class="px-6 pb-6">
            <div class="border-t border-primary/10 pt-4">
              <p class="text-gray-700 leading-relaxed font-body text-lg">
                We gather every Sunday morning at <strong>10:30 AM</strong> with Sunday School at 9:15 AM. 
              </p>
              <p class="text-gray-700 leading-relaxed font-body text-lg">
                Our prayer meeting is on Wednesdays at 6:00 PM.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Where? -->
      <div class="bg-white/80 backdrop-blur-sm rounded-lg shadow-md overflow-hidden border border-primary/10">
        <button 
          class="faq-trigger w-full px-6 py-4 text-left flex items-center justify-between bg-transparent hover:bg-primary/5 transition-colors duration-200"
          data-target="faq-where"
        >
          <span class="text-xl font-semibold text-primary font-title">Where are you located?</span>
          <svg class="faq-icon w-6 h-6 text-primary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="faq-where" class="faq-content hidden">
          <div class="px-6 pb-6">
            <div class="border-t border-primary/10 pt-4">
              <p class="text-gray-700 leading-relaxed font-body text-lg mb-4">
                You can find us at <strong>724 Grant St, Bessemer, AL 35020</strong>. Just 7 minutes from exit 108 (off I-20).
              </p>
              <a 
                href="https://maps.google.com/?q=724+Grant+St,+Bessemer,+AL+35020" 
                target="_blank" 
                rel="noopener"
                class="inline-flex items-center text-primary hover:text-primary/80 font-medium transition-colors font-body"
              >
                Get Directions
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Kids? -->
      <div class="bg-white/80 backdrop-blur-sm rounded-lg shadow-md overflow-hidden border border-primary/10">
        <button 
          class="faq-trigger w-full px-6 py-4 text-left flex items-center justify-between bg-transparent hover:bg-primary/5 transition-colors duration-200"
          data-target="faq-kids"
        >
          <span class="text-xl font-semibold text-primary font-title">What about kids?</span>
          <svg class="faq-icon w-6 h-6 text-primary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="faq-kids" class="faq-content hidden">
          <div class="px-6 pb-6">
            <div class="border-t border-primary/10 pt-4">
              <p class="text-gray-700 leading-relaxed font-body text-lg">
                <strong>We value children as part of our worship!</strong> Children 5th grade and under stay in during the opening worship time, but are dismissed to a class before the sermon.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Wear? -->
      <div class="bg-white/80 backdrop-blur-sm rounded-lg shadow-md overflow-hidden border border-primary/10">
        <button 
          class="faq-trigger w-full px-6 py-4 text-left flex items-center justify-between bg-transparent hover:bg-primary/5 transition-colors duration-200"
          data-target="faq-wear"
        >
          <span class="text-xl font-semibold text-primary font-title">What should I wear?</span>
          <svg class="faq-icon w-6 h-6 text-primary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="faq-wear" class="faq-content hidden">
          <div class="px-6 pb-6">
            <div class="border-t border-primary/10 pt-4">
              <p class="text-gray-700 leading-relaxed font-body text-lg">
                <strong>Come as you are!</strong> Our church family dresses casually and comfortably. You'll see everything from jeans and t-shirts to business casual attire. The most important thing is that you're here - not what you're wearing. We want you to feel completely comfortable and welcomed.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- What's it Like? -->
      <div class="bg-white/80 backdrop-blur-sm rounded-lg shadow-md overflow-hidden border border-primary/10">
        <button 
          class="faq-trigger w-full px-6 py-4 text-left flex items-center justify-between bg-transparent hover:bg-primary/5 transition-colors duration-200"
          data-target="faq-what-like"
        >
          <span class="text-xl font-semibold text-primary font-title">What's it like?</span>
          <svg class="faq-icon w-6 h-6 text-primary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="faq-what-like" class="faq-content hidden">
          <div class="px-6 pb-6">
            <div class="border-t border-primary/10 pt-4">
              <p class="text-gray-700 leading-relaxed font-body text-lg">
                Our worship services feature a blend of traditional hymns and a practical, Bible-centered message. Our services typically last about an hour and prioritize relationships (with Jesus and with one another!), so feel free to stay afterward for a handshake and a friendly conversation.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- <div class="pt-16">
      <a 
        href="<?php echo home_url('/about'); ?>" 
        class="inline-block bg-secondary/90 px-8 py-3 text-white text-lg font-medium hover:bg-secondary/70 transition-colors duration-200 rounded-lg shadow-md hover:shadow-lg"
      >
        More About Us
      </a>
    </div> -->

  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Get all FAQ triggers
  const faqTriggers = document.querySelectorAll('.faq-trigger');
  
  faqTriggers.forEach(trigger => {
    trigger.addEventListener('click', function() {
      const targetId = this.getAttribute('data-target');
      const targetContent = document.getElementById(targetId);
      const icon = this.querySelector('.faq-icon');
      
      // Toggle the content
      if (targetContent.classList.contains('hidden')) {
        // Close all other open FAQs
        document.querySelectorAll('.faq-content').forEach(content => {
          if (content !== targetContent) {
            content.classList.add('hidden');
          }
        });
        
        // Reset all other icons
        document.querySelectorAll('.faq-icon').forEach(otherIcon => {
          if (otherIcon !== icon) {
            otherIcon.classList.remove('rotate-180');
          }
        });
        
        // Open this FAQ
        targetContent.classList.remove('hidden');
        icon.classList.add('rotate-180');
      } else {
        // Close this FAQ
        targetContent.classList.add('hidden');
        icon.classList.remove('rotate-180');
      }
    });
  });
});
</script>