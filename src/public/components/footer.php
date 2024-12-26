<?php
// $argsから値を取得
$arg1 = $args['arg1'];
$arg2 = $args['arg2'];
?>

<footer>
    <p>引数1: <?php echo esc_html($arg1); ?></p>
    <p>引数2: <?php echo esc_html($arg2); ?></p>
</footer>