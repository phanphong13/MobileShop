<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title><?php if (isset($result) && $result !== NULL) echo $result[0]['name'];?></title>
    <link rel="icon" href="Assets/Img/Header/Logo/clickbuy.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />
    <link rel="stylesheet" href="Assets/CSS/base.css" />
    <link rel="stylesheet" href="Assets/CSS/style.css" />
    <link rel="stylesheet" href="Assets/CSS/p_style.css" />
    <link rel="stylesheet" href="Assets/CSS/grid.css" />
    <link
      rel="stylesheet"
      href="Assets/Fonts/fontawesome-free-6.1.1-web/css/all.css"
    />
  </head>
  <body>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="c8aLsQbA"></script>
    <div class="ap">

      <!-- header -->
      <?php include "header.php"?>

      <!-- breadcrumb -->
      <div id="breadcrumb">
        <div class="grid wide">
          <!-- <div class="row"> -->
            <!-- <div class="col c-12"> -->
              <div class="margin-mobile-16 breadcrumb__container">
                <!-- bc menu -->
                <div class="breadcrumb__menu">
                  <div class="breadcrumb__menu-icon">
                    <i class="fa-solid fa-bars"></i>
                  </div>
      
                  <div class="box box-after box-shadow breadcrumb__menu-box">
                    <ul class="breadcrumb__menu-list">
                      <li class="breadcrumb__menu-item">
                        <a href="#" class="breadcrumb__menu-item-link">
                          <div class="breadcrumb__menu-item-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                          </div>
                          <div class="breadcrumb__menu-item--title">Điện thoại</div>
                        </a>
                      </li>
      
                      <li class="breadcrumb__menu-item">
                        <a href="#" class="breadcrumb__menu-item-link">
                          <div class="breadcrumb__menu-item-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                          </div>
                          <div class="breadcrumb__menu-item--title">Sam Sung</div>
                        </a>
                      </li>
      
                      <li class="breadcrumb__menu-item">
                        <a href="#" class="breadcrumb__menu-item-link">
                          <div class="breadcrumb__menu-item-icon">
                            <i class="fa-brands fa-apple"></i>
                          </div>
                          <div class="breadcrumb__menu-item--title">Iphone</div>
                        </a>
                      </li>
      
                      <!-- <li class="breadcrumb__menu-item">
                        <a href="#" class="breadcrumb__menu-item-link">
                          <div class="breadcrumb__menu-item-icon">
                            <i class="fa-solid fa-tablet-screen-button"></i>
                          </div>
                          <div class="breadcrumb__menu-item--title">Tablet</div>
                        </a>
                      </li>
      
                      <li class="breadcrumb__menu-item">
                        <a href="#" class="breadcrumb__menu-item-link">
                          <div class="breadcrumb__menu-item-icon">
                            <i class="fa-solid fa-clock"></i>
                          </div>
                          <div class="breadcrumb__menu-item--title">Đồng hồ</div>
                        </a>
                      </li>
      
                      <li class="breadcrumb__menu-item">
                        <a href="#" class="breadcrumb__menu-item-link">
                          <div class="breadcrumb__menu-item-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                          </div>
                          <div class="breadcrumb__menu-item--title">Đồ cũ</div>
                        </a>
                      </li> -->
                    </ul>
                  </div>
                </div>
      
                <!-- bc list -->
                <ul class="breadcrumb__list">
                  <li class="breadcrumb__list-item">
                    <a href="?controller=home" class="breadcrumb__list-item-link">
                      <i class="fa-solid fa-house-user"></i>
                      Trang chủ
                    </a>
                  </li>
      
                  <li class="breadcrumb__list-item">
                    <i class="fa-solid fa-angles-right breadcrumb breadcrumb__list-item-icon"></i>
                  </li>

                  <!-- <li class="breadcrumb__list-item">
                    <div class="breadcrumb__list-item-current">
                      Iphone 13 Series
                    </div>
                  </li> -->
                </ul>
              </div>
            <!-- </div> -->
          <!-- </div> -->
        </div>

      </div>

      <!-- content -->
      <div id="product-content" class="product-content">
        <div class="grid wide">
          <!-- brief -->
          <div id="product__brief" class="product__brief">
            <!-- header -->
            <div class="product__brief-header">
              <div class="product__brief-name">
                <!-- Name product -->
                <?php if (isset($result) && $result !== NULL) echo $result[0]['name'];?>
              </div>
              <div class="product__brief-rating">
                <i class="fa-solid fa-star star-yellow"></i>
                <i class="fa-solid fa-star star-yellow"></i>
                <i class="fa-solid fa-star star-yellow"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <a href="#" class="product__brief-rating-text">(1 đánh giá)</a>
              </div>
            </div>

            <!-- info -->
            <div class="row product__info">
              <!-- info, img -->
              <div class="col l-6 m-6 c-12">
                <div class="m-l-r">
                  <!-- img -->
                  <div class="product__info-img">
                    <div class="product__info--img">
                        <img
                          vendor="<?php if (isset($result) && $result !== NULL) echo $result[0]['vendor'] ?>"
                          id="<?php if (isset($result) && $result !== NULL) echo $result[0]['name_img'] ?>"
                          class="product__purchase-option-item"
                          alt=""
                        />
                    </div>
                  </div>

                  <!-- status -->
                  <div class="product__info--status tab-pc mt-16">
                    <div class="product__info--status-title">
                      Tình trạng máy
                    </div>
                    <div class="product__info--status-text">
                      Máy mới nguyên seal Fullbox chính hãng VN/A, chưa Active.
                      Bảo hành 12 tháng tại trung tâm bảo hành ủy quyền chính
                      hãng.
                    </div>
                  </div>
                </div>
              </div>

              <!-- purchase -->
              <div class="col l-6 m-6 c-12">
                <div class="m-l-r">
                  <div class="product__purchase">
                    <!-- price -->
                    <div class="product__purchase-price">
                      <div class="product-price">
                        <div class="product-price-origin"><?php if (isset($result) && $result !== NULL) echo number_format($result[0]['price'],0,'',',').'đ' ?></div>
                        <div class="product-price-current"></div>
                      </div>
                      <!-- <div class="product-installment">
                        Trả góp từ 5.098.000₫ / 1 tháng
                      </div> -->
                    </div>

                    <!-- option -->
                    <div class="product__purchase-option">
                      <!-- color -->
                      <div class="product__option-color">
                        <div class="product__option-title">
                          <i class="fa-solid fa-palette"></i>
                          Màu sắc
                        </div>
                        <ul class="row product__purchase-option-list">
                        <?php 
                          if (isset($color)) {
                            for ($i = 0; $i < count($color); $i++) { 
                        ?>
                          <li class="col l-4 m-6 c-6 product__purchase-option-item">
                            <div color="<?php echo $color[$i]['color']; ?>" class="purchase-item purchase-item-color">
                              <div class="l-2-4 c-3">
                                <img
                                    src="Assets/Img/Products/<?php echo $color[$i]['link_img']?>"
                                    
                                    alt=""
                                    class="purchase-item-img"
                                  />
                                </div>
                                <div class="purchase-item-info">
                                  <div class="purchase-item-title"><?php echo $color[$i]['color']; ?></div>
                                  <div class="purchase-item-price">
                                    <?php echo number_format($color[$i]['sale_price_color'],0,'',',').'đ'; ?>
                                </div>
                              </div>
                            </div>
                          </li>
                          
                        <?php 
                            }
                          }
                        ?>
                        </ul>

                      </div>

                      <!-- version -->
                      <div class="product__option-vertion">
                        <div class="product__option-title">Phiên bản khác</div>
                        <ul class="row product__purchase-option-list">
                          <?php 
                            if (isset($version)) {
                              for ($i = 0; $i < count($version); $i++) {
                          ?>
                            <li class="col l-4 m-6 c-6 product__purchase-option-item">
                              <a href="?controller=product&id_product=<?php echo $version[$i]['version_id'] ?>" class = "product__purchase-option-item-link">
                                <div class="purchase-item purchase-item-memory">
                                  <div class="purchase-item-info">
                                    <div class="purchase-item-title"><?php echo $version[$i]['version'] ?></div>
                                    <div class="purchase-item-price">
                                      <?php echo number_format($version[$i]['price_version'],0,'',',').'đ'; ?>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </li>
                          <?php
                              }
                            }
                          ?>
                        </ul>
                      </div>
                    </div>

                    <!-- promotion -->
                    <div class="product__promotion">
                      <!-- promotion header -->
                      <h1 class="product__promotion-title">
                        <span class="promotion__item-icon">
                          <i class="fa-solid fa-gift"></i>
                        </span>
                        Khuyến Mãi
                      </h1>

                      <!-- promotion list -->
                      <ul class="product__promotion-list">
                        <li class="product__promotion-item">
                          <span class="promotion__item-icon">
                            <i class="fa-solid fa-gift"></i>
                          </span>
                          <a href="" class="promotion__item-link">Đăng ký khuyến mãi - Giảm thêm 100.000đ </a>
                        </li>

                        <li class="product__promotion-item">
                          <span class="promotion__item-icon">
                            <i class="fa-solid fa-gift"></i>
                          </span>
                          <a href="" class="promotion__item-link">Thu cũ đổi mới - Trợ giá 1.000.000đ</a>
                        </li>

                        <li class="product__promotion-item">
                          <span class="promotion__item-icon">
                            <i class="fa-solid fa-gift"></i>
                          </span>
                          <a href="" class="promotion__item-link">Tặng Phiếu mua hàng 600.000đ ( áp dụng khi mua Ốp lưng chính hãng)</a>
                        </li>

                        <li class="product__promotion-item">
                          <span class="promotion__item-icon">
                            <i class="fa-solid fa-gift"></i>
                          </span>
                          <a href="" class="promotion__item-link">Tặng Voucher giảm 200.000đ khi mua Laptop</a>
                        </li>

                        <li class="product__promotion-item">
                          <span class="promotion__item-icon">
                            <i class="fa-solid fa-gift"></i>
                          </span>
                          <a href="" class="promotion__item-link">Giảm giá 5% khi mua phụ kiện</a>
                        </li>
                      </ul>
                    </div>

                    <!-- buy button -->
                    <div class="product__buy">
                      <!-- buy product -->
                      <a href="" onclick="orders(<?php echo $id ?>)" class="btn buy-btn__product product__buy-btn">
                        <div class="product__buy-btn-title">Thêm vào giỏ hàng</div>
                        <div class="div payment-method">
                          (Nhận tại cửa hàng hoặc giao tận nhà)
                        </div>
                      </a>

                      <!-- buy btn other -->
                      <div class="product__buy-btn-other">
                        <!-- btn installment -->
                        <button
                          class="btn product__buy-btn buy-btn__installment"
                        >
                          <div class="product__buy-btn-title">Trả Góp 0%</div>
                          <div class="div payment-method">
                            (Xét duyệt online)
                          </div>
                        </button>

                        <!-- btn credit -->
                        <button class="btn product__buy-btn buy-btn__credit">
                          <div class="product__buy-btn-title">
                            Trả Góp Qua Thẻ
                          </div>
                          <div class="div payment-method">
                            (Visa, MasterCard, JBL)
                          </div>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- show on mobile -->
              <div class="col l-6 m-6 c-12">
                <div class="m-l-r">
                  <div class="product__info--status mt-16 mobile">
                    <div class="product__info--status-title">
                      Tình trạng máy
                    </div>
                    <div class="product__info--status-text">
                      Máy mới nguyên seal Fullbox chính hãng VN/A, chưa Active.
                      Bảo hành 12 tháng tại trung tâm bảo hành ủy quyền chính
                      hãng.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- detail -->
          <div id="product__detail" class="product__detail">
            <div class="row row-reverse">
              <!-- specifications -->
              <div class="col l-4 m-4 c-12">
                <div class="margin-mobile-8">
                  <div class="product__specifications">
                    <h1 class="product__specifications-title">
                      THÔNG SỐ KỸ THUẬT
                    </h1>
                    <table class="product__specifications-table">
                      <?php 
                        if (isset($info)) {
                          for ($i = 0; $i < count($info); $i++) {
                            if ($i % 2 == 0) {
                      ?>
                        <tr class="specifications__table-row table-row-odd">
                          <th class="specifications__table-col specifications__table-label"><?php echo $info[$i]['name']?></th>
                          <td class="specifications__table-col specifications__table-text"><?php echo $info[$i]['value']?></td>
                        </tr>
                      <?php
                            }
                            else {
                      ?>
                        <tr class="specifications__table-row table-row-even">
                          <th class="specifications__table-col specifications__table-label"><?php echo $info[$i]['name']?></th>
                          <td class="specifications__table-col specifications__table-text"><?php echo $info[$i]['value']?></td>
                        </tr>
                      <?php
                            }
                          }
                        }
                      ?>
                      
                      
                    </table>
                  </div>
                </div>
              </div>

              <div class="col l-8 m-8 c-12">
                <div class="m-l-r product__detail-container">
                  <!-- video review -->
                  <div class="product__detail-video-review">
                    <iframe
                      width="560"
                      height="315"
                      src="https://www.youtube.com/embed/vDIf-MphEyk?start=1"
                      title="YouTube video player"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen
                      class="st-video"
                    ></iframe>
                  </div>

                  <!-- components -->
                  <div
                    class="product__detail-components detail__components-no-full"
                  >
                    <h1 class="product__detail-title">
                      iPhone 13 Pro Max – siêu phẩm được mong chờ nhất ở nửa
                      cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột
                      phá khi so với người tiền nhiệm, bên trong đây vẫn là một
                      sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp
                      lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn,
                      cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15
                      Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.
                    </h1>

                    <h1 class="product__detail-title">
                      Thiết kế đẳng cấp hàng đầu
                    </h1>

                    <div class="product__detail-text">
                      iPhone mới kế thừa thiết kế đặc trưng từ iPhone 12 Pro Max
                      khi sở hữu khung viền vuông vức, mặt lưng kính cùng màn
                      hình tai thỏ tràn viền nằm ở phía trước.
                    </div>

                    <div class="product__detail-text">
                      Với iPhone 13 Pro Max phần tai thỏ đã được thu gọn lại 20%
                      so với thế hệ trước, không chỉ giải phóng nhiều không gian
                      hiển thị hơn mà còn giúp mặt trước chiếc điện thoại trở
                      nên hấp dẫn hơn mà vẫn đảm bảo được hoạt động của các cảm
                      biến.
                    </div>

                    <div class="product__detail-text">
                      iPhone 13 Pro Max – siêu phẩm được mong chờ nhất ở nửa
                      cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột
                      phá khi so với người tiền nhiệm, bên trong đây vẫn là một
                      sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp
                      lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn,
                      cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15
                      Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách. Thiết
                      kế đẳng cấp hàng đầu iPhone mới kế thừa thiết kế đặc trưng
                      từ iPhone 12 Pro Max khi sở hữu khung viền vuông vức, mặt
                      lưng kính cùng màn hình tai thỏ tràn viền nằm ở phía
                      trước. Với iPhone 13 Pro Max phần tai thỏ đã được thu gọn
                      lại 20% so với thế hệ trước, không chỉ giải phóng nhiều
                      không gian hiển thị hơn mà còn giúp mặt trước chiếc điện
                      thoại trở nên hấp dẫn hơn mà vẫn đảm bảo được hoạt động
                      của các cảm biến. Có thể là hình ảnh về điện thoại Điểm
                      thay đổi dễ dàng nhận biết trên iPhone 13 Pro Max chính là
                      kích thước của cảm biến camera sau được làm to hơn và để
                      tăng độ nhận diện cho sản phẩm mới thì Apple cũng đã bổ
                      sung một tùy chọn màu sắc Sierra Blue (màu xanh dương nhạt
                      hơn so với Pacific Blue của iPhone 12 Pro Max).
                    </div>

                    <div class="product__detail-text">
                      Máy vẫn tiếp tục sử dụng khung viền thép cao cấp cho khả
                      năng chống trầy xước và va đập một cách vượt trội, kết hợp
                      với khả năng kháng bụi, nước chuẩn IP68.
                    </div>

                    <img
                      src="Assets/Img/Products/Apple/detail_1.jpg"
                      alt="hình ảnh về điện thoại"
                      class="product__detail-img"
                    />

                    <h1 class="product__detail-title">
                      Màn hình giải trí siêu mượt cùng tần số quét 120 Hz
                    </h1>

                    <div class="product__detail-text">
                      iPhone 13 Pro Max được trang bị màn hình kích thước 6.7
                      inch cùng độ phân giải 1284 x 2778 Pixels, sử dụng tấm nền
                      OLED cùng công nghệ Super Retina XDR cho khả năng tiết
                      kiệm năng lượng vượt trội nhưng vẫn đảm bảo hiển thị sắc
                      nét sống động chân thực.
                    </div>

                    <div class="product__detail-text">
                      iPhone Pro Max năm nay đã được nâng cấp lên tần số quét
                      120 Hz, mọi thao tác chuyển cảnh khi lướt ngón tay trên
                      màn hình trở nên mượt mà hơn đồng thời hiệu ứng thị giác
                      khi chúng ta chơi game hoặc xem video cũng cực kỳ mãn
                      nhãn.
                    </div>

                    <div class="product__detail-text">
                      Cùng công nghệ ProMotion thông minh có thể thay đổi tần số
                      quét từ 10 đến 120 lần mỗi giây tùy thuộc vào ứng dụng,
                      thao tác bạn đang sử dụng, nhằm tối ưu thời lượng sử dụng
                      pin và trải nghiệm của bạn.
                    </div>

                    <img
                      src="Assets/Img/Products/Apple/detail_2.jpg"
                      alt="hình ảnh về điện thoại"
                      class="product__detail-img"
                    />

                    <div class="product__detail-text">
                      Nếu bạn dùng iPhone 13 Pro Max để chơi game, tần số quét
                      120 Hz kết hợp hiệu suất đồ họa tuyệt vời của GPU sẽ khiến
                      máy trở nên vô cùng hoàn hảo khi trải nghiệm.
                    </div>

                    <h1 class="product__detail-title">
                      Hiệu năng đầy hứa hẹn với Apple A15 Bionic
                    </h1>

                    <div class="product__detail-text">
                      iPhone 13 Pro Max sẽ được trang bị bộ vi xử lý Apple A15
                      Bionic mới nhất của hãng, được sản xuất trên tiến trình
                      5nm+, đảm bảo mang lại hiệu năng vận hành ấn tượng mà vẫn
                      tiết kiệm điện tốt nhất cùng khả năng hỗ trợ mạng 5G tốc
                      độ siêu cao.
                    </div>

                    <div class="product__detail-text">
                      Theo Apple công bố, A15 Bionic là chipset nhanh nhất trong
                      thế tới smartphone (9/2021), có tốc độ nhanh hơn 50% so
                      với các chip khác trên thị trường, có thể thực hiện 15.8
                      nghìn tỉ phép tính mỗi giây, giúp hiệu năng CPU nhanh hơn
                      bao giờ hết.
                    </div>

                    <img
                      src="Assets/Img/Products/Apple/detail_3.jpg"
                      alt="hình ảnh về điện thoại"
                      class="product__detail-img"
                    />

                    <div class="product__detail-text">
                      Máy sở hữu bộ nhớ trong 128 GB, vừa đủ với nhu cầu sử dụng
                      của một người dùng cơ bản, không có nhu cầu quay video quá
                      nhiều, ngoài ra năm nay cũng có thêm phiên bản bộ nhớ
                      trong lên đến 1TB, bạn có thể cân nhắc nếu có nhu cầu lưu
                      trữ cao.
                    </div>

                    <div class="product__detail-text">
                      Ngoài ra, máy còn được tích hợp công nghệ Wi-Fi 6, chuẩn
                      kết nối không dây mới, dự kiến sẽ cùng với 5G giúp đưa
                      trải nghiệm internet của người dùng lên tầm cao mới.
                    </div>

                    <img
                      src="Assets/Img/Products/Apple/detail_4.jpg"
                      alt="hình ảnh về điện thoại"
                      class="product__detail-img"
                    />

                    <div class="product__detail-text">
                      Apple đã không ngừng cải tiến đem đến cho người dùng sản
                      phẩm tốt nhất, iPhone 13 Pro Max 128GB vẫn giữ được các
                      điểm nổi bật của người tiền nhiệm, nổi bật với cải tiến về
                      cấu hình, thời lượng pin cũng như camera và nhiều điều còn
                      chờ bạn khám phá.
                    </div>
                  </div>

                  <!-- show more -->
                  <div class="show-more">
                    <div class="read-more">
                      <div class="btn show-more-btn">
                        Xem thêm
                        <i class="fa-solid fa-sort-down"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- related -->
          <div id="product__related" class="product__related">
            
            <!-- related header -->
            <div class="product__related-header">
              SẢN PHẨM TƯƠNG TỰ
            </div>

            <!-- related body -->
            <div class="body">
              <div class="row">
                <?php 
                  if (isset($similar)) {
                    for ($i = 0; $i < count($similar); $i++) {
                ?>
                  <div class="col l-2-4 m-3 c-5" style="margin-top: 15px">
                  <div class="product">
                      <div class="product-like">Yêu thích</div>
                      <a href="?controller=product&id_product=<?php echo $similar[$i]['id'] ?>" class="product__img">
                          <img src="Assets/Img/Products/<?php echo $similar[$i]['vendor'] .'/'. $similar[$i]['link_img'] ?>" alt="">
                      </a>
                      <a href="?controller=product&id_product=<?php echo $similar[$i]['id'] ?>" class="product__description">
                          <span>
                              <?php echo $similar[$i]['name'] ?>
                          </span>
                      </a>
                      <div class="product__price"><?php if ($similar[$i]['price'] != 0) echo number_format($similar[$i]['price'],0,'',',').'đ'; ?></div>
                      <div class="product__price-sale">
                          <div>
                              <?php echo number_format($similar[$i]['sale_price'],0,'',',').'đ'; ?>
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

          <!-- ratings -->
          <div id="product__ratings" class="product__ratings">
              <div class="fb-comments" data-href="http://127.0.0.1:5500/MobileShop/product.html" data-width="80%" data-numposts="5" data-mobile="true"></div>
          </div>
        </div>
      </div>

      <!-- footer -->
      <?php include 'footer.php'; ?>
    </div>
    <div id="backtop">
        <i class="fa-solid fa-arrow-up-long"></i>
    </div>

    <script src="Assets/JS/product.js"></script>
    <script src="Assets/JS/delete.js"></script>
    <script src="Assets/JS/validate.js"></script>
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
