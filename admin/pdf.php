<?php
include('../config.php');
if (isset($_SESSION['success']) && ($_SESSION['success'] != "")) {
    $stat['success'] = $_SESSION['success'];
    unset($_SESSION['success']);
}
if (isset($_SESSION['error']) && ($_SESSION['error'] != "")) {
    $stat['danger'] = $_SESSION['error'];
    unset($_SESSION['error']);
}




    
    if (isset($_POST['create'])) {
          // $pdf = $gallery["imagefiles"] = array();
          for ($i = 0; $i < count($_FILES['pdf_file']['name']); $i++) {
          $filename_img = '';
          if (isset($_FILES['pdf_file']['name'][$i])) {
              $fname_img = $_FILES['pdf_file']['name'][$i];
              $ext_img   = strtolower(substr($fname_img, strrpos($fname_img, '.') + 1));
              if ('pdf_file') {
                  $newfile_img = md5($_FILES['pdf_file']['tmp_name'][$i]) . "." . $ext_img;
                  if (move_uploaded_file($_FILES['pdf_file']['tmp_name'][$i], '../pdf' . '/' . 'uploads' . '/' . $newfile_img)) {
                      $filename_img = 'pdf' . '/' . 'uploads' . '/' . $newfile_img;
                      }
              } else {
                  $filename_img = "";
                  $stat["error"] = "Please Select valid file";
              }
          }
          
          for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
            $filename='';
            if (isset($_FILES['image']['name'][$i])) {   
              $fname = $_FILES['image']['name'][$i];
              $ext = strtolower(substr($fname, strrpos($fname, '.') + 1));
              if (in_array($ext, array('jpeg', 'jpg', 'gif', 'png','webp'))) {
                  $newfile = md5($_FILES['image']['tmp_name'][$i]) . "." . $ext;
                  if (move_uploaded_file($_FILES['image']['tmp_name'][$i], '../pdf/img/'.$newfile)){
                    $filename = 'pdf/img/'.$newfile;                
                  }
              } 
              else {
                  $filename = "";
                  $stat["error"] = "Please Select valid file";
              }
            }
          

         
    $pdf = array(
        
        'pdf_title' => $_POST['title'],
        'imagefiles' => $filename,
        'pdf_file' => $filename_img,
        
    );
    
    $rest       = $db->insertAry('download_brochure', $pdf);
    // $project_id = $db->getLastId();
  }
}
    if (!is_null($rest)) {
        echo "<script>alert('PDF Added successfully');</script>";
    } else {
        echo "<script>alert('PDF Insert Failed !');</script>";
    }
    unset($_POST);
    
    echo "<script>window.location.href=window.location.href;</script>";
}
        
?> 

<?php
include 'header.php';
?>
<head>
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.0.3/tinymce.min.js"></script>
  <script>
    tinyMCE.init({
      selector: 'textarea.tinymce',
      external_plugins: {
        'bootstrap4grid': 'https://www.spprealty.com/admin/tiny/plugins/TinyMCE5/bootstrap4grid/plugin.min.js'
      },
      height: 500,
      theme: 'silver',
      schema: 'html5',
      plugins: [
        'advlist autolink lists link image charmap print preview anchor autoresize',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount bootstrap4grid'
      ],
      toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat code visualblocks bootstrap4grid | help',
      content_css: [
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
      ],
    });
  </script>
</head>

<body >
   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm cascading-modal" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header light-blue darken-3 white-text">
            <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h4 class="title"><i class="fa fa-pencil-alt"></i> EDIT</h4>
        </div>
        <!--Body-->
        <div class="modal-body mb-0">
          <form action="" method="post" id="featuredCategory" enctype="multipart/form-data">
            <div id="divLoad"></div>
            <div class="text-center">
              <button type="submit" name="update" id="btnUpdateCatg"  class=" btn btn-success button-update mgt-20"><i class="fa fa-check" aria-hidden="true"></i> Update
              </button>
              <button type="button" data-dismiss="modal" class="btn btn-warning button-cancel mgt-20"><i class="fa fa-times"></i> Cancel</button>
            </div>
            <br/>
          </form>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- modal ends -->
<!--------------------->
  <div id="wrapper">

      <!-- Navigation -->
     <?php
include 'menu.php';
?>

      <!-- Page Content -->
      <div id="page-wrapper">
          <div class="container-fluid pdt-20">
                                
            <?php //alert
