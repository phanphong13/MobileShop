<div id="header">
           <div class="header-wrapper">
               <div class="header__logo">
                   <div class="header__logo-img">
                        <img src="Assets/Img/Header/Logo/clickbuy.png" alt="">
                   </div>
               </div>

               <div class="header__search">
                   <div class="header__search-wrapper">
                       <input type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm...">
                       <div class="header__search-icon">
                           <i class="fa-solid fa-magnifying-glass"></i>
                       </div>
                   </div>
               </div>

               <div class="header__right">
                    <div class="header__user">
                        <div class="header__right-icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <span class="header__right-text">
                            Tài Khoản
                        </span>
                        
                        <div class="header__user-info">
                            <span class="header__user-info--email">
                                tranmanh2672002@gmail.com
                            </span>

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
                                                        <input required type="password" name="password" class="auth-form__input" rules="required" required placeholder="Nhập mật khẩu hiện tại của bạn" autocomplete="on">
                                                        <span class="auth-form__error"></span>
                                                    </div>
                                                    <div class="auth-form__group">
                                                        <label for="" class="auth-form__title">Nhập mật khẩu mới</label>
                                                        <input required type="password" name="password-new" class="auth-form__input" rules="required|min:6" required placeholder="Nhập mật khẩu mới của bạn" autocomplete="on">
                                                        <span class="auth-form__error"></span>
                                                    </div>
                                                    <div class="auth-form__group">
                                                        <label for="" class="auth-form__title">Nhập lại mật khẩu</label>
                                                        <input required type="password" name="password-newX2" class="auth-form__input" rules="required" required placeholder="Nhập lại mật khẩu của bạn" autocomplete="on">
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

                            <a href="?controller=start" class="header__user-info--logout">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Đăng xuất
                            </a>
                        </div>
                    </div>
                    <div class="header__cart">
                        <div class="header__right-icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <span class="header__right-text">
                            Giỏ hàng
                        </span>
                        <div class="header__cart-products">
                            <span class="header__cart-products-header">Sản phẩm của bạn</span>
                            <ul class="header__cart-products-list">
                                
                                <!-- <li class="header__cart-products-item">
                                    <div class="header__cart-products-item-img">
                                        <img src="Assets/Img/Products/Apple/13promax.jpg" alt="">
                                    </div>
                                    <div class="header__cart-products-item-body">
                                        <div class="header__cart-products-item-body-top">
                                            <div class="header__cart-products-item-text">Iphone 13 Pro Max - Chinh Hang VNA</div>
                                        </div>
                                        <div class="header__cart-products-item-body-bottom">
                                            <div class="header__cart-products-item-price">
                                                <span class="header__cart-products-item-price-price">
                                                    15,999,000 đ
                                                </span>
                                                <span class="header__cart-products-item-price-mul">
                                                    x
                                                </span><span class="header__cart-products-item-price-qnt">
                                                    1
                                                </span>
                                            </div>
    
                                            <div class="header__cart-products-item-delete">
                                                Xóa
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li> -->
                                
                                <li class="header__cart-products-item">
                                    <div class="header__cart-products-item-noProduct">
                                        <span>Giỏ hàng trống, vui lòng đặt hàng</span>
                                    </div>
                                    
                                </li>
    
                                
                                
                            </ul>
                            <div class="header__cart-products-orderAll">
                                Xem giỏ hàng
                            </div>
                        </div>
                    </div>
               </div>

           </div>
        </div>