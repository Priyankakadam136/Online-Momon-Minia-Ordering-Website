<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="order">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>order</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style3.css">
<style type="text/css">
         body{
         	font-family: 'Lato', sans-serif;
         	background: linear-gradient(90deg, #00aaee 10%, #DD2476 90%);
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
		<div id="message"></div>
		<div class="row mt-2 pb-3">
		 <?php
			include 'config.php';
			$stmt= $conn->prepare("SELECT * FROM special1");
			$stmt->execute();
			$result = $stmt->get_result();
			while($row = $result->fetch_assoc()):

		 ?>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
    
			<div class="col-sm-6 com-md-4 col-lg-3 mb-2">
				<div class="card-deck">
				 <div class="card p-2 border-secondary mb-2">
					<img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
					<div class="card-body p-1">
						<h4 class="card-title text-center text-info"><?= $row['product_name'] ?> </h4>
						<h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign">&nbsp;&nbsp;</i><?=number_format($row['product_price'],2) ?>/-</h5>
					</div>
					

				<div class="card-footer p-1">
					<form action="" class="form-submit">
						<input type="hidden" class="pid" value="<?=$row['id'] ?>">
						<input type="hidden" class="pname" value="<?=$row['product_name'] ?>">
						<input type="hidden" class="pprice" value="<?=$row['product_price'] ?>">
						<input type="hidden" class="pimage" value="<?=$row['product_image'] ?>">
						<input type="hidden" class="pcode" value="<?=$row['product_code'] ?>">
						<button class="btn btn-danger btn-block addItemBtn"><i class="fas fa-cart-plus">
						</i>&nbsp;&nbsp;Add to cart</a></button>
					</form>
						
				</div>	
			  </div>
			 </div>  	
			</div>
		<?php endwhile; ?>	
		</div>
	</div>
				
	

	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	 $(".addItemBtn").click(function(e){
	   e.preventDefault();
       var $form = $(this).closest(".form-submit");
       var pid = $form.find(".pid").val();
       var pname = $form.find(".pname").val();
       var pprice = $form.find(".pprice").val();
       var pimage = $form.find(".pimage").val();
       var pcode = $form.find(".pcode").val();
      
      $.ajax({
        url: 'action.php' ,
        method: 'post',
        data: {pid:pid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
        success:function(response){
           $("#message").html(response);
           window.scrollTo(0,0);
           load_cart_item_number();
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