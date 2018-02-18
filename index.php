<?php session_start(); ?>
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

<body style=" background: url(background-1134468_960_720.jpg) fixed; opacity:0.9" >
<div class="preloader">
   <div class="preloder-wrap">
   <div class="preloder-inner">
	<div class="loader"></div>
    </div>
    </div>
    </div>
    <!--/.preloader-->



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
                       <li class="scroll"><a href="bus_book.php">Bus Booking</a></li>
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
    
    
    
    
  

    <div class="row" style="height:auto; width:100%; margin-top:6%; margin-left:0px; margin-bottom: 5%" id="me1"> 
    
        <div class="col-lg-6 col-md-6 col-sm-12" style="height: auto; color:  #0B0B2D; ">
            <div class="row"  style="height:103%; opacity:.9; border:solid 2px #04044B; background:hsla(0,5%,81%,1.00); margin-left:1%">
           <h2 style=" font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; text-align:center">Search for your desired location:</h2>
            <div class="container">
  
              <form action="search.php" method="post">
                     <label for="sel1">Search for:</label>
                       <select class="form-control" id="sel1" style="width:20%">
                               <option>Hotel</option>
                               <option>Bus</option>
   
                        </select>
                     <div class="form-group">
                             <label for="usr">Destination or Place:</label>
                             <input type="text" class="form-control" id="usr" style="width:40%" name="place">
                    </div>
               
                    <div class="form-group">
                     <label for="pwd">Checkin Date:</label>
                     <input type="date" class="form-control" id="in2" style="width:30%">
                     <label for="pwd">Checkout Date:</label>
                     <input type="date" class="form-control" id="in3" style="width:30%">
                   </div>
                   
                   
                    <button type="submit" class="btn btn-default" name="sub">Search</button>
               </form>
</div>
            </div>
            
         <div class="row" style="height: auto; margin-left:1%">   
      <h1 style="text-align:center; font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; color:hsla(0,11%,96%,1.00)">What is exiciting about Militravel:</h1>
            
            
            
            
            
            
   <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:5%;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="bangladesh-natural-paradise-earth.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="bangladesh-natural-paradise-earth.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="bangladesh-natural-paradise-earth.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="bangladesh-natural-paradise-earth.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            
 </div>
 
 <div class="row" style="margin-top:3%; margin-left:1%">
 
  <div class="jumbotron">
    <h1 style="text-align:center; color:hsla(359,89%,50%,1.00)">Exiciting Offers!!!</h1>
    <p style="text-align:center">To check latest offers and discounts click here.</p>
   <button class=" btn btn-block btn-success">CLICK HERE</button>
  </div>
       
            
            
            
 </div>  
 
 
 <div class=" jumbotron row" style="margin-top:1%; margin-left:1%; padding-bottom:5%">
 <h1 style="text-align:center; font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; margin-top:-2%">USER RATING.</h1>
 <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" style="width:80%">
    ***** (5 star)
  </div>
</div>

<div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
  aria-valuemin="0" aria-valuemax="100" style="width:50%">
    **** (4 star)
  </div>
</div>

<div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
  aria-valuemin="0" aria-valuemax="100" style="width:60%">
    *** (3 star)
  </div>
</div>

<div class="progress" >
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10"
  aria-valuemin="0" aria-valuemax="100" style="width:10%">
    ** (2 star)
  </div>
</div>
  <div>
  
  <h3>User rating is changed frequently by collecting info from user comments.
  If you have any suggestion for us please cotact us or do comment. 
  Thank you :)
  </h3>
  </div>

  
 </div>   
  
            
 </div>
    
        <div class="col-lg-6 col-md-6 col-sm-12 kio" style="height:auto;" id="kof">
        
       <a href="Bandarban.php">    <div class="row" style="height:25%; border: 2px #080A51 groove; margin-left:.25%;">
           <div class="row" style="height:15%; width:100%; font-size:30px; margin-left:0%; margin-top:0%; border-bottom: solid 2px hsla(0,2%,42%,1.00); background-color:hsla(0,5%,89%,1.00)">
         
           <p  id="jq1" style="text-align:center; font-size-adjust:inherit; font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; color: #0B0B2D; margin-left:0%">Bandarban</p>
         
           </div>
           <div class="row" style="height:85%; width:100%; margin-left:0%; margin-top:1%">
           
            <img class="hov img-rounded"  src="images/nilgiri.jpg" height="96%" width="100%" id="hover">
           
           
           </div>
           </div>
        </a>   
         <a href="jamunamain.php">    <div class="row" style="height:25%; border: 2px #080A51 groove; margin-left:.25%;margin-top:2.7%">
           <div class="row" style="height:15%; width:100%; font-size:30px; margin-left:0%; margin-top:0%; background-color:hsla(0,5%,89%,1.00); border-bottom:hsla(0,2%,47%,1.00) 2px solid">
           <p id="jq2" style="text-align:center; font-size-adjust:inherit; font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; color: #0B0B2D">Jamuna</p>
           </div>
           <div class="row" style="height:85%; width:100%; margin-left:0%; margin-top:1%">
           <img  class=" img-rounded" src="images/j3.jpg" height="96%" width="100%" id="y3">
           </div>
           </div>
          </a> 
           
           
           
        <a href="rangamatimain.php"><div class="row" style="height:25%; border: 2px #080A51 groove; margin-left:.25%;margin-top:1%">
           <div class="row" style="height:15%; width:100%; font-size:30px; margin-left:0%; margin-top:0%; border-bottom: 2px solid hsla(0,2%,49%,1.00);background-color:hsla(0,5%,89%,1.00);">
           <p id="jq3" style="text-align:center; font-size-adjust:inherit; font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; color: #0B0B2D">RANGAMATI</p>
           </div>
           <div class="row" style="height:85%; width:100%; margin-left:0%; margin-top:1%">
           <img class="img-rounded"  src="images/Rangamati.png" height="96%" width="100%" id="y1">
           </div>
           </div>
         </a>  
           
           
           
           
            <div class="row" style="height:25%; border: 2px #080A51 groove; margin-left:.25%;
            margin-top:1%">
           <div class="row" style="height:15%; width:100%; font-size:30px; margin-left:0%; margin-top:0%; background-color: hsla(0,5%,89%,1.00); border-bottom: 2px solid hsla(0,3%,40%,1.00)">
           <p id="jq4" style="text-align:center; font-size-adjust:inherit; font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; color: #0B0B2D; ">Cox's Bazar</p>
           </div>
           <div class="row" style="height:85%; width:100%; margin-left:0%; margin-top:1%">
           <img class=" img-rounded" src="beauty-of-coxbazar.jpg" height="96%" width="100%" id="y2">
           </div>
           </div>
           
      </div>   
    
