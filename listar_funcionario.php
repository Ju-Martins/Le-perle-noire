<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title> PHP</title>
</head>

<body>
       <a href="funcionario.html"> Cadastro </a> 
       <hr>
       <?php
              include('configfuncionario.php');

              $resultado = mysqli_query($conexao,"select * from funcionarios");

              echo "\n";
              //Enquanto existir linhas resultantes da consulta realizada, serão exibidos os dados no navegador, acessando os
              //respectivos campos da tabela 
              while ($linha = mysqli_fetch_array ($resultado)) {
                     echo $linha["nome"] . "<br>";
                     echo $linha["cpf"] . "<br>"; 
                     echo $linha["data_admissao"] . "<br>";
                     echo $linha["cargo"] . "<br>";
                     echo $linha["escala"] . "<br>";
                     
                     echo "<hr>\n";
              }
              echo "\n";
              mysqli_close($conexao);
       ?>
</body>
</html>

