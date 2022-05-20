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


for (let i = 0; i < rowsTable.length; i++) {
    // rowsTable[i].onclick = anc;
    rowsTable[i].querySelector('.edit-btn .table-icon').onclick = editRow;
    rowsTable[i].querySelector('.save-btn .table-icon').onclick = saveRow;
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

    console.log(texts.length , numbers.length);
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
                alert(result);
                // console.log('success');
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
                alert(result);
            },
            error : function(result) {
                alert("Không thể gửi dữ liệu");      
            }
        })
    }

    if (texts.length === 2 && numbers.length === 3) {

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
let table = document.querySelector('.table-manage');
let tableBody = document.querySelector('tbody');

addRowBtn.onclick = addRow;
function addRow() {
    let newRow = document.createElement('tr');
    // for (let cell of cellsOfRow) {
    //     newRow.appendChild(cell);
    // }
    newRow.innerHTML = rowsTable[0].innerHTML;
    for (const cell of newRow.querySelectorAll('.has-edit')) {
        cell.innerHTML = '';
    }

    let id = rowsTable[rowsTable.length - 1].querySelectorAll('.const')
    
    let e = newRow.querySelectorAll('.const')
    e[0].innerText = parseInt(id[0].innerText) + 1;
    // add listen onclick for new row
    newRow.querySelector('.edit-btn .table-icon').onclick = editRow;
    newRow.querySelector('.save-btn .table-icon').onclick = saveRow;
    newRow.querySelector('.delete-product__link').onclick = deleteRow;
    // add new row to table body
    tableBody.prepend(newRow);
}

// delete row

let deleteBtns = document.querySelectorAll('.table-manage .delete-product__link');

for (let deleteBtn of deleteBtns) {
    deleteBtn.onclick = deleteRow;
}

function deleteRow() {
    this.parentElement.parentElement.remove();
    // thêm code xóa database tại đây
}
