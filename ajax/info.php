<?php 
    session_start();
	include '../app/model.php';
	$conn = new database("mobile");
	$id = $_POST['id'];
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $value = $_POST['value'];
    
    
    if (!$name || !$value) {
        die("Vui lòng nhập đầy đủ thông tin"); 
    } else {
        if ($id > 0) {
            $sql = "UPDATE `product_info` SET name = '$name', value = '$value' WHERE id = {$id} ;";
            $conn->query($sql);
            // die("Thay đổi thành công"); 
        } else {
            $data = array(
                'product_id' => $product_id,
                'name' => $name,
                'value' => $value,
            );
            if(!$conn->insert('product_info', $data))
				die('Không thể thêm');
            // else die("Thêm thông số kỹ thuật thành công");
        }
    }

?>