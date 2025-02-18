<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../admin/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="../admin/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>



    <style>
     body{
      position: relative;
      
       
     }
     /* .all-container{
        position: absolute;
        top:50%;
        left:50%;
        transform:translate(-50%, -50%);
        background-color:blue !important;
        margin:0%;
     } */
        #ticket-container {
            margin-top:20px;
            width:600px;
            box-shadow: 2px 2px 2px 4px;
            padding: 5px;
            padding-bottom:2px;
            display: flex;
            margin: auto;
           
        }

        

        .left-side {
            padding:3px 10px;
            text-align: center;
           
            
            border-right: 2px dotted black;
        }

        .left-header,.right-header {
            color: white;
           font-size: 1.4rem;
           background-color: red;
           height: 40px;
           margin-bottom: 5px;
           
           
       }

       

        .ticket-left-body p {
            margin: 0%;
            font-size: 0.9rem;
          
        }
        /* .ticket-left-body img{
            transform: rotatey(10deg);
        } */
        .right-side {
           
            width: 100%;
            margin:0 auto;

            padding: 3px 15px;
           
        }
        .right-header{
            width: 100%; 
        }
        .right-header h3{
            text-align: center;
            
            
       }
       .ticket-right-body{
        padding: 5px;
        padding-bottom:2px
       }
       .ticket-right-body p{
        
            margin: 0%;
            font-size: 0.9rem;
          
        
       }.column-l{
        width: 50%;
       }
       .column-r{
        
        display:flex;
        flex-direction: column;
        
      justify-content:space-between ;
        width: 50%;
       }
       .barcode-div{
        width: 120px;
        
        
       }
       .seatvisible {
        font-size: 1.2rem !important;
    }
       /* @media screen and (max-width:600px) and (min-width:1px) {
        #ticket-container {
        
      left:-40%;
      
        
        transform:rotatez(90deg);
        
    }
    
    } */
    @media screen and (max-width: 600px) {
    #ticket-container {
        width: 90%;
       
        box-shadow: 1px 1px 2px 3px;
    }

    .left-side, .right-side {
        padding: 2px 5px;
    }

    .left-header, .right-header {
        font-size: 1.2rem;
        height: 35px;
    }

    .ticket-left-body p, .ticket-right-body p {
        font-size: 0.7rem;
    }
    .barcode-div{
        padding-left: 40px !important;
    }
    .barcode-div img {
        width: 80px;

    }

    .seatvisible {
        font-size: 0.8rem !important;
    }
}
    </style>
</head>

<body>
 
 <?php
session_start();

if(!isset($_SESSION['cinema-name'])){
    echo "

    <script>
    alert('please select the movie');
    window.location.href='index.php';
   

    </script>

    ";
}






if(isset($_POST['complete-booking'])){
    include 'connection.php';
  
    
    $cinema_name = $_POST['cinema-name'];
    $customer_id = $_POST["customer-id"];
    $customer_name = $_POST["customer-name"];
    $movie_name = $_POST["movie-name"];
    $ticket_quantity = $_POST["ticket-quantity"];
    $ticket_price = $_POST["ticket-price"];
    $seat_number = $_POST["seat-number"];
    $show_date = $_POST["show-date"];
    $show_time = $_POST["show-time"];



    if($cinema_name === "Cinepax"){
        $dupdata=mysqli_query($connection,"SELECT * FROM `cinepax` WHERE seat_numbers = '$seat_number' and movie_name = '$movie_name' and show_date = '$show_date' and show_time = '$show_time'");
        if(mysqli_num_rows($dupdata)){
            echo "
        
        <script>
        
        alert('Your tickets already booked please download your ticket');
        
        
        </script>
        
        ";
        }else{
        mysqli_query($connection, "INSERT INTO `cinepax`(`customer_id`, `customer_name`, `movie_name`, `ticket_quantity`, `ticket_price`, `seat_numbers`, `show_date`, `show_time`) VALUES ('$customer_id','$customer_name','$movie_name','$ticket_quantity','$ticket_price','$seat_number','$show_date','$show_time')");
        }
    }
 
   else if($cinema_name === "Nueplex"){
       
    $dupdata=mysqli_query($connection,"SELECT * FROM `nueplex` WHERE seat_numbers = '$seat_number' and movie_name = '$movie_name' and show_date = '$show_date' and show_time = '$show_time'");
    if(mysqli_num_rows($dupdata)){
        echo "
    
    <script>
    
    alert('Your tickets already booked please download your ticket');
    
    
    </script>
    
    ";
    }else{
        mysqli_query($connection, "INSERT INTO `nueplex`(`customer_id`, `customer_name`, `movie_name`, `ticket_quantity`, `ticket_price`, `seat_numbers`, `show_date`, `show_time`) VALUES ('$customer_id','$customer_name','$movie_name','$ticket_quantity','$ticket_price','$seat_number','$show_date','$show_time')");
     }
    }

    else if ($cinema_name === "Capri") {
        $dupdata=mysqli_query($connection,"SELECT * FROM `capri` WHERE seat_numbers = '$seat_number' and movie_name = '$movie_name' and show_date = '$show_date' and show_time = '$show_time'");
        if(mysqli_num_rows($dupdata)){
            echo "
        
        <script>
        
        alert('Your tickets already booked please download your ticket');
        
        
        </script>
        
        ";
        }else{
        mysqli_query($connection, "INSERT INTO `capri`(`customer_id`, `customer_name`, `movie_name`, `ticket_quantity`, `ticket_price`, `seat_numbers`, `show_date`, `show_time`) VALUES ('$customer_id','$customer_name','$movie_name','$ticket_quantity','$ticket_price','$seat_number','$show_date','$show_time')");
        }
    }
    else if ($cinema_name === "AtriumMall") {
        $dupdata=mysqli_query($connection,"SELECT * FROM `atrium_mall` WHERE seat_numbers = '$seat_number' and movie_name = '$movie_name' and show_date = '$show_date' and show_time = '$show_time'");
        if(mysqli_num_rows($dupdata)){
            echo "
        
        <script>
        
        alert('Your tickets already booked please download your ticket');
        
        
        </script>
        
        ";
        }else{        
        mysqli_query($connection, "INSERT INTO `atrium_mall`(`customer_id`, `customer_name`, `movie_name`, `ticket_quantity`, `ticket_price`, `seat_numbers`, `show_date`, `show_time`) VALUES ('$customer_id','$customer_name','$movie_name','$ticket_quantity','$ticket_price','$seat_number','$show_date','$show_time')");
       }
    }

    else if ($cinema_name === "CinegoldPlex") {
        $dupdata=mysqli_query($connection,"SELECT * FROM `cinegold_plex` WHERE seat_numbers = '$seat_number' and movie_name = '$movie_name' and show_date = '$show_date' and show_time = '$show_time'");
        if(mysqli_num_rows($dupdata)){
            echo "
        
        <script>
        
        alert('Your tickets already booked please download your ticket');
        
        
        </script>
        
        ";
        }else{
        mysqli_query($connection, "INSERT INTO `cinegold_plex`(`customer_id`, `customer_name`, `movie_name`, `ticket_quantity`, `ticket_price`, `seat_numbers`, `show_date`, `show_time`) VALUES ('$customer_id','$customer_name','$movie_name','$ticket_quantity','$ticket_price','$seat_number','$show_date','$show_time')");
        }
    }
}



    else{
        echo "

        <script>
        alert('booking not successfull $cinema_name');
        </script>

        ";
    }








