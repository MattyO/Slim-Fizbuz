$(document).ready(function (){
	$("#btn-list").click(function(){
		var toNumber = $("#txt-to").val();
		var fromNumber = $("#txt-from").val();
		var redirectString = "";
		
		if(toNumber == null){
			toNumber = 0;
		}else{
			redirectString += toNumber + "-";
		}
		
		if(fromNumber != null){
			redirectString += fromNumber ;
			window.location.replace("/Slim-FizBuz/list/" + redirectString);
		}
		
		//alert("list button clicked!! redirection string: " + redirectString);
		return false;
	});
	
	$("#btn-single").click(function(){
		//window.location.href ="www.google.com";
		var number = $("#txt-number").val() ;
		if(number != null){
			window.location.replace("/Slim-FizBuz/" + number);
		}
		//alert("redirecting to page ! " + $("#txt-number").val());
		
		return false;
	});
});