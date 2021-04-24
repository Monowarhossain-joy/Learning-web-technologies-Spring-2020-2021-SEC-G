<?php
	session_start();

	if(isset($_POST['submit'])){

		$frome = $_POST['frome'];
		$too = $_POST['too'];
		$price = $_POST['price'];
		$transport = $_POST['transport'];
		$time = $_POST['time'];
		
		

		if($transport == "" || $time == ""){
			echo "null value found...";
		}else{
			if($price == 2000){
			
				$conn = mysqli_connect('localhost', 'root', '','webtech');
				$sql = "insert into transports values('', '{$frome}', '{$too}', '{$price}', '{$transport}', '{$time}')";
				
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