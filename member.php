<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/navigation.css" rel="stylesheet" type="text/css">
<style>

@media screen and (max-width: 580px) {
   #nd .row {margin-top:20%}
   
}


</style>
<script>

function check(){

var v= document.getElementById('milid');
var n= document.getElementById('m2');


if(document.getElementById('mil').checked==true){

 if (v.value==""||n.value==""){
	 
	
		
			alert('Please fill your military information');
			return false; 
	 }
	 
	 else{
			return true;	
			}
	 
 

}


}



</script>
</head>

<body style="background: url(background-1134468_960_720.jpg) fixed left">

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
						<li class="scroll "><a href="general_log_in.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
						
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 
    
<div class="row" style="margin-top:7%; margin-left:5%" id="nd">
<h1 style="text-align:center; color:hsla(0,30%,96%,1.00); font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size:48px">MEMBER REGISTRATION</h1>
<form class="jumbotron" style="width:1200px" onSubmit="return check()" action="civilpreg.php" method="post">

    <div class="checkbox" style="margin-left:2%">
  <label>
    <input type="checkbox" value="" id="f" name="cil" >
   <b> CIVILIAN</b>
  </label>
</div>

    
    
    <div class="checkbox" style="margin-left:2%">
  <label>
    <input type="checkbox" value="" id="mil"  >
   <b> MILITARY</b>
  </label>
</div>
    
    
    
  <div class="form-group" style="margin-left:2%">
    <label for="email">YOUR NAME:</label>
    <input type="text" class="form-control" id="email" style="width:40%;" name="yname" required>
  </div>
  <div class="form-group" style="margin-left:2%">
    <label for="pwd">NATIONAL ID:</label>
    <input type="text" class="form-control" id="pwd" style="width:40%" name="nid" required>
  </div>
    <div class="form-group" style="margin-left:2%">
    <label for="pwd">MILITARY ID:</label>
    <input type="text" class="form-control" id="milid" style="width:40%">
    <p id="345" style="color:#F81216; font-size:15px">Required:Military only</p>
  </div>
     <div class="form-group" style="margin-left:2%">
    <label for="pwd">MILITARY UNIT:</label>
    <input type="text" class="form-control" id="m2" style="width:40%">
   <p id="345" style="color:#F81216; font-size:15px">Required:Military only</p>
  </div>
  
   <div class="form-group"  style="margin-left:2%">
     <label>Address:</label>
   
      <textarea class="form-control" rows="2"  id="c" name="address" style="width:40%" name="address" required></textarea>
       
    
  </div>
  
    <div class="form-group" style="margin-left:2%">
    <label for="pwd">Email ID:</label>
    <input type="email" class="form-control" id="m2" style="width:40%" name="email" required>
  </div>
  <div class="form-group" style="margin-left:2%">
    <label for="pwd">PASSWORD:</label>
    <input type="password" class="form-control" id="m2" style="width:40%" name="pass">
  </div>
  <button type="submit" class="btn btn-default" style="margin-left:2%; margin-top:2%" name="submit">Submit</button>
</form>

</div>



<script src="jquery-2.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>