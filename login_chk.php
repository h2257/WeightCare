﻿<?php session_start();?>
<?php
include("db_conn.php");
$id = $_POST["id"]; 
$pw = $_POST["pw"]; 

$sql = "SELECT * FROM mommy WHERE id = '$id' ;";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

if($id != null && $pw != null && $row[0] == $id && $row[1] == $pw){

        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['ID'] = $id;
		header("Location:main.php"); 	
		
	}
else{
		header("Location:login.php"); 	
	}
?>


