<?php 
require_once("core/function.php");

$bsCore = new bsCore();
$bsCore->Header();
?>
<div class="login-page">
	<div class="form">
		<h2 class="text-center">Welcome to POS</h2>
		<form class="login-form">
			<input type="text" placeholder="username"/>
			<input type="password" placeholder="password"/>
			<button>login</button>
			<p class="message">Not registered? <a href="#">Create an account</a></p>
		</form>
	</div>
</div>


<?php 
//fetching data
// $bsCore->Footer();
// ?>

// <?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//      die("Connection failed: " . $conn->connect_error);
// } 

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//      // output data of each row
//      while($row = $result->fetch_assoc()) {
//          echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
//      }
// } else {
//      echo "0 results";
// }

// $conn->close();
?> 