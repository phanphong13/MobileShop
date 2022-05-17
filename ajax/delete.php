<?php 
    session_start();
	include '../app/model.php';
	$conn = new database("mobile");
	$sql = "DELETE FROM orders
				WHERE orders.id = {$_POST['id_order']}
				";
		if($conn->query($sql) === false){
			$error = "Failed 6";
			die($error);
		}
?>