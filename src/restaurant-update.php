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
    <tr><th>ID</th><th>飲食店名</th><th>カテゴリID</th></tr>
    <?php
        $pdo=new PDO($connect, USER, PASS);
        $sql=$pdo->query('select * from restaurant');
        foreach($sql as $row){              
            echo '<tr>';
            echo '<form action="">'
            echo '<td>', $row['id'], '</td>';
            echo '<td>';
		    echo '<input type="text" name="name" value="', $row['name'], '">';
		    echo '</td> ';
            echo '<td>';
		    echo '<input type="text" name="category_id" value="', $row['category_id'], '">';
		    echo '</td> ';
            echo '<input type="submit" value="更新">';
            echo '</tr>';
            echo "\n";
        }
    ?>
</table>
</body>
</html>