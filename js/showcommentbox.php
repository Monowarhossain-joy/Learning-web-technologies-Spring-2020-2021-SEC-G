<?php
	session_start();

	if(isset($_POST['submit'])){

		$username = $_SESSION['username'];;
		$comment = $_POST['comment'];
		
		

		if($username == "" || $comment == ""){
			echo "null value found...";
		}else{
			if($comment != ""){
			
				$conn = mysqli_connect('localhost', 'root', '','webtech');
				$sql = "insert into commentboxs values('', '{$username}', '{$comment}')";
				
				if(mysqli_query($conn,$sql)){
					
					header('location: dashboard.php');
					
				}else{
					
					echo "error..try again";
				}

		
		}else{
   			     echo "error..try again";
				}
		
	}
	
	}


?>