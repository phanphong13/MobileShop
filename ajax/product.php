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

    if (!$vendor || !$name || !$name_img || !$link_img || !$ram || !$price || !$sale_price) {
        die("Vui lòng nhập đầy đủ thông tin");
    } else {
        if (!is_numeric($ram)) die("Invalid ram");
        if (!is_numeric($price)) die("Invalid origin price");
        if (!is_numeric($sale_price)) die("Invalid current price");
        
        if ($id > 0) {
            $sql = "UPDATE `products` SET vendor = '$vendor', name = '$name', name_img = '$name_img', link_img = '$link_img', 
                ram_GB = '$ram', price = '$price', sale_price = '$sale_price' WHERE id = {$id} ;";
            $conn->query($sql);
            // die("Thay đổi thành công");  
        } else {
            $data = array(
                'vendor' => $vendor,
                'name' => $name,
                'name_img' => $name_img,
                'link_img' => $link_img,
                'ram_GB' => $ram,
                'price' => $price,
                'sale_price' => $sale_price
            );
            $re = $conn->insert('products', $data);
            if(!$re)
                die('Không thể thêm');
            $data = array(
                'product_id' => $re,
                'color' => 'Trống',
                'sale_price_color' => 0,
                'link_img' => 'Trống',
            );
            
            if(!$conn->insert('product_color', $data))
                die('Không thể thêm');
            $data = array(
                'product_id' => $re,
                'version' => 'Trống',
                'price_version' => 0,
                'version_id' => 0,
            );
            if(!$conn->insert('product_version', $data))
                die('Không thể thêm');
            $data = array(
                'product_id' => $re,
                'name' => 'Trống',
                'value' => 'Trống',
            );
            if(!$conn->insert('product_info', $data))
                die('Không thể thêm');
            // else die("Thêm sản phẩm thành công");
        }
    }
?>