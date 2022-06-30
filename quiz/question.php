<?php include 'database.php'; ?>
 <?php
     $number = (int) $_GET['n'];
     
     $query = "SELECT * FROM `questions`";
     $results = $conn->query($query) or die($conn->error.__LINE__);
     $total = $results->num_rows;

     $query = "SELECT * FROM `questions`
                  WHERE question_number = $number";
     $result = $conn->query($query) or die($conn->error.__LINE__);
     $question = $result->fetch_assoc();

     $query = "SELECT * FROM `choix`
                   WHERE question_number = $number";
     $choices = $conn->query($query) or die($conn->error.__LINE__);
     
 ?>
<html>
    <head>
       <meta charset="utf-8">
       <title>PHP Quizzer</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body style=' background-image: url(https://media.istockphoto.com/photos/gray-mottled-background-abstract-wallpaper-pattern-picture-id1137984555?k=20&m=1137984555&s=612x612&w=0&h=Uhx_b_XIydCT3IJftG5R-uv81vJ8WczjLG5OnxAAL8k=);
;' class="text-center>
<?php include 'navbar_quiz.php'; ?>
        <header>
            <div class="container">
                <h1> Quizzer</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
                <p class="question">
                    <?php echo $question['text']; ?>
                </p>
                <form method="post" action="process.php">
                    <ul class="choices">
                        <?php while($row = $choices->fetch_assoc()):?>
                            <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /> <?php echo $row['text']; ?> </li>
                        <?php endwhile; ?>    
                    </ul>    
                    <input type="submit" value="submit"/>
                    <input type="hidden" name="number" value="<?php echo $number; ?>"/>
                </form>    
            </div>
        </main>
        <footer>
            <div class="container">
                copyright &copy; 2022, PHP Quizzer
            </div>
        </footer>  
    </body>
</html>