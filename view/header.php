<div id="header">
           <div class="header-wrapper">
               <div class="header__logo">
                   <a href="?controller=home"class="header__logo-img">
                        <img src="Assets/Img/Header/Logo/logo.png" alt="">
                   </a>
               </div>

               <div class="header__search">
                   <div class="header__search-wrapper">
                       <input type="text" name="SearchBar" id = "SearchBar" class="header__search-input" placeholder="Tìm kiếm sản phẩm...">
                       <div class="header__search-icon">
                           <i type = "submit" id="getValBtnID" class="fa-solid fa-magnifying-glass productDetail searchProduct"></i>
                       </div>
                   </div>
                </div>

               <div class="header__right">
                    <div class="header__user">
                        <div class="header__right-icon">
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <?php 
                            if (isset($_SESSION['type']) && $_SESSION['type'] === 'Admin') {
                        ?>
                                <span class="header__right-text">
                                    Admin
                                </span>
                        <?php
                            } else {
                        ?>
                                <span class="header__right-text">
                                    User
                                </span>
                        <?php
                            }
                        ?>

                        
                        
                        <div class="header__user-info">
                            <span class="header__user-info--email">
                            <?php 
                                if (isset($_SESSION['email'])) {
                                    echo $_SESSION['email'];
                                }
                            ?>
                            </span>
                            
                            <?php 
                                if (isset($_SESSION['type']) && $_SESSION['type'] === 'Admin') {
                                    ?>
                            <a href="?controller=user" class="header__user-info--setting">
                                <i class="fa-solid fa-gear"></i>
                                Quản lý cửa hàng
                            </a>
                                    <?php
                                }
                            ?>
                            

                            <span class="header__user-info--history">
                                <i class="fa-solid fa-clock-rotate-left"></i>
                                Lịch sử mua hàng
                            </span>
                            <!-- Transaction History -->
                            <div class="modal__transactionHistory">
                                <div class="modal__body">
                                    <div class="auth-form" style="min-height: calc(50vh + 47px); overflow: hidden;">
                                            <span class="header__cart-products-header">Sản phẩm bạn đã mua</span>
                                            <ul class="header__cart-products-list">
                                                <li class="header__cart-products-item">
                                                    <div class="header__cart-products-item-img">
                                                    <img src="Assets/Img/Header/Logo/logo.png" alt="">

                                                        
                                                    </div>
                                                    <div class="header__cart-products-item-body">
                                                        <div class="header__cart-products-item-body-top">
                                                            <div class="header__cart-products-item-text">Ai Phôn Mười Ba Pờ Rồ Mặc</div>
                                                        </div>
                                                        <div class="header__cart-products-item-body-bottom">
                                                            <div class="header__cart-products-item-price">
                                                                <span class="header__cart-products-item-price-price">
                                                                    20 Củ
                                                                </span>
                                                                <span class="header__cart-products-item-price-mul">
                                                                    x
                                                                </span><span class="header__cart-products-item-price-qnt">
                                                                    1
                                                                </span>
                                                            </div>
                    
                                                            <div class="header__cart-products-item-delete">
                                                                Đã mua
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="header__cart-products-item">
                                                    <div class="header__cart-products-item-img">
                                                    <img src="Assets/Img/Header/Logo/logo.png" alt="">

                                                        
                                                    </div>
                                                    <div class="header__cart-products-item-body">
                                                        <div class="header__cart-products-item-body-top">
                                                            <div class="header__cart-products-item-text">Ai Phôn Mười Ba Pờ Rồ Mặc</div>
                                                        </div>
                                                        <div class="header__cart-products-item-body-bottom">
                                                            <div class="header__cart-products-item-price">
                                                                <span class="header__cart-products-item-price-price">
                                                                    20 Củ
                                                                </span>
                                                                <span class="header__cart-products-item-price-mul">
                                                                    x
                                                                </span><span class="header__cart-products-item-price-qnt">
                                                                    1
                                                                </span>
                                                            </div>
                    
                                                            <div class="header__cart-products-item-delete">
                                                                Đã mua
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="header__cart-products-item">
                                                    <div class="header__cart-products-item-img">
                                                    <img src="Assets/Img/Header/Logo/logo.png" alt="">

                                                        
                                                    </div>
                                                    <div class="header__cart-products-item-body">
                                                        <div class="header__cart-products-item-body-top">
                                                            <div class="header__cart-products-item-text">Ai Phôn Mười Ba Pờ Rồ Mặc</div>
                                                        </div>
                                                        <div class="header__cart-products-item-body-bottom">
                                                            <div class="header__cart-products-item-price">
                                                                <span class="header__cart-products-item-price-price">
                                                                    20 Củ
                                                                </span>
                                                                <span class="header__cart-products-item-price-mul">
                                                                    x
                                                                </span><span class="header__cart-products-item-price-qnt">
                                                                    1
                                                                </span>
                                                            </div>
                    
                                                            <div class="header__cart-products-item-delete">
                                                                Đã mua
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="header__cart-products-item">
                                                    <div class="header__cart-products-item-img">
                                                    <img src="Assets/Img/Header/Logo/logo.png" alt="">

                                                        
                                                    </div>
                                                    <div class="header__cart-products-item-body">
                                                        <div class="header__cart-products-item-body-top">
                                                            <div class="header__cart-products-item-text">Ai Phôn Mười Ba Pờ Rồ Mặc</div>
                                                        </div>
                                                        <div class="header__cart-products-item-body-bottom">
                                                            <div class="header__cart-products-item-price">
                                                                <span class="header__cart-products-item-price-price">
                                                                    20 Củ
                                                                </span>
                                                                <span class="header__cart-products-item-price-mul">
                                                                    x
                                                                </span><span class="header__cart-products-item-price-qnt">
                                                                    1
                                                                </span>
                                                            </div>
                    
                                                            <div class="header__cart-products-item-delete">
                                                                Đã mua
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="header__cart-products-item">
                                                    <div class="header__cart-products-item-img">
                                                    <img src="Assets/Img/Header/Logo/logo.png" alt="">

                                                        
                                                    </div>
                                                    <div class="header__cart-products-item-body">
                                                        <div class="header__cart-products-item-body-top">
                                                            <div class="header__cart-products-item-text">Ai Phôn Mười Ba Pờ Rồ Mặc</div>
                                                        </div>
                                                        <div class="header__cart-products-item-body-bottom">
                                                            <div class="header__cart-products-item-price">
                                                                <span class="header__cart-products-item-price-price">
                                                                    20 Củ
                                                                </span>
                                                                <span class="header__cart-products-item-price-mul">
                                                                    x
                                                                </span><span class="header__cart-products-item-price-qnt">
                                                                    1
                                                                </span>
                                                            </div>
                    
                                                            <div class="header__cart-products-item-delete">
                                                                Đã mua
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="header__cart-products-item">
                                                    <div class="header__cart-products-item-img">
                                                    <img src="Assets/Img/Header/Logo/logo.png" alt="">

                                                        
                                                    </div>
                                                    <div class="header__cart-products-item-body">
                                                        <div class="header__cart-products-item-body-top">
                                                            <div class="header__cart-products-item-text">Ai Phôn Mười Ba Pờ Rồ Mặc</div>
                                                        </div>
                                                        <div class="header__cart-products-item-body-bottom">
                                                            <div class="header__cart-products-item-price">
                                                                <span class="header__cart-products-item-price-price">
                                                                    20 Củ
                                                                </span>
                                                                <span class="header__cart-products-item-price-mul">
                                                                    x
                                                                </span><span class="header__cart-products-item-price-qnt">
                                                                    1
                                                                </span>
                                                            </div>
                    
                                                            <div class="header__cart-products-item-delete">
                                                                Đã mua
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                                <!-- <li class="header__cart-products-item" style="min-height: calc(50vh); border-bottom-left-radius: 4px; border-bottom-right-radius: 4px;">
                                                    <div class="header__cart-products-item-noProduct">
                                                        <span>Bạn chưa mua hàng, vui lòng đặt hàng</span>
                                                    </div>
                                                    
                                                </li> -->
                                                
                                            </ul>
                                    </div>
                                </div>
                            </div> 

                            <span class="header__user-info--resetPassword">
                                <i class="fa-solid fa-key"></i>
                                Đổi mật khẩu
                            </span>

                            <div for="" class="modal__overlay-login"></div>

                            <!-- Form resetPassword -->
                            <div class="modal__resetPassword">
                                <div class="modal__body">
                                    <div class="auth-form">
                                        <div class="auth-form__container">

                                            <form action="" method="post" id="resetPassword-form">
                                                
                                                <div class="auth-form__header">
                                                    <h3 class="auth-form__heading">
                                                        Đổi mật khẩu
                                                    </h3>
                                                    
                                                </div>
                            
                                                <div class="auth-form__form">
                                                    <div class="auth-form__group">
                                                        <label for="" class="auth-form__title">Nhập mật khẩu hiện tại</label>
                                                        <input required type="password" name="password__old" class="auth-form__input" rules="required" required placeholder="Nhập mật khẩu hiện tại của bạn" autocomplete="on">
                                                        <span class="auth-form__error"></span>
                                                    </div>
                                                    <div class="auth-form__group">
                                                        <label for="" class="auth-form__title">Nhập mật khẩu mới</label>
                                                        <input required type="password" name="password" class="auth-form__input" rules="required|min:6" required placeholder="Nhập mật khẩu mới của bạn" autocomplete="on">
                                                        <span class="auth-form__error"></span>
                                                    </div>
                                                    <div class="auth-form__group">
                                                        <label for="" class="auth-form__title">Nhập lại mật khẩu</label>
                                                        <input required type="password" name="passwordX2" class="auth-form__input" rules="required|isConfirm" required placeholder="Nhập lại mật khẩu của bạn" autocomplete="on">
                                                        <span class="auth-form__error"></span>
                                                    </div>
                                                </div>
                            
                                                <div class="auth-form__controls">
                                                    <button name="reset" class="auth-form__controls-btn auth-form__controls-btn--primary">XÁC NHẬN</button>
                                                </div>
                                                
                                            </form>
                                        </div>
                        
                                    </div>
                                </div>
                            </div> 

                            <div onclick="logout()" class="header__user-info--logout">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Đăng xuất
                            </div>
                        </div>
                    </div>
                    <div class="header__cart">
                        <div class="header__cart--animation">
                            <div class="header__right-icon">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                            <span class="header__right-text">
                                Cart
                            </span>
                            <div class="header__cart-number">
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
                            </div>
                        </div>
                        <div class="header__cart-products">
                            <span class="header__cart-products-header">Sản phẩm của bạn</span>
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
                                        <li class="header__cart-products-item" style="border-bottom-left-radius: 4px; border-bottom-right-radius: 4px;">
                                            <div class="header__cart-products-item-noProduct" >
                                                <span>Giỏ hàng trống, vui lòng đặt hàng</span>
                                            </div>
                                            
                                        </li>
                                <?php
                                    }
                                ?>
                            </ul>
                            <?php 
                                if (isset($product_orders)) {
                                    ?>
                                    <a href="?controller=payment" class="header__cart-products-orderAll">
                                            Thanh toán
                                    </a>
                                    <?php
                                }
                            ?>

                        </div>
                    </div>
               </div>

           </div>
        </div>