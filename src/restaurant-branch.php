<?php
    if(isset($_POST['select'])){
        header('Location: restaurant-select.php');
        exit;
    }else if(isset($_POST['insert'])){
        eader('Location: restaurant-insert.php');
        exit;
    }else if(isset($_POST['update'])){
        eader('Location: restaurant-update.php');
        exit;
    }else if(isset($_POST['delete'])){
        eader('Location: restaurant-delete.php');
        exit;
    }
?>