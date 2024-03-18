<?php include 'header.php' ?>

<style>
  @media only screen and (max-width:2064px){
  #maincontainerapp{
    margin-top:194px;
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

<!-- Mirrored from arenajayanagar.com/animation-industry.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:34:47 GMT -->


<body>

<!-- Static navbar -->
<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/ban-alien-2.jpg"  alt="" /></div>
<?php include'toogle.php'?>
<div id="maincontainerapp">
<div id="maincontappl">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php" class="icon-banss downld-cont">Download Brochure</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="contactus.php" class="icon-bansclik clickto">Contact Us</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="students_speak.php" class="icon-bansplace studspeaksmain">Students Speaks</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInRight"><a href="students-works.php" class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
</div><!--main-iconwrp ended here -->
<h1 class="wow fadeInUp">Animation Industry</h1>
<div class="spacs-frm"></div>
<div class="tbcontainer">
<h3 class="wow fadeInLeft">Animation can be used to inspire, educate, inform & entertain.</h3>
<p class="wow fadeInRight">A gigantic extinct animal taking us centuries back, an animated ice?cream screaming for attention, an action hero performing mind blowing stunts, we have watched all these scenes, experienced the thrill they create and wondered how human imagination can be translated into such fantastic imagery. This is the magic of animation. Be it special effects in movies, imaginative advertising, exciting virtual games or quite simply a cartoon film, animation is gaining its ground in the global entertainment industry. And is growing at an animated speed!!</p>
<p class="wow fadeInRight">Superheros like Chota Bheem have fascinated children and movies like Baahubali has bought Indian animation into focus. Movies like Kung Fu Panda, Ice Age, Avengers etc. are a rage among children and adults alike thus making the animation industry popular like never before.</p>
<p class="wow fadeInLeft">A recent report prepared by KPMG on India’s Digital future (2019) suggests that the animation and VFX industry in India has grown by 18.7% in 2019, Gaming has grown by 41.6% and digital has grown by 43.4%. It also says the digital sector is expected to grow at 29.1% between FY19 and FY24 to reach 621 billion by 2024.</p>
<p class="wow fadeInLeft">

Such a huge & growing industry requires thousands of skilled, trained people to work in animation studios, ad film & VFX companies, video processing & editing studios etc. and Arena Animation does just that!
</p>

<!--<p class="wow fadeInRight">Check out the <a class="redmore" href="animation_courses.html">wide range of courses</a> now!</p>
<p class="wow fadeInLeft"><b>*Source: FICCI-KPMG Indian Media and Entertainment Report</b></p>-->
</div>
<div class="spacs-frm"></div>
</div><!--maincontappl Ended here -->

<?php include 'footer.php' ?>

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

<!-- Mirrored from arenajayanagar.com/animation-industry.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:34:48 GMT -->
</html>
