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
                echo '<p>カテゴリ';
                echo '<select name="category">';
                $pdo=new PDO($connect, USER, PASS);
                $sql1=$pdo->query('select * from category');
                foreach($sql1 as $row){
                    if(isset($_POST['category'])){
                        echo '<option value="', $_POST['category'], '">', $row['name'],'</option>';
                    }else{
                        echo '<option value="', $_row['id'], '">', $row['name'],'</option>';
                    }
                }
                echo '</select></p>';
                echo '<input type="hidden" name="id" value="', $_POST['id'], '">';
                echo '<p><input type="submit" value="更新"></p>';
            }
        ?>
    </form>
    <?php
        if(isset($_POST['name']) && isset($_POST['category'])){
            $sql2=$pdo->prepare('update restaurant set name=?, category_id=? where id=?');
            $sql2->execute([$_POST['name'], $_POST['category'], $_POST['id']]);
            require 'restaurant.php';
        }
    ?>
</body>
</html>