<?php

    session_start();

    if(isset($_POST['submit'])){

        $userName = $_POST['userName'];
        $password = $_POST['password'];

        if(empty($userName) || empty($password)){
            echo "Username/Password is needed";
        }
        else{


            if(isset($_COOKIE['userName']) && isset($_COOKIE['password'])){

                if($userName == $_COOKIE['userName'] && $password == $_COOKIE['password']){

                    setcookie('STATUS', 'OK', time()+3600, '/');
                    header('location: dashboard.php');

                    $file  = fopen('user.txt', 'r');
			        $data  = fread($file, filesize('user.txt'));
                    fclose($data);
					
					
                    $user = explode('|', $data);


                    if($userName == trim($user[0]) && $password == trim($user[1])){
				        $_SESSION['status'] = "OK";
				        header('location: UserHome.html');
                    }
                else
				{
				    header('location: login.php?msg=invalid_username/password');
			    }


                }else{
                    echo "Wrong credentials";
                    //header('location:login.html');
                }
            }
            else{
                echo "Account doesn't exist";
            }
            
        }

    }
    else{
        //echo "invalid request";
        header('location:login.php'); 

    }


?>