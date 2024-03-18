<?php include'config.php';?>
<div class="offset-lg-1 col-md-6">



<div class="video-part">
<div class="slide">
<div class="container-fluid">
<div class="carousel-header-section"></div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators" >
             <?php
       $index = 0;

          $res = $db->getRows("SELECT * from videos  order by video_id ");
        
       foreach ($res as $res1){ $img =$res1['video'];?>
    <li data-target="#demo" data-slide-to="<?=$index?>" class="active"></li>

        <?php
     $index++;
        }
        ?>
  </ul>
  <div class="carousel-inner">
  <div class="item active">                   
     <?php
       $index = 0;

      $res = $db->getRows("SELECT * from videos  order by video_id ");
       foreach ($res as $res1){ $img =$res1['video'];?>

                                    <div style="width:100% min-height:fit-content !important"; class="carousel-item  <?= ($index === 0 ? 'active' : '') ?>">
                                    <div class="video-part">   
									<iframe width="100%" height="315" src="<?php echo $img?>" alt="Chevrolet Impala" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
                                    </div>
                                                       <?php
            	
            $index++;
        }
        ?>
        <a class="left carousel-control " href="#myCarousel" data-slide="prev"><i class="fa fa-arrow-circle-left fa-2x"></i></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-arrow-circle-right fa-2x "></i></a>
            </div>
  </div>
  </div> </div>
  
</div>
 
</div>

</div>