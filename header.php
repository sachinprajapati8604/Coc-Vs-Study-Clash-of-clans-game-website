<style>
.titlename{
 font-weight: bold;
  background: -webkit-linear-gradient(orange, #dfdfdf,yellow);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  
}
nav ul li a {
  font-weight: bold;
  font-size: 20px;
  
}
nav ul li{
  padding-inline-start: 20px;
}
.dropdown-menu a{
  padding: 7px;
}
.dropdown-menu a:hover{
 
  color: #fff;
  background-color: #343a40;
}
</style>
<?php 

echo '

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="#">
  <img src="image/queen1.png" height="30"  class="d-inline-block align-top"
      alt="clan logo"> 
    
    <span class="titlename">Coc Vs Study</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       TownHalls
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="th14.php">Townhall 14</a>
        <a class="dropdown-item" href="th13.php">Townhall 13</a>
        <a class="dropdown-item" href="th12.php">Townhall 12</a>
        <a class="dropdown-item" href="th11.php">Townhall 11</a>
        <a class="dropdown-item" href="th10.php">Townhall 10</a>
      </div>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="youtube.php">YouTube</a>
  </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0" method="get" action="search.php?">
      <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search" required/>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
';

if(isset($_GET['success']) && $_GET['success']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success !</strong> Your base has been uploaded succesfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

?>
