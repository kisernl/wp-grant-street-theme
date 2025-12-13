<?php
// Custom Menu Walker for Desktop Navigation with Dropdown Support
class Primary_Menu_Walker extends Walker_Nav_Menu {
    
    // Start the list before the elements are added
    public function start_lvl(&$output, $depth = 0, $args = null) {
        if ($depth == 0) {
            $output .= '<div class="absolute left-0 mt-2 w-56 bg-gray-50 rounded-lg shadow-xl py-2 z-[9999] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 backdrop-blur-sm border border-gray-100" style="isolation: isolate;">';
        }
    }
    
    // End the list after the elements are added
    public function end_lvl(&$output, $depth = 0, $args = null) {
        if ($depth == 0) {
            $output .= '</div>';
        }
    }
    
    // Start the element output
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        
        $is_active = in_array('current-menu-item', $classes) || in_array('current-page-ancestor', $classes);
        
        // Check if this item has children
        $has_children = in_array('menu-item-has-children', $classes);
        
        if ($depth == 0) {
            // Top level items - static white text styling for light navbar
            $base_classes = 'text-md font-base transition-colors duration-300 font-sans flex items-center text-primary hover:text-primary/80';
            
            if ($has_children) {
                $output .= '<div class="' . esc_attr($class_names) . ' relative group">';
            } else {
                $output .= '<div class="' . esc_attr($class_names) . '">';
            }
            
            $attributes = '';
            $attributes .= !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';
            $attributes .= ' class="' . $base_classes . '"';
            
            $title = apply_filters('the_title', $item->title, $item->ID);
            
            $item_output = '<a' . $attributes . '>';
            $item_output .= $title;
            
            // Add dropdown arrow for parent items
            if ($has_children) {
                $item_output .= '<svg class="ml-1 w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">';
                $item_output .= '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>';
                $item_output .= '</svg>';
            }
            
            $item_output .= '</a>';
            
        } else {
            // Submenu items
            $active_class = $is_active ? 'text-primary bg-gray-50' : 'text-gray-700 hover:text-primary hover:bg-gray-50';
            
            $attributes = '';
            $attributes .= !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';
            $attributes .= ' class="block px-4 py-2 text-sm font-medium transition-colors ' . $active_class . '"';
            
            $title = apply_filters('the_title', $item->title, $item->ID);
            
            $item_output = '<a' . $attributes . '>';
            $item_output .= $title;
            $item_output .= '</a>';
        }
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    
    // End the element output
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        if ($depth == 0) {
            $output .= '</div>';
        }
    }
}

// Custom Menu Walker for Dark Desktop Navigation with Dropdown Support
class Primary_Menu_Walker_Dark extends Walker_Nav_Menu {
    
    // Start the list before the elements are added
    public function start_lvl(&$output, $depth = 0, $args = null) {
        if ($depth == 0) {
            $output .= '<div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-xl py-2 z-[9999] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 backdrop-blur-sm border border-gray-100" style="isolation: isolate;">';
        }
    }
    
    // End the list after the elements are added
    public function end_lvl(&$output, $depth = 0, $args = null) {
        if ($depth == 0) {
            $output .= '</div>';
        }
    }
    
    // Start the element output
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        
        $is_active = in_array('current-menu-item', $classes) || in_array('current-page-ancestor', $classes);
        
        // Check if this item has children
        $has_children = in_array('menu-item-has-children', $classes);
        
        if ($depth == 0) {
            // Top level items - static primary text styling for dark navbar
            $base_classes = 'text-md font-base transition-colors duration-300 font-sans flex items-center text-primary hover:text-primary/80';
            
            if ($has_children) {
                $output .= '<div class="' . esc_attr($class_names) . ' relative group">';
            } else {
                $output .= '<div class="' . esc_attr($class_names) . '">';
            }
            
            $attributes = '';
            $attributes .= !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';
            $attributes .= ' class="' . $base_classes . '"';
            
            $title = apply_filters('the_title', $item->title, $item->ID);
            
            $item_output = '<a' . $attributes . '>';
            $item_output .= $title;
            
            // Add dropdown arrow for parent items
            if ($has_children) {
                $item_output .= '<svg class="ml-1 w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">';
                $item_output .= '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>';
                $item_output .= '</svg>';
            }
            
            $item_output .= '</a>';
            
        } else {
            // Submenu items
            $active_class = $is_active ? 'text-primary bg-gray-50' : 'text-gray-700 hover:text-primary hover:bg-gray-50';
            
            $attributes = '';
            $attributes .= !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';
            $attributes .= ' class="block px-4 py-2 text-sm font-medium transition-colors ' . $active_class . '"';
            
            $title = apply_filters('the_title', $item->title, $item->ID);
            
            $item_output = '<a' . $attributes . '>';
            $item_output .= $title;
            $item_output .= '</a>';
        }
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    
    // End the element output
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        if ($depth == 0) {
            $output .= '</div>';
        }
    }
}

