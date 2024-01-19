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
    <form action="restaurant-update-result.php" method="post">
        <?php
            if(isset($_POST['name']) && isset($_POST['category'])){
                echo '<p><label for="">飲食店名</label><input type="text" name="name" value="', $_POST['name'],'"></p>';
                echo '<p><label for="">カテゴリ</label><input type="text" name="category" value="', $_POST['category'],'"></p>';
                echo '<input type="hidden" name="id" value="', $_POST['id'], '">';
                echo '<p><input type="submit" value="更新"></p>';
            }
        ?>
    </form>
    <?php
        require 'category.php';
        $pdo=new PDO($connect, USER, PASS);
        if(isset($_POST['name']) && isset($_POST['category'])){
            $sql1=$pdo->prepare('update restaurant set name=?, category_id=? where id=?');
            $sql1->execute([$_POST['name'], $_POST['category'], $_POST['id']]);
            require 'restaurant.php';
        }
    ?>
</body>
</html>