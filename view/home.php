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
    <div class="app">
        <!-- header -->
        <?php 
        include "header.php";
        // include 'ajax/ProductSearch.php';
        ?>

    
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
                                                <input type="radio" name="a" id="a1" value = 0 class="gird__sidebar-list-item-input productDetail price">
                                                <span class="gird__sidebar-list-item-text">Tất cả</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="a2">
                                                <input type="radio" name="a" id="a2" value = 1 class="gird__sidebar-list-item-input productDetail price">
                                                <span class="gird__sidebar-list-item-text">Nhỏ hơn 5,000,000₫</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="a3">
                                                <input type="radio" name="a" id="a3" value = 2 class="gird__sidebar-list-item-input productDetail price">
                                                <span class="gird__sidebar-list-item-text">Từ 5,000,000₫ - 10,000,000₫</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="a4">
                                                <input type="radio" name="a" id="a4" value = 3 class="gird__sidebar-list-item-input productDetail price">
                                                <span class="gird__sidebar-list-item-text">Từ 10,000,000₫ - 15,000,000₫</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="a5">
                                                <input type="radio" name="a" id="a5" value = 4 class="gird__sidebar-list-item-input productDetail price">
                                                <span class="gird__sidebar-list-item-text">Từ 15,000,000₫ - 20,000,000₫</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="a6">
                                                <input type="radio" name="a" id="a6" value = 5 class="gird__sidebar-list-item-input productDetail price">
                                                <span class="gird__sidebar-list-item-text">Lớn hơn 20,000,000₫</span>
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
                                                <input type="radio" name="b" id="b1" value = "Apple"  class="gird__sidebar-list-item-input productDetail brand">
                                                <span class="gird__sidebar-list-item-text">Apple</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="b2">
                                                <input type="radio" name="b" id="b2" value = "Samsung" class="gird__sidebar-list-item-input productDetail brand">
                                                <span class="gird__sidebar-list-item-text">Samsung</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="b3">
                                                <input type="radio" name="b" id="b3" value = "Oppo" class="gird__sidebar-list-item-input productDetail brand">
                                                <span class="gird__sidebar-list-item-text">Oppo</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="b4">
                                                <input type="radio" name="b" id="b4" value = "Xiaomi" class="gird__sidebar-list-item-input productDetail brand">
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
                                                <input type="radio" name="c" id="c1" value = 3 class="gird__sidebar-list-item-input productDetail ram">
                                                <span class="gird__sidebar-list-item-text">3GB</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="c2">
                                                <input type="radio" name="c" id="c2" value = 4 class="gird__sidebar-list-item-input productDetail ram">
                                                <span class="gird__sidebar-list-item-text">4GB</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="c4">
                                                <input type="radio" name="c" id="c4" value = 6 class="gird__sidebar-list-item-input productDetail ram">
                                                <span class="gird__sidebar-list-item-text">6GB</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="c6">
                                                <input type="radio" name="c" id="c6" value = 8 class="gird__sidebar-list-item-input productDetail ram">
                                                <span class="gird__sidebar-list-item-text">8GB</span>
                                            </label>
                                        </li>
                                        <li class="gird__sidebar-list-item">
                                            <label for="c10">
                                                <input type="radio" name="c" id="c10" value = 12 class="gird__sidebar-list-item-input productDetail ram">
                                                <span class="gird__sidebar-list-item-text">12GB</span>
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
                                    <select class="body__top-sx-select productDetail selector">
                                        <option value="">Tùy chọn</option>
                                        <option value="DESC">Từ cao đến thấp</option>
                                        <option value="ASC">Từ thấp đến cao</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row searchResult">
                                

                                <?php 
                                    if (isset($products)) {
                                        for ($i = 0; $i < count($products); $i++) {
                                ?>
                                            <div class="col l-3 m-6 c-6" style="margin-top: 15px;">
                                                <div class="product">
                                                    <div class="product-like">Yêu thích</div>
                                                    <a href="?controller=product&id_product=<?php echo $products[$i]['id'] ?>" class="product__img">
                                                        <img src="Assets/Img/Products/<?php echo $products[$i]['vendor'] .'/'. $products[$i]['link_img'] ?>" alt="">
                                                    </a>
                                                    <a href="?controller=product&id_product=<?php echo $products[$i]['id'] ?>" class="product__description">
                                                        <span>
                                                            <?php echo $products[$i]['name'] ?>
                                                        </span>
                                                    </a>
                                                    <div class="product__price"><?php if ($products[$i]['price'] != 0) echo number_format($products[$i]['price'],0,'',',').'đ'; ?></div>
                                                    <div class="product__price-sale">
                                                        <div>
                                                            <?php echo number_format($products[$i]['sale_price'],0,'',',').'đ'; ?>
                                                        </div>
                                                        <a href="?controller=product&id_product=<?php echo $products[$i]['id'] ?>" class="product__price-sale-icon"> 
                                                            <i class="fa-solid fa-cart-shopping"></i>
                                                        </a>
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
    <div id="backtop">
        <i class="fa-solid fa-arrow-up-long"></i>
    </div>

    <script src="Assets/JS/main.js"></script>
    <script src="Assets/JS/delete.js"></script>
    <script src="Assets/JS/search.js"></script>

    <script>
        validator('#resetPassword-form');
    </script>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
     <script>
         $(document).ready(function() {
             $(window).scroll(function() {
                 if($(this).scrollTop()) {
                     $('#backtop').fadeIn();
                 } else {
                     $('#backtop').fadeOut();
                 }
             });
             $('#backtop').click(function() {
                 $('html, body').animate({
                     scrollTop: 0
                }, 400);
             })
         })
     </script>
</html>

