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

</head>
<body>


<nav class="navbar navbar-light bg-dark">
        <div class="container-fluid font-monospace text-white">
            <a class="navbar-brand text-white text-decoration-none"><h3>My store</h3></a>
            <span>
                <i class="bi bi-person-circle"></i>
                
                <i class="bi bi-box-arrow-right"></i>
                <a href="./logout.php" class="text-decoration-none text-white">Logout </a>
                <a href="" class="text-decoration-none text-white">User panel</a>
            
        </div>
    </nav>

    <div>
        <h2 class="text-center">User panel</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto">
                <table class="table border border-dark table-hover my-5">
                    <tr class="text-white fs-5 font-monospace text-center table-row">
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>password</th>
                        <th>Delete</th>
                    </tr>
                    <tbody class="fs-5 text-center font-monospace">

                    <?php
                    include 'connection.php';
                    $records=mysqli_query($connection, "SELECT * FROM `users`");

                    while($row2=mysqli_fetch_array($records))
                    echo "
                    <tr class='align-middle'>
                        <td class='border border-dark'>$row2[id]</td>
                        <td class='border border-dark'>$row2[username]</td>
                        <td class='border border-dark'>$row2[email]</td>
                        <td class='border border-dark'>$row2[passwords]</td>
                        <td class='border border-dark'>$row2[number]</td>
                        <td class='border border-dark'><a href='delete.php?userdelete=$row2[id]' class='btn btn-danger'>Delete</a></td>
                        
                    </tr>
                    
                    
                    
                    
                    ";



                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

   
</body>
</html>