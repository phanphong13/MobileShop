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

			// change password
			if(isset($_POST['reset'])) { 
				$password = $this->model->escape_string($_POST['password']);
				$id = $_SESSION['id_account'];
				// search email in database
				$result = $this->model->query("select * from `accounts` where id = {$id};", true);
				if($result === false) die("Failed in change password");
				if($result !== NULL) {
					if ($password === $result[0]['password']) {
						$password_new = $this->model->escape_string($_POST['password-new']);
						$password_new2 = $this->model->escape_string($_POST['password-newX2']);
						if ($password === $password_new ) {
							$alert = "Vui lòng nhập mật khẩu mới";
						} else if ($password_new === $password_new2) {
							$sql = "UPDATE `accounts` SET password = '$password_new' WHERE id = {$id} ;";
							$this->model->query($sql);
							$alert = "Thay đổi mật khẩu thành công";
						}
					} else {
						$alert = "Mật khẩu không chính xác";	
					}
					// $alert = "Đăng kí thành công";
				} 
				echo "<script type='text/javascript'>alert('$alert');
				window.location.replace('index.php');</script>";
			}
			
						
            include "./view/home.php";
		}
	}

    new controller_home();

?>