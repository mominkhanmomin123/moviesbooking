<?php

include "header.php";

?>

<h1 class="text-center my-5">Upcoming Hollywood movies</h1>

  <div class='d-flex flex-wrap justify-content-center'> 
    <?php
        include "./connection.php";
        $record = mysqli_query($connection, "SELECT * FROM `hollywood_movies`");
        while($row = mysqli_fetch_array($record)) {
          
     ?>       
              <div class='col-xl-3 mb-4 mx-2'>
                  <div class='card'>
                      <img src='../admin/<?php echo "$row[feature_poster]";?>' class='card-img-top' alt='Feature Poster' style='height: 200px; width:100%;'>
                      <div class='card-body'>
                          <h5 class='card-title'><?php echo "$row[movie_name]";?></h5>
                          <p class='card-text'>
                          <i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-fill text-warning'></i><i class='bi bi-star-half text-warning'></i><br>
                              <strong>Duration:</strong> <?php echo "$row[duration]";?><br>
                             
                              <strong>Genre:</strong> <?php echo "$row[genre]";?><br>
                              <strong>Director:</strong> <?php echo "$row[director]";?><br>
                          </p>
                          <div class='d-flex justify-content-between'>
                              <a href='moviedetails.php?hollywoodid=<?php echo "$row[id]";?>' class='btn btn-danger'>Show times</a>
                              
                          </div>
                      </div>
                  </div>
              </div>
           
      <?php
        }
    ?>
  </div>
<?php
  include "footer.php";
  ?>