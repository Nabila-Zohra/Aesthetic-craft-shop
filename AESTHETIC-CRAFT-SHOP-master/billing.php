<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Billing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Billing</h2>
	</div>

	<form method="post" action="cart.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
    <div class="input-group">
    <label>Phone</label>
    <input type="text" name="phone_no" value="">
</div>
    <div class="input-group">
        <label>Address</label>
        <input type="text" name="shipping_address" value="">
        </div>
        <div class="input-group">
    			<button type="submit" class="btn" name="confirm_bill">Confirm billing</button>
    		</div>
      </form>
    </body>
    </html>
