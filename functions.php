<?php
add_action('after_setup_theme', 'rusch_park_setup');

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
}
