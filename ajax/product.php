<?php 
    session_start();
	include '../app/model.php';
	$conn = new database("mobile");

	$id = $_POST['id'];
    $vendor = $_POST['vendor'];
    $name = $_POST['name'];
    $name_img = $_POST['name_img'];
    $link_img = $_POST['link_img'];
    $ram = $_POST['ram'];
    $price = $_POST['price'];
    $sale_price = $_POST['sale_price'];

    if (!is_numeric($id)) die("Invalid id");
    if (!is_numeric($ram)) die("Invalid ram");
    if (!is_numeric($price)) die("Invalid price");
    if (!is_numeric($sale_price)) die("Invalid sale_price");

    // die($id.$vendor.$name.$name_img.$link.$ram.$price);
    if (!$vendor || !$name || !$name_img || !$link_img || !$ram || !$price || !$sale_price) {
        die("Vui lòng nhập đầy đủ thông tin");
    } else {
        $sql = "SELECT * FROM `products` WHERE id = {$id}";
        $result = $conn->query($sql, true);
        if ($result === false) die("Failed");
        if ($result === Null) {
            
            $sql = "SELECT * FROM `accounts` WHERE id = {$id}";
            $result = $conn->query($sql, true);
            if ($result === false) die("Failed");
            if ($result === Null) {
                $data = array(
                    'id' => $id,
                    'vendor' => $vendor,
                    'name' => $name,
                    'name_img' => $name_img,
                    'link_img' => $link_img,
                    'ram_GB' => $ram,
                    'price' => $price,
                    'sale_price' => $sale_price
                );
                if(!$conn->insert('products', $data))
                    die('Không thể thêm');
                else die("Thêm tài khoản thành công");
            }
        }
    }
?>