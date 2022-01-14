<html>
<head>
    <title>Contact us form </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <style type="text/css">
        body {
    margin: 0;
    padding: 0;
    background: url(images1/momo.jpg);
    background-size: cover;
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
    margin-top: 40px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 0 20px #ffd800;
    font-family: "Montserrat",sans-serif;
}
    </style>
</head>
<body>
    <div class="logo"> <a href="#"><img src ="images1/logo1.png"></a>
    </div>
    
    <div class="menu">
        
    
        <a href="home4.html">Home</a>
      
        <a href="login.php">Login</a>
     
      
        <a  href="aboutus.html">About Us</a>
     
        <a  href="menu.html">Menu</a>
     
        <a  href="m.html">Order</a>
     
        <a  href="contactus.php">Contact Us</a>
     
        <a href="cart.php"><i class="fas fa-shopping-cart"></i><span id="cart-item" class="badge badge-danger"></a>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
       
        <br>
    <div class="container">

        <h3>Contact Us</h3>

        <form action="formcon.php" method="POST">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname" placeholder="Enter Your Firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" placeholder="Enter Your Lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Mobile No.</label>
                <input type="tel" name="phone" id="phone" placeholder="Enter Your Mobile No. " class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email-Id</label>
                <input type="email" name="email" id="email" Placeholder="Enter Your Email-Id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" name="message" id="message" placeholder="Enter Your Message" class="form-control" required>
            </div>
            <div class="form-group">
   <button class="btn btn-success"  type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
    
        </form>
    </div>
</body>

</html>
