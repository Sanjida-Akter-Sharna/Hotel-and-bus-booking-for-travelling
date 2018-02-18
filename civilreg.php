<?php
$connection=mysqli_connect("localhost","root","mamun","militravel");
if(isset($_POST['cil'])){$cil = $_POST['cil'];}
if(isset($_POST['mil'])){$mil = $_POST['mil'];}
if(isset($_POST['address'])){$address = $_POST['address'];}
if(isset($_POST['nid'])){$nid = $_POST['nid'];}
if(isset($_POST['yname'])){$yname = $_POST['yname'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['pass'])){$pass = $_POST['pass'];}
if(isset($_POST['submit'])){$submit=$_POST['submit'];}


if(isset($_POST['submit']) & isset($_POST['cil'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO civilmember (name,nid,address,email,password) VALUES ('$yname','$nid','$address','$email','$pass')");
		
		
		echo "<h1>Successfully Registered</h1>";
	
}





?>