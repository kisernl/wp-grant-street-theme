<?php get_header(); ?>

<div class="parallax-container">
  <!-- Fixed parallax background -->
  <div class="parallax-background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-design-4.webp');"></div>
  
  <!-- Scrollable content -->
  <div class="parallax-content">
    
    <!-- Hero Section -->
    <div class="content-section md:m-8 rounded-b-xl">
      <?php get_template_part('template-parts/give-hero'); ?>
    </div>

    <!-- Giving Section - 2x2 Grid Layout -->
    <div class="content-section">
      <div class="max-w-7xl mx-auto mdpx-4 py-16">
        <div class="bg-white/95 backdrop-filter backdrop-blur-sm rounded-2xl shadow-lg p-8 md:p-12">
          
          <!-- Grid Container: 2x2 on desktop, 1 column on mobile -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
            
            <!-- Row 1: Online Giving (Content Left, Image Right) -->
            <!-- Content Column -->
            <div class="order-1 lg:order-1 flex flex-col justify-center">
              <div class="max-w-xl">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4 font-title">Online Giving</h2>
                <h3 class="text-xl lg:text-2xl font-semibold text-primary mb-6">Thank you for your support!</h3>
                
                <div class="prose prose-lg text-gray-700 leading-relaxed mb-8">
                  <p class="text-base lg:text-lg font-body">
                    At The Village Church, we believe in living generously, using the resources God provides to bless our community rather than build for ourselves. Our pastor is co-vocational by choice, allowing us to keep our financial focus on ministry rather than overhead.
                  </p>
                  <p class="text-base lg:text-lg font-body">
                    Your giving supports partnerships with local organizations, outreach efforts, and tangible acts of love that reflect Christ's heart for the world. Every gift makes an impact, helping us build bridges, seek peace, and share the overwhelming love of Jesus.
                  </p>
                </div>

                <div class="mb-6">
                  <a href="https://tvcstgeorge.givingfire.com/" target="_blank" class="inline-block bg-primary text-white font-semibold px-8 py-3 rounded-lg hover:bg-primary/90 transition-colors duration-200 shadow-lg text-lg">
                    GIVE
                    <svg class="inline ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <!-- Image Column -->
            <div class="order-2 lg:order-2 flex items-center justify-center">
              <div class="relative w-full max-w-md">
                <div class="aspect-square overflow-hidden rounded-lg shadow-lg">
                  <img 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/stgeorge.jpeg" 
                    alt="Community Support" 
                    class="w-full h-full object-cover"
                  >
                </div>
                <!-- Decorative Elements -->
                <div class="absolute -top-4 -right-4 w-20 h-20 bg-primary/10 rounded-lg -z-10"></div>
                <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-secondary/20 rounded-lg -z-10"></div>
              </div>
            </div>

            <!-- Row 2: Village Center Fund (Image Left, Content Right) -->
            <!-- Image Column -->
            <div class="order-4 lg:order-3 flex items-center justify-center md:mt-16">
              <div class="relative w-full max-w-md">
                <div class="aspect-square overflow-hidden rounded-lg shadow-lg">
                  <img 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/10sqft.webp" 
                    alt="10 Square Foot Roof Fund" 
                    class="w-full h-full object-cover"
                  >
                </div>
                <!-- Decorative Elements -->
                <div class="absolute -top-4 -left-4 w-20 h-20 bg-secondary/10 rounded-lg -z-10"></div>
                <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-primary/20 rounded-lg -z-10"></div>
              </div>
            </div>

            <!-- Content Column -->
            <div class="order-3 lg:order-4 flex flex-col justify-center mt-16">
              <div class="max-w-xl lg:ml-auto lg:mr-0">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4 font-title">Village Center Fund</h2>
                <p class="text-lg text-gray-600 font-body mb-6">The Village Church of St. George • Church in St. George, SC</p>
                
                <!-- Roof Fund Highlight -->
                <div class="bg-primary/10 rounded-xl p-4 mb-6">
                  <h3 class="text-xl font-bold text-primary text-center">10 SQ/FT ROOF FUND</h3>
                </div>

                <div class="prose prose-lg text-gray-700 leading-relaxed">
                  <p class="text-base lg:text-lg font-body">
                    The Village Center is more than just a building—it's a place where our church can gather for worship and where the community can find hope, support, and connection. We are raising funds to restore and renovate this space.
                  </p>
                  <p class="text-base lg:text-lg font-body">
                    Every dollar goes directly toward repairs and improvements, ensuring that The Village Center becomes a lasting resource for both our church and the community.
                  </p>
                </div>
              </div>
            </div>

          </div>
          
          <!-- Full-Width Roof Fund Details Section -->
          <div class="mt-12 pt-12 border-t border-gray-200">
            <!-- Roof Fund Details -->
            <div class="bg-gray-50 rounded-xl p-6 md:p-6 mb-8">
              <h4 class="text-2xl font-bold text-gray-900 mb-6 text-center">The Roof Project</h4>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="text-center">
                  <div class="text-3xl font-bold text-primary">$138,000</div>
                  <div class="text-sm text-gray-600">Total Needed</div>
                </div>
                <div class="text-center">
                  <div class="text-3xl font-bold text-secondary">$34,000</div>
                  <div class="text-sm text-gray-600">Raised So Far</div>
                </div>
                <div class="text-center">
                  <div class="text-3xl font-bold text-green-600">$104,000</div>
                  <div class="text-sm text-gray-600">Still Needed</div>
                </div>
              </div>
              
              <!-- Progress Bar -->
              <div class="w-full bg-gray-200 rounded-full h-4 mb-4">
                <div class="bg-primary h-4 rounded-full" style="width: 25%"></div>
              </div>
              <p class="text-center text-sm text-gray-600 mb-6">25% Complete</p>
              
              <div class="bg-white rounded-lg p-6 border-l-4 border-primary mb-8">
                <p class="text-lg font-body text-center">
                  <strong>The starting point is the roof.</strong> We have received a quote for $138,000 to repair the 10,000 square foot roof and have raised $34,000 to date. We are asking people to give $138 to sponsor a 10 x 10 foot square of the roof.
                </p>
              </div>

              <!-- Give to Fund Button -->
              <div class="text-center">
                <a href="https://tvcstgeorge.givingfire.com/?fund=6176" target="_blank" class="inline-block bg-secondary text-white font-semibold px-12 py-4 rounded-lg hover:bg-secondary/90 transition-colors duration-200 shadow-lg text-xl">
                  GIVE TO FUND
                  <svg class="inline ml-3 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Decorative separator -->
    <div class="content-section">
      <div class="flex justify-center py-12">
        <div class="w-24 border-b-2 border-primary/80"></div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>