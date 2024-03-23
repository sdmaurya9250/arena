<?php include 'header.php'; ?>
<?php include 'responsive.php' ?>

<?php
if (isset ($_POST['submit'])) {




  $inputvalidation->addRule($_POST['name'], 'alphanum', 'name', true, 3, false);

  $inputvalidation->addRule($_POST['mobile'], 'num', 'mobile', true, 10, 10);
  $inputvalidation->addRule($_POST['email'], 'mail', 'email', true, 3, false);

  if ($inputvalidation->validate()) {
    $data = array(

      'name' => $_POST['name'],
      'mobile' => $_POST['mobile'],
      'email' => $_POST['email'],
      'query' => $_POST['query'],

    );

    $rest = $db->insertAry('apply_status', $data);

    if (!is_null($rest)) {

      // echo "Added Successfully";
      echo "<script>alert('Added Successfully.')</script>";

      unset($_POST);

      echo "<script>window.opener.location.reload();</script>";

    } else {

      echo "insert failed!";

      echo "<script>window.opener.location.reload();</script>";

    }

  } else {
    echo "<script>alert('" . $inputvalidation->errors() . "');</script>";
  }
}


?>

<style>
  /* @media only screen and (max-width:2064px){
  #maincontainerapp{
    margin-top:-200px;
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
  } */
  @media (min-width: 300px) and (max-width: 480px) {
    #maincontainerapp {
      margin-top: 35%;
      background-color: #fff !important;
    }
    .rowcon{
      margin-top: 5% !important;
    }
  }
</style>

<body>
  <div class="wow fadeInLeft" id="mainiframewrp">
    <iframe class="embed-responsive-item"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.7159321203217!2d77.54476197113699!3d12.92597038802174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3e31f16c96e1%3A0x2785bce8513d012d!2sArena%20Animation%20Banashankari!5e0!3m2!1sen!2sin!4v1701849090694!5m2!1sen!2sin"
      width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <div id="maincontainerapp">
    <div id="maincontappl">
      <div class="row rowcon">
        <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php"
            class="icon-banss downld-cont">Download Brochure</a></div>
        <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="contactus.php"
            class="icon-bansclik clickto">Contact Us</a></div>
        <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="placement.php"
            class="icon-bansplace placecont">PLACEMENT PARTNER</a></div>
        <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInRight"><a href="students-works.php"
            class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
      </div><!--main-iconwrp ended here -->
      <div class="spacs-frm"></div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h1 class="wow fadeInUp">contact us</h1>
          <address class="wow fadeInLeft">
            #5, Kalabairaveshwara Complex,2nd Floor,Dr.Puneeth Rajkumar Rd,Next to HDFC Bank,Above Cycle World,4th Block
            Banashankari 3rd Stage, <br />
            Bangalore - 560085<br /><br />
            Ph: 8050412609 / 8867067333<br />
            Mobile : <br /><br />
            Email -<a class="addmail" href="mailto:arenabsk@gmail.com">arenabsk@gmail.com</a>
          </address>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
          <h1 class="wow fadeInLeft">ENQUIRY FORM</h1>
          <div class="spacs"></div>
          <form id="enquiryForm" method="post" id="form-search">
            <input id="name" name="name" class=" form-control" type="text" placeholder="Name" />
            <input id="eMail" class=" form-control" type="text" placeholder="E-Mail" name="email" />
            <input id="mobile" class=" form-control" type="text" placeholder="Mobile" name="mobile" />
            <textarea id="query" class="form-control" placeholder="Query" name="query"></textarea>
            <button id="sub-btn" name="submit" class="btns hvr-sweep-to-rightss" type="submit">Submit</button> <span
              id="thankMess"></span>
          </form>
        </div>
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
      <input class="inputees" type="text" placeholder="Enter Your Name">
      <input class="inputees" type="text" placeholder="Enter Your Mobile">
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
    $('.dropdown').on('show.bs.dropdown', function (e) {
      $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // Add slideUp animation to dropdown
    $('.dropdown').on('hide.bs.dropdown', function (e) {
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

    function closepoped() {
      backlayer.style.display = "none";
      popuped.style.display = "none";
    }

    function showspops() {
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
  <script src="js/valid.js"></script>

  <script type="text/javascript">
    var Plumb5FormTrackingDetails = { ButtonTag: '#enquiryForm #sub-btn', IsById: false, FormId: 211, Fields: [1, 2, 3, 7], Mandatory: [true, true, true, false], FormType: 12 };
    var Plumb5FieldsData = ['#enquiryForm #name', '#enquiryForm #mail', '#enquiryForm #phone', '#enquiryForm #query'];
    function AddUpPlumb5Events() {
      Plumb5AddEvent("click");
    }
  </script>

  <script type='text/javascript'>
    (function () { var p5 = document.createElement('script'); p5.type = 'text/javascript'; p5.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'src.plumb5.com/arenabsk-38.js'; var p5s = document.getElementsByTagName('script')[0]; p5s.parentNode.insertBefore(p5, p5s); })();
  </script>

  <!-- chatbot script -->
  <script>(function (w, d) { w.nurams_bot = "10"; w.nura = "bot"; var bot_decrp = "nurams"; var bot_id = "gnyuyrkazmys5t{xgsy5t{xgsy4sot4py"; var server_id = "nnzuzrvaym@s55xhuz4ro|k5"; var bot_styl_id = "gnyuyrkazmys5t{xgsy5t{xgsy4sot4iyy"; var showcode = "nnzuzrvaym@s55xhuz4ro|k5huz3gjsot3hgiqktj5gvo5"; var nurams = (function (z, y) { var rt = []; z.forEach((e) => { var yi = 0; var rta = ""; for (var i = 0; i < (e.length); i++) { if ((((i % 2) == 1) && (i > 0)) && (yi < 6)) { if (y.charCodeAt(yi) == e.charCodeAt(i)) { yi = yi + 1; } else { rta += "null"; } } else { var rts = e.charCodeAt(i); rta += String.fromCharCode((rts - (y.length))); } } rt.push(rta); }); return rt; })([server_id, bot_id, bot_styl_id, showcode], bot_decrp); if (location.protocol !== "contactus.php") { nurams[0] = nurams[0].replace("https", "http"); } else { if (!nurams[0].includes("https")) { nurams[0] = nurams[0].replace("http", "https"); } } var h = d.head || d.getElementsByTagName("head")[0]; var ss = d.createElement("link"); ss.setAttribute("rel", "stylesheet"); ss.setAttribute("href", nurams[0] + nurams[2]); h.appendChild(ss); var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async = true; s.setAttribute("src", nurams[0] + nurams[1]); w.prv = nurams[0]; w.shownurams = nurams[3]; h.appendChild(s); })(window, document);</script>
  <script>
    $('#form-search').submit(function (e) {
      $err_lbl = $(this).parent().find('.err_lbl');
      $err_lbl.html('');
      var name = $('#name').val();
      var eMail = $('#eMail').val();
      var mobile = $('#mobile').val();


      if (name == "") {

        e.preventDefault();

        $err_lbl.html("Please Fill Name");

else if (eMail == "") {

          e.preventDefault();

          $err_lbl.html("Please Fill Email ID");

        }
        else if (mobile == "") {

          e.preventDefault();

          $err_lbl.html("Please Fill Mobile Number");

        }


      });

  </script>
</body>

<!-- Mirrored from arenabsk.com/contactus.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:38:31 GMT -->

</html>