
//alert('hellow');

$("button_add_product").click(function(){

//var qntity = $('#productDetailsUrl').val();

//alert(qntity);

alert('hellow');

});

$("button_add_product1").click(function(){
  
	/*var userid =  $('#user_id').val();
		 var productid = $('#productId').val();
		 var qntity = $('#productQuantity').val();*/




		 	 var user = {
		 	 	'uid' : userid , 
		 	 	'pid' : productid,
		 	 	'qntity': qntity
				}
		 	 
	var jsonString = JSON.stringify(user);

  $.ajax({
  	url: "demo_test.txt", 
  	method: 'POST' , 
  	data: { 'myinfo': jsonString },
  	success: function(result){
    
  },
  error: function(error){
  	alert('error');
  }

});
});