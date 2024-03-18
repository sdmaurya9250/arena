$(function(){
	var fname, mob, citie, corse, enqname, enqPhone; 
	
	
	$("#fName").focusout(function(){
		firstName()
		});
		
	$("#eMail").focusout(function(){
		
		emailId()
		
		});
		
	$("#mobile").focusout(function(){
		mobileNum()
		});
	
	$("#city").focusout(function(){
		cities()
		});
	
	$("#courses").focusout(function(){
		coursesLst()
		});
		
	$("#name").focusout(function(){
		NrqName()
		});
		
	$("#mail").focusout(function(){
		EnqemailId()
		});
		
	$("#phone").focusout(function(){
		EnqPhone()
		});
	
	
	function firstName()
	{
		fname = $("#fName").val();
		
		if(fname == "")
		{
			$("#fName").addClass("err_mesgss");
		}else
		{
			$("#fName").removeClass("err_mesgss");	
		}
	
	}
	
	function emailId()
	{
		
		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-z0-9.-]+\.[a-zA-z]{2,4}$/i);
		
		if(pattern.test($("#eMail").val()))
		{
			$("#eMail").removeClass("err_mesgss");
		}else
		{
			$("#eMail").addClass("err_mesgss");	
		}
		
	}
	
	function mobileNum(){
		var mob = $("#mobile").val();
		var filter = /^[0-9-+]+$/;
		
		if(mob == "" || mob.length > 10 || mob.length < 10 || (!filter.test(mob)))
		{
			$("#mobile").addClass("err_mesgss");	
		}else
		{
			$("#mobile").removeClass("err_mesgss");
		}
	
	}
	
	function cities()
{
	var citie = $("#city").val();
	if(citie == "")
	{
		$("#city").addClass("err_mesgss");	
	}else
	{
		$("#city").removeClass("err_mesgss");	
	}
}
	
	function coursesLst(){
		var corse = $("#courses").val();
		if(corse == "")
		{
			$("#courses").addClass("err_mesgss");	
		}else
		{
			$("#courses").removeClass("err_mesgss");	
		}
		 
		}
		
	function NrqName(){
		var enqname = $("#name").val();
		if(enqname == ""){
			$("#name").addClass("err_mesgss");
			}else
			{
				$("#name").removeClass("err_mesgss");
			}
		}
		
	function EnqemailId()
	{
		
		var pat = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-z0-9.-]+\.[a-zA-z]{2,4}$/i);
		
		if(pat.test($("#mail").val()))
		{
			$("#mail").removeClass("err_mesgss");
		}else
		{
			$("#mail").addClass("err_mesgss");	
		}
		
	}
	
	function EnqPhone(){
		var enqPhone = $("#phone").val();
		var filt = /^[0-9-+]+$/;
		if(enqPhone == "" || enqPhone.length < 10 || enqPhone.length > 10 || (!filt.test(enqPhone)))
		{
			$("#phone").addClass("err_mesgss")	
		}else
		{
			$("#phone").removeClass("err_mesgss");	
		}
		
		}
		
	$("#submit").click(function(){
		var fname = $("#fName").val();
		var email = $("#eMail").val();
		var mob = $("#mobile").val();
		var citie = $("#city").val();
		var corse = $("#courses").val();
				
		if(fname == ""){
			$("#fName").addClass("err_mesgss");
			return false;
			}
		if(email == ""){
			$("#eMail").addClass("err_mesgss");
			return false;
			}
		if(mob == ""){
			$("#mobile").addClass("err_mesgss");
			return false;
			}
		if(citie == ""){
			$("#city").addClass("err_mesgss");
			return false;
			}
		if(corse == ""){
			$("#courses").addClass("err_mesgss");
			}
		adProsMess()
		});
		

function datClr(){
	document.getElementById("form-apply").reset();
	
	}
	
	function adProsMess(){
		$("#thankMess").addClass("prossMess").html("Please Wait Data is Capturing").slideDown();

		setTimeout(function(){
			$("#thankMess").removeClass("prossMess").html("Please Wait Data is Capturing").empty();
			$("#thankMess").addClass("succMess").html("Thank you data captured successfully"); 
			datClr();
			
			}, 7999);
			
		}
		
		$("#sub-btn").click(function(){
		var enqname = $("#name").val();
		var enqMail = $("#mail").val();
		var enqPhone = $("#phone").val();
		
		if(enqname == ""){
			$("#name").addClass("err_mesgss");
			return false;
		}
		if(enqMail == ""){
			$("#mail").addClass("err_mesgss");
			return false;
			}
		if(enqPhone == ""){
			$("#phone").addClass("err_mesgss");
			}
                adProsMess()
		setTimeout(function(){
			document.getElementById("enquiryForm").reset();
			}, 8000);
		
	});
		
