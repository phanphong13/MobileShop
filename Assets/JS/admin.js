// set width

let tableHeadingList = document.querySelectorAll('.table-manage thead th');
let tableTextList = document.querySelectorAll('.table-manage tbody tr td');

for (let i = 0; i < tableHeadingList.length; i++) {
    tableHeadingList[i].style.cssText = `width: ${tableHeadingList[i].offsetWidth}px !important;`;
}

for (let i = 0; i < tableTextList.length; i++) {
    tableTextList[i].style.cssText = `width: ${tableTextList[i].offsetWidth}px !important;`;
}

// control table
let rowsTable = document.querySelectorAll('.table-manage tbody tr');
let rowsTable1 = document.querySelectorAll('.table-manage.table1 tbody tr');
let rowsTable2 = document.querySelectorAll('.table-manage.table2 tbody tr');
let rowsTable3 = document.querySelectorAll('.table-manage.table3 tbody tr');


for (let i = 0; i < rowsTable.length; i++) {
    // rowsTable[i].onclick = anc;
    rowsTable[i].querySelector('.edit-btn .table-icon').onclick = editRow;
    rowsTable[i].querySelector('.save-btn .table-icon').onclick = saveRow;
}

for (let i = 0; i < rowsTable1.length; i++) {
    // rowsTable[i].onclick = anc;
    rowsTable1[i].querySelector('.edit-btn .table-icon').onclick = editRow;
    rowsTable1[i].querySelector('.save-btn .table-icon').onclick = saveRow;
}

for (let i = 0; i < rowsTable2.length; i++) {
    // rowsTable[i].onclick = anc;
    rowsTable2[i].querySelector('.edit-btn .table-icon').onclick = editRow;
    rowsTable2[i].querySelector('.save-btn .table-icon').onclick = saveRow;
}

for (let i = 0; i < rowsTable3.length; i++) {
    // rowsTable[i].onclick = anc;
    rowsTable3[i].querySelector('.edit-btn .table-icon').onclick = editRow;
    rowsTable3[i].querySelector('.save-btn .table-icon').onclick = saveRow;
}
    // save row
