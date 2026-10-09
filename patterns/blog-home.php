<?php
/** Title: Blog Home
 * Slug: vs/blog-home
 * Categories: vs
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"main","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}}} -->
<main class="wp-block-group" style="padding-top:4rem;padding-bottom:4rem">
<!-- wp:heading {"fontSize":"xx-large"} --><h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__('Latest Posts', 'vs'); ?></h1><!-- /wp:heading -->
<!-- wp:query {"query":{"perPage":10,"inherit":true},"displayLayout":{"type":"grid","columns":2}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true} /-->
<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
<!-- wp:post-date {"fontSize":"small","textColor":"muted"} /-->
<!-- wp:post-excerpt {"fontSize":"small"} /-->
<!-- /wp:post-template --><!-- wp:query-pagination /--></div>
<!-- /wp:query -->
</main>
<!-- /wp:group -->
