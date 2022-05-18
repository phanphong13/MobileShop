function deleteOrder(id_order) {
    console.log(id_order);
    $.ajax({
        url : "ajax/delete.php",
		type : "post",
        data : {
            'id_order' : id_order,   
        },
        dataType : 'text',
        success: function(result){
            alert("Xóa khỏi giỏ hàng thành công");
        },
        error : function(result) {
            alert("thất bại");      
        }
    })
}

// shake

setInterval(function() {
    btnCart.classList.add('shake');
    setTimeout(function() {
        btnCart.classList.remove('shake');
    }, 500)
}, 2000)


// log out

function logout() {
	$.ajax({
		url : 'ajax/logout.php',
		type : 'post',
		success : function (result) {
			window.location = "index.php?controller=start";
		}
	})
}