<?php include'header.php'?>
<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/placement_ban.jpg"  alt="" /></div>
<?php include'toogle.php'?>
<div id="maincontainerapp">
<div id="maincontappl">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php" class="icon-banss downld-cont">Download Brochure</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="#" onClick="showspops()" class="icon-bansclik clickto">Click to call</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="students_speak.php" class="icon-bansplace studspeaksmain">Students Speaks</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="students-works.php" class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
</div><!--main-iconwrp ended here -->
<!-- breadcrumb start here -->
<ol class="breadcrumb wow fadeInUp">
<li><a href="animation-courses.php">Courses Overview</a></li>
<li class="active">Certified Visual Effects Professional</li>
</ol>
<!-- breadcrumb End here -->
<h1 class="wow fadeInUp">Arena Certified Visual Effects Professional</h1>
<div class="col-md-12">
<p class="colcunt wow fadeInLeft">To cater to the growing demand of VFX used in entertainment field, Arena has introduced a highly specialized VFX Course using softwares like NUKE, Photoshop, After Effects, Maya etc.</p>
<p class="colcunt wow fadeInLeft">The Animation and VFX industry is expected to grow at a CAGR of 18.5 percent to reach INR 55.9 billion by 2015. VFX and Post-production services meanwhile are expected to grow at 24 % and 19 percent respectively.</p>
<p class="colcunt wow fadeInLeft">Indian VFX industry has shown an incredible growth of two fold.</p>
<p class="colcunt wow fadeInLeft">With an increasing trend to add more production value regardless of the medium in the domestic market and a high volume of international VFX work is getting executed in India.</p>
<p class="colcunt wow fadeInLeft">VFX, as an industry, has a huge potential and newer segments like 2D - 3D conversion opens a new dimension and revenue stream for the industry.</p>
</div>
<h4 class="wow fadeInLeft">Duration : 18 months, 4 semesters, 2D & advanced 3D animation course with a focus on portfolio development..</h4>
<p class="wow fadeInLeft">
<strong>Eligibility</strong><br />
Those who have completed Class 10th / SSLC / PUC / Degree are eligible to apply.</p>
<div class="spacs-frm"></div>
<div class="row wow fadeInRight">
<div class="tbcontainer">
 <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#semesterOne" aria-controls="home" role="tab" data-toggle="tab">Semester - 1</a></li>
    </ul>
  
  <div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="semesterOne">
  <h3>Course Contents</h3>
  <p></p>
  <ul class="tblists">
  <li>Introduction</li>
   <li>Rotoscope in NUKE</li>
    <li>Wire removal in NUKE</li>
    <li>Colour Correction in NUKE</li>
    <li>Green/ Blue screen in NUKE</li>
    <li>Matchmoving & Camera trackingin NUKE</li>
    <li>Matte Painting in PHOTOSHOP</li>
    <li>Rotoscope and Matchmoving in Mocha</li>
    <li>E Project</li>
    </ul>
    <button onclick="location.href = 'apply.php'"  class="applynw hvr-sweep-to-right" type="button" >Apply Now</button>
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
<div class="wow bounceInRight" id="poped">
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
</script> -->

<!-- onscroll animate -->

<script type='text/javascript' >
(function () {var p5 = document.createElement('script');p5.type = 'text/javascript';p5.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'src.plumb5.com/arenajayanagar-38.js';var p5s = document.getElementsByTagName('script')[0]; p5s.parentNode.insertBefore(p5, p5s);})();
</script>

</body>

<!-- Mirrored from arenajayanagar.com/certified_visual_effects.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:56:17 GMT -->
</html>
