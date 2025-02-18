

  <?php
include 'header.php';
?>
<body class="bodybooking">
  <?php

  if(!isset($_SESSION['cinema-name'])){
    echo"
    <script>
    alert('please select the movie');
    window.location.href='hollywoodmovies.php';
    </script>
    ";
  }
  ?>


<script>

function checkboxtotal() {
  let seat = [];

  // Get all the checked checkboxes with the name 'seat_chart[]'
  const checkboxes = document.querySelectorAll('input[name="seat_chart[]"]:checked');
  
  // Loop through each checked checkbox and push its value into the 'seat' array
  checkboxes.forEach(function(checkbox) {
    seat.push(checkbox.value);
  });
  
  // Join the array values with a comma and space, and set it in the input field with ID 'seat_dt'
  document.getElementById('seat_dt').value = seat.join(', ');

  // Get the number of selected checkboxes (tickets)
  let st = seat.length;
  document.getElementById("no_ticket").value = st;

  // Check if no seats are selected (unselect all)
  if (st === 0) {
    document.getElementById("ticketprice").value = "";  // Reset ticket price if no seat is selected
    document.getElementById("no_ticket").value = "";  // Reset no_tickets if no seat is selected
    return;
  }

  // Define ticket price based on the categories (R1, R2, Remaining)
  let ticketprice = 0;

seat.forEach(function(seatId) {
    if (seatId.startsWith('R1')) {
        ticketprice += 1800;  // Price for R1 category
    } else if (seatId.startsWith('R2')) {
        ticketprice += 1500;  // Price for R2 category
    } else {
        ticketprice += 1200;  // Price for remaining category
    }
})

   // Set the total ticket price
   document.getElementById("ticketprice").value = ticketprice;
};






</script>


<?php
include "connection.php";


//Disavled seats
// Fetch the movie, date, and time from the session
$movie_name = $_SESSION['movie-name'];
$cinema_date = $_SESSION['cinema-date'];
$cinema_time = $_SESSION['cinema-time'];

if($_SESSION['cinema-name'] == "Nueplex"){
// Query to get the booked seat numbers
$seat_detail_query = mysqli_query($connection, "SELECT seat_numbers FROM nueplex WHERE movie_name = '$movie_name' AND show_date = '$cinema_date' AND show_time = '$cinema_time'");

// Initialize an empty array to store all booked seats
$booked_seats = [];

// Fetch all booked seat numbers (in case there are multiple rows)
while ($row = mysqli_fetch_assoc($seat_detail_query)) {
    // Assuming seat_numbers are stored in a comma-separated format
    $seats = explode(', ', $row['seat_numbers']);  // Split the comma-separated seat numbers
    $booked_seats = array_merge($booked_seats, $seats);  // Merge them into the booked_seats array
}




}

if($_SESSION['cinema-name'] == "Cinepax"){
// Query to get the booked seat numbers
$seat_detail_query = mysqli_query($connection, "SELECT seat_numbers FROM cinepax WHERE movie_name = '$movie_name' AND show_date = '$cinema_date' AND show_time = '$cinema_time'");

// Initialize an empty array to store all booked seats
$booked_seats = [];

// Fetch all booked seat numbers (in case there are multiple rows)
while ($row = mysqli_fetch_assoc($seat_detail_query)) {
    // Assuming seat_numbers are stored in a comma-separated format
    $seats = explode(', ', $row['seat_numbers']);  // Split the comma-separated seat numbers
    $booked_seats = array_merge($booked_seats, $seats);  // Merge them into the booked_seats array
}




}

if($_SESSION['cinema-name'] == "AtriumMall"){
// Query to get the booked seat numbers
$seat_detail_query = mysqli_query($connection, "SELECT seat_numbers FROM atrium_mall WHERE movie_name = '$movie_name' AND show_date = '$cinema_date' AND show_time = '$cinema_time'");

// Initialize an empty array to store all booked seats
$booked_seats = [];

// Fetch all booked seat numbers (in case there are multiple rows)
while ($row = mysqli_fetch_assoc($seat_detail_query)) {
    // Assuming seat_numbers are stored in a comma-separated format
    $seats = explode(', ', $row['seat_numbers']);  // Split the comma-separated seat numbers
    $booked_seats = array_merge($booked_seats, $seats);  // Merge them into the booked_seats array
}




}

if($_SESSION['cinema-name'] == "Capri"){
// Query to get the booked seat numbers
$seat_detail_query = mysqli_query($connection, "SELECT seat_numbers FROM capri WHERE movie_name = '$movie_name' AND show_date = '$cinema_date' AND show_time = '$cinema_time'");

// Initialize an empty array to store all booked seats
$booked_seats = [];

// Fetch all booked seat numbers (in case there are multiple rows)
while ($row = mysqli_fetch_assoc($seat_detail_query)) {
    // Assuming seat_numbers are stored in a comma-separated format
    $seats = explode(', ', $row['seat_numbers']);  // Split the comma-separated seat numbers
    $booked_seats = array_merge($booked_seats, $seats);  // Merge them into the booked_seats array
};


}

