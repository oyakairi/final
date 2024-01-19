<table>
    <tr><th>ID</th><th>カテゴリ名</th></tr>
    <?php
        $pdo=new PDO($connect, USER, PASS);
        $sql=$pdo->query('select * from category');
        foreach($sql as $row){              
            echo '<tr>';
            echo '<td>', $row['id'], '</td>';
            echo '<td>', $row['name'], '</td>';
            echo '</tr>';
            echo "\n";
        }
    ?>
</table>
