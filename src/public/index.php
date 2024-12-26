<!DOCTYPE html>

<?php
get_template_part('components/head', null, [
    'title' => 'カスタムタイトル',
    'css_files' => ['/assets/styles/main.css'],
    'js_files' => ['/assets/js/script.js'],
    'meta' => ['description' => 'ページの説明文']
]);
?>

<body>
    <p>テストa</p>
    <p>静的画像</p>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test.jpg" alt="" width="300" height="300">
    <?php get_template_part('components/footer', null, array('arg1' => 'value1', 'arg2' => 'value2')); ?>
</body>

</html>