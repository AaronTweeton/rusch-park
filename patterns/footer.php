<?php

/**
 * Title: Footer
 * Description: The footer is a structural component that puts the standard footer at the very bottom of your site.
 * Slug: rusch-park/footer
 * Categories: footer
 * Keywords: footer
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:site-logo /-->

            <!-- wp:navigation {"overlayMenu":"never"} -->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Conditions of use', 'rusch-park'); ?>","url":"#"} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Privacy policy', 'rusch-park'); ?>","url":"#"} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Accessibility', 'rusch-park'); ?>","url":"#"} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Contact us', 'rusch-park'); ?>","url":"#"} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('About', 'rusch-park'); ?>","url":"#"} /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
        <div class="wp-block-group"><!-- wp:social-links {"layout":{"type":"flex","justifyContent":"right"}} -->
            <ul class="wp-block-social-links"><!-- wp:social-link {"url":"https://github.com","service":"github"} /--></ul>
            <!-- /wp:social-links -->

            <!-- wp:paragraph {"align":"right"} -->
            <p class="has-text-align-right">Copyright &copy; <?php echo date('Y'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->