?> 
<div class="all-container">
    <h1 class="text-center mb-3 text-white mt-5">Download your ticket</h1>
    <!-- Add Download Button -->
    <div class="text-center mt-4">
        <button onclick="downloadAsImage()" class="btn nav-login text-white mb-4">Click here to Download</button>
    </div>
        <div id="ticket-container" class= "bg-warning">
            <div class="left-side">
                <div class="left-header px-2">
                <h3><?php echo $cinema_name; ?></h3>
                </div>
                <div class="ticket-left-body">

                    <img src="./userimage/ticket-logo.png" width="40px" alt="">
                    <p>Customer Id: <?php echo $customer_id; ?></p>
                    <p><?php echo $seat_number; ?></p>
                    <p><?php echo $show_date; ?></p>
                    <p class="mb-1"><?php echo $show_time; ?></p>
                </div>
            
            </div>
            <div class="right-side">
                <div class="right-header">
                    <h3>Movie ticket</h3>
                </div>
                <div class="ticket-right-body d-flex">
                    <div class="column-l">
                        <p>Customer Id: <?php echo $customer_id; ?></p>
                        <p><?php echo $movie_name; ?></p>
                        <p><?php echo $show_date; ?></p>
                        <p><?php echo $show_time; ?></p>
                    </div>
                    <div class="column-r text-center">
                        <p class="seatvisible" ><?php echo $seat_number; ?></p>
                        
                    </div>
                </div>
                <div class="barcode-div ms-auto">
                        <img src="./userimage/ticket-barcode.png" alt="" width="120px" class=""></div>
            </div>


        </div>
</div>


<script>
   function downloadAsImage() {
    if (typeof html2canvas === 'undefined') {
        console.error('html2canvas is not loaded properly.');
        return;
    }

    const ticketElement = document.getElementById("ticket-container");

    html2canvas(ticketElement, {
        width: 600,  // Optional: Set the width of the canvas
        backgroundColor: null, // Optional: Set the background to transparent
        willReadFrequently: true // Optional: Set the willReadFrequently flag for performance optimization
    }).then(function(canvas) {
        const image = canvas.toDataURL("image/png");
        const link = document.createElement('a');
        link.href = image;
        link.download = 'ticket.png'; // File name for download
        link.click();

          // After the download, unset the session and redirect to index.php
        // Trigger an AJAX request to unset session and redirect
        unsetSessionAndRedirect();

    }).catch(function(error) {
        console.error("Error in capturing the ticket as an image: ", error);
    });
    
   
 }

 function unsetSessionAndRedirect() {
    // Send an AJAX request to unset the session variable
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "unset_session.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Redirect after unsetting session
            window.location.href = "index.php";
        }
    };
    xhr.send();
}


</script>

</body>

</html>