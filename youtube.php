<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    </style>
    <title>Coc Vs Study</title>
    <link rel="shortcut icon" type="image/jpg" href="image/title.png" />
</head>

<body>


    <?php
include 'starter.html';
include 'header.php';
?>

    <div class="container my-2 card border-success " >
        <div class="row">
            <div class="  col-md-6">
                <img class="card-img-top mx-auto  img-thumbnail" src="image/yt.png"  alt="Card image cap">
            </div>
            <div class="col-md-6 ">
                <div class="card-body m-2 p-2 ">
                    <h5 class="card-title">Coc Vs Study </h5>
                    <p class="card-text "> Welcome to Coc Vs Study official channel. </br>
This Youtube channel is about only for coc vs study clans video. </br>
Please Hit Likes | comments | Subscribe .
Thank you</br>

Clan tag ► #208LG9J82</p>
                    <a href="https://www.youtube.com/channel/UCVw4dR-OKfFsUxrwk8KWmeA" class="btn btn-danger">SUBSCRIBE</a>
                </div>
            
        </div>
    </div>
    </div>
</hr>
    <div class="container my-4 ">
        <h2 class="text-center font-italic "> YouTube Videos </h2>
        <hr>
    </div>

    <?php
include 'dbconnect.php';
                    
            $sql="SELECT * FROM `youtube` ORDER BY yt_id DESC";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
            $id=$row['yt_id'];
            $title=$row['yt_title'];
            $url=$row['yt_url'];
            $time=$row['yt_creation']; 
                        
            echo '<div class="container my-2  yt border">
           
            <h5 class=" mx-auto">#'.$id.' 👉'.$title.' </h5>
            <div class="embed-responsive embed-responsive-21by9 my-4">
            <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/'.$url.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

            </div> ';
            

            
            
}
include 'footer.php';
?>

</body>

</html>