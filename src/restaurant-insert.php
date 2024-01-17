<?php require 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>restaurant-menu</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <form action="restaurant-insert.php" method="post">
    <h2>飲食店情報管理メニュー</h2>
    <p><label for="">飲食店名</label><input type="text" name="name" id=""></p>
    <button type="submit">登録</button>
    <?php
        $pdo=new PDO($connect, USER, PASS);
        $sql=$pdo->prepare('insert into restaurant value (null,?,?)');
        $sql->execute([$_POST['name'], $_SESSION])
    ?>
</html>