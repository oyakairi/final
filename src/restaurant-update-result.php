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
            echo '<p><label for="">飲食店名</label><input type="text" name="name" value="', $_POST['name'],'"></p>';
            echo 'カテゴリ';
            echo '<select name="category">';
            $pdo=new PDO($connect, USER, PASS);
            $sql1=$pdo->query('select * from category');
            foreach($sql1 as $row){
                echo '<option value="', $row['id'], '">', $row['name'],'</option>';
            }
            echo '</select>';
        ?>
        
        <input type="submit" value="登録">
    </form>
    <?php
        if(isset($_POST['name']) && isset($_POST['category'])){
            $sql=$pdo->prepare('update restaurant set name=?, category_id=?, where id=?');
            $sql->execute([$_POST['name'], $_POST['category']]);
            require 'restaurant.php';
        }
    ?>
    
</body>
</html>