

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="style.css">
    <script src="../admin/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .dark{
            background-color: rgba(0, 0, 0, 0.5);
        }
        .collection{
           
            display:flex;
            justify-content:center;
            align-items:center;
        }
        
        .card-item{
        width: 300px !important;
        color:white;
        border:1px solid gray;
        background-color:white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background-image: linear-gradient(to bottom right,black, grey);

        }
        .card-item img{
            border-top-left-radius:8px;
            border-top-right-radius:8px;
        }
        a{
            text-decoration:none;
        }
       
       /* 
        .swiper {
        width: 100%;
        height: 500px;  
        } */

        /* .swiper-slide {
            width: 100%;
            height: 100%;  
        } */


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
    .card-item{
        width: 250px !important;
    }
    }
    @media screen and (max-width:600px){
        .top-rated-img{
            display:none !important;
        }
    }
   

    </style>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    
</head>
<body>

<div class="logo-banner">
  <div class="logo-address">
    <a href="#"><i class="bi bi-envelope"></i> mominfurniture@gmail.com</a>
    <a href="#"><i class="bi bi-telephone"></i> 021-3456-658</a>
  </div>
  <div  class="logo-name ">Movie booking</div>
  <div class="logo-links">
    <a href="#"><i class="bi bi-facebook fs-2"></i></a>
   <a href="#"><i class="bi bi-instagram fs-2"></i></a>
   <a href="#"><i class="bi bi-whatsapp fs-2"></i></a>
   <a class="navbar-toggler-icon" href="#"></a>
    </div>
</div>


<nav class="navbar navbar-expand-lg px-5 pe-1">
  <div class="container-fluid pe-0">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span><i class="bi bi-list"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-brand me-5"><img src="./userimage/logo.png" alt="" width="150px" height="50px"></div>
      <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
<!--     
        <li class="nav-item align-content-center">
          <span class="text-white fs-5" aria-current="page" href="">Hello</span>
          <?php
          session_start();
                   if(isset($_SESSION['users'])){
                    echo
                    "<span class='fs-5 text-white'>".$_SESSION['users']."</span>";
                    echo
                    "<span class='fs-5 text-white'>".$_SESSION['userid']."</span>";
                   }else{
                    echo "
                    <span class='fs-5 text-white'>Guest</span>
                    ";
                    
                   }
                 
                ?>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
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
<?php
include "carousel.php";
?>
<div class="dark">
<div class="container">
<h1 class="text-center mt-5 mb-3">Discover Your Next Favorite Movie! </h1>
<p class="text-center mb-5 w-75 mx-auto">Welcome to Movie booking, your ultimate destination for the latest and greatest in cinema. Whether you're in the mood for a thrilling action-packed blockbuster, a heartwarming drama, or a laugh-out-loud comedy, we’ve got something for everyone.</p>
<div class="top-rated-container mt-5 row">
  <div class="top-rated-text col-lg-6 align-content-center mb-5">
    <h1>Features Top rated movies</h1>
    <h4>Explore Our Movie List:</h4>
    <p>Check out the exciting selection of films currently showing and coming soon to theaters. From the latest blockbusters to hidden gems, there's something for every movie lover.</p>
    <h4>Get Ready for Your Next Cinematic Adventure!</h4>
    <p>Start exploring now and plan your next movie experience with Movie booking. Lights, camera, action — your perfect movie night starts here!</p>
</div>
  <div class="col-lg-6 d-flex flex-wrap justify-content-center top-rated-img">
    <img src="./userimage/blackadam-banner.jpeg" alt="" width="40%" height="250px">
    <img src="./userimage/avatar-banner.jpeg" alt="" width="50%" height="250px">
    <img src="./userimage/pathan-banner.jpeg" alt="" width="50%" height="250px">
    <img src="./userimage/fighter-banner.jpg" alt="" width="40%" height="250px">
  </div>
</div>
<h1 class="text-center my-5">Upcoming Hollywood Movies</h1>
<section class="collection">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
                include "./connection.php";
                $record = mysqli_query($connection, "SELECT * FROM `hollywood_movies`");
                while($row = mysqli_fetch_array($record)) {
                    // echo "
            ?>
                        <li class='card-item swiper-slide'>
                            <img src='../admin/<?php echo "$row[feature_poster]";?>' class='' alt='Feature Poster' style='height: 200px; width:100%;'>
                            <div class='card-body'>
                                <h5 class='card-title'><?php echo "$row[movie_name]";?></h5>
                                <p class='card-text'>
                                <i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-half text-warning'></i><br>
                                    <strong>Duration:</strong> <?php echo "$row[duration]";?> <br>
                                    
                                    <strong>Genre:</strong> <?php echo "$row[genre]";?> <br>
                                    <strong>Director:</strong> <?php echo "$row[director]";?><br>
                                </p>
                                <div>
                                    <a href='moviedetails.php?hollywoodid=<?php echo "$row[id]";?>' class='btn btn-danger'>Show times</a>
                                    
                                </div>
                            </div>
                        </li>
                    
            <?php
                    
                }
            ?>
        </div>
    </div>
</section>



<h1 class="text-center my-5">Upcoming Bollywood Movies</h1>
<section class="collection container">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
                include "./connection.php";
                $record2 = mysqli_query($connection, "SELECT * FROM `bollywood_movies`");
                while($row2 = mysqli_fetch_array($record2)) {
                         // echo "
            ?>
            <li class='card-item swiper-slide'>
                <img src='../admin/<?php echo "$row2[feature_poster]";?>' class='' alt='Feature Poster' style='height: 200px; width:100%;'>
                <div class='card-body'>
                    <h5 class='card-title'><?php echo "$row2[movie_name]";?></h5>
                    <p class='card-text'>
                    <i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-half text-warning'></i><br>
                        <strong>Duration:</strong> <?php echo "$row2[duration]";?> <br>
                        
                        <strong>Genre:</strong> <?php echo "$row2[genre]";?> <br>
                        <strong>Director:</strong> <?php echo "$row2[director]";?><br>
                    </p>
                    <div>
                        <a href='moviedetails.php?bollywoodid=<?php echo "$row2[id]";?>' class='btn btn-danger'>Show times</a>
                        
                    </div>
                </div>
            </li>
        
            <?php
                    
                }
            ?>
        </div>
    </div>
</section>



<h1 class="text-center my-5">Upcoming Lollywood Movies</h1>
<section class="collection container mb-5">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
                include "./connection.php";
                $record3 = mysqli_query($connection, "SELECT * FROM `lollywood_movies`");
                while($row3 = mysqli_fetch_array($record3)) {
                         // echo "
            ?>
            <li class='card-item swiper-slide'>
                <img src='../admin/<?php echo "$row3[feature_poster]";?>' class='' alt='Feature Poster' style='height: 200px; width:100%;'>
                <div class='card-body'>
                    <h5 class='card-title'><?php echo "$row3[movie_name]";?></h5>
                    <p class='card-text'>
                    <i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-half text-warning'></i><br>
                        <strong>Duration:</strong> <?php echo "$row3[duration]";?> <br>
                        
                        <strong>Genre:</strong> <?php echo "$row3[genre]";?> <br>
                        <strong>Director:</strong> <?php echo "$row3[director]";?><br>
                    </p>
                    <div>
                        <a href='moviedetails.php?lollywoodid=<?php echo "$row3[id]";?>' class='btn btn-danger'>Show times</a>
                        
                    </div>
                </div>
            </li>
        
            <?php
                    
                }
            ?>
        </div>
    </div>
</section>
      


</div>
</div>
<?php
include "footer.php";
?>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="script2.js"></script>
</body>
</html>

