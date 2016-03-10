<?php
/**
 * Created by PhpStorm.
 * User: koreylo
 * Date: 3/10/16
 * Time: 2:37 PM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>All in Good Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script>
        function sendData(formTitle,formDetails,formTimestamp,formUser_id) {
            $.ajax({
                url: "index_insert.php",
                method: "post",
                data:{
                    title:formTitle,
                    details:formDetails,
                    timestamp:formTimestamp,
                    user_id:formUser_id
                },
                success: function (response) {
                    console.log(response);
                }
            });
        }

        $(document).ready(function(){
            $("#submitButton").click(function(){
                var title = $("#title").val();
                var details = $("#details").val();
                var timestamp = $("#timestamp").val();
                var user_id = $("#user_id").val();
                sendData(title,details,timestamp,user_id);
            });
        });
    </script>

</head>
<body>

<!--<form action="index_insert.php" method="post">-->
    <input id="title" type="text" name="title" placeholder="Title"><br>
    <textarea id="details" name="details" placeholder="Details"></textarea><br>
    <input id="timestamp" type="text"  name="timestamp" placeholder="TimeStamp"><br>
    <input id="user_id" type="text"  name="user_id" placeholder="UserId"><br>
    <input type="button" value="Submit" id="submitButton">
<!--</form>-->
</body>
</html>

