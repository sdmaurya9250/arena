<?php 
if (isset($_POST['submit'])){
     $data = array(                             
               
    'name'   => $_POST['name'],
    'mobile'  => $_POST['mobile'],
    'email' => $_POST['email'],
    'query' => $_POST['query'],

               );
            
  $rest = $db->insertAry('apply_status',$data);
  if(!is_null($rest)){

    echo "Added Successfully";

    // unset($_POST);

    // redirect('index.php');

  }else{ 

    echo "insert failed!"; 

    redirect('index.php'); 

  }

} 
            
              
?>

<style>

.form-box {
    position:relative;
    top:-450px;
  max-width: 600px;
    float:left;
  padding: 0px;
  background: #ffffff;
  border: 5px solid #f2f2f2;
  /* height:100px; */
}

h1, p {
  text-align: center;
}

input, textarea {
  width: 95%;
}
</style>

<div class="form-box">
  <h1>Contact US</h1>
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
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea class="form-control" id="query" name="query"></textarea>
    </div>
    <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
    </div>
  </form>
</div>