function saveRow() {
    this.parentElement.classList.add('hidden');
    let rowTable = this.parentElement.parentElement;
    rowTable.querySelector('.edit-btn').classList.remove('hidden');
    rowTable.setAttribute('hasedit', 'no');
    let e1 = rowTable.querySelectorAll('.text');
    let e2 = rowTable.querySelectorAll('.const');
    texts = new Array();
    numbers = new Array();
    for (var i = 0; i < e1.length; i++) {
        texts[i] = e1[i].innerText;
    }
    for (var i = 0; i < e2.length; i++) {
        numbers[i] = parseInt(e2[i].innerText);
    }

    // console.log(texts.length , numbers.length);
    // account
    if (texts.length === 4 && numbers.length === 1) {
        $.ajax({
            url : "ajax/account.php",
            type : "post",  
            data : {
                'id' : numbers[0],
                'type' : texts[0],
                'name' : texts[1],
                'email' : texts[2],
                'password' : texts[3],
            },
            dataType : 'text',
            success: function(result){
                if (result === "Vui lòng nhập đầy đủ thông tin" || result == 'Không thể thêm' || result === "Email này đã đăng kí rồi")
                    alert(result)
                else {
                    window.location.reload(true)
			        // $(".account").html(result);
                    if (numbers[0] > 0) alert("Thay đổi thành công")
                    else alert("Thêm tài khoản thành công")
                }
            },
            error : function(result) {
                alert("Không thể gửi dữ liệu");      
            }
        })
    }

    // product
    if (texts.length === 4 && numbers.length === 4) {
        $.ajax({
            url : "ajax/product.php",
            type : "post",
            data : {
                'id' : numbers[0],
                'name' : texts[0],
                'vendor' : texts[1],
                'ram' : numbers[1],
                'name_img' : texts[2],
                'link_img' : texts[3],
                'price' : numbers[2],
                'sale_price' : numbers[3],
            },
            dataType : 'text',
            success: function(result){
                if (result === "Vui lòng nhập đầy đủ thông tin" || result === "Không thể thêm" || result === "Invalid origin price" || result === "Invalid ram" || result === "Invalid current price") {
                    alert(result)
                } else {
                    window.location.reload(true)
			        // $(".color").html(result);
                    if (numbers[0] > 0) alert("Thay đổi thành công")
                    else alert("Thêm sản phẩm thành công")
                }
            },
            error : function(result) {
                alert("Không thể gửi dữ liệu");      
            }
        })
    }

    // color
    if (texts.length === 2 && numbers.length === 3) {
        $.ajax({
            url : "ajax/color.php",
            type : "post",
            data : {
                'id' : numbers[0],
                'product_id' : numbers[1],
                'color' : texts[0],
                'sale_price_color' : numbers[2],
                'link_img' : texts[1],
            },
            dataType : 'text',
            success: function(result){
                if (result === "Vui lòng nhập đầy đủ thông tin" || result === "Không thể thêm" || result === "Invalid price") {
                    alert(result)
                } else {
                    window.location.reload(true)
			        // $(".color").html(result);
                    if (numbers[0] > 0) alert("Thay đổi thành công")
                    else alert("Thêm màu thành công")
                }
                
            },
            error : function(result) {
                alert("Không thể gửi dữ liệu");      
            }
        })
    }

    // version
    if (texts.length === 1 && numbers.length === 4) {
        $.ajax({
            url : "ajax/version.php",
            type : "post",
            data : {
                'id' : numbers[0],
                'product_id' : numbers[1],
                'version' : texts[0],
                'price_version' : numbers[2],
                'version_id' : numbers[3],
            },
            dataType : 'text',
            success: function(result){
                if (result === "Vui lòng nhập đầy đủ thông tin" || result === "Không thể thêm" || result === "Invalid price" || result === "Invalid version_id") {
                    alert(result)
                } else {
                    window.location.reload(true)
			        // $(".version").html(result);
                    if (numbers[0] > 0) alert("Thay đổi thành công")
                    else alert("Thêm phiên bản thành công thành công")
                }
            },
            error : function(result) {
                alert("Không thể gửi dữ liệu");      
            }
        })
    }

    // info
    if (texts.length === 2 && numbers.length === 2) {
        $.ajax({
            url : "ajax/info.php",
            type : "post",
            data : {
                'id' : numbers[0],
                'product_id' : numbers[1],
                'name' : texts[0],
                'value' : texts[1],
            },
            dataType : 'text',
            success: function(result){
                if (result === "Vui lòng nhập đầy đủ thông tin" || result === "Không thể thêm") {
                    alert(result)
                } else {
                    window.location.reload(true)
			        // $(".info").html(result);
                    if (numbers[0] > 0) alert("Thay đổi thành công")
                    else alert("Thêm thông số kỹ thuật thành công thành công")
                }
            },
            error : function(result) {
                alert("Không thể gửi dữ liệu");      
            }
        })
    }
    // thêm code gửi data về sql ở đây
}

    // edit row
function editRow() {
    this.parentElement.classList.add('hidden');
    let rowTable = this.parentElement.parentElement;
    rowTable.querySelector('.save-btn').classList.remove('hidden');
    rowTable.setAttribute('hasedit', 'yes');
    let cells = rowTable.querySelectorAll('.table-manage tbody .has-edit');

    for (let i = 0; i < cells.length; i++) {
        cells[i].onclick = function () {
            // if (this.getAttribute('no') === 'no') {
            //     return;
            // }
            if (rowTable.getAttribute('hasedit') === 'no' || this.hasAttribute('clicked')) {
                return;
            }

            this.setAttribute('clicked', 'yes');
            this.setAttribute('data-text', this.innerHTML);

            var input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.value = this.innerHTML;
            input.style.maxWidth = (this.offsetWidth) + 'px';
            input.style.height = (this.offsetHeight - 2 * this.clientTop) + 'px';
            input.style.fontFamily = 'inherit';
            input.style.fontSize = 'inherit';
            input.style.textAlign = 'inherit';
            input.style.border = '0';
            input.style.display = 'block';
            // input.style.lineHeight = (this.offsetHeight - 2 * this.clientTop) + 'px';

            input.onblur = function () {
                var td = input.parentElement;
                var originText = input.parentElement.getAttribute('data-text');
                var currentText = this.value;

                // if (originText != currentText) {
                td.removeAttribute('clicked');
                td.removeAttribute('data-text');
                td.innerText = currentText;
                td.style.padding = '12px 8px';
                // } else {
                //     td.removeAttribute('clicked');
                //     td.removeAttribute('data-text');
                //     td.innerText = originText;
                //     td.style.cssText = 'padding: 12px 8px';
                // }
            }

            input.onkeydown = function (event) {
                if (event.key === 'Enter') {
                    this.blur();
                }
            }

            this.innerHTML = '';
            this.style.padding = '0';
            this.append(input);
            this.firstElementChild.select()
        }
    }
}

