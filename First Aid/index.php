<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iFirstAid</title>
   <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />


<style>
   
   /* .section-with-bg {
      background-image: url('Crysta.jpg');
      background-size: cover;
      background-position: center;
    }*/


.content-box {
  background-color: white;
  padding: 20px;
  border-radius: 10px;

}
  </style>




</head>
<body>

<div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

  

  

 
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="dp21.html">
            <span>
              iFirstAid
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              
              
              <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="home.php">Profile</a>
          </li>
 <li class="nav-item">
<a class="nav-link" href="course2.php">Course</a>
</li>
          <li class="nav-item">
            <a class="nav-link" href="contact2.php">Contact</a>
          </li>
          
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      iFirstAid
                    </h1>
                    <p>
                      iFirstAid is your comprehensive online resource for first aid information and guidance. We aim to provide accurate and reliable information to help you respond effectively in emergency situations.
                    </p>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          
                
    </section>
    <!-- end slider section -->
  </div>



  <div class="container">
        
        <a href="logout2.php" class="btn btn-warning">Logout</a>
    </div>

  <!-- Footer -->
  <footer class="bg-light text-black text-center py-3">
    <div class="container">
    <p>&copy;  2024 iFirstAid. All Rights Reserved.Bangladesh Health Call Centre 16263.</p>
      <p>Contact:
        688 Beribadh Road
        Mohammadpur
        Dhaka - 1207, Bangladesh</p>
        <p>Email:
        tasfia.tabassum.cse@ulab.edu.bd</p>
        <p>
        nafisa.mahira.cse@ulab.edu.bd </p>
    </div>
  </footer>

    <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>

</body>
</html>



