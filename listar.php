<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title> PHP</title>
</head>

<body>
       <?php
              $conexao = mysqli_connect('localhost', 'root', '', 'le_perle_noire');

              $resultado = mysqli_query($conexao,"select * from reserva_de_mesas");

              echo "\n";
              //Enquanto existir linhas resultantes da consulta realizada, serão exibidos os dados no navegador, acessando os
              //respectivos campos da tabela 
              while ($linha = mysqli_fetch_array ($resultado)) {
                     echo $linha["data"] . "<br>";
                     echo $linha["horario"] . "<br>"; 
                     echo $linha["quantidade_pessoas"] . "<br>";
                     echo $linha["numero_mesa"] . "<br>";
                     echo $linha["obs"] . "<br>";
                     echo "<hr>\n";
              }
              echo "\n";
              mysqli_close($conexao);
       ?>
</body>
</html>