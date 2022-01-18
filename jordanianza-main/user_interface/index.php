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
        <source src="video_interface/production ID_4508061.mp4" type="video/mp4" style=" background-size: cover" />
      </video>
    </div>
    <div class="carousel-item">
      <video class="video-fluid" autoplay loop muted>
        <source src="video_interface/pexels-karolina-grabowska-7720775.mp4" type="video/mp4" tyle=" background-size: cover"  />
      </video>
    </div>
    <div class="carousel-item">
      <video class="video-fluid" autoplay loop muted>
        <source src="video_interface/video (2).mp4" type="video/mp4" />
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
    <div class="row">
    <div class=" col-sm-12 col-md-6 ">
      
            <h3 class="mb-3" id="<?php echo $_SESSION['Photographers']?>  "><?php echo $_SESSION['Photographers']?></h3>
        </div>
    <div class=" col-sm-12 col-md-6   col-lg-6  text-right">
        <a href="card-profilesubAdmin.php?name_category=<?php echo $_SESSION['Photographers']?>"  class="btn btn-primary btn-show"><i class="far fa-eye"></i> Show All</a>
        </div>
        <div class="container">
        <div class="row align-middle">
<?php
   $array = lastgetSubAdmin($conn,$_SESSION['Photographers']);
  if(isset($array)) {
   foreach($array as $val){

    echo'
    
      <div class="col-md-6 col-lg-4 column">
        <div class="card gr-1">
          <div class="txt">
            <h1>'.$_SESSION['Photographers'] .'</br>
 '.$val['username'].'</h1>
            <div>

            </div>
          </div>
          <a href="subAdmin_profile.php?id='.$val['id'].'">more</a>
          <div class="ico-card">
          <img src="https://cdn.naturettl.com/wp-content/uploads/2017/04/22013824/become-professional-wildlife-photographer-1200x675-cropped.jpg" class="img-fluid">
        </div>
        </div>
      </div>
      
 
      
 
';    } }?>
     </div>
     </div>
    </div>   
  </section>
                    
        
  
             

<section class="pt-5 pb-5  ">
  <div class="container">
    <div class="row">
    <div class=" col-sm-12 col-md-6 ">
            <h3 class="mb-3" id="<?php echo $_SESSION['Designers']?>"><?php echo $_SESSION['Designers']?></h3>
        </div>
    <div class=" col-sm-12 col-md-6   col-lg-6  text-right">
        <a href="card-profilesubAdmin.php?name_category=<?php echo $_SESSION['Designers']?>"  class="btn btn-primary btn-show"><i class="far fa-eye"></i> Show All</a>
        </div>
        <div class="container">
        <div class="row align-middle">
        <?php
 $array = lastgetSubAdmin($conn,$_SESSION['Designers']);
 if(isset($array)){
   foreach($array as $val){

    echo'
    
      <div class="col-md-6 col-lg-4 column">
        <div class="card gr-1">
          <div class="txt">
            <h1>'.$_SESSION['Designers'] .'</br>
 '.$val['username'].'</h1>
          </div>
          <a href="subAdmin_profile.php?id='.$val['id'].'">more</a>
          <div class="ico-card">
          <img src="https://www.freecodecamp.org/news/content/images/size/w2000/2021/09/emily-bernal-v9vII5gV8Lw-unsplash.jpg" class="img-fluid">
        </div>
        </div>
      </div>
      
 
      
 
';    }   }?>
        </div>
     </div>
    </div>
</div>
</section>


<section class="pt-5 pb-5  ">
  <div class="container">
    <div class="row">
    <div class=" col-sm-12 col-md-6 ">
            <h3 class="mb-3" id="<?php echo $_SESSION['Makeup Artists']?>"><?php echo $_SESSION['Makeup Artists']?></h3>
        </div>
    <div class=" col-sm-12 col-md-6   col-lg-6  text-right">
        <a href="card-profilesubAdmin.php?name_category=<?php echo $_SESSION['Makeup Artists']?>"  class="btn btn-primary btn-show"><i class="far fa-eye"></i> Show All</a>
        </div>
        <div class="container">
        <div class="row align-middle">
        <?php
   $array = lastgetSubAdmin($conn,$_SESSION['Makeup Artists']);
   if(isset($array)){
   foreach($array as $val){

    echo'
    
      <div class="col-md-6 col-lg-4 column">
        <div class="card gr-1">
          <div class="txt">
            <h1>'.$_SESSION['Makeup Artists'] .'</br>
 '.$val['username'].'</h1>
          </div>
          <a href="subAdmin_profile.php?id='.$val['id'].'">more</a>
          <div class="ico-card">
          
          <img src="https://media.istockphoto.com/photos/set-of-cosmetic-brushes-picture-id1316127257?b=1&k=20&m=1316127257&s=170667a&w=0&h=Hfj4df3EnWmbMpHh0zVIv7IEFWocvMONwsQD8EqagyA=">
        </div>
        </div>
      </div>
      
 
      
 
';  }  }?>
        </div>
     </div>
    </div>
</div>
</section>



<?php

require 'template/footer.php';

?>
