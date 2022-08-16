$(document).ready(function () {
	$(".updateCart").click(function () {
		var rowId = $(this).attr('id');

		var qty = $(this).parent().parent().find(".qty").val();

		var token = $("input[name='_token']").val();
		$.ajax({
			url:'update-Qty/'+rowId+'/'+qty,
			type:'GET',
			cache:false,
			data:{"_token":token,"id":rowId,"qty":qty},
			success:function (data) {
				
				window.location="cart";
					
			}
		});	
	});
});