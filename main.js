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

// show more

let showMore = document.querySelector('.show-more')
let showMoreBtn = document.querySelector('.show-more-btn');
let detailComponents = document.querySelector('.product__detail-components');    
   
showMoreBtn.onclick = function() {
    detailComponents.classList.remove('detail__components-no-full');
    showMore.style.display = "none";
}