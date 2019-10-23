<?php

require_once 'judge.php'; //クラスファイルの読み込み

if (isset($_GET['number'])) {
    //入力されたら実行される
    $prime = new Judge($_GET['number']); //インスタンス化
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>素数判定</title>
</head>

<body>
    <h1>素数判定</h1>
    <p>入力した数字が素数か素数でないかを判定します。</p>

    <form action="#" method="get">
        <input type="number" name="number">
        <input type="submit">
    </form>

    <?php if (Judge::getState()): //入力状態がtrueのとき ?>

    <h3>素数判定：

        <?php if ($prime->isPrimary()): ?>
            <?php echo '素数である'; ?>

        <?php else: ?>
            <?php echo '素数でない'; ?>
        <?php endif; ?>

    </h3>

    <?php endif; ?>

</body>
</html>
