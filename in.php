<!DOCTYPE html>
<html lang="en">
<head>
  <title>MOMOS MINIA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 

   
  <style type="text/css">
    
@import "https://fonts.googleapis.com/css?family=Raleway";
* { box-sizing: border-box; }
body { 
  margin: 0; 
  padding: 0; 
  background: #333;
  font-family: Raleway; 
  text-transform: uppercase; 
  font-size: 11px; 
}
.form-group label{
  font-size: 15px;
  color: red;
}
h1{ margin: 0; }
 { 
  -webkit-user-select: none; /* Chrome/Safari */        
  -moz-user-select: none; /* Firefox */
  -ms-user-select: none; /* IE10+ */
  margin: 4em auto;
  width: 100px; 
  height: 30px; 
  line-height: 30px;
  background: teal;
  color: white;
  font-weight: 700;
  text-align: center;
  cursor: pointer;
  border: 1px solid white;
}


.container {
    width: 85%;
    max-width: 600px;
    background: #f1f1f1;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 30px 40px;
    
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 0 20px #ffd800;
    font-family: "Montserrat",sans-serif;
}
.header{
  background:rgba(0,0,0,0.9);
  padding: 6px 24px;
  text-align: center;
  color: white;
  margin: 0px;
  letter-spacing: 5px;
  font: caption;
  font-size: 15px;
  text-transform: uppercase;
}
  .logo img{
  position: absolute;
  margin-top: 10px;
  margin-left: 60px;
  text-align: left;
  float: left;
  width: 50px;
    height: 40px;
}
.sticky-top {
  position: sticky;
  top:0px;
  background-color: black;
  margin: 0px;
  overflow: hidden;
   
}
.sticky-top a{
font: menu;
  text-decoration: none;
  font-size: 22px;
  letter-spacing: 1px;
  box-sizing: border-box;
   
  float: left;
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 65px;


}
.sticky-top a:hover{
  background:#ff9f12;
  color: black;

}

  </style>
  
</head>
<body>
<div class="logo"> <a href="#"><img src ="images1/logo1.png"></a>
    </div>
    <div class="header">
        
        <h3>ONLINE MOMOS ORDER</h3>
        
    </div>  
   
      <nav class="navbar sticky-top navbar-light bg-faded">  
    
        <a href="home4.html">Home</a>
      
        <a href="login.php">Login</a>
     
      
        <a  href="aboutus.html">About Us</a>
     
        <a  href="menu.html">Menu</a>
     
        <a  href="m.html">Order</a>
     
        <a  href="contactus.php">Contact Us</a>
     
        <a href="cart.php"><i class="fas fa-shopping-cart"></i><span id="cart-item" class="badge badge-danger"></a>
     </nav>   
<div class="container">
  <h1>Send sms</h1>
  <form action="send_sms.php" method="post">
    <div class="form-group">
      <label>Mobile No:</label>
      <input type="number" name="mno" class="form-control"  placeholder="Type Your Mobile no."  required="">
    </div>
   
   
   <div class="form-group">
 <button type="submit"  name="ok" class="btn btn-success" value="Send">Submit</button>

  </div>
  </form>
</div>

</body>
</html>
