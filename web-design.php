<?php include'header.php'?>
<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/graphic_banner.jpg"  alt="" /></div>
<?php include'toogle.php'?>
<div id="maincontainerapp">
<div id="maincontappl">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php" class="icon-banss downld-cont">Download Brochure</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="#" onClick="showspops()" class="icon-bansclik clickto">Click to call</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="students_speak.php" class="icon-bansplace placecont">Students Speaks</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInRight"><a href="students-works.php" class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
</div><!--main-iconwrp ended here -->
<h1 class="wow fadeInUp">Web Design Course</h1>
<div class="spacs-frm"></div>
<div class="row">
<div class="tbcontainer wow fadeInRight">
 <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Web Design</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Graphics Web Design and Development</a></li>
   </ul>
  <div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="home">
  <h3>Web & Interactive Design</h3>
  <ul class="tblists">
  <li>Designing Concepts for Web</li>
   <li>Image Editing with Photoshop</li>
    <li>Web Designing with HTML & CSS</li>
    <li>Developing Interactive Web Pages with Java Script</li>
    <li>Dream Weaver</li>
    <li>Graphics & Animation with Flash</li>
    <li>Scripting with Flash</li>
    <li>Advanced Scripting with Flash</li>
    </ul>
    <div class="spac-bottom"></div>
    <h4>Duration</h4>
    <p>Normal Track: 6 month</br>
Fast Track: 2 months</p>
<button onclick="location.href='apply.php'" class="apply hvr-sweep-to-right" type="button" >Apply Now</button>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="profile">
  <h3>Graphics Web Design and Development</h3>
  <ul class="tblists">
  <li>Design and Visualization Fundamentals</li>
   <li>Graphics and Illustrations Fundamentals</li>
    <li>Essentials of Web Designing</li>
    <li>Typography Techniques</li>
    <li>Illustrations for  Web  using Adobe Illustrator</li>
    <li>Creating Artworks</li>
    <li>Corel CorelDraw</li>
    <li>Layout Design using Adobe Photoshop Extended</li>
    <li>Web Animation and Interactivity  using Adobe Flash Professional</li>
    <li>Designing for Web using Markup Language and Style sheets (HTML and CSS)</li>
    <li>Developing Interactive Web Pages using JQuery and Javascript</li>
    <li>Design and Development using Programming Language  PHP</li>
    <li>Content Management System  using Drupal</li>
    <li>Search Engine Optimization </li>
    <li>Google Analytics </li>
    <li>Web Design & Development Portfolio</li>
    </ul>
    <button onclick="location.href='apply.php'" class="apply hvr-sweep-to-right" type="button" >Apply Now</button>
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

<!-- Mirrored from arenajayanagar.com/web-design.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:44:44 GMT -->
</html>
