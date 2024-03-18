<?php 
if (isset($_POST['submit_status'])){
    
    
    
    
    $inputvalidation->addRule($_POST['name'],'alphanum','name', true, 3, false);
       
    $inputvalidation->addRule($_POST['mobile'],'num','mobile', true, 10, 10);
    $inputvalidation->addRule($_POST['email'],'mail','email', true, 3, false);
                       
      if($inputvalidation->validate()){
  $data = array(                             
               
    'name'   => $_POST['name'],
    'mobile'  => $_POST['mobile'],
    'email' => $_POST['email'],
    'query' => $_POST['query'],

               );

  $rest = $db->insertAry('apply_status',$data);

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
else {
  echo "<script>alert('".$inputvalidation->errors()."');</script>" ;
}
}

              
?>



<style>
    #box {
  padding:5px;
  width:397px;
  bottom:400px;
  position:relative; 
  float:right;
}
#box form {
 /* background:#006699; */
 padding:10px;
 /* display:none; */
 position:absolute;
 top:0px;
 margin-right:90px;
}



.apply_status_nav nav ul {
    list-style-type: none;
  display: flex;
  padding: 18px 0;
  background-size: 400% 400%;
  background-image: linear-gradient(-45deg, #ff5959, #ff4040, #ff0d6e, #ff8033,#d74177);
  animation: 12s myGradient infinite;
  border-radius: 40px;
  box-shadow: 1px 1px 1px #ff3352;
  border-top-left-radius: 0px;
  border-bottom-right-radius: 0px;
}
.active {
  transition: 1s;
}

.apply_status_nav nav ul li a {
  /* color: #fff; */
  text-decoration: none;
  padding: 45px 45px;
  font-family: verdana;
  font-weight: lighter;
  font-size: 24px;
  letter-spacing: 1px;
  opacity: 0.9;
}




@media only screen and (max-width: 792px){
    
    #box{
        
        
         display: none;
    }
   
}






    </style>

<div id="box">

   

    

    <form action="" method="post" id="form-search" style="background-color:#FC6C08;">
    <div class="form-group">
      <label for="name" style="color:white;">Name</label>
      <input class="form-control" id="name" type="text" name="name">
    </div>
    <div class="form-group">
      <label for="email" style="color:white;">Email</label>
      <input class="form-control" id="eMail" type="email" name="email">
    </div>
    <div class="form-group">
      <label for="mobile" style="color:white;">Mobile</label>
      <input class="form-control" id="mobile" type="Mobile" name="mobile">
    </div>
    <div class="form-group">
      <label for="message" style="color:white;">Message</label>
      <textarea class="form-control" id="query" name="query"></textarea>
    </div>
    <span class="err_lbl" id="err_lbl" style="color:red; "></span>
    <input class="btn btn-primary" name="submit_status" type="submit" value="Submit" />
    </div>
  </form>
</div>


<script>
    $('#form-search').submit(function(e) {
  $err_lbl= $(this).parent().find('.err_lbl');
  $err_lbl.html('');
  var name = $('#name').val();
  var eMail = $('#eMail').val();
  var mobile = $('#mobile').val();

  
if (name == "" ){

    e.preventDefault();

  $err_lbl.html("Please Fill Name");

else if(eMail == "" ){

e.preventDefault();

$err_lbl.html("Please Fill Email ID");

}
else if(mobile == "" ){

e.preventDefault();

$err_lbl.html("Please Fill Mobile Number");

}


});

</script>
