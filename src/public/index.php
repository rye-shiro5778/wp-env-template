<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Title</title>
  <?php
  $root = get_template_directory_uri();
  $css_ext = "css";
  $js_ext = "js";
  ?>
  <link rel="stylesheet" href="<?php echo $root; ?>/assets/styles/main.<?php echo $css_ext ?>">
  <script src="<?php echo $root; ?>/assets/js/script.<?php echo $js_ext ?>" type="module"></script>
</head>

<body>
  <p>テスト2</p>
  <p>静的画像</p>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test.jpg" alt="" width="300" height="300">
</body>

</html>