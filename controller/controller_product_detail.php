<?php 
    class controller_product_detail extends controller {
        function __construct() {
			parent::__construct();
            
            $id = $_GET['id_product'];

            // get product
            $sql = "SELECT * FROM `products` WHERE id = {$id};";
			$result = $this->model->query($sql, true);

            // get color
            $sql = "SELECT * FROM `product_color` WHERE product_id = {$id};";
			$color = $this->model->query($sql, true);

            // get version
            $sql = "SELECT * FROM `product_version` WHERE product_id = {$id};";
			$version = $this->model->query($sql, true);

            // get info
            $sql = "SELECT * FROM `product_info` WHERE product_id = {$id};";
			$info = $this->model->query($sql, true);

			include "./view/admin/product_detail.php";
        }
    }

new controller_product_detail();
?>