<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録確認</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <!-- <link rel="stylesheet" href="css/menu.css"> -->
    <link rel="stylesheet" href="css/toroku.css">
</head>
<body>
    <div class="top">
    <img src="img/neko2.jpg" class="nekoimg"></div>
    </div>
    <div class="toroku">
    <?php
    $_SESSION['cafe']=['id','name','place','website','category'];
        $_SESSION['cafe']['name']=$_POST['name'];
        $_SESSION['cafe']['place']=$_POST['place'];
        $_SESSION['cafe']['website']=$_POST['website'];
        $_SESSION['cafe']['category']=$_POST['category'];
    echo '<form action="toroku3.php" method="post">
        <h1>登録内容</h1>
        <table>
        <tr>
        <th>店舗名</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>',$_POST['name'],'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>住所</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>',$_POST['place'],'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>Webサイトリンク</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>',$_POST['website'],'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>カテゴリー</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>',$_POST['category'],'</td>';
    echo '</tr>';
    echo '</table>';
    echo '<button type="submit">登録</button>';
    echo '</form>';
    ?>
    </div>
</body>
</html>