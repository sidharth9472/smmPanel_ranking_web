<?php include ('config.php'); 

if (isset($_POST['payment_id']) && isset($_POST['amt'])  && isset($_POST['name']) && isset($_POST['email'])) {
	$payment_id=$_POST['payment_id'];
	$amt=$_POST['amt'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$payment_status="completed";
	$added_on=date('Y-m-d h:i:s');


	mysqli_query($conn ,"insert into payment(name, email, amount, payment_status, payment_id, added_on ) values( '$name', '$email', '$amt','$payment_status', '$payment_id', '$added_on')");
}

?>



