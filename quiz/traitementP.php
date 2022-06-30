<?php
        session_start();
        // Création de la connexion
        $conn = new mysqli("localhost:3307", "root", "", "quiz");
        //$id = $_POST['id'];
        $pseudo = $_POST['pseudo'];
        $mail = $_POST['email'];
        $password = $_POST['password'];
        $nmdp = $_POST['nmdp'];

        $requet = "SELECT * FROM `user` WHERE `email` ='".$mail."'";
        $result=$conn->query($requet);
        if ($result->num_rows!=0) {
                header('Location: inscription.php?erreur=1');
            }
            elseif ($nmdp!==$password) {
                header('Location: inscription.php?erreur=2');
            }
            else{
            $req = "INSERT INTO `user`(`pseudo`,`email`, `password`) VALUES ('".$_POST['pseudo']."', '".$_POST['email']."','".$_POST['password']."')";
            $res=$conn->query($req);
            header('location:./connexion_user.php');
            }
    ?>