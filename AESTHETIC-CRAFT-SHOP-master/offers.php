
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">


    <title>Aesthetic Craft Shop</title>
    
    <link rel="stylesheet" type="text/css" href="offers.css">
       
    <script type="text/javascript">
      function usersearchTxt(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
          if(this.readyState == 4 && this.status == 200){
            var responseText = "<table>".concat(this.responseText,"</table>");
            document.getElementById('searchTable').innerHTML = responseText;
          }
        }
        xmlhttp.open("GET","DBManager.php?search="+str,true);
        xmlhttp.send();
      }
    </script>
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
             
           
            
        </div>

 


            <h7> Offers </h7><br>
            
            <h6>50% OFF </h6>
            <div class="search-container">
    <input id="searchBox" type="text" name="" value="" onkeyup="usersearchTxt(document.getElementById('searchBox').value);"></div>

    <div id="searchTable">
     
        <?php
          include 'DBManager.php';
          fetch();
         ?>
    
    </div>
  </body>
</html>
