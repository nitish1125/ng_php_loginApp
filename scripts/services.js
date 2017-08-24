application.factory("Http",function($http){

var base_url="../ng_php_loginApp/server_pages/server.php";


return{
	post:function(form_data){
		var request=$http({
			method:"post",
			url:base_url,
			data:form_data,
		});

		return request;
	},

	send:function(request,callback){
		request.then(function(response){
			callback(response);
		})/*.error(function(msg){
			alert(msg.data);
		})*/;
	}
}

});