// add row

let addRowBtn = document.querySelector('.add-row-table');
let addRowBtn1 = document.querySelector('.add-row-table1');
let addRowBtn2 = document.querySelector('.add-row-table2');
let addRowBtn3 = document.querySelector('.add-row-table3');
let table = document.querySelector('.table-manage');
let tableBody = document.querySelectorAll('tbody');

if (addRowBtn) addRowBtn.onclick = addRow;
if (addRowBtn1) addRowBtn1.onclick = addRow1;
if (addRowBtn2) addRowBtn2.onclick = addRow2;
if (addRowBtn3) addRowBtn3.onclick = addRow3;
function addRow() {
    let newRow = document.createElement('tr');
    // for (let cell of cellsOfRow) {
    //     newRow.appendChild(cell);
    // }
    newRow.innerHTML = rowsTable[0].innerHTML;
    for (const cell of newRow.querySelectorAll('.has-edit')) {
        cell.innerHTML = '';
    }

    if (newRow.querySelector('.email')) {
        newRow.querySelector('.email').classList.add('has-edit');
    }


    let id = rowsTable[rowsTable.length - 1].querySelectorAll('.const')
    
    let e = newRow.querySelectorAll('.const')
    e[0].innerText = '0';
    // add listen onclick for new row
    newRow.querySelector('.edit-btn .table-icon').onclick = editRow;
    newRow.querySelector('.save-btn .table-icon').onclick = saveRow;
    newRow.querySelector('.delete-product__link').onclick = deleteRow;
    // add new row to table body
    tableBody[0].prepend(newRow);
}

function addRow1() {
    let newRow = document.createElement('tr');
    // for (let cell of cellsOfRow) {
    //     newRow.appendChild(cell);
    // }
    newRow.innerHTML = rowsTable1[0].innerHTML;
    for (const cell of newRow.querySelectorAll('.has-edit.table1')) {
        cell.innerHTML = '';
    }
    let id = rowsTable1[rowsTable1.length - 1].querySelectorAll('.const.table1')

    let e = newRow.querySelectorAll('.const.table1')
    e[0].innerText = '0';
    e[1].innerText =  parseInt(id[1].innerText);

    // add listen onclick for new row
    newRow.querySelector('.edit-btn.table1 .table-icon').onclick = editRow;
    newRow.querySelector('.save-btn.table1 .table-icon').onclick = saveRow;
    newRow.querySelector('.delete-product__link').onclick = deleteRow;
    // add new row to table body
    tableBody[0].prepend(newRow);
}

function addRow2() {
    let newRow = document.createElement('tr');
    // for (let cell of cellsOfRow) {
    //     newRow.appendChild(cell);
    // }
    newRow.innerHTML = rowsTable2[0].innerHTML;
    for (const cell of newRow.querySelectorAll('.has-edit.table2')) {
        cell.innerHTML = '';
    }

    let id = rowsTable2[rowsTable2.length - 1].querySelectorAll('.const.table2')

    let e = newRow.querySelectorAll('.const.table2')
    e[0].innerText = '0';
    e[1].innerText =  parseInt(id[1].innerText);
    // add listen onclick for new row
    newRow.querySelector('.edit-btn.table2 .table-icon').onclick = editRow;
    newRow.querySelector('.save-btn.table2 .table-icon').onclick = saveRow;
    newRow.querySelector('.delete-product__link').onclick = deleteRow;
    // add new row to table body
    tableBody[1].prepend(newRow);
}

