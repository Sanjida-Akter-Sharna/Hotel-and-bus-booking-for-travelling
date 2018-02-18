<?php
$connection=mysqli_connect("localhost","root","mamun","militravel");
if(isset($_POST['name'])){$name = $_POST['name'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['address'])){$address = $_POST['address'];}
if(isset($_POST['avr'])){$avr = $_POST['avr'];}
if(isset($_POST['br'])){$br = $_POST['br'];}
if(isset($_POST['gvr'])){$gvr = $_POST['gvr'];}
if(isset($_POST['nnb'])){$nnb = $_POST['nnb'];}
if(isset($_POST['nnb2'])){$nnb2 = $_POST['nnb2'];}
if(isset($_POST['mnb'])){$mnb = $_POST['mnb'];}
if(isset($_POST['sr'])){$sr = $_POST['sr'];}
if(isset($_POST['cin'])){$cin = $_POST['cin'];}
if(isset($_POST['cout'])){$cout = $_POST['cout'];}
if(isset($_POST['submit'])){$submit=$_POST['submit'];}

if(isset($_POST['submit']) & isset($_POST['avr'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO r_ban_akashlina (name,address,email,room_type,ch_in,ch_out) VALUES ('$name','$address','$email','$sr','$cin','$cout')");
		
		
		header("location:payment.php");
	
}

if(isset($_POST['submit']) & isset($_POST['br'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO r_ban_marmareesa_1 (name,address,email,room_type,ch_in,ch_out) VALUES ('$name','$address','$email','$sr','$cin','$cout')");
		
		
		header("location:payment.php");
	
}

if(isset($_POST['submit']) & isset($_POST['gvr'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO r_ban_marmareesa_2 (name,address,email,room_type,ch_in,ch_out) VALUES ('$name','$address','$email','$sr','$cin','$cout')");
		
		
		header("location:payment.php");
	
}


if(isset($_POST['submit']) & isset($_POST['nnb'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO r_ban_nilangana_1 (name,address,email,room_type,ch_in,ch_out) VALUES ('$name','$address','$email','$sr','$cin','$cout')");
		
		
		header("location:payment.php");
	
}


if(isset($_POST['submit']) & isset($_POST['nnb2'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO r_ban_nilangana_2 (name,address,email,room_type,ch_in,ch_out) VALUES ('$name','$address','$email','$sr','$cin','$cout')");
		
		
		header("location:payment.php");
	
}

if(isset($_POST['submit']) & isset($_POST['mnb'] )){
	
		$insert= mysqli_query($connection,"INSERT INTO r_ban_meghdut (name,address,email,room_type,ch_in,ch_out) VALUES ('$name','$address','$email','$sr','$cin','$cout')");
		
		
		header("location:payment.php");
	
}










?>