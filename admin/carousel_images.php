<?php include('../config.php');
  if (isset($_SESSION['success']) && ($_SESSION['success'] != "")) {
    $stat['success'] = $_SESSION['success'];
    unset($_SESSION['success']);
  }
  if (isset($_SESSION['error']) && ($_SESSION['error'] != "")) {
    $stat['danger'] = $_SESSION['error'];
    unset($_SESSION['error']);
  } 



  if (isset($_POST['submit'])) {

    for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
    $filename='';
    if (isset($_FILES['image']['name'][$i])) {   
      $fname = $_FILES['image']['name'][$i];
      $ext = strtolower(substr($fname, strrpos($fname, '.') + 1));
      if (in_array($ext, array('jpeg', 'jpg', 'gif', 'png','webp'))) {
          $newfile = md5($_FILES['image']['tmp_name'][$i]) . "." . $ext;
          if (move_uploaded_file($_FILES['image']['tmp_name'][$i], '../gallery/'.$newfile)){
            $filename = 'gallery/'.$newfile;                
          }
      } 
      else {
          $filename = "";
          $stat["error"] = "Please Select valid file";
      }
    

      $create = array(
 
                          'carousel_img' => $filename, 
                          'url' =>  $_POST["url"],
                          
                                                 
                         
                      );
      $rest = $db->insertAry('carousel_images',$create);
                    }
                  }
      // echo $db->getLastquery();
      // exit();
      if(!is_null($rest)){
        $_SESSION['success'] = "Added Successfully.";
        unset($_POST);
        echo "<script>alert('added successfully')</script>";
        echo "<script>window.location.href='carousel_images.php';</script>";
      }else{ 
        echo "<script>alert('Insert Failed !')</script>";
      }
  } 


//   Update

if (isset($_POST['update'])) {

    for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
    $filename='';
    if (isset($_FILES['image']['name'][$i])) {   
      $fname = $_FILES['image']['name'][$i];
      $ext = strtolower(substr($fname, strrpos($fname, '.') + 1));
      if (in_array($ext, array('jpeg', 'jpg', 'gif', 'png','webp'))) {
          $newfile = md5($_FILES['image']['tmp_name'][$i]) . "." . $ext;
          if (move_uploaded_file($_FILES['image']['tmp_name'][$i], '../gallery/'.$newfile)){
            $filename = 'gallery/'.$newfile;                
          }
      } 
      else {
          $filename = "";
          $stat["error"] = "Please Select valid file";
      }
    

      $create = array(
 
                          'test_img' => $filename, 
                          'title' =>  $_POST["title"],
                          'descriptions' =>  $_POST["descriptions"],
                                               
                         
                      );
    //   $rest = $db->insertAry('testimonials',$create);
      $rest = $db->updateAry("gallery", $create, "where gallery_id=".$_GET['gallery_id']);
                    }
                  }
      // echo $db->getLastquery();
      // exit();
      if(!is_null($rest)){
        $_SESSION['success'] = "Update Successfully.";
        unset($_POST);
        echo "<script>alert('Update successfully')</script>";
        echo "<script>window.location.href='carousel_images.php';</script>";
      }else{ 
        echo "<script>alert('Update Insert Failed !')</script>";
      }
  } 
?>
        
<head>
  <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
 

<?php include 'header.php'; ?>
</head>

<body >
   <!-- Modal -->
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md cascading-modal" role="document">
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
            <div id="divLoad"></div></br>
            <div class="text-center"></br>
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
<?php include 'menu.php';?>

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
      <h1 class="white-text page-heading">Carousel Image & URL</h1>
    </div>
    <div class="panel-body">
    <div class="ac_course_add">           
    <button id="ADD" class="btn btn-info button-addnew pull-right" ><i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp;Add New &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i>
    </button>
    <br/><br/>
    </div> 
  <form name="add_video" id="add_post_form" class="form-horizontal" enctype="multipart/form-data"  role="form" method="post">
    
    <div id="content" class="panel panel-default">
    <div class="panel-body" style="margin-top:0px;">
                      
                      
                      
          <div class="input-group">
          
          <div class="row">
             
             <div class="col-md-4 mgt-20">
                  <span class="glyphicon glyphicon-folder-open">&nbsp;</span>
                  <label>Image<span class="redstar">*</span></label>
                  <input type="file" multiple="" name="image[]" placeholder="Icon" class="form-control">
            </div>
            <div class="col-md-4 mgt-20">
                   <label>URL</label>
             <input type="text" name="url" class="form-control" placeholder="URL"  >
             </div>
                            
              </div>
             
             </div></br></br></br>
            
            <div class="col-md-12">
            <div class="card">
                <!-- <video class="video-card" src="<?//php echo $prod['videos']; ?>" controls width='320px' height='320px' ></video> -->
            </div>
    </div>
    
        
    <div class="col-md-12">
            <div class="top55 pull-right">
                      <button class="btn btn-primary" id="addnew" type="submit" name="submit" value="Upload" ><i class="fa fa-check" aria-hidden="true"></i>Submit</button>
                      <button class="btn btn-default">Cancel</button>
            </div>   
    </div>
    </div>
    </div>
    </div>

