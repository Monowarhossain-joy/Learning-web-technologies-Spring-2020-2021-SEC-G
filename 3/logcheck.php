<?php

$uname="";
$err_uname="";
$pass="";
$err_pass="";

	if(isset($_POST['submit'])){

		if(empty($_POST["uname"])){
            $err_uname="User name required";
        }
        else if(strlen($_POST["uname"]) < 6){
            $err_uname="Username must be more than 6 characters long";
        }
        else if(strpos($_POST["uname"]," ")){
            $err_uname="Username should not contain whitespace";
        }

        else{   
            $uname=$_POST["uname"];

        }

        if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
		 }
		 elseif(htmlspecialchars($_POST["pass"]))
		 {
			 $err_pass=["HTML KeyWords Used"];
		 }
		 elseif (strlen($_POST["uname"])<8) {
		 	$err_pass=["[Password must be 8 charachters long"];
		 }
		 elseif(!strpos($_POST["pass"],"#"))
		 {
			 $err_pass="[Password should contain special character]";
		 }
		 elseif(!is_numeric($_POST["pass"]))
		 {
			 $err_pass="[Password should contain Numeric values]";
		 }
		 elseif(!ctype_upper($_POST["pass"]))
		 {
			 $err_pass="[Password should contain UpperCase values]";
		 }
		 elseif(!ctype_lower($_POST["pass"]))
		 {
			 $err_pass="[Password should contain LowerCase values]";
		 }

		 elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="[Password should not contain white space]";
		 }
		 else
		 {
			 $err_pass=$_POST["pass"];
         }


	}
?>

