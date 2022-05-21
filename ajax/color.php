<?php 
    session_start();
	include '../app/model.php';
	$conn = new database("mobile");
	$id = $_POST['id'];
    $product_id = $_POST['product_id'];
    $color = $_POST['color'];
    $sale_price_color = $_POST['sale_price_color'];
    $link_img = $_POST['link_img'];
    
    
    if (!$color || !$sale_price_color || !$link_img) {
        die("Vui lòng nhập đầy đủ thông tin"); 
    } else {
        if (!is_numeric($sale_price_color)) die("Invalid price");
        if ($id > 0) {
            $sql = "UPDATE `product_color` SET color = '$color', sale_price_color = '$sale_price_color', link_img = '$link_img' WHERE id = {$id} ;";
            $conn->query($sql);
            // die("Thay đổi thành công"); 
        } else {
            $data = array(
                'product_id' => $product_id,
                'color' => $color,
                'sale_price_color' => $sale_price_color,
                'link_img' => $link_img,
            );
            if(!$conn->insert('product_color', $data))
				die('Không thể thêm');
            // else die("Thêm màu thành công");
        }
    }    

?>