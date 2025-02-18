<?php
include "header.php";

?>
   <div class="container">
    <h1 class="text-center mt-5 mb-3">CONTACT US</h1>
<div class="form-containers row py-3 mb-5 justify-content-center gap-5 align-items-center">
  <div class="col-lg-5">
<form action="queryinsert.php" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="contactname" placeholder="Enter your name" required>
             
            </div>
           
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="contactemail" placeholder="Enter your email" required>
             
            </div>
            <div class="mb-3">
              <label for="number" class="form-label">Number</label>
              <input type="tel" class="form-control" id="number" name="contactnumber" placeholder="Enter your number" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Message</label>
              <textarea class="form-control" id="exampleInputPassword1" name="contactmessage" placeholder="Enter your message"></textarea>
            </div>
           
          
            <button name="contactsubmit" type="submit" class="btn nav-login registerbtn">Submit</button>
          </form>
    </div>
    <div class="col-lg-6 map p-3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115862.70022911215!2d67.02084581154872!3d24.839610301996892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33ca8c020efe5%3A0x6d7ad92553370cc6!2sNueplex%20Cinemas%20-%20DHA!5e0!3m2!1sen!2s!4v1738573958582!5m2!1sen!2s" width="80%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="contact-info mt-4">
                <h2>Our contact info</h2>
                <p class="contact-info-para"><i class="bi-solid bi-phone-fill"></i>0324-4809283</p>
                <p class="contact-info-para"><i class="bi-solid bi-printer-fill"></i>021-3455839</p>
                <p class="contact-info-para"><a href="mailto:info@movieticket"></a>
                    <i class="bi bi-envelope-fill"></i>
                    infomovieticket@gmail.com</a>
                </p >
                <p class="contact-info-para"><i class="bi-solid bi-house-fill"></i><a
                        href="https://www.google.com/maps/place/Nueplex+Cinemas+-+DHA/@24.8396103,67.0208458,12z/data=!4m10!1m2!2m1!1sNUEPLEX+Cinemas!3m6!1s0x3eb33ca8c020efe5:0x6d7ad92553370cc6!8m2!3d24.7793893!4d67.0897263!15sCg9OVUVQTEVYIENpbmVtYXMiA4gBAVoRIg9udWVwbGV4IGNpbmVtYXOSAQ1tb3ZpZV90aGVhdGVy4AEA!16s%2Fm%2F0zdq89_?entry=ttu&g_ep=EgoyMDI1MDEyOS4xIKXMDSoASAFQAw%3D%3D"></a>Movie booking, Main Rashid Minhas Rd, Askari IV Askari 4, Karachi, Karachi City, Sindh 75300, Pakistan</p>
            </div>
    </div>
</div>
</div>
<?php
include "footer.php";
?>

</body>
</html>