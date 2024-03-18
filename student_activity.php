</br>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet" href="plugin/owl.carousel.min.css">
<link rel="stylesheet" href="plugin/owl.theme.green.min.css">
<script src="plugin/jquery-3.7.1.min.js"></script>
<script src="plugin/owl.carousel.min.js"></script>
<style>
@media only screen and (max-width: 2560px){
    .item-images{
        width:300px;
        height:250px;
        text-align:center !important;
    }
    .owl-carousel{
        padding:30px;
    }
}
@media only screen and (max-width: 1440px){
    .item-images{
        width:300px;
        height:250px;
        text-align:center !important;
    }
    .owl-carousel{
        padding:30px;
    }
}
@media only screen and (max-width: 1024px){
    .item-images{
        width:300px;
        height:250px;
        text-align:center !important;
    }
    .owl-carousel{
        padding:30px;
    }
}
@media only screen and (max-width: 768px){
    .item-images{
        width:100%;
        height:250px;
        text-align:center !important;
    }
    .owl-carousel{
        width:100% !important;
    }
    .item-images{
        width:100% !important;
    }
}
@media only screen and (max-width: 402px){

        .item-images{
            width:100%;
        }
    }
</style>
</head>
<body>
   <div class="container-fluid" style="background-color:#213057;">
   <!-- Set up your HTML -->
   <h1 style="color:white;">Student Activity</h1>
   <div class="owl-carousel owl-theme">
    
    <?php
       $index = 0;
      $datarest = $db->getRows("SELECT * from carousel_images  order by carousel_id ");
       foreach ($datarest as $res) { $carous_img =$res['carousel_img']; $url = $res['url'];?>
            
      <div class="item" style="text-align:center !important;">
      <a href="<?php echo $url ?>"><img class="item-images" src="<?php echo $carous_img ?>" alt=""></a>

    </div>
    <?php
            	
               $index++;
           };
           ?>
    
</div>
              
</div>

<script>
  var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[3000])
});
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
});
</script>
</body>



