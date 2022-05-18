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

			// change password
			if(isset($_POST['reset'])) { 
				$password = $this->model->escape_string($_POST['password__old']);
				echo $password;
				$id = $_SESSION['id_account'];
				// search email in database
				$result = $this->model->query("select * from `accounts` where id = {$id};", true);
				if($result === false) die("Failed in change password");
				if($result !== NULL) {
					if ($password === $result[0]['password']) {
						$password_new = $this->model->escape_string($_POST['password']);
						$password_new2 = $this->model->escape_string($_POST['passwordX2']);
						if ($password === $password_new ) {
							$alert = "Vui lòng nhập mật khẩu mới";
							echo "<script type='text/javascript'>alert('$alert');
							window.location.replace('index.php?controller=home');</script>";
						} else if ($password_new === $password_new2) {
							$sql = "UPDATE `accounts` SET password = '$password_new' WHERE id = {$id} ;";
							$this->model->query($sql);
							$alert = "Thay đổi mật khẩu thành công";
							echo "<script type='text/javascript'>alert('$alert');
							window.location.replace('index.php?controller=start');</script>";
							// header("Location: index.php?controller=home");
						}
					} else {
						$alert = "Mật khẩu không chính xác";
						echo "<script type='text/javascript'>alert('$alert');
							window.location.replace('index.php?controller=home');</script>";	
					}
					// $alert = "Đăng kí thành công";
				} 
			}
						
            include "./view/product.php";
		}
	}

    new controller_product();

?>