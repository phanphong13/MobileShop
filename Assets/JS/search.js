$(document).ready(function(){
    filterSearch();	
    $('.productDetail').click(function(){
        filterSearch();
    });
});
let searchValue ='';
$(document).ready(function() {
		$("#SearchBar").keyup(function(){
			 searchValue = $(this).val();
		});
	});
function filterSearch() {
	var price = getFilterData('price')
	var brand = getFilterData('brand');
	var ram = getFilterData('ram');
	var searchProduct =  searchValue;
	var selector = $('.selector option:selected').val();
	var action = 'fetch_data';

	console.log(price, brand, ram,action,selector,searchProduct)

	$.ajax({
		url:"ajax/ProductSearch.php",
		method:"POST",	
		data:{action : action,price: price, brand:brand, ram:ram, selector:selector,searchProduct:searchProduct},
		success:function(response){
			 $(".searchResult").html(response);
		}
	});
}
function getFilterData(className) {
	var filter = [];
	$('.'+className+':checked').each(function(){
		filter.push($(this).val());
	});
	return filter;
}
