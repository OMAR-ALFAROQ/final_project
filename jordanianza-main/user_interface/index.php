<?php 
require 'template/header.php';
$navbarTrans = true;
require 'template/navbar.php';
// $pageTitle = "Home";
?>


<!--Carousel Wrapper-->
<div id="video-carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#video-carousel-example" data-slide-to="1"></li>
    <li data-target="#video-carousel-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <video class="video-fluid" autoplay loop muted>
        <source src="video_interface/mixkit-lens-focus-of-a-dslr-camera-2378.mp4" type="video/mp4"  />
      </video>
    </div>
    <div class="carousel-item">
      <video class="video-fluid" autoplay loop muted>
        <source src="video_interface/mixkit-woman-applying-mascara-in-her-eyes-367.mp4" type="video/mp4"  />
      </video>
    </div>
    <div class="carousel-item">
      <video class="video-fluid" autoplay loop muted>
        <source src="video_interface/mixkit-couple-of-men-working-with-design-software-3257.mp4" type="video/mp4" />
      </video>
    </div>
  </div>
 
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#video-carousel-example" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#video-carousel-example" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--Carousel Wrapper-->

<section class="pt-5 pb-5 ">
  <div class="container">
  <?php 
$result = mysqli_query($conn,"SELECT * FROM category ORDER BY 'ASC'");
while ($record = mysqli_fetch_assoc($result) ) {
  $cate_id = $record['id'];


  echo'  <div class="row">
    <div class=" col-sm-12 col-md-6 ">

    
            <h3 class="mb-3" id="L2">'.  $record['name']. '</h3>
        </div>

    <div class=" col-sm-12 col-md-6   col-lg-6  text-right">
        <a href="card-profilesubAdmin.php?showAll='.  $record['name'] .'"  class="btn btn-primary btn-show"><i class="far fa-eye"></i> Show All</a>
        </div>

        <div class="container">
        <div class="row align-middle">';

$r = mysqli_query($conn,"SELECT * FROM sub_admin WHERE cate_id = $cate_id ");
  while ($val = mysqli_fetch_assoc($r)) {
    
  
    echo '<div class="col-md-6 col-lg-4 column">
        <div class="card gr-1">
          <div class="txt">
            <h1>
 '.$val['username'].'</h1>
            <div>

            </div>
          </div>
          <a href="subAdmin_profile.php?id='.$val['id'].'">more</a>
          <div class="ico-card">
          <img src="'.$record['image'].'" class="img-fluid">
        </div>
        </div>
      </div>';
        }}?>

     </div>
     </div>
    </div>   
  </section>
                    

<?php require 'template/footer.php';?>