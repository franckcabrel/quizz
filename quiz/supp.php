<?php include 'database.php'; ?>
 <?php
  $query = "DELETE FROM `quizz` WHERE `id` = 4";
  $result = $conn->query($query) or die($conn->error.__LINE__);
  header('location:./list_quiz.php');
 ?>
