<!-- index_insert.php -->
<?php
    require_once("mysql_connect.php");
    $title = $_POST['title'];
    $details = $_POST['details'];
    $timestamp = $_POST['timestamp'];
    $user_id = $_POST['user_id'];
    $query = "INSERT INTO todo_items(`title`,`details`,`timestamp`,`user_id`) VALUES ('$title','$details','$timestamp','$user_id')";
    mysqli_query($conn,$query);
    echo "Affected rows: ". mysqli_affected_rows($conn);
    echo "<br>".print_r($_POST);
?>