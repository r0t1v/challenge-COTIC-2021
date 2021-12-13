<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="desafio";
// cria a conexão
$conn = new mysqli($servername,$username,$password,$db);
// verifica se tem conexão
if ($conn->connect_error) {
	$resultconn = "<span style='color: #e84118'>Não conectado!</span>";
}
else{
	$resultconn = "<span style='color: #4cd137'>Conectado!</span>";
}
?>