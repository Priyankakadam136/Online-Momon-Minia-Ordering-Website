<?php

include("config1.php");
extract($_POST);
$sql = "INSERT INTO `contactdata`(`firstname`, `lastname`, `phone`, `email`, `message`) VALUES ('".$firstname."','".$lastname."',".$phone.",'".$email."','".$message."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
  $result = "Thankyou For Contacting Us.\\nWe will Reply you soon!!.";
  echo "<script type='text/javascript'>alert('$result');</script>";
 
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="logo"> <a href="#"><img src ="images1/logo1.png"></a>
	</div>
	<div class="header">
		
		<h3>ONLINE MOMOS ORDER</h3>
		
	</div>	
	<div class="menu">
		
    
        <a href="home4.html">Home</a>
      
        <a href="login.php">Login</a>
     
      
        <a  href="aboutus.html">About Us</a>
     
        <a  href="menu.html">Menu</a>
     
        <a  href="m.html">Order</a>
     
        <a  href="contactus.php">Contact Us</a>
     
        <a href="cart.php"><i class="fas fa-shopping-cart"></i><span id="cart-item" class="badge badge-danger"></a>
      <div class="image-container">
		<img src="images1/h.jpg" class="image"/>
		 <div class="text-center">
		<div class="main-content-header">
			<h1>  <span class="colorchange">Welcome to Momos Minia</span><br>
				 
				Order Your Favourite Momos Now!! </h1>
           
			
		</div>
   </div>
	</div>
	
   <script type="text/javascript">
		
		function slideshow(){
			 var x = document.getElementById('check-class');
			 if(x.style.display === "none"){
			 	x.style.display="block";
			 }else{
			 	x.style.display="none";
			 }
		}	

	</script>
</body>
</html>

