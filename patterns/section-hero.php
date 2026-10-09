<?php
/**
 * Title: VS — Hero Section
 * Slug: vs/section-hero
 * Categories: vs
 * Description: Reusable hero section from the Vertex Solutions homepage.
 */
?>

<!-- wp:group {"anchor":"home","align":"wide","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"layout":{"type":"grid","minimumColumnWidth":"300px","verticalAlignment":"center"}} -->
    <div id="home" class="wp-block-group alignwide" style="padding-top:5rem;padding-bottom:5rem">
    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
        <div class="wp-block-group">
        <!-- wp:paragraph {"backgroundColor":"teal-accent","textColor":"white","fontSize":"x-small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.12em"},"spacing":{"padding":{"top":"0.35rem","bottom":"0.35rem","left":"0.75rem","right":"0.75rem"}}}} -->
            <p class="has-white-color has-teal-accent-background-color has-text-color has-background has-x-small-font-size" style="letter-spacing:0.12em;font-weight:700;padding-top:0.35rem;padding-right:0.75rem;padding-bottom:0.35rem;padding-left:0.75rem;text-transform:uppercase"><?php echo esc_html__('Empowering Enterprise Scale', 'vs'); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:heading {"level":1,"fontSize":"display","textColor":"navy"} -->
            <h1 class="wp-block-heading has-navy-color has-text-color has-display-font-size"><?php echo esc_html__('Empowering Business Growth through Modern Tech & Strategy.', 'vs'); ?></h1>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"fontSize":"large","textColor":"muted"} -->
            <p class="has-muted-color has-text-color has-large-font-size"><?php echo esc_html__('VERTEX Solutions delivers flat-out efficiency. We architect scalable cloud infrastructure, optimize digital operations, and equip forward-thinking companies with actionable strategic insights.', 'vs'); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:buttons -->
            <div class="wp-block-buttons">
            <!-- wp:button {"className":"vertex-button","backgroundColor":"flat-blue","textColor":"white"} -->
                <div class="wp-block-button vertex-button"><a class="wp-block-button__link has-white-color has-flat-blue-background-color has-text-color has-background wp-element-button" href="#services"><?php echo esc_html__('Explore Services', 'vs'); ?></a></div>
            <!-- /wp:button -->
            <!-- wp:button {"className":"vertex-button is-style-outline","textColor":"navy","borderColor":"navy"} -->
                <div class="wp-block-button vertex-button is-style-outline"><a class="wp-block-button__link has-navy-color has-text-color has-border-color has-navy-border-color wp-element-button" href="#contact"><?php echo esc_html__('Schedule Demo', 'vs'); ?></a></div>
            <!-- /wp:button -->
            </div>
        <!-- /wp:buttons -->
        </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"vertex-flat-card","style":{"spacing":{"padding":"2rem"}},"backgroundColor":"white","layout":{"type":"grid","columnCount":2}} -->
        <div class="wp-block-group vertex-flat-card has-white-background-color has-background" style="padding:2rem">
        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"},"style":{"spacing":{"padding":"1rem"}}} -->
            <div class="wp-block-group" style="padding:1rem">
            <!-- wp:paragraph {"fontSize":"xx-large","textColor":"flat-blue","className":"vertex-stat-number","style":{"typography":{"fontWeight":"800"}}} -->
                <p class="vertex-stat-number has-flat-blue-color has-text-color has-xx-large-font-size" style="font-weight:800"><?php echo esc_html__('+148%', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"fontSize":"x-small","textColor":"muted","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
                <p class="has-muted-color has-text-color has-x-small-font-size" style="letter-spacing:0.08em;font-weight:700;text-transform:uppercase"><?php echo esc_html__('Growth Metric', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            </div>
        <!-- /wp:group -->
        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"},"style":{"spacing":{"padding":"1rem"}}} -->
            <div class="wp-block-group" style="padding:1rem">
            <!-- wp:paragraph {"fontSize":"xx-large","textColor":"teal-accent","className":"vertex-stat-number","style":{"typography":{"fontWeight":"800"}}} -->
                <p class="vertex-stat-number has-teal-accent-color has-text-color has-xx-large-font-size" style="font-weight:800"><?php echo esc_html__('100%', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"fontSize":"x-small","textColor":"muted","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
                <p class="has-muted-color has-text-color has-x-small-font-size" style="letter-spacing:0.08em;font-weight:700;text-transform:uppercase"><?php echo esc_html__('Cloud Native', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            </div>
        <!-- /wp:group -->
        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"},"style":{"spacing":{"padding":"1rem"}}} -->
            <div class="wp-block-group" style="padding:1rem">
            <!-- wp:paragraph {"fontSize":"xx-large","textColor":"coral-accent","className":"vertex-stat-number","style":{"typography":{"fontWeight":"800"}}} -->
                <p class="vertex-stat-number has-coral-accent-color has-text-color has-xx-large-font-size" style="font-weight:800"><?php echo esc_html__('Zero', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"fontSize":"x-small","textColor":"muted","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
                <p class="has-muted-color has-text-color has-x-small-font-size" style="letter-spacing:0.08em;font-weight:700;text-transform:uppercase"><?php echo esc_html__('Downtime', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            </div>
        <!-- /wp:group -->
        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"},"style":{"spacing":{"padding":"1rem"}}} -->
            <div class="wp-block-group" style="padding:1rem">
            <!-- wp:paragraph {"fontSize":"xx-large","textColor":"navy","className":"vertex-stat-number","style":{"typography":{"fontWeight":"800"}}} -->
                <p class="vertex-stat-number has-navy-color has-text-color has-xx-large-font-size" style="font-weight:800"><?php echo esc_html__('2.4x', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"fontSize":"x-small","textColor":"muted","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
                <p class="has-muted-color has-text-color has-x-small-font-size" style="letter-spacing:0.08em;font-weight:700;text-transform:uppercase"><?php echo esc_html__('Speed Ratio', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            </div>
        <!-- /wp:group -->
        </div>
    <!-- /wp:group -->
    </div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","backgroundColor":"navy","textColor":"white","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-navy-background-color has-white-color has-text-color has-background" style="padding-top:1.5rem;padding-bottom:1.5rem">
    <!-- wp:paragraph {"align":"center","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
        <p class="has-text-align-center has-small-font-size" style="letter-spacing:0.1em;font-weight:700;text-transform:uppercase"><?php echo esc_html__('Clean Architecture · Radical Transparency · Measurable Results', 'vs'); ?></p>
    <!-- /wp:paragraph -->
    </div>
<!-- /wp:group -->
