<?php

	$host="localhost"; // nume host
	$username="root"; //  nume mysql
	$password=""; //  parola Mysql 
	$db_name="test"; // numebd
	$tbl_name="users"; // nume tabel

// Conectare bd si selectare bd
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");

// nume si parola trimise de pe form 
	$myusername=$_POST['myusername']; 
	$mypassword=$_POST['mypassword']; 
// Query
	$sql="SELECT * FROM $tbl_name WHERE user='$myusername' and parola='$mypassword'";
	$result=mysql_query($sql);

// numar randuri din bd
	$count=mysql_num_rows($result);

// daca se gasesc potriviri pentru $myusername si $mypassword, rand tabel=1
	if($count==1){

// se registreaza $myusername, $mypassword si redirectioneaza catre"succes.php"
	session_start("myusername");
	session_start("mypassword"); 
	header("location:succes.php");
	}
	else {
	echo "Wrong Username or Password";
	}
?>
