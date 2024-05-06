<?php

class Page {
    public function renderNavbar() {
        
        echo '
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">iFirstAid</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                </div>
            </div>
        </nav>
        ';
    }


    public function renderFooter() {
       
        echo '
        <footer class="bg-dark text-white text-center py-3">
            <div class="container">
                <p>&copy; 2024 iFirstAid. All Rights Reserved.Bangladesh Health Call Centre 16263.</p>
                <p>Contact: 688 Beribadh Road Mohammadpur Dhaka - 1207, Bangladesh</p>
                <p>Email: tasfia.tabassum.cse@ulab.edu.bd</p>
                <p>nafisa.mahira.cse@ulab.edu.bd</p>
            </div>
        </footer>
        ';
    }
}


class CoursePage extends Page {
    public function renderCourseSection() {
        
        echo '
        <section id="course" class="py-5 bg-dark">
            <div class="container mt-5" style="margin: 215px 48px;">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <div class="content-box">
                            <h2>Choose Your Knowledge Level</h2>
                            <div class="btn-group mt-4" role="group" aria-label="Knowledge Level Buttons">
                                <a class="btn btn-primary mr-2" href="beginner.php?from=course2">Beginner</a>
                                
                            </div>
                            <p>You Will Be Able To Take Advanced Course After Completing Beginner course</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        ';
    }
}




class beginnerPage extends Page {

    public function renderFooter() {
        
        echo '
        <section id="beginner" class="py-5 bg-dark">
  <div class="container mt-5" style="margin: 358px 80px;">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center">
        <div class="content-box">
        

 <h1 class="text-center">Beginner Lessons</h1>
       <a class="btn btn-primary mr-2" href="beginner.lesson1.php">Lesson 1</a>
       <a class="btn btn-primary mr-2" href="beginner.lesson2.php">Lesson 2</a>
       <a class="btn btn-primary mr-2" href="beginner.lesson3.php">Lesson 3</a>
       <a class="btn btn-primary mr-2" href="beginner.final.quiz.php">Final Quiz</a>
       
      
    </div>
  </div>
  
  </section>
        ';
    }

     public function renderAJAX() {
       
        echo '
         <div class="container mt-5">
            <div class="content-box">
                <button id="showXmlButton" class="btn btn-primary">Homemade First-Aid Recipes</button>
                <div id="xmlContent" class="mt-3"></div>
            </div>
        </div>
        ';
    }
}

?>





