<?php
	class controller_home extends controller {

		function __construct()
		{
			parent::__construct();
			// get product
			$products = $this->model->getArray('products');
			if ($products === false) die('Failed product 0');

			// get product in orders
			$orderSql =  "SELECT * FROM `orders` WHERE account_id = {$_SESSION['id_account']}";
			$product_orders = $this->model->query($orderSql,true);
			if ($product_orders === false) die("Failed");
						
            include "./view/home.php";
		}
	}

    new controller_home();

?>