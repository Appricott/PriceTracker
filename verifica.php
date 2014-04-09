<?php

	$host="localhost"; // nume host
	$username="root"; //  nume mysql
	$password=""; //  parola Mysql 
	$db_name="test"; // numebd
	$tbl_name="users"; // nume tabel

// Conectare bd si selectare bd
	$conn = new PDO("mysql:host=$host; dbname=$db_name", $username, $password); 

// nume si parola trimise de pe form 
	$username=$_POST['username']; 
	$password=$_POST['password']; 
	
// Query
	
	$query = $conn->prepare("SELECT * FROM users WHERE user = ? AND parola =?");
	$query->bindParam(1, $username); //schimba ? cu username
	$query->bindParam(2, $password); //schimba ? cu parola
	$query->execute();
 	$rows = $query->rowCount();
	
	
		if($rows==1){
			
			session_start("username");
			session_start("password"); 
			header("location:succes.php");
					}
		else{
			echo "Wrong Username or Password";
		
			}	
?>
