// Slides show

var count = 1;
setInterval(function() {
    test = document.getElementById('r' + count);
    test.checked = true;
    count++;
    if(count>4) {
        count = 1;
    }
}, 5000);

// Show category

var btnSideBar__price = document.querySelector(".gird__sidebar-price");
var btnSideBar__vendor = document.querySelector(".gird__sidebar-vendor");
var btnSideBar__type = document.querySelector(".gird__sidebar-type");

if (btnSideBar__price) {
    var list_price = btnSideBar__price.querySelector(".gird__sidebar-list");
    var btn_price =  btnSideBar__price.querySelector(".gird__sidebar-btn");
    btnSideBar__price.addEventListener('click' , function() {
        list_price.classList.toggle('gird__sidebar-list-hide');
        btn_price.classList.toggle('gird__sidebar-btn-active');
    })

    list_price.addEventListener('click' , function(event) {
        event.stopPropagation();
        
    })
}
if (btnSideBar__vendor) {
    var list_vendor = btnSideBar__vendor.querySelector(".gird__sidebar-list");
    var btn_vendor =  btnSideBar__vendor.querySelector(".gird__sidebar-btn");

    btnSideBar__vendor.addEventListener('click' , function() {
        list_vendor.classList.toggle('gird__sidebar-list-hide');
        btn_vendor.classList.toggle('gird__sidebar-btn-active');
    })

    list_vendor.addEventListener('click' , function(event) {
        event.stopPropagation();
        
    })
}
if (btnSideBar__type) {
    var list_type = btnSideBar__type.querySelector(".gird__sidebar-list");
    var btn_type =  btnSideBar__type.querySelector(".gird__sidebar-btn");

    btnSideBar__type.addEventListener('click' , function() {
        list_type.classList.toggle('gird__sidebar-list-hide');
        btn_type.classList.toggle('gird__sidebar-btn-active');
    })

    list_type.addEventListener('click' , function(event) {
        event.stopPropagation();
        
    })
}

// switch btn dang ki dang nhap

var navLogin = document.querySelector('.h-right__text-login');
var navRegister = document.querySelector('.h-right__text-register');


var modal__register = document.querySelector('.modal__register');
var modal__login = document.querySelector('.modal__login');

var switch_register = document.querySelector('.auth-form__switch-btn-register');
var switch_login = document.querySelector('.auth-form__switch-btn-login');

var modal__overlay__login = document.querySelector('.modal__overlay-login');

var btnBack = document.querySelectorAll('.auth-form__controls-back');

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

var navTransactionHistory = document.querySelector('.header__user-info--history');
var modal__transactionHistory = document.querySelector('.modal__transactionHistory');

// mo login
if (navLogin) {
    navLogin.onclick = function() {
        modal__overlay__login.setAttribute("style", "display: block;");
        modal__login.setAttribute("style", "display: block;");
    }

}

// mo register
if (navRegister) {
    navRegister.onclick = function() {
        modal__overlay__login.setAttribute("style", "display: block;");
        modal__register.setAttribute("style", "display: block;");
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

// mo transactionHistory
if (navTransactionHistory) {
    navTransactionHistory.addEventListener('click', function() {
        modal__overlay__login.setAttribute("style", "display: block;");
        modal__transactionHistory.setAttribute("style", "display: block;");
    });

    navTransactionHistory.addEventListener('click', function(event) {
        event.stopPropagation();
    })
}

// click overlay => out
if (modal__overlay__login) {
    modal__overlay__login.onclick = function() {
        if(modal__overlay__login) {
            modal__overlay__login.setAttribute("style", "display: none;");
        }
        if(modal__login) {
            modal__login.setAttribute("style", "display: none;");
        }
        if(modal__register) {
            modal__register.setAttribute("style", "display: none;");
        }
        if (modal__resetPassword) {
            modal__resetPassword.setAttribute("style", "display: none;");
        }
        if (modal__transactionHistory) {
            modal__transactionHistory.setAttribute("style", "display: none;");
        }
        if (userInfo) {
            userInfo.classList.remove("display");
        }
    }

}

if(switch_register) {
    switch_register.onclick = function() {
        modal__login.setAttribute("style", "display: none;");
        modal__register.setAttribute("style", "display: block;");
    }

}

if (switch_login) {
    switch_login.onclick = function() {
        modal__register.setAttribute("style", "display: none;");
        modal__login.setAttribute("style", "display: block;");
    }

}

for(var i = 0; i<btnBack.length; i++) {
    btnBack[i].onclick = function() {
        modal__overlay__login.setAttribute("style", "display: none;");
        modal__login.setAttribute("style", "display: none;");
        modal__register.setAttribute("style", "display: none;");
    }
}

var container = document.getElementById("container");
if (container) {
    container.addEventListener('click', function() {
        if (userInfo) {
            userInfo.classList.remove("display");
        }

        if (cartList) {
            cartList.classList.remove("display");
        }
    })
}