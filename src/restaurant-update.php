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
    <form action="">
    <table>
    <form action="restaurant-update-result.php">
    <tr><th></th><th>ID</th><th>飲食店名</th><th>カテゴリID</th></tr>
    <?php
        $pdo=new PDO($connect, USER, PASS);
        $sql1=$pdo->query('select * from restaurant');
        foreach($sql1 as $row){              
            echo '<tr>';
            echo '<td>';
            echo '<input type="radio" value="', $row['id'],'">';
            echo '</td> ';
            echo '<td>', $row['id'], '</td>';
            echo '<td>';
		    echo '<input type="text" name="name" value="', $row['name'], '">';
		    echo '</td> ';
            echo '<td>';
            echo '<input type="text" name="name" value="', $row['category_id'], '">';
            echo '</td> ';
            echo '<td>';
            echo '<input type="submit" value="更新">';
            echo '</td>';
            echo '</tr>';
            echo "\n";
        }
    ?>
    </form>
</table>
</body>
</html>