<?php
/*
Template Name: x Page
*/
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Title</title>
    <?php $root = get_template_directory_uri(); ?>
    <link rel="stylesheet" href="<?php echo $root; ?>/assets/styles/main.css>">
    <script src="<?php echo $root; ?>/assets/js/script.js" type="module"></script>
    <?php wp_head(); ?>
</head>

<body>
    <p>x-page</p>
</body>

</html>