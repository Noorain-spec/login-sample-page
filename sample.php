<?php

	$server='localhost';

	$username='root';
	
	$password='';
	
	$dbname='sample';
	
		$conn=mysqli_connect($server,$username,$password,$dbname);
			
			if(!$conn){
				die('couuld not connect:'.mysqli_connect_error());
			}	
			else{
					if(isset($_POST["submit"])){
				
						if(!empty($_POST["email"]&&!empty($_POST["password"]))){
				
							$email=$_POST["email"];
					
							$pass=$_POST["password"];

							$query="insert into login(
							email,password) values('$email','$pass')";

							$add=mysqli_query($conn,$query)or die(mysqli_error($conn));

							if($add)
								{echo "successfull";}
							else{echo "failed";}
						}
						else{echo "enter proper input";}
					}
			}
		mysqli_close($conn);
?>

