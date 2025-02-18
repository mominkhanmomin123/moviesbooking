<?php
session_start();
include "connection.php";
$getid=0;
$name="";
$folder="";

if(isset($_GET['hollywoodupdate'])){
$getid= $_GET['hollywoodupdate'];//id ki value get hogi jo ham ne index.php me set kari thi
$_SESSION['hollywoodupdate'] = $getid;  // Store the ID in the session
//Unset the session variable
unset($_SESSION['bollywoodupdate']);
unset($_SESSION['lollywoodupdate']);

$record = mysqli_query($connection, "SELECT * FROM `hollywood_movies` where id = $getid");
$row = mysqli_fetch_array($record); 

}

else if(isset($_GET['bollywoodupdate'])){
$getid= $_GET['bollywoodupdate'];//id ki value get hogi jo ham ne index.php me set kari thi
$_SESSION['bollywoodupdate'] = $getid;  // Store the ID in the session
//Unset the session variable
unset($_SESSION['hollywoodupdate']);
unset($_SESSION['lollywoodupdate']);
$name="bsubmit";
$record = mysqli_query($connection, "SELECT * FROM `bollywood_movies` where id = $getid");
$row = mysqli_fetch_array($record); 
$folder="bollywoodimg/";
}

else if(isset($_GET['lollywoodupdate'])){
$getid= $_GET['lollywoodupdate'];//id ki value get hogi jo ham ne index.php me set kari thi
$_SESSION['lollywoodupdate'] = $getid;  // Store the ID in the session
//Unset the session variable
unset($_SESSION['hollywoodupdate']);
unset($_SESSION['bollywoodupdate']);
$name="lsubmit";
$record = mysqli_query($connection, "SELECT * FROM `lollywood_movies` where id = $getid");
$row = mysqli_fetch_array($record); 
$folder="lollywoodimg/";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./style.css">

    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

</head>
<div class="form-container mt-5">
        <h2 class="text-center my-3">Update Movie details </h2>
     <form action="updateconfirm.php" method="post" enctype="multipart/form-data"><!--this enctype is used to insert images -->
  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Movie name</label>
    
    <input type="hidden" name="movie-id" class="form-control" value='<?php echo "$row[id]" ?>' id="exampleInput1" placeholder="Enter movie name" >
    <input type="text" name="movie-name" class="form-control" value='<?php echo "$row[movie_name]" ?>' id="exampleInput1" placeholder="Enter movie name" >
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Duration</label>
    <input type="text" name="movie-duration" class="form-control" value='<?php echo "$row[duration]" ?>' id="exampleInput1" placeholder="Enter movie duration" >
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Story</label>
    <textarea name="movie-story" class="form-control" value=''  id="exampleInput1" placeholder="Enter movie story" ><?php echo "$row[story]" ?></textarea>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">trailer</label>
    <textarea name="movie-trailer" class="form-control" value='' id="exampleInput1" placeholder="Enter movie trailer link" ><?php echo "$row[trailer]" ?></textarea>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">cast1</label>
    <input type="text" name="cast1" class="form-control" value='<?php echo "$row[cast_1]" ?>' id="exampleInput1" placeholder="" >
  </div>
  
  <div class="mb-3">
    <label for="exampleInput1" class="form-label">cast2</label>
    <input type="text" name="cast2" class="form-control" value='<?php echo "$row[cast_2]" ?>' id="exampleInput1" placeholder="" >
  </div>
  
  <div class="mb-3">
    <label for="exampleInput1" class="form-label">cast3</label>
    <input type="text" name="cast3" class="form-control" value='<?php echo "$row[cast_3]" ?>' id="exampleInput1" placeholder="" >
  </div>
 
  <div class="mb-3">
    <label for="exampleInput1" class="form-label">director</label>
    <input type="text" name="director" class="form-control" value='<?php echo "$row[director]" ?>' id="exampleInput1" placeholder="" >
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">cast1 img</label>
    
        
    
    <input type="file" name="cast1-img" class="form-control" id="exampleInput1" placeholder="Another input placeholder" >
    <input type="hidden" name="cast1-img-old" value='<?php echo "$row[cast1_img]" ?>'>
  </div>
  

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">cast2 img</label>
    <input type="file" name="cast2-img" class="form-control" id="exampleInput1" placeholder="Another input placeholder" >
    <input type="hidden" name="cast2-img-old" value='<?php echo "$row[cast2_img]" ?>'>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">cast3 img</label>
    <input type="file" name="cast3-img" class="form-control" id="exampleInput1" placeholder="Another input placeholder">
    <input type="hidden" name="cast3-img-old" value='<?php echo "$row[cast3_img]" ?>'>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Director img</label>
    <input type="file" name="director-img" class="form-control" id="exampleInput1" placeholder="Another input placeholder" >
    <input type="hidden" name="director-img-old" value='<?php echo "$row[director_img]" ?>'>
  </div>


  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Add movie feature_poster</label>
    <input type="file" name="feature-poster" class="form-control" id="exampleInput1" placeholder="Another input placeholder" >
    <input type="hidden" name="feature-poster-old" value='<?php echo "$row[feature_poster]" ?>'>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Add movie booking_poster</label>
    <input type="file" name="booking-poster" class="form-control" id="exampleInput1" placeholder="Another input placeholder" >
    <input type="hidden" name="booking-poster-old" value='<?php echo "$row[booking_poster]" ?>'>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Select Genre</label>
    <select class="form-select" name="genre">
        <option value="<?php echo "$row[genre]" ?>"><?php echo "$row[genre]" ?></option>
      <option value="Action">Action</option>
        <option value="Horror">Horror</option>
        <option value="Romantic">Romantic</option>
        <option value="Comedy">Comedy</option>
        <option value="Thriller">Thriller</option>
        <option value="Adventure">Adventure</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Select Language</label>
    <select class="form-select" name="language" >
    <option value="<?php echo "$row[language]" ?>"><?php echo "$row[language]" ?></option>
      <option value="english">English</option>
        <option value="hindi">hindi</option>
        <option value="urdu">urdu</option>
        <option value="hindi dubbed">hindi dubbed</option>
        <option value="urdu dubbed">urdu dubbed</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Select Cinema 1</label>
    <select class="form-select" name="select-cinema-1">
    <option value="<?php echo "$row[cinema_1]" ?>"><?php echo "$row[cinema_1]" ?></option>
      <option value="Nueplex">Nueplex</option>
        <option value="Cinepax">Cinepax</option>
        <option value="Capri">Capri</option>
        <option value="Cinegold plex">CinegoldPlex</option>
        <option value="Atrium mall">AtriumMall</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Cinema 1 date</label>
    <input type="date" name="cinema-1-date" class="form-control" value='<?php echo "$row[cinema_1_date]" ?>' id="exampleInput1" placeholder="">
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Cinema 1 time</label>
    <input type="time" name="cinema-1-time" class="form-control" value='<?php echo "$row[cinema_1_time]" ?>' id="exampleInput1" placeholder="">
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Select Cinema 2</label>
    <select class="form-select" name="select-cinema-2">
    <option value="<?php echo "$row[cinema_2]" ?>"><?php echo "$row[cinema_2]" ?></option>
      <option value="Nueplex">Nueplex</option>
        <option value="Cinepax">Cinepax</option>
        <option value="Capri">Capri</option>
        <option value="Cinegold plex">CinegoldPlex</option>
        <option value="Atrium mall">AtriumMall</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Cinema 2 date</label>
    <input type="date" name="cinema-2-date" class="form-control" value='<?php echo "$row[cinema_2_date]" ?>' id="exampleInput1" placeholder="">
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Cinema 2 time</label>
    <input type="time" name="cinema-2-time" class="form-control" value='<?php echo "$row[cinema_2_time]" ?>' id="exampleInput1" placeholder="">
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Select Cinema 3</label>
    <select class="form-select" name="select-cinema-3">
    <option value="<?php echo "$row[cinema_3]" ?>"><?php echo "$row[cinema_3]" ?></option>
      <option value="Nueplex">Nueplex</option>
        <option value="Cinepax">Cinepax</option>
        <option value="Capri">Capri</option>
        <option value="Cinegold plex">CinegoldPlex</option>
        <option value="Atrium mall">AtriumMall</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Cinema 3 date</label>
    <input type="date" name="cinema-3-date" class="form-control" value='<?php echo "$row[cinema_3_date]" ?>' id="exampleInput1" placeholder="">
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Cinema 3 time</label>
    <input type="time" name="cinema-3-time" class="form-control" value='<?php echo "$row[cinema_3_time]" ?>' id="exampleInput1" placeholder="">
  </div>


  
  <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-light">Update</button>
</form>
    </div>
