<?php
/**
 * The template part for displaying announcement block
 */

// Get announcement settings from customizer
$announcement_title = get_theme_mod('announcement_title', 'Important Announcement');
$announcement_body = get_theme_mod('announcement_body', 'We have something important to share with our community.');
$announcement_url = get_theme_mod('announcement_url', '#');
$announcement_button_text = get_theme_mod('announcement_button_text', 'Learn More');
$show_announcement = get_theme_mod('show_announcement', true);

// Get color settings
$border_color = get_theme_mod('announcement_border_color', '#075674');
$button_bg_color = get_theme_mod('announcement_button_bg_color', '#075674');
$button_text_color = get_theme_mod('announcement_button_text_color', '#ffffff');

// Only display if announcement is enabled
if (!$show_announcement || (empty($announcement_title) && empty($announcement_body))) {
    return;
}
?>

<section class="py-16 px-6 md:px-8 relative overflow-hidden bg-transparent">
  
  <div class="max-w-4xl mx-auto relative z-10 bg-transparent">
    <!-- Announcement Container -->
    <div class="bg-transparent text-center p-8 md:p-12 relative" style="border-color: <?php echo esc_attr($border_color); ?>;">

      <!-- Content -->
      <div class="space-y-6">
        <?php if (!empty($announcement_title)): ?>
          <h2 class="text-2xl md:text-4xl font-bold text-primary-text font-title leading-tight">
            <?php echo esc_html($announcement_title); ?>
          </h2>
        <?php endif; ?>

        <?php if (!empty($announcement_body)): ?>
          <div class="text-2xl text-primary-text-light leading-relaxed font-body">
            <?php echo wp_kses_post(wpautop($announcement_body)); ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($announcement_url) && $announcement_url !== '#'): ?>
          <div class="pt-4">
            <a 
              href="<?php echo esc_url($announcement_url); ?>" 
              class="inline-flex items-center px-8 py-4 font-sans text-lg font-medium rounded-lg transition-all duration-200 shadow-md hover:shadow-xl"
              style="background-color: <?php echo esc_attr($button_bg_color); ?>; color: <?php echo esc_attr($button_text_color); ?>;"
              onmouseover="this.style.opacity='0.9'"
              onmouseout="this.style.opacity='1'"
            >
              <?php echo esc_html($announcement_button_text); ?>
              <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </a>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>