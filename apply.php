<?php include 'header.php';?>

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
<!-- Mirrored from arenajayanagar.com/apply.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:38:26 GMT -->
<?php 
if (isset($_POST['submit_action'])){


        $inputvalidation->addRule($_POST['fname'],'alphanum','fname', true, 3, false);
        $inputvalidation->addRule($_POST['lname'],'alphanum','lname', true, 3, false);
        $inputvalidation->addRule($_POST['mobile'],'num','Mobile', true, 10, 10);
        $inputvalidation->addRule($_POST['email'],'mail','Email', true, 3, false
        
        );
        $inputvalidation->addRule($_POST['course'],'select','course', true, 3, false);
                       
      if($inputvalidation->validate()){

       
     $data = array(                             
    'fname'   => $_POST['fname'],
    'lname'  => $_POST ['lname'],
    'address' => $_POST ['address'],
    'city'=> $_POST ['city'],
    'pincode'   => $_POST['pincode'],
    'dob'  => $_POST ['dob'],
    'email' => $_POST ['email'],
    'mobile'=> strip_tags(trim($_POST ['mobile'])),
    'fathername'   => $_POST['fathername'],
    'fmobile'  => $_POST ['fmobile'],
    'course' => $_POST ['course'],
    'check_list1'=> !empty($_POST['check_list1'])?$_POST['check_list1']:'',
    'check_list2'   => !empty($_POST['check_list2'])?$_POST['check_list2']:'',
    'check_list3'  => !empty($_POST['check_list3'])?$_POST['check_list3']:'',
    
               );
            
  $rest = $db->insertAry('apply_details',$data);
  if(!is_null($rest)){

    echo "<script>alert('Added Successfully.')</script>";

    unset($_POST);

    redirect('apply.php');

  }else{ 

    echo "insert failed!"; 

    redirect('apply.php'); 

  }
} 
else {
  echo "<script>alert('".$inputvalidation->errors()."');</script>" ;
}
}


            
              
?>
<style>
  .error
{
  color: red;
  size: 80%
}
.hidden
{
  display:none;
}


  </style>

<body>
      

<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/banner_apply.jpg"  alt="" /></div>
<?php //include'toogle.php'?>
<div id="maincontainerapp">
<div id="maincontappl">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php" class="icon-banss downld-cont">Download Brochure</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="contactus.php" class="icon-bansclik clickto">Contact Us</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="placement.php" class="icon-bansplace placecont">PLACEMENT PARTNER</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInRight"><a href="students-works.php" class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
</div><!--main-iconwrp ended here -->
<h1 class="wow fadeInUp">apply now</h1>
<div class="col-md-12">
<p class="colcunt wow fadeInLeft"></p>
</div>
<div class="spacs-frm"></div>


<form id="form-search_id"enctype="multipart/form-data" method="POST" action="" >
<div class="row ">
<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
<label for="fname">First Name<span style="color:red;font-size:15px;">*</span></label>
<input id="fname" class=" form-control" type="text" placeholder="First Name" name="fname" />
<label for="">Last Name<span style="color:red;font-size:15px;">*</span></label> 
<input id="lname" class=" form-control"  type="text" placeholder="Last Name" name="lname" /> 
<label for="">Address</label> 
<textarea id="comments" class=" form-control" rows="3" placeholder="Address" name="address"></textarea>
<label for="">City</label> 
<input id="city" class=" form-control"  type="text" placeholder="City" name="city" />
<label for="">Pincode</label> 
<input id="pincode" class=" form-control"  type="number" placeholder="Pincode"  name="pincode" />
<label for="">Date of Birth</label> 
<input type="text" class="form-control" placeholder="Date of Birth" onfocus="(this.type='date')"/ name="dob">
<label for="">Email<span style="color:red;font-size:15px;">*</span></label> 
<input id="eMail" class=" form-control"  type="email" placeholder="Email" name="email" /> 
<label for="">Mobile<span style="color:red;font-size:15px;">*</span></label> 
<input id="mobile" class=" form-control"  type="text" placeholder="Mobile" name="mobile" /> 
</div>
<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
<label for="">Father's Name</label> 
<input id="fatherName" class=" form-control " type="text" placeholder="Father's Name" name="fathername" />
<label for="">Father's Mobile Number</label> 
<input id="tele" class=" form-control "  type="text" placeholder="Father's Mobile Number" name="fmobile" />
<div class="form-group">
  <label for="sel1">Select Course:<span style="color:red;font-size:15px;">*</span></label>
  <select class="form-control" id="sel1" name="course" required="">
  <option value="1 Week Free Course">1 Week Free Course</option>
  <option>Graphics & Web Design</option>
  <option>Graphics, Web Design and Development</option>
  <option>UI/UX Design</option>
  <option>AVG-Trinity 3D</option>
  <option>DAE-Diploma in Animation Engineering</option>
  <option>Degree in VFx & Animation</option>
  <option>Animation and VFx Prime</option>
  <option>VFx Pro-Compositing</option>
  <option>Game Design</option>
  <option>Game Design and Development</option>
  <option>Short Term Professional Course</option>
