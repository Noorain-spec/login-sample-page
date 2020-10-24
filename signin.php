<?php

$host='localhost';
$user='root';
$password='';
$dbname='sample';

	$conn=mysqli_connect($host,$user,$password,$dbname);

	if(!$conn){
				die('could not connect:'.mysqli_connect_error());
	}	
	else{
					if(isset($_POST["submit"])){
							$user=$_POST["name"];
							
							$password=$_POST["password"];
							
							$age=$_POST["age"];
							
							$gender=$_POST["gender"];
							
							$email=$_POST["email"];
							
							$number=$_POST["number"];

							$cpassword=$_POST["cp"];


											$query="insert into signin(name,age,gender,email,password,number) values('$user','$age','$gender','$email','$password','$number')";
											if($password==$cpassword){

											$add=mysqli_query($conn,$query)or die(mysqli_error($conn));

											if($add)
												{echo "success";
													header("location:end_sam.html");
										}

											else{echo "failed";}
											}
											else{
												echo "enter correct password";
											}
					}
		}
						mysqli_close($conn);
?>
			