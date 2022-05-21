<?php 
    session_start();
	include '../app/model.php';
	$conn = new database("mobile");
	$result = $_SESSION;

	$color = $_POST['color'];

    $sql = "SELECT * FROM orders WHERE product_id = {$_POST['id_product']} AND account_id = {$_SESSION['id_account']} AND color = '$color'";
	$res = $conn->query($sql, true);
	if($res === false){
		die("Failed order 1");
		// die(json_encode($result));
	}
    if($res === NULL){
		$sql = "SELECT * FROM product_color WHERE product_id = {$_POST['id_product']} AND color = '$color'"; 
		$sp = $conn->query($sql, true);

		$sql_product = "SELECT * FROM products WHERE id = {$_POST['id_product']}";
		$pro = $conn->query($sql_product, true);
		$data = array(
			'account_id' => $_SESSION['id_account'],
			'product_id' => $_POST['id_product'],
			'name' => $pro[0]['name'],
			'num' => 1,
            'color' => $_POST['color'],
			'link_img' => $sp[0]['link_img'],
			'price_color' => $sp[0]['sale_price_color'],
			'price_total' => $sp[0]['sale_price_color']
		);
		$x = $conn->insert('orders', $data);
		if($x === false){
			die("Không thể thêm vào giỏ hàng");
			// die(json_encode($result));
		} 
	} else {
		$sql = "SELECT * FROM product_color WHERE product_id = {$_POST['id_product']} AND color = '$color'"; 
		$sp = $conn->query($sql, true);
		$num = $res[0]['num'] + 1;
		$price_total = $res[0]['price_total'] + $sp[0]['sale_price_color'];
		$sql_order = "UPDATE `orders` SET num = '$num', price_total = '$price_total' WHERE id = {$res[0]['id']} ;";
		$conn->query($sql_order);
	} 
	die("Thêm vào giỏ hàng thành công");
    // die(json_encode($result));
?>