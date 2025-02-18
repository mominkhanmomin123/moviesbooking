<?php
include "./header.php";
if(!isset($_SESSION['users'])){
    echo"
    <script>
    alert('please login first');
    window.location.href='reviewlogin.php';
    </script>
    ";
  }

// Check if 'hollywoodid' is in the URL
if (isset($_GET['hollywoodid'])) {
    $get_id = $_GET['hollywoodid'];  // Store the ID from the URL
    $_SESSION['hollywoodid'] = $get_id;  // Store the ID in the session
      // Unset the session variable
      unset($_SESSION['bollywoodid']);
      unset($_SESSION['lollywoodid']);
}
else if(isset($_GET['bollywoodid'])) {
    $get_id = $_GET['bollywoodid'];  // Store the ID from the URL
    $_SESSION['bollywoodid'] = $get_id;  // Store the ID in the session
      // Unset the session variable
      unset($_SESSION['hollywoodid']);
      unset($_SESSION['lollywoodid']);
}
else if (isset($_GET['lollywoodid'])) {
    $get_id = $_GET['lollywoodid'];  // Store the ID from the URL
    $_SESSION['lollywoodid'] = $get_id;  // Store the ID in the session
      // Unset the session variable
      unset($_SESSION['hollywoodid']);
      unset($_SESSION['bollywoodid']);
}


// If not found in the URL, check the session
if (isset($_SESSION['hollywoodid'])) {
    $get_id = $_SESSION['hollywoodid'];  // Retrieve the ID from the session
    include "connection.php";
  
    $hollywood_record = mysqli_query($connection, "SELECT * FROM `hollywood_movies` WHERE id = $get_id");
    $row = mysqli_fetch_array($hollywood_record);
    }
         // If not found in the URL, check the session
else if (isset($_SESSION['bollywoodid'])) {
    $get_id = $_SESSION['bollywoodid'];  // Retrieve the ID from the session
    include "connection.php";
   
    $bollywood_record = mysqli_query($connection, "SELECT * FROM `bollywood_movies` WHERE id = $get_id");
    $row = mysqli_fetch_array($bollywood_record);
    }
 // If not found in the URL, check the session