// Custom Menu Walker for Mobile Navigation with Accordion Support
class Mobile_Menu_Walker extends Walker_Nav_Menu {
    private $current_parent_item = null;
    
    // Start the list before the elements are added
    public function start_lvl(&$output, $depth = 0, $args = null) {
        if ($depth == 0) {
            $output .= '<div x-show="submenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" class="mt-2 pl-4 space-y-2 border-l-2 border-gray-200">';
            
            // Add simple right arrow link to parent page
            if ($this->current_parent_item && !empty($this->current_parent_item->url) && $this->current_parent_item->url !== '#') {
                $output .= '<a href="' . esc_url($this->current_parent_item->url) . '" class="block py-1 text-gray-500 hover:text-primary transition-colors" @click="isOpen = false">';
                $output .= '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">';
                $output .= '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6l6 6-6 6"></path>';
                $output .= '</svg>';
                $output .= '</a>';
            }
        }
    }
    
    // End the list after the elements are added
    public function end_lvl(&$output, $depth = 0, $args = null) {
        if ($depth == 0) {
            $output .= '</div>';
            // Reset parent item after submenu ends
            $this->current_parent_item = null;
        }
    }
    
    // Start the element output
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        
        $is_active = in_array('current-menu-item', $classes) || in_array('current-page-ancestor', $classes);
        
        // Check if this item has children
        $has_children = in_array('menu-item-has-children', $classes);
        
        if ($depth == 0) {
            // Top level items
            $active_class = $is_active ? 'text-primary' : 'text-primary hover:text-primary/80';
            
            if ($has_children) {
                // Store parent item for use in submenu
                $this->current_parent_item = $item;
                
                $output .= '<div class="' . esc_attr($class_names) . '" x-data="{ submenuOpen: false }">';
                
                // Parent item as button for accordion (no separate link)
                $output .= '<button class="w-full flex items-center justify-between text-lg font-medium transition-colors ' . $active_class . '" @click="submenuOpen = !submenuOpen">';
                $output .= apply_filters('the_title', $item->title, $item->ID);
                $output .= '<svg class="w-4 h-4 transition-transform" :class="{ \'rotate-180\': submenuOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">';
                $output .= '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>';
                $output .= '</svg>';
                $output .= '</button>';
            } else {
                $output .= '<div class="' . esc_attr($class_names) . '">';
                
                $attributes = '';
                $attributes .= !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';
                $attributes .= ' class="text-lg font-medium transition-colors ' . $active_class . ' block"';
                $attributes .= ' @click="isOpen = false"';
                
                $title = apply_filters('the_title', $item->title, $item->ID);
                
                $item_output = '<a' . $attributes . '>';
                $item_output .= $title;
                $item_output .= '</a>';
                
                $output .= $item_output;
            }
        } else {
            // Submenu items (children)
            $indent_class = $depth > 1 ? 'pl-' . ($depth * 4) : '';
            $active_class = $is_active ? 'text-primary bg-transparent' : 'text-gray-700 hover:text-primary';
            
            $attributes = '';
            $attributes .= !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';
            $attributes .= ' class="block py-2 text-base font-medium transition-colors ' . $active_class . ' ' . $indent_class . ' hover:bg-gray-50"';
            $attributes .= ' @click="isOpen = false"';
            
            $title = apply_filters('the_title', $item->title, $item->ID);
            
            $item_output = '<a' . $attributes . '>';
            $item_output .= $title;
            $item_output .= '</a>';
            
            $output .= $item_output;
        }
    }
    
    // End the element output
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        if ($depth == 0) {
            $output .= '</div>';
        }
    }
}

function slccc_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  register_nav_menus([
    'primary' => __('Primary Menu', 'silver-lake-ccc'),
  ]);
}
add_action('after_setup_theme', 'slccc_setup');

