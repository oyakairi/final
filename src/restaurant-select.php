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
    <table>
        <?php
            $pdo=new PDO($connect, USER, PASS);
            $sql=$pdo->query('select * from restaurant');
            foreach($sql as $row){              
                echo '<tr>';
                echo '<td>', $row['id'], '</td>';
                echo '<td>', $row['name'], '</td>';
                echo '<td>', $row['category_id'], '</td>';
                echo '</tr>';
                echo "\n";
            }
        ?>
    </table>
</html>