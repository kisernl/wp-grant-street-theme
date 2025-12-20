<?php
/**
 * Template Part: Calendar Events
 * Displays upcoming calendar events that haven't passed yet
 */

// Get today's date for comparison
$today = date('Y-m-d');

// Query upcoming events
$args = array(
    'post_type'      => 'gs_calendar_event',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'meta_key'       => '_gs_event_date',
    'orderby'        => 'meta_value',
    'order'          => 'ASC',
    'meta_query'     => array(
        array(
            'key'     => '_gs_event_date',
            'value'   => $today,
            'compare' => '>=',
            'type'    => 'DATE'
        )
    )
);

$calendar_events = new WP_Query($args);
?>

<section class="py-12">
    <div class="container mx-auto px-4 md:px-8">
        
        <!-- Section Header -->
        <div class="text-center mb-8">
            <h2 class="text-4xl font-title font-semibold text-primary mb-2">
                Calendar
            </h2>
        </div>

        <!-- All Events in Single Column -->
        <div class="max-w-4xl mx-auto">
            <?php if ($calendar_events->have_posts()) : ?>
                <?php 
                // Group events by month
                $events_by_month = array();
                while ($calendar_events->have_posts()) : $calendar_events->the_post(); 
                    $event_date = get_post_meta(get_the_ID(), '_gs_event_date', true);
                    $month_year = date('F Y', strtotime($event_date));
                    
                    if (!isset($events_by_month[$month_year])) {
                        $events_by_month[$month_year] = array();
                    }
                    
                    $events_by_month[$month_year][] = array(
                        'title' => get_the_title(),
                        'date' => $event_date,
                        'details' => get_post_meta(get_the_ID(), '_gs_event_details', true)
                    );
                endwhile;
                ?>
                
                <!-- Loop through each month -->
                <?php foreach ($events_by_month as $month_year => $events) : ?>
                    <div class="mb-8 last:mb-0">
                        <!-- Month Heading -->
                        <h3 class="text-2xl font-title font-semibold text-primary mb-4">
                            <?php echo esc_html($month_year); ?>
                        </h3>
                        
                        <!-- Events for this month -->
                        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                            <?php 
                            $event_count = count($events);
                            $current = 0;
                            foreach ($events as $event) : 
                                $current++;
                                $is_last = ($current === $event_count);
                                
                                // Format the date
                                $formatted_date = date('F j, Y', strtotime($event['date']));
                                $day_of_week = date('l', strtotime($event['date']));
                            ?>
                                <div class="flex items-center justify-between px-4 md:px-6 py-4 hover:bg-gray-50 transition-colors <?php echo !$is_last ? 'border-b border-gray-200' : ''; ?>">
                                    <!-- Event Info -->
                                    <div class="flex-1">
                                        <div class="flex items-center gap-4">
                                            <div>
                                                <h4 class="font-semibold text-primary">
                                                    <?php echo esc_html($event['title']); ?>
                                                </h4>
                                                <?php if (!empty($event['details'])) : ?>
                                                    <p class="text-sm text-muted hidden sm:block">
                                                        <?php echo esc_html($event['details']); ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Date and Day -->
                                    <div class="text-right ml-4">
                                        <div class="text-sm font-medium text-primary">
                                            <?php echo esc_html($day_of_week); ?>
                                        </div>
                                        <div class="text-sm text-muted">
                                            <?php echo esc_html($formatted_date); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <!-- No Events Message -->
                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                    <div class="text-center py-12 px-6">
                        <svg class="w-16 h-16 text-muted/50 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        <p class="text-muted text-base">No upcoming events at this time.</p>
                        <p class="text-muted/70 text-sm mt-2">Check back soon for new events!</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <?php wp_reset_postdata(); ?>

    </div>
</section>
