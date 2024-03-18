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




<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                <div class="art-postcontent art-postcontent-0 clearfix"><p><div id="subdiv2" style="width:100%; background:#ffffff; float:none; margin:0px">
       
<div style="font-size:14px;text-align:justify; margin-top:0px;width:100%; text-align:center">
  <h2>Workshop on Live Sketching day</h2><br /><br /><img src="images/Lalbagh/main%20page.jpg" width="100%" height="auto" /><br /><img src="images/Lalbagh/1stpage.jpg" width="100%" height="auto" /><br /><img src="images/Lalbagh/2ndpage.jpg" width="100%" height="auto" /><br /><img src="images/Lalbagh/3ndpage.jpg" width="100%" height="auto" /><br /><img src="images/Lalbagh/4ndpage.jpg" width="100%" height="auto" /><br /></div>



<div style="width:100%; margin:auto">

      


</article></div>
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

<!-- Mirrored from arenajayanagar.com/lalbagh.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:42:53 GMT -->
</html>
