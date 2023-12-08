<!DOCTYPE html>
<html lang="pt-br">

       <head>

       <meta charset="utf-8">
       <title> PHP </title>

       </head>

       <body>

              <a href="criarconta.html"> Cadastro </a> - <a href="listar.php"> Listar </a> - <a href="alterar.php">Alterar 1 </a> - <a
              href="alterar2.php"> Alterar 2</a> - <a href="excluir.php"> Excluir </a> <br>
              <hr>

              <?php

                     include('config.php');
                     
                     $conexao = mysqli_connect('localhost', 'root', '', 'le_perle_noire');

                     $resultado = mysqli_query($conexao,"select * from cliente");

                     echo "\n";
                     //Enquanto existir linhas resultantes da consulta realizada, serão exibidos os dados no navegador, acessando os
                     //respectivos campos da tabela 
                     while ($linha = mysqli_fetch_array ($resultado)) {
                            echo $linha["nome"] . "<br>";
                            echo $linha["cpf"] . "<br>"; 
                            echo $linha["email"] . "<br>";
                            echo $linha["senha"] . "<br>";
                            echo "<hr>\n";
                     }
                     echo "\n";
                     mysqli_close($conexao);

              ?>

       </body>

</html>