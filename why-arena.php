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
<h1 class="wow fadeInUp">Why Arena</h1>
<div class="tbcontainer">
<p class="wow fadeInRight">At  Arena Animation Banashankari, we believe that any education is incomplete if it is not able to fetch a professional career which can change the life of a candidate. In other words we believe in 100% job assurance to any student who joins here to do a career course. This is achieved by the team Arena consisting of extremely talented, trained and experienced teachers, admin staff and encouraging management.</p>
<h3 class="wow fadeInLeft">Some of the highlights of Arena Banashankari are as follows:</h3>
<ul class="ulls wow fadeInRight">
<li>Trained and certified academic team to guide the students throughout the course.</li>
<li>Student Seminars: Every student needs to  present one seminar in a semester.</li>
<li>Creativity workshops to hone the creative skills of the student.</li>
<li>Spoken English classes: Every student needs to attend 2 English modules and complete the certification for availing placement assistance. This course is absolutely free of cost.</li>
<li>Industry Visits: Students get to interact with the industry experts to understand the pipeline of animation</li>
<li>Expert Seminars: Experts from the industry are invited to give seminars to the students and acquaint them with the nuances of the art and technology industry.</li>
<li>Adobe Certification: we encourage our students to become Adobe Certified so that they are more preferred in the digital communication industry.</li>
<li>Live projects: Students are encouraged to work on live projects which will yield them a certification of accomplishment.</li>
<li>Nomination to national and international film festivals: We make students to create short animated films which are later nominated to various national and international film festivals.</li>
<li>Last but not the least, we make sure that every student who walks into our college for education, walks out as a fully trained, confident young and energetic creative professional. This 100% job assurance is proven by the track record of placing each and every student for the last 20 years.</li>
</ul>
</div>
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

<!-- Mirrored from arenajayanagar.com/why-arena.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:45:18 GMT -->
</html>