$("#recCompName").focusout(function() {
    var compNam = $("#recCompName").val();
	if(compNam == ""){
		$("#recCompName").addClass("err_mesgss");
		}else{
			$("#recCompName").removeClass("err_mesgss");
			
			}
});


$("#recMobile").focusout(function() {
var filt = /^[0-9-+]+$/;
var recMob = $("#recMobile").val();
if(recMob == "" || recMob.length < 10 || recMob.length > 10 || (!filt.test(recMob))){
	 $("#recMobile").addClass("err_mesgss");
	}else{
		$("#recMobile").removeClass("err_mesgss");
		}
});

$("#recEmail").focusout(function() {
   var pat = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-z0-9.-]+\.[a-zA-z]{2,4}$/i);
   
   if(pat.test($("#recEmail").val())){
	   $("#recEmail").removeClass("err_mesgss");
	   }else{
		   $("#recEmail").addClass("err_mesgss");
		   }
});

$("#recDoReq").focusout(function() {
    var recDesign = $("#recDoReq").val();
	if(recDesign == ""){
		$("#recDoReq").addClass("err_mesgss");
		}else{
			$("#recDoReq").removeClass("err_mesgss");
			}
});

$("#recVacan").focusout(function() {
    var recVac = $("#recVacan").val();
	if(recVac == ""){
		$("#recVacan").addClass("err_mesgss");
		}else{
			$("#recVacan").removeClass("err_mesgss");
			}
});

$("#recMinQual").focusout(function() {
   var recMeenQual = $("#recMinQual").val();
   if(recMeenQual == ""){
	   $("#recMinQual").addClass("err_mesgss");
	   } else{
		   $("#recMinQual").removeClass("err_mesgss");
		   }
});

$("#recMinSal").focusout(function() {
    var recMeenSal = $("#recMinSal").val();
	if(recMeenSal == ""){
		$("#recMinSal").addClass("err_mesgss");
		}else{
			$("#recMinSal").removeClass("err_mesgss");
			}
});

$("#recContPers").focusout(function() {
   var recConPers = $("#recContPers").val();
   if(recConPers == ""){
	   $("#recContPers").addClass("err_mesgss");
	   }else{
		   $("#recContPers").removeClass("err_mesgss");
		   } 
});

$("#recAdres").focusout(function() {
   var recAdress  = $("#recAdres").val();
   if(recAdress == ""){
	   $("#recAdres").addClass("err_mesgss");
	   }else{
		   $("#recAdres").removeClass("err_mesgss");
		   } 
});

$("#recReqDet").focusout(function() {
    var recReqDeet = $("#recReqDet").val();
	if(recReqDeet == ""){
		$("#recReqDet").addClass("err_mesgss");
		}else{
			$("#recReqDet").removeClass("err_mesgss");
			}
});

 $("#recbtn").click(function(){
	 
	 var compNam = $("#recCompName").val();
	 var recMob = $("#recMobile").val();
	 var recEMal = $("#recEmail").val();
	 var recDesign = $("#recDoReq").val();
	 var recVac = $("#recVacan").val();
	 var recMeenQual = $("#recMinQual").val();
	 var recMeenSal = $("#recMinSal").val();
	 var recConPers = $("#recContPers").val();
	 var recAdress  = $("#recAdres").val();
	 var recReqDeet = $("#recReqDet").val();
	 
	 
	 if(compNam == ""){
		 $("#recCompName").addClass("err_mesgss");
			return false;
		 }
		 
	if(recMob == ""){
		$("#recMobile").addClass("err_mesgss");
			return false;
		}
		
	if(recEMal == ""){
		$("#recEmail").addClass("err_mesgss");
			return false;
		}
	 if(recDesign == ""){
		 $("#recDoReq").addClass("err_mesgss");
			return false;
		 }
		 
	if(recVac == ""){
		$("#recVacan").addClass("err_mesgss");
			return false;
		}
	
	if(recMeenQual == ""){
		$("#recMinQual").addClass("err_mesgss");
			return false;
		}
		
	if(recMeenSal == ""){
		$("#recMinSal").addClass("err_mesgss");
			return false;
		}
		
	if(recConPers == ""){
		$("#recContPers").addClass("err_mesgss");
			return false;
		}
	 
	if(recAdress == ""){
		$("#recAdres").addClass("err_mesgss");
			return false;
		}
		
	if(recReqDeet == ""){
		$("#recReqDet").addClass("err_mesgss");
			return false;
		}
	 adProsMess()
	 setTimeout(function(){
		 document.getElementById("rectq").reset();
		 },8000);
	 
 });

	});
