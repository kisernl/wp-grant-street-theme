<?php get_header(); ?>

<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
  <div class="text-center max-w-md mx-auto">
    <h1 class="text-6xl font-bold text-primary mb-4 font-title">404</h1>
    <h2 class="text-2xl font-semibold text-gray-800 mb-6 font-title">Page Not Found</h2>
    <p class="text-gray-600 mb-8 font-body">
      Sorry, the page you're looking for doesn't exist.
    </p>
    <a 
      href="<?php echo home_url(); ?>" 
      class="inline-block bg-button text-white px-6 py-3 text-lg font-medium hover:bg-primary transition-colors duration-200 rounded-lg font-body"
    >
      Return Home
    </a>
  </div>
</div>

<?php get_footer(); ?>