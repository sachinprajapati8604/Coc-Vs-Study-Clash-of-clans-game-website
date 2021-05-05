<html>

<head>
   <style>
body {

    color: #6610f2;
    text-align: center;
    
}
</style>
<title>Coc Vs Study</title>
    <link rel="shortcut icon" type="image/jpg" href="image/title.png" />
</head>

<body>

<!-- including navbar -->
<?php 
include 'starter.html';
include "header.php";
?>




<?php
// including function file of connection which is stored as Connection.php in same folder

include("dbconnect.php");
 
 // creating variable to get data
$name=$_POST['na'];
$email=$_POST['gm'];
$feed=$_POST['feedback'];


// $query= "INSERT INTO `feedback` VALUES ('$name','$email','$feed',current_timestamp())";
$query="INSERT INTO `feedback` ( `name`, `email`, `feedback`, `time`) VALUES ('$name', '$email', '$feed', current_timestamp());";

$data=mysqli_query($conn,$query);

if($data)
{
	echo '
	<div class="container  my-4 " style="min-height:60vh;">
		<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>Thank you ! *' .$name .'* </strong>Your Feedback has been submitted successfully.
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<a type="button" class="btn btn-success btn-lg" href="index.php">Home
	</a>
	</div>';
	//header("Location: /CocVsStudy/index.php");
	//exit();
                 
	
}
else
{
	echo '
	<div class="container  my-2 " style="min-height:60vh;">
	<h4 class="text-center" >Something went wrong !</h4>
    	<a type="button" class="btn btn-success btn-lg" href="index.php">Home
	</a>
	</div>';
}

?>




<!-- including footer -->
<?php
include "footer.php";
?>
</body>

</html>


