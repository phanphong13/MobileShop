<?php
	class controller_product extends controller {

		function __construct()
		{
			parent::__construct();

			$id = $_GET['id_product'];
			$result = $this->model->query("select * from `products` where id = '$id';", true);
			if($result === false) die("Failed get product");

			$info = $this->model->query("select * from `product_detail` where product_id = {$result[0]['id']};", true);
			if ($info === false) die("Failed get product detail");
						
            include "./view/product.php";
		}
	}

    new controller_product();

?>