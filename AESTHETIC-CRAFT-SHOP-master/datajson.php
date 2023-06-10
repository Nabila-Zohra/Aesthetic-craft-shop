<?php 

if($username = isset($_POST['username']) ? $_POST['username'] : ''&&


$username = isset($_POST['email']) ? $_POST['email'] : ''&&


$username = isset($_POST['password_1']) ? $_POST['password_1'] : ''&&

$username = isset($_POST['password_2']) ? $_POST['password_2'] : ''&&

$username = isset($_POST['phone']) ? $_POST['phone'] : ''&&

$username = isset($_POST['address']) ? $_POST['address'] : '')



{     
        $current_data = file_get_contents('saveinfo.json');
        $array_data = json_decode($current_data, true);
        $new_data = array(
            
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password_1' => $_POST['password_1'],
            'password_2' => $_POST['password_2'],
            
            'phone' => $_POST['phone'],
            
            'address' => $_POST['address']
        );

        $array_data[] = $new_data;
        $json_data =json_encode($array_data,JSON_PRETTY_PRINT);

        if(file_put_contents('saveinfo.json', $json_data))
        {
            echo "<h3>Data saved Successfull</h3>";
        }else
        {
            echo "<h3>Data saved Unsuccessfull</h3>";
        } 
       
 } 
 

    ?>