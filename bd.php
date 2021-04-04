<?php 

$servername = "localhost";
$username = "root";
$password = "";
$nome = "eco";


$conn = new mysqli($servername, $username, $password, $nome)or die(mysqli_error($conn));