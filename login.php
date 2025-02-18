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
        position: absolute;
        background-color: rgba(0, 0, 0, 0.534);
    top: 50%;
    left: 50%;
  translate: -50% -50%;
    box-shadow: 2px 2px 8px 2px;
    margin:0%;
      }
      body{
        background-size:cover;
      }
      .animate__animated.animate__fadeInDown{
        animation-duration:2s;
      }
      @media screen and (max-width:350px) and (min-width:1px) {
    .form-container {
    width: 95%;
}
}
    </style>
</head>
<body>
<?php
   session_start();
   ?>
<div class="form-container animate__animated animate__fadeInDown">
        <form action="login1.php" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="username" required>
             
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            </div>
           
            <button type="submit" name="submit" class="btn nav-login loginbtn text-white mb-2">Login</button>
            <br>
            <a href="register.php" class="text-danger dont">Dont have account? Register here</a>
           
          </form>
    </div>
    
</body>
</html>