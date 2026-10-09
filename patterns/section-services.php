<?php
/**
 * Title: VS — Services Section
 * Slug: vs/section-services
 * Categories: vs
 * Description: Reusable services section from the Vertex Solutions homepage.
 */
?>

<!-- wp:group {"anchor":"services","align":"wide","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}}} -->
    <div id="services" class="wp-block-group alignwide" style="padding-top:5rem;padding-bottom:5rem">
    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"},"style":{"spacing":{"margin":{"bottom":"3rem"}}}} -->
        <div class="wp-block-group" style="margin-bottom:3rem">
        <!-- wp:paragraph {"align":"center","textColor":"flat-blue","fontSize":"x-small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.12em"}}} -->
            <p class="has-text-align-center has-flat-blue-color has-text-color has-x-small-font-size" style="letter-spacing:0.12em;font-weight:700;text-transform:uppercase"><?php echo esc_html__('Our Core Offerings', 'vs'); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:heading {"level":2,"align":"center","textColor":"navy","fontSize":"xx-large"} -->
            <h2 class="wp-block-heading has-text-align-center has-navy-color has-text-color has-xx-large-font-size"><?php echo esc_html__('High-Impact Business Solutions', 'vs'); ?></h2>
        <!-- /wp:heading -->
        </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"2rem"}}}} -->
        <div class="wp-block-columns">
        <!-- wp:column {"className":"vertex-flat-card","style":{"spacing":{"padding":"2rem"}}} -->
            <div class="wp-block-column vertex-flat-card" style="padding:2rem">
            <!-- wp:paragraph {"backgroundColor":"flat-blue","textColor":"white","className":"vertex-icon-box","style":{"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
                <p class="vertex-icon-box has-white-color has-flat-blue-background-color has-text-color has-background" style="margin-bottom:1.5rem">01</p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"level":3,"fontSize":"x-large","textColor":"navy"} -->
                <h3 class="wp-block-heading has-navy-color has-text-color has-x-large-font-size"><?php echo esc_html__('Digital Transformation', 'vs'); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"fontSize":"small","textColor":"muted"} -->
                <p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__('Re-engineer legacy enterprise systems into agile, high-performance digital workflows engineered for speed and precision.', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"className":"vertex-link","textColor":"flat-blue"} -->
                <p class="vertex-link has-flat-blue-color has-text-color"><a href="#contact"><?php echo esc_html__('Learn More →', 'vs'); ?></a></p>
            <!-- /wp:paragraph -->
            </div>
        <!-- /wp:column -->
        <!-- wp:column {"className":"vertex-flat-card","style":{"spacing":{"padding":"2rem"}}} -->
            <div class="wp-block-column vertex-flat-card" style="padding:2rem">
            <!-- wp:paragraph {"backgroundColor":"teal-accent","textColor":"white","className":"vertex-icon-box","style":{"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
                <p class="vertex-icon-box has-white-color has-teal-accent-background-color has-text-color has-background" style="margin-bottom:1.5rem">02</p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"level":3,"fontSize":"x-large","textColor":"navy"} -->
                <h3 class="wp-block-heading has-navy-color has-text-color has-x-large-font-size"><?php echo esc_html__('Cloud Architecture', 'vs'); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"fontSize":"small","textColor":"muted"} -->
                <p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__('Design resilient, multi-cloud enterprise ecosystems with automated scaling, strict governance, and zero operational bottlenecks.', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"className":"vertex-link","textColor":"teal-accent"} -->
                <p class="vertex-link has-teal-accent-color has-text-color"><a href="#contact"><?php echo esc_html__('Learn More →', 'vs'); ?></a></p>
            <!-- /wp:paragraph -->
            </div>
        <!-- /wp:column -->
        <!-- wp:column {"className":"vertex-flat-card","style":{"spacing":{"padding":"2rem"}}} -->
            <div class="wp-block-column vertex-flat-card" style="padding:2rem">
            <!-- wp:paragraph {"backgroundColor":"coral-accent","textColor":"white","className":"vertex-icon-box","style":{"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
                <p class="vertex-icon-box has-white-color has-coral-accent-background-color has-text-color has-background" style="margin-bottom:1.5rem">03</p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"level":3,"fontSize":"x-large","textColor":"navy"} -->
                <h3 class="wp-block-heading has-navy-color has-text-color has-x-large-font-size"><?php echo esc_html__('Strategic Consulting', 'vs'); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"fontSize":"small","textColor":"muted"} -->
                <p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__('Data-backed strategy development to position your enterprise at the forefront of market innovation and technological trends.', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"className":"vertex-link","textColor":"coral-accent"} -->
                <p class="vertex-link has-coral-accent-color has-text-color"><a href="#contact"><?php echo esc_html__('Learn More →', 'vs'); ?></a></p>
            <!-- /wp:paragraph -->
            </div>
        <!-- /wp:column -->
        </div>
    <!-- /wp:columns -->
    </div>
<!-- /wp:group -->
