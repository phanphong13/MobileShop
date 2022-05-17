<?php
	class controller_product extends controller {

		function __construct()
		{
			parent::__construct();

			$id = $_GET['id_product'];
			// get product usr $id
			$result = $this->model->query("select * from `products` where id = '$id';", true);
			if($result === false) die("Failed get product");

			// get product color
			$color = $this->model->query("select * from `product_color` where product_id = {$result[0]['id']};", true);
			if ($color === false) die("Failed get product detail");

			// get version
			$version = $this->model->query("select * from `product_version` where product_id = {$result[0]['id']};", true);
			if ($version === false) die("Failed get version");


			// get info about product
			$info = $this->model->query("select * from `product_info` where product_id = {$result[0]['id']};", true);
			if ($info === false) die("Failed get version");

			// get product in orders
			$orderSql =  "SELECT * FROM `orders` WHERE account_id = {$_SESSION['id_account']}";
			$product_orders = $this->model->query($orderSql,true);
			if ($product_orders === false) die("Failed");

			//get similar product
			$vendor = $result[0]['vendor'];
			$sql = "SELECT * FROM products WHERE vendor = '$vendor' AND id != {$id} LIMIT 5";
			$similar = $this->model->query($sql,true);
						
            include "./view/product.php";
		}
	}

    new controller_product();

?>