<?php


class DB
{
	
	function connectDB()
	{
		$username 	= "root";
		$password 	= "toor";
		$database 	= "wordpress";
		$server 	= "localhost";
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
			echo "Connected"; 
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
		
	}
}
// $db = new DB();
// $db->connectDB();
//Creating database
// $sql = "CREATE DATABASE pos";
// $conn->exec($sql);
?>