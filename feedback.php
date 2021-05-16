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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

<!-- including navbar -->
<?php 

include "header.php";
?>
    <!-- including navbar -->
    <?php
    error_reporting(0);
    include "basic/navbar.php";
    include 'dbconnect.php';
    ?>


    <?php

    include 'dbconnect.php';
    if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST["submit"])) {
        //getting variable data from form by post method
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql="INSERT INTO `feedback` ( `name`, `email`, `feedback`, `time`) VALUES ('$name', '$email', '$message', current_timestamp());";


        if (mysqli_query($conn, $sql)) {
            echo ' <script>
    swal({
        title: "Thanks  ! ' . $name . '",
        text: "Your response has been recorded.",
        icon: "success",
  }).then(function() {
      window.location = "index.php";
  }); </script>';
        } else {
            echo "<h1>Somthing went wrong...not uploaded...</h1>";
        }
    } else {
        $alert = "Please fill in  all required fields ";
    }
    ?>


    <div class="jumbotron jumbotron-sm ">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 col-lg-12 ">
                    <h1 class="h1">
                        Feedback Form <small class="contact_bio"> share your experience </small></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container shadow-sm p-3 mb-5 bg-white rounded">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" />
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message</label>
                                    <textarea name="message" name="message" id="message" class="form-control" rows="6" cols="25" required="required" placeholder="Message..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" name="submit" class="btn btn-info my-4 btn-block" onclick="mobileValid()">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <!-- including footer -->
    <?php
    include "footer.php";
    ?>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>