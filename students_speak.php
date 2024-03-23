<?php include 'header.php' ?>
<?php include 'responsive.php' ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css"
  href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css" />
<script type="text/javascript"
  src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.bootstrap.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script>
  $(document).ready(function () {
    //Only needed for the filename of export files.
    //Normally set in the title tag of your page.
    document.title = 'DataTable Excel';
    // DataTable initialisation
    $('#example').DataTable(
      {
        "dom": '<"dt-buttons"Bf><"clear">lirtp',
        "paging": true,
        "autoWidth": true,
        "buttons": [
          {
            extend: 'excelHtml5',
            text: 'Excel',
            customize: function (xlsx) {
              var source = xlsx.xl['workbook.xml'].getElementsByTagName('sheet')[0];
              source.setAttribute('name', 'New Name');
            }
          }
        ]
      }
    );
  });

</script>

<style>
  /* @media only screen and (max-width:2064px){
  #maincontainerapp{
    margin-top:234px;
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


  #example_filter label {
    color: white;
    padding-left: 500px;

  }

  #example_filter label input {
    color: black;

  }

  #example_length label {
    color: white;
    padding-left: 572px;
  }

  #example_length label select {
    color: black;
    padding-left: 40px;

  }

  #example_info {
    color: white;
  }

  #example_previous {
    color: white !important;
  }

  #example_next {
    color: white !important;
  }

  #example_wrapper {
    padding: 20px;
  }
</style>
<div class="wow fadeInDown" id="mainwrp"><img class="img-responsive" src="images/placement_ban.jpg" alt="" /></div>
<?php include 'toogle.php' ?>
<div id="maincontainerapp">
  <div id="maincontappl">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInLeft"><a href="download.php"
          class="icon-banss downld-cont">Download Brochure</a></div>
      <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp"><a href="contactus.php" class="icon-bansclik clickto">Contact
          Us</a></div>
      <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInDown"><a href="placement.php"
          class="icon-bansplace placecont">Placement Partners</a></div>
      <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInRight"><a href="students-works.php"
          class="icon-bansstudwrk studwrks-cont">STUDENTS WORKS</a></div>
    </div><!--main-iconwrp ended here -->
    <h1 class="wow fadeInDownBig">STUDENTS SPEAKS</h1>
    <div class="col-md-12">
      <p class="colcunt wow fadeInLeft">Over a period of 23 years, Arena Animation Banashankari has trained more than
        11,500 students and placed them successfully, many have started as a fresher and reached a position where they
        come back and recruit more students from us. Hence, there are lots of success stories of students that can be
        shared, few of the samples are here.</p>
    </div>
    <div class="spacs-frm"></div>
  </div>
</div></br>
<div class="container" style="background-color:#213057;margin-top:300px;padding:100px;">
  <div class="table-responsive">
    <table id="example" class="table table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>S No</th>
          <th>Images</th>
          <th>Name of the student</th>
          <th>Company</th>
          <th>Designation</th>
          <th>Email ID</th>

        </tr>
      </thead>
      <tbody>
        <?php
        $counter = 0;
        $courses = $db->getRows("SELECT * from students_speaks order by speaks_id desc");
        if (count($courses) > 0) {
          foreach ($courses as $data) {
            $speaks_id = $data["speaks_id"];
            $speaks_name = $data["speaks_name"];
            $speaks_company = $data["speaks_company"];
            $speaks_designation = $data["speaks_designation"];
            $students_email = $data["students_email"];
            $imagefiles = $data["images"];
            // $verified = $data["verified"];  
            $counter++;

            ?>
            <tr>

              <td>
                <?php echo $speaks_id ?>
              </td>
              <td style="width:20%;"><img style="width:60%;height:20%;" src="<?php echo $imagefiles ?>" /></td>
              <td>
                <?php echo $speaks_name ?>
              </td>
              <td>
                <?php echo $speaks_company ?>
              </td>
              <td>
                <?php echo $speaks_designation ?>
              </td>
              <td>
                <?php echo $students_email ?>
              </td>

            </tr>
          <?php }
        } ?>
      </tbody>
    </table>
  </div>
</div></br>
<?php include 'footer.php' ?>