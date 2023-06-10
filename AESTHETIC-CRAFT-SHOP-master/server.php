<?php
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$address = mysqli_real_escape_string($db, $_POST['address']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if (empty($phone)) { array_push($errors, "Phone is required"); }
		if (empty($address)) { array_push($errors, "Address is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, password, phone, address )
					  VALUES('$username', '$email', '$password', '$phone', '$address')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "";
			header('location: index.php');
		}

	}

	// ...

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	if (isset($_POST['confirm_bill'])) {
  $name_1 = mysqli_real_escape_string($db, $_POST['name']);
  $phone_no = mysqli_real_escape_string($db, $_POST['phone_no']);
  $address_no = mysqli_real_escape_string($db, $_POST['shipping_address']);

  // form validation: ensure that the form is correctly filled
  if (empty($name_1)) { array_push($errors, "Name is required"); }
  if (empty($phone_no)) { array_push($errors, "Phone Number is required"); }
  if (empty($address_no)) { array_push($errors, "Address is required"); }

  // cofirm order submission
  if (count($errors) == 0) {
  	$query_1 = "INSERT INTO orders (full name, phone no, shipping address )
  				VALUES('$name_1', '$phone_1', '$address_no')";
  	mysqli_query($db, $query_1);

  	$_SESSION['full name'] = $name_1;
  	$_SESSION['success'] = "";
  	header('location: index.php');
  }
  }



?>