if (isset($stat) && $stat != "") {
    echo msg($stat);
}
?>
       <div class="row panel panel-default mgt-20"  >
          <div class="panel-heading">
            <h1 class="white-text page-heading text-center">Download Brochure</h1>
          </div>
          <div class="panel-body">
          <div class="ac_course_add">          
          <button id="ADD"  class="btn btn-info button-addnew pull-right" ><i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp;Add New &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i>
          </button>
          <br/><br/>
          </div> 
          <form  action="" method="post" enctype="multipart/form-data">
            <div id="content" class="panel panel-default" >
              <div class="panel-body">
            <div class="row">
                
                <div class="col-md-3 mgt-20">
                  <label>Title<span class="redstar">*</span></label>
                <input type="text" name="title" class="form-control" placeholder="Title"required="">
            </div>
                <div class="col-md-3 mgt-20">
                    <label>Upload PDF<span class="redstar"></span></label>
                    <input type="file" name="pdf_file[]" accept = "application/pdf,.csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                </div>
                <div class="col-md-4 mgt-20">
              <label>Banner Images<span class="redstar"></span></label>
              <input type="file" accept="image/png, image/jpeg, image/gif" name="image[]" id="imagefiles" multiple="" />

                </div>
              </div>
                                  
                            
              </div>
                <div class="col-md-3 text-right" style="padding-top: 35px">
                  <button class="btn btn-success" id="addnew" type="submit" name="create" ><i class="fa fa-check" aria-hidden="true"></i> Save</button>
                  <button type="reset" class="btn danger-gradient btn-warning"><i class="fa fa-times" aria-hidden="true"></i> Cancel</button>
                </div>
              </div>
              </div>
          </form>
          <div class="row">
            <div class="">
              <div class="panel-default">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-bordered table-striped table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th width="50px">S.No</th>
                          <th>Title</th>
                          <th>Image</th>
                           <th>PDF</th>
                           
                            
                        
                        
                       <!--    <th width="60px" class="text-center ac_projects_edit">Edit</th> -->
                          
                          <th width="60px" class="text-center ac_projects_delete">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$counter = 0;
$clients = $db->getRows("SELECT * from download_brochure order by pdf_id desc");
if (count($clients) > 0) {
    foreach ($clients as $data) {
        $id = $data["pdf_id"];
        
        $pdf_title  = $data["pdf_title"];
        $pdf_file = $data["pdf_file"];
        $image = $data["imagefiles"]; 
        $counter++;
?>
                             <tr class="odd gradeX">
                                <td><?php echo $counter;?> </td>
                                 <td><?php echo $pdf_title; ?> </td>
                                <?php $values=''; if(strpos($image, "http") !== false){ $values= $image; } else if($image !=''){ $values= '../'.$image; } ?>
                                 
                                 <td><img src='<?=$values?>' style='max-width: 100px;'/></td>
       <td><?php echo $pdf_file; ?></td>
                              
                       
                                
                                <td class="text-center ac_projects_delete">
                                <button type="button" id="pdfdelete" onclick="DeleteConfirmation(this,'download_brochure')" name="pdfdelete" value="<?php  echo $id ?>" class="btn btn-danger btn-circle"><i class="fa fa-times"></i>
                            </button>
                                </td>
                              </tr>

                              <?php
    }
}
?>
 
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- /#footer -->
    <?php
include 'footer.php';
?>
   <!-- /#ends -->


<script>
$(document).ready(function(){
    $("#ADD").click(function(){
        $("#content").toggle();
    });
    $('#dataTables-example').DataTable({
     responsive: true
    });
});
 $("#content").toggle();

 
  

 function DeleteConfirmation(e,tablename) {

var id = e.value;
// var tablename = 'attribute';
// call jquery confirm plugin
$.confirm({
  icon: 'fa fa-warning',
  title: 'Confirm!',
  content: 'Do you want to Delete ?',
  type: 'red',
  buttons: {
    confirm:  {
      btnClass: 'btn-red',
      action: function(){
        $.confirm({
          icon: 'fa fa-warning',
          title: 'Confirm!',
          content: 'If you Delete, You cant restore this record !',
          type: 'red',
          buttons: {
            Okay: {
              btnClass: 'btn-red',
              action: function(){
                $.ajax({
                  type: 'post',
                  url: 'ajax.php',
                  data: 'action=DeletePdfConfirmation&Id='+id+'&pdfdelete='+tablename,
                  dataType: "json",
                  success: function (data) {
                    if(data['validation'] == '1'){
                      $.confirm({
                        icon: 'fa fa-check',
                        title: '',
                        content: data['message'],
                        type: 'green',
                        autoClose: 'Okay|1000',
                        buttons: {
                          Okay: function () {
                            window.location.reload();
                          }
                        }
                      });
                    }
                    else{
                      $.alert(data['message']);
                    }
                  }
                });
              }
            },
            Cancel: function () { },
          }
        });
      }
    },
    cancel: function () { },
  }
});
}

</script>
<!-- <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
       <script type="text/javascript">
    var config = {
       extraPlugins: 'image2',
      filebrowserImageUploadUrl: 'upload.php',
      image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
      // image2_disableResizer: true,
    };


       CKEDITOR.replace('projects',config);
</script> -->
              
    
</body>

</html>