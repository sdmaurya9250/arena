<?php include 'index_style.php' ?>
<?php include 'header.php' ?>
<?php include 'popup.php' ?>

<?php
// include'config.php';
include ("testmail/class.phpmailer.php");
include ("testmail/mail.php");
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from arenajayanagar.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 11:31:00 GMT -->
<!-- Flashnews start here -->
<script src="js/jquery.jticker.min.js"></script>
<script type="text/javascript">
  jQuery(function ($) {
    $('.ticker').jTicker();
  });
  $(document).ready(function (e) {
    $("button").click(function () {
      $("#kala").remove();
    })
  });
</script>
<!-- Flashnews End here -->

<head>
  <style type="text/css">
    .sni {
      color: #fc6c08 !important;
    }

    #kala {
      position: absolute;
      margin-left: 30%;
      margin-top: 8%;
      width: 584px;
      border: 10px #fff solid;
      z-index: 1000
    }

    .close_button {
      position: absolute;
      right: 5px;
      background: #000;
      top: 5px;
      font-weight: 700;
      padding: 5px;
      color: #f3eced
    }

    @media only screen and (max-width:600px) {
      #kala {
        position: absolute;
        margin-left: 4%;
        margin-top: 7%;
        width: 320px;
        border: 10px #fff solid;
        z-index: 1000
      }
    }



    .form-box {
      position: relative;
      top: -450px;
      max-width: 600px;
      float: left;
      padding: 0px;
      background: #ffffff;
      border: 5px solid #f2f2f2;
      /* height:100px; */
    }

    h1,
    p {
      text-align: center;
    }

    input,
    textarea {
      width: 95%;
    }

    footer {
      padding-top: 0px !important;
      padding-bottom: 0px !important;
    }

    @media only screen and (max-width: 792px) {

      .animation {
        display: none;

      }

    }

    body {
      overflow-x: hidden;
    }

    @media (max-width: 991px) {
      .adbewrp {
        display: none;
      }
    }

    @media (min-width: 641px) and (max-width: 768px) {
      body {
        /* background-color: red; */
        overflow-x: hidden;
      }

      .col-xs-6 {
        width: 100%;
      }
    }

    .video_test h1 {
      position: relative;
      padding: 0;
      margin: 0;
      font-family: "Raleway", sans-serif;
      font-weight: 300;
      font-size: 27px !important;
      color: #080808;
      -webkit-transition: all 0.4s ease 0s;
      -o-transition: all 0.4s ease 0s;
      transition: all 0.4s ease 0s;
    }

    .fa-arrow-circle-o-right {
      font-size: 2em !important;
      margin-left: -16px !important;
    }

    @media only screen and (max-width: 640px) {
      .col-md-6 {
        width: 100% !important;
      }
    }

    @media (min-width: 402px) and (max-width: 792px) {
      h1 {
        font-size: 1.6em;
        color: #050503;
        text-decoration: none;
        font-weight: bold;
        line-height: 24px;
        margin-top: 15px !important;
      }
    }

      @media (max-width: 450px) {

        .col-md-3,
        .col-sm-3,
        .col-xs-3 {
          width: 50% !important;
          /* Adjust width to 50% for smaller screens */
        }

        .thumbnail {
          height: 150px !important;
          overflow: hidden;
        }

        .thumbnail img {
          height: 100% !important;
          width: 100% !important;
        }

      }
  </style>
</head>

