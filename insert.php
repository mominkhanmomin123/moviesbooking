<?php



if(isset($_POST["register"])){

include "connection.php";

$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$password=$_POST["password"];
$password2=$_POST["password2"];





$dupemail=mysqli_query($connection,"SELECT * FROM `users` WHERE email = '$email'");




if(mysqli_num_rows($dupemail)){
    echo "

<script>

alert('Useremail already exists');
window.location.href='register.php';

</script>

";
}

else{ 
mysqli_query($connection,"INSERT INTO `users`(`username`,`email`,`number`,`passwords`) VALUES ('$name','$email','$number','$password')");

echo "

<script>

alert('User registration successfull');
window.location.href='login.php';


</script>



";




}


}

?>