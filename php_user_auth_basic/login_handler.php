<?php

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['username'] = $_POST['username'];
//    $username = 'klo07';
//    $password = 'codeninja2';

    $output = [];

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
                $output = ['success' => 'true', 'user_id' => $username];
                break;
            }
            else{
                $output = ['success' => 'false', 'error' => 'Incorrect Password'];
                break;
            }
        }
        else{
            $output = ['success' => 'false', 'error' => 'Username Not Found'];
        }
    }

    $output_string = json_encode($output);
    print_r($output_string);
