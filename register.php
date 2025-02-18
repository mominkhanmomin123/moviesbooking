<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href="../admin/bootstrap-5.0.2-dist/css/bootstrap.min.css">
   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="../admin/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
<script src="script2.js"></script>

<style>
      .form-container{
        width:350px;
        
        background-color: rgba(0, 0, 0, 0.534);
   
    box-shadow: 2px 2px 8px 2px;
    margin:auto;
  
      }
      body{
        background-size:cover;
      }
      .animate__animated.animate__fadeInDown{
        animation-duration:2s;
      }
      #error{
        color:red;
      }
      @media screen and (max-width:350px) and (min-width:1px) {
    .form-container {
    width: 95%;
}
}
    </style>
</head>
<body class="py-5">
<?php
   session_start();
   ?>
<div class="form-container animate__animated animate__fadeInDown">
<form action="insert.php" method="post" autocomplete="off" onsubmit="return validation()" >
            <div class="mb-3">
              <label for="name" class="form-label">Username</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" autocomplete="off" required>
             
            </div>
           
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" autocomplete="off"  required>
             
            </div>
            <div class="mb-3">
              <label for="number" class="form-label">Number</label>
              <input type="text" class="form-control" id="phoneNumber" name="number" placeholder="Enter your number" value=""  autocomplete="off" required>
              <p id="result"></p>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter your password" autocomplete="off" >
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword2" class="form-label">Confirm password</label>
              <input type="password" class="form-control" id="exampleInputPassword2" name="password2" placeholder="Re-enter your password" autocomplete="off" >
              <p id="error"></p>
            </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="showPasswords">
    <label class="form-check-label" for="showPasswords">Show Passwords</label>
</div>
           
          
            <button name="register" type="submit" class="btn nav-login registerbtn" onclick="validatePhoneNumber()">Register</button>
          </form>
    </div>
    <script>
      document.getElementById('showPasswords').addEventListener('change', function () {
    const password1 = document.getElementById('exampleInputPassword1');
    const password2 = document.getElementById('exampleInputPassword2');

    const type = this.checked ? 'text' : 'password';
    password1.type = type;
    password2.type = type;
});
      function validation(){
          let password = document.getElementById("exampleInputPassword1").value;
          let password2 = document.getElementById("exampleInputPassword2").value;
          if(password !== password2){
            document.getElementById("error").innerHTML = "Please enter same password in both fields";
          return false;

          }
        }
        function validatePhoneNumber() {
    const phoneInput = document.getElementById('phoneNumber').value;
    const result = document.getElementById('result');

    // Regex pattern for Pakistani numbers (e.g., 03001234567 or +923001234567)
    const pattern = /^(?:\+92|0092|92|03)[0-9]{9}$/;

    if (pattern.test(phoneInput)) {
        result.textContent = "✅ Valid phone number!";
        result.style.color = "green";
    } else {
        result.textContent = "❌ Invalid phone number. Please follow formats like 03001234567 or +923001234567.";
        result.style.color = "red";
    }
}

       
    </script>

</body>
</html>