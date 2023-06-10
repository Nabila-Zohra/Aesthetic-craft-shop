<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `users` WHERE CONCAT('id',`username`, `email`, `password`, `phone`, `address` ) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);
}


function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "registration");

    if (!$connect) {
        echo "Connection failed ";
      } else {
        echo "Connected Successfully <br>";
      }

    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search From Database</title>
        <style>
            table, td, th {
        border: 1px solid #ddd;
        text-align: left;
      }

      table {
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        padding: 15px;
      }

      tr:nth-child(even) {
        background-color: #f2f2f2;
        }

      .topright {
          position: absolute;
          top: 8px;
          right: 16px;
          font-size: 18px;
        }
        </style>
    </head>
    <body>

    <div class = "topright">
        <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Search Here">
            <input type="submit" name="search" value="Search"><br><br>
            </div><br><br><br><br>

            <table>
                <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                </tr>

                <?php
             
                while($row = mysqli_fetch_array($search_result)):?>
              
                <tr>
                <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['address'];?></td>
                    
                </tr> 

                <?php endwhile;?>

            </table>
        </form>
        
    </body>
</html>