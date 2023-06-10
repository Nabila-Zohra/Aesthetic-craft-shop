<html>
<head>
    <title>Aesthetic Craft Shop</title>

    <link rel="stylesheet" type="text/css" href="shop.css">



    </head>
    <body>

        <div class="box1">
        <ul>
            <li><a href="">BDT</a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            <li><a href="">English</a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            <li><a href="register.php"></a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            <li><a href="login.php"></a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
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

            <div class="search-container">
            
            <form action="searchPaperCraft.php" method = "post">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit">Submit</button>
            </form>
            </div>

        </div>
        <h7>Paper Crafts</h7>

        </div>




      <?php
      session_start();
      include('db.php');
      $status="";
      
      if (isset($_POST['code']) && $_POST['code']!=""){
      $code = $_POST['code'];
      $result = mysqli_query($con,"SELECT * FROM `papercraft` WHERE `code`='$code'");
      $row = mysqli_fetch_assoc($result);
      $name = $row['name'];
      $code = $row['code'];
      $price = $row['price'];
      $image = $row['image'];

      $cartArray = array(
        $code=>array(
        'name'=>$name,
        'code'=>$code,
        'price'=>$price,
        'quantity'=>1,
        'image'=>$image)
      );

      if(empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $status = "<div class='box'>Product is added to your cart!</div>";
      }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if(in_array($code,$array_keys)) {
          $status = "<div class='box' style='color:red;'>
          Product is already added to your cart!</div>";
        } else {
        $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
        $status = "<div class='box'>Product is added to your cart!</div>";
        }

        }
      }
		?>

    <title>Paperx Crafts</title>
    
    </head>
    <body>
   
    <div class = "container">



    <?php
    if(!empty($_SESSION["shopping_cart"])) {
    $cart_count = count(array_keys($_SESSION["shopping_cart"]));
    ?>
    <div class="cart">
      <a href="cart.php"><img src="cart-icon.png" /> <span><?php echo "<div class='amount'>".$cart_count."</div>";  ?></span></a>
      </div>
    <?php
    }

    $result = mysqli_query($con,"SELECT * FROM `papercraft`");
    while($row = mysqli_fetch_assoc($result)){
    		echo "<div class='product'>
            <form method='post' action=''>
            
            <input type='hidden' name='code' value=".$row['code']." />
            <div class='image-container'>
            <div class='image'><img src='".$row['image']."' /></div>
            </div>
            <div class='details'>".
            "<div class='name'>" .$row['name']."</div>
            <div class='price'>Price:  $".$row['price']."</div>
               
    			  <button type='submit' class='buy'>Add To Cart</button></div><br><br>
    			  </form>
    		   	  </div>";
            }
    mysqli_close($con);
    ?>

    <div style="clear:both;"></div>

    <div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>
    </div>
    </div>


          </body>
      </html>
