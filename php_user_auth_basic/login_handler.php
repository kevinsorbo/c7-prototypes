<!--login_handler.php-->

<?php

    session_start();

//    $username = $_POST['username'];
//    $password = $_POST['password'];
    $_SESSION['username'] = $_POST['username'];
    $username = 'klo07';
    $password = 'codeninja2';

    $user_info = [
                    ['username'=>'klo01','password'=>'codeninja1'],
                    ['username'=>'klo02','password'=>'codeninja2'],
                    ['username'=>'klo03','password'=>'codeninja3'],
                    ['username'=>'klo04','password'=>'codeninja4'],
                    ['username'=>'klo05','password'=>'codeninja5']
                  ];

    foreach($user_info as $ui => $value){
//        print_r($value['username']);
//        print_r($value['password']);
//        echo "$username <br>" ;
        if($username === $value['username']){
            if($password == $value['password']){
                $user_info = ['success' => 'true'];
                break;
            }
            else{
                $user_info = ['success' => 'false', 'errors' => 'Incorrect Password'];
                break;
            }
        }
        else{
            $user_info = ['success' => 'false', 'errors' => 'Username Not Found'];
        }
    }

    print_r($user_info);
