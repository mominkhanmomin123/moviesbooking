<?php
session_start();
if(!$_SESSION["admin"]) {
    header("location:./login.php");
}

include 'connection.php'; // Include the database connection

// Query to get the row count for each table
$hollywood_count_query = "SELECT COUNT(*) as count FROM hollywood_movies";
$bollywood_count_query = "SELECT COUNT(*) as count FROM bollywood_movies";
$lollywood_count_query = "SELECT COUNT(*) as count FROM lollywood_movies";

// Execute the queries
$hollywood_result = mysqli_query($connection, $hollywood_count_query);
$bollywood_result = mysqli_query($connection, $bollywood_count_query);
$lollywood_result = mysqli_query($connection, $lollywood_count_query);

// Fetch the counts
$hollywood_count = mysqli_fetch_assoc($hollywood_result)['count'];
$bollywood_count = mysqli_fetch_assoc($bollywood_result)['count'];
$lollywood_count = mysqli_fetch_assoc($lollywood_result)['count'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./style.css">
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <style>
      .card{
        /* background-color:black;
        color:white; */
        box-shadow:2px 2px 8px 2px;
        border:none;
        color:black;
      }
      .nav-link:hover{
          color:black;
          background-color:white
      }

    </style>
</head>
<body>

    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid font-monospace text-white">
            <a class="navbar-brand text-white text-decoration-none"><h3>My admin panel</h3></a>
            <span>
                <i class="bi bi-person-circle"></i>
                Hello, <?php echo $_SESSION['admin'] ?>
                <i class="bi bi-box-arrow-right"></i>
                <a href="./logout.php" class="text-decoration-none text-white btn nav-login">Logout </a>
            </span>
        </div>
    </nav>

    <div>
        <h2 class="text-center">Dashboard</h2>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark">
        <div class="container pe-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="bi bi-list"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Add post
                        </a>
                        <ul class="dropdown-menu me-1" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="hollywoodindex.php">Hollywood</a></li>
                            <li><a class="dropdown-item" href="bollywoodindex.php">Bollywood</a></li>
                            <li><a class="dropdown-item" href="lollywoodindex.php">Lollywood</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="user.php" class="nav-link fs-5 ms-1">User panel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Movies Count</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Hollywood Movies</h5>
                        <p class="card-text text-center fs-4"> <?php echo $hollywood_count; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-body">
                        <h5 class="card-title text-center">Bollywood Movies</h5>
                        <p class="card-text text-center fs-4"> <?php echo $bollywood_count; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Lollywood Movies</h5>
                        <p class="card-text text-center fs-4"> <?php echo $lollywood_count; ?></p>
                    </div>
                </div>
            </div>
          
        </div>
    </div>

</body>
</html>
