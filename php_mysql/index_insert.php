<!-- index_insert.php -->
<!-- Feature Set 3 & 4-->
<?php
    require_once("mysql_connect.php");
    //Variables that store values coming from $_POST
    $title = $_POST['title'];
    $details = $_POST['details'];
    $timestamp = $_POST['timestamp'];
    $user_id = $_POST['user_id'];
    // This query string inserts into the todo_items table new values coming from the form
    $query = "INSERT INTO todo_items(`title`,`details`,`timestamp`,`user_id`) VALUES ('$title','$details','$timestamp','$user_id')";
    // This executes the query
    mysqli_query($conn,$query);
    // echo how many rows are affected and the $_POST array coming from the form
    echo "Affected rows: ". mysqli_affected_rows($conn);
    echo "<br>".print_r($_POST);
?>