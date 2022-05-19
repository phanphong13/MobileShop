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
