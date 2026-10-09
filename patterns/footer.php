<?php
/**
 * Title: Footer
 * Slug: vs/footer
 * Categories: vs
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"navy","textColor":"white","style":{"border":{"top":{"color":"var:preset|color|navy","width":"4px"}},"spacing":{"padding":{"top":"3rem","bottom":"1.5rem"}}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-navy-background-color has-white-color has-text-color has-background" style="border-top-color:var(--wp--preset--color--navy);border-top-width:4px;padding-top:3rem;padding-bottom:1.5rem">
<!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"220px"},"style":{"spacing":{"blockGap":"2rem","margin":{"bottom":"3rem"}}}} -->
<div class="wp-block-group alignwide" style="margin-bottom:3rem">
<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group">
<!-- wp:site-logo {"width":32} /-->
<!-- wp:site-title {"level":0,"fontSize":"large","style":{"typography":{"fontWeight":"800","textTransform":"uppercase"}},"textColor":"white"} /-->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"fontSize":"x-small","textColor":"muted-dark"} -->
<p class="has-muted-dark-color has-text-color has-x-small-font-size"><?php echo esc_html__('Flat, minimalist business consulting and enterprise architecture solutions engineered for speed, stability, and scale.', 'vs'); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"fontSize":"x-small","textColor":"flat-blue","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h4 class="wp-block-heading has-flat-blue-color has-text-color has-x-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__('Company', 'vs'); ?></h4>
<!-- /wp:heading -->
<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0.5rem"}},"textColor":"muted-dark","fontSize":"x-small","ariaLabel":"Footer company navigation"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"fontSize":"x-small","textColor":"teal-accent","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h4 class="wp-block-heading has-teal-accent-color has-text-color has-x-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__('Connect', 'vs'); ?></h4>
<!-- /wp:heading -->
<!-- wp:social-links {"iconColor":"white","iconColorValue":"#FFFFFF","size":"has-small-icon-size","openInNewTab":true,"className":"is-style-logos-only"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"fontSize":"x-small","textColor":"coral-accent","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h4 class="wp-block-heading has-coral-accent-color has-text-color has-x-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__('Subscribe to Flat Insights', 'vs'); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"x-small","textColor":"muted-dark"} -->
<p class="has-muted-dark-color has-text-color has-x-small-font-size"><?php echo esc_html__('Add your newsletter or Contact Form 7 shortcode here using the Site Editor.', 'vs'); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"muted-dark","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-muted-dark-color has-alpha-channel-opacity has-muted-dark-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-group alignwide">
<!-- wp:paragraph {"fontSize":"x-small","textColor":"muted-dark"} -->
<p class="has-muted-dark-color has-text-color has-x-small-font-size">© <?php echo esc_html(gmdate('Y')); ?> <strong><?php echo esc_html(get_bloginfo('name')); ?></strong>. <?php echo esc_html__('All rights reserved.', 'vs'); ?></p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex"},"style":{"spacing":{"blockGap":"1rem"}},"fontSize":"x-small","ariaLabel":"Legal navigation"} /-->
</div>
<!-- /wp:group -->
</footer>
<!-- /wp:group -->
