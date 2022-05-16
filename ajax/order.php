<?php 
    session_start();
	include '../app/model.php';
	$conn = new database("mobile");
	$result = $_SESSION;

    $sql = "SELECT id FROM orders WHERE product_id = {$_POST['id_product']}";
	$res = $conn->query($sql, true);
	if($res === false){
		$result['error'] = "Failed order 1";
		// die(json_encode($result));
	}
    if($res === NULL){ // create a interact, save in res
		$data = array(
			'account_id' => $_SESSION['id_account'],
			'product_id' => $_POST['id_product'],
			'num' => 1,
            'color' => $_POST['color'],
		);
		$x = $conn->insert('orders', $data);
		if($x === false){
			$result['error'] = "Failed order 2";
			// die(json_encode($result));
		} 
	} 
    // die(json_encode($result));
?>