function slccc_enqueue_assets() {
  // Styles
  wp_enqueue_style('slccc-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
  
  // Tailwind build (optional, if you output to style.css)
  // wp_enqueue_style('slccc-tailwind', get_template_directory_uri() . '/assets/css/main.css', [], null);

  // Scripts
  wp_enqueue_script('alpine', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', [], null, true);
  wp_enqueue_script('slccc-js', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'slccc_enqueue_assets');

function silverlake_register_menus() {
  register_nav_menus([
    'primary' => __('Primary Menu', 'silver-lake-ccc')
  ]);
}
add_action('after_setup_theme', 'silverlake_register_menus');

function silverlake_enqueue_styles() {
  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Lora:ital,wght@0,400..700;1,400..700&display=swap', array(), null);
  
  // Tailwind CSS - Using compiled version from style.css instead
  // wp_enqueue_style('tailwindcss', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
  
  // Theme styles - Load with higher priority to override plugin styles
  wp_enqueue_style('silverlake-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}
// Higher priority (999) ensures theme styles load after plugin styles
add_action('wp_enqueue_scripts', 'silverlake_enqueue_styles', 999);

// Disable Event Cards Simple plugin CSS to use our theme styles instead
function remove_event_cards_plugin_css() {
    wp_dequeue_style('event-cards-simple-style');
    wp_deregister_style('event-cards-simple-style');
}
add_action('wp_enqueue_scripts', 'remove_event_cards_plugin_css', 100);

// Custom query for events archive - sort by event date, future events first
// function sort_events_by_date($query) {
//     if (!is_admin() && $query->is_main_query()) {
//         if (is_post_type_archive('ecs_event')) {
//             $today = date('Y-m-d');

//             $query->set('meta_key', 'ecs_event_date');
//             $query->set('orderby', 'meta_value');
//             $query->set('order', 'ASC');

//             // Only show future events (optional - remove if you want all events)
//             $query->set('meta_query', array(
//                 array(
//                     'key' => 'ecs_event_date',
//                     'value' => $today,
//                     'compare' => '>=',
//                     'type' => 'DATE'
//                 )
//             ));
//         }
//     }
// }
// add_action('pre_get_posts', 'sort_events_by_date');

// Customizer Settings for Announcement Block
function village_church_announcement_customizer($wp_customize) {
    // Add Announcement Section
    $wp_customize->add_section('announcement_section', array(
        'title' => __('Announcement Block', 'village-church-theme'),
        'description' => __('Manage the announcement block that appears on your site', 'village-church-theme'),
        'priority' => 30,
    ));

    // Show/Hide Announcement
    $wp_customize->add_setting('show_announcement', array(
        'default' => true,
        'transport' => 'refresh',
        'sanitize_callback' => 'village_church_sanitize_checkbox'
    ));

    $wp_customize->add_control('show_announcement', array(
        'label' => __('Show Announcement Block', 'village-church-theme'),
        'section' => 'announcement_section',
        'type' => 'checkbox',
    ));

    // Announcement Title
    $wp_customize->add_setting('announcement_title', array(
        'default' => 'Important Announcement',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('announcement_title', array(
        'label' => __('Announcement Title', 'village-church-theme'),
        'section' => 'announcement_section',
        'type' => 'text',
    ));

    // Announcement Body
    $wp_customize->add_setting('announcement_body', array(
        'default' => 'We have something important to share with our community. Join us for this special event or update.',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post'
    ));

    $wp_customize->add_control('announcement_body', array(
        'label' => __('Announcement Message', 'village-church-theme'),
        'description' => __('You can use basic HTML formatting (paragraphs, bold, italic, links)', 'village-church-theme'),
        'section' => 'announcement_section',
        'type' => 'textarea',
        'input_attrs' => array(
            'rows' => 4
        )
    ));

    // Announcement Button Text
    $wp_customize->add_setting('announcement_button_text', array(
        'default' => 'Learn More',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('announcement_button_text', array(
        'label' => __('Button Text', 'village-church-theme'),
        'section' => 'announcement_section',
        'type' => 'text',
    ));

    // Announcement URL
    $wp_customize->add_setting('announcement_url', array(
        'default' => '#',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('announcement_url', array(
        'label' => __('Button URL', 'village-church-theme'),
        'description' => __('Where the button should link to (leave as # to hide button)', 'village-church-theme'),
        'section' => 'announcement_section',
        'type' => 'url',
    ));

    // Color choices array
    $color_choices = array(
        '#2a3f3f' => 'gs-dark-green',
        '#467750' => 'gs-green',
        '#89c07e' => 'gs-light-green',
        '#e0e8e2' => 'gs-off-white',
        '#fffde8' => 'gs-cream',
        '#f0cd6e' => 'gs-yellow',
    );

    // Border Color
    $wp_customize->add_setting('announcement_border_color', array(
        'default' => '#075674',
        'transport' => 'refresh',
        'sanitize_callback' => 'village_church_sanitize_color'
    ));

    $wp_customize->add_control('announcement_border_color', array(
        'label' => __('Border Color', 'village-church-theme'),
        'section' => 'announcement_section',
        'type' => 'select',
        'choices' => $color_choices,
    ));

    // Button Background Color
    $wp_customize->add_setting('announcement_button_bg_color', array(
        'default' => '#075674',
        'transport' => 'refresh',
        'sanitize_callback' => 'village_church_sanitize_color'
    ));

    $wp_customize->add_control('announcement_button_bg_color', array(
        'label' => __('Button Background Color', 'village-church-theme'),
        'section' => 'announcement_section',
        'type' => 'select',
        'choices' => $color_choices,
    ));

    // Button Text Color
    $wp_customize->add_setting('announcement_button_text_color', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
        'sanitize_callback' => 'village_church_sanitize_color'
    ));

    $wp_customize->add_control('announcement_button_text_color', array(
        'label' => __('Button Text Color', 'village-church-theme'),
        'section' => 'announcement_section',
        'type' => 'select',
        'choices' => $color_choices,
    ));
}
add_action('customize_register', 'village_church_announcement_customizer');

// Sanitization function for checkbox
function village_church_sanitize_checkbox($checked) {
    return ((isset($checked) && true == $checked) ? true : false);
}

// Sanitization function for color choices
function village_church_sanitize_color($color) {
    $valid_colors = array('#2a3f3f', '#467750', '#89c07e', '#e0e8e2', '#fffde8', '#f0cd6e');
    return in_array($color, $valid_colors) ? $color : '#075674';
}

function the_sermon_card($post_id = null, $echo = true) {
    // Actual function is loaded by the Sermon Cards plugin
}


// Sermon Archive Enhancements
function customize_sermon_archive_query($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('sermon')) {
        // Set default number of sermons per page
        $query->set('posts_per_page', 12);
        
        // Default order by date (newest first)
        $query->set('orderby', 'date');
        $query->set('order', 'DESC');
        
        // Ensure only published sermons are shown
        $query->set('post_status', 'publish');
    }
}
add_action('pre_get_posts', 'customize_sermon_archive_query');

// Add custom body class for sermon archive
function add_sermon_archive_body_class($classes) {
    if (is_post_type_archive('sermon')) {
        $classes[] = 'sermon-archive-page';
        $classes[] = 'page-template-archive';
    }
    return $classes;
}
add_filter('body_class', 'add_sermon_archive_body_class');

// Enqueue additional scripts for sermon archive
function enqueue_sermon_archive_scripts() {
    if (is_post_type_archive('sermon')) {
        wp_enqueue_script('jquery');
        
        // Add inline script for enhanced filtering
        $custom_js = "
        jQuery(document).ready(function($) {
            // Enhanced search with debounce
            let searchTimeout;
            $('#sermon-search').on('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(function() {
                    filterSermons();
                }, 300);
            });
            
            // Smooth scroll to results after filter
            function smoothScrollToResults() {
                $('html, body').animate({
                    scrollTop: $('#sermons-grid').offset().top - 100
                }, 500);
            }
            
            // Enhanced filter function
            window.filterSermons = function() {
                const searchTerm = document.getElementById('sermon-search').value.toLowerCase();
                const speakerFilter = document.getElementById('speaker-filter').value.toLowerCase();
                const seriesFilter = document.getElementById('series-filter').value;
                const sermonCards = document.querySelectorAll('.sermon-card');
                const noResults = document.getElementById('no-results');
                let visibleCount = 0;

                sermonCards.forEach(card => {
                    const title = card.getAttribute('data-title') || '';
                    const speaker = card.getAttribute('data-speaker') || '';
                    const series = card.getAttribute('data-series') || '';
                    const text = card.getAttribute('data-text') || '';
                    
                    const matchesSearch = !searchTerm || 
                        title.includes(searchTerm) || 
                        speaker.includes(searchTerm) || 
                        text.includes(searchTerm);
                    
                    const matchesSpeaker = !speakerFilter || speaker.includes(speakerFilter);
                    const matchesSeries = !seriesFilter || series === seriesFilter;
                    
                    if (matchesSearch && matchesSpeaker && matchesSeries) {
                        $(card).fadeIn(300);
                        visibleCount++;
                    } else {
                        $(card).fadeOut(300);
                    }
                });
                
                // Update results count
                if (visibleCount === 0) {
                    $(noResults).removeClass('hidden').hide().fadeIn(300);
                } else {
                    $(noResults).fadeOut(300).addClass('hidden');
                }
                
                // Update count display
                $('.sermon-count').text('Showing ' + visibleCount + ' sermon' + (visibleCount !== 1 ? 's' : ''));
            };
            
            // Clear filters function
            window.clearFilters = function() {
                $('#sermon-search').val('');
                $('#speaker-filter').val('');
                $('#series-filter').val('');
                filterSermons();
                smoothScrollToResults();
            };
        });
        ";
        
        wp_add_inline_script('jquery', $custom_js);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_sermon_archive_scripts');
