<?php

	$server='localhost';

	$username='root';
	
	$password='';
	
	$dbname='test';
	
		$conn=mysqli_connect($server,$username,$password,$dbname);
			
			if(!$conn){
				die('couuld not connect:'.mysqli_connect_error());
			}	
			else{
					if(isset($_POST["submit"])){
				
						if(!empty($_POST["email"]&&!empty($_POST["password"])))
				
							$email=$_POST["email"];
					
							$pass=$_POST["password"];

							$query="insert into sample(
							email,password) values($email,$pass);"

							$run=mysqli_query($conn,$query)or die(mysqli_error());

							if($run){
								alert("successfull");
							}
							else{
								alert("failed");
							}
						}
						else{
							alert("enter proper input");
						}
					}
			}
		mysqli_close($conn);
?>

