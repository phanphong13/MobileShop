<?php
	include '../app/model.php';
	$conn = new Database("mobile");
	// $searchData = $_REQUEST['prodName'];
	if(isset($_POST['action'])){
		$sqlQuery = "SELECT * FROM products WHERE id != 0 ";
			if(isset($_POST["searchProduct"])) {
				$searchData = $conn->escape_string($_POST["searchProduct"]);
				$sqlQuery .= "
					AND name LIKE '%{$searchData}%'";
			}
			if(isset($_POST["price"])){
				$checkValue = implode("','", $_POST["price"]);
				if($checkValue == 0) {
					$sqlQuery .= "
						AND sale_price > 0";
				}
				if($checkValue == 1) {
					$sqlQuery .= "
						AND sale_price < 5000000";
				} 
				if($checkValue == 2) {
					$sqlQuery .= "
						AND sale_price BETWEEN 5000000 AND 10000000 ";
				}
				if($checkValue == 3) {
					$sqlQuery .= "
						AND sale_price BETWEEN 10000000 AND 15000000 ";
				}
				if($checkValue == 4) {
					$sqlQuery .= "
						AND sale_price BETWEEN 15000000  AND 20000000 ";
				}
				if($checkValue == 5) {
					$sqlQuery .= "
						AND sale_price > 20000000 ";
				}   

			}
			if(isset($_POST["brand"])) {
				$brandFilterData = implode("','", $_POST["brand"]);
				$sqlQuery .= "
				AND vendor IN('".$brandFilterData."')";
			}
			if(isset($_POST["ram"])) {
				$ramFilterData = implode("','", $_POST["ram"]);
				$sqlQuery .= "
				AND `ram-GB` IN('".$ramFilterData."')";
			}
			if(isset($_POST["selector"])){
				$selectorFilter = $conn->escape_string($_POST["selector"]);
				if($selectorFilter == 'ASC') {
					$sqlQuery .= " ORDER By price ASC";
				} 
				if($selectorFilter == 'DESC') {
					$sqlQuery .= " ORDER By price DESC";
				}
			}
			$result = $conn->query($sqlQuery,true);
			if(!$result) {
				die("<h1>No Products Found</h1>");
			}
			$html = '';
			if(count($result) > 0){
				for($i = 0; $i< count($result);$i++){
					if ($result[$i]['vendor'] === "Apple") {
						$a = "Assets/Img/Products/Apple/";
					} else if ($result[$i]['vendor'] === "Samsung") {
						$a = "Assets/Img/Products/Samsung/";
					} else {
						$a = "Assets/Img/Products/Xiaomi/";
					}
					if($_SERVER['HTTP_REFERER'] == 'http://localhost/MobileShop/index.php?controller=home') {
						$html .= '<div class="col l-3 m-6 c-6" style="margin-top: 15px;">
						<div class="product">
							<div class="product-like">Yêu thích</div>
							<a href="?controller=product&id_product='.$result[$i]['id'].'"  class="product__img">
								<img src="'.$a.$result[$i]["link_img"].'" alt="">
							</a>
							<a href="?controller=product&id_product='.$result[$i]['id'].' " class="product__description">
								<span>
									'.$result[$i]['name'].'
								</span>
							</a>
							<div class="product__price"> '.number_format( $result[$i]['sale_price'],0,'',',').'đ </div>
							<div class="product__price-sale">
								<div>
									'.number_format( $result[$i]['sale_price'],0,'',',').'đ
								</div>
								<a href="?controller=product&id_product='.$result[$i]['id'].' " class="product__price-sale-icon"> 
									<i class="fa-solid fa-cart-shopping"></i>
								</a>
							</div>
						</div>
					</div>';
					}
				else {
					$html .='<div class="col l-3 m-6 c-6" style="margin-top: 15px;">
					<div class="product">
						<div class="product-like">Yêu thích</div>
						<a href="#" class="product__img">
							<img src="'.$a. $result[$i]["link_img"].'" alt="">
						</a>
						<a href="#" class="product__description">
							<span>
								'.$result[$i]['name'].'
							</span>
						</a>
						<div class="product__price"> '.number_format( $result[$i]['sale_price'],0,'',',').'đ </div>
						<div class="product__price-sale">
							<div>
								'.number_format( $result[$i]['sale_price'],0,'',',').'đ
							</div>
							<div class="product__price-sale-icon"> 
								<i class="fa-solid fa-cart-shopping"></i>
							</div>
						</div>
					</div>
				</div>';
				}
				}
			} else {
				$html = "<h3>No Products Found</h3>";
			}

			die($html);
	}
?>