<?php
session_start();
include_once("db_connect.php");

if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email. "' and pass = '" . md5($password). "'");
	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['user_id'] = $row['uid'];
		$_SESSION['user_name'] = $row['user'];
			$success_message = "Successfully login!";
			header("Location:checkout.php");
	} else {
		$error_message = "Incorrect Email or Password!!!";
	}
}
?>
<link rel="stylesheet" type="text/css" href="stylelog.css">
<link rel="stylesheet" type="text/css" href="style3.css">
<style type="text/css">
	body{
    margin: 0;
    padding: 0;
   background:url(images1/bglo.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
    h1{
margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
    color: #000000;

}
.form-group label{
    	color: #000000;
    }
    .form-group input{
    width: 100%;
    margin-bottom: 20px;
}
  
.form-group input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #000000;
    font-size: 16px;
}    



</style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css" />
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="" crossorigin="anonymo3">

<body>
	<div class="menu">
		
    
        <a href="home4.html">Home</a>
      
        <a href="login.php">Login</a>
     
      
        <a  href="aboutus.html">About Us</a>
     
        <a  href="menu.html">Menu</a>
     
        <a  href="m.html">Order</a>
     
        <a  href="contactus.php">Contact Us</a>
     
        <a href="cart.php"><i class="fas fa-shopping-cart"></i><span id="cart-item" class="badge badge-danger"></a>
        </div>
<div class="container">
	<h1>Login</h1>		
	
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				
									
			   <div class="form-group">
					<label for="name">Email</label>
				
			<input type="text" name="email" placeholder="Your Email" required class="form-control" />

				</div>	
				<div class="form-group">
					<label for="name">Password</label>
					<input type="password" name="password" placeholder="Your Password" required class="form-control" />
				</div>	
				<div class="form-group">
					<input type="submit" name="login" value="Login" class="btn btn-primary"/>
				</div>
				    New User? <a href="register.php">Sign Up Here</a>
			</form>
			<span class="text-success"><?php if (isset($success_message)) { echo $success_message; } ?></span>
			<span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
		
	
		
		
		
</div>
</body>