</form> </br>  
    <div class="row">
      <div class="">
        <div class="panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
              <table width="100%" class="table table-bordered table-striped table-hover" id="dataTables-example">
                <thead>
                  <tr>
                    <th width="50px">S.No</th>
                                      
                     
                    <th>Images</th> 
                    <th>URL</th>
                    
                                    
                    
                    <th width="60px" class="text-center ac_course_delete">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php


                        $counter = 0;
                        $courses = $db->getRows("SELECT * from carousel_images order by carousel_id desc ");
                        if( count($courses) > 0){
                          foreach($courses as $data){ 
                            $id = $data["carousel_id"];
                            $carousel_img = "../".$data["carousel_img"];
                            $url = $data["url"];
                           
                            // print_r($video);
                            $counter++;

                          

         ?>
                        <tr class="odd gradeX">
                          <td><?php echo $counter ?> </td>
                          
                          <td><img src='<?=$carousel_img?>' style='max-width: 100px;'/></td>
                          <td><?php echo $url ?></td>
                          
                                                                             
                          
                          
                          <td class="text-center ac_course_delete">
                            <button type="button" id="carousel_delete" onclick="DeleteConfirmation(this,'carousel_images')" name="carousel_delete" value="<?php  echo $id ?>" class="btn btn-danger btn-circle"><i class="fa fa-times"></i>
                            </button>
                          </td>
                        </tr>

                        <?php  } } ?>

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

















    
    
    <?php include 'footer.php'; ?>
    <!-- /#ends -->


<script>
// // draw the image
// var context = canvas.getContext('2d');
// context.fillRect(0, 0, w, h);
// context.drawImage(video, 0, 0, w, h);

// // set it as img
// var dataURL = canvas.toDataURL();
// document.getElementById('screenshot').src = dataURL;







$(document).on("click", ".GalleryEditStatus", function(event) {
		event.preventDefault();
		var value = $(this).attr('data-id');
		$.ajax({
				url: 'ajax.php',
				type: 'POST',
				data: 'action=GalleryEdit&id=' + value,
				dataType: 'html'
			})
			.done(function(data) {
				// console.log(data);  
				$('#divLoad').empty().append(data);
				$('select').select2();
			})

		$('#myModal').modal('show');
		return false;
	});










/*-----video----*/
document.getElementsByTagName('input')[0].addEventListener('change', function(event) {
  var file = event.target.files[0];
  var fileReader = new FileReader();
  if (file.type.match('image')) {
    fileReader.onload = function() {
      var img = document.createElement('img');
      img.src = fileReader.result;
      document.getElementsByTagName('div')[0].appendChild(img);
    };
    fileReader.readAsDataURL(file);
  } else {
    fileReader.onload = function() {
      var blob = new Blob([fileReader.result], {type: file.type});
      var url = URL.createObjectURL(blob);
      var video = document.createElement('video');
      var timeupdate = function() {
        if (snapImage()) {
          video.removeEventListener('timeupdate', timeupdate);
          video.pause();
        }
      };
      video.addEventListener('loadeddata', function() {
        if (snapImage()) {
          video.removeEventListener('timeupdate', timeupdate);
        }
      });
      var snapImage = function() {
        var canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
        var image = canvas.toDataURL();
        var success = image.length > 100000;
        if (success) {
          var img = document.createElement('img');
          img.src = image;
          document.getElementsByTagName('div')[0].appendChild(img);
          URL.revokeObjectURL(url);
        }
        return success;
      };
      video.addEventListener('timeupdate', timeupdate);
      video.preload = 'metadata';
      video.src = url;
      // Load video in Safari / IE11
      video.muted = true;
      video.playsInline = true;
      video.play();
    };
    fileReader.readAsArrayBuffer(file);
  }
});



/*-----video----*/
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
                    data: 'action=Carousel_delete&Id='+id+'&carousel_delete='+tablename,
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

</body>

</html>






