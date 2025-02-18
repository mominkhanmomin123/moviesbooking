<?php

  session_start();
if(isset($_POST["Rsubmit"])){
    
          
        $id=$_POST["movieid"];
        // $_SESSION['get_id'] = $id;
        $username=$_POST["username"];
        $moviename=$_POST["moviename"];
        $review=$_POST["myreview1"];


        if(isset($_SESSION['hollywoodid'])){
            include "connection.php";
            $review=$connection->real_escape_string($review);
           
            mysqli_query($connection, "INSERT INTO `hollywood_reviews`(`id`, `name`, `movie_name`, `review`) VALUES ($id,'$username','$moviename','$review')");
        echo "
        <script>
      
        window.location.href='moviedetails.php';
        </script>
        ";
        }
        else if(isset($_SESSION['bollywoodid'])){
            include "connection.php";
            $review=$connection->real_escape_string($review);
        mysqli_query($connection, "INSERT INTO `bollywood_reviews`(`id`, `name`, `movie_name`, `review`) VALUES ($id,'$username','$moviename','$review')");
        echo "
        <script>
        
        window.location.href='moviedetails.php';
        </script>
        ";
        }
        else if(isset($_SESSION['lollywoodid'])){
            include "connection.php";
            $review=$connection->real_escape_string($review);
            
        mysqli_query($connection, "INSERT INTO `lollywood_reviews`(`id`, `name`, `movie_name`, `review`) VALUES ($id,'$username','$moviename','$review')");

        echo "
        <script>
   
        window.location.href='moviedetails.php';
        </script>
        ";
        }else{
            echo "
            <script>
            alert('Your review has not been submitted!');
            
            </script>
            "; 
        }
    }
    





?>