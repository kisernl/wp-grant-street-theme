<?php get_header(); ?>

<div class="bg-gs-off-white/50">
    <div class="content-section md:px-8 pb-16 rounded-b-xl">
        <?php get_template_part('template-parts/gs-connect-hero'); ?>
    </div>

    <!-- Title Card -->
<section class="py-12 bg-white">
    <div class="container mx-auto">
        <div class="max-w-6xl mx-auto">

                
                <!-- Content Overlay -->
                <div class="relative z-10 py-16 px-8 text-center">
                    <h1 class="text-4xl md:text-gxl font-title font-bold text-gs-dark-green mb-6">
                        Ways to Connect
                    </h1>
                    
                    <p class="text-xl text-muted leading-relaxed text-gs-dark-green font-body mb-8">We believe everyone needs a place to belong. Whether you're looking for deep Bible study, want to serve others, or seeking community for your family, there's a place for you here.</p>
                    
                </div>
        </div>
    </div>
</section>

    <div class="bg-white pb-36">
        <?php get_template_part('template-parts/gs-connect-blocks'); ?>
    </div>
    <div class="">
        <?php get_template_part('template-parts/gs-connect-cta'); ?>
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>