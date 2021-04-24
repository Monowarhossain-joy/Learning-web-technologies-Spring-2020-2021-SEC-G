
<?php 
	$conn = mysqli_connect('localhost', 'root', '','webtech');		
	$sql = "select * from users";
	$result = mysqli_query($conn, $sql);
	
	
	echo"<tabel border= 1 width=50% height=50px>
	
	              <tr>
				  
	                  <td>ID</td> 
	                  <td>USERNAME</td>
	                  <td>EMAIL</td>
	                  <td>GENDER</td>
	                  <td>DOB</td>
	              </tr>";
		
	while ($row = mysqli_fetch_assoc($result)) 
	{
		
		echo "<table border=1 width=50% height=50px >
            
            <tr>
                <td>{$row['id']}</td> 
                <td>{$row['username']}</td> 
                <td>{$row['email']}</td> 
				<td>{$row['gender']}</td> 
				<td>{$row['dob']}</td> 
               
            </tr>";
	}
	
	echo"</table>";
	
	
?> 
  
