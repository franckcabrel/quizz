<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>create an account</title>
</head>
<body>
    <style>
        body {
background-image: url(https://media.istockphoto.com/photos/gray-mottled-background-abstract-wallpaper-pattern-picture-id1137984555?k=20&m=1137984555&s=612x612&w=0&h=Uhx_b_XIydCT3IJftG5R-uv81vJ8WczjLG5OnxAAL8k=);
font-family: Montserrat, "sans-serif";
display: flex;
justify-content: center;
}

.contactez-nous {
width: 700px;
border: 1px solid;
border-radius: 8px;
padding: 0 50px 0 50px;
background: white;
}

.contactez-nous > h1 {
font-weight: 500;
}

.contactez-nous > p {
font-weight: 300;
}

form div {
width: 100%;
display: flex;
flex-direction: column;
min-height: 83px;
margin-top: 25px;
}

form div > label {
margin-bottom: 7px;
font-weight: 600;
}

form div > input, form div > select, form div > textarea {
background: rgb(168, 204, 240);
border: none;
border-radius: 5px;
font-size: 16px;
font-weight: 500;
font-family: Montserrat, "sans-serif";
box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.25);
}

form div > input, form div > select {
height: 50px;
padding-left: 10px;
}



form div > textarea {
height: 195px;
padding: 15px 0px 0px 10px;
}

form div > input::placeholder, form div > textarea::placeholder {
color: white;
}

form div > select:invalid {
color: white;
}

form div > select option {
background: white;
color: #303030;
}

form div:last-child {
align-items:center;
margin-top: 20px;
}


        </style>
<div class="contactez-nous">
<h1>Nouveau quizz</h1>
<p>entrez le titre du Nouveau quizz </p>
<form action="traitement" method="post">
<div>
<label for="titre">titre</label>
<input type="text" id="titre" name="titre" placeholder="titre" required>
</div>
<div>
<label for="nom">difficulte</label>
<input type="text" id="difficulte" name="difficulte" placeholder="difficulte" required>
</div>

<div>
    <button type="submit" value="envoyer">Enregistrer</button> &emsp;
</div>
<div>
<button value="Liste des quizz" onclick="window.location.href='list_quiz.php'">Liste des quizz</button>
            </div>
</form>
</div>
</body>
</html> 

