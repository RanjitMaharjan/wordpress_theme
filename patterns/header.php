<?php
/**
 * Title: Header
 * Slug: vs/header
 * Categories: vs
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"header","align":"full","style":{"position":{"type":"sticky","top":"0px"},"border":{"bottom":{"color":"var:preset|color|border","width":"2px"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull has-white-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:2px;position:sticky;top:0px">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="padding-top:1rem;padding-bottom:1rem">
<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group">
<!-- wp:site-logo {"width":40,"shouldSyncIcon":false} /-->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:site-title {"level":0,"fontSize":"large","style":{"typography":{"fontWeight":"800","textTransform":"uppercase","letterSpacing":"-0.02em"}},"textColor":"navy"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"1.5rem"}},"ariaLabel":"Main navigation"} /-->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"vertex-button","backgroundColor":"flat-blue","textColor":"white","fontSize":"x-small"} -->
<div class="wp-block-button vertex-button"><a class="wp-block-button__link has-white-color has-flat-blue-background-color has-text-color has-background has-x-small-font-size wp-element-button"><?php echo esc_html__('Get Started', 'vs'); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</header>
<!-- /wp:group -->
