<?php
	

	$name = $_REQUEST['name'];
	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from commentboxs where username like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1 width=150% height=100px>
					<tr>
					  td>ID</td> 
	                  <td>UserName</td>
	                  <td>Comment</td>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['id']}</td> 
                            <td>{$row['username']}</td> 
                            <td> {$row['comment']}</td> 
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>