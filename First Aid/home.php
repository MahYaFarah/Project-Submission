<?php

include 'config.php';
include 'User.php'; 
session_start();
$user = $_SESSION['user']; 

if(!$user){
   header('location:login.php');
   exit();
}

if(isset($_GET['logout'])){
   session_destroy();
   header('location:login.php');
   exit(); 
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
        

        </ul>
      </div>
    </div>
  </nav>
   
  <div class="form-container py-5 bg-dark">

<div class="container mt-5" style="margin: 70px 48px;">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center">
        <div class="content-box">
   <div class="profile">
      <img src="<?php echo ($user->getImage() == '') ? 'images/default-avatar.png' : 'uploaded_img/'.$user->getImage(); ?>"width="500" height="450">
      <h3><?php echo $user->getName(); ?></h3>
      
      <a href="home.php?logout" class="delete-btn">Logout</a>
      <p>New <a href="login.php">login</a> or <a href="register.php">register</a></p>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Footer -->
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