</div> 
  <div class="row jumbotron" style="margin-left:1%" >
  
  <h4>MILITRAVEL is very much secured and user friendly web application. Both Military and civilian can get benifite from it.<br>
  <hr>
  Our moto is <span style="color:hsla(252,88%,32%,1.00)"><b>MAKE YOUR TRAVEL SAFE AND EASY</b></span></h4>
  <h2 style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; text-align:center">If you want to give a feedback </h2>
  <button  class=" btn btn-primary btn-group-vertical center-block"><a href="comment2.php"><h2 style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif"><p style="color:hsla(0,8%,92%,1.00)">Click Here</p></h2></a></button>
  
  </div> 
<div class="row well img-rounded" style=" height:auto; margin-top:0%; margin-left:1%">
<h1 style="text-align:center; font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif">OUR TEAM</h1>
 <a class="btn btn-block btn-primary" href="authority_log_in.php" style="margin-bottom:10px; font-size:20px "><strong>Authority Area</strong></a>
<div class="row" style="margin-left:2%">
<div class="col-lg-1 col-md-1 col-sm-1" style="margin-left:8%">

<img class=" img-rounded" src="14753890_1774462182812320_1750960789486785804_o.jpg" height="100px">
<h4 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">AL MAMUN</h4>


</div>
<div class="col-lg-1 col-md-1 col-sm-1" style="margin-left:4%">

<img class="img-rounded" src="13173478_1720277098260858_8641282633317176815_o.jpg" height="100px">
<h4 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">SUZANA RAFI</h4>

</div>
<div class="col-lg-1 col-md-1 col-sm-1" style="margin-left:4%">

<img class="img-rounded" src="1939557_10152507581934163_7697401027574278994_n.jpg" height="100px">
<h4 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">MAJ MAMUN</h4>

</div>
<div class="col-lg-1 col-md-1 col-sm-1" style="margin-left:4%">


<img class="img-rounded" src="11742685_10201049493676419_7826032710352342180_n.jpg" height="100px">
<h4 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">MAJ JANNAT</h4>

</div>
<div class="col-lg-1 col-md-1 col-sm-1" style="margin-left:4%">

<img class="img-rounded" src="1891153_10208603482911519_5098523124483041830_n.jpg" height="100px">
<h4 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">MAJ SAKIB</h4>


</div>
<div class="col-lg-1 col-md-1 col-sm-1" style="margin-left:4%">


<img class="img-rounded" src="12885823_10208760391184920_8053173106505757635_o.jpg" height="100px">
<h4 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">MAJ SHAHID</h4>

</div>
<div class="col-lg-1 col-md-1 col-sm-1" style="margin-left:4%">


<img class="img-rounded" src="14608836_1109852765773140_6413757680018010444_o.jpg" height="100px">
<h4 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">ASHRAF ALI</h4>

</div>



</div>

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


 <div class="row" style="height:50%; margin-left:4%; margin-right:4%; margin-bottom:120px; margin-top:5%" >
 <div class="col-lg-12 col-md-12 col-sm-12" style="height:100%">
 <h1 style="text-align:center; color: hsla(0,45%,98%,1.00); font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif">Locate your desired place:</h1>
     <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div id="map"></div>
    <script>
     

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
 
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjey_9YWfC6eOoVxrCIbKlVsFQUlFtSWk&libraries=places&callback=initAutocomplete"
         async defer></script>
  
 </div>
 </div> 
 


<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>