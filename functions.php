<?php
declare(strict_types=1);

function vs_setup(): void {
    load_theme_textdomain('vs', get_theme_file_path('languages'));
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_theme_support('custom-logo', [
        'height' => 80,
        'width' => 80,
        'flex-height' => true,
        'flex-width' => true,
    ]);
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'vs_setup');

function vs_enqueue_assets(): void {
    $uri = get_theme_file_uri();
    $dir = get_theme_file_path();
    wp_enqueue_style('vs-fonts', $uri . '/assets/css/fonts.css', [], filemtime($dir . '/assets/css/fonts.css'));
    wp_enqueue_style('vs-style', get_stylesheet_uri(), ['vs-fonts'], filemtime($dir . '/style.css'));
    wp_enqueue_script('vs-script', $uri . '/assets/js/theme.js', [], filemtime($dir . '/assets/js/theme.js'), true);
}
add_action('wp_enqueue_scripts', 'vs_enqueue_assets');
add_action('enqueue_block_editor_assets', 'vs_enqueue_assets');

function vs_register_patterns(): void {
    register_block_pattern_category('vs', [
        'label' => __('Vertex Solutions', 'vs'),
    ]);
}
add_action('init', 'vs_register_patterns');
