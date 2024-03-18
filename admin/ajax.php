<?php include('../config.php');

if(isset($_POST["action"])){ 
  $action=$_POST["action"];
  switch ($action) { 
    case "delete":{
        $rest = $db->delete($_POST['TableName'],"where apply_id='".$_POST['Id']."'");
        if($db->getAffectedRows() > 0){
          echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
        } else{
          echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
        }
      break;
    }
    case "vdelete":{
      $rest = $db->delete($_POST['Youtube_video'],"where video_id='".$_POST['Id']."'");
      if($db->getAffectedRows() > 0){
        echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
      } else{
        echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
      }
    break;
  }
  case "delete_status":{
      $rest = $db->delete($_POST['applystatus'],"where status_id='".$_POST['Id']."'");
      if($db->getAffectedRows() > 0){
        echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
      } else{
        echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
      }
    break;
  }
  case "Gallery_delete":{
      $rest = $db->delete($_POST['gallery_delete'],"where gallery_id='".$_POST['Id']."'");
      if($db->getAffectedRows() > 0){
        echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
      } else{
        echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
      }
    break;
  }
  case "DeletePdfConfirmation":{
      $rest = $db->delete($_POST['pdfdelete'],"where pdf_id='".$_POST['Id']."'");
      if($db->getAffectedRows() > 0){
        echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
      } else{
        echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
      }
    break;
  }
  case "testimonials_part_delete":{
    $rest = $db->delete($_POST['test_delete'],"where test_id='".$_POST['Id']."'");
    if($db->getAffectedRows() > 0){
      echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
    } else{
      echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
    }
  break;
}
  case "Carousel_delete":{
    $rest = $db->delete($_POST['carousel_delete'],"where carousel_id='".$_POST['Id']."'");
    if($db->getAffectedRows() > 0){
    echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
    } else{
    echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
    }
break;
} 

case "Graphics_delete":{
  $rest = $db->delete($_POST['graphics_delete'],"where graphics_id='".$_POST['Id']."'");
  if($db->getAffectedRows() > 0){
  echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
  } else{
  echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
  }
break;
} 
case "Design_delete":{
  $rest = $db->delete($_POST['design_delete'],"where design_id='".$_POST['Id']."'");
  if($db->getAffectedRows() > 0){
  echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
  } else{
  echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
  }
break;
} 
case "Sketches_delete":{
  $rest = $db->delete($_POST['sketches_delete'],"where sketches_id='".$_POST['Id']."'");
  if($db->getAffectedRows() > 0){
  echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
  } else{
  echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
  }
break;
} 

case "Students_Worksdelete":{
  $rest = $db->delete($_POST['students_worksdelete'],"where animations_id ='".$_POST['Id']."'");
  if($db->getAffectedRows() > 0){
  echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
  } else{
  echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
  }
break;
} 

case "Students_3Dworksdelete":{
  $rest = $db->delete($_POST['students_works_delete'],"where animations_id ='".$_POST['Id']."'");
  if($db->getAffectedRows() > 0){
  echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
  } else{
  echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
  }
break;
} 

case "VFX_delete":{
  $rest = $db->delete($_POST['vfx_delete'],"where vfx_id ='".$_POST['Id']."'");
  if($db->getAffectedRows() > 0){
  echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
  } else{
  echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
  }
break;
} 

case "Media_delete":{
  $rest = $db->delete($_POST['media_delete'],"where media_id ='".$_POST['Id']."'");
  if($db->getAffectedRows() > 0){
  echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
  } else{
  echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
  }
break;
}

case "Architechtural_delete":{
  $rest = $db->delete($_POST['architechtural_delete'],"where architechtural_id ='".$_POST['Id']."'");
  if($db->getAffectedRows() > 0){
  echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
  } else{
  echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
  }
break;
}

case "Gaming_delete":{
  $rest = $db->delete($_POST['gaming_delete'],"where game_id ='".$_POST['Id']."'");
  if($db->getAffectedRows() > 0){
  echo json_encode(array('validation'=>'1','message'=>'Record deleted successfully !'));
  } else{
  echo json_encode(array('validation'=>'0','message'=>'Action Failed ! Please try again.'));
  }
break;
}


        case "edit_apply":{
           $arrCategories = $db->getRows("SELECT * from apply_details where apply_id='".$_POST["id"]."'"); 
          foreach ($arrCategories as $value) { 

          ?>   
            <div class="row">
            <div class="col-md-4 mgt-20">
                  <label>First Name</label>
            <input type="text" name="fname" class="form-control" placeholder="First Name"  value="<?= $value["fname"]?>" >
            </div>
            <div class="col-md-4 mgt-20">
                  <label>Last Name</label>
            <input type="text" name="lname" class="form-control" placeholder="Last Name"  value="<?= $value["lname"]?>" >
            </div>
            <div class="col-md-4 mgt-20">
                <label for="branch">Course:</label>
                
                <select name="course" id="course" class="form-control js-data-example-ajax" style="width:100%;">
                <option><?php echo $value['course']; ?></option>
                <option value="1 Week Free Course">1 Week Free Course</option>
                <option value="Graphics & Web Design">Graphics & Web Design</option>
                <option value="Graphics, Web Design and Development">Graphics, Web Design and Development</option>
                <option value="UI/UX Design">UI/UX Design</option>
                <option value="AVG-Trinity 3D">AVG-Trinity 3D</option>
                <option value="DAE-Diploma in Animation Engineering">DAE-Diploma in Animation Engineering</option>
                <option value="Degree in VFx & Animation">Degree in VFx & Animation</option>
                <option value="Animation and VFx Prime">Animation and VFx Prime</option>
                <option value="VFx Pro-Compositing">VFx Pro-Compositing</option>
                <option value="Game Design">Game Design</option>
                <option value="Game Design and Development">Game Design and Development</option>
                <option value="Short Term Professional Course">Short Term Professional Course</option>

                
            
              
              </select>
            </div>
            <div class="col-md-4 mgt-20">
                  <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email"  value="<?= $value["email"]?>" >
            </div>
            <div class="col-md-4 mgt-20">
                  <label>Mobile</label>
            <input type="text" name="mobile" class="form-control" placeholder="Mobile"  value="<?= $value["mobile"]?>" >
            </div>
            <div class="col-md-4 mgt-20">
                  <label>DOB</label>
            <input type="text" name="dob" class="form-control" placeholder="DATE OF BRITH"  value="<?= $value["dob"]?>" >
            </div>
            <div class="col-md-4 mgt-20">
                  <label>City</label>
            <input type="text" name="city" class="form-control" placeholder="City"  value="<?= $value["city"]?>" >
            </div>
            
            <div class="col-md-4 mgt-20">
                  <label>Father Name</label>
            <input type="text" name="fathername" class="form-control" placeholder="Father Name"  value="<?= $value["fathername"]?>" >
            </div>
            <div class="col-md-4 mgt-20">
                  <label>Father Mobile</label>
            <input type="text" name="fmobile" class="form-control" placeholder="Father Mobile"  value="<?= $value["fmobile"]?>" >
            </div>
            <div class="col-md-4 mgt-20">
                  <label>Address</label>
              <textarea name="address" placeholder="Address" class="form-control" rows="1"><?= $value["address"]?></textarea>
            </div>
             <div class="col-md-4 mgt-20">
                  <label>PinCode</label>
            <input type="text" name="pincode" class="form-control" placeholder="PinCode"  value="<?= $value["pincode"]?>" >
            </div>
            <div class="col-md-4 mgt-20">
                  <label>Checklist1</label>
            <input type="text" name="checklist1" class="form-control" placeholder="Father Mobile"  value="<?= $value["check_list1"]?>" >
            </div>
            <div class="col-md-4 mgt-20">
                  <label>Checklist2</label>
            <input type="text" name="checklist2" class="form-control" placeholder="Father Mobile"  value="<?= $value["check_list2"]?>" >
            </div>
            <div class="col-md-4 mgt-20">
                  <label>Checklist3</label>
            <input type="text" name="checklist3" class="form-control" placeholder="Father Mobile"  value="<?= $value["check_list3"]?>" >
            </div>
            </div>
            <input type="text" name="tableid" value="<?= $value['apply_id'] ?>" id="tableid" class="form-control" hidden="" style="display: none;">
          
        <?php    }   
        break; 
      }

      case "edit_apply_status":{
            $Apply_Status = $db->getRows("SELECT * from apply_status where status_id='".$_POST["id"]."'"); 
           foreach ($Apply_Status as $value) { 
 
           ?>   
             <div class="row">
             <div class="col-md-4 mgt-20">
                   <label>Name</label>
             <input type="text" name="name" class="form-control" placeholder="Name"  value="<?= $value["name"]?>" >
             </div>
             <div class="col-md-4 mgt-20">
                   <label>Email</label>
             <input type="text" name="email" class="form-control" placeholder="Email"  value="<?= $value["email"]?>" >
             </div>
             <div class="col-md-4 mgt-20">
                   <label>Mobile</label>
             <input type="text" name="mobile" class="form-control" placeholder="Mobile"  value="<?= $value["mobile"]?>" >
             </div>
             <div class="col-md-4 mgt-20">
                   <label>Query</label>
             <textarea type="text" name="query" class="form-control" placeholder="Query"  value="<?= $value["query"]?>" ></textarea>
             </div>
             
             </div>
             <input type="text" name="table_id" value="<?= $value['status_id'] ?>" id="table_id" class="form-control" hidden="" style="display: none;">
           
         <?php    }   
         break; 
       }
       case "Testimonials_Edit":{
            $Test_Status = $db->getRows("SELECT * from testimonials where test_id='".$_POST["id"]."'"); 
           foreach ($Test_Status as $data) { 
            $icon = $data['test_img']; 
 
           ?>   
             <div class="row">
             <div class="col-md-6 mgt-20">
                   <label>Title</label>
             <input type="text" name="title" value="<?= $data['title'] ?>" class="form-control" placeholder="Title"  >
             </div>
             <div class="col-md-6 mgt-20">
                   <label>Status</label>
             <input type="text" name="test_status" value="<?= $data['test_status'] ?>" class="form-control" placeholder="Status"  >
             </div>
             
             <div class="col-md-12 mgt-20">
                  <span class="glyphicon glyphicon-folder-open">&nbsp;</span>
                  <label>Image<span class="redstar">*</span></label>
                  <?php $values=''; if(strpos($icon, "http") !== false){ $values= $icon; } else if($icon !=''){ $values= '../'.$icon; } ?>
                  <div style="margin: 10px 0"><img src='<?=$values?>' style='max-width: 100px;' /></div>
                  <input type="file" multiple="" name="image" placeholder="Icon" class="form-control">
            </div>
            <div class="col-md-12 mgt-20">
                   <label>Descriptions</label>
             <textarea type="text" name="descriptions" class="form-control" placeholder="Descriptions"  ><?=$data['descriptions']?></textarea>
             </div>
             
             
             </div>
             <input type="text" name="test_id" value="<?= $data['test_id'] ?>" id="test_id" class="form-control" hidden="" style="display: none;">
           
         <?php    }   
         break; 
       }
       case "GalleryEdit":{
            $Test_Status = $db->getRows("SELECT * from gallery where gallery_id='".$_POST["id"]."'"); 
           foreach ($Test_Status as $img_val) { 
            $img = $img_val['image']; 
 
           ?>   
             <div class="row">
             <div class="col-md-6 mgt-20">
                   <label>Title</label>
             <input type="text" name="gallery_name" value="<?= $img_val['gallery_name'] ?>" class="form-control" placeholder="Title"  >
             </div>
             
             
             <div class="col-md-12 mgt-20">
                  <span class="glyphicon glyphicon-folder-open">&nbsp;</span>
                  <label>Image<span class="redstar">*</span></label>
                  <?php $values=''; if(strpos($img, "http") !== false){ $values= $img; } else if($img !=''){ $values= '../'.$img; } ?>
                  <div style="margin: 10px 0"><img src='<?=$values?>' style='max-width: 100px;' /></div>
                  <input type="file" multiple="" name="image" placeholder="Icon" class="form-control">
            </div>
            
             
             
             </div>
             <input type="text" name="gallery_id" value="<?= $img_val['gallery_id'] ?>" id="gallery_id" class="form-control" hidden="" style="display: none;">
           
         <?php    }   
         break; 
       }
       case "GraphicsEdit":{
        $Test_Status = $db->getRows("SELECT * from students_works_graphics where graphics_id='".$_POST["id"]."'"); 
       foreach ($Test_Status as $img_val) { 
        $graphics_img = $img_val['graphics_file']; 

       ?>   
         <div class="row">
         <div class="col-md-6 mgt-20">
               <label>Title</label>
         <input type="text" name="graphics_name" value="<?= $img_val['graphics_name'] ?>" class="form-control" placeholder="Title"  >
         </div>
         
         
         <div class="col-md-12 mgt-20">
              <span class="glyphicon glyphicon-folder-open">&nbsp;</span>
              <label>Image<span class="redstar">*</span></label>
              <?php $graphics_values=''; if(strpos($graphics_img, "http") !== false){ $graphics_values= $graphics_img; } else if($graphics_img !=''){ $graphics_values= '../'.$graphics_img; } ?>
              <div style="margin: 10px 0"><img src='<?=$graphics_values?>' style='max-width: 100px;' /></div>
              <input type="file" multiple="" name="image[]" placeholder="Icon" class="form-control">
        </div>
        
         
         
         </div>
         <input type="text" name="graphics_id" value="<?= $img_val['graphics_id'] ?>" id="graphics_id" class="form-control" hidden="" style="display: none;">
       
     <?php    }   
     break; 
   }
   case "DesignEdit":{
    $Test_Status = $db->getRows("SELECT * from students_works_web_design where design_id='".$_POST["id"]."'"); 
   foreach ($Test_Status as $img_val) { 
    $design_img = $img_val['design_file']; 

   ?>   
     <div class="row">
     <div class="col-md-6 mgt-20">
           <label>Title</label>
     <input type="text" name="design_name" value="<?= $img_val['design_name'] ?>" class="form-control" placeholder="Title"  >
     </div>
     
     
     <div class="col-md-12 mgt-20">
          <span class="glyphicon glyphicon-folder-open">&nbsp;</span>
          <label>Image<span class="redstar">*</span></label>
          <?php $design_values=''; if(strpos($design_img, "http") !== false){ $design_values= $design_img; } else if($design_img !=''){ $design_values= '../'.$design_img; } ?>
          <div style="margin: 10px 0"><img src='<?=$design_values?>' style='max-width: 100px;' /></div>
          <input type="file" multiple="" name="image[]" placeholder="Icon" class="form-control">
    </div>
    
     
     
     </div>
     <input type="text" name="design_id" value="<?= $img_val['design_id'] ?>" id="design_id" class="form-control" hidden="" style="display: none;">
   
 <?php    }   
 break; 
}
case "SketchesEdit":{
  $Sketches_Status = $db->getRows("SELECT * from students_works_sketches where sketches_id='".$_POST["id"]."'"); 
 foreach ($Sketches_Status as $img_val) { 
  $sketches_img = $img_val['sketches_file']; 

 ?>   
   <div class="row">
   <div class="col-md-6 mgt-20">
         <label>Title</label>
   <input type="text" name="sketches_name" value="<?= $img_val['sketches_name'] ?>" class="form-control" placeholder="Title"  >
   </div>
   
   
   <div class="col-md-12 mgt-20">
        <span class="glyphicon glyphicon-folder-open">&nbsp;</span>
        <label>Image<span class="redstar">*</span></label>
        <?php $sketches_values=''; if(strpos($sketches_img, "http") !== false){ $sketches_values= $sketches_img; } else if($sketches_img !=''){ $sketches_values= '../'.$design_img; } ?>
        <div style="margin: 10px 0"><img src='<?=$sketches_values?>' style='max-width: 100px;' /></div>
        <input type="file" multiple="" name="image[]" placeholder="Icon" class="form-control">
  </div>
  
   
   
   </div>
   <input type="text" name="sketches_id" value="<?= $img_val['sketches_id'] ?>" id="sketches_id" class="form-control" hidden="" style="display: none;">
 
<?php    }   
break; 
}

 






  }
}