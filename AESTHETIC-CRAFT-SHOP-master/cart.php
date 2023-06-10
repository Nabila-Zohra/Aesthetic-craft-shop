<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break;
    }
}

}
?>
<html>
<head>
<title>Shopping Cart</title>
<link rel='stylesheet' href='styles.css' type='text/css' media='all' />
</head>
<body>


<div class="box1">
        <ul>
            <li><a href="">BDT</a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            <li><a href="">English</a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            <li><a href=""></a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            <li><a href=""></a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            </ul>
        </div>
        
        <div class="subbox">
            
            <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="">Offers</a></li>
            <li><a href="contact.php">Contact Us</a></li>

            
            </ol>
        
          
            <h2> Aesthetic Craft Shop</h2>
           
            
        </div>

 


            <h7> Shopping Cart </h7>
            
<div style="width:700px; margin:50 auto;">


      <!-- <h2>Shopping Cart</h2> -->

      <?php
      if(!empty($_SESSION["shopping_cart"])) {
      $cart_count = count(array_keys($_SESSION["shopping_cart"]));
      ?>
      <div class="cart_div">
      <a href="cart.php">
      <img src="cart-icon.png" /> Cart
      <span><?php echo $cart_count; ?></span></a>
</div>

<?php
    }
?>

<div class="cart">
<?php
  if(isset($_SESSION["shopping_cart"])){
      $total_price = 0;
?>

<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>
<?php
foreach ($_SESSION["shopping_cart"] as $product){
?>

<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>


<td>
<form method='post' action=''>

<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />


<select name='quantity' class='quantity' onChange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>

</form>


</td>
<td><?php echo "$".$product["price"]; ?></td>
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
</tr>



<?php

  if (isset($_SESSION['username']))
   {
       $userName = $_SESSION['username'];
   
  
   }
 

	    
   
 


$total_price += ($product["price"]*$product["quantity"]);
$price =$product["price"];
$quantity =$product["quantity"];
$productName =$product["name"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "craft shop";

$connection = mysqli_connect($servername, $username, $password, $dbname);





$sql = "INSERT INTO orderconfirm VALUES(  '$userName','$productName',$quantity,$price,$total_price)";
 $result = mysqli_query($connection, $sql);

 if($result) {
  echo "";
 } else {
  echo "Error: ".$sql."<br>".mysqli_error($connection);
}

}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}

	
?>



<div class= "confirmOrder">
<a href="order.php"><button type='submit' class='order'>Confirm Order</button></div>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


</div>







</body>
</html>
