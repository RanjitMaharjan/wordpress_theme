<?php
/**
 * Title: VS — Testimonials Section
 * Slug: vs/section-testimonials
 * Categories: vs
 * Description: Editable testimonials section with client reviews and profile details.
 */
?>

<!-- wp:group {"align":"full","className":"vs-testimonials","backgroundColor":"navy","textColor":"white","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vs-testimonials has-navy-background-color has-white-color has-text-color has-background" style="padding-top:4rem;padding-bottom:4rem">

    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">

        <!-- wp:paragraph {"align":"center","textColor":"coral-accent","fontSize":"x-small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.12em"}}} -->
        <p class="has-text-align-center has-coral-accent-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Client Reviews</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":2,"textColor":"white","fontSize":"xx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-xx-large-font-size">Trusted by Industry Leaders</h2>
        <!-- /wp:heading -->

    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2rem"}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"className":"vs-testimonial-card vs-testimonial-card-blue","backgroundColor":"white","textColor":"navy","style":{"border":{"top":{"color":"var:preset|color|flat-blue","width":"4px"}},"spacing":{"padding":{"top":"1.5rem","right":"1.5rem","bottom":"1.5rem","left":"1.5rem"}}}} -->
        <div class="wp-block-column vs-testimonial-card vs-testimonial-card-blue has-navy-color has-white-background-color has-text-color has-background" style="border-top-color:var(--wp--preset--color--flat-blue);border-top-width:4px;padding:1.5rem">
            <!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size">“VERTEX transformed our monolithic legacy backend into a streamlined cloud framework in under 90 days. Exceptional execution and zero downtime throughout.”</p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"className":"vs-testimonial-profile","style":{"spacing":{"margin":{"top":"1.5rem"},"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
            <div class="wp-block-group vs-testimonial-profile" style="margin-top:1.5rem">
                <!-- wp:group {"className":"vs-testimonial-avatar","backgroundColor":"border","layout":{"type":"constrained"}} -->
                <div class="wp-block-group vs-testimonial-avatar has-border-background-color has-background"><!-- wp:paragraph {"align":"center","textColor":"navy","fontSize":"small"} --><p class="has-text-align-center has-navy-color has-text-color has-small-font-size">MV</p><!-- /wp:paragraph --></div>
                <!-- /wp:group -->
                <!-- wp:group {"className":"vs-testimonial-details","layout":{"type":"constrained"}} -->
                <div class="wp-block-group vs-testimonial-details">
                    <!-- wp:paragraph {"fontSize":"medium","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"0"}}}} -->
                    <p class="has-medium-font-size" style="margin-bottom:0;font-weight:700">Marcus Vance</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
                    <p class="has-muted-color has-text-color has-small-font-size">CTO, FinTech Global</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"vs-testimonial-card vs-testimonial-card-teal","backgroundColor":"white","textColor":"navy","style":{"border":{"top":{"color":"var:preset|color|teal-accent","width":"4px"}},"spacing":{"padding":{"top":"1.5rem","right":"1.5rem","bottom":"1.5rem","left":"1.5rem"}}}} -->
        <div class="wp-block-column vs-testimonial-card vs-testimonial-card-teal has-navy-color has-white-background-color has-text-color has-background" style="border-top-color:var(--wp--preset--color--teal-accent);border-top-width:4px;padding:1.5rem">
            <!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size">“The flat, direct methodology of VERTEX meant no corporate fluff. We received clear deadlines, robust code, and immediate ROI on our infrastructure spend.”</p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"className":"vs-testimonial-profile","style":{"spacing":{"margin":{"top":"1.5rem"},"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
            <div class="wp-block-group vs-testimonial-profile" style="margin-top:1.5rem">
                <!-- wp:group {"className":"vs-testimonial-avatar","backgroundColor":"border","layout":{"type":"constrained"}} -->
                <div class="wp-block-group vs-testimonial-avatar has-border-background-color has-background"><!-- wp:paragraph {"align":"center","textColor":"navy","fontSize":"small"} --><p class="has-text-align-center has-navy-color has-text-color has-small-font-size">SL</p><!-- /wp:paragraph --></div>
                <!-- /wp:group -->
                <!-- wp:group {"className":"vs-testimonial-details","layout":{"type":"constrained"}} -->
                <div class="wp-block-group vs-testimonial-details">
                    <!-- wp:paragraph {"fontSize":"medium","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"0"}}}} -->
                    <p class="has-medium-font-size" style="margin-bottom:0;font-weight:700">Sarah Lin</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
                    <p class="has-muted-color has-text-color has-small-font-size">VP Operations, Apex Health</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"vs-testimonial-card vs-testimonial-card-coral","backgroundColor":"white","textColor":"navy","style":{"border":{"top":{"color":"var:preset|color|coral-accent","width":"4px"}},"spacing":{"padding":{"top":"1.5rem","right":"1.5rem","bottom":"1.5rem","left":"1.5rem"}}}} -->
        <div class="wp-block-column vs-testimonial-card vs-testimonial-card-coral has-navy-color has-white-background-color has-text-color has-background" style="border-top-color:var(--wp--preset--color--coral-accent);border-top-width:4px;padding:1.5rem">
            <!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size">“Strategic guidance from the VERTEX team enabled us to scale active users by 300% without scaling our monthly cloud spend. Unbelievable expertise.”</p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"className":"vs-testimonial-profile","style":{"spacing":{"margin":{"top":"1.5rem"},"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
            <div class="wp-block-group vs-testimonial-profile" style="margin-top:1.5rem">
                <!-- wp:group {"className":"vs-testimonial-avatar","backgroundColor":"border","layout":{"type":"constrained"}} -->
                <div class="wp-block-group vs-testimonial-avatar has-border-background-color has-background"><!-- wp:paragraph {"align":"center","textColor":"navy","fontSize":"small"} --><p class="has-text-align-center has-navy-color has-text-color has-small-font-size">DR</p><!-- /wp:paragraph --></div>
                <!-- /wp:group -->
                <!-- wp:group {"className":"vs-testimonial-details","layout":{"type":"constrained"}} -->
                <div class="wp-block-group vs-testimonial-details">
                    <!-- wp:paragraph {"fontSize":"medium","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"0"}}}} -->
                    <p class="has-medium-font-size" style="margin-bottom:0;font-weight:700">David Rossi</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
                    <p class="has-muted-color has-text-color has-small-font-size">Founder, Logistics One</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
