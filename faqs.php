<?php include'header.php'?>
<style>
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
 
  </style>
<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/placement_ban.jpg"  alt="" /></div>
<?php include'toogle.php'?>
<div id="maincontainerapp">
<div id="maincontappl">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php" class="icon-banss downld-cont">Download Brochure</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="contactus.php" class="icon-bansclik clickto">Contact Us</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="students_speak.php" class="icon-bansplace studspeaksmain">Students Speaks</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInRight"><a href="students-works.php" class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
</div><!--main-iconwrp ended here -->
<h1 class="wow fadeInDownBig">Frequently Asked Questions (FAQ's)</h1>
<div class="col-md-12"><p class="colcunt wow fadeInLeft">Multimedia is the technology which integrates different kinds of media such as text, sound, video, images and animation; coupled with the power of interactive digital technology.</p></div>
<div class="spacs-frm"></div>
<div class="tbcontainer">
<h3 class="wow fadeInLeft">What is Animation?</h3>
<p class="wow fadeInLeft">In Latin ANIMA means soul. To animate is literally “to give life” to a character. Animating is moving something which can’t move itself. Animation has evolved drastically from the cave walls of prehistoric times or the rubbery cartoons of the early twentieth century, to almost life-like computer generated graphics & animation of today.</p>
<h3 class="wow fadeInRight">Which are the application areas of Multimedia & Animation?</h3>
<p class="wow fadeInRight">Multimedia is inevitably being used in Print & Publishing industry, Entertainment Industry which includes Broadcast Media & Film, Advertising industry, Internet, Gaming, Education, Computer Based Training Applications, Architectural & Interior Designing, Fashion & Jewelry Designing, Product Designing, Medical Simulation, mobile application development etc.</p>
<h3 class="wow fadeInLeft">What are the salary levels that Multimedia & Animation professionals get?</h3>
<p class="wow fadeInLeft">Multimedia & Animation professionals are in great demand. The average salary that a Multimedia professional gets to start with is around Rs.12000/- and goes multifold depending on experience and skill sets. Salaries of animators in India have grown by 33% over the last three years. At the entry level, animators could earn between <strong>Rs.15000/- and Rs.35,000 per month</strong></p>
<h3 class="wow fadeInRight">What is the duration of the course in Arena?</h3>
<p class="wow fadeInRight">he duration of the course depends upon the specialization that you take & the number of hours you can devote for the training. Career courses span from one to two and a half years, whereas short term professional courses span from three to six months.</p>
<h3 class="wow fadeInLeft">What is the current industry scenario?</h3>
<p class="wow fadeInLeft">Indian Animation industry has experienced exponential growth in the last few years. And the trend is . expected to continue. Numerous advantages have contributed to the upsurge in India’s Animation industry. They include quality human resources, artistry and creativity, technological proficiency, productivity and English proficiency. Apart from this, there are many well-equipped animation studios in Bangalore which employ highly qualified professionals.</p>
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
(function () {var p5 = document.createElement('script');p5.type = 'text/javascript';p5.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'src.plumb5.com/arenabsk-38.js';var p5s = document.getElementsByTagName('script')[0]; p5s.parentNode.insertBefore(p5, p5s);})();
</script>

</body>

</html>
