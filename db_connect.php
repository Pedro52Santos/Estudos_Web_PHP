<?php 
//Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "1234";
$db_name = "vaivem";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "Erro de conexão".mysqli_connect_error();
else: 
    echo "sucesso";
endif;

?>