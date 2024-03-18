<?php include'header.php' ?>


<?php 
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  // IP address passed from proxy
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  // Direct IP address
  $ip = $_SERVER['REMOTE_ADDR'];
}


?>
<?php 
if (isset($_POST['create'])){
     $data = array(                             
               
    'name'   => $_POST['name'],
    'mobile'  => $_POST['mobile'],
    'email' => $_POST['email'],
    'query' => $_POST['query'],
    'verified' => $_POST['verified'],
'apply_status_id' => $_POST['apply_status_id'],
               );
// print_r($data);

  $rest = $db->insertAry('apply_status',$data);
  $rest_id=$db->getLastId();
//  print_r($rest_id);
// exit;

  if(!is_null($rest)){

    // echo "Added Successfully";
    echo "<script>alert('Message Sent Successfully.')</script>";

    unset($_POST);

    echo "<script>window.opener.location.reload();</script>";

  }else{ 

    echo "insert failed!"; 

    echo "<script>window.opener.location.reload();</script>"; 

  }
}        
              
?>


<style>
  @media only screen and (max-width:2064px){
  #maincontainerapp{
    margin-top:170px;
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
  #download_documents{
      margin-top:100px;
  }
  }
 
  </style>


<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/ban-falls.jpg"  alt="" />

<?php include'toogle.php'?>

</div>
<div id="maincontainerapp">
<div id="maincontappl">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php" class="icon-banss downld-cont">Download Brochure</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="contactus.php" class="icon-bansclik clickto">Contact Us</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="students_speak.php" class="icon-bansplace studspeaksmain">Students Speaks</a></div>
<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInRight"><a href="students-works.php" class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
</div><!--main-iconwrp ended here -->
</div>
</div>
<div class="clearfix"></div></br></br>


<div class="top-spac"></div>
<div class="container" id="download_documents">
    

<h1 class="wow fadeInUp">Download PDF</h1>
<div class="row">
<?php
                              $counter = 0;
                              $courses = $db->getRows("SELECT * from download_brochure order by pdf_id desc");
                              if( count($courses) > 0){
                                foreach($courses as $data){ 
                                  $pdf_id = $data["pdf_id"];
                                  $pdf_title = $data["pdf_title"];
                                  $pdf_file = $data["pdf_file"];
                                  $imagefiles = $data["imagefiles"];
                                  // $verified = $data["verified"];  
                                  $counter++;

          ?>
<div  class="col-md-3">

<div class="brdmrgin wow fadeInLeft">
<div class="downldconthedpg"><?php echo($pdf_title)?></div>
<img class="img-responsive" src='<?=$imagefiles?>' alt=""  style="height:161px;">
<button onclick="location.href='apply.php'" class="downbtnapply hvr-sweep-to-rightss" type="button">Apply Now</button> 

<?php
                              $var = 0;
                              $getfile = $db->getRows("SELECT * from apply_status where apply_status_id ='".$ip."'");
                              if(count($getfile) > 0){
                                  $var++;
?>
<button onclick="window.open('<?php echo $pdf_file ?>')"  class="downbtndownldpg hvr-sweep-to-right" type="button">Download Pdf</button>
<?php }
else{   ?>
  <button id="element" class="downbtndownldpg hvr-sweep-to-right btn btn-default show-modal">Download PDF</button>
  <?php } ?>
</div><!-- brdmrgin ended here -->
</div>
<?php }}?>
</div>
</div>


  <div id="testmodal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Cantact US</h4>
            </div>
            <div class="modal-body">
            <form action="" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input class="form-control" id="name" type="text" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input class="form-control" id="email" type="email" name="email">
    </div>
    <div class="form-group">
      <label for="mobile">Mobile</label>
      <input class="form-control" id="Mobile" type="Mobile" name="mobile">
      <input class="form-contol" type="hidden" id="verified" type="verified" value="yes" name="verified" hidden="" style="display: none;">
      <input class="form-contol" type="hidden" id="rest_id" type="verified" value="" name="apply_status_id" hidden="" style="display: none;">
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea class="form-control" id="query" name="query"></textarea>
    </div>

    <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
                <input class="btn btn-primary" name="create" type="submit" value="Submit" />

    </div>
      </form>
    </div>
   </div>
            
        </div>
    </div>



   
         

</div>

	
	
	
	
	
	
<div class="spacs-frm"></div>






<div class="clearfix"></div></br></br>





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

<?php include'footer.php' ?>
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
<script>
  $(document).ready(function(){
  var show_btn=$('.show-modal');
  // var show_btn=$('.show-modal');
  //$("#testmodal").modal('show');
  
    show_btn.click(function(){
      $("#testmodal").modal('show');
  })
});

$(function() {
        $('#element').on('click', function( e ) {
            Custombox.open({
                target: '#testmodal-1',
                effect: 'fadein'
            });
            e.preventDefault();
        });
    });
  </script>

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

<script>

$(document).ready(function() {
  var my_variable = <?php echo json_encode($ip); ?>;
   console.log(my_variable);
      //alert(my_variable);

   document.getElementById("rest_id").value = my_variable;
    // $("#rest_id").val(my_variable);

});
</script>



</body>

<!-- Mirrored from /download.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:39:58 GMT -->
</html>

