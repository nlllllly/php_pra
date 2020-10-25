<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>POSTでデータを送信する</h1>
    <p>プロフィールを登録しよう</p>
    <form action="post_receive.php" method="POST">
        <p>名前：<input type="text" name="name"></p>
        <p>性別：
            <input type="radio" name="sex" value="1">男
            <input type="radio" name="sex" value="2">女
        </p>
        <p>血液型：
            <select name="blood">
                <option value="A">A型</option>
                <option value="B">B型</option>
                <option value="O">O型</option>
                <option value="AB">AB型</option>
            </select>
        </p>
        <p>ひとこと：<br>
            <textarea name="comment" orws="4" cols="40"></textarea>
        </p>
        <p><input type="submit" value="送信する"></p>
    </form>
</body>
</html>