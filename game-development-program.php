<?php include'header.php'?>
<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/placement_ban.jpg"  alt="" /></div>
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
<li class="active">Game Art And Design</li>
</ol>
<!-- breadcrumb End here -->
<h1 class="wow fadeInUp" >GAME DEVELOPMENT PROGRAM</h1>
<div class="col-md-12">
  <p>India Is Poised To Become One Of The World's Leading Markets In Gaming Sector. Currently Valued At INR Rs.89 Crores,  The Indian Gaming Industry Is Estimated For The Annual Worth Of INR Rs.110 Crores by 2020 Taking The Lead At 71% Share. The Growth Is Driven By :-</p>
  <p>&bull;<strong>Rising Younger Population</strong>

    <br />
    &bull;<strong>Higher Disposable Incomes</strong><br />
&bull;<strong>Introduction Of New Gaming Genres And

The Increasing Number Of Smartphone And Tablet Users</strong>
</p>

    <strong>TERM 1:</strong><br />
<ul>
<li>Overview & Interface of Unity Game Engine</li>
<li>Game Design Essentials</li>
<li>Creating Game Environment & Unity Asset Store</li>
<li>Implementing & Testing Player & Non-Player Characters</li>
<li>Adding HUD & Scripting Point System, Victory & Defeat</li>
<li>Game Audio & Visual Effects</li>
<li>Game Optimization</li>
<li>Introduction to Unity VR Gaming</li>
</ul>  
<br />
 <strong>TERM 2:</strong><br />
<ul>
<li>Introduction To Unity New Features</li>
<li>Controlling Animations With Timelines</li>
<li>Directing With Cinemachine</li>
<li>Unity 2D Development</li>
<li>Shader Graphs </li>
<li>Post Processing & Rendering</li>
</ul>
 <strong>TERM 3:</strong><br />
<ul>
<li>Mobile & AR Game Development</li>
<li>Introduction To Mobile Game Development In Unity </li>
<li>Mobile Game Development</li>
<li>Building & Publishing On Android & IOS ( Project )</li>
<li>Getting Started With AR & Vuforia</li>
<li>Creating A Drawing App</li>
<li>Using Apis For An Object Identifier</li>
<li>Facial Tracking With XZIMG </li>
<li>Set-up & GUI Of AR Game -Duck Hunter</li>
<li>Duck Hunter AR -Raycasting, The Game Controller & Logic</li>
<li>Game Controller</li>
<li>Building The Intro Scene</li>
<li>Summary & App Store Submission ( Project )</li>
</ul>
<div role="tabpanel" class="tab-pane fadein" id="semesterTwo">
  
  
</div>
  
  
</div>


<h1 class="wow fadeInUp" >&nbsp;</h1>
<li>
  

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

<!-- Mirrored from arenajayanagar.com/game-development-program.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:59:37 GMT -->
</html>
 