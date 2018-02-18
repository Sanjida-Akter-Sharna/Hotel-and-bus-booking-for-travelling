<?php
include 'db_config.php';

//Set useful variables for paypal form
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_id = 'almamunmistcse@gmail.com'; //Business Email

?>
<!DOCTYPE html>
<html lang="en">
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


@media screen and (min-width: 980px) {
   #jkm1 {margin-top:0%; }
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
<body>

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
                        
						<li class="scroll "><a href="member.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
						<li class="scroll "><a href="#our-team"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
						
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 


<div class="jumbotron" style="margin-top:6%" id="jkm1">
<h2 style="color:hsla(233,93%,23%,1.00); font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; text-align:center;">MILITRAVEL Payment Service (Paypal)</h2>
	<?php
		//fetch products from the database
		$results = $db->query("SELECT * FROM products");
		while($row = $results->fetch_assoc())
		{
	?>
   
   <h2> <br/>Name: <?php echo $row['name']; ?>
    <br/>Price: <?php echo $row['price']; ?></h2>
    <form action="<?php echo $paypal_url; ?>" method="post">

        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $row['name']; ?>">
        <input type="hidden" name="item_number" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="amount" value="<?php echo $row['price']; ?>">
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/paypal_integration_php/cancel.php'>
		<input type='hidden' name='return' value='http://localhost/paypal_integration_php/success.php'>

        
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0"
        src="1431389879455.png" alt="PayPal - The safer, easier way to pay online" height="50px" width="160px">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    
    </form>
   
    <?php } ?>
    
    </div> 
    
    <div class="row mcon" style="height:auto; background: hsla(0,11%,88%,1.00); margin-top:2%; margin-left:.5%" id="contm">
 
 
		
								<div class="row">
									
										<div style="text-align:center">
											<h1 style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; color:hsla(32,93%,50%,1.00); text-align:center">Contant with us</h1>
											<h3>If you have any question or problem let us know. You are always welcome for any kind of question </h3>
										</div>
									
								
							</div>
							
								
									
									<div class="row ">
										<div class="col-lg-4 col-sm-4 col-md-4 jumbotron" style="margin-left:2%">
											<div style="margin-left:2%">
                                            <address><p style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size:24px"><span style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size:36px; color:hsla(35,98%,49%,1.00)">MILI</span>TRAVELS</p>
                                            <strong>Let's Tavel.<br>Mirpur cantonment , Mirpur 12<br> 
                                            Dhaka-1200, Bangladesh</strong><br>
                                            <h4 style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; color:hsla(237,84%,39%,1.00)">MILITARY INSTITUTE OF SCIENCE AND TECHNOLOGY</h4>
                                            </address>
                                            </div>
										</div>
										<div class="col-lg-7 col-sm-7 col-md-7" style="margin-left:2%"> 
										
												
												<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
													<div class="form-group">
														<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>
														<div class="form-group">
															<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
														</div> 
														<div class="form-group">
															<textarea name="message" id="message" required class="form-control" rows="8" placeholder="Message"></textarea>
														</div> 
														<div class="form-group">
															<button type="submit" class="btn btn-primary">Send</button>
														</div>
													</form> 
												
											</div>
								
								</div> 
							<!--/#contact-->
 
 
 
 
 
 </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>
