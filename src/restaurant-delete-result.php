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
    <?php
        $pdo=new PDO($connect, USER, PASS);
        $sql=$pdo->prepare('delete from restaurant where id=?');
        $sql->execute([$_POST['id']]);
        require 'restaurant.php'; 
    ?>
</body>
</html>