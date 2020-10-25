<?php


?>


<html lang="ja">
    <head>

    </head>

    <body>
        <h1>画像アップロード</h1>
        <p>画像をアップロードします</p>

        <form action="pic_receive.php" method="POST" enctype="multipart/form-data">
            <p><input type="file" name="img"></p>
            <p><input type="submit" value="アップロード"></p>
        <form>
    </body>
</html>
