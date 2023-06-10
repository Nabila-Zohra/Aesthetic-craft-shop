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

 


            <h7>Paper Craft </h7>
 
   

      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "craft shop";

        $connection = mysqli_connect($servername, $username, $password, $dbname);

        

        echo "<br>";


        if(isset($_POST['search'])){

          $searchchq = $_POST['search'];
   
          $searchchq = preg_replace("#[^0-9a-z]#i","",$searchchq);
          
          $query =" SELECT * FROM papercraft WHERE ID LIKE '%$searchchq%'or Name LIKE '%$searchchq%'";
   
          $query = mysqli_query($connection, $query);
   
   
          $count=mysqli_num_rows($query);


          if($count==0){
            $output= 'No search result found';}
         else{
             while($row = mysqli_fetch_array($query)) {

      ?>

       <br> 

              <div class="col-md-4">
			

               <form method="post" action="paperCraft.php">
					
                      <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                      
                      <div class="txtPaper">
                            <h4 ><?php echo $row["name"]; ?></h4>

                            <h3 >Price: $<?php echo $row["price"]; ?></h3>

                    

                      <input type="submit" name="add_to_cart" style="margin-top:5px;" class="button" value="View Product" />
                      </div> 
					</div>


            </div>
	    <?php
				}}
			}
		?>
          </body>
      </html> 
        
        
  