<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ店舗一覧</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
    <div class="top">
    <img src="img/neko2.jpg" class="nekoimg"></div>
    <!-- <p>ねこカフェ</p> -->
    <a href="toroku.php" class="torokubutton">登録</a>
    </div>
    <form action="select.php" method="post">
    <!-- <input type="text" name="keyword"><button type="submit"><i class="fas fa-search"></i></button> -->
    <div class="cate">
    <select name="category">
        <option value="1">全て</option>
        <option value="里親募集">里親募集</option>
    </select>
    <button type="submit">選択</button>
    </div>
    </form>