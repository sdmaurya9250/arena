<?php include'header.php'?>

<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/banner_apply.jpg"  alt="" /></div>
<?php include'toogle.php'?>
<div id="maincontainerapp">
<div id="maincontappl">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php" class="icon-banss downld-cont">Download Brochure</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="contactus.php" class="icon-bansclik clickto">Contact Us</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="placement.php" class="icon-bansplace placecont">Placement Partners</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInRight"><a href="students-works.php" class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
</div><!--main-iconwrp ended here -->
<div class="spacs-frm"></div>
</br>
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInRight">
<div class="tbtnwrp">



</div>
<div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="graphic-works.php" ><img class="img-responsive" src="images/works/Graphics.jpg" alt="Arena Animation Banashankari"  /></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="website-works.php"><img class="img-responsive" src="images/works/WebDesign.jpg" alt="Arena Animation Banashankari"  /></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="sketches-works.php" ><img class="img-responsive" src="images/works/Sketches.jpg" alt="Arena Animation Banashankari"  /></a>
                    </div>
                    
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="2d-works.php"><img class="img-responsive" src="images/works/2DAnimation.jpg" alt="Arena Animation Banashankari"  /></a>
                    </div>
                    
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="3dworks.php"><img class="img-responsive" src="images/works/3DAnimation.jpg" alt="Arena Animation Banashankari"  /></a>
                    </div>
                    
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="vfx-works.php"><img class="img-responsive" src="images/works/vfx.jpg" alt="Arena Animation Banashankari"  /></a>
                    </div>
                    
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="mix-works.php"><img class="img-responsive" src="images/works/MixMedia.jpg" alt="Arena Animation Banashankari"  /></a>
                    </div>
                    
                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="ArchitecturalWalkThruworks.php"><img class="img-responsive" src="images/works/ArchitecturalWalkThru.jpg" alt="Arena Animation Banashankari"  /></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                     <a href="game-design-works.php"><img class="img-responsive" src="images/works/Game%20design.jpg" alt="Arena Animation Banashankari"  /></a>
                    </div>
                    
                    </div>
<div class="spac-bottom"></div></br></br>

<h1 class="wow fadeInUp" style="margin-top:10px;">Graphics</h1>

<div class="top-spac"></div>


<div class="row">
<?php
                              $counter = 0;
                              $courses = $db->getRows("SELECT * from students_works_graphics order by graphics_id desc");
                              if( count($courses) > 0){
                                foreach($courses as $data){ 
								  $gallery_id = $data["graphics_id"];
                                  $graphics_name = $data["graphics_name"];
                                  $image = $data["graphics_file"];  
                                  $counter++;

          ?>
<div  class="col-md-3">

<div class="brdmrgin wow fadeInLeft">

<img style="height:50%;width:100%"class="img-responsive" src='<?=$image?>' alt="" >
</div><!-- brdmrgin ended here -->

</div>
<?php }}?>
</div>



</div><!-- mainwrpcont ended here -->
</div>
<div></div>

                                </br>
<!-- mainwrpcont ended here -->
<div class="clear-fix"></div>
<!-- click to call Ended here -->
<?php include'footer.php'?>

<!-- JAVASCRIPT START HERE -->
<!--<script src="js/jquery-latest.min.js"></script>-->
<script src="js/bootstrap.min.js"></script>
<!-- JAVASCRIPT END HERE -->

<!-- portfolio start here -->
<!--<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
--><script src="js/bootstrap-portfilter.min.js"></script>
<!-- portfolio Ended here -->

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

<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
				

				
			});
			</script>

<script type='text/javascript' >
(function () {var p5 = document.createElement('script');p5.type = 'text/javascript';p5.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'src.plumb5.com/arenajayanagar-38.js';var p5s = document.getElementsByTagName('script')[0]; p5s.parentNode.insertBefore(p5, p5s);})();
</script>

</body>

<!-- Mirrored from arenajayanagar.com/graphic-works.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:52:55 GMT -->
</html>
