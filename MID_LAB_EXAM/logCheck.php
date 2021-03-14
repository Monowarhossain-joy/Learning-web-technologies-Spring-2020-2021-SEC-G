<?php

    session_start();

    if(isset($_POST['submit'])){

        $userName = $_POST['id'];
        $password = $_POST['password'];

        if(empty($id) || empty($password)){
            echo "id/Password is needed";
        }
        else{


            if(isset($_COOKIE['id']) && isset($_COOKIE['password'])){

                if($id == $_COOKIE['id'] && $password == $_COOKIE['password']){

                    setcookie('STATUS', 'OK', time()+3600, '/');
                    header('location: dashboard.php');

                    $file  = fopen('user.txt', 'r');
			        $data  = fread($file, filesize('user.txt'));
                    fclose($data);
                    
                    $Adminfile  = fopen('admin.txt', 'r');
			        $Admindata  = fread($Adminfile, filesize('admin.txt'));
			        fclose($Admindata);

                    $user = explode('|', $data);
                    $admin = explode('|', $Admindata);

                    if($id == trim($user[0]) && $password == trim($user[1])){
				        $_SESSION['status'] = "OK";
				        header('location: UserHome.html');
                    }
                    else if($id == trim($admin[0]) && $password == trim($admin[1]))
                    {
                        $_SESSION['status'] = "OK";
                        header('location: AdminHome.html');

                    }
                else{
				    header('location: login.php?msg=invalid_username/password');
			    }


                }else{
                    echo "Wrong credentials";
                }
            }
            else{
                echo "Account doesn't exist";
            }
            
        }

    }
    else{
		
        header('location:login.php'); 

    }


?>