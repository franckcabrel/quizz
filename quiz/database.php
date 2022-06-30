<?php 
session_start();
$conn = new mysqli("localhost:3307", "root", "", "quiz");
$conn->set_charset("utf8");

?>