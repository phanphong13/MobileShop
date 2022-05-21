<?php 
    session_start();
	include '../app/model.php';
	$conn = new database("mobile");
	$id = $_POST['id'];
    $type = $_POST['type'];
    if ($id > 0) {
        switch($type) {
            case "account" :
                // if ($id === 1) die ("Không thể xóa tài khoản này");
                $sql = "DELETE FROM accounts
                    WHERE accounts.id = {$id}
                    ";
                if($conn->query($sql) === false){
                    $error = "Failed delete account";
                    die($error);
                }
                break;
            case "product" :
                // delete color product_id = $id
                $sql = "DELETE FROM product_color WHERE product_id = {$id}";
                if($conn->query($sql) === false){
                    $error = "Failed delete product_color";
                    die($error);
                }
                // delete version product_id = $id
                $sql = "DELETE FROM product_version WHERE product_id = {$id}";
                if($conn->query($sql) === false){
                    $error = "Failed delete product_version";
                    die($error);
                }
                // delete info product_id = $id
                $sql = "DELETE FROM product_info WHERE product_id = {$id}";
                if($conn->query($sql) === false){
                    $error = "Failed delete product_info";
                    die($error);
                }
                // delete product
                $sql = "DELETE FROM products WHERE id = {$id}";
                if($conn->query($sql) === false){
                    $error = "Failed delete product";
                    die($error);
                }
                break;
            case "color" :
                $sql = "DELETE FROM product_color WHERE id = {$id}";
                if($conn->query($sql) === false){
                    $error = "Failed delete color";
                    die($error);
                }
                break;
            case "version" :
                $sql = "DELETE FROM product_version WHERE id = {$id}";
                if($conn->query($sql) === false){
                    $error = "Failed delete version";
                    die($error);
                }
                break;
            case "info" :
                $sql = "DELETE FROM product_info WHERE id = {$id}";
                if($conn->query($sql) === false){
                    $error = "Failed delete info";
                    die($error);
                }
                break;
        }
    }
?>