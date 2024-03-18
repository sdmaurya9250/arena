<?php include'header.php'?>
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
	
<div class="col-md-12">
<p class="colcunt wow fadeInLeft"></p>
</div>
<div class="spacs-frm"></div>
<div class="col-md-12">
	<div class="col-md-3"></div>
	<div class="col-md-6" style="width:100%; text-align:center;"><button class="btns hvr-sweep-to-rightss" type="button" style="width:60%; text-transform:capitalize;">Thanks for submitting your application. Our team will get back to you.</button></div>
	<div class="col-md-3"></div>

</div>
	<div class="spacs-frm"></div>
<h1 class="wow fadeInUp">Pay Now</h1>
<form id="form-apply" enctype="multipart/form-data" method="POST" action="https://arenajayanagar.com/dataForm.php">
   <label for="">Pay your fees now</label>

<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Pay application fees of Rs.500
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Pay Registration fees
  </label>
  <br><br/>
	<button class="btns hvr-sweep-to-rightss" type="submit" style="width:200px; height:60px;">Pay Now</button>
	<a href="index.php"><button class="btns hvr-sweep-to-rightss" type="button" style="width:200px; height:60px;">Home</button></a>
</div>
</form>

<div class="spacs-frm"></div>
</div><!--maincontappl Ended here -->

<?php include'footer.php'?>
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


</body>

<!-- Mirrored from arenajayanagar.com/payment.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:50:31 GMT -->
</html>
