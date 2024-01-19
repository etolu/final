<?php session_start(); ?>
<?php require 'db.php'; ?>
<?php require 'menu.php'; ?>
<?php
    echo '<table>';
    echo '<tr><th>店名</th><th>住所</th><th>Webサイト</th><th>特徴</th><th> </th><th> </th></tr>';
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select * from nekocafe where category=?');
    $sql->execute([$_SESSION['cd']['select']]);
    foreach ($sql as $row) {
        echo '<tr>';
        echo '<td>',$row['name'],'</td>';
        echo '<td>',$row['place'],'</td>';
        echo '<td><a href="',$row['website'],'"><i class="fas fa-home"></i></a></td>';
        echo '<td>',$row['category'],'</td>';
        echo '<td>';
        echo '<form action="update.php" method="post">';
                $_SESSION['cd']['update']=$row['id'];
            echo '<button type="submit">更新</button>
                </form>';
        echo '</td>';
        echo '<td>';
            echo '<form action="delete.php" method="post">';
                $_SESSION['cd']['delete']=$row['id'];
            echo '<button type="submit">削除</button>
                </form>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>
</html>