<?php
$servername="localhost";
$username="edison";
$password="";
//$dbname="map";
$dbname="ci_google_maps_api";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
		die("Connection Failed".$conn->connect_error);
	}else{
	//echo "connected";
}

?>
