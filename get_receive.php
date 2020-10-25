<?php

$name = $_GET['name'];
$hobby = $_GET['hobby'];

?>

<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>none</title>
    </head>
    <body>
        <h1>受信ページ</h1>
        <p>あなたの名前は<?php echo $name; ?>さんです。</p>
        <p>あなたの趣味は<?php echo $hobby; ?>することです。</p>
    </body>

</html>