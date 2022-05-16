<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shop</title>
    <link rel="icon" href="Assets/Img/Header/Logo/clickbuy.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="Assets/CSS/base.css">
    <link rel="stylesheet" href="Assets/CSS/grid.css">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <link rel="stylesheet" href="Assets/Fonts/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>

    <div class="app">
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
                    <!-- <div class="header__user">
                        <div class="header__right-icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <span class="header__right-text">
                            Tài Khoản
                        </span>
                    </div> -->
                    <div class="h-right__text">
                        
                        <div class="h-right__text-text h-right__text-login">Đăng nhập</div>
                        <div class="h-right__text-text h-right__text-register">Đăng kí</div>
                        

                        <div for="" class="modal__overlay-login"></div>
                        
                        <!-- Form register -->
                        <div  class="modal__register">
                            <div class="modal__body">
                                <div class="auth-form">
                                    <div class="auth-form__container">
                                        <form action="" method="post" id="register-form">

                                            <div class="auth-form__header">
                                                <h3 class="auth-form__heading">
                                                    Đăng kí
                                                </h3>
                                                <div class="auth-form__switch-btn-login">
                                                    Đăng nhập
                                                </div>
                                            </div>
    
                                            <div class="auth-form__form">
                                                <div class="auth-form__group">
                                                    <label for="" class="auth-form__title" >Nhập họ tên</label>
                                                    <input required type="text" name="name" rules="required" required autocomplete="on" class="auth-form__input " placeholder="Nhập tên của bạn">
                                                    <span class="auth-form__error"></span>
                                                </div>
                                                <div class="auth-form__group">
                                                    <label for="" class="auth-form__title" >Nhập email</label>
                                                    <input required type="text" name="email" rules="required|email" required autocomplete="on" class="auth-form__input " placeholder="Nhập email của bạn">
                                                    <span class="auth-form__error"></span>
                                                </div>
                                                <div class="auth-form__group">
                                                    <label for="" class="auth-form__title">Nhập mật khẩu</label>
                                                    <input required type="password" name="password" rules="required|min:6" required autocomplete="on" class="auth-form__input" placeholder="Nhập mật khẩu của bạn">
                                                    <span class="auth-form__error"></span>
                                                </div>
                                                <div class="auth-form__group">
                                                    <label for="" class="auth-form__title">Nhập lại mật khẩu</label>
                                                    <input required type="password" name="passwordX2" rules="isConfirm" required autocomplete="on" class="auth-form__input" placeholder="Nhập lại mật khẩu của bạn">
                                                    <span class="auth-form__error"></span>
                                                </div>
                                            </div>
    
                                            <div class="auth-form__aside">
                                                <p class="auth-form__text">
                                                    Để có trải nghiệm tốt nhất, quý khách vui lòng đăng kí tài khoản.
                                                </p>
                                            </div>
    
                                            <div class="auth-form__controls">
                                                <div class="auth-form__controls-btn auth-form__controls-back">TRỞ LẠI</div>
                                                <button name="signup" class="auth-form__controls-btn auth-form__controls-btn--primary">ĐĂNG KÍ</button>
                                            </div>

                                        </form>

                                    </div>

                                    <div class="auth-form__social">
                                        <a href="" class="auth-form__controls-btn btn--with-icon btn--size-s auth-form__social-facebook">
                                            <i class="auth-form__social-icon fa-brands fa-facebook"></i>
                                            Kết nối với Facebook
                                        </a>
                                        <a href="" class="auth-form__controls-btn btn--with-icon btn--size-s auth-form__social-google">
                                            <i class="auth-form__social-icon fa-brands fa-google"></i>
                                            Kết nối với Google
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        
                        <!-- Form login -->
                        <div class="modal__login">
                            <div class="modal__body">
                                <div class="auth-form">
                                    <div class="auth-form__container">

                                        <form action="" method="post" id="login-form">
                                            
                                            <div class="auth-form__header">
                                                <h3 class="auth-form__heading">
                                                    Đăng nhập
                                                </h3>
                                                <div class="auth-form__switch-btn-register">
                                                    Đăng kí
                                                </div>
                                            </div>
                        
                                            <div class="auth-form__form">
                                                <div class="auth-form__group">
                                                    <label for="" class="auth-form__title">Nhập email</label>
                                                    <input required type="text" name="email" class="auth-form__input" rules="required|email"  required placeholder="Nhập email của bạn" autocomplete="on">
                                                    <span class="auth-form__error"></span>
                                                </div>
                                                <div class="auth-form__group">
                                                    <label for="" class="auth-form__title">Nhập mật khẩu</label>
                                                    <input required type="password" name="password" class="auth-form__input" rules="required|min:6" required placeholder="Nhập mật khẩu của bạn" autocomplete="on">
                                                    <span class="auth-form__error"></span>
                                                </div>
                                            </div>
                        
                                            <div class="auth-form__support">
                                                <a href="" class="auth-form__forget">
                                                    Quên mật khẩu
                                                </a>
                                                <div class="auth-form__support-sepetare"></div>
                                                <a href="" class="auth-form__help">
                                                    Cần trợ giúp ?
                                                </a>
                                            </div>
                        
                                            <div class="auth-form__controls">
                                                <div class="auth-form__controls-btn auth-form__controls-back">TRỞ LẠI</div>
                                                <button name="login" class="auth-form__controls-btn auth-form__controls-btn--primary">ĐĂNG NHẬP</button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="auth-form__social">
                                        <a href="" class="auth-form__controls-btn btn--with-icon btn--size-s auth-form__social-facebook">
                                            <i class="auth-form__social-icon fa-brands fa-facebook"></i>
                                            Đăng nhập với Facebook
                                        </a>
                                        <a href="" class="auth-form__controls-btn btn--with-icon btn--size-s auth-form__social-google">
                                            <i class="auth-form__social-icon fa-brands fa-google"></i>
                                            Đăng nhập với Google
                                        </a>
                                    </div>
                    
                                </div>
                            </div>
                        </div> 

                    </div>
                    
               </div>

           </div>
        </div>
    
        <div id="container">
            <div class="grid wide">
                <!-- Slider Show -->
                <div class="row">
                    <div class="col l-8 m-8 c-12">
                        <div class="slidershow">
                            <div class="sliders">
                                <input type="radio" name = "r" id = "r1" checked>
                                <input type="radio" name = "r" id = "r2">
                                <input type="radio" name = "r" id = "r3">
                                <input type="radio" name = "r" id = "r4">
                                <input type="radio" name = "r" id = "r5">

                                <div class="slidershow__navgation">
                                    <label for="r1" class="slidershow__navgation-bar slidershow__navgation-bar1"></label>
                                    <label for="r2" class="slidershow__navgation-bar slidershow__navgation-bar2"></label>
                                    <label for="r3" class="slidershow__navgation-bar slidershow__navgation-bar3"></label>
                                    <label for="r4" class="slidershow__navgation-bar slidershow__navgation-bar4"></label>
                                    <label for="r5" class="slidershow__navgation-bar slidershow__navgation-bar5"></label>
                                </div>
                                <div class="slider-item s1">
                                    <img src="Assets/Img/SliderShow/slider1.jpg" alt="">
                                </div>
                                <div class="slider-item">
                                    <img src="Assets/Img/SliderShow/slider2.png" alt="">
                                </div>
                                <div class="slider-item">
                                    <img src="Assets/Img/SliderShow/slider3.png" alt="">
                                </div>
                                <div class="slider-item">
                                    <img src="Assets/Img/SliderShow/slider4.png" alt="">
                                </div>
                                <div class="slider-item">
                                    <img src="Assets/Img/SliderShow/slider5.jpg" alt="">
                                </div>
                            </div>
                            
                        </div>
                        <div class="slidershow-bottom">
                            <img src="Assets/Img/SliderShow/sliderBottom.png" alt="">
                        </div>
                    </div>

                    <div class="col l-4 m-4 c-12">
                        <div class="event">
                            <div class="event__header">
                                <div class="event__header-logo">
                                    EVENT
                                </div>
                                <marquee behavior="scroll" direction="left" class="event__header-heading">
                                    <b>Tháng Mới Bùng Nổ, Sập Giá Toàn Bộ Sản Phẩm.</b>
                                </marquee>
                            </div>
                            <ul class="event__list">
                                <li class="event__list-item">
                                    <div class="event__list-item-img">
                                        <img src="Assets/Img/Event/sale1.png" alt="">
                                    </div>
                                </li>
                                <li class="event__list-item">
                                    <div class="event__list-item-img">
                                        <img src="Assets/Img/Event/sale2.jpg" alt="">
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Body, Product, Category -->
                <div class="row" style="margin: 30px 0;"> 
                    <!-- Category -->
                    <div class="col l-3 m-3 c-0">
                        <!-- Price  -->
                        <div class="gird__sidebar">
                            <div class="gird__sidebar-price">
                                <button class="gird__sidebar-btn">
                                    <span>KHOẢNG GIÁ</span>
                                </button>
                                <div class="gird__sidebar-list">
                                    <ul>
                                        <li class="gird__sidebar-list-item">
                                            <label for="a1">
                                                <input type="radio" name="a" id="a1" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">Tất cả</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="a2">
                                                <input type="radio" name="a" id="a2" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">Nhỏ hơn 5,000,000₫</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="a3">
                                                <input type="radio" name="a" id="a3" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">Từ 5,000,000₫ - 10,000,000₫</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="a4">
                                                <input type="radio" name="a" id="a4" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">Từ 10,000,000₫ - 15,000,000₫</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="a5">
                                                <input type="radio" name="a" id="a5" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">Từ 15,000,000₫ - 20,000,000₫</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="a6">
                                                <input type="radio" name="a" id="a6" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">Lớn hơn 30,000,000₫</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Vendor -->
                        <div class="gird__sidebar">
                            <div class="gird__sidebar-vendor">
                                <button class="gird__sidebar-btn">
                                    <span>THƯƠNG HIỆU</span>
                                </button>
                                <div class="gird__sidebar-list">
                                    <ul>
                                        <li class="gird__sidebar-list-item">
                                            <label for="b1">
                                                <input type="radio" name="b" id="b1" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">Apple</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="b2">
                                                <input type="radio" name="b" id="b2" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">Samsung</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="b3">
                                                <input type="radio" name="b" id="b3" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">Oppo</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="b4">
                                                <input type="radio" name="b" id="b4" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">Xiaomi</span>
                                            </label>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Type RAM -->
                        <div class="gird__sidebar">
                            <div class="gird__sidebar-type">
                                <button class="gird__sidebar-btn">
                                    <span>RAM</span>
                                </button>
                                <div class="gird__sidebar-list">
                                    <ul>
                                        <li class="gird__sidebar-list-item">
                                            <label for="c1">
                                                <input type="radio" name="c" id="c1" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">1GB</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="c2">
                                                <input type="radio" name="c" id="c2" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">2GB</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="c3">
                                                <input type="radio" name="c" id="c3" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">3GB</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="c4">
                                                <input type="radio" name="c" id="c4" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">4GB</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="c5">
                                                <input type="radio" name="c" id="c5" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">5GB</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="c6">
                                                <input type="radio" name="c" id="c6" class="gird__sidebar-list-item-input">
                                                <span class="gird__sidebar-list-item-text">6GB</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-9 m-9 c-12">
                        <div class="body">
                            <div class="body__top">
                                <div class="body__top-header">
                                    <span class="body__top-heading">
                                        ĐIỆN THOẠI NỔI BẬT NHẤT
                                    </span>
                                </div>
                                <div class="body__top-sx">
                                    <label for="">Sắp xếp</label>
                                    <select class="body__top-sx-select">
                                        <option value="">Tùy chọn</option>
                                        <option value="">Từ cao đến thấp</option>
                                        <option value="">Từ thấp đến cao</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">

                                <?php 
                                    if (isset($products)) {
                                        for ($i = 0; $i < count($products); $i++) {
                                ?>
                                            <div class="col l-3 m-6 c-6" style="margin-top: 15px;">
                                                <div class="product">
                                                    <div class="product-like">Yêu thích</div>
                                                    <a href="#" class="product__img">
                                                        <img src="Assets/Img/Products/<?php echo $products[$i]['vendor'] .'/'. $products[$i]['link_img'] ?>" alt="">
                                                    </a>
                                                    <a href="#" class="product__description">
                                                        <span>
                                                            <?php echo $products[$i]['name'] ?>
                                                        </span>
                                                    </a>
                                                    <div class="product__price"><?php if ($products[$i]['price'] != 0) echo number_format($products[$i]['price'],0,'',',').'đ'; ?></div>
                                                    <div class="product__price-sale">
                                                        <div>
                                                            <?php echo number_format($products[$i]['sale_price'],0,'',',').'đ'; ?>
                                                        </div>
                                                        <div class="product__price-sale-icon"> 
                                                            <i class="fa-solid fa-cart-shopping"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                <?php 
                                        }
                                    }
                                ?>
                                    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    <?php include "footer.php"; ?>
    
    </div>

    <script src="Assets/JS/main.js"></script>
    <script>
        validator('#register-form');
        validator('#login-form');
    </script>

</body>
</html>

