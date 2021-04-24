
<?php 
	$conn = mysqli_connect('localhost', 'root', '','webtech');		
	$sql = "select * from transports ";
	$result = mysqli_query($conn, $sql);
	
	
	echo"<tabel border= 1 width=50% height=50px>
	
	              <tr>
				  
	                  <td>ID</td> 
	                  <td>FROM</td>
	                  <td>TO</td>
	                  <td>PRICE</td>
	                  <td>TRANASPORT</td>
					  <td>TIME</td>
	              </tr>";
		
	while ($row = mysqli_fetch_assoc($result)) 
	{
		
		echo "<table border=1 width=50% height=50px >
            
            <tr>
                <td>{$row['id']}</td> 
                <td>{$row['frome']}</td> 
                <td>{$row['too']}</td> 
				<td>{$row['price']}</td> 
				<td>{$row['transport']}</td> 
				<td>{$row['time']}</td>
               
            </tr>";
			
			
	}
	
	echo"</table>";
	
	
	
	
?> 
  
