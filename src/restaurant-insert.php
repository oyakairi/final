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
    <a href="restaurant-menu.php">ホームへ戻る</a>
    <p><label for="">飲食店名</label><input type="text" name="name" id=""></p>
    <p>カテゴリ
    <select name="category">
    <?php
        $pdo=new PDO($connect, USER, PASS);
        $sql1=$pdo->query('select * from category');
        foreach($sql1 as $row){
            echo '<option value="', $row['id'], '">', $row['name'],'</option>';
        }
    ?>
    </select></p>
    <p><input type="submit" value="登録"></p>
    </form>
    <?php
        if(isset($_POST['name']) && isset($_POST['category'])){
            $sql2=$pdo->prepare('insert into restaurant value (null,?,?)');
            $sql2->execute([$_POST['name'], $_POST['category']]);
            require 'restaurant.php';
        }else{
            echo '必要項目を入力してください。';
        }
    ?>
</body>
</html>