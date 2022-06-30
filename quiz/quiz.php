
 <?php include 'database.php'; ?>
 <?php
  $query = "SELECT * FROM `questions`";
  $result = $conn->query($query) or die($conn->error.__LINE__);
  $total = $result->num_rows;
 ?>
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
                <h1>Quizzer</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <h2>Test Your Knowledge</h2> 
                <p>this is a multiple choice quiz to test your knowledge</p>
                <ul>
                    <li><strong>Number of Questions: </strong><?php echo $total; ?></li>
                    <li><strong>Titre: </strong>Etude en php</li>
                    <li><strong>Time: </strong><?php echo $total * .5; ?>Minutes</li>
                </ul>
                <a href="question.php?n=1" class="start"> start quiz</a>
            </div>
        </main>
    </body>
</html>