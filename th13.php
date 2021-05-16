<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Coc Vs Study</title>
    <link rel="shortcut icon" type="image/jpg" href="image/queen1.png" />
    <link rel="stylesheet" href="css/style.css">
  
  </head>
  <body>

    <?php
   
    include 'header.php';
    include 'dbconnect.php';

    ?>
   

    <!--card container -->
    <div class="container my-3">
        <h2 class="text-center font-italic"> Th13 Bases </h2>
        <hr style="background: #000; height:1px; width:50% " class="my-4">
        
        <div class="p-4">
            <h5 class="font-italic ml-2 "> Click to Upload Your own Base. </h5>
            <a class=" btn btn-info btn-block font-weight-bold p-2 mt-3 mx-auto" href="baseHandle.php?th13id=true">Click
                to upload
            </a>

        </div>
        <hr>
        <p class="font-italic text-center font-weight-bold">* Here Your Uploaded Bases will be visible.*</p>
    </div>


    <div class="container  background" id="th13">
        <div class="row">
            <?php

            include 'dbconnect.php';
            // Turn off error reporting
            //  error_reporting(0);

            $sql = "SELECT * FROM `th13` ORDER BY imageId DESC";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
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
                      <div class="col-md-4  my-2 ">
                          <div class="card h-100 mx-auto" style="width: 18rem;">
                              <img src=' . $srcfile . ' class="card-img-top catimg" alt="...">
                              <div class="card-body">
                              <p class="card-text">Base 👉#' . $id . ' </p>
                                  <h5 class="card-title">' . $title . '</h5>
								  <p class="card-text">Discription ➡ ' . $desc . ' </p>
								  <p> Uploaded By▶ <b>' . $given_by . '</b></br>
								  <small>  ' . round($dateDiff) . ' days ago  </small> </p>
                                  
                                  <a href="' . $url . '" class="btn btn-success">Copy Base</a>
                              </div>
                          </div>
                      </div> 
                     ';
            }


            ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>