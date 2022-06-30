<?php include 'database.php'; ?>
<?php 
    if(isset($_POST['submit'])){
        $question_number = $_POST['question_number'];
        $question_text = $_POST['question_text'];
        $correct_choice = $_POST['correct_choice'];

        $choices = array();
        $choices[1] = $_POST['choice1'];
        $choices[2] = $_POST['choice2'];
        $choices[3] = $_POST['choice3'];
        $choices[4] = $_POST['choice4'];
        $choices[5] = $_POST['choice5'];

        $query = "INSERT INTO `questions` (question_number, text) VALUES('$question_number','$question_text')";

        $insert_row = $conn->query($query) or die($conn->error.__LINE__);

        if($insert_row) {
            foreach ($choices as $choice => $value) {
                if ($value != '') {
                    if ($correct_choice == $choice) {
                        $is_correct = 1;
                    } else {
                        $is_correct = 0;
                    }
                    //Choice Query
                    $query = "INSERT INTO `choix`(question_number,is_correct,text) VALUES('$question_number','$is_correct',
                                 '$value')";
                    //insert row
                    $insert_row = $conn->query($query) or die($conn->error.__LINE__);
                    if ($insert_row) {
                        continue;
                    } else {
                        die($conn->error);
                        }   
                }
    
            }
            $msg = 'question has been added';
        }
               
    }
    
    $query = "SELECT * FROM `questions`";
    $questions = $conn->query($query) or die($conn->error.__LINE__);
    $total = $questions->num_rows;
    $next = $total+1;
?>
    <html>
    <head>
       <meta charset="utf-8">
       <title>PHP Quizzer</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body style=" background-image: url(https://media.istockphoto.com/photos/gray-mottled-background-abstract-wallpaper-pattern-picture-id1137984555?k=20&m=1137984555&s=612x612&w=0&h=Uhx_b_XIydCT3IJftG5R-uv81vJ8WczjLG5OnxAAL8k=);">
       
    <header>
            <div class="container">
                <h1> <a href="list_quiz.php">Liste de quizz</a></h1>
            </div>
        </header>
        <main>
            <div class="container">
                 <h2>Add A question</h2>
                 <?php
                    if(isset($msg)){
                        echo '<p>'.$msg.'</p>';
                    }
                 ?>
                 <form method="post" action="add.php">
                     <p>
                         <label>question Number</label>
                         <input type="number" value="<?php echo $next; ?>" name="question_number"/>
                     </p>
                     <p>
                         <label>question text</label>
                         <input type="text" name="question_text"/>
                     </p>
                     <p>
                         <label>Choice #1:</label>
                         <input type="text" name="choice1"/>
                     </p>
                     <p>
                         <label>Choice #2:</label>
                         <input type="text" name="choice2"/>
                     </p>
                     <p>
                         <label>Choice #3:</label>
                         <input type="text" name="choice3"/>
                     </p>
                     <p>
                         <label>Choice #4:</label>
                         <input type="text" name="choice4"/>
                     </p>
                     <p>
                         <label>Choice #5:</label>
                         <input type="text" name="choice5"/>
                     </p>
                     <p>
                         <label>Correct choice number: </label>
                         <input type="number" name="correct_choice"/>
                     </p>
                     <p>
                     <input type="submit" name="submit" value="submit"/>
                     </p>
                 </form >      
            </div>
        </main>
        <footer>
            <div class="container">
                copyright &copy; 2022, PHP Quizzer
            </div>
        </footer>  
    </body>
</html>