if($_SESSION['cinema-name'] == "CinegoldPlex"){
// Query to get the booked seat numbers
include "connection.php";
$seat_detail_query = mysqli_query($connection, "SELECT seat_numbers FROM cinegold_plex WHERE movie_name = '$movie_name' AND show_date = '$cinema_date' AND show_time = '$cinema_time'");

// Initialize an empty array to store all booked seats
$booked_seats = [];

// Fetch all booked seat numbers (in case there are multiple rows)
while ($row = mysqli_fetch_assoc($seat_detail_query)) {
    // Assuming seat_numbers are stored in a comma-separated format
    $seats = explode(', ', $row['seat_numbers']);  // Split the comma-separated seat numbers
    $booked_seats = array_merge($booked_seats, $seats);  // Merge them into the booked_seats array
}

}

?>

<div class="bodybooking py-5">
    <section class="">
        <h1 class="text-center">Book your desired seats</h1>

        <div class="container">
            <div class="row d-flex gap-5 " style="colum">
                <div class="col-md-7">
                  <div id="seat-map" id="seatcharts">
                    <h3 class="text-center mt-5">Select seats</h3>
                    <hr>
                    <label class="text-center screen">SCREEN</label>
                    <br><br><br>
                    <div class="tickets-container row justify-content-between mb-4">
                      <h2 class="" id="seat_chart">Ticket price</h2>
                        <div class="col-md-6 categories">
                          <h5>R1 Category = Rs.1800</h5>
                          <h5>R2 Category = Rs.1500</h5>
                          <h5>Remaining Category = Rs.1200</h5>
                        </div>
                        <div class="col-md-5 remaining-seats">
                          <div class="booked-container d-flex align-items-center">
                            <h5>Booked seats</h5>
                            <div class="booked-color"></div>
                          </div>
                          <div class="booked-container d-flex align-items-center">
                            <h5>Available seats</h5>
                            <div class="available-color"></div>
                          </div>
                        </div>
                      </div>
                    <div class="row justify-content-center">
                    <?php
                        // Loop through rows and seats
                        for ($i = 1; $i <= 7; $i++) {
                            for ($j = 1; $j <= 10; $j++) {
                                $seat_id = "R$i" . "S$j"; // Seat identifier like R1S1, R1S2, etc.
                                
                                // Check if the seat is booked
                                $is_booked = in_array($seat_id, $booked_seats);

                                // If booked, disable the checkbox
                                $disabled = $is_booked ? 'disabled' : '';
                    
                                // Output the seat checkbox
                    ?>
                              <label for="<?php echo $seat_id ?>" class="col-md-2 mt-2 mb-2 ms-2 me-2 py-3 text-center tickets">
                                        <input type="checkbox" id="<?php echo $seat_id ?>" value="<?php echo $seat_id ?>" name="seat_chart[]" class="col-md-2 mb-2" onClick="checkboxtotal()" <?php echo $disabled ?> /><?php echo $seat_id ?></label>
                              <?php }} ?>
                     </div>
                        </div>
                </div>
                <div class="col-md-4 mt-5"><form action="./printtickets.php" method="post" onsubmit="return validation()" class="mt-5">
                    <p class="text-center">Please fill this form to book your tickets</p>
                    <hr>
                    <div class="mb-3">
                        <label for="username" class="form-label">Cinema name</label>
                        <input type="text" name="cinema-name" class="form-control" id="username" required readonly value="<?php echo $_SESSION['cinema-name'];?>">
                       
                      </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Customer id</label>
                        <input type="number" name="customer-id" class="form-control" id="username" required readonly value=<?php echo $_SESSION['userid'];?>>
                       
                      </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Customer name</label>
                        <input type="text" name="customer-name" class="form-control" id="customername" required readonly value="<?php echo $_SESSION['users'];?>">
                       
                      </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Movie name</label>
                        <input type="text" name="movie-name" class="form-control" id="bookmoviename" required readonly value="<?php echo $_SESSION['movie-name'];?>">
                       
                      </div>
                    
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No. of tickets</label>
                        <input type="number" name="ticket-quantity" id="no_ticket" class="form-control fill-input" readonly required>
                        <p class="text-danger" id="error"></p>
                      </div>
                     
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Seat details</label>
                        <input type="text" name="seat-number" class="form-control fill-input" id="seat_dt" readonly required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Ticket price</label>
                        <input type="text" name="ticket-price" class="form-control fill-input" id="ticketprice" readonly required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Show date</label>
                        <input type="text" name="show-date" class="form-control" id="exampleInputPassword1" value="<?php echo $_SESSION['cinema-date'];?>" required readonly>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Show time</label>
                        <input type="text" name="show-time" class="form-control" id="exampleInputPassword1" value="<?php echo $_SESSION['cinema-time'];?>" required readonly>
                      </div>
                    
                     
                      <button type="submit" name="complete-booking" class="btn nav-login loginbtn" id="submitBtn">Confirm booking</button></div>
            </div>
        </div>
        
        </form>
    </section>
    </div>

    <?php
    include "footer.php";
    ?>
    <script>
      // Assuming you have the 'submitBtn' as the form submit button

        function validation(){
          let no_of_tickets = document.getElementById("no_ticket").value;
          if(no_of_tickets == 0){
            document.getElementById("error").innerHTML = "Please select the seats";
          return false;

          }
        }


    </script>
</body>
</html>


