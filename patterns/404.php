<?php
/** Title: 404 Page Content
 * Slug: vs/404-content
 * Categories: vs
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"main","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem"}}}} -->
<main class="wp-block-group" style="padding-top:7rem;padding-bottom:7rem">
<!-- wp:paragraph {"align":"center","textColor":"flat-blue","fontSize":"display","style":{"typography":{"fontWeight":"800"}}} --><p class="has-text-align-center has-flat-blue-color has-text-color has-display-font-size" style="font-weight:800">404</p><!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} --><h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__('Page Not Found', 'vs'); ?></h1><!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","textColor":"muted"} --><p class="has-text-align-center has-muted-color has-text-color"><?php echo esc_html__('The page you requested could not be found. Use the navigation or search to continue.', 'vs'); ?></p><!-- /wp:paragraph -->
<!-- wp:search {"showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","align":"center"} /-->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"flat-blue","textColor":"white"} --><div class="wp-block-button"><a class="wp-block-button__link has-white-color has-flat-blue-background-color has-text-color has-background wp-element-button" href="/"><?php echo esc_html__('Back to Home', 'vs'); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
</main>
<!-- /wp:group -->
