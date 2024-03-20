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

<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/ban-alien.jpg"  alt="" /></div>
<?php include'toogle.php'?>
<div id="maincontainerapp">
<div id="maincontappl">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php" class="icon-banss downld-cont">Download Brochure</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="contactus.php" class="icon-bansclik clickto">Contact Us</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="students_speak.php" class="icon-bansplace studspeaksmain">Students Speaks</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInRight"><a href="students-works.php" class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
</div><!--main-iconwrp ended here -->
<h1 class="wow fadeInUp">Activities</h1>
<div class="spacs-frm"></div>
<div class="tbcontainer">
<h3 class="wow fadeInLeft">Project Showcase</h3>
<p class="wow fadeInRight">Every student would do many projects during his course in the centre. The good projects will be selected to be showcased during an interactive programme arranged once in six months wherein all the students are invited. Industry experts are also invited to evaluate the works, give suggestions and award the best. This gives an opportunity to the students to exhibit their talent, get new ideas and get motivated to achieve greater heights. This event is a platform for the students to pave way for a bright career ahead.</p>
<h3 class="wow fadeInLeft">Anniversary Celebrations</h3>
<p class="wow fadeInRight">Arena Banashankari celebrates its anniversary in a unique way by arranging a day long event consisting of experience sharing by Arena Alumni & student’s talent show. This cultural extravaganza, which is a fine blend of modern trends with traditional culture, is a event organized by the students under the guidance of the Faculty and other staff members. Apart from Arena Alumni, Prominent dignitaries are also invited to this lively event, who with their presence make this occasion a memorable experience. This event gives the students a chance to interact with other batches, develop rapport with them and also try their managerial skills. This annual potpourri of literary, artistic and cultural extravaganza has always added color and zest to this hallo</p>
<h3 class="wow fadeInRight">Expert Seminars</h3>
<p class="wow fadeInLeft">Arena Banashankari has the culture of inviting eminent speakers and domain experts from the industry to address our students. These professionals give the latest updates of the technological changes and guide the students to be better prepared to face the emerging challenges. The students get an opportunity to interact with the experts and learn tips & tricks of that field</p>
<h3 class="wow fadeInLeft">OutDoor Study</h3>
<p class="wow fadeInRight">Students are taken out to the nature to make a study of various kinds of trees, clouds, hills, sky so that they are able to visualize good backgrounds for their wow movies. They are also taken out to the streets, malls and other public places to understand scene composition, perpective views etc.</p>
<h3 class="wow fadeInRight">Visit to Animation Studio / Production Studio / Publishing Houses</h3>
<p class="wow fadeInLeft">Students are taken to the printing & publishing company immediately after their Graphics course so that they understand how the skills that they have learnt in the academy are implemented practically.</p>
<h3 class="wow fadeInRight">Clay Modelling & Animataion</h3>
<p class="wow fadeInLeft">Indian Animation industry has experienced exponential growth in the last few years. And the trend is . expected to continue. Numerous advantages have contributed to the upsurge in India’s Animation industry. They include quality human resources, artistry and creativity, technological proficiency, productivity and English proficiency. Apart from this, there are many well-equipped animation studios in Bangalore which employ highly qualified professionals.</p>
</div>
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
(function () {var p5 = document.createElement('script');p5.type = 'text/javascript';p5.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'src.plumb5.com/arenabsk-38.js';var p5s = document.getElementsByTagName('script')[0]; p5s.parentNode.insertBefore(p5, p5s);})();
</script>
<!-- chatbot script -->
	<script>(function(w, d){ w.nurams_bot="10"; w.nura = "bot";var bot_decrp="nurams"; var bot_id= "gnyuyrkazmys5t{xgsy5t{xgsy4sot4py"; var server_id="nnzuzrvaym@s55xhuz4ro|k5"; var bot_styl_id="gnyuyrkazmys5t{xgsy5t{xgsy4sot4iyy"; var showcode="nnzuzrvaym@s55xhuz4ro|k5huz3gjsot3hgiqktj5gvo5"; var nurams=(function(z,y){ var rt=[]; z.forEach((e) => { var yi=0;var rta=""; for(var i=0;i<(e.length);i++){ if((((i % 2)==1)&& (i>0) )&& (yi<6) ){ if(y.charCodeAt(yi)==e.charCodeAt(i) ){ yi=yi+1; }else{ rta +="null"; } }else{ var rts = e.charCodeAt(i); rta +=String.fromCharCode((rts-(y.length))); } }rt.push(rta); }); return rt; })([server_id,bot_id,bot_styl_id,showcode],bot_decrp); if ( location.protocol !== "activities.php" ){nurams[0] = nurams[0].replace("https","http");}else{if(!nurams[0].includes("https") ){nurams[0] = nurams[0].replace("http","https");}} var h = d.head || d.getElementsByTagName("head")[0]; var ss = d.createElement("link"); ss.setAttribute("rel", "stylesheet"); ss.setAttribute("href", nurams[0]+nurams[2]); h.appendChild(ss); var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src",nurams[0]+nurams[1]); w.prv=nurams[0]; w.shownurams=nurams[3]; h.appendChild(s);})(window, document);</script>
</body>


</html>
