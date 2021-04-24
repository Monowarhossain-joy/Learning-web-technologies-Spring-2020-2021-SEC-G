<!DOCTYPE html>
<html>
<head>
	<title>Comment Search</title>
	<script type="text/javascript" src="review.js"></script>
</head>
<body>
	<h1 id='mydiv'>User Comment List</h1>

	<form>
	<center>
		<input type="text" name="name" id="name" value="" onkeyup="ajax()" >
		<input type="button" name="" value="Search" onclick="">
	</center>
	</form>

	<div id='result'></div>


<?php 
	$conn = mysqli_connect('localhost', 'root', '','webtech');		
	$sql = "select * from commentboxs";
	$result = mysqli_query($conn, $sql);
	
	
	echo"<tabel border= 1 width=50% height=50px>
	
	              <tr>
				  
	                  <td>ID</td> 
	                  <td>UserName</td>
	                  <td>Comment</td>
	              </tr>";
		
	while ($row = mysqli_fetch_assoc($result)) 
	{
		
		echo "<table border=1 width=50% height=50px >
            
            <tr>
                <td>{$row['id']}</td> 
                <td>{$row['username']}</td> 
                <td>{$row['comment']}</td> 
				
               
            </tr>";
			
			
	}
	
	echo"</table>";
	
	
	
	
?> 