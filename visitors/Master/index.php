<?php
include('header.php');
?>
<!-- image carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
   <?php
   require_once('../../connection.php');
   $query_check = "SELECT * FROM tbl_sliderimage WHERE level_image=4 AND image_id=10";
   $result = $conn->query( $query_check );
   $data=$result->fetch_array();
   ?>
   <div class="item active"> <img src="../../cpanel/sliderImage/<?php echo $data['image_name']?>" alt="First slide"> </div>
   <?php
   $query_check = "SELECT * FROM tbl_sliderimage WHERE level_image=4 AND image_id=11";
   $result = $conn->query( $query_check );
   $data1=$result->fetch_array();
   ?>
   <div class="item"> <img src="../../cpanel/sliderImage/<?php echo $data1['image_name']?>" alt="Second slide"> </div>
   <?php
   $query_check = "SELECT * FROM tbl_sliderimage WHERE level_image=4 AND image_id=12";
   $result = $conn->query( $query_check );
   $data2=$result->fetch_array();
   ?>
   <div class="item"> <img src="../../cpanel/sliderImage/<?php echo $data2['image_name']?>" alt="Third slide"> </div>
 </div>
 <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
 href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right"> </span> </a> </div>
 <div class="about">
  <div class="container">
    <div class="row">
     <?php
     $query_check = "SELECT * FROM tbl_wlcmMsg WHERE msg_id=4";
     $result = $conn->query( $query_check );
     $data = $result->fetch_array();
     ?>
     <h2>Your Career Path Begins Here</h2>
     <p class="wow bounce"><?php echo $data['msg']?> </span></p>
     <a class="learn-more" href="about.php">Learn More...</a>
   </div>

 </div>
</div>
<div class="courses">
  <div class="container">
    <div class="row">
      <h1> Our Courses</h1>
      <div class="row">
        <div class="col-6 col-sm-3"></div>
        <?php
        $query_check = "SELECT * FROM tbl_masterFaculty";
        $result = $conn->query( $query_check );
        while($data = $result->fetch_array()){
          ?>
          <div class="col-6 col-sm-3 placeholder wow fadeInLeftBig">
            <div class="contain"> <a href="<?php echo $data['faculty']?>.php">
              <div class="circle-text">
                <div><?php echo $data['faculty']?></div>
              </div>
            </a> 
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>
</div>
<div class="index-content">
  <div class="container">
   <div class="row">
    <?php
    require_once('../../connection.php');
    $query_check = "SELECT * FROM tbl_news WHERE news_level=4";
    $result = $conn->query( $query_check );
    $data = $result->fetch_array();
    if (empty($data)){
      ?>
      <div class="col-lg-4 wow slideInLeft">
        <div class="card">

          <h4>No News Published.</h4>

        </div>
      </div>
      <?php
    }else{
      $query_check = "SELECT * FROM tbl_news WHERE news_level=4 LIMIT 3";
      $result = $conn->query( $query_check );
      while($data=$result->fetch_array()){
        ?>
        <div class="col-lg-4 wow slideInLeft">
          <a href="news.php">
            <div class="card">
              <img src="../../cpanel/newsImage/<?php echo $data['featured_image']?>">
              <h4><?php echo $data['news_heading']?></h4>
              <p><?php echo $data['news_content']?></p>
            </div>
          </a>

        </div>
        <?php
      }
    }

    ?>  
  </div>
  <div class="row">
   <a href="news.php"> <button type="button" class="btn btn-primary btn-lg">View More</button></a>
 </div>
</div>
</div>

<div class="opinion">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 text-center">
        <h1>Student Opinion</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="carousel slide" data-ride="carousel" id="quote-carousel"> 
          <!-- Bottom Carousel Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#quote-carousel" data-slide-to="1"></li>
            <li data-target="#quote-carousel" data-slide-to="2"></li>
          </ol>

          <!-- Carousel Slides / Quotes -->
          <div class="carousel-inner"> 

            <!-- Quote 1 -->
            <div class="item active">
              <blockquote>
                <div class="row">
                  <div class="col-sm-3 text-center"> <img class="img-circle" src="http://www.reactiongifs.com/r/overbite.gif" style="width: 100px;height:100px;"> 
                    <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">--> 
                  </div>
                  <div class="col-sm-9">
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                    <small>Someone famous</small> </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 2 -->
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-3 text-center"> <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg" style="width: 100px;height:100px;"> </div>
                    <div class="col-sm-9">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                      <small>Someone famous</small> </div>
                    </div>
                  </blockquote>
                </div>
                <!-- Quote 3 -->
                <div class="item">
                  <blockquote>
                    <div class="row">
                      <div class="col-sm-3 text-center"> <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;"> </div>
                      <div class="col-sm-9">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                        <small>Someone famous</small> </div>
                      </div>
                    </blockquote>
                  </div>
                </div>

                <!-- Carousel Buttons Next/Prev --> 
                <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a> <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="gallery">
           <div class="container">
            <?php
            require_once('../../connection.php');
            $query_check = "SELECT * FROM tbl_gallery WHERE image_in=4 LIMIT 3";
            $result = $conn->query( $query_check );
            $data = $result->fetch_array();
            if (empty($data)){
              ?>
              <div class="row">
               <div class="col-lg-4 col-sm-4 col-xs-6 wow slideInRight">No photo available</div>
             </div>
             <?php
           }else{
            ?>

            <div class="row">
             <?php
             $query_check = "SELECT * FROM tbl_gallery WHERE image_in=4 LIMIT 3";
             $result = $conn->query( $query_check );
             while($data=$result->fetch_array()){
              ?>
              <div class="col-lg-4 col-sm-4 col-xs-6 wow slideInRight"><a title="<?php echo $data['description']?>" href="#"><img class="thumbnail img-responsive" src="../../cpanel/gallery/<?php echo $data['image_name']?>"></a></div>

              <?php
            }
            ?>
            <div class="row">
             <a href="gallery.php"> <button type="button" class="btn btn-primary btn-lg">View More</button></a>
           </div>
         </div>
         <?php
       }
       ?>


     </div>
     <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal">×</button>
            <h3 class="modal-title">Heading</h3>
          </div>
          <div class="modal-body"> </div>
          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="enroll">
    <div class="container">
      <div class="row">
        <h2>Enroll Your Carrer With us</h2>
        <button class="btn btn-default" data-dismiss="modal">Apply Online</button>
      </div>
    </div>
  </div>
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.1142414019664!2d85.34216091454368!3d27.682863782802137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1992ab460d33%3A0x6210de13a55d9f97!2sTriton+Int&#39;l+College!5e0!3m2!1sen!2snp!4v1505144305829" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <?php
  include('footer.php');
  ?>