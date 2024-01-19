<table>
    <?php
        $pdo=new PDO($connect, USER, PASS);
        $sql=$pdo->query('select * from restaurant');
        foreach($sql as $row){              
            echo '<tr>';
            echo '<td>', $row['id'], '</td>';
            echo '<td>', $row['name'], '</td>';
            echo '<td>', $row['category_id'], '</td>';
            echo '</tr>';
            echo "\n";
        }
    ?>
</table>