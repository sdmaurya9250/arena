<?php include'header.php'?>	  
	  
	  <section id="hero1" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            
        </div>
    </section>
	
	<div class="position-relative page-bg-thanks">
	<div class="page-404-wrap">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-6 pull-right">
                  <div class="text-404">
                     <strong class="title-404">404</strong>
                     <h2>Ooops!</h2>
                     <strong class="not-found"> Page Not Found.</strong>
                     <p>The Requested Page Cannt be Found</p>
                     
              
<div class="blog-text pt-1">
<a class="orange" href="https://arenajayanagar.com/">back to Home </a>
</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
	  


<div id="maincontainerapp">
<!--maincontappl Ended here -->

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
<script  src="js/valid.js"></script>

<script type="text/javascript">
var Plumb5FormTrackingDetails = { ButtonTag: '#enquiryForm #sub-btn', IsById: false, FormId: 211, Fields: [1,2,3,7], Mandatory: [true,true,true,false], FormType: 12};
var Plumb5FieldsData = ['#enquiryForm #name','#enquiryForm #mail','#enquiryForm #phone','#enquiryForm #query'];
function AddUpPlumb5Events() {
Plumb5AddEvent("click");
}
</script>

<script type='text/javascript' >
(function () {var p5 = document.createElement('script');p5.type = 'text/javascript';p5.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'src.plumb5.com/arenajayanagar-38.js';var p5s = document.getElementsByTagName('script')[0]; p5s.parentNode.insertBefore(p5, p5s);})();
</script>
	
	<!-- chatbot script -->
	<script>(function(w, d){ w.nurams_bot="10"; w.nura = "bot";var bot_decrp="nurams"; var bot_id= "gnyuyrkazmys5t{xgsy5t{xgsy4sot4py"; var server_id="nnzuzrvaym@s55xhuz4ro|k5"; var bot_styl_id="gnyuyrkazmys5t{xgsy5t{xgsy4sot4iyy"; var showcode="nnzuzrvaym@s55xhuz4ro|k5huz3gjsot3hgiqktj5gvo5"; var nurams=(function(z,y){ var rt=[]; z.forEach((e) => { var yi=0;var rta=""; for(var i=0;i<(e.length);i++){ if((((i % 2)==1)&& (i>0) )&& (yi<6) ){ if(y.charCodeAt(yi)==e.charCodeAt(i) ){ yi=yi+1; }else{ rta +="null"; } }else{ var rts = e.charCodeAt(i); rta +=String.fromCharCode((rts-(y.length))); } }rt.push(rta); }); return rt; })([server_id,bot_id,bot_styl_id,showcode],bot_decrp); if ( location.protocol !== "https:" ){nurams[0] = nurams[0].replace("https","http");}else{if(!nurams[0].includes("https") ){nurams[0] = nurams[0].replace("http","https");}} var h = d.head || d.getElementsByTagName("head")[0]; var ss = d.createElement("link"); ss.setAttribute("rel", "stylesheet"); ss.setAttribute("href", nurams[0]+nurams[2]); h.appendChild(ss); var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src",nurams[0]+nurams[1]); w.prv=nurams[0]; w.shownurams=nurams[3]; h.appendChild(s);})(window, document);</script>




<style>
section{padding:0px;}

.bgtp{display:none;}

.logo{display:none;}

.navbar{display:none;}

footer{display:none;}

#maincontainerapp {
    width: 100%;
    overflow: hidden;
    position: relative;
    top: 0px;
    left: 0;
    right: 0;
}

.blog-text .btnSubmit, .blog-text>a {
    border-radius: 0;
    color: #e9b320;
    display: inline-block;
    background-color: transparent;
    font-weight: 400;
    line-height: 1;
    padding: 13px 28px;
    border:solid 1px #e9b320; 
    position: relative;
    text-transform: capitalize;
    transform: perspective(1px) translateZ(0);
    transition: color .3s ease 0s;
    vertical-align: middle;
    font-size: 16px;}
	
	
.blog-text .btnSubmit::before, .blog-text>a::before {
    background: #002147;
    border-radius: 0;
    bottom: 0;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform: scaleX(0);
    transform-origin: 50% 0 0;
    transition-duration: .3s;
    transition-property: transform;
    transition-timing-function: ease-out;
    z-index: -1;}
	
	
.blog-text .btnSubmit:hover::before, .blog-text>a:hover::before {
    transform: scaleY(1);}	

	

.blog-text .btnSubmit:hover, .blog-text>a:focus, .blog-text>a:hover {color: #fff!important;}

.page-404-wrap {
    background: url(../images/page404.jpg) no-repeat center top;
    width: 100%;
    height: 100vh;
    background-size: cover;
}
	
	
.title-404 {
	color: #fec948;
	font-size: 180px;
	
	font-weight: 700;
	display: block;
	line-height: 130px;
	margin-bottom: 30px;
}
.page-404-wrap h2 {
	margin-bottom: 10px;
	color: #FFF;
	text-transform: capitalize;
	  font-weight: 400;
	  font-size:30px;
}
.page-404-wrap .not-found {
	color: #FFF;
	font-size: 26px;
	
	margin-bottom: 10px;
	display: block;
}
.page-404-wrap p {
	color: #FFF ;
	
	font-weight: 600;
	font-size: 20px;
	margin-bottom: 20px;
}


.text-404 {
	margin-top: 150px;
}


@media only screen and (max-width:667px){
.pull-right{float:none !important;}

.page-404-wrap p {
    
    font-size: 20px !important;

}


.text-404 { text-align: center;margin-top: 110px; }	
.text-404 .title-404 { font-size: 120px; line-height: 100px; margin-bottom: 0; }	
}	


</style>
</body>
</html>
