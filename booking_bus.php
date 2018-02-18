<?php
$connection=mysqli_connect("localhost","root","mamun","militravel");
if(isset($_POST['name'])){$name = $_POST['name'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['address'])){$address = $_POST['address'];}
if(isset($_POST['a1'])){$a1 = $_POST['a1'];}
if(isset($_POST['a2'])){$a2 = $_POST['a2'];}
if(isset($_POST['a3'])){$a3 = $_POST['a3'];}

if(isset($_POST['cin'])){$cin = $_POST['cin'];}
if(isset($_POST['cout'])){$cout = $_POST['cout'];}
if(isset($_POST['submit'])){$submit=$_POST['submit'];}

if(isset($_POST['submit'])){
	
		$insert= mysqli_query($connection,"INSERT INTO bus (start,end,seat,ch_in,ch_out,name,address,email) VALUES ('$a1','$a2','$a3','$cin','$cout','$name','$address','$email')");
		
		
		header("location:payment.php");
	
}










?>