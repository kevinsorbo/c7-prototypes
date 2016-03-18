<!--login_form.php-->

<!DOCTYPE html>
<html>
<head>
    <title>LoginForm</title>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>

        function userAuth(username,password){
            $.ajax({
                url:"login_handler.php",
                data:{
                    username:username,
                    password:password
                },
                cache:false,
                method:'post',
                dataType:'json',
                success: function(response) {
                    console.log(response);
                }
            });
        }

        $(document).ready(function(){
            $('#submitButton').click(function(){
                var username = $('#username').val();
                var password = $('#password').val();
                userAuth(username,password);
            });
        })

    </script>
</head>
<body>
    <input id="username" type="text" name="username" placeholder="Username">
    <input id="password" type="password" name="password" placeholder="Password">
    <input type="submit" value="submit" id="submitButton">
</body>
</html>