<?php include'header.php'; ?>
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
<body>
<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/banner/shorteam.jpg"  alt="Diploma in Animation Engineering (DAE)" /></div>
<?php include'toogle.php'?>
<div id="maincontainerapp">
<div id="maincontappl">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php" class="icon-banss downld-cont">Download Brochure</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="contactus.php" class="icon-bansclik clickto">Contact Us</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="students_speak.php" class="icon-bansplace placecont">Students Speaks</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInRight"><a href="students-works.php" class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
</div><!--main-iconwrp ended here -->
<h1 class="wow fadeInUp">SHORT TERM COURSES</h1>

<b>
Duration : 3 years
Eligibility: SSLC / PUC / ITI</b>
<br><br>
<p class="wow fadeInLeft">Arena Animation’s short term courses are ideal for both students and working professionals. Whether you want to jump start your career in the media and entertainment industry for jobs in animation, VFX, web &amp; graphics, digital, and more, or sharpen your skills in the latest software in the industry, these courses are perfect for you. Join short duration courses after your 12th to excel in the media and entertainment industry.&nbsp;</p>
<br />
<br />
<br />

<div class="spacs-frm"></div>
<div class="row">
<div class="tbcontainer wow fadeInRight">
 <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
  
   <li role="presentation" class="active"><a href="#print" aria-controls="print" role="tab" data-toggle="tab">Term I :</a></li>
   <!-- <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">GWDD</a></li></li>-->
    <li role="presentation"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">Term-2	</a></li>

    
    
   </ul>
  <div class="tab-content tab-contented">
   <div role="tabpanel" class="tab-pane fade in active" id="print">
  <h3>Term-1</h3>
  <ul class="tblists clr-chns">
  
							<b>Course</b>
						
								<li>Visual Effects with Flame</li>
<li>Visual Effects with After Effects</li>
<li>Visual Effects with Nuke</li>
<li>Video Editing</li>
<li>Audio-Video Editing</li>
<li>Working with Audio</li>
<li>Rotoscopy with Silhouette</li>
<li>Matchmoving</li>								<!-- <li>Visual Effects with Flame</li> -->
							</ul>
			
  



   
      <div class="spac-bottom"></div>
    <h4></h4>
    
     
<button onclick="location.href='apply.php'" class="apply hvr-sweep-to-right" type="button" >Apply Now</button>
  </div>


  <div role="tabpanel" class="tab-pane fade" id="new">
  <h3></h3>
  <h3>Term-2</h3>
  <ul class="tblists clr-chns">
<b>TOOLS/SOFTWARE</b>

																	<li> Autodesk Flame</li>							
																	<li> Adobe After Effects</li>							
																	<li>Nuke</li>							
																	<li> Adobe Premiere CC &amp; Prelude CC</li>							
																	<li> Adobe Premiere CC &amp; Prelude CC</li>							
																	<li> Adobe Audition</li>							
																	<li>Silhouette</li>							
																	<li> Mocha/ 3D Equaliser</li>							
											


    </ul>
 
    
    <div class="spac-bottom"></div>
    <h4></h4>
    <p> </br>
      
<button onclick="location.href='apply.php'" class="apply hvr-sweep-to-right" type="button" >Apply Now</button>
  </div>
  
  

  
  
   
  </div>

</div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
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
<!-- chatbot script -->
	<script>(function(w, d){ w.nurams_bot="10"; w.nura = "bot";var bot_decrp="nurams"; var bot_id= "gnyuyrkazmys5t{xgsy5t{xgsy4sot4py"; var server_id="nnzuzrvaym@s55xhuz4ro|k5"; var bot_styl_id="gnyuyrkazmys5t{xgsy5t{xgsy4sot4iyy"; var showcode="nnzuzrvaym@s55xhuz4ro|k5huz3gjsot3hgiqktj5gvo5"; var nurams=(function(z,y){ var rt=[]; z.forEach((e) => { var yi=0;var rta=""; for(var i=0;i<(e.length);i++){ if((((i % 2)==1)&& (i>0) )&& (yi<6) ){ if(y.charCodeAt(yi)==e.charCodeAt(i) ){ yi=yi+1; }else{ rta +="null"; } }else{ var rts = e.charCodeAt(i); rta +=String.fromCharCode((rts-(y.length))); } }rt.push(rta); }); return rt; })([server_id,bot_id,bot_styl_id,showcode],bot_decrp); if ( location.protocol !== "animation-diploma-course.php" ){nurams[0] = nurams[0].replace("https","http");}else{if(!nurams[0].includes("https") ){nurams[0] = nurams[0].replace("http","https");}} var h = d.head || d.getElementsByTagName("head")[0]; var ss = d.createElement("link"); ss.setAttribute("rel", "stylesheet"); ss.setAttribute("href", nurams[0]+nurams[2]); h.appendChild(ss); var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src",nurams[0]+nurams[1]); w.prv=nurams[0]; w.shownurams=nurams[3]; h.appendChild(s);})(window, document);</script>

</body>

<!-- Mirrored from arenajayanagar.com/animation-diploma-course.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:35:06 GMT -->
</html>
