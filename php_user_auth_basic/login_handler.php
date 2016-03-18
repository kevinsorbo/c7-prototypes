<!--login_handler.php-->

<?php

//    $username = $_POST['username'];
//    $password = $_POST['password'];

    $user_info = [
                    ['username'=>'klo01','password'=>'codeninja1'],
                    ['username'=>'klo02','password'=>'codeninja2'],
                    ['username'=>'klo03','password'=>'codeninja3'],
                    ['username'=>'klo04','password'=>'codeninja4'],
                    ['username'=>'klo05','password'=>'codeninja5']
                  ];

    foreach($user_info as $ui => $value){
        if($username == $value['username']){
            if($password == $value['password']){
                $user_info = ['success' => 'true'];
            }
            else{
                $user_info = ['success' => 'false', 'errors' => 'Incorrect Password'];
            }
        }
        else{
            $user_info = ['success' => 'false', 'errors' => 'Username Not Found'];
        }
//        print_r($value['username']);
//        print_r($value['password']);
    }
