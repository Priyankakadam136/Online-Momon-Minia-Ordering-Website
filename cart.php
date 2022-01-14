<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="order">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>Cart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="style3.css">
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
		<div class="row justify-content-center">
			<div class="col-lg-10">
			   <div style="display:<?php if(isset($_SESSION['showAlert'])){ echo $_SESSION['showAlert'];}else { echo 'none'; } unset($_SESSION['showAlert']);  ?>" class="alert alert-success alert-dismissible mt-3">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><?php if(isset($_SESSION['message'])){ echo $_SESSION['message'];}  unset($_SESSION['showAlert']);?>
                    </strong>
               </div>
				<div class="table-responsive mt-2">
					<table class="table table-bordered table-striped text-center">
						<thead>
						 <tr>
							<td colspan="7">
								<h4 class="text-center text-info m-0">Items in your cart!</h4>
							</td>
						 </tr>
						 <tr>
							<th>ID</th>
							<th>Image</th>
							<th>Item</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total Price</th>
							<th>
								<a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
							</th>
						 </tr>
						</thead>
                         <tbody>
                         	<?php
                         	  require 'config.php';
                         	  $stmt= $conn->prepare("SELECT * FROM cart2");
                         	  $stmt->execute();
                         	  $result = $stmt->get_result();
                         	  $grand_total = 0;
                         	  while($row = $result->fetch_assoc()):
                         	?>
                         	<tr>
                         		<td><?= $row['id'] ?></td>
                            <input type="hidden" class="pid" value="<?=$row['id'] ?>">
                         		<td><img src="<?= $row['product_image'] ?>" width="50"></td>
                         		<td><?=$row['product_name'] ?></td>
                         		<td>
                         			<i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2); ?>
                         	    </td>
                         	    <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                         		<td>
                         			<input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;">
                         		</td>
                         		<td>
                         			<i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?>
                         		</td>
                         		<td>
                         			<a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i>
                         			</a>
                         		</td>
                         	</tr>
                         	<?php $grand_total += $row['total_price'];  ?>
                         <?php endwhile; ?>	
                         <tr>
                         	<td colspan="3">
                         		<a href="index.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue Shopping</a>
                            </td>
                            <td colspan="2"><b>Grand Total</b></td>
                            <td><b><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></td>	
                            <td>
                              
                           
                           
                              <a href="register.php" class="btn btn-info<?= ($grand_total>1)?"":"disabled"; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                              
                            
                            </td>	
                         </tr>

                        </tbody>
					</table>
				</div>
			</div>
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

	  $(".itemQty").on('change', function(){
        var $el = $(this).closest('tr');

        var pid = $el.find(".pid").val();
        var pprice = $el.find(".pprice").val();
        var qty = $el.find(".itemQty").val();
        location.reload(true);
        $.ajax({
        	url:'action.php',
        	method: 'post',
        	cache: false,
        	data: {qty:qty,pid:pid,pprice:pprice},
        	success: function(response){
              console.log(response);
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