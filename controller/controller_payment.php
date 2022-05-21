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
				}
			}
			if ($product_orders) {
				if(isset($_POST['order']) && isset($_POST['name'])) { 
					$name = $this->model->escape_string($_POST['name']);
					$email = $this->model->escape_string($_POST['email']);
					$address = $this->model->escape_string($_POST['address']);
					$phoneNumber = $this->model->escape_string($_POST['phoneNumber']);
					
					if ($sum > 0) {
						$data = array(
							'account_id' => $_SESSION['id_account'],
							'time' => date('Y-m-d H:i:s'),
							'name' => $name,
							'email' => $email,
							'address' => $address,
							'phone_number' => $phoneNumber,
							'total_amount' => $sum,
						);
						$re = $this->model->insert('payments', $data);
						if(!$re) {
							die('Booking: Failed!');
						} else {
							for ($i = 0; $i < count($product_orders); $i++) {
								$data = array(
									'payment_id' => $re,
									'name' => $product_orders[$i]['name'],
									'num' => $product_orders[$i]['num'],
									'color' => $product_orders[$i]['color'],
									'link_img' => $product_orders[$i]['link_img'],
									'price_color' => $product_orders[$i]['price_color'],
									'price_total' => $product_orders[$i]['price_total'],
								);
								if (!$this->model->insert('payment_detail', $data)) 
									die("Failed");
							}
						}
							
						
						header('Location: ?controller=success');
						$order = $this->model->deleteOrder('orders', $_SESSION['id_account']);
					} else {
						echo "<script type='text/javascript'>alert('Không có sản phẩm nào trong giỏ hàng !');
							window.location.replace('index.php?controller=payment');</script>";
					}
					
				}
			} 
			
			include "./view/payment.php";
        }
    }

new controller_payment();
?>