<?php
    if(isset($_POST['select'])){
        header('Location: restaurant-select.php');
        exit;
    }else if(isset($_POST['insert'])){
        header('Location: restaurant-insert.php');
        exit;
    }else if(isset($_POST['update'])){
        header('Location: restaurant-update.php');
        exit;
    }else if(isset($_POST['delete'])){
        header('Location: restaurant-delete.php');
        exit;
    }else if(isset($_POST['category'])){
        header('Location: restaurant-category.php');
        exit;
    }
?>