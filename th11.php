
<?php
include 'starter.html';
include 'header.php';
include 'dbconnect.php';

?>
 <style>
      #background{
	background-image:linear-gradient(to right,#bbba92, #653b2a);
	background-repeat: no-repeat; /*if you have full size image then use no-repeat*/
    background-position: center center top;
    background-size:cover;
	    -webkit-background-size: cover;
		-moz-background-size:cover;
		-o-background-size:cover;
}
        .catimg {  width: 100%;  height: 200px; 
        padding: 5px;
        } 
    </style>

<!--card container -->
<div class="container my-3" >
    <h2 class="text-center font-italic"> Th11 Bases </h2>
    <hr style="background: #000; height:1px; width:50%" class="my-4">

    <div class="p-4">
        <h5 class="font-italic ml-2"> Click to Upload Your own Base. </h5>
        <a class="btn btn-info btn-block font-weight-bold p-2 mt-3 mx-auto" href="baseHandle.php?th11id=true">Click to upload
        </a>

    </div>
    <hr>
    <p class="font-italic text-center font-weight-bold">* Here Your Uploaded Bases will be visible.*</p> </div>

    <div class="container" id="background">
                  <div class="row">
<?php

include 'dbconnect.php';
            // Turn off error reporting
            //  error_reporting(0);

                $sql="SELECT * FROM `th11` ORDER BY imageId DESC";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result)){
                  // echo $row['category_id'];
                  // echo $row['category_name'];
                  $id = $row['imageId'];
                  $title = $row['base_title'];
                  $desc = $row['base_desc'];
                  $url = $row['base_address'];
                  $given_by = $row['given_by'];
                  $imagetype = $row['imageType'];
                  $imagedata = $row['imageData'];
                  $image_name = $row['image_name'];
                  $time = strtotime($row['created']);   //this is a time from database
                  $TodayDate = strtotime(date('Y-m-d H:i:s'));  //Today date by date function
                  $dateDiff = ($TodayDate - $time) / 86400;      //taking date difference then converting into days by dividing 86400.
                  if ($image_name == "") {
                      $srcfile = 'data:image/jpeg;base64,' . base64_encode($row['imageData']);
                  } else {
                      $srcfile = "image/$image_name";
                  }
            
                  echo '
                      <div class="col-md-4  my-2">
                          <div class="card h-100 mx-auto" style="width: 18rem;">
                          <img src=' . $srcfile . ' class="card-img-top catimg" alt="...">
                              <div class="card-body">
                              <p class="card-text">Base 👉#'.$id.' </p>
                                  <h5 class="card-title">'.$title.'</h5>
								  <p class="card-text">Discription ➡ '.$desc.' </p>
								  <p> Uploaded By▶ <b>'.$given_by.'</b></br>
								  <small>  '.round($dateDiff).' days ago  </small> </p>
                                  
                                  <a href="'.$url.'" class="btn btn-success">Copy Base</a>
                              </div>
                          </div>
                      </div>
                      ';
                  
                
                }

                



?>
</div> </div>
<?php include 'footer.php'; ?>