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
        $sql1=$pdo->query('select * from restaurant');
        foreach($sql1 as $row){              
            echo '<tr>';
            echo '<form action="restaurant-update-result.php">';
            echo '<td>';
		    echo '<input type="hidden" name="id" value="', $row['id'], '" disabled>';
		    echo '</td> ';
            echo '<td>';
		    echo '<input type="text" name="name" value="', $row['name'], '">';
		    echo '</td> ';
            echo '<td>';
            echo '<select name="category">';
            $sql2=$pdo->prepare('select * from category, restaurant where category_id=id');
            foreach($sql2 as $row){
                echo '<option value="', $row['id'], '">', $row['id'],'</option>';
            }
            echo '</select>';
            echo '</td> ';
            echo '<td>';
            echo '<input type="submit" value="更新">';
            echo '</td>';
            echo '</form>';
            echo '</tr>';
            echo "\n";
        }
    ?>
</table>
</body>
</html>