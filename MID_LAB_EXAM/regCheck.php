<?php

    session_start(); 

    if(isset($_POST['submit'])){
		

        $id = $_POST['id'];
		$password = ( $_POST['password']);
        $name = $_POST['name'];
        $usertype = ( $_POST['usertype']);

        


        if(empty($id) ||  empty($password)){
            echo "Can't accept null";
        }else{

            setcookie('id', $id, time()+3600, '/'); 
            setcookie('name', $name, time()+3600, '/');
            setcookie('password', $password, time()+3600, '/');
            setcookie('usertype', $usertype, time()+3600, '/');

            
            if($usertype == 'user')
            {
                $file = fopen('user.txt', 'a');
                $user = $id."|".$password."|".$name."|".$usertype."\n";
                fwrite($file, $usertype);
                fclose($file);

            }
            else{
                $file = fopen('admin.txt', 'a');
                $user = $userName."|".$password."|".$type."\n";
                fwrite($file, $usertype);
                fclose($file);
            }

            echo "Registration Done..!";
            //header('location:login.html');
        }
    }

    else{
        echo "invalid request";
        //header('location:login.html'); 

    }


?>