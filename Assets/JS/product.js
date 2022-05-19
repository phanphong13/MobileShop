// mo user-info

var userInfoBtn = document.querySelector('.header__user');
var userInfo = document.querySelector('.header__user-info');

if (userInfoBtn) {
    userInfoBtn.addEventListener('click', function() {
        userInfo.classList.toggle("display");
    })

    userInfo.addEventListener('click', function(event) {
        event.stopPropagation();
    })
}
// mo CartList

var btnCart = document.querySelector('.header__cart');
var cartList = document.querySelector('.header__cart-products');

if (btnCart) {
    btnCart.addEventListener('click', function() {
        cartList.classList.toggle("display");
    })

    cartList.addEventListener('click', function(event) {
        event.stopPropagation();
    })
}

// 

var navResetPassword = document.querySelector('.header__user-info--resetPassword');
var modal__resetPassword = document.querySelector('.modal__resetPassword');
var modal__overlay__login = document.querySelector('.modal__overlay-login');

// mo resetPassword 

if (navResetPassword) {
    navResetPassword.addEventListener('click', function() {
        modal__overlay__login.setAttribute("style", "display: block;");
        modal__resetPassword.setAttribute("style", "display: block;");
    });

    navResetPassword.addEventListener('click', function(event) {
        event.stopPropagation();
    })
}

// click overlay => out
if (modal__overlay__login) {
    modal__overlay__login.onclick = function() {
        if(modal__overlay__login) {
            modal__overlay__login.setAttribute("style", "display: none;");
        }
        if (modal__resetPassword) {
            modal__resetPassword.setAttribute("style", "display: none;");
        }
        if (userInfo) {
            userInfo.classList.remove("display");
        }
    }

}

// mo resetPassword 

if (navResetPassword) {
    navResetPassword.addEventListener('click', function() {
        modal__overlay__login.setAttribute("style", "display: block;");
        modal__resetPassword.setAttribute("style", "display: block;");
    });

    navResetPassword.addEventListener('click', function(event) {
        event.stopPropagation();
    })
}

// show more

let showMore = document.querySelector('.show-more')
let showMoreBtn = document.querySelector('.show-more-btn');
let detailComponents = document.querySelector('.product__detail-components');    
  

if(showMoreBtn) {
    showMoreBtn.onclick = function() {
        detailComponents.classList.remove('detail__components-no-full');
        showMore.style.display = "none";
    }

}

// change color
let productColors = document.getElementsByClassName('purchase-item-color');
let productPrices = document.getElementsByClassName('purchase-item-price');
let productImg = document.querySelector('.product__purchase-option-item');
let productPriceCurrent = document.querySelector('.product-price-current');


let productSelectCurrent = productColors[0];
productColors[0].classList.add('purchase-item--clicked')
productImg.setAttribute('color', productColors[0].getAttribute('color'));
productImg.setAttribute('src', `Assets/Img/Products/${productImg.getAttribute('vendor')}/${productImg.getAttribute('id')}-${productImg.getAttribute('color')}.jpg`)
productPriceCurrent.innerText = productPrices[0].innerText;


for (let i = 0; i < productColors.length; i++) (function(i){
    productColors[i].addEventListener("click", function() {
        productColors[i].classList.add('purchase-item--clicked');
        productSelectCurrent.classList.remove('purchase-item--clicked');
        productImg.setAttribute('color', productColors[i].getAttribute('color'));
        productImg.setAttribute('src', `Assets/Img/Products/${productImg.getAttribute('vendor')}/${productImg.getAttribute('id')}-${productImg.getAttribute('color')}.jpg`)
        productPriceCurrent.innerText = productPrices[i].innerText;
        productSelectCurrent = productColors[i];
    });
})(i);


function orders(id_product) {
    var productColorSelect = document.querySelector('.product__purchase-option-item').getAttribute('color');
    // console.log(productColorSelect)
    // console.log(id_product)
    $.ajax({
        url : "ajax/order.php",
		type : "post",
        data : {
            'id_product' : id_product,
            'color' : productColorSelect
        },
        dataType : 'text',
        success: function(result){
            alert("Thêm vào giỏ hàng thành công");
        },
        error : function(result) {
            alert("Thêm vào giỏ hàng thất bại");      
        }
    })
}

// comment fb
let commentFb = document.querySelector(".fb-comments");

commentFb.setAttribute('data-href', `http://127.0.0.1:5500/MobileShop/product/${productImg}`)

// 
var product__content = document.getElementById("product-content");
if (product__content) {
    product__content.addEventListener('click', function() {
        if (userInfo) {
            userInfo.classList.remove("display");
        }

        if (cartList) {
            cartList.classList.remove("display");
        }
    })
}