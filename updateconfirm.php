<?php
session_start();

if(isset($_POST['update'])){
    
include "connection.php";
    $folder = "";
   $query = "";
   
   if(isset($_SESSION['hollywoodupdate'])){
    $folder = "hollywoodimg/";   
    }
 else if(isset($_SESSION['bollywoodupdate'])){
    $folder = "bollywoodimg/";
   } 
else if(isset($_SESSION['lollywoodupdate'])){
    $folder = "lollywoodimg/";
}

    // Get POST data
    $movie_id = $_POST["movie-id"];
    $movie_name = $_POST["movie-name"];
    $movie_duration = $_POST["movie-duration"];
    $movie_story = $_POST["movie-story"];
    $movie_trailer = $_POST["movie-trailer"];
    $cast_1 = $_POST["cast1"];
    $cast_2 = $_POST["cast2"];
    $cast_3 = $_POST["cast3"];
    $director = $_POST["director"];
    $genre = $_POST["genre"];
    $language = $_POST["language"];
    $cinema_1 = $_POST["select-cinema-1"];
    $cinema_1_date = $_POST["cinema-1-date"];
    $cinema_1_time = $_POST["cinema-1-time"];
    $cinema_2 = $_POST["select-cinema-2"];
    $cinema_2_date = $_POST["cinema-2-date"];
    $cinema_2_time = $_POST["cinema-2-time"];
    $cinema_3 = $_POST["select-cinema-3"];
    $cinema_3_date = $_POST["cinema-3-date"];
    $cinema_3_time = $_POST["cinema-3-time"];

    // Handle image uploads
    $cast1_img_old = $_POST["cast1-img-old"];
    $cast_1_img_name = $_FILES["cast1-img"]["name"];
    if($cast_1_img_name != "") {
        $cast1_img = $folder.$cast_1_img_name;
        move_uploaded_file($_FILES["cast1-img"]["tmp_name"], $folder.$_FILES["cast1-img"]["name"]);
    } else {
        $cast1_img = $cast1_img_old;  // Use the existing image
    }

    // Repeat the same logic for other images
    $cast2_img_old = $_POST['cast2-img-old'];
    $cast_2_img_name =  $_FILES["cast2-img"]["name"];
    if($cast_2_img_name != "") {
        $cast2_img = $folder.$cast_2_img_name;
        move_uploaded_file($_FILES["cast2-img"]["tmp_name"], $folder.$_FILES["cast2-img"]["name"]);
    } else {
        $cast2_img = $cast2_img_old;
    }

    $cast3_img_old = $_POST['cast3-img-old'];
    $cast_3_img_name = $_FILES["cast3-img"]["name"];
    if($cast_3_img_name != "") {
        $cast3_img = $folder.$cast_3_img_name;
        move_uploaded_file($_FILES["cast3-img"]["tmp_name"], $folder.$_FILES["cast3-img"]["name"]);
    } else {
        $cast3_img = $cast3_img_old;
    }

    $director_img_old = $_POST['director-img-old'];
    $director_img_name = $_FILES["director-img"]["name"];
    if($director_img_name != "") {
        $director_img = $folder.$director_img_name;
        move_uploaded_file($_FILES["director-img"]["tmp_name"], $folder.$_FILES["director-img"]["name"]);
    } else {
        $director_img = $director_img_old;
    }

    $feature_poster_old = $_POST['feature-poster-old'];
    $feature_poster_name = $_FILES["feature-poster"]["name"];
    if($feature_poster_name != "") {
        $feature_poster = $folder.$feature_poster_name;
        move_uploaded_file($_FILES["feature-poster"]["tmp_name"], $folder.$_FILES["feature-poster"]["name"]);
    }else {
        $feature_poster = $feature_poster_old;
    }

    $booking_poster_old = $_POST['booking-poster-old'];
    $booking_poster_name = $_FILES["booking-poster"]["name"];
    if($booking_poster_name != "") {
        $booking_poster = $folder.$booking_poster_name;
        move_uploaded_file($_FILES["booking-poster"]["tmp_name"], $folder.$_FILES["booking-poster"]["name"]);
    }else {
        $booking_poster = $booking_poster_old;
    }


    if(isset($_SESSION['hollywoodupdate'])){
        $query= "UPDATE `hollywood_movies` SET movie_name = '$movie_name', duration = '$movie_duration', story = '$movie_story', trailer = '$movie_trailer', cast_1 = '$cast_1', cast_2 = '$cast_2', cast_3 = '$cast_3', director = '$director', cast1_img = '$cast1_img', cast2_img = '$cast2_img', cast3_img = '$cast3_img', director_img = '$director_img', feature_poster = '$feature_poster', booking_poster = '$booking_poster', genre = '$genre', language = '$language', cinema_1 = '$cinema_1', cinema_1_date = '$cinema_1_date', cinema_1_time = '$cinema_1_time', cinema_2 = '$cinema_2', cinema_2_date = '$cinema_2_date', cinema_2_time = '$cinema_2_time', cinema_3 = '$cinema_3', cinema_3_date = '$cinema_3_date', cinema_3_time = '$cinema_3_time' WHERE id = '$movie_id'";
        
    }
     else if(isset($_SESSION['bollywoodupdate'])){
        $query= "UPDATE `bollywood_movies` SET movie_name = '$movie_name', duration = '$movie_duration', story = '$movie_story', trailer = '$movie_trailer', cast_1 = '$cast_1', cast_2 = '$cast_2', cast_3 = '$cast_3', director = '$director', cast1_img = '$cast1_img', cast2_img = '$cast2_img', cast3_img = '$cast3_img', director_img = '$director_img', feature_poster = '$feature_poster', booking_poster = '$booking_poster', genre = '$genre', language = '$language', cinema_1 = '$cinema_1', cinema_1_date = '$cinema_1_date', cinema_1_time = '$cinema_1_time', cinema_2 = '$cinema_2', cinema_2_date = '$cinema_2_date', cinema_2_time = '$cinema_2_time', cinema_3 = '$cinema_3', cinema_3_date = '$cinema_3_date', cinema_3_time = '$cinema_3_time' WHERE id = '$movie_id'";

    } 
    else if(isset($_SESSION['lollywoodupdate'])){
        $query= "UPDATE `lollywood_movies` SET movie_name = '$movie_name', duration = '$movie_duration', story = '$movie_story', trailer = '$movie_trailer', cast_1 = '$cast_1', cast_2 = '$cast_2', cast_3 = '$cast_3', director = '$director', cast1_img = '$cast1_img', cast2_img = '$cast2_img', cast3_img = '$cast3_img', director_img = '$director_img', feature_poster = '$feature_poster', booking_poster = '$booking_poster', genre = '$genre', language = '$language', cinema_1 = '$cinema_1', cinema_1_date = '$cinema_1_date', cinema_1_time = '$cinema_1_time', cinema_2 = '$cinema_2', cinema_2_date = '$cinema_2_date', cinema_2_time = '$cinema_2_time', cinema_3 = '$cinema_3', cinema_3_date = '$cinema_3_date', cinema_3_time = '$cinema_3_time' WHERE id = '$movie_id'";
    }
    // Execute query
 
        mysqli_query($connection, "$query"); 
        
   // Execute query and check if successful
   if(mysqli_query($connection, "$query")) {
    echo "<script>
            alert('Movie details updated successfully!');
        </script>";
       if(isset($_SESSION['hollywoodupdate'])){
        echo "<script>
            window.location.href='hollywoodindex.php';
        </script>";
       }
       else if(isset($_SESSION['bollywoodupdate'])){
        echo "<script>
            window.location.href='bollywoodindex.php';
        </script>";
       }
       else if(isset($_SESSION['lollywoodupdate'])){
        echo "<script>
            window.location.href='lollywoodindex.php';
        </script>";
       }
         
    }
     else {
    echo "<script>
            alert('Error updating movie details!');
            window.location.href = 'hollywoodindex.php';
          </script>";
    }    

//     if($query){
//         $_SESSION['status'] = "Movie details updated successfully!";
//         header("Location: hollywoodindex.php"); // Or the appropriate page
//     } else {
//         $_SESSION['status'] = "Error updating movie details!";
//         header("Location: hollywoodindex.php"); // Or the appropriate page
//     }
}
?>