else if (isset($_SESSION['lollywoodid'])) {
    $get_id = $_SESSION['lollywoodid'];  // Retrieve the ID from the session
    include "connection.php";
   
    $lollywood_record = mysqli_query($connection, "SELECT * FROM `lollywood_movies` WHERE id = $get_id");
    $row = mysqli_fetch_array($lollywood_record);
}
else {
    echo "
    <script>
        alert('Please select a movie first');
        window.location.href='index.php';
    </script>
    ";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

</head>
<style>
    body {
        background-color: black;
        color: white;
    }

    .trailer {
        margin: auto;
        width: 100%;
        height: 480px;

    }
    .trailer iframe{
        background-size: cover;
    }

    .cast-container {
        /* border: 2px solid white; */
        display: flex;
        column-gap: 5px;
    }

    .cast-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 2px solid white;
        margin-top: 4px;

    }

    .cast-img img{
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .cast-name {
        align-content: center;
        font-size: 1.5rem;
    }
.cinema-container{
    margin-top: 30px;
    
}
.cinema-container p{
    margin-bottom: 1px;
}
    .bookbtn{
        background-image: linear-gradient(to bottom right, red, maroon);
        color: white;
      
    }
    .bookbtn:hover{
        color:white
    }
    .img-container img{
        width: 100%;
        height: 600px;
    }
    /* *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        } */
        .dark{
            background-color: rgba(0, 0, 0, 0.5);
        }
        .collection{
           
            display:flex;
            justify-content:center;
            align-items:center;
        }
.review-card{
    width:300px;
    height:300px;
    padding:7px;
    border: 1px solid white;
    /* background-color:black; */
    background-image: linear-gradient(to bottom right,black, grey);
    color:white;
    border-radius:8px;
}
.swiper-wrapper{

}
.swiper{
    

    padding: 35px 20px;
    overflow:hidden;
    position: relative;
}
.swiper-button-prev{
    background-color:white;
    position: absolute;
    left:0%;
    color:black;
}
.swiper-button-next{
    background-color:white;
    position: absolute;
    right:0%;
    color:black;
}

.card-text{
    font-style:italic;
}
.fa-quote-left,.fa-quote-right{
    font-size:13px;

}
.swiper .swiper-pagination-bullet{
    height:13px;
    width:13px;
    opacity: 0.5;
    background-color:white;
}
.swiper .swiper-pagination-bullet-active{
    
    opacity: 1;

}


    @media screen and (max-width:600px) and (min-width:1px) {
        .cast-name,.g {
        font-size: 1rem!important;
    }
    
    }
</style>

<body>
    
<?php

   // Format the date into dd-mm-yyyy format
   $formattedDate1 = date('d-M-Y', strtotime($row['cinema_1_date']));
   $formattedDate2 = date('d-M-Y', strtotime($row['cinema_2_date']));
   $formattedDate3 = date('d-M-Y', strtotime($row['cinema_3_date']));
   

     // Convert the time to 12-hour format (AM/PM)
     $formattedTime1 = date('h:i A', strtotime($row['cinema_1_time']));
     $formattedTime2 = date('h:i A', strtotime($row['cinema_2_time']));
     $formattedTime3 = date('h:i A', strtotime($row['cinema_3_time']));
?>


    <div class='container mt-5'>


        <div class='trailer' style='position: relative; width: 100%; height: 0; padding-bottom: 56.25%;'>
            <iframe width='100%' height='100%' style='border: 10px groove black; position: absolute; top: 0; left: 0;' src='<?php echo "$row[trailer]";?>' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe> 
           
        </div>
        <div class='row align-items-center justify-content-center'>
            <div class='col-sm-6 mb-5'>
                <h1 class='mt-5'>CAST</h1>

                <div class='cast-container '>
                    <div class='cast-img'><img src='../admin/<?php echo "$row[cast1_img]";?>' alt=''></div>
                    <div class='cast-name'><?php echo "$row[cast_1]";?></div>
                </div>
                <div class='cast-container'>
                    <div class='cast-img'><img src='../admin/<?php echo "$row[cast2_img]";?>' alt=''></div>
                    <div class='cast-name'><?php echo "$row[cast_2]";?></div>
                </div>

                <div class='cast-container'>
                    <div class='cast-img'><img src='../admin/<?php echo "$row[cast3_img]";?>' alt=''></div>
                    <div class='cast-name'><?php echo "$row[cast_3]";?></div>
                </div>
                <h1 class='mt-5'>Director</h1>
                <div class='cast-container'>
                    <div class='cast-img'><img src='../admin/<?php echo "$row[director_img]";?>' alt=''></div>
                     <div class='cast-name'><?php echo "$row[director]";?></div>
                </div>
            </div>

            <div class='col-sm-6 ps-5 mt-2'>
                <p><?php echo "$row[story]";?></p>
                <p class='fs-5 g'>Genre : <?php echo "$row[genre]";?></p>
                <p class='fs-5 g'>Language : <?php echo "$row[language]";?></p>
                <p class='fs-5 g'>Duration : <?php echo "$row[duration]";?></p>
               
               
            </div>
        </div>
        
      

        <h1 class='text-center mt-5 mb-1'><?php echo "$row[movie_name]";?> show times</h1>
        <div class='row mt-5 align-items-center justify-content-center mb-5'>
            <div class='col-md-4 cinema-list-container'>
                <div class='cinema-container'>
                    <form action='./movieconfirmation.php' method='post'>
                    <input type='hidden' name='movie-name' value='<?php echo "$row[movie_name]";?>'> 
                    <h3 class=''><?php echo "$row[cinema_1]";?></h3>
                    <input type='hidden' name='cinema-name' value='<?php echo "$row[cinema_1]";?>'>
                    <p class='cinema-date mb-0'><?php echo $formattedDate1;?></p>
                    <input type='hidden' name='cinema-date' value='<?php echo $formattedDate1;?>'>
                    <p class='cinema-time'><?php echo $formattedTime1;?></p>
                    <input type='hidden' name='cinema-time' value='<?php echo $formattedTime1;?>'>
                    <button type='submit' class='btn bookbtn' name='cinema-1-dt'>Book tickets</button>
                    </form>
                </div>
                <div class='cinema-container'>
                    <form action='./movieconfirmation.php' method='post'>
                    <input type='hidden' name='movie-name' value='<?php echo "$row[movie_name]";?>'>  
                    <h3 class='cinema-name'><?php echo "$row[cinema_2]";?></h3>
                    <input type='hidden' name='cinema-name' value='<?php echo "$row[cinema_2]";?>'>
                    <p class='cinema-date mb-0'><?php echo $formattedDate2;?></p>
                    <input type='hidden' name='cinema-date' value='<?php echo $formattedDate2;?>'>
                    <p class='cinema-time'><?php echo $formattedTime2;?></p>
                    <input type='hidden' name='cinema-time' value='<?php echo $formattedTime2;?>'>
                    <button type='submit' class='btn bookbtn' name='cinema-2-dt'>Book tickets</button>
                    </form>
                </div>
                <div class='cinema-container mb-4'>
                    <form action='./movieconfirmation.php' method='post'>
                    <input type='hidden' name='movie-name' value='<?php echo "$row[movie_name]";?>'>  
                    <h3 class='cinema-name'><?php echo "$row[cinema_3]";?></h3>
                    <input type='hidden' name='cinema-name' value='<?php echo "$row[cinema_3]";?>'>
                    <p class='cinema-date mb-0'><?php echo $formattedDate3;?></p>
                    <input type='hidden' name='cinema-date' value='<?php echo $formattedDate3;?>'>
                    <p class='cinema-time'><?php echo $formattedTime3;?></p>
                    <input type='hidden' name='cinema-time' value='<?php echo $formattedTime3;?>'>
                    <button type='submit' class='btn bookbtn' name='cinema-3-dt'>Book tickets</button>
                    </form>
                </div>
            </div>
            <div class='col-md-6 poster-container'>
                <div class='img-container'>
                    <img src='../admin/<?php echo "$row[feature_poster]";?>'>
                </div>
            </div>
        </div>



        <h1 class="text-center">Reviews</h1>
   
               


<section class="collection container">
    <div class="swiper mySwiperReview">
        <div class="swiper-wrapper">
        <?php
                 if(isset($_SESSION['hollywoodid'])){
                $hreview_record = mysqli_query($connection, "SELECT * FROM `hollywood_reviews` where id = $get_id");
                $review_count = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM `hollywood_reviews` WHERE id = $get_id"));
                 }
                 else if(isset($_SESSION['bollywoodid'])){
                $hreview_record = mysqli_query($connection, "SELECT * FROM `bollywood_reviews` where id = $get_id");
                $review_count = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM `bollywood_reviews` WHERE id = $get_id"));
                }
                 else if(isset($_SESSION['lollywoodid'])){
                $hreview_record = mysqli_query($connection, "SELECT * FROM `lollywood_reviews` where id = $get_id");
                $review_count = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM `lollywood_reviews` WHERE id = $get_id"));
                }
                 // Count the total number of reviews
                 $review_count = mysqli_num_rows($hreview_record);

               // Fetch all records into an array
            $reviews = [];
            while($hrowrev = mysqli_fetch_array($hreview_record)){
                $reviews[] = $hrowrev;
            }

            // Reverse the array to get the latest review first
            $reviews = array_reverse($reviews);

            // Now loop through the reversed reviews array
            foreach($reviews as $hrowrev){
        ?>  
            <div class='review-card swiper-slide'>
                           
                <div class='card-body'>
                    <h4 class='card-title text-capitalize text-center'><?php echo "$hrowrev[name]";?></h4>
                    <p class='card-text'><i class="fa fa-quote-left me-2"></i></i><?php echo "$hrowrev[review]";?><i class="fa fa-quote-right ms-2" aria-hidden="true"></i></p>
                    
                </div>
            </div>
        
            <?php
                    
                }
            ?>
        </div>
        
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>
<form action="reviewsubmit.php" method="post">
                 <div class="mb-3">
                     <input type="hidden" name="movieid" value="<?php echo $get_id;?>">
                     <input type="hidden" name="username" value="<?php echo $_SESSION['users'];?>">
                 <input type="hidden" name="moviename" value='<?php echo "$row[movie_name]";?>'>

                    <label for="exampleInputPassword1" class="form-label">Enter your review</label>
                    <textarea class="form-control" id="myreview1" name="myreview1" placeholder="Please write less than 300 words"  maxlength="300" required ></textarea>
                    
                </div>
                <button type="submit" name="Rsubmit" class="btn nav-login loginbtn text-white mb-2">Submit</button>
                </form>


                      
                    <div class='col-xl-3 mb-4 mx-2'>
                       
                    </div>
     
    </div>
<?php
include "footer.php";
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- <script src="reviewslide.js"></script> -->


<!-- Inline JavaScript with PHP variable -->
<script>
    // Get the total number of reviews from PHP
    var totalReviews = <?php echo $review_count; ?>;

    // Set slidesPerView based on totalReviews
    var slidesPerView = 3; // Default to 3
    if (totalReviews <= 2) {
        slidesPerView = totalReviews; // Show 1 or 2 slides depending on the count
    } 

    // Initialize Swiper with dynamic slidesPerView
    var swiper = new Swiper(".mySwiperReview", {
        loop: true,
        slidesPerView: slidesPerView,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        // Responsive breakpoints
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            786: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: slidesPerView // Use dynamic slidesPerView
            },
        }
    });

 </script>
</body>

</html>