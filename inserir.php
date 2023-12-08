<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <title> PHP </title>

    </head>

    <body>

        <?php

            //Através do método get, conseguimos capturar os dados dos campos do formulário e armazenar em variáveis locais
            //que serão usadas para compôr a instrução SQL e assim os dados serão armazenados no banco de dados.
            $data = $_GET["data"];
            $horario = $_GET["horario"];
            $quantidade_pessoas = $_GET["quantidade_pessoas"];
            $numero_mesa = $_GET ["numero_mesa"];
            $obs =$_GET ["obs"];

            //Aqui armazenamos em uma variável, uma string que representa a instrução para inserir os dados no banco de dados.
            $instrucao = "insert into reserva_de_mesas (data, horario, quantidade_pessoas, numero_mesa, obs) values ('" . $data . "', '" . $horario . "' , " . $quantidade_pessoas .", " . $numero_mesa . ", '" . $obs . "')";
            
            //Nesta linha teremos apenas uma exibição da tela, se como ficou montada a string.
            echo $instrucao;

            //a variável conexão é responsável pela conexão com o banco de dados. Através da função mysqli_connect, é criado um objeto de conexão,
            //onde devemos informar 4 parâmetros: servidor, usuário, senha e database.
            $conexao = mysqli_connect('localhost', 'root', '', 'le_perle_noire');

            //para executar a instrução SQL, a função mysqli_query deve ser chamada, passando como parâmetro a variável de conexão e a instrução SQL,
            mysqli_query($conexao, $instrucao);

            //Após realizada a instrução, podemos fechar a conexao com o banco de dados, por meio da função msqli_close
            mysqli_close($conexao);
        ?>
        
        <br><br>
        <a href="listar.php"> LISTAR </a>

    </body>

</html>