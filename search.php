<?php
//session_start();

?>
<?php
$connection=mysqli_connect("localhost","root","mamun","militravel");
if(isset($_POST['place'])){$place = $_POST['place'];}

if(isset($_POST['sub'])){$sub = $_POST['sub'];}

?>
<?php
			
			if(isset($_POST["sub"]) ) { // jkhn submit button a press korbo
			$query = "SELECT place_name FROM hotel ";   // ei operation ta chalabo  
			$result = mysqli_query($connection,$query);
			
				while ($row = mysqli_fetch_assoc($result)) {          // akta akta kore row porbe
					if($place == $row["place_name"]) {  // jdi daoua name and password table er name ar password er shate match  
					
				     
						header("location:$place.php"); // tahole ei page a jabo 
					   
					  
					   
						exit; // o break korlam	
					}
				}
				
				$message = "Search for a valid place"; // jdi na kore akta meggase print korbo (niche function disi)
			}
			
?>
<?php
                if(isset($_POST["sub"]) && isset($message)) {
					?>
                  <h2 style="color:#FD0509"> <?php  echo $message;	
                }
        ?></h2>