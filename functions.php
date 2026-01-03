<?php
add_action('after_setup_theme', 'rusch_park_setup');

// Prevent loading of remote block patterns. 
add_filter('should_load_remote_block_patterns', false);

function rusch_park_setup()
{
    add_theme_support(
        'post-formats',
        array(
            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        )
    );
    // Only allow theme-specific block patterns
    remove_theme_support('core-block-patterns');
}
