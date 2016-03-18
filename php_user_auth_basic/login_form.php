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
                    var message = response.success;
                    if(message == "true"){
                        var h1 = $("<h5>", {
                            class:"loginMessage"
                        });
                        $('body').append(h1);
                        h1.append("Login "+ message);
                    }
                    else{
                        var h1 = $("<h5>", {
                            class:"loginMessage"
                        });
                        $('body').append(h1);
                        h1.append("Login "+ message + ": " + response.error);
                    }

                }
            });
        }

        $(document).ready(function(){
            $('#submitButton').click(function(){
                $(".loginMessage").remove();
                var username = $('#username').val();
                var password = $('#password').val();
                userAuth(username,password);
                $('#username').val('');
                $('#password').val('');

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