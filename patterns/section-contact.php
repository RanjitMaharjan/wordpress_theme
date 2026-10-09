<?php
/**
 * Title: VS — Contact Section
 * Slug: vs/section-contact
 * Categories: vs
 * Description: Reusable contact section from the Vertex Solutions homepage.
 */
?>

<!-- wp:group {"anchor":"contact","align":"wide","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"layout":{"type":"constrained"}} -->
    <div id="contact" class="wp-block-group alignwide" style="padding-top:5rem;padding-bottom:5rem">
    <!-- wp:columns -->
        <div class="wp-block-columns">
        <!-- wp:column {"width":"55%"} -->
            <div class="wp-block-column" style="flex-basis:55%">
            <!-- wp:paragraph {"backgroundColor":"teal-accent","textColor":"white","fontSize":"x-small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"},"spacing":{"padding":{"top":"0.35rem","bottom":"0.35rem","left":"0.75rem","right":"0.75rem"}}}} -->
                <p class="has-white-color has-teal-accent-background-color has-text-color has-background has-x-small-font-size" style="letter-spacing:0.1em;font-weight:700;padding-top:0.35rem;padding-right:0.75rem;padding-bottom:0.35rem;padding-left:0.75rem;text-transform:uppercase"><?php echo esc_html__('Connect With Us', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"level":2,"fontSize":"xx-large","textColor":"navy"} -->
                <h2 class="wp-block-heading has-navy-color has-text-color has-xx-large-font-size"><?php echo esc_html__('Ready to Accelerate Your Strategy?', 'vs'); ?></h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
                <p class="has-muted-color has-text-color has-large-font-size"><?php echo esc_html__('Fill out the interactive form to estimate your project parameters or get in touch directly with our team. We respond within 2 business hours.', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"fontSize":"small","textColor":"muted"} -->
                <p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__('Form integration: install Contact Form 7 and insert its Shortcode block here. The block remains fully editable in the Site Editor.', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"45%","className":"vertex-flat-card","style":{"spacing":{"padding":"2rem"}},"backgroundColor":"white"} -->
            <div class="wp-block-column vertex-flat-card has-white-background-color has-background" style="padding:2rem;flex-basis:45%">
            <!-- wp:heading {"level":3,"textColor":"navy","fontSize":"x-large"} -->
                <h3 class="wp-block-heading has-navy-color has-text-color has-x-large-font-size"><?php echo esc_html__('Project Hours', 'vs'); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
                <p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__('Use this editable area for your form, project estimator, phone number, email address, office address, or other contact information.', 'vs'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:columns -->
                <div class="wp-block-columns">
                <!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":4,"textColor":"flat-blue"} --><h4 class="wp-block-heading has-flat-blue-color has-text-color"><?php echo esc_html__('10 hrs', 'vs'); ?></h4><!-- /wp:heading --><p><?php echo esc_html__('Discovery', 'vs'); ?></p></div><!-- /wp:column -->
                    <!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":4,"textColor":"teal-accent"} --><h4 class="wp-block-heading has-teal-accent-color has-text-color"><?php echo esc_html__('50 hrs', 'vs'); ?></h4><!-- /wp:heading --><p><?php echo esc_html__('Strategy', 'vs'); ?></p></div><!-- /wp:column -->
                        <!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":4,"textColor":"coral-accent"} --><h4 class="wp-block-heading has-coral-accent-color has-text-color"><?php echo esc_html__('200 hrs', 'vs'); ?></h4><!-- /wp:heading --><p><?php echo esc_html__('Delivery', 'vs'); ?></p></div><!-- /wp:column -->
                            </div>
                        <!-- /wp:columns -->
                        </div>
                    <!-- /wp:column -->
                    </div>
                <!-- /wp:columns -->
                </div>
            <!-- /wp:group -->
