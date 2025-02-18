<?php

session_start();

if(isset($_POST['cinema-3-dt'])){
    include "./connection.php";

  $cinema_name = $_POST['cinema-name'];
 $cinema_date = $_POST['cinema-date'];
 $cinema_time = $_POST['cinema-time'];
 $movie_name = $_POST['movie-name'];


$_SESSION['cinema-name'] = $cinema_name;
$_SESSION['cinema-date'] = $cinema_date;
$_SESSION['cinema-time'] = $cinema_time;
$_SESSION['movie-name'] = $movie_name;


    echo "
    <script>
  
   
    window.location.href='./booking.php';
     </script>
    ";

}



if(isset($_POST['cinema-1-dt'])){
    include "./connection.php";

  $cinema_name = $_POST['cinema-name'];
 $cinema_date = $_POST['cinema-date'];
 $cinema_time = $_POST['cinema-time'];
 $movie_name = $_POST['movie-name'];
 

$_SESSION['cinema-name'] = $cinema_name;
$_SESSION['cinema-date'] = $cinema_date;
$_SESSION['cinema-time'] = $cinema_time;
$_SESSION['movie-name'] = $movie_name;


if(isset($_SESSION['users'])){
    echo "
    <script>
   
    window.location.href='./booking.php';
     </script>
    ";
}else{
    echo "
    <script>
    alert('login first');
    
 window.location.href='./confirmlogin.php';
    </script>
    "; 
}
}


if(isset($_POST['cinema-2-dt'])){
    include "./connection.php";

  $cinema_name = $_POST['cinema-name'];
 $cinema_date = $_POST['cinema-date'];
 $cinema_time = $_POST['cinema-time'];
 $movie_name = $_POST['movie-name'];


$_SESSION['cinema-name'] = $cinema_name;
$_SESSION['cinema-date'] = $cinema_date;
$_SESSION['cinema-time'] = $cinema_time;
$_SESSION['movie-name'] = $movie_name;

if(isset($_SESSION['users'])){
    echo "
    <script>
    
   
    window.location.href='./booking.php';
     </script>
    ";
}
else{
    echo "
<script>
alert('login first');

window.location.href='./confirmlogin.php';
</script>
";
}
}













?>