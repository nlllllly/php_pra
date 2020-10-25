<?php


?>

<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>検索アプリ</title>
    </head>
    <body>
        <h1>検索アプリ</h1>
        <p>名前に一致する会員を検索します。</p>

        <form action="search_recieve.php" method="POST">
            <label>お名前</label>
            <input type="text" name="name">
            <input type="submit" value="送信する">
        </form>
    </body>