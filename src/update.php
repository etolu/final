<?php session_start(); ?>
<?php require 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/toroku.css">
</head>
<body>
    <div class="top">
    <img src="img/neko2.jpg" class="nekoimg"></div>
    </div>
    <div class="toroku">
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select * from nekocafe where id=?');
    $sql->execute([$_SESSION['cd']['update']]);
    foreach($sql as $row) {
    echo '<form action="update2.php" method="post">';
    echo '<h1>猫カフェ更新</h1>
    <table>
    <tr>
    <th>店舗名</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><input type="text" name="name" value="',$row['name'],'"></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>住所</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><input type="text" name="place" value="',$row['place'],'"></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>Webサイトリンク</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><input type="text" name="website" value="',$row['website'],'"></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>カテゴリー</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><input type="text" name="category" value="',$row['category'],'"></td>';
    echo '</tr>';
    echo '</table>';
    echo '<button type="submit">確認</button>';
    echo '</form>';
    }
?>
    </div>
</body>
</html>