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