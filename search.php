<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Coc Vs Study</title>
    <link rel="shortcut icon" type="image/jpg" href="image/title.png" />
    <style>
 #background {
        background-image: radial-gradient( #cf5e17, #9c4236, #bbba92, #653b2a,#028ee3, #754500,#0b7fac, #6b4869,#fcb157, #183729);
        background-repeat: no-repeat;
        /*if you have full size image then use no-repeat*/
        background-position: center center top;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
    }

    </style>
</head>

<body>
    <?php include 'header.php';
    error_reporting(0);   ?>

    <div class="container my-3" >
        <?php
        $squery = $_GET['query'];
        echo '<h3 class="font-italic py-2 text-center"> Search results for "<mark class="bg-warning">' . $squery . '</mark>" </h3> <hr> ';
        ?>

        <div class="row" id="background">
            <?php
            include 'dbconnect.php';
            $squery = $_GET['query'];

            $noresult = true;

            $sql = " SELECT * FROM th13 WHERE (base_title = '$squery' OR base_desc = '$squery' OR base_address = '$squery' OR given_by = '$squery') UNION
        SELECT * FROM th12 WHERE (base_title = '$squery' OR base_desc = '$squery' OR base_address = '$squery' OR given_by = '$squery') UNION
        SELECT * FROM th11 WHERE (base_title = '$squery' OR base_desc = '$squery' OR base_address = '$squery' OR given_by = '$squery') UNION
        SELECT * FROM th10 WHERE (base_title = '$squery' OR base_desc = '$squery' OR base_address = '$squery' OR given_by = '$squery')  ORDER BY created DESC";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $noresult = false;
                $title = $row['base_title'];
                $desc = $row['base_desc'];
                $url = $row['base_address'];
                $base_by = $row['given_by'];
                   $creationdate=$row['created'];
                $time = strtotime($row['created']);   //this is a time from database
                $TodayDate = strtotime(date('Y-m-d H:i:s'));  //Today date by date function
                $dateDiff = ($TodayDate - $time) / 86400;      //taking date difference then converting into days by dividing 86400.
              
                echo ' <div class="card-deck my-2 col-md-4 mx-auto">
                <div class="card">
                <div class="simgdiv">     <img src="data:image/jpeg;base64,' . base64_encode($row['imageData']) . '" class="card-img-top img-thumbnail ," alt="..." style="height:220px;"> </div>
                  <div class="card-body">
                    <h5 class="card-title">' . $title . '</h5>
                    <p class="card-text"><strong> Base Discription :</strong>' . $desc . '</p>
                  </div>
                  <div class="card-footer bg-light">  <a href="' . $url . '" class="btn btn-success">Copy Base</a>
                   
                 <p class="mb-0 mt-2"> <h6>Posted By-' . $base_by . '</h6> <small>  ' . round($dateDiff) . ' days ago  </small></p><p class="text-right mt-0 mb-0 text-muted">on ' . $creationdate . '  </p>
            
                  </div>
                </div>
              </div> ';
            }

            if ($noresult) {
                echo '<div class="container mx-auto"  style="min-height:60vh; ">
            		<div class="jumbotron jumbotron-fluid " >
                    <div class="container">
                      <h5 class="text-xl-left">No Result, Word not matched. </h1> </br>
                      <p>Suggetions </p>
                      <ul >
                      <li>Please search with strong keyword related to this website</li>
                      <li>Search results find by base title ,base desc,base url,base uploaded by</li>
                      </ul>
                    </div>
            		</div >
                  </div>';
            }

            ?>
        </div>
    </div>
    <!--Search Result  -->






    <?php include 'footer.php'; ?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>