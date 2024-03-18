<?php include'header.php' ?>
<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/ban-fish.jpg"  alt="" /></div>
<?php include'toogle.php'?>
<div id="maincontainerapp">
<div id="maincontappl">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php" class="icon-banss downld-cont">Download Brochure</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="#" onClick="showspops()" class="icon-bansclik clickto">Click to call</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="students_speak.php" class="icon-bansplace studspeaksmain">Students Speaks</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInRight"><a href="students-works.php" class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
</div><!--main-iconwrp ended here -->
<h1 class="wow fadeInUp">Adobe Certification</h1>
<div class="spacs-frm"></div>
<div class="certicontwrp">
<h3 class="wow fadeInLeft">Get Adobe Certified & Get the credentials you need to succeed</h3>
<p class="wow fadeInRight">Landing your first job out of high school or college can be daunting, especially in the competitive fields of digital communication. The classic dilemma for entry-level workers with little or no experience is convincing employers that they are capable of doing the job. Now, you can validate your skills and prove your value to employers by earning certification as an Adobe Certified Associate.</p>
<p class="wow fadeInRight">Employment using digital communications is rapidly expanding across all industries. At the forefront of this expansion are Adobe tools for digital communication, including Photoshop for visual communication, Dreamweaver for Web Development and Flash for Multimedia creation. Whether it’s a career in graphic Design, web marketing, video production or any field utilizing digital communications, becoming an Adobe Certified Associate can put you on the fast track to success.</p>
<div class="spacs"></div>
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-12 certiwrp wow fadeInLeft" >
<h3>Benefits of becoming an Adobe Certified Associate</h3>
<p><span>Validate your Adobe skills</span><br />
Demonstrate your proficiency in Adobe digital communications tools.</p>
<p><span>Open doors to exciting careers</span><br />
Expand your career opportunities with industry-recognized certification.</p>
<p><span>Differentiate yourself</span><br />
Stand apart from your peers in a competitive job market.
Boost your confidence
Be certain your digital media skills are up to date.</p>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" >
  <img src="images/adobe.jpg" class="img-responsive" alt=""/> </div>
</div> <!-- row ended here -->
<div class="certitp"></div>
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="media wow fadeInUp">
<div class="media-left">
<a href="javascript:avoid()">
<img class="media-object" src="images/photoshop-icn.jpg" alt="" />
</a>
</div>
<div class="media-body">
<h4>Visual Communication with Adobe Photoshop</h4>
<p>The Visual Communication with Adobe®Photoshop® exam validates entry-levelskills in communication corresponding to Adobe Photoshop software.</p>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="media wow fadeInDown">
<div class="media-left">
<a href="javascript:avoid()">
<img class="media-object" src="images/flash-icn.jpg" alt="" />
</a>
</div>
<div class="media-body">
<h4>Rich Media Communication with Adobe Flash</h4>
<p>The Rich Media Communication with Adobe Flash® Professional exam validatesentry-level skills in communication corresponding to Adobe Flash Professional software.</p>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="media wow fadeInUp">
<div class="media-left">
<a href="javascript:avoid()">
<img class="media-object" src="images/dreamweaver-icn.jpg" alt="" />
</a>
</div>
<div class="media-body">
<h4>Web Communication with Adobe Dreamweaver</h4>
<p>The Web Communication with Adobe Dreamweaver® exam validates entrylevel skills in communication corresponding to Adobe Dreamweaver software</p>
</div>
</div>
</div>
</div>
</div>
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
</script>
 -->
<!-- onscroll animate -->

<script type='text/javascript' >
(function () {var p5 = document.createElement('script');p5.type = 'text/javascript';p5.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'src.plumb5.com/arenajayanagar-38.js';var p5s = document.getElementsByTagName('script')[0]; p5s.parentNode.insertBefore(p5, p5s);})();
</script>

</body>

<!-- Mirrored from arenajayanagar.com/adobe-certification.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:45:17 GMT -->
</html>
