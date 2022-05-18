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
            var registerIsConfirmPassword = document.querySelector('[name=password]').value;
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