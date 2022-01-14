<?php
  require 'config.php';

  $grand_total = 0;
  $allItems = '';
  $items = array();

  $sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart2";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  while($row = $result->fetch_assoc()){
    $grand_total +=$row['total_price'];
    $items[] = $row['ItemQty'];


  }
  $allItems = implode(", ", $items);
  
 
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="order">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <title>CheckOut</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  
 <style type="text/css">
    body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
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
.sticky-top{
  position: sticky;
  top:0px;
  background-color: black;
  margin: 0px;
  overflow: hidden;

}
.sticky-top a{
  font: menu;
  text-decoration: none;
  font-size: 24px;
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
<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
 
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
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?> </h6>
          <h6 class="lead"><b>Delievery Charge:</b>FREE</h6>
          <h5><b>Total Amount Payable : </b><?= number_format($grand_total,2) ?>/-</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type ="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter Your E-mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Your Mobile no." required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Mode</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
    
            </select>
                    </div>  
                    <div class="form-group">
      <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
                    </div>
                   
        </form>
      </div>

    </div>
  </div>
        
  

  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
   
   $("#placeOrder").submit(function(e){
        e.preventDefault();
        $.ajax({
          url: 'action.php',
          method: 'post',
          data: $('form').serialize()+ "&action=order",
          success: function(response){
            $("#order").html(response);
          } 
        });
   });
      
      load_cart_item_number();

      function load_cart_item_number(){
        $.ajax({
          url: 'action.php',
          method: 'get',
          data: {cartItem:"cart_item"},
         success:function(response){
           $("#cart-item").html(response);

        }
      });
     } 
  });
  
    
</script>
</body>
</html>