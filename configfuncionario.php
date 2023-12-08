<?php
    //declarando as variáveis para conexão
    $servername = "localhost";
    $database = "le_perle_noire";
    $username = "root";
    $password = "";

    //criando conexão
    $conexao = mysqli_connect($servername, $username, $password, $database);

    //Checando a conexão
    if (!$conexao) {
        die("Falha na conexão " . mysqli_connect_error());
    }

    //echo "Conectado com sucesso. <br><br>";
?>