<?php 
    if (isset($_POST['submit'])) {
        if (empty($_POST['cpass'] || $_POST['npass'])) {
            echo"fields cannot be empty";
        }
        else{
            $cpass=$_POST['cpass'];
            $new_pass=$_POST['npass'];
    
            $inp = file_get_contents('../model/user.json');
            $temp = json_decode($inp, true);

            foreach ($temp as $key1 => $value1) {
				if ($temp[$key1]["cpass"]==$_POST['cpass']) {
					$temp[$key1]["pass"]=$new_pass;
                   // array_push($temp, $temp[$key1]["pass"]);
                    $jsonData = json_encode($temp);
                    file_put_contents('../model/user.json', $jsonData);
                    header('location: logout.php');
				}
			}
        }
    }

?>