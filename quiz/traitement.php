<?php include 'database.php'; ?>
<?php
        
            $req = "INSERT INTO `quizz`(`titre`,`difficulte`) VALUES ('".$_POST['titre']."', '".$_POST['difficulte']."')";
            $res=$conn->query($req);
            header('location:./add.php');
    ?>