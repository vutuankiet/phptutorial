<?php
	// Ten file: day17_demo3.php

	// Khai báo server và tài khoản kết nối
	$serverName = "localhost";
	$dbUserName = "root";
	$dbPassword = "";
	$dbName = "testdb";
	
	// Kết nối PDO
	try{
		$conn = new PDO("mysql:host=$serverName;dbname=$dbName",$dbUserName,$dbPassword);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $error){
		echo "Lỗi CSDL, chi tiết lỗi: <br>".$error->getMessage();
		exit();
	}
?>
