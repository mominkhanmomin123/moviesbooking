<?php

include "connection.php";
if(isset($_GET['hollywooddelete'])){
$getid= $_GET['hollywooddelete'];//id ki value get hogi jo ham ne index.php me set kari thi
mysqli_query($connection, "DELETE FROM `hollywood_movies` WHERE id= $getid");
header("location: hollywoodindex.php");

}

else if(isset($_GET['bollywooddelete'])){
$getid= $_GET['bollywooddelete'];//id ki value get hogi jo ham ne index.php me set kari thi
mysqli_query($connection, "DELETE FROM `bollywood_movies` WHERE id= $getid");
header("location: bollywoodindex.php");

}

else if(isset($_GET['lollywooddelete'])){
$getid= $_GET['lollywooddelete'];//id ki value get hogi jo ham ne index.php me set kari thi
mysqli_query($connection, "DELETE FROM `lollywood_movies` WHERE id= $getid");
header("location: lollywoodindex.php");

}

else if(isset($_GET['userdelete'])){
$getid= $_GET['userdelete'];//id ki value get hogi jo ham ne index.php me set kari thi
mysqli_query($connection, "DELETE FROM `users` WHERE id= $getid");
header("location: user.php");

}
?>