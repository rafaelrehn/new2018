<?php
	require 'php/connection.php';



$usuario = $_POST['usuario'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$result_recado="INSERT INTO mensagens (name, email, texto, created) VALUES ('$usuario','$email','$comment', NOW())";
$resultado_recados = mysqli_query($conn,$result_recado);

header("location: index.php#contact");


?>