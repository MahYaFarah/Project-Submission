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

    <?php
    
    require_once 'Page.php';

    
    $coursePage = new CoursePage();

   
    $coursePage->renderNavbar();
    ?>

    <?php
    
    $coursePage->renderCourseSection();
    ?>

   
    <?php
    
    $coursePage->renderFooter();
    ?>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        function redirectTo(level) {
            
            if (level === 'beginner') {
                window.location.href = 'beginner.php';
            } else if (level === 'advance') {
                window.location.href = 'advance.php';
            }
        }
    </script>
</body>

</html>
