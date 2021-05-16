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
    <title>Coc Vs Study</title>
    <link rel="shortcut icon" type="image/jpg" href="image/queen1.png" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    include 'header.php';
    ?>

    <?php
    $showalert = false;

    $note = '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success! </strong>Your Base has been added succesfully .you can copy layout link at any time , please go back .
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
    //this is for th13
    if (isset($_GET['th13id']) && $_GET['th13id'] == "true") {
        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {

                require_once "dbconnect.php";

                $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
                $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

                //variable for storing the images in folder and database
                $filename = $_FILES["userImage"]["name"];
                $tempname = $_FILES["userImage"]["tmp_name"];
                $folder = "image/" . $filename;

                $yourname = $_POST['yourname'];
                $base_title = $_POST['title'];
                $base_desc = $_POST['desc'];
                $baseurl = $_POST['baseurl'];
                $sql = "INSERT INTO `th13` ( `imageType`, `image_name`,`given_by`, `base_title`, `base_desc`,`base_address`, `created`)
		    VALUES('{$imageProperties['mime']}', '{$filename}','$yourname','$base_title','$base_desc','$baseurl',current_timestamp())";
                $current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
                $showalert = true;

                // Now let's move the uploaded image into the folder: image 
                if (move_uploaded_file($tempname, $folder)) {
                    $msg = "Image uploaded successfully";
                } else {
                    $msg = "Failed to upload image";
                }

                if ($showalert) {

                    echo $note;
                    header("Location:localhost/th13.php?success=true");
                    exit();
                } else {
                    $showalert = "Somthing went wrong";
                }
            }
        }
    }
    // this is for Th14
    elseif (isset($_GET['th14id']) && $_GET['th14id'] == "true") {

        $showalert = false;
        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
                require_once "dbconnect.php";
                $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
                $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

                //variable for storing the images in folder and database
                $filename = $_FILES["userImage"]["name"];
                $tempname = $_FILES["userImage"]["tmp_name"];
                $folder = "image/" . $filename;

                $yourname = $_POST['yourname'];
                $base_title = $_POST['title'];
                $base_desc = $_POST['desc'];
                $baseurl = $_POST['baseurl'];

                $sql = "INSERT INTO `th14` ( `imageType`, `image_name`,`given_by`, `base_title`, `base_desc`,`base_address`, `created`)
            VALUES('{$imageProperties['mime']}', '{$filename}','$yourname','$base_title','$base_desc','$baseurl',current_timestamp())";
                $current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
                $showalert = true;

                // Now let's move the uploaded image into the folder: image 
                if (move_uploaded_file($tempname, $folder)) {
                    $msg = "Image uploaded successfully";
                } else {
                    $msg = "Failed to upload image";
                }

                if ($showalert) {

                    echo $note;
                    header("Location:localhost/th14.php?success=true");
                    exit();
                } else {
                    $showalert = "Somthing went wrong";
                }
            }
        }
    }


    // this is for th12
    elseif (isset($_GET['th12id']) && $_GET['th12id'] == "true") {

        $showalert = false;
        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
                require_once "dbconnect.php";
                $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
                $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

                //variable for storing the images in folder and database
                $filename = $_FILES["userImage"]["name"];
                $tempname = $_FILES["userImage"]["tmp_name"];
                $folder = "image/" . $filename;

                $yourname = $_POST['yourname'];
                $base_title = $_POST['title'];
                $base_desc = $_POST['desc'];
                $baseurl = $_POST['baseurl'];

                $sql = "INSERT INTO `th12` ( `imageType`, `image_name`,`given_by`, `base_title`, `base_desc`,`base_address`, `created`)
            VALUES('{$imageProperties['mime']}', '{$filename}','$yourname','$base_title','$base_desc','$baseurl',current_timestamp())";
                $current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
                $showalert = true;
                // Now let's move the uploaded image into the folder: image 
                if (move_uploaded_file($tempname, $folder)) {
                    $msg = "Image uploaded successfully";
                } else {
                    $msg = "Failed to upload image";
                }

                if ($showalert) {

                    echo $note;
                    header("Location:localhost/th12.php?success=true");
                    exit();
                } else {
                    $showalert = "Somthing went wrong";
                }
            }
        }
    }
    //this is for th11  
    elseif (isset($_GET['th11id']) && $_GET['th11id'] == "true") {


        $showalert = false;
        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
                require_once "dbconnect.php";
                $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
                $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

                //variable for storing the images in folder and database
                $filename = $_FILES["userImage"]["name"];
                $tempname = $_FILES["userImage"]["tmp_name"];
                $folder = "image/" . $filename;

                $yourname = $_POST['yourname'];
                $base_title = $_POST['title'];
                $base_desc = $_POST['desc'];
                $baseurl = $_POST['baseurl'];

                $sql = "INSERT INTO `th11` ( `imageType`, `image_name`,`given_by`, `base_title`, `base_desc`,`base_address`, `created`)
            VALUES('{$imageProperties['mime']}', '{$filename}','$yourname','$base_title','$base_desc','$baseurl',current_timestamp())";
                $current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
                $showalert = true;
                // Now let's move the uploaded image into the folder: image 
                if (move_uploaded_file($tempname, $folder)) {
                    $msg = "Image uploaded successfully";
                } else {
                    $msg = "Failed to upload image";
                }

                if ($showalert) {

                    echo $note;
                    header("Location:localhost/th11.php?success=true");
                    exit();
                } else {
                    $showalert = "Somthing went wrong";
                }
            }
        }
    } else {
        // this is for th10        
        if (isset($_GET['th10id']) && $_GET['th10id'] == "true") {


            $showalert = false;
            if (count($_FILES) > 0) {
                if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
                    require_once "dbconnect.php";
                    $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
                    $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

                    //variable for storing the images in folder and database
                    $filename = $_FILES["userImage"]["name"];
                    $tempname = $_FILES["userImage"]["tmp_name"];
                    $folder = "image/" . $filename;

                    $yourname = $_POST['yourname'];
                    $base_title = $_POST['title'];
                    $base_desc = $_POST['desc'];
                    $baseurl = $_POST['baseurl'];

                    $sql = "INSERT INTO `th10` ( `imageType`, `image_name`,`given_by`, `base_title`, `base_desc`,`base_address`, `created`)
            VALUES('{$imageProperties['mime']}', '{$filename}','$yourname','$base_title','$base_desc','$baseurl',current_timestamp())";
                    $current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
                    $showalert = true;
                    // Now let's move the uploaded image into the folder: image 
                    if (move_uploaded_file($tempname, $folder)) {
                        $msg = "Image uploaded successfully";
                    } else {
                        $msg = "Failed to upload image";
                    }

                    if ($showalert) {

                        echo $note;
                        header("Location:localhost/th10.php?success=true");
                        exit();
                    } else {
                        $showalert = "Somthing went wrong";
                    }
                }
            }
        }
    }

    ?>

    <div class="container my-4 shadow-sm p-4 ">
        <header class="head_of_basehandle ">
            <img class=" rounded mx-auto d-block" src="image/queen1.png" alt="" width="72" height="72">
            <h4 class="titlename text-center">Coc Vs Study</h4>
            <h5 class="h2 mb-3 text-center">Upload your base here</h5>
            <hr>
        </header>
        <form action="" class="my-2" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="yourname">Your name<sup class="font-weight-bold" style="color: red;">*</sup></label>
                <input type="text" class="form-control" id="yourname" name="yourname" aria-describedby="title" required />

            </div>
            <div class="form-group">
                <label for="title"> Base Title<sup class="font-weight-bold" style="color: red;">*</sup></label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="title" required />
                <small id="title" class="form-text text-muted">please use as short as possible.</small>
            </div>
            <div class="form-group">
                <label for="desc">Base Description<sup class="font-weight-bold" style="color: red;">*</sup></label>
                <input type="text" class="form-control" id="desc" name="desc" required />
            </div>
            <div class="form-group">
                <label for="baseurl">Enter base Layout link<sup class="font-weight-bold" style="color: red;">*</sup></label>
                <input type="text" class="form-control" id="baseurl" name="baseurl" aria-describedby="title" required />
                <small id="title" class="form-text text-muted">paste here your layout base link.</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload Base Image<sup class="font-weight-bold" style="color: red;">*</sup> <small class=" text-muted">(max size 2MB)</small></label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="userImage" required />
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>




    <?php include 'footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>