<body>


  <div id="banner">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->

      <div class="carousel-inner" role="listbox">
        <div class="adbewrp wow fadeInDownBig "><a href="adobe-certification.php"><img src="images/adode_certi.jpg"
              alt="" /></a></div>

        <div class="item active">
          <a href="graphic-design.php" target="blank"><img src="images/carousel/img1.jpg"
              alt="Graphic Design Course Arena Banashankari" style="width:100%" loading="lazy"></a>
        </div>

        <div class="item">
          <a href="animation-diploma-course.php" target="blank"><img src="images/carousel/img2.jpg"
              alt="2D Animation Course Arena Banashankari" style="width:100%" loading="lazy"></a>
        </div>

        <div class="item">
          <a href="trinity-course.php" target="blank"><img src="images/carousel/img3.jpg"
              alt="Trinity 3D Course Arena Banashankari" style="width:100%" loading="lazy"></a>
        </div>

        <div class="item">
          <a href="vfx-animation-course.php" target="blank"><img src="images/carousel/img4.jpg"
              alt="Degree VFX and Animation Course" style="width:100%" loading="lazy"></a>
        </div>
        <div class="item">
          <a href="animation-diploma-course.php" target="blank"><img src="images/carousel/img5.jpg"
              alt="Animation course in Bangalore" style="width:100%" loading="lazy"></a>
        </div>
        <div class="item">
          <a href="game-art-design.php" target="blank"><img src="images/carousel/img1.jpg"
              alt="Game Design Course Arena Banashankari" style="width:100%" loading="lazy"></a>
        </div>
        <div class="item">
          <a href="ui-ux-design.php" target="blank"><img src="images/carousel/img2.jpg"
              alt="UI and UX Course Arena Banashankari" style="width:100%" loading="lazy"></a>
        </div>

      </div>

      <?php include 'toogle.php' ?>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="fa fa-arrow-circle-o-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>


    </div>
  </div>
  <!-- click to call start here-->
  <div id="backopac"></div>

  <!-- click to call Ended here -->

  <div class="banwrp">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 flashnewswrp clearfix" style="margin-top: 0px !important;