function addRow3() {
    let newRow = document.createElement('tr');
    // for (let cell of cellsOfRow) {
    //     newRow.appendChild(cell);
    // }
    newRow.innerHTML = rowsTable3[0].innerHTML;
    for (const cell of newRow.querySelectorAll('.has-edit.table3')) {
        cell.innerHTML = '';
    }
    let id = rowsTable3[rowsTable3.length - 1].querySelectorAll('.const.table3')

    let e = newRow.querySelectorAll('.const.table3')
    e[0].innerText = '0';
    e[1].innerText =  parseInt(id[1].innerText);
    // add listen onclick for new row
    newRow.querySelector('.edit-btn.table3 .table-icon').onclick = editRow;
    newRow.querySelector('.save-btn.table3 .table-icon').onclick = saveRow;
    newRow.querySelector('.delete-product__link').onclick = deleteRow;
    // add new row to table body
    tableBody[2].prepend(newRow);
}

// delete row

let deleteBtns = document.querySelectorAll('.table-manage .delete-product__link');

for (let deleteBtn of deleteBtns) {
    deleteBtn.onclick = deleteRow;
}

function deleteRow() {
    let oldRow = this.parentElement.parentElement
    this.parentElement.parentElement.remove();


    let e1 = oldRow.querySelectorAll('.text');
    let e2 = oldRow.querySelectorAll('.const');
    texts = new Array();
    numbers = new Array();
    for (var i = 0; i < e1.length; i++) {
        texts[i] = e1[i].innerText;
    }
    for (var i = 0; i < e2.length; i++) {
        numbers[i] = parseInt(e2[i].innerText);
    }

    // console.log(oldRow)

    // account
    if (texts.length === 4 && numbers.length === 1) {
        $.ajax({
            url : "ajax/deleteAdmin.php",
            type : "post",  
            data : {
                'id' : numbers[0],
                'type' : 'account',                
            },
            dataType : 'text',
            success: function(result){
                if (result === '') alert("Xóa Thành Công")
                else alert(result);
            },
            error : function(result) {
                alert("Không thể gửi dữ liệu");      
            }
        })
    }

    //product
    if (texts.length === 4 && numbers.length === 4) {
        $.ajax({
            url : "ajax/deleteAdmin.php",
            type : "post",  
            data : {
                'id' : numbers[0],
                'type' : 'product',                
            },
            dataType : 'text',
            success: function(result){
                if (result === '') alert("Xóa Thành Công")
                else alert(result);
            },
            error : function(result) {
                alert("Không thể gửi dữ liệu");      
            }
        })
    }

    // color
    if (texts.length === 2 && numbers.length === 3) {
        $.ajax({
            url : "ajax/deleteAdmin.php",
            type : "post",  
            data : {
                'id' : numbers[0],
                'type' : 'color',                
            },
            dataType : 'text',
            success: function(result){
                if (result === '') alert("Xóa Thành Công")
                else alert(result);
            },
            error : function(result) {
                alert("Không thể gửi dữ liệu");      
            }
        })
    }
    // version
    if (texts.length === 1 && numbers.length === 4) {
        $.ajax({
            url : "ajax/deleteAdmin.php",
            type : "post",  
            data : {
                'id' : numbers[0],
                'type' : 'version',                
            },
            dataType : 'text',
            success: function(result){
                if (result === '') alert("Xóa Thành Công")
                else alert(result);
            },
            error : function(result) {
                alert("Không thể gửi dữ liệu");      
            }
        })
    }

    // info
    if (texts.length === 2 && numbers.length === 2) {
        $.ajax({
            url : "ajax/deleteAdmin.php",
            type : "post",  
            data : {
                'id' : numbers[0],
                'type' : 'info',                
            },
            dataType : 'text',
            success: function(result){
                if (result === '') alert("Xóa Thành Công")
                 else alert(result);
                // console.log('success');
            },
            error : function(result) {
                alert("Không thể gửi dữ liệu");      
            }
        })
    }
    
    // thêm code xóa database tại đây
}
