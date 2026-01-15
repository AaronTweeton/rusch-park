<?php

/**
 * Title: News grid
 * Description: The news grid displays posts in a grid layout.
 * Slug: rusch-park/news-grid
 * Categories: featured, posts
 * Keywords: news, grid, posts, cards
 */

?>

<!-- wp:paragraph -->
<p>News Grid Pattern Placeholder</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"15rem"}} -->
    <!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"cyan-bluish-gray","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-cyan-bluish-gray-border-color" style="border-width:1px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"isUserOverlayColor":true,"contentPosition":"top left","isDark":false,"style":{"dimensions":{"aspectRatio":"3/2"},"spacing":{"padding":{"left":"0"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"black","textColor":"white","fontFamily":"secondary","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-white-color has-black-background-color has-text-color has-background has-link-color has-secondary-font-family" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-date {"format":null,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /--></div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph -->
                <p>By</p>
                <!-- /wp:paragraph -->

                <!-- wp:post-author-name /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-title /-->

            <!-- wp:post-excerpt {"excerptLength":20} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->

    <!-- wp:query-pagination {"paginationArrow":"chevron","fontFamily":"secondary"} -->
    <!-- wp:query-pagination-previous /-->

    <!-- wp:query-pagination-numbers /-->

    <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
    <p></p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->