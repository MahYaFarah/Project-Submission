<?php

include 'config.php';
include 'User.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $user = new User($row['name'], $row['email'], $row['password'], $row['image']);
      $_SESSION['user'] = $user; 
      header('location:home.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iFirstAid</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
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

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">iFirstAid</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="dp21.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="course.html">Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        

        </ul>
      </div>
    </div>
  </nav>

 
  <section id="home" class="py-5" style="background-image: url('abcdefg.jpg'); background-size: cover; background-position: center;">
    <div class="container text-center">
      <h1>Welcome to iFirstAid</h1>
      <p class="lead">Life saver in your hand</p>
    </div>
  </section>
   
  <div class="form-container py-5 bg-dark">

<div class="container mt-5" style="margin: 158px 48px;">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center">
        <div class="content-box">
   <form action="" method="post" enctype="multipart/form-data">
      <h3>L O G I N </h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="Enter email" class="box" required>
      <input type="password" name="password" placeholder="Enter password" class="box" required>
      <input type="submit" name="submit" value="Login" class="btn">
      <p>Don't have an account? <a href="register.php">Register now</a></p>
   </form>
   </div>
      </div>
    </div>
  </div>
</div>


<footer class="bg-dark text-white text-center py-3">
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

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="script.js"></script>

</body>
</html>
