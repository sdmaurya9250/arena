<?php include'header.php' ?>
<?php include'responsive.php'?>
<!-- <style>
  @media only screen and (max-width:2064px){
  #maincontainerapp{
    margin-top:200px;
  }
  .ftrText{
    margin-top:0px;
  }
  }
  @media only screen and (max-width:1440px){
  #maincontainerapp{
    margin-top:200px;
  }
  .ftrText{
    margin-top:0px;
  }
  }
  @media only screen and (max-width:1024px){
  #maincontainerapp{
    margin-top:160px;
  }
  .ftrText{
    margin-top:0px;
  }
  }
  @media only screen and (max-width:425px){
  #maincontainerapp{
    margin-top:0px;
  }
  .ftrText{
    margin-top:0px;
  }
  }
 
  </style> -->
<body>
<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/banner_apply.jpg"  alt="" /></div>
<?php include'toogle.php'?>
<div id="maincontainerapp">
<div id="maincontappl">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php" class="icon-banss downld-cont">Download Brochure</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="contactus.php" class="icon-bansclik clickto">Contact Us</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="placement.php" class="icon-bansplace placecont">PLACEMENT PARTNER</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInRight"><a href="students-works.php" class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
</div><!--main-iconwrp ended here -->
<h1 class="wow fadeInUp">Pay Now</h1>
<div class="col-md-12">
<p class="colcunt wow fadeInLeft"></p>
</div>
<div class="spacs-frm"></div>
<!-- <form method="post" name="customerData" action="https://arenajayanagar.com/ccavRequestHandler.php"> -->

<form method="post" name="customerData" action="https://krishnaro-kgs.mojo.page/4-day-chemistry-mastery">
	

			<table width="90%" height="100" style="border:collapse;" align="center">
				
				<tr>
					<td></td><td><input type="hidden" name="tid" id="tid" readonly/></td>
				</tr>
				<tr>
					<td></td><td><input type="hidden" name="merchant_id" value="254528"/></td>
				</tr>
				<tr>
					<td></td><td><input type="hidden" name="order_id" value="123654789"/></td>
				</tr>
				<tr>
					<td>Amount :</td><td><input type="number" name="amount" value="500.00" min="500" class="form-control"/></td>
				</tr>
				<tr>
					<td>Currency :</td><td><input type="text" name="currency" value="INR" class="form-control"/></td>
				</tr>
				<tr>
					<td></td><td><input type="hidden" name="redirect_url" value="ccavResponseHandler.php"/></td>
				</tr>
			 	<tr>
			 		<td></td><td><input type="hidden" name="cancel_url" value="ccavResponseHandler.php"/></td>
			 	</tr>
			 	<tr>
					<td></td><td><input type="hidden" name="language" value="EN"/></td>
				</tr>
		     	<!--<tr>
		     		<td colspan="2">Billing information(optional):</td>
		     	</tr>
		        <tr>
		        	<td>Billing Name	:</td><td><input type="text" name="billing_name" value="Charli"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Address	:</td><td><input type="text" name="billing_address" value="Room no 1101, near Railway station Ambad"/></td>
		        </tr>
		        <tr>
		        	<td>Billing City	:</td><td><input type="text" name="billing_city" value="Indore"/></td>
		        </tr>
		        <tr>
		        	<td>Billing State	:</td><td><input type="text" name="billing_state" value="MP"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Zip	:</td><td><input type="text" name="billing_zip" value="425001"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Country	:</td><td><input type="text" name="billing_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Tel	:</td><td><input type="text" name="billing_tel" value="9876543210"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Email	:</td><td><input type="text" name="billing_email" value="test@test.com"/></td>
		        </tr>
		        <tr>
		        	<td colspan="2">Shipping information(optional)</td>
		        </tr>
		        <tr>
		        	<td>Shipping Name	:</td><td><input type="text" name="delivery_name" value="Chaplin"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Address	:</td><td><input type="text" name="delivery_address" value="room no.701 near bus stand"/></td>
		        </tr>
		        <tr>
		        	<td>shipping City	:</td><td><input type="text" name="delivery_city" value="Hyderabad"/></td>
		        </tr>
		        <tr>
		        	<td>shipping State	:</td><td><input type="text" name="delivery_state" value="Andhra"/></td>
		        </tr>
		        <tr>
		        	<td>shipping Zip	:</td><td><input type="text" name="delivery_zip" value="425001"/></td>
		        </tr>
		        <tr>
		        	<td>shipping Country	:</td><td><input type="text" name="delivery_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Tel	:</td><td><input type="text" name="delivery_tel" value="9876543210"/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param1	:</td><td><input type="text" name="merchant_param1" value="additional Info."/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param2	:</td><td><input type="text" name="merchant_param2" value="additional Info."/></td>
		        </tr>
				<tr>
					<td>Merchant Param3	:</td><td><input type="text" name="merchant_param3" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Merchant Param4	:</td><td><input type="text" name="merchant_param4" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Merchant Param5	:</td><td><input type="text" name="merchant_param5" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Promo Code	:</td><td><input type="text" name="promo_code" value="" class="form-control"/> * if available</td>
				</tr><br/><br/>
				<tr>
					<td>Vault Info.	:</td><td><input type="text" name="customer_identifier" value=""/></td>
				</tr>-->
		        <tr>
		        	<td></td><td><INPUT TYPE="submit" value="Continue to Pay" class="btns"></td>
		        </tr>
	      	</table>
	      </form>

