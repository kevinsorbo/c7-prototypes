<!-- index_insert.php -->
<?php
    require_once("mysql_connect.php");
    $query = 'INSERT INTO todo_items(`title`,`details`,`timestamp`,`user_id`) VALUES ("watch naruto","watch new episode",24,101)';
    mysqli_query($conn,$query);
    echo "Affected rows: ". mysqli_affected_rows($conn);
?>