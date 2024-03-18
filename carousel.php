
<script src="https://www.juniper.net/assets/js/jquery/1.4/jquery-1.4.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<style>


.msg-icn {
  display: inline-block;
  position: relative;
  padding:  10px 20px;
  color: #fff;
  box-sizing: border-box;
  max-width: 300px;
  min-width: 80px;
  min-height: 38px;
}
.msg-icn:before {
  content: "";
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  border: 4px solid #e5a002;
  border-radius: 4px;
  box-sizing: border-box;
  clip-path: polygon(0% 105%, 0% 0%, 105% 0%, 105% 105%, 43px 105%, 43px 80%, 21px 80%, 21px 105%);
}
.msg-icn:after {
  content: "";
  position: absolute;
  display: block;
  width: 35px;
  height: 20px;
  background: #e5a002;
  top: calc(100% - 3px);
  left: 17px;
  box-sizing: border-box;
  clip-path: polygon(0 0, 0% 100%, 100% 0%, calc(100% - 4px) 0, 4px calc(100% - 4px), 4px 0);
}


/* === BASE HEADING === */ 

.video_test h1 {
  position: relative;
  padding: 0;
  margin: 0;
  font-family: "Raleway", sans-serif;
  font-weight: 300;
  font-size: 40px;
  color: #080808;
  -webkit-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}

.video_test h1 span {
  display: block;
  font-size: 0.5em;
  line-height: 1.3;
}
.video_test h1 em {
  font-style: normal;
  font-weight: 600;
}

/* === HEADING STYLE #1 === */
.video_test h1 {
  text-align: center;
  text-transform: uppercase;
  padding-bottom: 5px;
}
.video_test h1:before {
  width: 28px;
  height: 5px;
  display: block;
  content: "";
  position: absolute;
  bottom: 3px;
  left: 50%;
  margin-left: -14px;
  background-color: #b80000;
}
.video_test h1:after {
  width: 100px;
  height: 1px;
  display: block;
  content: "";
  position: relative;
  margin-top: 15px;
  left: 50%;
  margin-left: -50px;
  background-color: #b80000;
}


/* 
input {
    opacity: 0;
    position: absolute;
    pointer-events: none;
  }
  
  p {
    --fz: 14px;
    --lh: 1.5;
    --max-lines: 3;
    font-size: var(--fz);
    line-height: var(--lh);
    -webkit-line-clamp: var(--max-lines);
    max-height: calc(var(--fz) * var(--lh) * var(--max-lines));
    display: -webkit-box;
    -webkit-box-orient: vertical;  
    overflow: hidden;
    white-space: pre-wrap;
		word-wrap: break-word;
    transition: max-height .5s ease;
  }
  
  input:checked + p {
    -webkit-line-clamp: unset;
    max-height: 330px;
  }
  
  input:checked ~ .button{
    opacity: 0;
    visibility: hidden;
    max-height: 0;
  }
  
  .button {
    display: block;
    border-radius: 25px;
    padding: 7px 25px;
    width: 150px;
    text-align: center;
    background-color: rgb(29, 161, 242);
    color: #fff;
    text-transform: uppercase;
    font-size: 0.8em;
    cursor: pointer;
    user-select: none;
    margin: 0 auto;
    overflow: hidden;
    max-height: 35px;
    transition: max-height .5s ease, opacity .5s ease, visibility .5s .5s
  } */

 




  body{
  position: relative
  overflow-x: hidden
  line-height: 1.5
  background: #f4f4f4
  color: #111
  font-size: 14px
  text-align: center
  display: flex
  align-items: center
  justify-content: center
  flex-direction: column
  width: 100%
  }

  
