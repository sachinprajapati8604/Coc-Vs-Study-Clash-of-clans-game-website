<?php
include 'starter.html';
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
                header("Location: http://cocvsstudy.epizy.com/th13.php?success=true");
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
                header("Location: http://cocvsstudy.epizy.com/th14.php?success=true");
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
                header("Location: http://cocvsstudy.epizy.com/th12.php?success=true");
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
                header("Location: http://cocvsstudy.epizy.com/th11.php?success=true");
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
                    header("Location: http://cocvsstudy.epizy.com/th10.php?success=true");
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
    <form action="" method="post" enctype="multipart/form-data">
        <img class="mb-4 rounded mx-auto d-block" src="image/title.png" alt="" width="72" height="72">
        <h5 class="h3 mb-3 font-weight-normal text-center">Upload your base here</h5>
        <hr>
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