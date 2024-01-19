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
    <form action="update-update-result.php">
        <?php
            if(isset($_POST['name']) && isset($_POST['category'])){
                $pdo=new PDO($connect, USER, PASS);
                $sql1=$pdo->prepare('select * from restaurant where id=?');
                $sql1->execute([$_POST['id']]);
                echo '<p><label for="">飲食店名</label><input type="text" name="name" value="', $_POST['name'],'"></p>';
                echo 'カテゴリ';
                echo '<select name="category">';
                $sql2=$pdo->prepare('select * from category, restaurant where id=?');
                $sql2->execute([$_['category_id']]);
                foreach($sql2 as $row){
                    echo '<option value="', $_row['id'], '">', $row['name'],'</option>';
                }
                echo '</select>';
                echo '<input type="hidden" name="id" value="', $_POST['id'], '">';
            }
        ?>
        <input type="submit" value="更新">
    </form>
    <?php
        if(isset($_POST['name']) && isset($_POST['category'])){
            $sql3=$pdo->prepare('update restaurant set name=?, category_id=?, where id=?');
            $sql3->execute([$_POST['name'], $_POST['category'], $_POST['id']]);
            require 'restaurant.php';
        }
    ?>
</body>
</html>