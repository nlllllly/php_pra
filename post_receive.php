<?php

// var_dump($_POST);
$name = $_POST['name'];
$sex = $_POST['sex'];
$blood = $_POST['blood'];
$comment = $_POST['comment'];


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>POSTで受信したデータ</h1>
    <p>プロフィールを登録します。</p>
        <p>名前：<?php echo $name; ?>さんです</p>
        <p>性別：
            <?php 
            if ($sex === '1') {
                echo '男性';
            } elseif ($sex === '2') {
                    echo '女性';
                }
            ?>です</p>
        <p>血液型：<?php echo $blood; ?>型です</p>
        <p>ひとこと：<?php echo '<br>'. $comment; ?></p>
</body>
</html>