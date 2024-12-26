<?php

/**
 * wp_headのカスタマイズ
 */

// RSSフィードのURL
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

// 絵文字
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles', 10);

function remove_editor_style()
{
    wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'remove_editor_style');

// REST APIのURL表示
remove_action('wp_head', 'rest_output_link_wp_head');

// 外部ブログツールからの投稿を受け入れ
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

// バージョン表記
remove_action('wp_head', 'wp_generator');

// 短縮URL
remove_action('wp_head', 'wp_shortlink_wp_head');

// プラグインのcss削除
// function delete_plugin_files()
// {
//     wp_dequeue_style('xxxx');
// }
// add_action('wp_enqueue_scripts', 'delete_plugin_files');

function remove_global_styles()
{
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');
}
add_action('wp_enqueue_scripts', 'remove_global_styles');

// iconのスタイル削除
add_action('wp_print_styles', 'my_deregister_styles', 100);
function my_deregister_styles()
{
    wp_deregister_style('dashicons');
}

/**
 * 
 */
