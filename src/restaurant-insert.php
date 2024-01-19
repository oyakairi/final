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
    カテゴリ
    <select name="category">
    <?php
        $pdo=new PDO($connect, USER, PASS);
        $sql1=$pdo->query('select * from category');
        foreach($sql1 as $row){
            echo '<option value="', $row['id'], '">', $row['name'],'</option>';
        }
    ?>
    </select>
    <button type="submit">登録</button>

    <?php
        $sql2=$pdo->prepare('insert into restaurant value (null,?,?)');
        $sql2->execute([$_POST['name'], $_POST['category']]);
        require 'restaurant.php';
    ?>
</body>
</html>