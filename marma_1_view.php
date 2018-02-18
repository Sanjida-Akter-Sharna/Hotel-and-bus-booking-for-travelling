<?php session_start(); ?>
<?php 

$connection=mysqli_connect("localhost","root","mamun","militravel");


if (mysqli_connect_errno()){
	die("Database connection failed: ".mysqli_connect_errno()."(".mysqli_connect_errno().")");
}
?>
<?php
$query= "select * from r_ban_marmareesa_1";             
$result= mysqli_query($connection,$query);   
if(!$result){die("Database query failed");}  



?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<title>Militravel</title>
<script src="jquery-2.2.1.min.js"></script>
<link href="preloader.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/navigation.css">
<link rel="stylesheet" type="text/css" href="css/popularlocation.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">

   <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      #target {
        width: 345px;
      }
    </style>

        
    
<style>

@media screen and (max-width: 580px) {
   #me1 .row {margin-top:20%; }
   
}
@media screen and (max-width: 980px) {
   #me1 .row {margin-top:15%; }
}
@media screen and (max-width: 580px) {
   #kof .kio { align-content:flex-start}
   
}




</style>
<script>
$(document).ready(function(){
    $("#jq1").mouseover(function(){
        var div = $("#jq1");
       
        div.animate({fontSize: '40px'}, "slow");
		
		
    });
	 $("#jq1").mouseleave(function(){
        var div = $("#jq1");
       
          div.animate({fontSize: '30px'}, "slow");
		
    });
});

$(document).ready(function(){
    $("#jq2").mouseover(function(){
        var div = $("#jq2");
       
        div.animate({fontSize: '40px'}, "slow");
		
    });
	 $("#jq2").mouseleave(function(){
        var div = $("#jq2");
       
          div.animate({fontSize: '30px'}, "slow");
		
    });
});
$(document).ready(function(){
    $("#jq3").mouseover(function(){
        var div = $("#jq3");
       
        div.animate({fontSize: '40px'}, "slow");
		
    });
	 $("#jq3").mouseleave(function(){
        var div = $("#jq3");
       
          div.animate({fontSize: '30px'}, "slow");
		
    });
});

$(document).ready(function(){
    $("#jq4").mouseover(function(){
        var div = $("#jq4");
       
        div.animate({fontSize: '40px'}, "slow");
		
    });
	 $("#jq4").mouseleave(function(){
        var div = $("#jq4");
       
          div.animate({fontSize: '30px'}, "slow");
		
    });
});



$(document).ready(function(){
    $("#hover").mouseover(function(){
       
       
       document.getElementById("hover").src ="nilachol.jpg";
		
    });
	   $("#hover").mouseleave(function(){
       
       
       document.getElementById("hover").src ="images/nilgiri.jpg";
		
    });
	
});



$(document).ready(function(){
    $("#y3").mouseover(function(){
       
       
       document.getElementById("y3").src ="images/j1.jpg";
		
    });
	   $("#y3").mouseleave(function(){
       
       
       document.getElementById("y3").src ="images/j3.jpg";
		
    });
	
});



$(document).ready(function(){
    $("#y2").mouseover(function(){
       
       
       document.getElementById("y2").src ="yo.jpg";
		
    });
	   $("#y2").mouseleave(function(){
       
       
       document.getElementById("y2").src ="beauty-of-coxbazar.jpg";
		
    });
	
});

$(document).ready(function(){
    $("#y1").mouseover(function(){
       
       
       document.getElementById("y1").src ="nilachol.jpg";
		
    });
	   $("#y1").mouseleave(function(){
       
       
       document.getElementById("y1").src ="images/Rangamati.png";
		
    });
	
});






</script>


</head>

<body style="background: #A7A3A4">


<header id="navigation"> 
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
			<div class="container"> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
					</button> 
					<a class="navbar-brand" href="index.php"><h1><img class="img-rounded img-responsive" src="Untitled-1.png" alt="logo" style="height:40px; width:150px"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll"><a href="index.php">Home</a></li> 
						 <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Popular locations
                                   <span class="caret"></span></a>
                                   <ul class="dropdown-menu">
                                         <li><a href="Bandarban.php">BANDARBAN</a></li>
                                         <li><a href="Jamuna.php">JOMUNA</a></li>
                                         <li><a href="Rangamati.php">RANGAMATI</a></li> 
                                         <li><a href="Jamuna.php">COX's BAZAR</a></li> 
                                          
                                          
                                   </ul>
                       </li>
                        <?php if(empty($_SESSION)) { ?>
						<li class="scroll "><a href="member.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
						<li class="scroll "><a href="general_log_in.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
                        <?php } ?>
                        <?php if(!empty($_SESSION)) { ?> 
						<li class="scroll "><a href="logoutmain.php"><span class="glyphicon glyphicon-log-in"></span>logout</a></li> 
						<?php } ?>
						
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 
<div class="container" style=" background:#EBE7E7;margin-left:1%; margin-top:5%; width:100%">

<h1 style="text-decoration:underline; font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; color:hsla(241,90%,20%,1.00)"><center>REQUEST FOR MARMA RESSA 01 BANDARBAN</center></h1>




<?php
        // custlog page er variable ta ei page onno akta variable a nilam 
 $a=1;
while($subject=mysqli_fetch_assoc($result)){ 

               // jdi row theke je name ta paisi r jeta form a disi aki hoy
?>
 
 <h4 style=" margin:20px;">
 <br>
 <center> Serial no: <?php echo $a; ?><br><br></center>
 
  NAME:     <?php	echo $subject["name"];
                        $_SESSION["name5"] = $subject["name"];
  ?> <br>  <br> 
  ID:  <?php	 echo $subject["id"];?> <br><br>
  EMAIL ID:      <?php	 echo $subject["email"];?> <br><br> 
  ADDRESS:      <?php echo $subject["address"];?><br> <br>  
  ROOM TYPE:     <?php	 echo $subject["room_type"];?><br>  <br> 
  CHECK IN DATE:     <?php	 echo $subject["ch_in"];?><br> <br> 
  CHECK OUT DATE:<?php	 echo $subject["ch_out"];?><br> <br> 

   <hr> 
 </h4>   
<hr>          	
<?php
$a++;
	  
};                                            

?>

</div>


</body>
</html>