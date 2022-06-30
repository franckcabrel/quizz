<?php
session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = "";
    $db_name     = 'quiz';
    $db_host     = 'localhost:3307';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS 
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if( $username !== "" && $password !== "")
    {
        $requete = "SELECT count(*), pseudo FROM user where 
             email = '".$username."' and password = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['email'] = $username;
           $_SESSION['pseudo']= $reponse['pseudo'];
           header('Location: administrateur.php');
        }
        else
        {
           header('Location: connexion_admi.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: connexion_admi.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: principale.php');
}
mysqli_close($db); // fermer la connexion
?>