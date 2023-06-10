<?php 
// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "registration";
	
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    // Check connection
	if ($connect->connect_error) {
	  die("Connection failed: " . $connect->connect_error);
	}
    
    // get values form input text and number msg

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    
    // mysql query to insert data

    $query = "INSERT INTO suggestion (name, email, phone, msg) VALUES ('$name','$email','$phone', '$msg')";
    
    
    
    // check if mysql query successful

    if($connect->query($query) === TRUE)
    {
        echo ' <span style="color: white; font-size: 25px;"> <center> <b> Response recieved!  </b> </center><br><br>';
    }
    
    else{
        echo "Error: " . $query . "<br>" . $connect->error;
    }
    
    //mysqli_free_result($result);
    //mysqli_close($connect);
	
    $connect->close();
}

?>




<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contact Us</title>
		<link rel="stylesheet" href="contact.css">
	</head>
	<body>

		<div class="contact" id="contact">
            <h1 onClick="toggleClass()">Any Suggestion or Query? Let us know <span></span></h1>
            
			<form method="post" action="contact.php">

				<div class="row">
					<div class="col-2">
						<label>Name</label>
						<input type="text" name="name" class="text" placeholder="">
					</div>
					
				</div>
				<div class="row">
					<div class="col-2">
						<label>Email</label>
						<input type="text" name="email" class="text" placeholder="Email">
					</div>
					<div class="col-2">
						<label>Phone</label>
						<input type="text" name="phone" class="text" placeholder="+880">
					</div>
				</div>
				<div class="row">
					<div class="col-1">
						<label>Your message</label>
						<input type="text" name="msg" class="text" placeholder="Write your message here...">
					</div>
				</div>
				<div class="row">
					<div class="col-1">
						<input type="submit" name="insert" value="Send Message">
					</div>
				</div>
			</form>
		</div>
		<script type="text/javascript">
			function toggleClass(){
				var element = document.getElementById("contact");
				element.classList.toggle("active")
			}
		</script>
	</body>
</html>