<div class="spacs-frm"></div>
</div><!--maincontappl Ended here -->

<footer>
<div class="ftr ftrText">
<div class="container-fluid">
<div class="col-md-10"><a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="about-us.php">About Us</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="animation-courses.php">Courses</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="activities.php">Activities</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="careers.php">Careers</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="students-works.php">Student Works</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="faqs.php">Faqs</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="contactus.php">Contact Us</a></div>
<div class="col-md-2" id="set-1">
<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
<a href="https://www.facebook.com/arenaanimation.bangalore" target="_blank" class="hi-icon hi-icon-mobile padicon"><span class="fa fa-facebook-f"></span></a>
<a href="javascript:void(0)" class="hi-icon hi-icon-screen padicon"><span class="fa fa-linkedin"></span></a>
</div>
</div>
</div>
</div>
<div class="ftryell">&copy; 1996-2020 All Rights Reserved For SkyCode IT Solutions</div>
</footer>

</div><!-- mainwrpcont ended here -->

<!-- click to call start here -->
<div id="backopac"></div>
<div id="poped">
<div id="insclick">
<p class="callhed">Click to Call</p>
<input class="inputees" type="text" placeholder="Enter Your Name" >
<input class="inputees" type="text" placeholder="Enter Your Mobile" >
<button class="clickbtn" type="button">Click to call</button>
</div>
<div onClick="closepoped()" id="clse">X</div>
</div>
<!-- click to call Ended here -->


<!-- JAVASCRIPT START HERE -->
<script src="js/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JAVASCRIPT END HERE -->
<script>
 function getConfirmation() {
               var retVal = confirm("Press 'Ok' to continue with the payment, 'Cancel' to submit the details");
               if( retVal == true ) {
                  window.location.href="payment.php";
                  return false;
                  
               } else {
                  window.alert("Application submitted successfully, our team will get back to you shortly.");
                  window.location.href = "apply.php";
                  return false;
               }
            }
</script>
<!-- MENU START HERE -->
<script>
// Add slideDown animation to dropdown
$('.dropdown').on('show.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// Add slideUp animation to dropdown
$('.dropdown').on('hide.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});
</script>
<!-- MENU END HERE -->

<!-- click to call started here -->
<script>
var closepopup = document.getElementById("clse");
var backlayer = document.getElementById("backopac");
var popuped = document.getElementById("poped");
var shows = document.getElementById("clickhrefs");

function closepoped(){
	backlayer.style.display = "none";
	popuped.style.display = "none";
	}
	
function showspops(){
	backlayer.style.display = "block";
	popuped.style.display = "block";
	}
</script>
<!-- click to call Ended here -->

<!-- onscroll animate -->

<!--<script src="js/wow.js"></script>
<script>
new WOW().init();
</script> -->

<!-- onscroll animate -->
<script src="js/valid.js" ></script>

<script type="text/javascript">
var Plumb5FormTrackingDetails = { ButtonTag: '#form-apply #submit', IsById: false, FormId: 210, Fields: [1,6,2,3,6,6,6,7], Mandatory: [true,false,true,true,false,true,true,false], FormType: 12};
var Plumb5FieldsData = ['#form-apply #fName','#form-apply #lName','#form-apply #eMail','#form-apply #mobile','#form-apply #age','#form-apply #city','#form-apply #courses','#form-apply #comments'];
function AddUpPlumb5Events() {
Plumb5AddEvent("click");
}
</script>


<script type='text/javascript' >
(function () {var p5 = document.createElement('script');p5.type = 'text/javascript';p5.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'src.plumb5.com/arenajayanagar-38.js';var p5s = document.getElementsByTagName('script')[0]; p5s.parentNode.insertBefore(p5, p5s);})();
</script>

<!-- chatbot script -->
	<script>(function(w, d){ w.nurams_bot="10"; w.nura = "bot";var bot_decrp="nurams"; var bot_id= "gnyuyrkazmys5t{xgsy5t{xgsy4sot4py"; var server_id="nnzuzrvaym@s55xhuz4ro|k5"; var bot_styl_id="gnyuyrkazmys5t{xgsy5t{xgsy4sot4iyy"; var showcode="nnzuzrvaym@s55xhuz4ro|k5huz3gjsot3hgiqktj5gvo5"; var nurams=(function(z,y){ var rt=[]; z.forEach((e) => { var yi=0;var rta=""; for(var i=0;i<(e.length);i++){ if((((i % 2)==1)&& (i>0) )&& (yi<6) ){ if(y.charCodeAt(yi)==e.charCodeAt(i) ){ yi=yi+1; }else{ rta +="null"; } }else{ var rts = e.charCodeAt(i); rta +=String.fromCharCode((rts-(y.length))); } }rt.push(rta); }); return rt; })([server_id,bot_id,bot_styl_id,showcode],bot_decrp); if ( location.protocol !== "dataform.html" ){nurams[0] = nurams[0].replace("https","http");}else{if(!nurams[0].includes("https") ){nurams[0] = nurams[0].replace("http","https");}} var h = d.head || d.getElementsByTagName("head")[0]; var ss = d.createElement("link"); ss.setAttribute("rel", "stylesheet"); ss.setAttribute("href", nurams[0]+nurams[2]); h.appendChild(ss); var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src",nurams[0]+nurams[1]); w.prv=nurams[0]; w.shownurams=nurams[3]; h.appendChild(s);})(window, document);</script>

</body>

<!-- Mirrored from arenajayanagar.com/dataform.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:38:31 GMT -->
</html>
