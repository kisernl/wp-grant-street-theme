<?php
/**
 * Standing Events Component
 * 
 * Displays recurring weekly and monthly church events
 */

// Define standing events
$standing_events = array(
    // Weekly Events
    array(
        'title' => 'Wednesday Night Bible Study',
        'description' => 'Join us for an in-depth study of God\'s Word and fellowship',
        'day' => 'Wednesday',
        'time' => '6:00 PM',
        'frequency' => 'Weekly',
        'location' => 'Fellowship Hall',
        'icon' => 'book', // book, music, coffee, users
        'type' => 'weekly'
    ),
    array(
        'title' => 'Youth Group',
        'description' => 'Middle and high school students gathering for worship, games, and discipleship',
        'day' => 'Friday',
        'time' => '6:30 PM',
        'frequency' => 'Weekly',
        'location' => 'Youth Room',
        'icon' => 'users',
        'type' => 'weekly'
    ),
    array(
        'title' => 'Music Team Practice',
        'description' => 'Prepare hearts and songs for Sunday worship',
        'day' => 'Thursday',
        'time' => '6:00 PM',
        'frequency' => 'Weekly',
        'location' => 'Sanctuary',
        'icon' => 'music',
        'type' => 'weekly'
    ),
    array(
        'title' => 'Women\'s Bible Study',
        'description' => 'Ladies, grow together in faith and friendship',
        'day' => 'Tuesday',
        'time' => '10:00 AM',
        'frequency' => 'Weekly',
        'location' => 'Room 201',
        'icon' => 'book',
        'type' => 'weekly'
    ),
    
    // Monthly Events
    array(
        'title' => 'Men\'s Breakfast',
        'description' => 'Fellowship, food, and encouragement for men of all ages',
        'day' => '1st Saturday',
        'time' => '8:00 AM',
        'frequency' => 'Monthly',
        'location' => 'Fellowship Hall',
        'icon' => 'coffee',
        'type' => 'monthly'
    ),
);

?>

<section class="py-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center mb-8">
            <h2 class="text-4xl font-title font-semibold text-primary mb-2">
                Life is best together
            </h2>
            <p class="text-base font-body text-muted">
                Join us for worship, fellowship, and opportunities to grow in faith together.
            </p>
        </div>

        <!-- All Events in Single Column -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                <?php 
                $all_events = $standing_events;
                $event_count = count($all_events);
                $current = 0;
                foreach ($all_events as $event) : 
                    $current++;
                    $is_last = ($current === $event_count);
                ?>
                    <div class="flex items-center justify-between px-6 py-4 hover:bg-gray-50 transition-colors <?php echo !$is_last ? 'border-b border-gray-200' : ''; ?>">
                        <!-- Event Info -->
                        <div class="flex-1">
                            <div class="flex items-center gap-4">
                                <!-- Future: Add custom icon here based on event type -->
                                <!-- <div class="text-primary">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="..."></path>
                                    </svg>
                                </div> -->
                                
                                <div>
                                    <h3 class="font-semibold text-primary">
                                        <?php echo esc_html($event['title']); ?>
                                    </h3>
                                    <p class="text-sm text-muted hidden sm:block">
                                        <?php echo esc_html($event['description']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Time, Day, and Location -->
                        <div class="text-right ml-4">
                            <div class="text-sm font-medium text-primary">
                                <?php echo esc_html($event['day'] === '1st Saturday' ? $event['day'] : $event['day'] . 's'); ?>
                            </div>
                            <div class="text-sm text-muted">
                                <?php echo esc_html($event['time']); ?>
                            </div>
                            <div class="text-xs text-muted/70 mt-1">
                                <?php echo esc_html($event['location']); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="mt-8 text-center">
            <p class="text-sm text-muted mb-4">
                Have questions or want to learn more about any of these events?
            </p>
            <a 
                href="/contact
                " 
                class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-primary rounded-md hover:bg-primary/90 transition-colors duration-200"
            >
                Contact Us for More Info
            </a>
        </div>

    </div>
</section>
