

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
<body>
  
<?php
include "header.php";
if(!$_SESSION["admin"])
{
    header("location:./login.php");
}
?>
    <div class="form-container mt-5">
        <h2 class="text-center my-3">Bollywood Movie details</h2>
     <form action="insert.php" method="post" enctype="multipart/form-data"><!--this enctype is used to insert images -->
  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Movie name</label>
    <input type="text" name="movie-name" class="form-control" id="exampleInput1" placeholder="Enter movie name" >
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Duration</label>
    <input type="text" name="movie-duration" class="form-control" id="exampleInput1" placeholder="Enter movie duration" >
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Story</label>
    <textarea name="movie-story" class="form-control" id="exampleInput1" placeholder="Enter movie story" ></textarea>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">trailer</label>
    <textarea name="movie-trailer" class="form-control" id="exampleInput1" placeholder="Enter movie trailer link" ></textarea>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">cast1</label>
    <input type="text" name="cast1" class="form-control" id="exampleInput1" placeholder="" >
  </div>
  
  <div class="mb-3">
    <label for="exampleInput1" class="form-label">cast2</label>
    <input type="text" name="cast2" class="form-control" id="exampleInput1" placeholder="" >
  </div>
  
  <div class="mb-3">
    <label for="exampleInput1" class="form-label">cast3</label>
    <input type="text" name="cast3" class="form-control" id="exampleInput1" placeholder="" >
  </div>
 
  <div class="mb-3">
    <label for="exampleInput1" class="form-label">director</label>
    <input type="text" name="director" class="form-control" id="exampleInput1" placeholder="" >
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">cast1 img</label>
    <input type="file" name="cast1-img" class="form-control" id="exampleInput1" placeholder="Another input placeholder" >
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">cast2 img</label>
    <input type="file" name="cast2-img" class="form-control" id="exampleInput1" placeholder="Another input placeholder" >
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">cast3 img</label>
    <input type="file" name="cast3-img" class="form-control" id="exampleInput1" placeholder="Another input placeholder" >
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Director img</label>
    <input type="file" name="director-img" class="form-control" id="exampleInput1" placeholder="Another input placeholder" >
  </div>


  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Add movie feature_poster</label>
    <input type="file" name="feature-poster" class="form-control" id="exampleInput1" placeholder="Another input placeholder" >
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Add movie booking_poster</label>
    <input type="file" name="booking-poster" class="form-control" id="exampleInput1" placeholder="Another input placeholder" >
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Select Genre</label>
    <select class="form-select" name="genre" >
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
      <option value="englis">English</option>
        <option value="hindi">hindi</option>
        <option value="urdu">urdu</option>
        <option value="hindi dubbed">hindi dubbed</option>
        <option value="urdu dubbed">urdu dubbed</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Select Cinema 1</label>
    <select class="form-select" name="select-cinema-1">
      <option value="Nueplex">Nueplex</option>
        <option value="Cinepax">Cinepax</option>
        <option value="Capri">Capri</option>
        <option value="Cinegold plex">Cinegold plex</option>
        <option value="Atrium mall">Atrium mall</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Cinema 1 date</label>
    <input type="date" name="cinema-1-date" class="form-control" id="exampleInput1" placeholder="">
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Cinema 1 time</label>
    <input type="time" name="cinema-1-time" class="form-control" id="exampleInput1" placeholder="">
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Select Cinema 2</label>
    <select class="form-select" name="select-cinema-2">
      <option value="Nueplex">Nueplex</option>
        <option value="Cinepax">Cinepax</option>
        <option value="Capri">Capri</option>
        <option value="Cinegold plex">CinegoldPlex</option>
        <option value="Atrium mall">AtriumMall</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Cinema 2 date</label>
    <input type="date" name="cinema-2-date" class="form-control" id="exampleInput1" placeholder="">
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Cinema 2 time</label>
    <input type="time" name="cinema-2-time" class="form-control" id="exampleInput1" placeholder="">
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Select Cinema 3</label>
    <select class="form-select" name="select-cinema-3">
      <option value="Nueplex">Nueplex</option>
        <option value="Cinepax">Cinepax</option>
        <option value="Capri">Capri</option>
        <option value="Cinegold plex">CinegoldPlex</option>
        <option value="Atrium mall">AtriumMall</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Cinema 3 date</label>
    <input type="date" name="cinema-3-date" class="form-control" id="exampleInput1" placeholder="">
  </div>

  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Cinema 3 time</label>
    <input type="time" name="cinema-3-time" class="form-control" id="exampleInput1" placeholder="">
  </div>




  
  <button name="bsubmit" class="bg-danger fs-4 fw-bold my-3 form-control text-light">Upload</button>
</form>
    </div>
<h1 class="text-center my-5">Our Bollywood movies</h1>
  <div class='container d-flex flex-wrap justify-content-center'> 
    <?php
        include "./connection.php";
        $record = mysqli_query($connection, "SELECT * FROM `bollywood_movies`");
        while($row = mysqli_fetch_array($record)) {
            echo "
            
              <div class='col-md-3 mb-4 mx-4'>
                  <div class='card'>
                      <img src='$row[feature_poster]' class='card-img-top' alt='Feature Poster' style='height: 200px; width: 100%;'>
                      <div class='card-body'>
                          <h5 class='card-title'>$row[movie_name]</h5>
                          <p class='card-text'>
                              <strong>Duration:</strong> $row[duration] <br>
                             
                              <strong>Genre:</strong> $row[genre] <br>
                              <strong>Language:</strong> $row[language] <br>
                          </p>
                          <div class='d-flex justify-content-between'>
                              <a href='delete.php?bollywooddelete=$row[id]' class='btn btn-danger'>Delete</a>
                              <a href='update.php?bollywoodupdate=$row[id]' class='btn btn-warning'>Update</a>
                          </div>
                      </div>
                  </div>
              </div>
           
            ";
        }
    ?>
  </div>
           
        




</body>
</html>