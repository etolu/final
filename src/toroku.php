<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <!-- <link rel="stylesheet" href="css/menu.css"> -->
    <link rel="stylesheet" href="css/toroku.css">
</head>
<body>
    <div class="top">
    <img src="img/neko2.jpg" class="nekoimg"></div>
    </div>
    <form action="toroku2.php" method="post">
        <h1>猫カフェ登録</h1>
        <table>
        <tr>
        <th>店舗名</th>
        </tr>
        <tr>
        <td><input type="text" name="name"></td>
        </tr>
        <tr>
        <th>住所</th>
        </tr>
        <tr>
        <td><input type="text" name="place"></td>
        </tr>
        <tr>
        <th>Webサイトリンク</th>
        </tr>
        <tr>
        <td><input type="text" name="website"></td>
        </tr>
        <tr>
        <th>カテゴリー</th>
        </tr>
        <tr>
        <td><input type="text" name="category"></td>
        </tr>
    </table>
        <button type="submit">確認</button>
    </form>
    </div>
</body>
</html>