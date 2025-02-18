<?php
include "header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us - Movie Ticket Booking</title>
    <style>
        /* Reset some basic styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
            color: #333;
            overflow-x: hidden;
        }
/* 
        header {
            background: linear-gradient(135deg, #f77f00, #d1004f);
            color: white;
            padding: 80px 20px;
            text-align: center;
            position: relative;
            z-index: 10;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            animation: fadeInHeader 1.5s ease-out;
        } */

        header h1 {
            font-size: 4rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            animation: fadeIn 2s ease-out;
        }

        .section {
            max-width: 1200px;
            margin: 50px auto;
            padding: 30px;
            box-shadow: 2px 2px 8px 2px white;
            background-color: rgba(0, 0, 0, 0.534);
            color:white;
            border-radius: 20px;
          
            animation: fadeInSection 1.5s ease-out;
        }

        .section h2 {
            font-size: 2.5rem;
            font-weight: 600;
         
            text-align: center;
            margin-bottom: 20px;
        }

        .section p {
            font-size: 1.1rem;
            line-height: 1.8;
           
            text-align: center;
            margin-bottom: 40px;
        }

        /* Content Layout with Flexbox */
        .about-us-section {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            
            gap: 30px;
            margin-top: 40px;
            animation: fadeInUp 2s ease-out;
        }

        .about-us-section div {
            
            background-image: linear-gradient(to bottom right,black, grey);
            color:white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: all 0.3s ease;
        }

        .about-us-section div:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .about-us-section h3 {
            font-size: 1.7rem;
            font-weight: 600;
            
            margin-bottom: 15px;
        }

        .about-us-section p,
        .about-us-section ul {
          
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 10px;
        }

        .about-us-section ul {
            list-style: none;
            padding: 0;
        }

        .about-us-section ul li {
            margin-bottom: 10px;
            font-weight: 500;
        }

        /* Image hover effect */
        .about-us-section img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .about-us-section img:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* Cinema continer */
        .c-logo-container{
            /* background-color: rgba(0, 0, 0, 0.2); */
        }
        .c-logo-container div{
            width:130px;
            height:120px;
            border:1px solid white;
            border-radius:8px;
        }
        .c-logo-container div img{
           
            border-radius:12px;
        }
        .accordion-header{
            margin-bottom:0% !important;
        }
        .accordion-button{
            background-image: linear-gradient(to bottom right,black, grey);
            color:white;
            padding:20px 15px;
        }
        .accordion-button:hover{
            background-image: linear-gradient(to bottom right,black, black);
        }
        button:focus{
     outline: none;
 }
 .accordion-button:focus{
    border-color:white;
    box-shadow:none;
 }
 
.accordion-button:not(.collapsed){
    color:white;
    background-image: linear-gradient(to bottom right,black, black);
}
.accordion-button:not(.collapsed)::after{
    background-image:url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org…0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e) !important;
}
.accordion-body{
    color:black;
    text-align:left;
}
        

      

        /* Advanced Animations */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes fadeInHeader {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInSection {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInFooter {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

    </style>
</head>
<body>

    
        
    

<div class="section">
    <h2>About us</h2>
    <p>At Movie Ticket Booking, we are committed to providing a seamless and enjoyable experience for movie enthusiasts. We offer the easiest way to book tickets online with the latest movie schedules, amazing offers, and an intuitive platform.</p>

    <div class="about-us-section">
        <div>
            <h3>Our Vision</h3>
            <p>Our goal is to be the leading platform for movie lovers by offering a hassle-free and fast booking process for your favorite movies.</p>
        </div>
        <div>
            <h3>Our Values</h3>
            <p>we believe in delivering a hassle-free movie booking experience with a focus on convenience and trust. Our values center around ensuring accessibility, offering great customer service, and providing the best movie choices, so every visit feels special.</p>
        </div>
        <div>
            <h3>Our Team</h3>
            <p>Our team consists of developers, customer support specialists, and film buffs all working together to ensure you have the best movie booking experience.</p>
        </div>
    </div>
        
    <h2 class="mt-5 text-center">Cinemas we have</h2>
    <div class="c-logo-container d-flex justify-content-center flex-wrap py-3 gap-5 mb-5">

        <div class="nueplex">
        <img src="./userimage/nuplex-logo.jfif" alt="" width="100%" height="100%">
        </div>

        <div class="cinepax">
        <img src="./userimage/cinepax-logo.png" alt="" width="100%" height="100%">
        </div>

        <div class="cinegoldplex">
        <img src="./userimage/cinegoldplex-logo.jfif" alt="" width="100%" height="100%">
        </div>
        <div class="capri">
        <img src="./userimage/capri-logo.jpg" alt="" width="100%" height="100%">
        </div>
        <div class="artrium mall">
        <img src="./userimage/atriummall-logo.jfif" alt="" width="100%" height="100%">
        </div>
    </div>
    <h2 class="text-center">Frequently asked question</h2>
    <div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        1. How do I book tickets on the website?
        </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        Simply browse through the movie listings, select your preferred movie, showtime, and theater. Once you’ve chosen, enter your details, select the number of tickets, and proceed to payment to complete your booking.
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        2. How do I get my tickets after booking?
        </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        Once your booking is confirmed, you can download your ticket from website. You can either show this e-ticket on your phone or print it for entry.
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        3. Is it possible to select my seat?
        
        </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        Yes, you can choose your preferred seat from the available options during the booking process, depending on the theater’s seating layout.
        </div>
    </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        4. Can I check the show timings for any movie?
        
        </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        Yes, you can easily view the show timings for any movie by selecting the movie you’re interested in and checking the available showtimes for your preferred date and theater.
        </div>
    </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        5. What happens if the movie is canceled or rescheduled?
        
        </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        In case of a cancellation or rescheduling, you will be notified, and you will have the option to reschedule or request a refund for your tickets.
        </div>
    </div>
    </div>
        </div>
    <div class="mx-auto text-center mt-5">
            <a href="hollywoodmovies.php" class="btn nav-login">Book Your Ticket Now</a>
    </div>
</div>

    <?php
include "footer.php";

?>

</body>
</html>
