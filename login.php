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
$bsCore->Footer();
?>