<?php

class DB
{
	
	function connectDB()
	{
		$username 	= "root";
		$password 	= "toor";
		$database 	= "pos";
		$server = "localhost";
		$table = "items";

		try {
			$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
			// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo "connected";
			$items ="CREATE TABLE items(
			ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
			Item_name VARCHAR( 150 ) NOT NULL, 
			Category VARCHAR( 150 ) NOT NULL,
			Size VARCHAR( 20 ) NOT NULL, 
			Price VARCHAR( 20 ) NOT NULL, 
			Quantity VARCHAR( 250 ) NOT NULL, 
			image_id VARCHAR( 250 ) NOT NULL);" ;
			$conn->exec($items);
			$sales = "CREATE TABLE `pos`.`sales` ( 
			`id` INT(11) AUTO_INCREMENT PRIMARY KEY, 
			`company name` VARCHAR(100) NOT NULL ,
			`supplier name` VARCHAR(100) NOT NULL , 
			`email` VARCHAR(100) NOT NULL,
			`phone_number` VARCHAR(100) NOT NULL ) ENGINE = InnoDB;";
			$conn->exec($sales);
			$customer = "CREATE TABLE `pos`.`customers` ( 
			`id` INT(11) AUTO_INCREMENT PRIMARY KEY , 
			`customer_name` VARCHAR(50) NOT NULL ,
			`customer_email` VARCHAR(50) NOT NULL ,
			`customer_number` VARCHAR(50) NOT NULL ,
			`image_id` VARCHAR(150) NOT NULL ) ENGINE = InnoDB;";
			$conn->exec($customer);
			$user = "CREATE TABLE `pos`.`user` ( 
			`id` INT(11) AUTO_INCREMENT PRIMARY KEY , 
			`fName` VARCHAR(50) NOT NULL , 
			`lName` VARCHAR(50) NOT NULL , 
			`type` INT(10) NOT NULL , 
			`uri` VARCHAR(100) NOT NULL , 
			`image_id` VARCHAR(100) NOT NULL ) ENGINE = InnoDB;";
			$conn->exec($user);
			
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
	}
}

$db = new DB();
$db->connectDB();

// $db->createItems($items);


//Creating database

// if($db->connectDB()->exec($sql)){
// 	echo "EXISTS";
// }
// $db->exec($sql);
?>