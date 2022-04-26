<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="../assets/logo.png" rel="icon">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link href="../css/index.css" rel="stylesheet">
     <link href="../css/booking.css" rel="stylesheet">
     <link href="../css/global.css" rel="stylesheet">
     <title>Travo - Booking</title>
</head>
<body>

          <!-- navbar starts  -->
          <nav class="navbar">
          <logo class="logo">Travo</logo>

          <section class="nav-links">
               <a href="../index.php">Home</a>
               <a href="../pages/aboutus.php">About Us</a>
               <a href="../pages/packages.php">Packages</a>
               <a href="../pages/booking.php">Booking</a>
          </section>

          <div id="menu-btn" class="fas fa-bars"></div>
     </nav>
     <!-- navbar ends  -->


          <!-- header starts  -->
          <header class="header">
          <div class="banner" style="background: url(../assets/banner3.jpeg) no-repeat;">
               <div class="content">
                    <h1>Book Now!</h1>
               </div>     
          </div>    
     </header>
     <!-- header ends  -->

     <section class="booking">

<h1 class="heading-title">book your trip!</h1>

<form action="process.php" method="POST" class="book-form">

   <div class="flex">
      <div class="inputBox">
         <span>Name :</span>
         <input type="text" placeholder="Enter Your Name" name="name">
      </div>
      <div class="inputBox">
         <span>Email :</span>
         <input type="email" placeholder="Enter Your Email" name="email">
      </div>
      <div class="inputBox">
         <span>Phone :</span>
         <input type="number" placeholder="Enter Your Number" name="phone">
      </div>
      <div class="inputBox">
         <span>Address :</span>
         <input type="text" placeholder="Enter Your Address" name="address">
      </div>
      <div class="inputBox">
         <span>Where to :</span>
         <input type="text" placeholder="Place You Want To Visit" name="location">
      </div>
      <div class="inputBox">
         <span>How many :</span>
         <input type="number" placeholder="Number of Guests" name="guests">
      </div>
      <div class="inputBox">
         <span>Arrival :</span>
         <input type="date" name="arrival">
      </div>
      <div class="inputBox">
         <span>Leaving :</span>
         <input type="date" name="leaving">
      </div>
   </div>

   <input type="submit" value="submit" class="btn" name="send">

</form>

</section>



          <!-- footer starts  -->
          <section class="footer">
          <div class="box-container">

               <div class="box">  
                    <h3>Quick Links</h3>
                    <a href="index.php"> <i class="fas fa-angle-right"></i> Home</a>
                    <a href="pages/about.php"> <i class="fas fa-angle-right"></i> About Us</a>
                    <a href="pages/packages.php"> <i class="fas fa-angle-right"></i> Packages</a>
                    <a href="pages/booking.php"> <i class="fas fa-angle-right"></i> Booking</a>
                    <a href="pages/faq.php"> <i class="fas fa-angle-right"></i> FAQs</a>
               </div>


               <div class="box">
                    <h3>Extra Links</h3>
                    <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions </a>
                    <a href="#"> <i class="fas fa-angle-right"></i> About Us</a>
                    <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
                    <a href="#"> <i class="fas fa-angle-right"></i> Terms of Use</a>
               </div>

               <div class="box">
                    <h3>Contact Info</h3>
                    <a href="#"> <i class="fas fa-phone"></i> +91 123-456-7890</a>
                    <a href="#"> <i class="fas fa-phone"></i> +1 0910-001-002  </a>
                    <a href="#"> <i class="fas fa-envelope"></i> travo@info.com </a>
                    <a href="#"> <i class="fas fa-map"></i> 42 Bleecker's Street, Delhi</a>
               </div>

               <div class="box">
                    <h3>Social Links</h3>
                    <a href="#"> <i class="fa-brands fa-twitter"></i> Twitter</a>
                    <a href="#"> <i class="fa-brands fa-facebook"></i> Facebook  </a>
                    <a href="#"> <i class="fa-brands fa-youtube"></i> Youtube </a>
                    <a href="#"> <i class="fa-brands fa-instagram"></i> Instagram </a>
               </div>
          </div>

          <div class="credits">Made by <span>Muhammad Fardin</span> | all rights reserved</div>
     </section>
     
</body>
<script src="../js/script.js"></script>
</html>