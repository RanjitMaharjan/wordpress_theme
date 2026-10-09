<?php
/**
 * Title: VS — About Section
 * Slug: vs/section-about
 * Categories: vs
 * Description: Editable About section with native Gutenberg blocks for the tab labels and content.
 */
?>

<!-- wp:group {"anchor":"about","align":"full","backgroundColor":"border","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"layout":{"type":"constrained"}} -->
<div id="about" class="wp-block-group alignfull has-border-background-color has-background" style="padding-top:5rem;padding-bottom:5rem">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"4rem"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"42%"} -->
        <div class="wp-block-column" style="flex-basis:42%">
            <!-- wp:paragraph {"backgroundColor":"navy","textColor":"white","fontSize":"x-small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"},"spacing":{"padding":{"top":"0.35rem","bottom":"0.35rem","left":"0.75rem","right":"0.75rem"}}}} -->
            <p class="has-white-color has-navy-background-color has-text-color has-background has-x-small-font-size" style="letter-spacing:0.1em;font-weight:700;padding-top:0.35rem;padding-right:0.75rem;padding-bottom:0.35rem;padding-left:0.75rem;text-transform:uppercase">About VERTEX</p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"level":2,"fontSize":"xx-large","textColor":"navy"} -->
            <h2 class="wp-block-heading has-navy-color has-text-color has-xx-large-font-size">Engineered for Uncompromising Efficiency</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
            <p class="has-muted-color has-text-color has-small-font-size">Founded in 2018, VERTEX Solutions eliminated the fluff from traditional corporate IT consulting. We adhere to clear, flat principles: clean architecture, radical transparency, and measurable results.</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
            <p class="has-muted-color has-text-color has-small-font-size">Our team consists of senior engineers, cloud architects, and industry strategists dedicated to delivering resilient infrastructure without unnecessary complexity.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"58%"} -->
        <div class="wp-block-column" style="flex-basis:58%">
            <!-- wp:group {"className":"vertex-flat-card vs-about-tabs","backgroundColor":"white","style":{"spacing":{"padding":"2rem"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group vertex-flat-card vs-about-tabs has-white-background-color has-background" style="padding:2rem">
                <!-- wp:buttons {"className":"vs-tabs__list","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
                <div class="wp-block-buttons vs-tabs__list">
                    <!-- wp:button {"className":"vs-tabs__button is-active","url":"#vs-panel-mission"} -->
                    <div class="wp-block-button vs-tabs__button is-active"><a class="wp-block-button__link wp-element-button" href="#vs-panel-mission">Innovation </a></div>
                    <!-- /wp:button -->
                    <!-- wp:button {"className":"vs-tabs__button","url":"#vs-panel-vision"} -->
                    <div class="wp-block-button vs-tabs__button"><a class="wp-block-button__link wp-element-button" href="#vs-panel-vision">Secuity</a></div>
                    <!-- /wp:button -->
                    <!-- wp:button {"className":"vs-tabs__button","url":"#vs-panel-values"} -->
                    <div class="wp-block-button vs-tabs__button"><a class="wp-block-button__link wp-element-button" href="#vs-panel-values">Scalability</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->

                <!-- wp:group {"anchor":"vs-panel-mission","className":"vs-tabs__panel is-active","layout":{"type":"constrained"}} -->
                <div id="vs-panel-mission" class="wp-block-group vs-tabs__panel is-active">
                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Continuous Innovation Pipelines</h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p>We integrate modern CI/CD automation, AI-driven insights, and state-of-the-art tech stacks to ensure your enterprise continuously outpaces competitors.</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:list -->
                    <ul class="wp-block-list"><li>Automated Software Delivery Workflows</li><li>Cutting-Edge Machine Learning Integration</li><li>Modern Microservices Frameworks</li></ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"anchor":"vs-panel-vision","className":"vs-tabs__panel","layout":{"type":"constrained"}} -->
                <div id="vs-panel-vision" class="wp-block-group vs-tabs__panel">
                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Our Vision</h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p>To help businesses grow with reliable, thoughtful, and scalable technology that makes everyday work simpler.</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:list -->
                    <ul class="wp-block-list"><li>Build for long-term growth.</li><li>Make complex systems easier to use.</li><li>Keep performance and reliability at the center.</li></ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"anchor":"vs-panel-values","className":"vs-tabs__panel","layout":{"type":"constrained"}} -->
                <div id="vs-panel-values" class="wp-block-group vs-tabs__panel">
                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Our Values</h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p>We believe in clear communication, dependable delivery, and practical solutions that create measurable results.</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:list -->
                    <ul class="wp-block-list"><li>Radical transparency.</li><li>Security by design.</li><li>Continuous improvement.</li></ul>
                    <!-- /wp:list -->
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
