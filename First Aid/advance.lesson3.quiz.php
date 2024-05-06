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
            border-radius: 20px;
        }

        .btn-group {
            display: flex;
            justify-content: center;
        }

        .btn-outline-primary {
            color: #007bff;
            border-color: #007bff;
        }

        .btn-outline-primary:hover {
            background-color: #007bff;
            color: #fff;
        }

        .btn-outline-primary:not(:last-child) {
            margin-right: 20px;
        }

        .correct {
            background-color: grey;
        }

        .wrong {
            background-color: grey;
        }

        .correct-answers {
            margin-top: 20px;
        }

        .correct-answers ul {
            list-style-type: none;
            padding: 0;
        }

        .correct-answers li {
            margin-bottom: 5px;
        }
    </style>

</head>

<body>

    
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

   
    <section id="home" class="py-5"
        style="background-image: url('abcdefg.jpg'); background-size: cover; background-position: center;">
        <div class="container text-center">
            <h1>Welcome to iFirstAid</h1>
            <p class="lead">Life saver in your hand</p>
        </div>
    </section>

    <section id="beginner" class="py-5 bg-dark">
        <div class="container mt-5" style="margin: 158px 48px;">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="content-box">
                        

                        <h1>Advance Lesson 3 Quiz :  MCQ Test</h1>
 
<div class="question" id="question1">
    <p>What is the primary goal when providing first aid for a suspected fracture?</p>
    <button class="answer-button" data-correct="Immobilize the injured area" onclick="checkAnswer(this)">Reduce swelling</button>
    <button class="answer-button" data-correct="Immobilize the injured area" onclick="checkAnswer(this)">Immobilize the injured area</button>
    <button class="answer-button" data-correct="Immobilize the injured area" onclick="checkAnswer(this)">Administer pain medication</button>
    <button class="answer-button" data-correct="Immobilize the injured area" onclick="checkAnswer(this)">Clean the wound</button>
</div>

<div class="question" id="question2">
    <p>Which of the following is a common sign of a fracture?</p>
    <button class="answer-button" data-correct="Visible bone protrusion" onclick="checkAnswer(this)">Warmth around the injury</button>
    <button class="answer-button" data-correct="Visible bone protrusion" onclick="checkAnswer(this)">Redness of the skin</button>
    <button class="answer-button" data-correct="Visible bone protrusion" onclick="checkAnswer(this)">Visible bone protrusion</button>
    <button class="answer-button" data-correct="Visible bone protrusion" onclick="checkAnswer(this)">Tingling sensation in the fingers</button>
</div>

<div class="question" id="question3">
    <p>What is the recommended method for immobilizing a suspected broken arm?</p>
    <button class="answer-button" data-correct="Splint the arm to prevent movement" onclick="checkAnswer(this)">Apply a tight bandage around the arm</button>
    <button class="answer-button" data-correct="Splint the arm to prevent movement" onclick="checkAnswer(this)">Keep the arm elevated above the heart</button>
    <button class="answer-button" data-correct="Splint the arm to prevent movement" onclick="checkAnswer(this)">Splint the arm to prevent movement</button>
    <button class="answer-button" data-correct="Splint the arm to prevent movement" onclick="checkAnswer(this)">Massage the injured area to relieve pain</button>
</div>


<button class="btn btn-outline-primary mt-3" onclick="showCorrect()">Submit</button>

<div class="correct-answers mt-5" style="display: none;">
    <p>Result = <span id="correct-count">0</span> out of <span
            id="total-questions">3</span>.</p>
    <p>Correct Answers:</p>
    <ul id="incorrect-answers-list"></ul>
</div>

<script>
    let correctCount = 0;
    let totalQuestions = 3;
    let wrongAnswers = [];

    function checkAnswer(button) {
        var correctAnswer = button.getAttribute('data-correct');

        if (button.textContent === correctAnswer) {
            button.classList.add('correct');
            correctCount++;
        } else {
            button.classList.add('wrong');
            wrongAnswers.push(button.parentNode.querySelector('[data-correct]').textContent);
        }
        button.disabled = true; 
    }

    function showCorrect() {
        document.querySelector('.correct-answers').style.display = 'block';
        document.querySelector('#correct-count').innerText = correctCount;

        
        let wrongAnswersList = document.getElementById('incorrect-answers-list');
        wrongAnswers.forEach(answer => {
            let li = document.createElement('li');
            li.textContent = answer;
            wrongAnswersList.appendChild(li);
        });
    }
</script>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 iFirstAid. All Rights Reserved.Bangladesh Health Call Centre 16263.</p>
            <p>Contact: 688 Beribadh Road Mohammadpur Dhaka - 1207, Bangladesh</p>
            <p>Email: tasfia.tabassum.cse@ulab.edu.bd</p>
            <p>nafisa.mahira.cse@ulab.edu.bd</p>
        </div>
    </footer>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
