var an = function(){
	$("#sidebar").removeClass("col-md-2").addClass("col-md-1");
	$(".hide-item").hide();
	$("#btn-an").addClass("d-none");
	$("#content").removeClass("col-md-10").css("margin-left","8.3%").addClass("col-md-11");
	$("#btn-hien").removeClass("d-none");
}

var hien = function(){
	$("#sidebar").removeClass("col-md-1").addClass("col-md-2");
	$(".hide-item").show();
	$("#btn-hien").addClass("d-none");
	$("#content").removeClass("col-md-11").css("margin-left","16.6%").addClass("col-md-10");
	$("#btn-an").removeClass("d-none");	
}