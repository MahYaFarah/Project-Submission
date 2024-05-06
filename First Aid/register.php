<?php

include 'config.php';
include 'User.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $user = new User($name, $email, $pass, $image); 

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'registration failed!';
         }
      }
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

  <section id="register" class="py-5 bg-dark">
  <div class="container section-content" style="margin: 35px 54px;">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="content-box">
          <h2 class="text-center">Register</h2>
          <p class="text-center">Register to access exclusive content and features.</p>
          <form id="registration-form" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Username" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
            </div>
            <div class="form-group">
              <input type="file" name="image" class="form-control" accept="image/jpg, image/jpeg, image/png">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
          </form>
          <div>
            <p class="text-center">Already Registered? <a href="login.php">Login Here</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



  
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