.container{
  display: table-cell
  vertical-align: middle
  margin: 0 auto
}
button
{
  box-shadow: none
  border: none
  outline: none
  cursor: pointer
  background: #ddd
  padding: 10px
  font-weight: 700
  margin-top: 20px
  &:hover
    background: darken(#ddd,5%)
}
.hidden-text
{
  width: 80%
  margin: 0 auto
  margin-top: 20px
  overflow: hidden
  font-size: 20px

}

.morecontent span {
    display: none;
}
.morelink {
    display: block;
}
/* Rating */
@media only screen and (max-width: 425px){
    .media{
        width:100% !important;
        line-height:15px; 
}
h1{
    line-height:50px;
}
.ytp-cued-thumbnail-overlay{
    width:none !important;
}
.ytp-cued-thumbnail-overlay-image{
    width:none !important;
}
.testrating{
    margin-top:-20px;
    font-size:0.5px;
    float:left;
}
}
</style>

</br>

<!-- Video Carousel -->
<div class="container-fluid" style="background-color:#213057;">
<div class="container">
<div class="col-md-12">
   <div class="row">
      <div class="col-md-6 media"style="margin-top:35px;">

      <div class="video_test one card">
      <h1 style="color:white;">Video Testimonial</h1>
</div>
         
<div class="card" style="width: 100%; border-radius: 2em;box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);text-align: center;height:450px;background-color:#fc6c08;">
<div id="carousel-example-generic" data-ride="carousel" class="carousel slide">
<!-- Bottom Carousel Indicators -->
<ul class="carousel-indicators">
<?php
       $index = 0;

          $res = $db->getRows("SELECT * from videos  order by video_id ");
        
       foreach ($res as $res1){ $img =$res1['video']; $title = $res1['video_title'];?>
    <li data-target="#carousel-example-generic" data-slide-to="<?=$index?>" class="active"></li>

        <?php
     $index++;
        }
        ?>
</ul>

<!-- Carousel Slides / Quotes -->
<div class="carousel-inner" id="carousel_model_video" role="listbox">
<!-- Quote 1 -->

  
    
    <?php
       $index = 0;

      $res = $db->getRows("SELECT * from videos  order by video_id ");
       foreach ($res as $res1){ $img =$res1['video']; $title = $res1['video_title'];?>
            
                                    <div target="blank" class="item <?= ($index === 0 ? 'active' : '') ?>" loading="lazy">
                                    <div class="videotitle" style="text-transform:uppercase;font-size:24px;padding:22px;"><?php echo $title ?></div>  
                                    <div class="videopart"><?php echo $img?></div> 
									         
									
                                   
       </div>
                                                       <?php
            	
            $index++;
        }
        ?>


</div>

</div>

  
  
  <!--carousel-inner ended here -->
</div><!--carousel ended here -->
</div>





















<!-- Image Carouel -->
<div class="col-md-6 media">
      </br>
<div class="video_test one card">
      <h1 style="color:white;">Testimonial</h1>
</div>
<div class="card" style="width: 100%; border-radius: 2em;box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);height:450px;background-color:fc6c08;">

<div id="carousel-example-generic" data-ride="carousel" class="carousel slide">
<!-- Bottom Carousel Indicators -->
<ul class="carousel-indicators">
<?php
       $index = 0;

          $res = $db->getRows("SELECT * from testimonials  order by test_id ");
        
       foreach ($res as $result){ $test_title =$result['title']; $description = $result['descriptions']; $img = $result["test_img"]; $status = $result['test_status'];?>
    <li style="position :relative;top:50px;" data-target="#carousel-example-generic" data-slide-to="<?=$index?>" class="active"></li>

        <?php
     $index++;
        }
        ?>
</ul>

<!-- Carousel Slides / Quotes -->
<div class="carousel-inner" id="carousel_model_video" role="listbox">
<!-- Quote 1 -->

  
    
    <?php
       $index = 0;

      $res = $db->getRows("SELECT * from testimonials  order by test_id ");
       foreach ($res as $result){ $test_title =$result['title']; $description = $result['descriptions']; $img = $result["test_img"]; $status = $result['test_status'];?>
            
           
                                    <div target="blank" class="item <?= ($index === 0 ? 'active' : '') ?>" loading="lazy">
                                      

<!-- Container -->

                                  
                                     
                                      
                                        <div class="image-card" style="text-align:center;padding:20px;">
                                        <img style="border-radius: 50%; width:150px; height:150px;position:relative;background-color: white;border: 8px solid #fc6c08;padding: 3px;background-color: white;" src="<?php echo $img ?>" alt="">
                                        
                                        
                                        <div class="content-card" style="background-color:white;border-radius: 2em;box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);padding:20px;margin-top:-80px;height:280px;">
                                        
            <div class="box" style="margin-top:82px;">
  
            <div class="spoiler">
            
  
            <p style="margin-top: 3px;" class="more"><?php echo $description ?><a style="color:#fc6c08 !important; background-color:#fc6c08;" href="https://www.juniper.net/support/requesting-support.html"></a></p>
          
 </div>
</div>
                                        <section class="info" style="float:left;">
                                        <h3 class='person'><?php echo $test_title ?></h3>
                                        <label><?php echo $status ?></label>
                                        
                                        </section>
                                        <img class="testrating" src="images/rate/rating.jpg" style="width:80px;float:right;margin-right:50px;">
                                        </div>
                                      </div>
                                    
                                  
            <!-- Container -->
                        
                                    
									         
                                    
                                   
       </div>
                                                       <?php
            	
            $index++;
        }
        ?>


</div>

</div>
      
  
  
  <!--carousel-inner ended here -->
</div><!--carousel ended here -->
</div>
<p>&nbsp;END</p>
</div>
</div>
</div>
      </div>

<script>
   $(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 120;  // How many characters are shown by default
    var ellipsestext = "";
    var moretext = "Read More";
    var lesstext = "Read Less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});

  </script>