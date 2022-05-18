<?php 
    class controller_payment extends controller {
        function __construct() {
			parent::__construct();

			$orderSql =  "SELECT * FROM `orders` WHERE account_id = {$_SESSION['id_account']}";
			$product_orders = $this->model->query($orderSql,true);
			$sum = 0;
			if ($product_orders) {
				for ($i = 0; $i < count($product_orders); $i++) {
					$sum += $product_orders[$i]['price_total'];
			}}
			if ($product_orders) {
				if(isset($_POST['order']) && isset($_POST['name'])) { 
					$name = $this->model->escape_string($_POST['name']);
					$email = $this->model->escape_string($_POST['email']);
					$address = $this->model->escape_string($_POST['address']);
					$phoneNumber = $this->model->escape_string($_POST['phoneNumber']);
					

					
					$data = array(
						'account_id' => $_SESSION['id_account'],
						'name' => $name,
						'email' => $email,
						'address' => $address,
						'phone_number' => $phoneNumber,
						'total_amount' => $sum,
					);
					if(!$this->model->insert('payments', $data))
						die('Booking: Failed!');
					header('Location: ?controller=success');
					$order = $this->model->deleteOrder('orders', $_SESSION['id_account']);
				}
			}
			
			include "./view/payment.php";
        }
    }

new controller_payment();
?>