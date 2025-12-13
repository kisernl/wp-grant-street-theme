<?php
/**
 * Ministry Connection Cards Component
 * 
 * Displays ministry areas with descriptions and call-to-action buttons
 */

// Define connection areas
$connection_areas = array(
    array(
        'title' => 'Small Groups',
        'description' => 'Building authentic relationships and growing in faith',
        'detailed_description' => 'Our Small Groups Ministry is committed to creating an atmosphere where everyone feels valued, loved, and at home. Join us in making Grant Street a place where visitors become family through greeting, hospitality, and genuine care.',
        'image' => get_template_directory_uri() . '/assets/images/study-2.jpg',
        'tag' => 'groups',
        'link' => '#'
    ),
    array(
        'title' => 'Kids Ministry',
        'description' => 'Growing the next generation',
        'detailed_description' => 'We\'re passionate about helping the next generation know and love Jesus. Our programs are designed to be safe, fun, and spiritually enriching for children and teens of all ages, with trained volunteers and age-appropriate activities.',
        'image' => get_template_directory_uri() . '/assets/images/kids-min-2.jpg',
        'tag' => 'kids',
        'link' => '#'
    ),
    array(
        'title' => 'Youth Group',
        'description' => 'Building authentic relationships and growing in faith',
        'detailed_description' => 'Our Youth Group is committed to creating an atmosphere where everyone feels valued, loved, and at home. Join us in making Grant Street a place where visitors become family through greeting, hospitality, and genuine care.',
        'image' => get_template_directory_uri() . '/assets/images/youth-min-sm.webp',
        'tag' => 'youth',
        'link' => '#'
    ),
    array(
        'title' => 'Young Adults',
        'description' => 'Building authentic relationships and growing in faith',
        'detailed_description' => 'Our Young Adults Ministry is committed to creating an atmosphere where everyone feels valued, loved, and at home. Join us in making Grant Street a place where visitors become family through greeting, hospitality, and genuine care.',
        'image' => get_template_directory_uri() . '/assets/images/young-adults.webp',
        'tag' => 'young-adults',
        'link' => '#'
    ),
    array(
        'title' => 'Bible Studies',
        'description' => 'Deep relationships through God\'s Word',
        'detailed_description' => 'Join one of our Bible study groups and dive deeper into God\'s Word while building meaningful relationships with fellow believers. Our groups meet throughout the week and offer opportunities for spiritual growth, prayer, and community.',
        'image' => get_template_directory_uri() . '/assets/images/bible-reading-sm.jpg',
        'tag' => 'studies',
        'link' => '#'
    )
);
?>

<!-- Overview Section -->
<section class="bg-white pt-1">
        <div class="space-y-8 max-w-6xl mx-auto">
            <?php foreach ($connection_areas as $index => $area) : ?>
                <a id="<?php echo esc_attr($area['tag']); ?>" class="anchor-tag"></a>
                <div class="overflow-hidden bg-white rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex flex-col md:flex-row">
                        <!-- Image Section -->
                        <div class="md:w-1/3 relative">
                            <img 
                                src="<?php echo esc_url($area['image']); ?>" 
                                alt="<?php echo esc_attr($area['title']); ?>"
                                class="w-full h-64 md:h-full object-cover"
                            />
                            <div class="absolute inset-0 bg-primary/20"></div>
                        </div>
                        
                        <!-- Content Section -->
                        <div class="md:w-2/3 p-8">
                            <div class="mb-4">
                                <h3 class="text-2xl md:text-3xl font-bold text-primary mb-2">
                                    <?php echo esc_html($area['title']); ?>
                                </h3>
                                <p class="text-lg text-primary/80 font-medium">
                                    <?php echo esc_html($area['description']); ?>
                                </p>
                            </div>
                            
                            <div>
                                <p class="text-muted text-base leading-relaxed mb-6">
                                    <?php echo esc_html($area['detailed_description']); ?>
                                </p>
                                
                                <!-- <a 
                                    href="<?php echo esc_url($area['link']); ?>" 
                                    class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-primary rounded-md hover:bg-primary/90 transition-colors duration-200"
                                >
                                    Email Us for Details
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
