<?php

/**
 * @param array $args {
 *     @type string $title     ページタイトル（オプション）
 *     @type array  $css_files CSSファイルの配列
 *     @type array  $js_files CSSファイルの配列
 *     @type array  $meta      メタ情報の配列（オプション）
 * }
 */

$root = get_template_directory_uri();

// デフォルト値の設定
$default_args = [
    'title' => wp_get_document_title(),
    'css_files' => ['assets/styles/main.css'],
    "js_files" => ["/assets/js/script.js"],
    'meta' => []
];

// 引数のマージ
$args = wp_parse_args($args ?? [], $default_args);
?>

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php foreach ($args['meta'] as $name => $content): ?>
        <meta name="<?php echo esc_attr($name); ?>" content="<?php echo esc_attr($content); ?>">
    <?php endforeach; ?>
    <title><?php echo esc_html($args['title']); ?></title>
    <?php foreach ($args['css_files'] as $css_file): ?>
        <link rel="stylesheet" href="<?php echo $root; ?><?php echo esc_attr($css_file) ?>">
    <?php endforeach; ?>
    <?php foreach ($args['js_files'] as $js_file): ?>
        <script src="<?php echo $root; ?><?php echo esc_attr($js_file) ?>" type="module"></script>
    <?php endforeach; ?>
    <?php wp_head(); ?>
</head>