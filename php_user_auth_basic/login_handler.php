<?php

    session_start();


    $username = $_POST['username'];
    $encrypt_password = sha1($_POST['password']);
    $_SESSION['username'] = $_POST['username'];
//    $username = 'klo07';
//    $password = 'codeninja2';

    $output = [];

    $user_info = [
                    ['username'=>'klo01','password'=>'057921f583a82b68c04e4fbfec1de9d36c06ecd2'],
                    ['username'=>'klo02','password'=>'c1b520ec19c7570a96b60ce6535c2e96824eeec5'],
                    ['username'=>'klo03','password'=>'5d667d701c040c60cbde6066198b5166a8844921'],
                    ['username'=>'klo04','password'=>'9edfd27b78694a8a5401b75262cba2a72d398308'],
                    ['username'=>'klo05','password'=>'6148be4f4636b6beec817da6baf418222619ba40']
                  ];

    foreach($user_info as $ui => $value){
//        print_r($value['username']);
//        print_r($value['password']);
//        echo "$username <br>" ;
        if($username === $value['username']){
            if($encrypt_password == $value['password']){
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