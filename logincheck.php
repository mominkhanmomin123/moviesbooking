<?php

if(isset($_POST['confirm-submit'])){

include './connection.php';

$username = $_POST["username"];
$password = $_POST["password"];



$result = mysqli_query($connection, "SELECT * FROM `users` WHERE username = '$username'  AND
 passwords = '$password' ");                                   


$details=mysqli_query($connection, "SELECT * FROM `users` where username = '$username'");
$getid=mysqli_fetch_array($details);
$idvalue=$getid["id"];


session_start();

if(mysqli_num_rows($result)){
    $_SESSION['users'] = $username;
    $_SESSION['userid'] = $idvalue;

echo "

<script>
alert('login successful $idvalue');
window.location.href='./booking.php';

</script>

";

}else{
    echo "
    <script>
    alert('Invalid username or password');
    window.location.href='confirmlogin.php';
    </script>
    
    
    ";
}

}


?>