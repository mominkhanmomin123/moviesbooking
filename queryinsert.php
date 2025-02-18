<?php



if(isset($_POST["contactsubmit"])){

include "connection.php";

$name=$_POST["contactname"];
$email=$_POST["contactemail"];
$number=$_POST["contactnumber"];
$message=$_POST["contactmessage"];








mysqli_query($connection,"INSERT INTO `usercontact`(`name`,`email`,`number`,`message`) VALUES ('$name','$email','$number','$message')");

echo "

<script>

alert('Your query has been submitted successfully');
window.location.href='contactus.php';


</script>



";




}




?>