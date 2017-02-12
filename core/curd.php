<?php
if(!function_exists("createRow")) {
   // declare your function
	function createRow($sql)
	{
		$username 	= "root";
		$password 	= "toor";
		$database 	= "pos";
		$server = "localhost";

		try {
			$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
		// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			if ($conn->exec($sql) == TRUE) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $conn->error;
			}

		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
	}
}


if(!function_exists("readRow")) {
	function readRow($sql,$exe){
		$conn = new PDO('mysql:host=localhost;dbname=pos', 'root', 'toor');
		// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare($sql);
		$stmt->execute($exe);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
if(!function_exists("rowCount")) {
	function rowCount($table)
	{
		$conn = new PDO('mysql:host=localhost;dbname=pos', 'root', 'toor');
		$sql = "select * from $table";
		$num = $conn->prepare($sql);
		$num->execute();
		$count = $num->rowCount();
		echo $count;
	}
}
?>