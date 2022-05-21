<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Mobile Shop</title>
    <link rel="icon" href="Assets/Img/Header/Logo/clickbuy.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Assets/CSS/base.css">
    <link rel="stylesheet" href="Assets/CSS/grid.css">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <link rel="stylesheet" href="Assets/Fonts/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
    <div class="grid wide">
        <div class="row">
            <div class="payment__header">
                <div class="payment__header-icon">
                    <i class="fa-solid fa-credit-card"></i>
                </div>
                <div class="payment__header-heading">
                    <span>Thanh toán</span>
                </div>
                <div class="payment__header-notify">
                    <span>Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</span>
                </div>
            </div>

            <div class="col l-7 m-7 c-7">
                <form action="" method="post" id="payment">
                    <div class="payment__info-header">
                        <span>Thông tin khách hàng</span>
                    </div>
    
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <label for="" class="auth-form__title" >Họ tên</label>
                            <input type="text" name="name" rules="required" required autocomplete="on" class="auth-form__input " placeholder="Nhập họ tên của bạn">
                            <span class="auth-form__error"></span>
                        </div>
                        <div class="auth-form__group">
                            <label for="" class="auth-form__title" >Email</label>
                            <input type="text" name="email" rules="required|email" required autocomplete="on" class="auth-form__input " placeholder="Nhập email của bạn">
                            <span class="auth-form__error"></span>
                        </div>
                        <div class="auth-form__group">
                            <label for="" class="auth-form__title" >Địa chỉ</label>
                            <input type="text" name="address" rules="required" required autocomplete="on" class="auth-form__input " placeholder="Nhập địa chỉ của bạn">
                            <span class="auth-form__error"></span>
                        </div>
                        <div class="auth-form__group">
                            <label for="" class="auth-form__title" >Số điện thoại</label>
                            <input type="text" name="phoneNumber" rules="required|min:10" required autocomplete="on" class="auth-form__input " placeholder="Nhập số điện thoại của bạn">
                            <span class="auth-form__error"></span>
                        </div>
                        
                    </div>
                    
                    <div class="payment__type">
                        <span>Hình thức thanh toán : Thanh toán khi nhận hàng</span>
                    </div>

                    <button name="order" class="payment__btn">
                        THANH TOÁN
                    </button>

                </form>

            </div>

            <div class="col l-5 m-5 c-5">
                <div class="payment__cart-header">
                    <span>Giỏ hàng</span>
                </div>
                <div class="payment__cart-number">
                    Số lượng :
                    <span>
                    <?php
                        if ($product_orders) {
                            $num_product = 0;
                            for ($i = 0; $i < count($product_orders); $i++) {
                                $num_product += $product_orders[$i]['num'];
                            }
                            echo $num_product;
                        } else {
                            echo 0;
                        }
                    ?>
                    </span>

                </div>
                <div class="payment__cart-products">
                    <ul class="header__cart-products-list">
                        
                    <?php 
                                    if (isset($product_orders)) {
                                        // echo count($product_orders);
                                        for ($i = 0; $i < count($product_orders); $i++) {
                                ?>
                                            <li class="header__cart-products-item">
                                                <div class="header__cart-products-item-img">
                                                    <img src="Assets/Img/Products/<?php echo $product_orders[$i]['link_img'] ?>" alt="">
                                                </div>
                                                <div class="header__cart-products-item-body">
                                                    <div class="header__cart-products-item-body-top">
                                                        <div class="header__cart-products-item-text"><?php echo $product_orders[$i]['name']. " - " . $product_orders[$i]['color']   ?></div>
                                                    </div>
                                                    <div class="header__cart-products-item-body-bottom">
                                                        <div class="header__cart-products-item-price">
                                                            <span class="header__cart-products-item-price-price">
                                                                <?php echo number_format($product_orders[$i]['price_color'],0,'',',').'đ'; ?>
                                                            </span>
                                                            <span class="header__cart-products-item-price-mul">
                                                                x
                                                            </span><span class="header__cart-products-item-price-qnt">
                                                                <?php echo $product_orders[$i]['num'] ?>
                                                            </span>
                                                        </div>
                
                                                        <a href=""onclick="deleteOrder(<?php echo $product_orders[$i]['id'] ?>)" class="header__cart-products-item-delete">
                                                            Xóa
                                                        </a>
                                                        
                                                    </div>
                                                </div>
                                            </li>
                                <?php
                                        }
                                    } else {
                                ?>
                                        <li class="header__cart-products-item">
                                            <div class="header__cart-products-item-noProduct">
                                                <span>Giỏ hàng trống, vui lòng đặt hàng</span>
                                            </div>
                                            
                                        </li>
                                <?php
                                    }
                                ?>

                        
                    </ul>
                    
                </div>
                <div class="payment__cart-footer">
                    <div class="payment__cart-sumPrice">
                        Tổng giá:
                        <span>
                            <?php 
                                $sum = 0;
                                if ($product_orders) {
                                    for ($i = 0; $i < count($product_orders); $i++) {
                                        $sum += $product_orders[$i]['price_total'];
                                    }
                                }
                                if ($sum > 0) echo number_format($sum,0,'',','); else echo 0;
                            ?> đ
                            
                        </span>
                        
                    </div>
                    <a href="?controller=home" class="payment__back">
                        << Trở lại
                    </a>
                </div>
            </div>

        </div>
    </div>
    <?php 
        include "footer.php";
    ?>

    <script src="Assets/JS/main.js"></script>
    <script src="Assets/JS/delete.js"></script>
    <script src="Assets/JS/validate.js"></script>
    <script>
        validator('#payment');
    </script>

</body>
</html>