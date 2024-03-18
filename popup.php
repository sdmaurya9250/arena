
<!-- <link rel="stylesheet" media="mediatype and|not|only (expressions)" href="print.css"> -->




<?php 
if (isset($_POST['create'])){
    
    
    
    
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
    echo "<script>alert('Added Successfully.')</script>";

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
  /* @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap'); */

  @media screen and (max-width: 320px) {

  #modal_start_section {
 
  width:100% !important;
  
}
}
@media screen and (max-width: 516px) {

#modal_start_section {

width:100% !important;

}
}
@media screen and (max-width: 768px) {

#modal_start_section {

width:70% !important;

}
}


@media screen and (max-width: 1024px) {
  .modal__left {
    padding:0px 0px;
  }
  #modal_start_section {

width:90% !important;

}
}



#modal_start_section {
  position: fixed;
  
  top: 50%;
  left: 50%;
  width:35%;
  height:388px;
  transform: translate(-50%, calc(-50% - 10px));
  display: flex;
  /* min-width: 100px; */
  font-family: 'Roboto', sans-serif;
  background-color: #fefefe;
  border-radius: 12px;
  box-shadow: 0 5px 26px -8px rgba(0, 0, 0, 0.3);
  
  transition: all 0.4s ease;
  opacity: 0;
  pointer-events: none;
}
#modal_start_section.active {
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%);
}
.modal__overlay {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
  pointer-events: none;
  transition: all 0.4s ease;
  opacity: 0;
}
.modal__overlay.active {
  opacity: 1;
}
.modal__close-btn {
  position: absolute;
  top: 5px;
  right: 4px;
  font-size: 18px;
  cursor: pointer;
  padding: 2px;
}
.modal__close-btn i :hover{
background-color: #fc6c08 !important;
color:#213057 !important;
}
.modal__left {
  width:40%;
  text-align: center;
  font-size: 8px;
  text-transform: uppercase;
  background-color: #fc6c08 !important;
  color: white !important;
  border-radius: 12px;
  box-shadow: 1px 0 1px 1px rgba(0, 0, 0, 0.3);
  padding: 10px 10px;
}
.modal__left span {
  display: block;
  font-size: 20px;
}
.modal__discount {
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 3px;
  color: #ebff00;
  margin-top: 32px;
}
.modal__discount span {
  font-size: 20px;
}
.modal__right {
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 32px;
  /* padding-top:5px; */
  width:100%;
}
.modal__text {
  font-size: 24px;
  font-weight: 700;
  text-transform: uppercase;
  margin-bottom: 22px;
}
.modal__info {
  color: #222;
  margin-bottom: 12px;
}
.modal__button {
  align-self: flex-start;
  font-size: 18px;
  font-weight: 700;
  text-transform: uppercase;
  text-decoration: none;
  background-color: #ff5555;
  border-radius: 12px;
  padding: 10px 32px;
  cursor: pointer;
}

.close_btn {
  position: absolute;
  right: 32px;
  top: 0px;
  opacity: 0.3;
}
.close_btn:hover {
  opacity: 1;
}
.close_btn:before, .close_btn:after {
  position: absolute;
  left: 15px;
  content: ' ';
  height: 20px;
  width: 4px;
  background-color: #333;
}
.close_btn:before {
  transform: rotate(45deg);
}
.close_btn:after {
  transform: rotate(-45deg);
}

</style>

<!-- Created based on Youtube [Live Blogger](https://www.youtube.com/@LiveBlogger) -->
 <!-- font-awesome-->
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    /> -->
<!---->
<div class="modal__overlay"></div>
    <div class="modal" id="modal_start_section">
      <div class="modal__close-btn">
      <i class="close_btn" onclick="window.close();"></i>
      <!-- <button type="button" onclick="tsw_open_demo_window();">Open demo in a new window/tab</button> -->
      <!-- <button type="button"  ></button> -->
  
      <!-- <i class="fa-solid fa-xmark"></i> -->
        
      </div>
      <div class="modal__left">
</br>
        <img src="images/logo-img1.png" alt="logo" style="width:150px;">
        <h1 style="color:#213057;">Arena<span style="color:#213057;">Banashankari</span></h1>
        <!-- <div class="modal__discount">
          <p><span>Welcome</span></p>
        </div> -->  
      </div>
      <div class="modal__right">
<form action="" method="post" id="form-search">
  <div class="">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input type="name" class="form-control" name="name" id="exampleInputName1" aria-describedby="NameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputMobile1" class="form-label">Mobile Number</label>
    <input type="mobile" class="form-control" name="mobile" id="exampleInputMobile1">
  </div>
  <div class="mb-3">
    <label for="exampleInputQuery1" class="form-label">Query</label>
    <textarea type="text" class="form-control" name="query" id="exampleInputQuery1"></textarea>
  </div>
  <span class="err_lbl" id="err_lbl" style="color:red; "></span>
  <button style="float:right;" type="submit" name="create" class="btn btn-primary">Submit</button>
</form>
      </div>
    </div>

    <script type="text/javascript">
      const modal = document.querySelector('.modal');
const modalOverlay = document.querySelector('.modal__overlay');
const closeBtn = document.querySelector('.modal__close-btn');
const discountBtn = document.querySelector('.modal__button');
// ---- ---- cookies ---- ---- //
const createCookie = () => {
  let maxAge = ';max-age=10';
  let path = ';path=/';
  document.cookie = 'modalpopup=displayed' + maxAge + path;
};

// ---- ---- add active and cookie ---- ---- //
const displayModal = () => {
  if (document.cookie.indexOf('modalpopup') == -1) {
    modal.classList.add('active');
    modalOverlay.classList.add('active');
    createCookie();
  }
};

setTimeout(() => {
  displayModal();
}, 1000);

// ---- ---- remove active ---- ---- //
closeBtn.addEventListener('click', () => {
  modal.classList.remove('active');
  modalOverlay.classList.remove('active');
});
discountBtn.addEventListener('click', () => {
  modal.classList.remove('active');
  modalOverlay.classList.remove('active');
});

    </script>
    


    <script>
      function tsw_open_demo_window()
{
  window.open( "https://www.thesitewizard.com/javascripts/close-browser-tab-or-window.shtml#demo" );
}

    </script>
    
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
