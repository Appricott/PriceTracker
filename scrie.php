<?php

	$host="localhost"; // nume host
	$username="root"; //  nume mysql
	$password=""; //  parola Mysql 
	$db_name="test"; // numebd
	$tbl_name="users"; // nume tabel
	
	
	
	

// Conectare bd si selectare bd
	$conn = new PDO("mysql:host=$host; dbname=$db_name", $username, $password ) or die (mysql_error()); 
	mysql_select_db('test') or die ('cannot select db')	;	
		
		$Nume=$_POST['Nume']; 
		$LinkProdus=$_POST['LinkProdus']; 
		$Pret=$_POST['Pret']; 
		$Data=$_POST['Data']; 
		
// Query
	
	$sql = "INSERT INTO 'produs' ('Nume', 'linkprodus', 'pret', 'data') VALUES ('$Nume', '$LinkProdus','$Pret','$Data')";
 	
	if ($conn->query($sql) === TRUE) {
		echo 'Datele au fost adaugate';
		}		
	else {
		echo 'Datele NU au fost adaugate';
		 }

	
	
?>
