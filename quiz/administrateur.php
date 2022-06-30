<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="page.css">
    <title>Document</title>
    <link rel="stylesheet" href="syt.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body style=' background-image: url(https://img.freepik.com/psd-gratuit/toile-fond-du-produit-psd-style-moderne-podium-marbre-feuille-palmier-or_53876-140457.jpg?w=2000);
;' class="text-center">
<nav class="navbar navbar-expand-lg navbar-light bg-nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">QUIZZEO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="administrateur.php">Home</a>
        </li>
      </ul>
      <span class="navbar-text">
      <a href='deco.php'> logout </a>
      </span>
    </div>
  </div>
</nav>
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Administrateur</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          </div>
        </div>
      </nav>
    
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                $conn = new mysqli("localhost:3307", "root", "", "quiz");
                $sql = "SELECT pseudo FROM user ";
                $res=$conn->query($sql);
                if(($_SESSION['email'] !== "")){
                    $user = $_SESSION['email'];?>
                    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading" style="color:#5361af;"><?php echo "Bienvenue Mme,Mr" ." " .$_SESSION['pseudo'] ?></h1>
    <p class="lead" style="color:dimgray;">Consulter ici vos informations</p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
    </div>
  </footer>
</div> 
        <?php }
            ?>
            
        </div>
    <section>
    <ul style="display:flex; ">
 <li class="franck">   <div class="card" style="width: 18rem; margin-left: 20px;">
        <img src="https://www.lenounou.fr/wp-content/uploads/2020/11/quizz.jpg">
        <div class="card-body">
          <h5 class="card-title">Liste des Quizz </h5>
          <p class="card-text">Vous retrouverez ici la liste des differents quizz disponible sur le site.</p>
          <a href="list.quiz.php" class="btn btn-primary stretched-link">voir plus</a>
        </div>
        </div>
</li>

 <li class="franck">  <div class="card" style="width: 18rem;">
        <img src="https://img.freepik.com/vecteurs-libre/logo-quiz-symbole-icone-questionnaire-sondage_101884-1076.jpg?w=2000" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Liste des quizzeurs</h5>
          <p class="card-text">Vous retrouverez ici la Liste des differents quizzeurs</p>
          <a href="list_quizzeur.php" class="btn btn-primary stretched-link">voir plus</a>
        </div>
      </div>
</li>   

<li class="franck">     <div class="card" style="width: 18rem;">
        <img src="https://static.vecteezy.com/ti/vecteur-libre/p1/379162-ajouter-un-utilisateur-vector-icon-gratuit-vectoriel.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Liste des utilisateurs</h5>
          <p class="card-text">Vous retrouverez ici la Liste des differents utilisateurs</p>
          <a href="list.user.php" class="btn btn-primary stretched-link">voir plus</a>
        </div>
      </div>
</li>


</ul>    
    </section> 
   

</body>
</html>