<?php
/** Title: Archive Content
 * Slug: vs/archive-content
 * Categories: vs
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"main","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}}} -->
<main class="wp-block-group" style="padding-top:4rem;padding-bottom:4rem">
<!-- wp:query-title {"type":"archive","fontSize":"xx-large"} /-->
<!-- wp:query {"query":{"perPage":10,"inherit":true},"displayLayout":{"type":"list"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
<!-- wp:post-date {"fontSize":"small","textColor":"muted"} /-->
<!-- wp:post-excerpt {"fontSize":"small","moreText":"Read More"} /-->
<!-- wp:separator /-->
<!-- /wp:post-template --><!-- wp:query-pagination /--></div>
<!-- /wp:query -->
</main>
<!-- /wp:group -->
