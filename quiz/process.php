<?php include 'database.php'; ?>
<?php
         if(!isset($_SESSION['score'])){
        $_SESSION['score'] = 0;
         }
    if($_POST){
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];
    
        $next = $number+1;
        
        $query = "SELECT * FROM `questions`";
        $results = $conn->query($query) or die($conn->error.__LINE__);
        $total = $results->num_rows;


        $query = "SELECT * FROM `choix`
                     WHERE question_number = $number AND is_correct = 1";

        $result = $conn->query($query) or die($conn->error.__LINE__);        
        $row = $result->fetch_assoc();
        $correct_choice = $row['id'];
        if($correct_choice == $selected_choice){
            $_SESSION['score']++;
        }

        if($number == $total){
            header("location: final.php");
            exit();
        } else{
            header("location: question.php?n=".$next);
        }
    }