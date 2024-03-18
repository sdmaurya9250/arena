<?php include'header.php' ?>
<style>
  @media only screen and (max-width:2064px){
  #maincontainerapp{
    margin-top:244px;
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
<body>
<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/ban-brigde.jpg"  alt="" /></div>
<?php include'toogle.php'?>
<div id="maincontainerapp">
<div id="maincontappl">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php" class="icon-banss downld-cont">Download Brochure</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="contactus.php" class="icon-bansclik clickto">Contact Us</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="students_speak.php" class="icon-bansplace studspeaksmain">Students Speaks</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInRight"><a href="students-works.php" class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
</div><!--main-iconwrp ended here -->
<h1 class="wow fadeInUp">Recruiter's</h1>
<div class="spacs-frm"></div>
<div class="tbcontainer">
<h3 class="wow fadeInLeft">Need People </h3>
<p class="wow fadeInRight">Thanks for your interest in our student candidatures. Quality skill-sets are increasingly hard to come by in Animation. Yet, without them, you can barely maintain your competitive edge. You are also aware of the travails of dealing with manpower consultancies OR are not ready to absorb the spiraling cost-per-recruitment of this channel.</p>
<p class="wow fadeInLeft">You are welcome to submit your current/future skill needs here under. You could also mail us directly at <a href="mailto:info@arenabsk.com" class="redmore">info@arenabsk.com</a> with complete information about your Animation/Multimedia workforce requirements. Our Placement Officer shall be glad to respond in earnest.</p>
<p class="wow fadeInRight">You are also welcome to conduct your campus interviews for our students on our campus. To this end, ArenaBanashankari would be glad to provide you the requisite infrastructure and facilities. Kindly intimate us 1-2 weeks in advance for such recruitment programs.</p>
<div class="row">
<form id="rectq">
<h3 class="wow fadeInLeft">Animation/Multimedia Workforce Requirement Registration Form </h3>
<div class="col-md-6 col-sm-6 col-xx-12 wow fadeInLeft">
<input id="recCompName"  class="form-control"  type="text" placeholder="Company Name"  />
<input id="recMobile" class=" form-control"  type="text" placeholder="Mobile"  />
<input id="recEmail" class=" form-control"  type="text" placeholder="E-mail"  />
<input id="recDoReq" class=" form-control"  type="text" placeholder="Designation of Requirements"  />
<input id="recVacan" class=" form-control"  type="text" placeholder="No. of Vacancies"  />
<input id="recMinQual" class=" form-control"  type="text" placeholder="Min Qualification"  />
<input id="recMinSal" class=" form-control"  type="text" placeholder="Min Salary Offered"  />

</div>
<div class="col-md-6 col-sm-6 col-xx-12 wow fadeInRight">
<input id="recContPers" class=" form-control"  type="text" placeholder="Contact Person"  />
<textarea id="recAdres" class="form-control rectq" rows="4" placeholder="Address"></textarea>
<textarea id="recReqDet" class="form-control" rows="4" placeholder="Requirements Details"></textarea>
<button id="recbtn" class="btns hvr-sweep-to-rightss" type="button" >Submit</button> <span id="thankMess"></span>
</div>
</form>
</div>
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
</script> -->

<!-- onscroll animate -->

<script  src="js/valid.js"></script>

<script type="text/javascript">
var Plumb5FormTrackingDetails = { ButtonTag: '#rectq #recbtn', IsById: false, FormId: 212, Fields: [1,3,2,6,6,6,6,6,6,6], Mandatory: [true,true,true,true,true,true,true,true,true,true], FormType: 12};
var Plumb5FieldsData = ['#rectq #recCompName','#rectq #recMobile','#rectq #recEmail','#rectq #recDoReq','#rectq #recVacan','#rectq #recMinQual','#rectq #recMinSal','#rectq #recContPers','#rectq #recAdres','#rectq #recReqDet'];
function AddUpPlumb5Events() {
Plumb5AddEvent("click");
}
</script>

<script type='text/javascript' >
(function () {var p5 = document.createElement('script');p5.type = 'text/javascript';p5.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'src.plumb5.com/arenabanashankari-38.js';var p5s = document.getElementsByTagName('script')[0]; p5s.parentNode.insertBefore(p5, p5s);})();
</script>
<!-- chatbot script -->
	<script>(function(w, d){ w.nurams_bot="10"; w.nura = "bot";var bot_decrp="nurams"; var bot_id= "gnyuyrkazmys5t{xgsy5t{xgsy4sot4py"; var server_id="nnzuzrvaym@s55xhuz4ro|k5"; var bot_styl_id="gnyuyrkazmys5t{xgsy5t{xgsy4sot4iyy"; var showcode="nnzuzrvaym@s55xhuz4ro|k5huz3gjsot3hgiqktj5gvo5"; var nurams=(function(z,y){ var rt=[]; z.forEach((e) => { var yi=0;var rta=""; for(var i=0;i<(e.length);i++){ if((((i % 2)==1)&& (i>0) )&& (yi<6) ){ if(y.charCodeAt(yi)==e.charCodeAt(i) ){ yi=yi+1; }else{ rta +="null"; } }else{ var rts = e.charCodeAt(i); rta +=String.fromCharCode((rts-(y.length))); } }rt.push(rta); }); return rt; })([server_id,bot_id,bot_styl_id,showcode],bot_decrp); if ( location.protocol !== "recruiters.php" ){nurams[0] = nurams[0].replace("https","http");}else{if(!nurams[0].includes("https") ){nurams[0] = nurams[0].replace("http","https");}} var h = d.head || d.getElementsByTagName("head")[0]; var ss = d.createElement("link"); ss.setAttribute("rel", "stylesheet"); ss.setAttribute("href", nurams[0]+nurams[2]); h.appendChild(ss); var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src",nurams[0]+nurams[1]); w.prv=nurams[0]; w.shownurams=nurams[3]; h.appendChild(s);})(window, document);</script>
</body>


</html>
