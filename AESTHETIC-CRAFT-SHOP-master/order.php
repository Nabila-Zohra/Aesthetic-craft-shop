
<html>
<head>
    <title>Aesthetic Craft Shop</title>
    
    <link rel="stylesheet" type="text/css" href="shopCategory.css">
    
      
    
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

 


            <h7> Order Details </h7>

            </body>
      </html> 
        
        
  

<?php
session_start();
if (isset($_SESSION['username']))
{
    $userName = $_SESSION['username'];


}



  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "craft shop";

  $connection = mysqli_connect($servername, $username, $password, $dbname);





$sql = "SELECT * FROM orderconfirm WHERE UserName LIKE '%$userName%'";

  $result = mysqli_query($connection, $sql);

  if($result) {
  
    while ($row = mysqlI_fetch_assoc($result)) {
?>



  <br> 

<div class="order">


 <form method="post" action="">
      
        
              <h1 ><?php echo $row["UserName"]; ?></h1><br>
              
              <h7><?php echo $row["ProductName"]; ?></h7><br>

              <h7 >Quantity: $<?php echo $row["Quantity"]; ?></h7><br>
              <h7>Unit Price: $<?php echo $row["Price"]; ?></h7><br>
              <h7>Total Price: $<?php echo $row["Total Price"]; ?></h7>
             

        
        
      </div>


</div>
<?php
  }
}
?>


</body>
</html> 