<?php
/**
 * The template part for displaying ministry boxes in a bento box layout
 */
?>

<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <!-- Section Header -->
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold text-primary mb-6 font-title">
        Our Ministries
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto font-body">
        Discover the various ways you can connect, grow, and serve in our church community
      </p>
    </div>

    <!-- Bento Box Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6 gap-6 auto-rows-[200px]">
      
      <!-- Large Feature Box - Kids Ministry -->
      <a href="/ministries#kids" class="group relative col-span-1 md:col-span-2 lg:col-span-2 row-span-2 overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-primary/40"></div>
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/kids-min.jpg" 
          alt="Kids Ministry" 
          class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-6">
          <h3 class="text-2xl font-bold text-white mb-2 font-title">Kids Ministry</h3>
          <p class="text-white/90 font-body">Fun, safe environment for children to learn and grow</p>
        </div>
      </a>

      <!-- Youth Ministry -->
      <a href="/ministries#youth" class="group relative col-span-1 md:col-span-2 lg:col-span-2 row-span-1 overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-secondary/40"></div>
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/youth-min.jpg" 
          alt="Youth Ministry" 
          class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-4">
          <h3 class="text-xl font-bold text-white mb-1 font-title">Youth Ministry</h3>
          <p class="text-white/90 text-sm font-body">Building strong foundations in faith</p>
        </div>
      </a>

      <!-- Small Groups -->
      <a href="/ministries#small-groups" class="group relative col-span-1 md:col-span-2 lg:col-span-2 row-span-1 overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-primary/40"></div>
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/small-groups.jpg" 
          alt="Small Groups" 
          class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-4">
          <h3 class="text-xl font-bold text-white mb-1 font-title">Small Groups</h3>
          <p class="text-white/90 text-sm font-body">Deep community and Bible study</p>
        </div>
      </a>

      <!-- Young Adults -->
      <a href="/ministries#young-adults" class="group relative col-span-1 md:col-span-1 lg:col-span-1 row-span-2 overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-secondary/40"></div>
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/young-adults.jpg" 
          alt="Young Adults" 
          class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-4">
          <h3 class="text-lg font-bold text-white mb-2 font-title">Young Adults</h3>
          <p class="text-white/90 text-sm font-body">College & career age community</p>
        </div>
      </a>

      <!-- Worship Team -->
      <a href="/ministries#worship" class="group relative col-span-1 md:col-span-1 lg:col-span-1 row-span-1 overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="absolute inset-0 bg-gradient-to-br from-red-500/20 to-primary/40"></div>
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/prayer-worship.jpg" 
          alt="Worship Team" 
          class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-3">
          <h3 class="text-lg font-bold text-white mb-1 font-title">Worship</h3>
          <p class="text-white/90 text-xs font-body">Music & creative arts</p>
        </div>
      </a>

      <!-- Men's Ministry -->
      <a href="/ministries#mens" class="group relative col-span-1 md:col-span-1 lg:col-span-1 row-span-1 overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/20 to-primary/40"></div>
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/bible-study.jpg" 
          alt="Men's Ministry" 
          class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-3">
          <h3 class="text-lg font-bold text-white mb-1 font-title">Men's Ministry</h3>
          <p class="text-white/90 text-xs font-body">Brotherhood & growth</p>
        </div>
      </a>

      <!-- Women's Ministry -->
      <a href="/ministries#womens" class="group relative col-span-1 md:col-span-2 lg:col-span-2 row-span-1 overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="absolute inset-0 bg-gradient-to-br from-pink-500/20 to-secondary/40"></div>
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/bible-reading.jpg" 
          alt="Women's Ministry" 
          class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-4">
          <h3 class="text-xl font-bold text-white mb-1 font-title">Women's Ministry</h3>
          <p class="text-white/90 text-sm font-body">Sisterhood and spiritual growth</p>
        </div>
      </a>

      <!-- Family Ministry -->
      <a href="/ministries#family" class="group relative col-span-1 md:col-span-2 lg:col-span-2 row-span-1 overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <div class="absolute inset-0 bg-gradient-to-br from-teal-500/20 to-primary/40"></div>
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/images/family.jpg" 
          alt="Family Ministry" 
          class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-4">
          <h3 class="text-xl font-bold text-white mb-1 font-title">Family Ministry</h3>
          <p class="text-white/90 text-sm font-body">Strengthening family bonds through faith</p>
        </div>
      </a>

    </div>

    <!-- Call to Action -->
    <div class="text-center mt-16">
      <a 
        href="/ministries" 
        class="inline-block bg-primary text-white px-12 py-4 text-lg font-medium hover:bg-primary/80 transition-colors duration-200 rounded-lg shadow-lg hover:shadow-xl font-title"
      >
        Explore All Ministries
      </a>
    </div>
  </div>
</section>