">
        <div class="ticker well" data-duration="60" data-loop="2" data-effect="linear" style="overflow: hidden;"> <span
            style="white-space: nowrap; position: relative; transition: left 60s linear 0s; left: -2395px;">Arena Alumni
            Mr.Srinivas T gets a credit as a compositor in the Hollywood movie Antman Wasp QUANTUMANIA&nbsp;&nbsp;<img
              src="images/new_bullet.jpg" width="41" height="20" alt="Bullet point" loading="lazy">&nbsp;&nbsp;Arena
            Banashankari successfully places the latest batch of VFx students at DNEG"&nbsp;&nbsp;<img
              src="images/new_bullet.jpg" width="41" height="20" alt="Bullet point">&nbsp;&nbsp;“OCEAN”, the Stop Motion
            Animation movie done by the students of Arena Banashankari bags 4 awards along with the best movie award @
            THE ASIFA INDIA AWARDS OF EXCELLENCE 2022-23&nbsp;&nbsp;<img src="images/new_bullet.jpg" width="41"
              height="20" alt="Bullet point" loading="lazy">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/new_bullet.jpg"
              width="41" height="20" alt="Bullet point" loading="lazy">&nbsp;&nbsp; Arena Banashankari takes the lead to
            celebrate International Animation Day (IAD 2022) @ Yuvaka Sangha, Banashankari 4th Block&nbsp;&nbsp;<img
              src="images/new_bullet.jpg" width="41" height="20" alt="Bullet point" loading="lazy">&nbsp;&nbsp;"Nodo",
            the 3D short Movie made by the students of Arena Banashankari bags the I place at "Orbit
            Live"&nbsp;&nbsp;<img src="images/new_bullet.jpg" width="41" height="20"
              alt="Bullet point">&nbsp;&nbsp;"Levitating Love", the 3D Short Movie made by students of Arena
            Banashankari gets the "GOLD WINNER" award @ Delhi CG Animation Awards 2015&nbsp;&nbsp;<img
              src="images/new_bullet.jpg" width="41" height="20" alt="Bullet point"
              loading="lazy">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/new_bullet.jpg" width="41" height="20"
              alt="Bullet point" loading="lazy">&nbsp;&nbsp;</span> </div>
      </div>
      <div class="container">
        <div class="row bolds">
          <div class="col-md-4 col-md-push-8 col-sm-4 col-sm-push-8">
            <div class="row wow fadeInRight">
              <div class="clickwrp col-md-6 col-sm-6 col-xs-6">
                <!--<div style="left:100px"><script type="text/javascript" src="//voice.solutionsinfini.com/widget/loadClick2CallWidget.php?key=MjEy"></script></div>-->
                <a href="contactus.php"><img src="images/logo/call.png" width="60" height="60" alt="Click to Call"
                    border="0" / loading="lazy"><br>
                  Contact Us </a>
              </div>
              <div class="downloadwrp col-md-6 col-sm-6 col-xs-6">
                <a href="download.php"><img src="images/download_icon.png" width="60" height="60" alt="Icon" border="0"
                    loading="lazy"><br>
                  DOWNLOAD BROCHURES</a>
              </div>
            </div>

            <div class="row wow fadeInLeft">
              <div class="studwrks col-md-6 col-sm-6 col-xs-6">
                <a href="students-works.php">
                  <img src="images/logo/person.png" width="60" height="60" alt="Student works" border="0"><br>
                  STUDENTS Works</a>
              </div>
              <div class="studspeak col-md-6 col-sm-6 col-xs-6"><a href="students_speak.php"><img
                    src="images/logo/frost.png" width="60" height="60" alt="Student speak" border="0"
                    loading="lazy"><br>
                  STUDENTS SPEAKS</a>
              </div>
            </div>
          </div>
          <div class="abtwrp col-md-8 col-md-pull-4 col-sm-8 col-sm-pull-4 wow fadeInLeft"
            style="background-color:none !important;"><br>
            <h1>The Best Animation Institute in Bangalore</h1>

            <p class="hedcontts">Arena Creative Campus Banashankari was established in the year 1996 and is India’s best
              animation, VFX, Gaming, Graphics, and Web Design College. Arena Banashankari Bangalore is the top
              animation college in Bangalore that offers an amalgamation of excellent teaching, the right
              infrastructure, a beautiful campus, and well-experienced faculty members.</p>
            <p class="hedcontts">The main objective of Arena is to empower youth with knowledge, skills, and values so
              that they become the leaders of tomorrow. Here, the students are trained in all aspects of life, leading
              to their overall development and becoming exceptional professionals in their chosen field of
              specialization. Go through the website to know more about <b>Arena animation courses and fees.</b>
              &nbsp;<span class="mre"><a href="about-us.php">Read More..</a></span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Row--->
    <?php include 'elementor.php' ?>
    <div class="animation">
      <?php include 'sample.php' ?>
    </div>
    <section class="pgdm__section bg-ht position-relative py-5" data-scroll-index='2'>
      <?php include 'student_activity.php' ?>
    </section>

    <div class="container">
      <div class="row">


        <div class="col-md-12 col-sm-12 col-xs-12 cleds">
          <span class="wow fadeIn">INFRASTRUCTURE</span>
          <div class="aris">
            <p>Arena Banashankari comprises two campuses spread across 20,000 sq. ft. It is equipped with spacious
              classrooms, computer labs and auditoriums added with the latest technology. There are other facilities too
              consisting of an open-air theatre, basketball court, and green screen room. There are 2 auditoriums to
              host different events, industry workshops, and seminars. </p>

            <h2 class="wow fadeIn">FLAGSHIP ARENA ANIMATION COURSES</h2>
            <p>Trinity 3D, Animation VFX Prime, DAE Animation Film Making, VFX Pro, GWDD, 3D Digital Game Art and
              Design, etc. The students can take up these courses after completion of their 10th certification. </p>

            <span class="wow fadeIn">CURRICULUM</span>
            <p>The Curriculum of our <b>top animation institute in Bangalore</b> is updated as per the industry
              standards to make students acquainted with the latest tools and technologies. We use simulation and
              real-time project-oriented exercises to help them take on the animation world with vigor and passion. Our
              aim is to offer the students an education that emphasizes the fundaments so that they are the most
              preferred professionals in the industry.</p>
          </div>
        </div>
      </div>
    </div>
    <div id="partslidwrp">
      <div class="placewrp">
        <p class="placehed" style="text-align: center;">Arena Media Planet</p>
        <div class="row">
          <div class="well">
            <div id="myCarousel" class="carousel slide">
              <div class="carousel-inner">
                <div class="item active">
                  <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3"><a
                        href="https://www.skycodeitsolutions.com/arenabsk/world_aids_day.php" class="thumbnail"><img
                          class="img-responsive" src="images/arena_media_planet/aidsday.jpg" alt="Thumb11"
                          style="width:100%" loading="lazy"></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3"><a
                        href="https://www.skycodeitsolutions.com/arenabsk/arena_15th_year_anniversary.php"
                        class="thumbnail"><img class="img-responsive"
                          src="images/arena_media_planet/15_thyear_anniversary.jpg" alt="Thumb11" style="width:100%"
                          loading="lazy"></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3"><a
                        href="https://www.skycodeitsolutions.com/arenabsk/arena_fashion_show.php" class="thumbnail"><img
                          class="img-responsive" src="images/arena_media_planet/ARENA_FASHION_SHOW.jpg" alt="Thumb12"
                          style="width:100%" loading="lazy"></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3"><a
                        href="https://www.skycodeitsolutions.com/arenabsk/ganesh_festival.php" class="thumbnail"><img
                          class="img-responsive" src="images/arena_media_planet/ganesha_chaturthi.jpg" alt="Thumb13"
                          style="width:100%" loading="lazy"></a>
                    </div>

                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3"><a
                        href="https://www.skycodeitsolutions.com/arenabsk/christmas.php" class="thumbnail"><img
                          class="img-responsive" src="images/arena_media_planet/christmas.jpg" alt="Thumb11"
                          style="width:100%" loading="lazy"></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3"><a
                        href="https://www.skycodeitsolutions.com/arenabsk/cinematator_graphy_session.php"
                        class="thumbnail"><img class="img-responsive"
                          src="images/arena_media_planet/cinematography_class.jpg" alt="Thumb12" style="width:100%"
                          loading="lazy"></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3"><a
                        href="https://www.skycodeitsolutions.com/arenabsk/course_completion_ceritficate.php"
                        class="thumbnail"><img class="img-responsive"
                          src="images/arena_media_planet/COURSE_COMPLETION_CERTIFICATE.jpg" alt="Thumb13"
                          style="width:100%" loading="lazy"></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3"><a
                        href="https://www.skycodeitsolutions.com/arenabsk/gafx_events.php" class="thumbnail"><img
                          class="img-responsive" src="images/arena_media_planet/GAFX_EVENT.jpg" alt="Thumb14"
                          style="width:100%" loading="lazy"></a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3"><a
                        href="https://www.skycodeitsolutions.com/arenabsk/blood_donation.php" class="thumbnail"><img
                          class="img-responsive" src="images/arena_media_planet/blood_donation_camp.jpg" alt="Thumb11"
                          style="width:100%" loading="lazy"></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3"><a
                        href="https://www.skycodeitsolutions.com/arenabsk/holi.php" class="thumbnail"><img
                          class="img-responsive" src="images/arena_media_planet/holi.jpg" alt="Thumb12"
                          style="width:100%" loading="lazy"></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3"><a
                        href="https://www.skycodeitsolutions.com/arenabsk/kannada_rajyotsava.php" class="thumbnail"><img
                          class="img-responsive" src="images/arena_media_planet/kannada_rajyotsava.jpg" alt="Thumb13"
                          style="width:100%" loading="lazy"></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3"><a
                        href="https://www.skycodeitsolutions.com/arenabsk/cinematator_graphy_session.php"
                        class="thumbnail"><img class="img-responsive" src="images/arena_media_planet/P_D_SESSION.jpg"
                          alt="Thumb14" style="width:100%" loading="lazy"></a>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control " href="#myCarousel" data-slide="prev"><i
                    class="fa fa-arrow-circle-left fa-2x"></i></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i
                    class="fa fa-arrow-circle-right fa-2x "></i></a>
              </div><!-- End Carousel -->
            </div><!-- End Well -->
          </div>
        </div><!--placewrp ended here -->
      </div><!--partslidwrp id ended here -->
    </div><!--icons ended here -->


  </div><!--banwrp end here -->

  <div class="clearfix"></div>
  <?php include 'carousel.php' ?>

  <div class="clearfix"></div>

  <div id="partslidwrp">
    <div class="placewrp">
      <p class="placehed">PLACEMENT PARTNERS</p>
      <div class="row">
        <div class="well">
          <!-- Carousel
            ================================================== -->
          <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-md-3 col-sm-3 col-xs-3"><a href="#" class="thumbnail"><img class="img-responsive"
                        src="images/placement-logos/byjus-placement-logos.jpg" alt="Thumb11" style="width:100%"
                        loading="lazy"></a>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"><a href="#" class="thumbnail"><img class="img-responsive"
                        src="images/placement-logos/amazon-placement-logos.jpg" alt="Thumb12" style="width:100%"
                        loading="lazy"></a>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"><a href="#" class="thumbnail"><img class="img-responsive"
                        src="images/placement-logos/tataelxsi-placement-logos.jpg" alt="Thumb13" style="width:100%"
                        loading="lazy"></a>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"><a href="#" class="thumbnail"><img class="img-responsive"
                        src="images/placement-logos/terrabytes-placement-logos.jpg" alt="Thumb14" style="width:100%"
                        loading="lazy"></a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-3 col-sm-3 col-xs-3"><a href="#" class="thumbnail"><img class="img-responsive"
                        src="images/placement-logos/astrazeneca-placement-logos.jpg" alt="Thumb11" style="width:100%"
                        loading="lazy"></a>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"><a href="#" class="thumbnail"><img class="img-responsive"
                        src="images/placement-logos/igloolab-placement-logos.jpg" alt="Thumb12" style="width:100%"
                        loading="lazy"></a>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"><a href="#" class="thumbnail"><img class="img-responsive"
                        src="images/placement-logos/k12-placement-logos.jpg" alt="Thumb13" style="width:100%"
                        loading="lazy"></a>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"><a href="#" class="thumbnail"><img class="img-responsive"
                        src="images/placement-logos/myabhyas-placement-logos.jpg" alt="Thumb14" style="width:100%"
                        loading="lazy"></a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-3 col-sm-3 col-xs-3"><a href="#" class="thumbnail"><img class="img-responsive"
                        src="images/placement-logos/surge-placement-logos.jpg" alt="Thumb11" style="width:100%"
                        loading="lazy"></a>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"><a href="#" class="thumbnail"><img class="img-responsive"
                        src="images/placement-logos/technicolor-placement-logos.jpg" alt="Thumb12" style="width:100%"
                        loading="lazy"></a>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"><a href="#" class="thumbnail"><img class="img-responsive"
                        src="images/placement-logos/unifimedia-placement-logos.jpg" alt="Thumb13" style="width:100%"
                        loading="lazy"></a>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"><a href="#" class="thumbnail"><img class="img-responsive"
                        src="images/placement-logos/videogyan-placement-logos.jpg" alt="Thumb14" style="width:100%"
                        loading="lazy"></a>
                  </div>
                </div>
              </div>
              <a class="left carousel-control " href="#myCarousel" data-slide="prev"><i
                  class="fa fa-arrow-circle-left fa-2x"></i></a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next"><i
                  class="fa fa-arrow-circle-right fa-2x "></i></a>
            </div><!-- End Carousel -->
          </div><!-- End Well -->
        </div>
      </div><!--placewrp ended here -->
    </div><!--partslidwrp id ended here -->
  </div><!--icons ended here -->
  <?php include 'footer.php' ?>



  <!-- JAVASCRIPT START HERE -->
  <script src="js/jquery-latest.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- JAVASCRIPT END HERE -->

  <!--Carosuel start here -->

  <script>
    $('.carousel').carousel({
      interval: 3000
    })
  </script>

  <script type="text/javascript">
    $(document).ready(function () {
      $(".dropdown-toggle").dropdown();
    });
  </script>

  <!--Carosuel End here -->

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

  <!-- Testimonials content slider -->
  <script>
    $(document).ready(function () {
      //carousel options
      $('#quote-carousel').carousel({
        pause: true, interval: 10000,
      });
    });
  </script>
  <!-- Testimonials content slider ended here -->

  <script>
    $('#myCarousel').carousel({
      interval: 4000
    });
  </script>

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

  <script src="js/wow.js"></script>
  <script>
    new WOW().init();
  </script>

  <!-- onscroll animate -->

  <script type='text/javascript'>
    (function () { var p5 = document.createElement('script'); p5.type = 'text/javascript'; p5.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'src.plumb5.com/arenajayanagar-38.js'; var p5s = document.getElementsByTagName('script')[0]; p5s.parentNode.insertBefore(p5, p5s); })();
  </script>


  <!-- ChatCode -->
  <script src="js/chatbot.js">