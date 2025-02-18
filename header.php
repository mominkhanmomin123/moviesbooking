<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href="../admin/bootstrap-5.0.2-dist/css/bootstrap.min.css">
   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="../admin/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
<script src="script2.js"></script>
   
    
    <style>
@media screen and (max-width: 800px) {
  .logo-address,
  .logo-links {
    display: none !important; /* Forcefully hide these elements */
  }
  
  .logo-banner {
    display: block;
  }

  .logo-name {
    margin: auto;
    width: 100% !important;
  }
}
    </style>
    
</head>
<body>



<div class="logo-banner">
  <div class="logo-address">
    <a href="#"><i class="bi bi-envelope"></i> infomoviebooking@gmail.com</a>
    <a href="#" class=""><i class="bi bi-telephone"></i> 021-3456-658</a>
  </div>
  <div  class="logo-name text-white">Movie booking</div>
  <div class="logo-links">
    <a href="https://www.facebook.com/moviebookingsystem/"><i class="bi bi-facebook fs-2"></i></a>
   <a href="https://www.instagram.com/cinematicketchannel/?hl=en"><i class="bi bi-instagram fs-2"></i></a>
   <a href="#"><i class="bi bi-whatsapp fs-2"></i></a>
   <a class="navbar-toggler-icon" href="#"></a>
    </div>
</div>

<?php
session_start();
?>
<nav class="navbar navbar-expand-lg px-5 pe-1">
  <div class="container-fluid pe-0">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span><i class="bi bi-list"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-brand me-5"><img src="./userimage/logo.png" alt="" width="150px" height="50px"></div>
      <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="hollywoodmovies.php">Hollywood</a></li>
            <li><a class="dropdown-item" href="bollywoodmovies.php">Bollywood</a></li>
            <li><a class="dropdown-item" href="lollywoodmovies.php">Lollywood</a></li>
            
          </ul>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact us</a>
          
        </li>
        
      </ul>
      <a href="login.php" class="btn fs-5 ms-auto me-1 nav-login">Login</a>
      <a href="register.php" class="btn fs-5 me-3 nav-login">Signup</a>
      <a href="logout.php" class="btn fs-5 me-3 nav-login">logout</a>

      
      
       
    </div>
  </div>
</nav>








</body>
</html>
