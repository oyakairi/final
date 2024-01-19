<?php require 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>restaurant-menu</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h2>飲食店情報管理メニュー</h2>
    <a href="restaurant-menu.php">ホームへ戻る</a>
    <table>
    <tr><th></th><th>ID</th><th>飲食店名</th><th>カテゴリID</th><th></th></tr>
    <?php
        $pdo=new PDO($connect, USER, PASS);
        $sql=$pdo->query('select * from restaurant');
        foreach($sql as $row){              
            echo '<tr>';
            echo '<td></td>';
            echo '<td>', $row['id'], '</td>';
            echo '<td>', $row['name'], '</td>';
            echo '<td>', $row['category_id'], '</td>';
            echo '<td>';
            echo '<form action="restaurant-update-result.php" method="post">';
            echo '<input type="hidden" name="id" value="', $row['id'], '">';
            echo '<input type="hidden" name="name" value="', $row['name'], '">';
            echo '<input type="hidden" name="category" value="', $row['category_id'], '">';
            echo '<input type="submit" value="更新">';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
            echo "\n";
        }
    ?>
    </table>
</body>
</html>