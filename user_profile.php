<?php
// Start the session
session_start();
?>
<?php 

$connection=mysqli_connect("localhost","root","mamun","militravel");


if (mysqli_connect_errno()){
	die("Database connection failed: ".mysqli_connect_errno()."(".mysqli_connect_errno().")");
}
?>
<?php
$query= "select * from civilmember";             
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
       
       
       document.getElementById("hover").src ="a1.jpg";
		
    });
	   $("#hover").mouseleave(function(){
       
       
       document.getElementById("hover").src ="o-BANGLADESH-CHILDREN-facebook.jpg";
		
    });
	
});



$(document).ready(function(){
    $("#y3").mouseover(function(){
       
       
       document.getElementById("y3").src ="j2.jpg";
		
    });
	   $("#y3").mouseleave(function(){
       
       
       document.getElementById("y3").src ="IMG_5011.JPG";
		
    });
	
});

$(document).ready(function(){
    $("#y1").mouseover(function(){
       
       
       document.getElementById("y3").src ="j2.jpg";
		
    });
	   $("#y3").mouseleave(function(){
       
       
       document.getElementById("y3").src ="IMG_5011.JPG";
		
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
       
       
       document.getElementById("y1").src ="maxresdefault.jpg";
		
    });
	
});






</script>
</head>

<body style=" background:#D3CECF">

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
                                         <li><a href="#">BANDARBAN</a></li>
                                         <li><a href="#">COX'x BAZAR</a></li>
                                         <li><a href="#">SYLHET</a></li> 
                                          
                                   </ul>
                       </li>
                        
						<?php if(!empty($_SESSION)) { ?> 
						<li class="scroll "><a href="logoutmain.php"><span class="glyphicon glyphicon-log-in"></span>logout</a></li> 
						<?php } ?>
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 
    



<center><div class="container" style="margin-left:5%; margin-top:8%">
<header class="page-header img-responsive" style="background:hsla(0,6%,61%,1.00); height:200px">
<h1 style=" font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif, 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-size:60px; color: hsla(241,93%,16%,1.00)" id="h1id1"><center>MILITRAVEL</center></h1>
<h2 style="color: hsla(28,93%,23%,1.00)"><center>MILITRAVEL makes your travelling easy &amp; safe</center></h2>
</header>
<h1 style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><center>USER PROFILE</center></h1>

<div class="row">
<div class="col-lg-3">
<?php
  $name=  $_SESSION["name1"];  
		$query= mysqli_query($connection,"select * from civilmember");
		while($row=mysqli_fetch_object($query)){ 
		
		 if( $row->name==$name){
		?>
        
        
      
        
<?php
		 }
		}
?>
</div>
<div class="col-lg-9 pull-left">

<?php
       // custlog page er variable ta ei page onno akta variable a nilam 
  
while($subject=mysqli_fetch_assoc($result)){ 

      if( $subject["name"]==$name){         // jdi row theke je name ta paisi r jeta form a disi aki hoy
?>


<div class="row">
<div class="col-lg-6" >
<h2 style="color: #230894">CUSTOMER NAME:</h2>
</div>
<div class="col-lg-6">
<h2><?php	 echo $subject["name"];?><br></h2>
</div>
</div>

<div class="row">
<div class="col-lg-6">
<h2 style="color: #230894">NATIONAL ID:</h2>
</div>
<div class="col-lg-6">
<h2><?php	 echo $subject["nid"];?></h2><br>
</div>
</div>


<div class="row">
<div class="col-lg-6">
<h2 style="color: #230894">ADDRESS:</h2>
</div>
<div class="col-lg-6">
<h2><?php	 echo $subject["address"];?></h2><br>
</div>
</div>


<div class="row">
<div class="col-lg-6">
<h2 style="color: #230894">EMAIL:</h2>
</div>
<div class="col-lg-6">
<h2><?php	 echo $subject["email"];?></h2><br>
</div>
</div>


<?php
//session_destroy();
	  }
};                                            

?>
</div>
</div>

</div>


</body>
</html>