<?php include'header.php'?>
<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/dae-course-arena-jayanagar-1440x496.jpg"  alt="Diploma in Animation Engineering (DAE)" /></div>
<?php include'toogle.php'?>
<div id="maincontainerapp">
<div id="maincontappl">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php" class="icon-banss downld-cont">Download Brochure</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="#" onClick="showspops()" class="icon-bansclik clickto">Click to call</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="students_speak.php" class="icon-bansplace studspeaksmain">Students Speaks</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInRight"><a href="students-works.php" class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
</div><!--main-iconwrp ended here -->
<!-- breadcrumb start here -->
<ol class="breadcrumb wow fadeInUp">
<li><a href="animation-courses.php">Courses Overview</a></li>
<li class="active">BSC in Graphics & Visual Fx</li>
</ol>
<!-- breadcrumb End here -->
<hgroup>
<h1 class="wow fadeInLeft">Animation and VFX Degree Course</h1>
<h4 class="wow fadeInRight">Jain University , UGC RECOGNISED</h4>
</hgroup>
<div class="col-md-12 wow fadeInLeft">
<p class="colcunt">Jain University And Arena Animation have now joined hands to empower the youth
with job- relevant skills. Arena Animation is one of India’s leading institutes for aspirants
of the Media & Entertainment Industry. It transforms students and aspirants into job-ready skilled professionals. <a href="http://www.mgu.edu.in./" class="maillnk" target="_blank">www.mgu.edu.in.</a></p>
</div>
<h4 class="wow fadeInLeft">Duration : 3years</h4><br />
<p class="wow fadeInRight">
<strong>Eligibility</strong><br />

Those who have completed HSC/ 10+2, DOEAC Level 3 or above, or completed any degree are eligible to apply. Candidates awaiting their 10+2, Diploma or Degree results may also apply.</p>
<div class="spacs-frm"></div>
<div class="row wow fadeInLeft">
<div class="tbcontainer">
 <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">First Year</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Second Year</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Third Year</a></li>
   </ul>
  
  <div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="home">
  <h3>Semester 1</h3>
  <ul class="tblists">
  <li>Introduction to graphics and illustrations</li>
   <li>Anatomy for animation</li>
    <li>Digital illustrations</li>
    <li>Concepts of cinematography & photography</li>
    <li>Digital painting</li>
    <h3>Semester 2</h3>
    <li>Concepts of 2D animation</li>
    <li>Storytelling & script writing</li>
    <li>Audio - video editing</li>
    <li>Storyboarding and animatics</li>
    <li>Application of 2D animation principles</li>
    
    </ul>
    <button onclick="location.href = 'apply.php'"  class="applynw hvr-sweep-to-right" type="button" >Apply Now</button>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="profile">
  <h3>3D Animation Suite</h3>
  <ul class="tblists">
  <li>Fundamental and digital visualisation</li>
   <li>Concepts of 3D Animation</li>
    <li>Modelling with 3D</li>
    <li>Lights, Camera & Animation</li>
    <li>Painting 3D Objects</li>
    <li>Character Animation & Visual Fx</li>
    <li>Concept of Digital making.</li>
    <li>Visual Fx part</li>
    <li>visual fx part 2</li>
    <li>Project – 3D Animation Portfolio</li>
    </ul>
    <button onclick="location.href = 'apply.php'"  class="applynw hvr-sweep-to-right" type="button" >Apply Now</button>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="messages">
  <h3>Advanced Animation Suite</h3>
  <ul class="tblists">
  <li>Modelling with Maya</li>
   <li>Texturing with may</li>
    <li>Lighting & Rendering with May</li>
    <li>Rigging with Maya</li>
    <li>Character Animation with maya</li>
    <li>Project- Character Animation Portfolio</li>
    <li>Paint Effects & Dynamics Using Maya.</li>
    <li>Realistic Features with Maya</li>
    <li>Character Animation with Motion Builder</li>
    <li>Specialization(Elective- any one)</li>
    <li>Modelling & Texturing</li>
    <li>Lighting & Rendering</li>
    <li>Rigging & Animation</li>
    <li>Compositing & VFx</li>
    <li>Project – Portfolio Demo Reel</li>
    <li>Orientation to Creative Test.</li>
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
</script> -->

<!-- onscroll animate -->

<script type='text/javascript' >
(function () {var p5 = document.createElement('script');p5.type = 'text/javascript';p5.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'src.plumb5.com/arenajayanagar-38.js';var p5s = document.getElementsByTagName('script')[0]; p5s.parentNode.insertBefore(p5, p5s);})();
</script>

</body>

<!-- Mirrored from arenajayanagar.com/animation-degree-course.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:56:15 GMT -->
</html>
