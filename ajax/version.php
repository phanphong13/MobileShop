<?php 
    session_start();
	include '../app/model.php';
	$conn = new database("mobile");
	$id = $_POST['id'];
    $product_id = $_POST['product_id'];
    $version = $_POST['version'];
    $price_version = $_POST['price_version'];
    $version_id = $_POST['version_id'];
    
    
    if (!$version || !$price_version || !$version_id) {
        die("Vui lòng nhập đầy đủ thông tin"); 
    } else {
        if (!is_numeric($price_version)) die("Invalid price");
        if (!is_numeric($version_id)) die("Invalid version_id");
        if ($id > 0) {
            $sql = "UPDATE `product_version` SET version = '$version', price_version = '$price_version', version_id = '$version_id' WHERE id = {$id} ;";
            $conn->query($sql);
            // die("Thay đổi thành công"); 
        } else {
            $data = array(
                'product_id' => $product_id,
                'version' => $version,
                'price_version' => $price_version,
                'version_id' => $version_id,
            );
            if(!$conn->insert('product_version', $data))
				die('Không thể thêm');
            // else die("Thêm phiên bản thành công");
        }
    }

?>