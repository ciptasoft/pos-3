<?php 
class bsCore {
	function Header() {
		require 'bs-content/header.php';
	}
	function Footer(){
		require 'bs-content/footer.php';
		
	}
	function main(){
		require 'bs-admin/main.php';
		
	}
	
}

?>