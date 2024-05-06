<?php
class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="user_db";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function contact_us($data){
        $fname=$data['name'];
        $lname=$data['surname'];
        $email=$data['email'];
        $phone=$data['phone'];
        $message=$data['message'];
        $q="insert into contact_us set first_name='$fname', last_name='$lname', email='$email', phone='$phone', message='$message'";
       $data= $this->mysqli->query($q);
       if($data==true){
           return true;
       } else {
           return false;
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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="course2.php">Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact2.php">Contact</a>
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


<section id="contact" class="py-5 bg-dark d-flex align-items-center">
  <div class="container section-content" style="margin: 35px 54px;">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="content-box">
          <h2 class="text-center">Contact Us</h2>
          <p class="text-center">Have a question or feedback? We'd love to hear from you!</p>
          <form id="contact-form" method="post" role="form">
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Your First Name" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="surname" placeholder="Your Last Name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name="phone" placeholder="Your Phone">
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" placeholder="Your Message" rows="4" required></textarea>
            </div>
            <button type="submit" name="ok" class="btn btn-primary btn-block">Send Message</button>
          </form>
          <?php
if(isset($_POST['ok'])){
    $obj = new Contact();
    $res = $obj->contact_us($_POST);
    if($res == true){
        echo "<script>alert('Message Successfully Submitted. Thank you')</script>";
    } else {
        echo "<script>alert('Something went wrong!!')</script>";
    }
}
?>
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