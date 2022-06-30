<?php include 'database.php'; ?>
 <?php
  $query = "SELECT * FROM `quizz`";
  $result = $conn->query($query) or die($conn->error.__LINE__);
  $total = $result->num_rows;
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="syt.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
    <title>Liste des quizz</title><br>

    <style>
		th,td { padding:0.7em; text-align: center; }
	</style>


</head>
<body style=" background-image: url(https://media.istockphoto.com/photos/gray-mottled-background-abstract-wallpaper-pattern-picture-id1137984555?k=20&m=1137984555&s=612x612&w=0&h=Uhx_b_XIydCT3IJftG5R-uv81vJ8WczjLG5OnxAAL8k=);">
<nav class="navbar navbar-expand-lg navbar-light bg-nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">QUIZZEO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="quizzer.php">Home</a>
        </li>
      </ul>
      <span class="navbar-text">
      <a href='deco.php'> logout </a>
      </span>
    </div>
  </div>
</nav>
    <center>
        <h1 style="font-family: script;" > LISTE DES QUIZZ</h1> <br>
    </center>

<table class="table" >
<tr>
        <th scope="col">id</th>
        <th scope="col">titre</th>
        <th scope="col">difficulte</th>
        <th scope="col">start</th>
        <th scope="col">supprimer</th>
        <th scope="col">modifier</th>
    </tr>
    <tr>
       <?php while ($quiz = $result->fetch_array()) {
        echo "<tr>
                 <th>$quiz[id]</th>
                 <td>$quiz[titre]</td>
                 <td>$quiz[difficulte]</td>
                 <td><a href='question.php?n=1'> start </a></td>
                 <td><a href='supp.php'>supprimer</a></td>
                 <td><a href='modif.php'>modifier</a></td>
                 </tr>";

       } ?>
</tr>

        </table>
        <input type="button" style="margin-left: 3%;" value="Ajouter" onclick="window.location.href='ajout_quiz.php'"></button><br>
</body>
</html>

