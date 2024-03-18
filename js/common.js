$("#speak-one").click(function(){
	$("#content-one").fadeIn(1000).show();
	$("#content-two").hide();
	$("#content-three").hide();
	$("#content-four").hide();
	});
	
$("#speak-two").click(function(){
	$("#content-two").fadeIn(1000).show();
	$("#content-one").hide();
	$("#content-three").hide();
	$("#content-four").hide();
	});
	
$("#speak-three").click(function(){
	$("#content-three").fadeIn(1000).show();
	$("#content-one").hide();
	$("#content-two").hide();
	$("#content-four").hide();
});

$("#speak-four").click(function(){
	$("#content-four").fadeIn(1000).show();
	$("#content-one").hide();
	$("#content-two").hide();
	$("#content-three").hide();
	});