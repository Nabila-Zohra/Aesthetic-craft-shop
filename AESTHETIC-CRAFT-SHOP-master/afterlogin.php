<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>



<html>
<head>
    <title>Aesthetic Craft Shop</title>
    
    <link rel="stylesheet" type="text/css" href="afterlogin.css">
    
      
    
    </head>
    <body>     
        
        <div class="box1">
        <ul>
            <li><a href="">BDT</a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            <li><a href="">English</a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            
            
            </ul>
        </div>
        
        <div class="subbox">
            
            <ol>
            <li><a href="">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="">Offers</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Contact</a></li>
            </ol>
        
          
            <h2> Aesthetic Craft Shop</h2>
            </div>
        </div>
        
        
        
        
            <div class="text">
            <h1> Giving your Feeling a new Style</h1>
                <h4>Now Kids Collection added</h4>
            
                <form action="" method="get">
            <input type="submit" value="Shop Now">
            
            </form>
            </div>
        
        </div>
        
        
        
        <div class="image22">
        
        <img src="papercarft.jpg" height="300" width="350">
        <h6> Paper Craft</h6>
        
        </div>
        
        <div class="image23">
        <img src="artcraft.jpg" height="300" width="350">
            <h> Art Craft</h>
        </div>
        
        <div class="image24">
        <img src="stampcraft.jpg" height="300" width="350">
        <t> Stamps Craft</t>
        </div>
        
        <div class="content">

            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success" >
                    <h3>
                        <?php 
                            echo $_SESSION['success']; 
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
    
            <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) : ?>
                <div class = "welcome"> <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p> 
                <p> <a href="index.php?logout='1'" style="color: green;">logout</a> </p></div>
            <?php endif ?>
            
        </div>
        
        
        
        
        
   
    
    </body>
</html>
