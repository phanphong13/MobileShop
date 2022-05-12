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
    btnSideBar__price.onclick = function() {
        list_price.classList.toggle('gird__sidebar-list-hide');
        btn_price.classList.toggle('gird__sidebar-btn-active');

    }
}
if (btnSideBar__vendor) {
    var list_vendor = btnSideBar__vendor.querySelector(".gird__sidebar-list");
    var btn_vendor =  btnSideBar__vendor.querySelector(".gird__sidebar-btn");

    btnSideBar__vendor.onclick = function() {
        list_vendor.classList.toggle('gird__sidebar-list-hide');
        btn_vendor.classList.toggle('gird__sidebar-btn-active');
    }
}
if (btnSideBar__type) {
    var list_type = btnSideBar__type.querySelector(".gird__sidebar-list");
    var btn_type =  btnSideBar__type.querySelector(".gird__sidebar-btn");

    btnSideBar__type.onclick = function() {
        list_type.classList.toggle('gird__sidebar-list-hide');
        btn_type.classList.toggle('gird__sidebar-btn-active');
    }
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

// click overlay => out
if (modal__overlay__login) {
    modal__overlay__login.onclick = function() {
        modal__overlay__login.setAttribute("style", "display: none;");
        modal__login.setAttribute("style", "display: none;");
        modal__register.setAttribute("style", "display: none;");
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

// validate form 

function validator(formSelector) {

    function getParent(element, selector) {
        while(element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    var formRules = {};
    

    /**
     * có lỗi return `error message`
     * không lỗi return undefined
     */
    var validatorRules = {
        required: function (value) {
            return value ? undefined : 'Vui lòng nhập trường này';
        },

        email: function(value) {
            var regex =  /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
            return regex.test(value) ? undefined : 'Vui lòng nhập email';
        },

        min: function(min) {
            return function(value) {
                return value.length >= min ? undefined : `Vui lòng nhập ít nhất ${min} kí tự`;
            }
        },

        max: function(max) {
            return function(value) {
                return value.length >= max ? undefined : `Vui lòng nhập tối đa ${max} kí tự`;
            }
        },
        isConfirm: function(value) {
            var registerIsConfirmPassword = document.querySelector('#register-form [name=password]').value;
            return value === registerIsConfirmPassword ? undefined : 'Nhập lại mật khẩu không chính khác';
        }
    }

    var formElement = document.querySelector(formSelector);

    if (formElement) {

        var inputs = formElement.querySelectorAll('[name][rules]');

        for (var input of inputs) {

            var rules = input.getAttribute('rules').split('|');

            for(var rule of rules) {

                var ruleInfo;
                var isRuleHasValue = rule.includes(':');

                if (isRuleHasValue) {
                    ruleInfo = rule.split(':');
                    rule = ruleInfo[0];
                }

                var ruleFunc = validatorRules[rule];

                if (isRuleHasValue) {
                    ruleFunc = ruleFunc(ruleInfo[1]);
                }

                if(Array.isArray(formRules[input.name])) {
                    formRules[input.name].push(ruleFunc);
                } else {
                    formRules[input.name] = [ruleFunc];
                }

            }

            // lang nghe su kien de validate(onchange, onblur)
            input.onblur = handleValidate;
            input.onclick = handleClearError;
            input.oninput = handleClearError;

        }

        // ham thuc hien validate;
        function handleValidate(event) {
            var rules = formRules[event.target.name];
            var errorMessage;

            rules.find(function (rule) {
                errorMessage = rule(event.target.value);
                return errorMessage;
            });

            // neu co loi hien ra UI
            if (errorMessage) {
                var formGroup = getParent(event.target, '.auth-form__group');
                if(formGroup) {
                    event.target.classList.add('auth-form__input-error');
                    var formError = formGroup.querySelector('.auth-form__error')
                    if (formError) {
                        formError.innerText = errorMessage;
                    }
                }
            }

        }

        function handleClearError(event) {
            var formGroup = getParent(event.target, '.auth-form__group');
            if (event.target.classList.contains('auth-form__input-error')) {
                event.target.classList.remove('auth-form__input-error');
                var formError = formGroup.querySelector('.auth-form__error')
                if (formError) {
                    formError.innerText = '';
                }
            }
        }

    }
    
}

