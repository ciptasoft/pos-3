<?php 
// var_dump($_SERVER['REQUEST_URI']);
require_once('core/function.php');

$bsCore = new bsCore();
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url,'?ref=') == false && $_SERVER['REQUEST_URI']!='/' ){
	$bsCore::Header();
	require 'bs-content/404.php';

	$bsCore::Footer();
}
else
{
	$bsCore::Header();
	$bsCore::main();
	$bsCore::Footer();
}
?>
