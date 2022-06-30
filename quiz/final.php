<?php include 'database.php'; ?>
<!DOCTYPE html>
    <html>
    <head>
       <meta charset="utf-8">
       <title>PHP Quizzer</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body style=' background-image: url(https://media.istockphoto.com/photos/gray-mottled-background-abstract-wallpaper-pattern-picture-id1137984555?k=20&m=1137984555&s=612x612&w=0&h=Uhx_b_XIydCT3IJftG5R-uv81vJ8WczjLG5OnxAAL8k=);
;' class="text-center">
    <?php include 'navbar_quiz.php'; ?>
        <header>
            <div class="container">
                <h1>PHP Quizzer</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <h2>You're done!</h2>
                    <p>congrats! you have completed the test</p>
                    <p>Final score: <?php echo $_SESSION['score']; ?> </p>
                    <a href="quiz.php" class="start">End</a>
            </div>
        </main>
        <footer>
            <div class="container">
                copyright &copy; 2022, PHP Quizzer
            </div>
        </footer>  
    </body>
</html>