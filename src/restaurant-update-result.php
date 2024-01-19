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
        if(isset($_POST['name']) && isset($_POST['category'])){
            $sql=$pdo->prepare('update restaurant set name=?, category_id=?, where id=?');
            $sql->execute([$_POST['name'], $_POST['category']]);
            require 'restaurant.php';
        }else{
            echo '必要項目を入力してください。';
        }
    ?>
</table>
</body>
</html>