</select>
</div>
<label for="">Educational Qualification(Please tick as applicable)</label>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="SSLC/Class X" name="check_list1">SSLC/Class X
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="PUC" name="check_list2">PUC
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="Degree" name="check_list3">Degree
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="" name="declare">I hereby declare that the information provided by me is true. I also understand that the fee once paid is non-refundable. I also abide by the rules and regulations of the institute.
  </label>
</div>
<span class="err_lbl" id="err_lbl" style="color:red; "></span>
<button id="submit" class="btns hvr-sweep-to-rightss" type="submit" value="Submit" name="submit_action" style="color:white;">Submit<button
<br>

</div>
</div>
</form>

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
<script src="js/valid.js" ></script>



<!-- <script type="text/javascript">
var Plumb5FormTrackingDetails = { ButtonTag: '#form-apply #submit', IsById: false, FormId: 210, Fields: [1,6,2,3,6,6,6,7], Mandatory: [true,false,true,true,false,true,true,false], FormType: 12};
var Plumb5FieldsData = ['#form-apply #fName','#form-apply #lName','#form-apply #eMail','#form-apply #mobile','#form-apply #age','#form-apply #city','#form-apply #courses','#form-apply #comments'];
function AddUpPlumb5Events() {
  Plumb5AddEvent("click");
}
</script> -->


<script type='text/javascript' >
(function () {
  var p5 = document.createElement('script');
  p5.type = 'text/javascript';
  p5.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'src.plumb5.com/arenajayanagar-38.js';
  var p5s = document.getElementsByTagName('script')[0]; 
  p5s.parentNode.insertBefore(p5, p5s);
  })();
</script>

<!-- chatbot script -->
	<script>(function(w, d){w.nurams_bot="10"; w.nura = "bot";var bot_decrp="nurams"; var bot_id= "gnyuyrkazmys5t{xgsy5t{xgsy4sot4py"; var server_id="nnzuzrvaym@s55xhuz4ro|k5"; var bot_styl_id="gnyuyrkazmys5t{xgsy5t{xgsy4sot4iyy"; var showcode="nnzuzrvaym@s55xhuz4ro|k5huz3gjsot3hgiqktj5gvo5"; var nurams=(function(z,y){ var rt=[]; z.forEach((e) => { var yi=0;var rta=""; for(var i=0;i<(e.length);i++){ if((((i % 2)==1)&& (i>0) )&& (yi<6) ){ if(y.charCodeAt(yi)==e.charCodeAt(i) ){ yi=yi+1; }else{ rta +="null"; } }else{ var rts = e.charCodeAt(i); rta +=String.fromCharCode((rts-(y.length))); } }rt.push(rta); }); return rt; })([server_id,bot_id,bot_styl_id,showcode],bot_decrp); if ( location.protocol !== "apply.php" ){nurams[0] = nurams[0].replace("https","http");}else{if(!nurams[0].includes("https") ){nurams[0] = nurams[0].replace("http","https");}} var h = d.head || d.getElementsByTagName("head")[0]; var ss = d.createElement("link"); ss.setAttribute("rel", "stylesheet"); ss.setAttribute("href", nurams[0]+nurams[2]); h.appendChild(ss); var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src",nurams[0]+nurams[1]); w.prv=nurams[0]; w.shownurams=nurams[3]; h.appendChild(s);})(window, document);</script>




  

  <script>


$('#form-search_id').submit(function(e) {
  $err_lbl= $(this).parent().find('.err_lbl');
  $err_lbl.html('');
  var fname = $('#fname').val();
  var lname = $('#lname').val();
  var city = $('#city').val();
  
  var eMail = $('#eMail').val();
  var mobile = $('#mobile').val();
  var sel1 = $('#sel1').val();
  
if (fname == "" ){

    e.preventDefault();

  $err_lbl.html("Please Fill First Name");

}else if(lname == "" ){

e.preventDefault();

$err_lbl.html("Please Fill Last Name");

}
else if(city == "" ){

e.preventDefault();

$err_lbl.html("Please Fill City");

}
else if(eMail == "" ){

e.preventDefault();

$err_lbl.html("Please Fill Email Id");

}
else if(mobile == "" ){

e.preventDefault();

$err_lbl.html("Please Fill Mobile Number");

}
else if(sel1 == "1 Week Free Course" ){

e.preventDefault();

$err_lbl.html("Please Select Courses");

}

});














      


     



  // alert(formData);



   



  



  

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


</body>

<!-- Mirrored from arenajayanagar.com/apply.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:38:29 GMT -->
</html>
