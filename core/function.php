<?php 

class bsCore {
	function Header() {

		require 'bs-content/header.php';
		// $this->header1 = "Bahnisikha";
	}
	function Footer(){
		require 'bs-content/footer.php';
		
	}
	function Dashbord(){
		require 'bs-admin/dashbord.php';
		
	}
	function posBody(){
		require 'bs-content/pos-body.php';
		
	}
}

?>