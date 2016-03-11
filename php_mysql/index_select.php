<!-- index_select.php -->
<!-- Feature Set 2-->
<!-- gather all information from todo_items table in database and display it -->
<!-- We can get see updates of what is being added, deleted, or changed to the table todo_items-->
<?php
require_once('mysql_connect.php');
print("conn: "); print_r($conn);
$query = 'SELECT * FROM todo_items';
//WHERE user_id=101';
$result = mysqli_query($conn,$query);
print("<br><br><pre>".print_r($result).'</pre>');

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $output = $row;
        print("<br>".print_r($output));
    }
}


?>