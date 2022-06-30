<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZZEO</title>
</head>
<body>
<?php include 'navbar_index.php'; ?>
    <br><br>
   <center> <img src="image/imagequizz.jpg" alt=""></center>
    <h3> Bienvenu sur <strong>QUIZZEO</strong>, un site ou vous pourrez vous divertir a travers les differents quizz mis a votre disposition!</h3>
    <form class="container" method="POST">
        <style>
                th,td { padding:0.7em; text-align: center; }
            </style>
        <table>
 <tr>
    <div>
       <th> <h4>login as user</h4></th>
    </div>
    <div>
      <th>  <h4>login as quizzer</h4> </th>
    </div>
    <div>
       <th> <h4>login as administrator</h4> </th>
    </div>
</tr>
<tr>

   <th><input type="button" style="margin-left: 3%;" value="click here" onclick="window.location.href='connexion_user.php'"></button><br></th>
    <td><input type="button" style="margin-left: 3%;" value="click here" onclick="window.location.href='connexion_quiz.php'"></button><br></td>
    <td><input type="button" style="margin-left: 3%;" value="click here" onclick="window.location.href='connexion_admi.php'"></button><br></td>
</tr>    
    </table>
    </form>
</body>
</html>

